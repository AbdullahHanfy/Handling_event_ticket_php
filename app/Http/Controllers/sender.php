<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

class sender extends Controller
{
    // UPDATE `subscribers` SET `status`=0 WHERE 1
    public function index(Request $request)
    {
       ini_set('memory_limit','-1');
       ini_set('max_execution_time', 0);
       $count = \Route::input('count',10);

       $results = Subscriber::where([['status','=',0],['email','!=','']])->limit($count)->get();

       if($results->count())
       {
           $send = null;
           foreach ($results as $row)
           {
               $row->update(['status' => 1]);
               \Mail::to(trim($row['email']))->send(new \App\Mail\ticket($row->toArray()));

               if(empty(\Mail::failures()))
               {
                   $row->update(['status' => 2]);
               }
               else
               {
                   Log::error("A problem occurred while sending the certificate for[$row->email]!<br>");
                   echo("A problem occurred while sending the certificate for[$row->email]!<br>");
               }
           }
       }
       else
       {
           dd("Cron {Subscribers} is [DONE]");
       }
       dd('Subscribers:Cron Cummand Run successfully!');
    }
}
