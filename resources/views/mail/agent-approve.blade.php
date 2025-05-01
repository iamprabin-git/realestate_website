<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Agent Approved</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f7f7f7;">

    <table align="center" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse; background-color: #ffffff; margin-top: 30px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <tr>
            <td style="padding: 20px; background-color: #4CAF50; color: #ffffff; text-align: center;">
                <h1>Agent Approval Notification</h1>
            </td>
        </tr>

        <tr>
            <td style="padding: 20px;">
                <p>Dear <strong>{{ $data['name'] }}</strong>,</p>
                <p>🎉 Congratulations! Your agent registration request has been <strong>approved</strong>.</p>

                <table style="width: 100%; margin-top: 15px;">
                    <tr>
                        <td style="padding: 8px 0;"><strong>Name:</strong></td>
                        <td>{{ $data['name'] }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px 0;"><strong>Email:</strong></td>
                        <td>{{ $data['email'] }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px 0;"><strong>Password:</strong></td>
                        <td>{{ $data['password'] }}</td>
                    </tr>
                </table>

                <p style="margin-top: 20px;">
                    You can log in to your dashboard using the link below:
                </p>

                <p style="text-align: center; margin: 30px 0;">
                    <a href="{{ env('APP_URL') . '/agent' }}" style="background-color: #4CAF50; color: #ffffff; padding: 12px 20px; text-decoration: none; border-radius: 5px;">Login Here</a>
                </p>

                <p>If you have any questions, feel free to contact us:</p>
                <ul>
                    <li><strong>Phone:</strong> 9765726294</li>
                    <li><strong>Email:</strong> <a href="mailto:info.lelesastogharjaggakarobar@gmail.com">info.lelesastogharjaggakarobar@gmail.com</a></li>
                </ul>

                <p style="margin-top: 30px;">Thank you,<br>Lele sasto gharjagga karobar Team</p>
            </td>
        </tr>

        <tr>
            <td style="background-color: #f1f1f1; padding: 10px; text-align: center; font-size: 12px; color: #555;">
                &copy; {{ date('Y') }} lele sasto gharjagga karobar kendra. All rights reserved.
            </td>
        </tr>
    </table>

</body>
</html>
