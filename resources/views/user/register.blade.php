<html>

<head>
    <style>
        body {
            background-color: #ffc107;
        }

        .col-sm {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 30%;
            padding: 20px;
        }


        @media screen and (max-width: 900px) {
            .col-sm {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                width: 50%;
                padding: 20px;
            }
        }

        @media screen and (max-width: 600px) {
            .col-sm {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                width: 80%;
                padding: 20px;
            }
        }
    </style>
</head>

<body style="background-color: red;">


    <div class="col-sm rounded text-light" style="background-color: #212529">
        <form action="{{ route('register.action') }}" method="POST">
            @csrf
            <div class="text-center">
                <!-- alert untuk success -->
                <!-- <?php if (isset($success)) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Registrasi Berhasil</strong> Silahkan <a href="login.php">Login</a>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif; ?>
                alert untuk error
                <?php if (isset($error)) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Email Sudah Terdaftar </strong><a href="login.php">Login</a>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif; ?> -->
                <h1 class="text-light">Registrasi</h1>
                <p>Silahkan Daftar dengan Email Anda!</p>
            </div>
            <div class="mb-3">
                <label>Name <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name" value="{{ old('name') }}" />
            </div>
            <div class="mb-3">
                <label>email <span class="text-danger">*</span></label>
                <input class="form-control" type="email" name="email" value="{{ old('email') }}" />
            </div>
            <div class="mb-3">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" />
            </div>
            <div class="mb-3">
                <label>Password Confirmation<span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password_confirm" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Register</button>
                <a class="btn btn-danger" href="{{ route('login') }}">Back</a>
            </div>
        </form>
    </div>

</body>

</html>
@extends('layout')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
    </div>
</div>