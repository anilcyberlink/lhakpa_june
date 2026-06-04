<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{{ $settings->site_name }}</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .btn {
            background:#1e88e5;
            color:#ffffff;
            padding:12px 20px;
            text-decoration:none;
            border-radius:4px;
            display:inline-block;
            margin-top:15px;
        }
    </style>
</head>

<body style="font-family: sans-serif">
    <div style="margin:0 auto; max-width:700px; width:100%;">

        <blockquote>
            <div style="background:#FFF; padding:8px 0px; margin-bottom:5px;">
                <img src="{{ asset('theme-assets/img/logo.png') }}" style="width: 25%" />
            </div>
        </blockquote>

        <div style="padding:20px; background:#ffffff; line-height:1.6;">

            <p>Dear {{ $booking->full_name ?? 'Valued Guest' }},</p>

            <p>
                Thank you for choosing <strong>{{ $settings->site_name }}</strong> for your recent adventure.
                We hope your journey on the <strong>{{ $booking->title }}</strong> was truly memorable and filled
                with amazing experiences.
            </p>

            <p>
                It was our pleasure to be part of your trek, and we sincerely hope that our guides, team,
                and services met your expectations.
            </p>

            <p>
                Your feedback means a great deal to us and helps us continually improve the quality of our trips.
                We would be grateful if you could take a few moments to share your experience with us by clicking
                the button below:
            </p>

            <p style="text-align:center; margin:25px 0;">
                <a href="{{ $feedbackUrl }}" class="btn" target="_blank">
                    Share Your Feedback
                </a>
            </p>

            <p>
                Once again, thank you for trekking with us. We truly value your trust and hope to welcome you
                again for another unforgettable adventure in the near future.
            </p>

            <p>
                Warm regards,<br>
                <strong>{{ $settings->site_name }}</strong>
            </p>

        </div>
    </div>
</body>
</html>
