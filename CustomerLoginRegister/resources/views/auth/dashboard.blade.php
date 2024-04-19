@extends('auth.layouts')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @else
                    <!-- <div class="alert alert-success">
                        You are logged in!
                    </div>    -->
                        <!-- Sidebar -->
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Appointment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" >Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Settings</a>
                    </li>
                </ul>
                @endif                
            </div>
        </div>
    </div>    
</div>
    
@endsection
