<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* General Styles */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  padding-top: 70px;
  box-sizing: border-box;
}

.about-section {
  padding: 2rem 1rem;
  max-width: 800px;
  margin: 0 auto;
  text-align: center;
}

.about-container h1 {
  font-size: 2rem;
  margin-bottom: 1rem;
  color: #333;
}

.about-container p {
  font-size: 1rem;
  color: #555;
  line-height: 1.6;
  margin-bottom: 1.5rem;
}

.about-container img {
  max-width: 100%;
  height: auto;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  margin: 1rem 0;
}

 /* Flexbox for centering Lottie animation */
 .about-container .lottie-container {
    display: flex;
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
    margin: 1.5rem 0; /* Margin around the animation */
}

/* Responsive Design */
@media (max-width: 768px) {
  .about-section {
    padding: 1.5rem;
  }
}
    </style>
</head>
<body>
    <div id="header-placeholder"></div>
    <main class="about-section">
        <div class="about-container">
          <h1>About Us</h1>
          <p>
            At Nayak Organics, we are committed to delivering the freshest organic produce directly to your doorstep. 
            Our mission is to promote a healthy lifestyle by providing farm-to-table organic vegetables, grown with 
            love and care, free from harmful chemicals and pesticides.
          </p>
          <div class="lottie-container">
            <dotlottie-player src="https://lottie.host/f2d1afe5-e4fa-4a3e-8b32-6f1887d55f72/S1fWfCzqcO.lottie" background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay ></dotlottie-player>
          </div>
          <p>
            Established with the vision of creating a sustainable future, we ensure that all our farming practices 
            are eco-friendly and align with the principles of organic farming. Join us on this journey towards a 
            healthier planet and a healthier you!
          </p>
        </div>
      </main>
      <!-- Footer will be loaded here -->
      <div id="footer-placeholder"></div>
      <script src="script.js"></script>
</body>
</html>