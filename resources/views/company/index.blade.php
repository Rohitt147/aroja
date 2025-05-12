@extends('dashboard')

@section('content')
<style>
    .text-muted{
        margin-bottom: 0px !important;
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .custom-toast {
      position: fixed;
      bottom: 20px;
      right: 20px;
      min-width: 280px;
      background-color: #FFC451;
      color: #000;
      padding: 15px 20px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
      z-index: 9999;
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.4s ease;
      overflow: hidden;
    }

    .custom-toast.show {
      opacity: 1;
      transform: translateY(0);
    }

    .progress-bar-animate {
      position: absolute;
      bottom: 0;
      left: 0;
      height: 5px;
      width: 100%;
      background: rgba(0, 0, 0, 0.1);
    }

    .progress-bar-inner {
      height: 100%;
      width: 100%;
      background: black;
      transform-origin: left;
      animation: fillBar 3s linear forwards;
    }

    @keyframes fillBar {
      from { width: 100%; }
      to { width: 0%; }
    }
  </style>
<div class="row">
    <div class="col-12">
        @if (Session::has('status'))
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    showToast("✅ {{ Session::get('status') }}");
                });
            </script>
        @endif

        @if (Session::has('error'))
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    showToast("❌ {{ Session::get('error') }}");
                });
            </script>
        @endif
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h5>Companies Information</h5>
    </div>
    <div class="" style="text-align: end">
        <a href="{{ route('companies.create') }}" class="btn btn-custom bg-dark text-white">ADD COMPANY</a>
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table table-dark">
                <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th>LOGO</th>
                        <th>NAME</th>
                        <th>CODE</th>
                        <th>EMAIL</th>
                        <th>MOBILE NO.</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                        <th>STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                     $index = 1;   
                    @endphp
                    @foreach ($models as $company)
                        <tr style="text-align: center; align-items: center;">
                            
                            <th scope="row"> {{ $index++ }}</th>
                            <td>
                                <img src="{{ env('LIVE_IMAGE_LINK') }}{{$company->logo ?? '' }}"
                                width="50" height="50"  class="rounded-circle" alt=""
                                onerror="this.onerror=null; this.src='{{ asset('images/avatar-4.jpg') }}'">
                            </td>
                            <td>{{ $company?->name }}</td>
                            <td>{{ $company?->code }}</td>
                            <td>{{ $company?->email }}</td>
                            <td>{{ $company?->mobile }}</td>
                            <td> 
                                <a href="{{ route('companies.edit', ['id' => $company->id]) }}"
                                    class="text-dark btn btn-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill text-white" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
                                    </svg>
                                </a>
                             </td>
                            <td>
                                <form action="{{ route('companies.destroy', $company->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this company?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-dark">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill text-danger" viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                    </svg>
                                    </button>
                                </form>
                            </td>
                            <td> 
                                <a href=""
                                    class="text-dark btn btn-dark">
                                    {{-- <span class="text-success"><b>ACTIVATE</b></span> --}}
                                    <span class="text-danger"><b>DEACTIVATE</b></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-end mt-3 pagenation">
                {!! $models->links('pagination::bootstrap-5') !!}
            </div>
        </div>
    </div>
</div>

<script>
  let toastTimer;
  let remaining = 3000;
  let start;
  let progressBar;
  const toastEl = document.getElementById('customToast');

  function showToast(message) {
    clearTimeout(toastTimer);
    const toastMsg = document.getElementById('toastMessage');
    toastMsg.innerText = message;

    toastEl.classList.add('show');

    // Reset and restart progress animation
    progressBar = document.getElementById('progressBar');
    progressBar.style.animation = 'none';
    void progressBar.offsetWidth; // force reflow
    progressBar.style.animation = `fillBar ${remaining}ms linear forwards`;

    start = Date.now();
    toastTimer = setTimeout(() => {
      toastEl.classList.remove('show');
      remaining = 3000;
    }, remaining);
  }

  function pauseToast() {
    clearTimeout(toastTimer);
    remaining -= Date.now() - start;
    if (progressBar) {
      progressBar.style.animationPlayState = 'paused';
    }
  }

  function resumeToast() {
    start = Date.now();
    if (progressBar) {
      progressBar.style.animation = `fillBar ${remaining}ms linear forwards`;
    }
    toastTimer = setTimeout(() => {
      toastEl.classList.remove('show');
      remaining = 3000;
    }, remaining);
  }
</script>
@endsection