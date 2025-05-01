@extends('dashboard')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>User Information</h5>
        {{-- <span>use class <code>table-dark</code> inside table element</span> --}}
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                     $index = 1;   
                    @endphp
                    @foreach ($model as $user)
                        <tr>
                            <th scope="row"> {{ $index++ }}</th>
                            <td>{{ $user?->name }}</td>
                            <td>{{ $user?->email }}</td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection