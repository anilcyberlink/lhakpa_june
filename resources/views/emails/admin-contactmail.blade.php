<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Contact Inquiry</title>
</head>

<body style="margin:0; padding:30px 15px; background-color:#f4f6f9; font-family:Arial, Helvetica, sans-serif; color:#333;">

    <div style="max-width:700px; margin:0 auto; background:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 2px 10px rgba(0,0,0,0.08);">

        <!-- Header -->
        <div style="padding:30px; text-align:center; border-bottom:1px solid #e5e7eb;">
            <img
                src="{{ asset('theme-assets/img/logo.png') }}"
                alt="{{ config('app.name') }}"
                style="max-width:180px; height:auto;"
            >

            <h2 style="margin:20px 0 0; color:#1f2937; font-size:24px;">
                New Contact Inquiry
            </h2>
        </div>

        <!-- Content -->
        <div style="padding:30px;">

            <p style="margin-top:0; margin-bottom:20px; color:#6b7280; line-height:1.6;">
                A new inquiry has been submitted through the contact form.
            </p>

            <table
                width="100%"
                cellpadding="0"
                cellspacing="0"
                style="border-collapse:collapse; border:1px solid #e5e7eb;"
            >
                <tr>
                    <td style="width:35%; padding:14px; background:#f9fafb; border-bottom:1px solid #e5e7eb; font-weight:600;">
                        Full Name
                    </td>
                    <td style="padding:14px; border-bottom:1px solid #e5e7eb;">
                        {{ $name ?? '-' }}
                    </td>
                </tr>

                <tr>
                    <td style="padding:14px; background:#f9fafb; border-bottom:1px solid #e5e7eb; font-weight:600;">
                        Email
                    </td>
                    <td style="padding:14px; border-bottom:1px solid #e5e7eb;">
                        <a style="color:#2563eb; text-decoration:none;">
                            {{ $mail ?? '-' }}
                        </a>
                    </td>
                </tr>

                <tr>
                    <td style="padding:14px; background:#f9fafb; border-bottom:1px solid #e5e7eb; font-weight:600;">
                        Phone
                    </td>
                    <td style="padding:14px; border-bottom:1px solid #e5e7eb;">
                        {{ $contact ?? '-' }}
                    </td>
                </tr>

                <tr>
                    <td style="padding:14px; background:#f9fafb; border-bottom:1px solid #e5e7eb; font-weight:600;">
                        Trip / Country of Interest
                    </td>
                    <td style="padding:14px; border-bottom:1px solid #e5e7eb;">
                        {{ $country ?? '-' }}
                    </td>
                </tr>

                <tr>
                    <td style="padding:14px; background:#f9fafb; font-weight:600; vertical-align:top;">
                        Message
                    </td>
                    <td style="padding:14px; line-height:1.7;">
                        {!! nl2br(e($messages ?? '-')) !!}
                    </td>
                </tr>
            </table>

        </div>

        <!-- Footer -->
        <div style="padding:20px 30px; background:#f9fafb; border-top:1px solid #e5e7eb; text-align:center; color:#6b7280; font-size:13px;">
            © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
        </div>

    </div>

</body>
</html>
