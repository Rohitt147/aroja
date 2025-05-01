@extends('dashboard')

@section('content')
  {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" /> --}}
  <style>
    @keyframes moveBackground {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* body, html {
      height: 100%;
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(270deg, #000, #333, #555);
      background-size: 600% 600%;
      animation: moveBackground 20s ease infinite;
      color: white;
    } */

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

    .profile-img {
      border-radius: 50%;
      object-fit: cover;
      border: 5px solid #FFC451;
      margin-bottom: 1rem;
      box-shadow: 0 4px 12px rgba(255, 196, 81, 0.3);
    }

    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap');

    .card {
      color: #fff;
      border-radius: 10px;
      background: linear-gradient(145deg, #333, #777);
      box-shadow: 20px 20px 60px #333, -20px -20px 60px #777;
      border: none;
    }

    .neo-button {
      width: 50px;
      height: 50px;
      outline: 0 !important;
      cursor: pointer;
      color: #fff;
      font-size: 20px;
      border: none;
      margin: 5px;
      border-radius: 50%;
      background: linear-gradient(145deg, #333, #777);
      box-shadow: inset 20px 20px 60px #333, inset -20px -20px 60px #777;
    }

    .num {
      color: #eee !important;
    }

    .line {
      color: #fff;
    }

    .neo-button:active {
      border-radius: 50%;
      background: #333;
      box-shadow: 28px 28px 57px #333, -28px -28px 57px #777;
    }

    .profile_button {
      color: #fff;
      padding: 10px;
      border: none;
      outline: 0 !important;
      border-radius: 50px;
      background: #333;
      box-shadow: 28px 28px 57px #333, -28px -28px 57px #777;
      margin-top: 20px;
    }

    input[type="text"],
    input[type="email"],
    input[type="date"],
    input[type="tel"] {
      background: rgba(255,255,255,0.1);
      border: none;
      border-radius: 8px;
      padding: 8px 12px;
      color: #fff;
      width: 100%;
      margin-bottom: 15px;
    }

    input::placeholder {
      color: #ccc;
    }
  </style>


<section class="background-radial-gradient">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-12 text-center">
        <div id="radius-shape-1"></div>
        <div id="radius-shape-2"></div>

        <div class="card bg-glass">
          <div class="card-body">

            <div class="container d-flex justify-content-center">
              <div class="card p-3 py-4">
                <div class="text-center">
                  <!-- Profile Image -->
                  <img src="{{ URL::asset('assets/images/avatar-4.jpg') }}" class="profile-img" alt="Profile Picture">

                  <!-- Editable Inputs -->
                  <form class="mt-4">
                    <input type="text" placeholder="Enter Name" value="{{  Auth::user()->name }}">
                    <input type="email" placeholder="Enter Email" value="{{ Auth::user()->email }}">
                    <input type="tel" placeholder="Enter Contact Number" value="+91 9876543210">
                    <input type="date" placeholder="Enter Date of Birth" value="2000-01-01">
                  </form>

                  <!-- Small Description -->
                  <small class="mt-4 d-block">I am a front-end developer specializing in creating awesome UI designs.</small>

                  <!-- Social Media Buttons -->
                  <div class="social-buttons mt-4">
                    <button class="neo-button"><i class="fa fa-facebook"></i></button>
                    <button class="neo-button"><i class="fa fa-linkedin"></i></button>
                    <button class="neo-button"><i class="fa fa-google"></i></button>
                    <button class="neo-button"><i class="fa fa-youtube"></i></button>
                    <button class="neo-button"><i class="fa fa-twitter"></i></button>
                  </div>

                  <!-- Profile Button -->
                  <button class="profile_button px-5">Save Profile</button>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

@endsection
