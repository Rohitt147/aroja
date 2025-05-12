@extends('layouts.app')

@section('content')
<style>
    .party-form {
    background: linear-gradient(135deg, #1a1a1a, #333333);
    color: #fff;
    font-family: 'Segoe UI', sans-serif;
  }

 
  .form-container {
    background-color: rgba(255, 255, 255, 0.05);
    border: 1px solid #444;
    padding: 25px;
    margin-top: 30px;
    border-radius: 20px;
    backdrop-filter: blur(10px);
    box-shadow: 0 8px 16px rgba(0,0,0,0.6);
  }

  .form-title {
    font-size: 26px;
    font-weight: bold;
    color: #FFC451;
    text-align: center;
    margin-bottom: 25px;
  }

  .form-control {
    background-color: rgba(255,255,255,0.1);
    color: #FFC451;
    border: 1px solid #FFC451;
    border-radius: 10px;
    font-weight: bold;
  }

  .custom-file-input{
    background-color: rgba(255,255,255,0.1);
    color: #FFC451;
    border: 1px solid #FFC451;
    border-radius: 10px;
    font-weight: bold;
  }

  .form-control::placeholder {
    color: #ccc;
  }

  .form-label {
    color: #fff;
    font-weight: 500;
  }

  .table th, .table td {
    background-color: rgba(255,255,255,0.05);
    color: #fff;
    vertical-align: middle;
  }

  .btn-custom {
    background-color: #FFC451;
    color: #000;
    font-weight: 600;
    border: none;
    border-radius: 8px;
    padding: 6px 16px;
  }

  .btn-custom:hover {
    background-color: #e6b93e;
  }

  .btn-outline-light {
    border-color: #ccc;
    color: #ccc;
  }

  .btn-outline-light:hover {
    color: #000;
    background-color: #FFC451;
    border-color: #FFC451;
  }
</style>

<style>
    .back-icon {
    transition: fill 0.3s ease;
    color: #f7f7f7;
    }

    .back:hover .back-icon {
    fill: #FFC451;
    }
</style>
<div class="card">
  <div class="card-header" style="display: flex; justify-content: space-between;align-items: center; background-color:#242424; border-radius: 10px 10px 0 0;">
      <h5 class="text-white">UPDATE COMPANY ENTRY</h5>
      <a href="{{ route('company.index') }}" class="back">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-circle-fill back-icon" viewBox="0 0 16 16">
          <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
        </svg>
      </a>
  </div>
</div>
<div class="container form-container party-form">
        <form action="{{ route('companies.update', $model->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @include('company.partial.fields')
        </form>
    </div>
</div>

@endsection