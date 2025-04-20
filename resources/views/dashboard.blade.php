<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard</title>
    <style>
        body {
            background-color: #f5f6fc;
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }

        .card {
            display: flex;
            align-items: center;
            justify-content: space-around;
            background: white;
            margin: auto;
            padding: 30px;
            width: 600px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        .logo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #eee;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo img {
            width: 80px;
        }

        .content {
            text-align: left;
        }

        h2 {
            margin-bottom: 5px;
        }

        .highlight {
            color: #1a73e8;
        }

        .details {
            font-size: 14px;
            margin-top: 10px;
        }

        .details i {
            margin-right: 5px;
        }

        .bold {
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="logo">
        <img src="{{ asset('E:/xampp/htdocs/TPMODUL3_YUDHO/public/images/logo-ead.png') }}" alt="Logo" width="100" height="100">
        </div>
        <div class="content">
            <h2>Good Evening, <span class="highlight">EAD Students</span>!</h2>
            <p>Welcome to your Student Dashboard</p>
            <div class="details">
                <p><i>🕒</i> Access Time: <span class="bold">{{ $time }}</span></p>
                <p><i>📅</i> Access Date: <span class="bold">{{ $date }}</span></p>
            </div>
        </div>
    </div>

</body>
</html>
