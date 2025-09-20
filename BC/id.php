<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Simple ID Card</title>
    <style>
        body {
            background: #f1f1f1;
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        .id-card {
            width: 300px;
            height: 500px;
            background: #ffffff;
            border: 1px solid #ccc;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            font-family: Arial, sans-serif;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .header {
            background: #3498db;
            color: white;
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
        }



        .details {
            padding: 10px 20px;
            text-align: left;
            font-size: 14px;
        }

        .details p {
            margin: 6px 0;
            line-height: 1.4;
        }

        .qr-code {
            width: 200px;
            height: 200px;
            margin: 0 auto;
            background: url('https://api.qrserver.com/v1/create-qr-code/?size=100x100&data=EMP123') center/cover no-repeat;
        }

        .footer {
            background: #212529;
            color: #fff;
            padding: 10px;
            font-size: 13px;
        }
    </style>
</head>

<body>

    <div class="id-card">
        <div class="header">Helping Hand Foundation</div>

        <div class="qr-code"></div>

        <div class="footer">
            Helpline: 1800-123-456 | www.helpinghand.org
        </div>
    </div>

</body>

</html>