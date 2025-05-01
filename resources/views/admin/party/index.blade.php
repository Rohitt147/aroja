@extends('layouts.app')

@section('content')
  

   {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />  --}}
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

  <div class="container form-container party-form">
    <div class="form-title">Party Master Entry</div>
    <form>
      <div class="form-row">
        <div class="form-group col-md-8">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" placeholder="Party Name">
        </div>
        <div class="form-group col-md-4">
          <label class="form-label">Code</label>
          <input type="text" class="form-control" placeholder="Code">
        </div>
      </div>

      <div class="form-group">
        <label class="form-label">Address</label>
        <input type="text" class="form-control mb-2" placeholder="Address Line 1">
        <input type="text" class="form-control" placeholder="Address Line 2">
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label class="form-label">City</label>
          <input type="text" class="form-control" placeholder="City">
        </div>
        <div class="form-group col-md-4">
          <label class="form-label">Mobile</label>
          <input type="text" class="form-control" placeholder="Mobile Number">
        </div>
        <div class="form-group col-md-4">
          <label class="form-label">Email</label>
          <input type="text" class="form-control" placeholder="Email or Contact">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label class="form-label">GSTIN</label>
          <input type="text" class="form-control" placeholder="GST Number">
        </div>
        <div class="form-group col-md-4">
          <label class="form-label">State & Code</label>
          <input type="text" class="form-control" placeholder="State & Code">
        </div>
        <div class="form-group col-md-4">
          <label class="form-label">Fuel Charge %</label>
          <input type="text" class="form-control" placeholder="0.00">
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-bordered table-sm">
          <thead>
            <tr>
              <th>Range</th>
              <th>LOC</th>
              <th>GUJ</th>
              <th>MUM</th>
              <th>IND</th>
              <th>OTH</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>0.000 TO 0.010</td><td><input class="form-control" value="12"></td><td><input class="form-control" value="12"></td><td><input class="form-control" value="25"></td><td><input class="form-control" value="25"></td><td><input class="form-control" value="0"></td></tr>
            <tr><td>0.011 TO 0.100</td><td><input class="form-control" value="12"></td><td><input class="form-control" value="12"></td><td><input class="form-control" value="25"></td><td><input class="form-control" value="25"></td><td><input class="form-control" value="0"></td></tr>
            <tr><td>0.101 TO 0.250</td><td><input class="form-control"></td><td><input class="form-control"></td><td><input class="form-control"></td><td><input class="form-control"></td><td><input class="form-control"></td></tr>
            <tr><td>0.251 TO 0.500</td><td><input class="form-control" value="18"></td><td><input class="form-control" value="18"></td><td><input class="form-control" value="40"></td><td><input class="form-control" value="40"></td><td><input class="form-control" value="0"></td></tr>
            <tr><td>0.501 TO 1 Kg</td><td><input class="form-control" value="25"></td><td><input class="form-control" value="25"></td><td><input class="form-control" value="70"></td><td><input class="form-control" value="70"></td><td><input class="form-control" value="0"></td></tr>
          </tbody>
        </table>
      </div>

      <div class="row text-center mt-4">
        <div class="col-md-12">
          <button type="submit" class="btn btn-custom mx-1">Save</button>
          <button type="reset" class="btn btn-outline-light mx-1">Revert</button>
          <button class="btn btn-outline-light mx-1">Top</button>
          <button class="btn btn-outline-light mx-1">Prev</button>
          <button class="btn btn-outline-light mx-1">Next</button>
          <button class="btn btn-outline-light mx-1">Last</button>
          <button class="btn btn-outline-light mx-1">Add New</button>
          <button class="btn btn-outline-light mx-1">Delete</button>
          <button class="btn btn-outline-light mx-1">Edit</button>
          <button class="btn btn-outline-light mx-1">Browse</button>
          <button class="btn btn-danger mx-1">Exit</button>
        </div>
      </div>
    </form>
  </div>

@endsection
