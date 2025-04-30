<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>404 Not Found</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" />
  <style>
    @keyframes moveBackground {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    body, html {
      height: 100%;
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(270deg, #000, #333, #555);
      background-size: 600% 600%;
      animation: moveBackground 20s ease infinite;
      color: white;
    }

    .background-radial-gradient {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }

    #radius-shape-1, #radius-shape-2 {
      position: absolute;
      border-radius: 50%;
      background: radial-gradient(#333, #777);
      opacity: 0.5;
      animation: float 6s ease-in-out infinite;
    }

    #radius-shape-1 {
      width: 200px;
      height: 200px;
      top: -50px;
      left: -100px;
    }

    #radius-shape-2 {
      width: 300px;
      height: 300px;
      bottom: -50px;
      right: -100px;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-20px); }
    }

    .bg-glass {
      background: rgba(0, 0, 0, 0.6);
      backdrop-filter: blur(15px);
      border-radius: 15px;
      padding: 2rem;
      animation: fadeInUp 1s ease forwards;
      opacity: 0;
      transform: translateY(20px);
    }

    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .btn-primary {
      background-color: #FFC451;
      color: black;
      border: none;
      transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #ffd366;
      transform: translateY(-3px);
      box-shadow: 0 4px 12px rgba(255, 196, 81, 0.4);
    }

    .logo-img {
      max-width: 200px;
      width: 100%;
      height: auto;
    }

    .bounce-logo {
      animation: bounceLogo 4s infinite ease-in-out;
    }

    @keyframes bounceLogo {
      0%, 100% {
        transform: translateY(0) scale(1);
      }
      50% {
        transform: translateY(-10px) scale(1.05);
      }
    }

    .error-title {
      font-size: 4rem;
      font-weight: bold;
      color: #FFC451;
    }

    .error-text {
      font-size: 1.25rem;
      margin-bottom: 1.5rem;
      color: #eee;
    }
  </style>
</head>

<body>

<section class="background-radial-gradient">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-8 text-center">
        <div id="radius-shape-1"></div>
        <div id="radius-shape-2"></div>

        <div class="card bg-glass">
          <div class="card-body">

            <div class="logo text-center mb-4">
              <img src="assets/img/arojalogo.png" alt="Logo" class="logo-img bounce-logo">
            </div>

            <h1 class="error-title">404</h1>
            <p class="error-text">Oops! The page you're looking for doesn't exist.</p>

            <a href="/" class="btn btn-primary mt-3">Go Home</a>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Font Awesome (optional for social or future use) -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
</html>