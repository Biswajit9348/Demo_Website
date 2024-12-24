<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            padding-top: 60px;
        }
        :root {
            scroll-padding-top: 70px; /* Match the header-placeholder height */
        }

        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Section Layout */
        .image-text-section {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            min-height: 100vh;
            padding: 40px;
            gap: 20px;
        }

        .image-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
            object-fit: cover;
        }

        .text-container {
            flex: 1;
            padding: 20px;
            text-align: left;
        }

        .text-container h1 {
            font-size: 4vw; /* Relative to the viewport width */
            color: #333333;
            margin-bottom: 20px;
        }

        .text-container p {
            font-size: 1.5vw;
            color: #666666;
            margin-bottom: 30px;
            line-height: 1.8;
        }

        .explore-button {
            display: inline-block;
            padding: 14px 28px;
            font-size: 1rem;
            color: #ffffff;
            background-color: #00BF63;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .explore-button:hover {
            background-color: #00BF63;
            transform: scale(1.1);
        }

        .explore-button:active {
            background-color:#00BF63;
            transform: scale(0.95);
        }

        /* Box Section Styles */
        .box-section {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            justify-content: center;
            margin: 2rem 1rem;
        }

        .box {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 1rem;
            text-align: center;
            width: calc(20% - 1rem); /* Adjusts box size */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .box img {
            max-width: 100%;
            height: auto;
            margin-bottom: 1rem;
        }

        .box h3 {
            font-size: 1.2rem;
            margin: 0.5rem 0;
            color: #333;
        }

        .box p {
            font-size: 0.9rem;
            color: #666;
        }

        .box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .text-container {
                padding: 15px;
                text-align: center;
            }

            .image-text-section {
                flex-direction: column;
            }

            .text-container h1 {
                font-size: 5vw;
            }

            .text-container p {
                font-size: 1.2rem;
            }

            .box {
                width: calc(33.33% - 1rem);
            }
        }

        @media (max-width: 768px) {
            .text-container h1 {
                font-size: 6vw;
            }

            .text-container p {
                font-size: 1rem;
            }

            .explore-button {
                font-size: 1rem;
                padding: 12px 24px;
            }

            .box {
                width: calc(50% - 1rem);
            }
        }

        @media (max-width: 480px) {
            .image-container img {
                max-width: 90%;
                margin-bottom: 20px;
            }

            .text-container h1 {
                font-size: 7vw;
            }

            .text-container p {
                font-size: 0.95rem;
            }

            .explore-button {
                font-size: 0.9rem;
                padding: 10px 20px;
            }

            .box {
                width: calc(100% - 1rem);
            }
        }

        @media (max-width: 360px) {
            .text-container h1 {
                font-size: 8vw;
            }

            .text-container p {
                font-size: 0.85rem;
            }

            .explore-button {
                font-size: 0.85rem;
                padding: 8px 16px;
            }
        }
    </style>
</head>
<body>
  <div id="header-placeholder"></div>
    <section class="image-text-section">
        <div class="image-container">
            <img src="images/kisan.png" alt="Farmer">
        </div>

        <div class="text-container">
            <h1>Jai Kishan</h1>
            <p>
                Discover the pride of our farmers. Our journey connects the roots of agriculture 
                to every household with fresh, organic produce and heartfelt stories.
            </p>
            <a href="#box-section" class="explore-button">Learn More</a>
        </div>
    </section>

    <section class="box-section" id="box-section">
        <div class="box">
            <img src="images/F.jpg" alt="Placeholder Image">
            <h3>Box Title 1</h3>
            <p>Short description about this box content.</p>
        </div>
        <div class="box">
            <img src="images/A.jpg" alt="Placeholder Image">
            <h3>Box Title 2</h3>
            <p>Short description about this box content.</p>
        </div>
        <div class="box">
            <img src="images/D.jpg" alt="Placeholder Image">
            <h3>Box Title 3</h3>
            <p>Short description about this box content.</p>
        </div>
        <div class="box">
            <img src="images/H.jpg" alt="Placeholder Image">
            <h3>Box Title 4</h3>
            <p>Short description about this box content.</p>
        </div>
        <div class="box">
            <img src="images/B.jpg" alt="Placeholder Image">
            <h3>Box Title 5</h3>
            <p>Short description about this box content.</p>
        </div>
    </section>

    <!-- Footer will be loaded here -->
    <div id="footer-placeholder"></div>
    <script src="script.js"></script>
</body>
</html>
