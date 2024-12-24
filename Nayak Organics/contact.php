<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Base Styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            padding-top: 70px;
            background-color: #f8f8f8;
        }

        /* Contact Section Styles */
        .contact-section {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            text-align: center;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .contact-section h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #333;
        }

        .contact-section p {
            font-size: 1.2rem;
            margin-bottom: 20px;
            color: #555;
        }

        /* Contact Image */
        .contact-image {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        .contact-image img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Contact Form */
        .contact-container {
            display: flex;
            justify-content: center;
            padding: 0 10px; /* Prevent overflow on smaller screens */
        }

        .contact-form {
            width: 100%;
            max-width: 600px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            box-sizing: border-box; /* Ensure padding doesn't affect width */
        }

        .contact-form .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .contact-form label {
            display: block;
            font-size: 1rem;
            margin-bottom: 5px;
            color: #333;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            box-sizing: border-box; /* Prevent padding from causing overflow */
        }

        .contact-form textarea {
            resize: none;
        }

        .contact-form .btn {
            background-color: #00BF63;
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        .contact-form .btn:hover {
            background-color: #3e8e41;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .contact-section {
                margin: 20px;
                padding: 15px;
            }

            .contact-form {
                padding: 15px;
            }

            .contact-image img {
                max-width: 100%;
            }

            .contact-form .btn {
                padding: 12px;
            }
        }

        @media (max-width: 480px) {
            .contact-section h1 {
                font-size: 2rem;
            }

            .contact-section p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div id="header-placeholder"></div>
    <main class="contact-section">
        <h1>Contact Us</h1>
        <p>If you have any questions, feel free to reach out to us!</p>
    
        <!-- Contact Image -->
        <div class="contact-image">
            <dotlottie-player src="https://lottie.host/4a44fd86-a87a-49b5-91d9-cec84a91c0cd/X4uAZbivgu.lottie" background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay ></dotlottie-player>
        </div>

        <?php if (isset($_GET['success'])): ?>
            <div class="success-message">Thank you for contacting us! We will get back to you shortly.</div>
            <?php elseif (isset($_GET['error'])): ?>
            <div class="error-message">
        <?php
        switch ($_GET['error']) {
            case 'missing_fields': echo "All fields are required."; break;
            case 'invalid_email': echo "Please provide a valid email address."; break;
            case 'sending_failed': echo "Failed to send your message. Try again later."; break;
            case 'server_error': echo "An unexpected error occurred. Please try again later."; break;
            default: echo "An unknown error occurred.";
        }
        ?>
    </div>
<?php endif; ?>

    
        <div class="contact-container">
          <form class="contact-form" action="mail.php" method="POST">
            <div class="form-group">
              <label for="name">Full Name</label>
              <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            </div>
    
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
    
            <div class="form-group">
              <label for="message">Your Message</label>
              <textarea id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>
            </div>
    
            <button type="submit" class="btn">Send Message</button>
          </form>
        </div>
      </main>
      <!-- Footer will be loaded here -->
      <div id="footer-placeholder"></div>
      <script src="script.js"></script>
</body>
</html>
