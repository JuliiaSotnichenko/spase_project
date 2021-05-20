<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">StarFlight</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <main>

        <h2>Update User</h2>
        <form action="" method="post">
            @csrf
            @auth
            @method('PUT')
            <input type="text" name="first_name" placeholder="First name" value="{{$user->first_name}}"><br>
            @error('first_name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="text" name="last_name" placeholder="Last name" value="{{$user->last_name}}"><br>
            @error('last_name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="text" name="country" placeholder="Country" value="{{$user->country}}"><br>
            @error('country')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="text" name="pass_port_number" placeholder="Passport number" value="{{$user->pass_port_number}}"><br>
            @error('pass_port_number')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="text" name="email" placeholder="Email" value="{{$user->email}}"><br>
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="submit" value="INSERT">
            @else
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Log in</a>
            @endauth
        </form>
    </main>
</body>