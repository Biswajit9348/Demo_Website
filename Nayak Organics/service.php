<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Base Styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            padding-top: 70px;
            color: #333;
        }

        /* Service Section Styles */
        .services-section {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            text-align: center;
        }

        .services-section h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #4caf50;
        }

        .services-section p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            color: #555;
        }

        /* Service Cards Grid */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 0 10px;
        }

        .service-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: left;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }

        .service-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .service-card h3 {
            font-size: 1.5rem;
            margin: 15px 15px 10px;
            color: #4caf50;
        }

        .service-card p {
            font-size: 1rem;
            margin: 0 15px 15px;
            color: #555;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .services-section h1 {
                font-size: 2rem;
            }

            .services-section p {
                font-size: 1rem;
            }
        }

        @media (max-width: 480px) {
            .services-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div id="header-placeholder"></div>
    <main class="services-section">
        <h1>Our Services</h1>
        <p>We offer a wide range of organic farming services to meet your needs.</p>

        <!-- Services Grid -->
        <div class="services-grid">
            <!-- Service Card 1 -->
            <div class="service-card">
                <img src="images/K.jpg" alt="Service 1">
                <h3>Organic Farming</h3>
                <p>We grow high-quality organic vegetables with sustainable farming techniques.</p>
            </div>

            <!-- Service Card 2 -->
            <div class="service-card">
                <img src="images/I.jpg" alt="Service 2">
                <h3>Consultation</h3>
                <p>Get expert advice on starting and managing your organic farm effectively.</p>
            </div>

            <!-- Service Card 3 -->
            <div class="service-card">
                <img src="images/J.jpg" alt="Service 3">
                <h3>Produce Delivery</h3>
                <p>Fresh organic produce delivered straight to your doorstep every week.</p>
            </div>

            <!-- Service Card 4 -->
            <div class="service-card">
                <img src="images/G.jpg" alt="Service 4">
                <h3>Farm Visits</h3>
                <p>Experience the charm of our organic farms with guided tours and workshops.</p>
            </div>
        </div>
    </main>
    <!-- Footer will be loaded here -->
    <div id="footer-placeholder"></div>
    <script src="script.js"></script>
</body>
</html>
