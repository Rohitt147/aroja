<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="assets/img/favicon.png" rel="icon">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

  <style>
    /* Keyframes for subtle animated background */
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
      padding: 1rem;
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

    .form-control {
      background-color: transparent;
      border: 1px solid #FFC451;
      color: #FFC451;
      font-weight: bold;
      transition: all 0.3s ease;
    }

    .form-control::placeholder {
      color: #bbb;
    }

    .form-control:focus {
      border-color: white;
      background-color: rgba(255, 255, 255, 0.05);
      box-shadow: 0 0 10px #FFC451;
      color: white;
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
      color: #000;
    }

    h1 span {
      color: #FFC451;
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

    @media (max-width: 768px) {
      h1.display-4 {
        font-size: 2rem;
      }

      .logo-img {
        max-width: 150px;
      }

      .lead {
        font-size: 1rem;
      }

      .bg-glass {
        padding: 1.5rem;
      }
    }
  </style>
</head>

<body>
@if ($errors->any())
  <div class="alert alert-danger">
    <ul class="mb-0">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<section class="background-radial-gradient">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-lg-6 text-center text-lg-left mb-4">
        <h1 class="mb-4 display-4 fw-bold">The best offer <br><span>for your business</span></h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus expedita iusto veniam atque.</p>
      </div>

      <div class="col-12 col-lg-6">
        <div id="radius-shape-1"></div>
        <div id="radius-shape-2"></div>

        <div class="card bg-glass p-3 p-md-4">
          <div class="card-body">

            <form class="transparent-form" method="POST" action="/login">
                @csrf
                <div class="logo text-center mb-4">
                    <img src="assets/img/arojalogo.png" alt="Logo" class="logo-img bounce-logo">
                </div>

                <div class="mb-4">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required>
                </div>

                <div class="mb-4">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block mb-4"><b> Login </b></button>

                  <div class="text-center">
                      <span>Don't Have Account?</span>
                      <a href="{{ route('register') }}" class="text-decoration-none">Register</a>
                  </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Font Awesome (optional) -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
</html>
