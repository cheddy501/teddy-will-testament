<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Index | C&J Estate Planning</title>
<link rel="stylesheet" href="css/style.css" />
<style>
/* Your existing styles */
.hero-banner {
  position: relative;
  width: 100%;
  height: 60vh;
  background: url('images/grandparents-sunset-banner.png') center center/cover no-repeat;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}
.hero-banner::after {
  content: none; /* No overlay */
}
.hero-content {
  position: relative;
  color: #fff;
  max-width: 90%;
  padding: 0 20px;
  z-index: 1;
  text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 20px;
  font-weight: 700;
  font-size: 2.4em;
}
.cta-button {
  background-color: #2a6f63;
  color: #d9f0e1;
  padding: 5px 10px;
  text-decoration: none;
  font-weight: bold;
  border-radius: 6px;
  transition: background-color 0.3s ease;
  display: inline-block;
}
.cta-button:hover {
  background-color: #76b39d;
}
.hero-text {
  max-width: 700px;
  margin: 30px auto;
  padding: 0 20px;
  text-align: center;
  color: #3a4a3f;
  font-size: 1.3em;
  line-height: 1.5;
  font-weight: normal;
}
.container {
  max-width: 900px;
  background: #ffffff;
  margin: 30px auto;
  padding: 30px 25px;
  border-radius: 10px;
  box-shadow: 0 0 12px rgba(58,74,63,0.15);
  color: #3a4a3f;
}
.container h2 {
  margin-bottom: 15px;
  color: #2a6f63;
}
.container p {
  font-size: 1.1em;
  margin-bottom: 15px;
}
@media (max-width: 768px) {
  .hero-banner {
    height: 40vh;
  }
  .hero-content {
    font-size: 1.8em;
    gap: 15px;
  }
  .hero-text {
    font-size: 1.1em;
  }
}
/* Updated Logo Styling */
.logo {
  height: 160px;
  width: 160px;
  border-radius: 50%;
  object-fit: cover;
  background-color: transparent;
  display: block;
  margin: 0 auto;
}
</style>
</head>
<body>

<?php include 'header.php'; ?>

<!-- Hero Banner with heading + button centered -->
<section class="hero-banner">
  <div class="hero-content">
    Securing Your Legacy for Generations
    <a href="contact.php" class="cta-button">Book a Free Consultation</a>
  </div>
</section>

<!-- Paragraph below the image -->
<div class="hero-text">
  <p>Whether you’re building your family’s future or preserving a lasting legacy, we’ll guide you through every step of your unique journey.</p>
</div>

<!-- Main content container -->
<div class="container">
  <h2>Welcome to C&J Estate Planning</h2>
  <p>Your trusted partner for Will & Estate Planning services in Belize and beyond.</p>
  <p>
    At C&J Estate Planning Consultancy, we help you secure your legacy and protect your loved ones with clear, personalized estate planning. We specialize in preparing Last Will and Testaments, facilitating Grants of Probate and Grants of Administration, and setting up trusts and powers of attorney. Our experienced team simplifies the process, ensuring your assets are managed and distributed according to your wishes, giving you and your family peace of mind for the future.
  </p>
</div>

<footer>
  &copy; 2025 C&J Estate Planning Consultancy. All rights reserved.
</footer>

</body>
</html>
