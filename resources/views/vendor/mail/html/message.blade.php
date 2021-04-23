@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
    <table cellpadding="0" cellspacing="0" class="es-header" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top">
    <tr style="border-collapse:collapse">
        <td class="es-adaptive" align="center" style="padding:0;Margin:0">
            <table class="es-header-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#3D5CA3;width:600px" cellspacing="0" cellpadding="0" bgcolor="#3d5ca3" align="center">
                <tr style="border-collapse:collapse">
                    <td style="Margin:0;padding-top:20px;padding-bottom:20px;padding-left:20px;padding-right:20px;background-color:#0B5394" bgcolor="#0b5394" align="left">
                        <table cellspacing="0" cellpadding="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                            <tr style="border-collapse:collapse">
                                <td align="left" style="padding:0;Margin:0;width:560px">
                                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                        <tr style="border-collapse:collapse">
                                            <td class="es-m-p0l es-m-txt-c" align="center" style="padding:0;Margin:0;color:white;"><img src="https://scontent.fcai2-2.fna.fbcdn.net/v/t1.0-9/124250524_654834728510372_364565234603719115_o.jpg?_nc_cat=111&ccb=1-3&_nc_sid=09cbfe&_nc_eui2=AeHXCgb-y1DVJSySdoaRoXOUukvYrhXvTre6S9iuFe9OtygYM52JcbNV65cfKrp-vtosvgWM3zwS8uoQfDm5oLx1&_nc_ohc=D4cM2X3qGpcAX8ReKkC&_nc_ht=scontent.fcai2-2.fna&oh=dbaf167ff5fa70dcb3311232efae0802&oe=6079310D" alt style="border-radius:50px;display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic" width="88"> {{ config('app.name') }}</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>


@endcomponent
@endslot

{{-- Body --}}
@slot('body')
@endslot

{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
@endcomponent
@endslot
@endcomponent
