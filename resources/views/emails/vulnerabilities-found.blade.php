<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Vulnerability Alert</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            padding: 20px 0;
            background-color: #3758f9;
            color: #ffffff;
            border-radius: 8px 8px 0 0;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .content {
            margin: 20px 0;
            line-height: 1.6;
        }

        .content p {
            margin: 10px 0;
        }

        .content a {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            background-color: #3758f9;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
        }

        .footer {
            text-align: center;
            padding: 10px 0;
            font-size: 12px;
            color: #888888;
            border-top: 1px solid #dddddd;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Vulnerability Alert</h1>
    </div>
    <div class="content">
        <p>Dear {{ $project->user->name }},</p>
        <p>We have detected vulnerabilities in your project <strong>{{ $project->name }}</strong>.</p>
        <p>Please review the vulnerabilities and take the necessary actions to secure your project.</p>
        <p>You can view the details of the scan and the vulnerabilities found by clicking the link below:</p>
        <p><a href="{{ route('dashboard.projects.scans.show', ['project' => $project, 'scan' => $scan ]) }}"
              target="_blank">View Scan Details</a></p>
    </div>
    <div class="footer">
        <p>Thank you for using our service.</p>
        <p>&copy; {{ date('Y') }} CVEGuard. All rights reserved.</p>
    </div>
</div>
</body>
</html>
