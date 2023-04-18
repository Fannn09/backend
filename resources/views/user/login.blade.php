<!-- @extends('layout') -->
<!-- @section('content') -->
<div class="row">
    <div class="col-md-6">
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <!DOCTYPE html>
        <!-- Created By CodingNepal -->
        <html lang="en" dir="ltr">

        <head>
            <meta charset="utf-8">
            <title>Transparent Login Form HTML CSS</title>
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
            <style>
                @import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Poppins:400,500&display=swap');

                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    user-select: none;
                }

                .bg-img {
                    background: url('bg.jpg');
                    height: 100vh;
                    background-size: cover;
                    background-position: center;
                }

                .bg-img:after {
                    position: absolute;
                    content: '';
                    top: 0;
                    left: 0;
                    height: 100%;
                    width: 100%;
                    background: rgba(0, 0, 0, 0.7);
                }

                .content {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    z-index: 999;
                    text-align: center;
                    padding: 60px 32px;
                    width: 370px;
                    transform: translate(-50%, -50%);
                    background: rgba(255, 255, 255, 0.04);
                    box-shadow: -1px 4px 28px 0px rgba(0, 0, 0, 0.75);
                }

                .content header {
                    color: white;
                    font-size: 33px;
                    font-weight: 600;
                    margin: 0 0 35px 0;
                    font-family: 'Montserrat', sans-serif;
                }

                .field {
                    position: relative;
                    height: 45px;
                    width: 100%;
                    display: flex;
                    background: rgba(255, 255, 255, 0.94);
                }

                .field span {
                    color: #222;
                    width: 40px;
                    line-height: 45px;
                }

                .field input {
                    height: 100%;
                    width: 100%;
                    background: transparent;
                    border: none;
                    outline: none;
                    color: #222;
                    font-size: 16px;
                    font-family: 'Poppins', sans-serif;
                }

                .space {
                    margin-top: 16px;
                }

                .show {
                    position: absolute;
                    right: 13px;
                    font-size: 13px;
                    font-weight: 700;
                    color: #222;
                    display: none;
                    cursor: pointer;
                    font-family: 'Montserrat', sans-serif;
                }

                .pass-key:valid~.show {
                    display: block;
                }

                .pass {
                    text-align: left;
                    margin: 10px 0;
                }

                .pass a {
                    color: white;
                    text-decoration: none;
                    font-family: 'Poppins', sans-serif;
                }

                .pass:hover a {
                    text-decoration: underline;
                }

                .field input[type="submit"] {
                    background: #3498db;
                    border: 1px solid #2691d9;
                    color: white;
                    font-size: 18px;
                    letter-spacing: 1px;
                    font-weight: 600;
                    cursor: pointer;
                    font-family: 'Montserrat', sans-serif;
                }

                .field input[type="submit"]:hover {
                    background: #2691d9;
                }

                .login {
                    color: white;
                    margin: 20px 0;
                    font-family: 'Poppins', sans-serif;
                }

                .links {
                    display: flex;
                    cursor: pointer;
                    color: white;
                    margin: 0 0 20px 0;
                }

                .facebook,
                .instagram {
                    width: 100%;
                    height: 45px;
                    line-height: 45px;
                    margin-left: 10px;
                }

                .facebook {
                    margin-left: 0;
                    background: #4267B2;
                    border: 1px solid #3e61a8;
                }

                .instagram {
                    background: #E1306C;
                    border: 1px solid #df2060;
                }

                .facebook:hover {
                    background: #3e61a8;
                }

                .instagram:hover {
                    background: #df2060;
                }

                .links i {
                    font-size: 17px;
                }

                i span {
                    margin-left: 8px;
                    font-weight: 500;
                    letter-spacing: 1px;
                    font-size: 16px;
                    font-family: 'Poppins', sans-serif;
                }

                .signup {
                    font-size: 15px;
                    color: white;
                    font-family: 'Poppins', sans-serif;
                }

                .signup a {
                    color: #3498db;
                    text-decoration: none;
                }

                .signup a:hover {
                    text-decoration: underline;
                }
            </style>
        </head>

        <body>
            <div class="bg-img">
                <div class="content">
                    <form action="{{ route('login.action') }}" method="POST">
                        @csrf
                        <div class="field">
                            <span class="fa fa-user"></span>
                            <input class="form-control" type="email" name="email" value="{{ old('email') }}" />
                        </div>
                        <div class="field space">
                            <span class="fa fa-lock"></span>
                            <input class="form-control" type="password" name="password" />
                            <span class="show">SHOW</span>
                        </div>
                        <div class="pass">
                            <a href="#">Forgot Password?</a>
                        </div>
                        <div class="field">
                            <input type="submit" value="LOGIN" class="btn btn-primary"></input>
                            <!-- <button class="btn btn-primary">Login</button> -->
                        </div>
                    </form>
                    <div class="login">
                        Or login with
                    </div>
                    <div class="links">
                        <div class="facebook">
                            <i class="fab fa-facebook-f"><span>Facebook</span></i>
                        </div>
                        <div class="instagram">
                            <i class="fab fa-instagram"><span>Instagram</span></i>
                        </div>
                    </div>
                    <div class="signup">
                        Don't have account?
                        <a href="#">Signup Now</a>
                    </div>
                </div>
            </div>
            <script>
                const pass_field = document.querySelector('.pass-key');
                const showBtn = document.querySelector('.show');
                showBtn.addEventListener('click', function() {
                    if (pass_field.type === "password") {
                        pass_field.type = "text";
                        showBtn.textContent = "HIDE";
                        showBtn.style.color = "#3498db";
                    } else {
                        pass_field.type = "password";
                        showBtn.textContent = "SHOW";
                        showBtn.style.color = "#222";
                    }
                });
            </script>
        </body>

        </html>
        @endsection