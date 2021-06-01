<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./fonts/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,700;1,100&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style/cource.css">
    <title>Ro'yxatdan O'tish</title>
</head>

<body>

    <!-- ==========  Header _starting  ========== -->

    <header>
        <div class="header_menu">
            <div class="container">
                <div class="row  justify-content-between align-items-center">
                    <div class="col-lg-12 ">
                        <nav class="navbar navbar-light navbar-expand-lg mt-3">
                            <a class="navbar-brand" href="{{ url('/') }}"><img src="./images/IT Live full white.svg" alt="error"></a>
                            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ============ Regsitartion_ Starting ============ -->

    <main>
        <div class="registration">
            <div class="container-fluid">
                <div class="row justify-content-center ">
                    <div class="col-lg-5 px-0">
                        <div class="about_reg ">
                            <img src="./images/IT Live full white.svg" alt="error" class="logo">
                            <h2>Hush Kelibsiz!</h2>
                            <p>Ассалому алейкум! Добро пожаловать в IT Live Academy. <br> Желаем вам успешного использования системы. <br> С уважением, IT Live Academy.</p>
                            <div class="social_network">
                              <a href="">  <i class="fa fa-facebook"></i></a>
                               <a href="https://t.me/It_Live_Guliston"> <i class="fa fa-telegram"></i></a>
                           <a href="https://www.youtube.com/channel/UCpDuo4IQhbYhc9OhsiJ-WVA">     <i class="fa fa-youtube"></i></a>
                               <a href=""> <i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 px-5">
                        <div class="col-lg-12">
                            <a class="account ml-auto" href="{{ route('login') }}">Kirish</a>
                            <div class="row flex-column justify-content-center mt-5">
                                <h4> Ro'yxatdan o'tish.</h4>
                            </div>
                        </div>
                        <form action="{{ route('register') }}" method="post">
                            @csrf

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">{{ __('Ism') }}</label>
                                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus id="name">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">{{ __('E-Mail') }}</label>
                                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{ old('email') }}" required>
                                   @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">{{ __('Parol') }}</label>
                                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">{{ __('Parolni tasdiqlash') }}</label>
                                    <input type="password" class="form-control" name="password_confirmation" id="password-confirm" required>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Ro\'yxatdan o\'tish') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

     <!-- ========== Starting _ Footer ========== -->

     <footer>
        <div class="footer">
            <div class="footer_bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p>Copyright © 2020, IT Live Education</p>
                        </div>
                    </div>
                </div>
                <div class="fixed">
                    <a href="index.html">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="./js/jquery.min.js"></script>
    <script src="./js/popper.min.js "></script>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>