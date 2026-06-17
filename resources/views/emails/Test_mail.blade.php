<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body style="margin:0; padding:0; background:#f5f7fa; font-family: Arial, Helvetica, sans-serif;">

<table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#f5f7fa; padding:40px 15px;">
    <tr>
        <td align="center">

            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0"
                   style="max-width:700px; background:#ffffff; border-radius:8px; overflow:hidden;">

                <tr>
                    <td align="center" style="padding:30px 20px; background:#ffffff; border-bottom:1px solid #eeeeee;">

                        <img src="{{ url('theme-assets/img/green-lhakpa.png') }}"
                             alt="Lhakpa Trekking"
                             style="max-width:180px; width:100%; height:auto;">

                    </td>
                </tr>

                <tr>
                    <td style="padding:40px 30px; color:#333333; font-size:16px; line-height:1.7;">

                        {!! $content !!}

                    </td>
                </tr>

                <tr>
                    <td style="padding:25px 30px; background:#f8f9fb; border-top:1px solid #eeeeee;">

                        <p style="margin:0 0 10px; color:#333333; font-size:16px;">
                            Thank you,
                        </p>

                        <p style="margin:0; color:#666666; font-size:14px;">
                            Lhakpa Trekking<br>
                            Kathmandu, Nepal
                        </p>

                    </td>
                </tr>

            </table>

        </td>
    </tr>
</table>

</body>
</html>
