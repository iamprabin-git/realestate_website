<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Agent Request</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f4f4f4;">

    <table align="center" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse; background-color: #ffffff; margin-top: 30px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <tr>
            <td style="padding: 20px; background-color: #3498db; color: #ffffff; text-align: center;">
                <h2>New Agent Registration Request</h2>
            </td>
        </tr>

        <tr>
            <td style="padding: 20px;">
                <p>Dear Admin,</p>
                <p>You have received a new agent registration request. Here are the details:</p>

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
                        <td style="padding: 8px 0;"><strong>Phone:</strong></td>
                        <td>{{ $data['number'] }}</td>
                    </tr>
                </table>

                <p style="margin-top: 20px;">To review and respond to this request, please click the button below:</p>

                <p style="text-align: center; margin: 30px 0;">
                    <a href="{{ env('APP_URL') . '/admin' }}" style="background-color: #3498db; color: #ffffff; padding: 12px 24px; text-decoration: none; border-radius: 5px;">View Request</a>
                </p>

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
