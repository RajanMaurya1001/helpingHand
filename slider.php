<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Delicious Slider</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .slider {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 100vh;
        }

        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            animation: fadeZoom 12s infinite;
            background-size: cover;
            background-position: center center;
        }

        .slide:nth-child(1) {
            background-image: url('assets/images/pic03.jpg');
            animation-delay: 0s;
        }

        .slide:nth-child(2) {
            background-image: url('assets/images/pic04.jpg');
            animation-delay: 4s;
        }

        .slide:nth-child(3) {
            background-image: url('assets/images/ChatGPT Image Jun 11, 2025, 06_06_55 PM.png');
            animation-delay: 8s;
        }

        @keyframes fadeZoom {
            0% {
                opacity: 0;
                transform: scale(1.1);
            }

            8% {
                opacity: 1;
                transform: scale(1);
            }

            25% {
                opacity: 1;
                transform: scale(1);
            }

            33% {
                opacity: 0;
                transform: scale(1.1);
            }

            100% {
                opacity: 0;
            }
        }

        .caption {
            position: absolute;
            bottom: 20%;
            left: 10%;
            color: #fff;
            font-size: 2.5rem;
            animation: fadeInUp 1s ease-out both;
            animation-delay: 1s;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.5);
        }

        .caption a {
            display: inline-block;
            margin-top: 1rem;
            background: #ff5722;
            padding: 0.8rem 2rem;
            color: #fff;
            text-decoration: none;
            border-radius: 50px;
            font-size: 1rem;
            animation: fadeInUp 1s ease-out both;
            animation-delay: 1.5s;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

    <div class="slider">
        <div class="slide">
            <div class="caption">
                Delicious Chocolate Treats<br>
                <a href="#">Shop Now</a>
            </div>
        </div>
        <div class="slide">
            <div class="caption">
                Fruity Sensations<br>
                <a href="#">Taste Now</a>
            </div>
        </div>
        <div class="slide">
            <div class="caption">
                Go Nuts with Donuts<br>
                <a href="">Order Now</a>
            </div>
        </div>
    </div>

</body>

</html>