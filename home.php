<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Under Construction</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: linear-gradient(to bottom, #121212, #1c1c1c);
            font-family: 'Arial', sans-serif;
            color: white;
            text-align: center;
        }

        .title {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            font-weight: bold;
        }

        .message {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
            line-height: 1.5;
            padding: 0 1rem;
        }

        .progress-bar {
            width: 90%;
            max-width: 600px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            overflow: hidden;
            height: 20px;
            margin-bottom: 1.5rem;
        }

        .progress-bar-fill {
            width: 0%;
            background: #ffc107;
            height: 100%;
            animation: loading 3s linear infinite;
        }

        .time {
            font-size: 1.2rem;
            margin-top: 1rem;
            color: #ffc107;
            font-weight: bold;
            text-shadow: 0 0 5px #ffc107, 0 0 10px #ffcc00;
            animation: glow 1s infinite alternate;
        }

        @keyframes glow {
            0% {
                text-shadow: 0 0 5px #ffc107, 0 0 10px #ffcc00;
            }
            100% {
                text-shadow: 0 0 10px #ffc107, 0 0 20px #ffcc00;
            }
        }

        @keyframes loading {
            0% {
                width: 0%;
            }
            50% {
                width: 50%;
            }
            100% {
                width: 100%;
            }
        }

        @media (max-width: 768px) {
            .title {
                font-size: 2rem;
            }

            .message {
                font-size: 1rem;
            }
        }

        @media (max-width: 480px) {
            .title {
                font-size: 1.5rem;
            }

            .message {
                font-size: 0.9rem;
            }

            .progress-bar {
                height: 15px;
            }
        }
    </style>
    <script>
        function updateTime() {
            const timeElement = document.getElementById('time');
            const now = new Date();
            const options = { timeZone: 'Asia/Jakarta', hour12: false }; // WIB Time Zone
            const formattedTime = now.toLocaleTimeString('id-ID', options);
            timeElement.textContent = formattedTime;
        }

        setInterval(updateTime, 1000);
    </script>
</head>
<body>
    <h1 class="title">🚧 Under Construction 🚧</h1>
    <p class="message">We're working hard to bring you an amazing experience. Please check back soon!</p>
    <div class="progress-bar">
        <div class="progress-bar-fill"></div>
    </div>
    <p class="time"><span id="time"></span></p>
</body>
</html>
