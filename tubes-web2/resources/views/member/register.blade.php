<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
        href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
        rel="stylesheet"
        />
        <link rel="stylesheet" href="{{ asset('asset/css/style2.css') }}" />
        <title>Kelompok 2 | Daftar</title>
    </head>
    <body>
        <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="{{ route('member.register.store') }}" method="POST" class="sign-in-form">
                    @csrf
                    <h2 class="title">Hello there!</h2>
                    <div class="input-field">
                        <i class="bx bx-user"></i>
                        <input type="text" name="nama" value="{{ old('nama') }}" placeholder="Nama">
                    </div>
                    <span class="error-input">{{ $errors->first('nama') }}</span>
                    <div class="input-field">
                        <i class="bx bx-envelope"></i>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">
                    </div>
                    <span class="error-input">{{ $errors->first('email') }}</span>
                    <div class="input-field">
                        <i class="bx bx-lock-alt"></i>
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <span class="error-input">{{ $errors->first('password') }}</span>
                    <button type="submit" value="Login" class="btn solid">Daftar</button>
                    <span class="input-link">Sudah punya akun? <a href="{{ route('member.login') }}">Masuk</a></span>
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
            <div class="content">
                <h1>Always <span>live your life</span> <br> with your biography in mind</h1>
            </div>
            <img src="{{ asset('asset/img/user.png') }}" class="image">
            </div>
        </div>
        </div>
    </body>
</html>
