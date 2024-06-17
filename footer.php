<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .content {
            flex: 1;
        }
        .footer {
            background-color: #007bff; /* Bootstrap primary color */
            color: white; /* White text color */
            padding: 20px 0; /* Padding for top and bottom */
            text-align: center;
            width: 100%;
            position: fixed;
            bottom: 0;
            left: 0;
        }
        .text-muted {
            color: rgba(255, 255, 255, 0.7) !important; /* Muted white color */
        }
    </style>
</head>
<body>
    <div class="content">
        
    </div>

    <footer class="footer">
        <div class="container text-center">
            <span class="text-muted">
                <i class="fas fa-palette"></i> ALİ OSMAN ŞİMŞEK TARAFINDAN TASARLANMIŞTIR...
            </span>
        </div>
    </footer>
</body>
</html>
