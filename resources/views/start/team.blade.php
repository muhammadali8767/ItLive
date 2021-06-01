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
    <title>Jamoalar</title>
</head>

<body>

     <!-- ========== Loading  ==========-->
     <!-- <div class="loading">
        <span>Loading...</span>
    </div> -->
    <!-- ========== Scroll_Top  ==========-->
    <!-- <div id="top">
        <i class="fa fa-arrow-circle-o-up"></i>
    </div> -->

    <!-- ==========  Header _starting  ========== -->

    <header>
        <div class="header_menu">

            <div class="container">
                <div class="row  justify-content-between align-items-center">
                    <div class="col-lg-12 ">
                        <nav class="navbar navbar-light navbar-expand-lg mt-3">
                            <a class="navbar-brand" href="index.html"><img src="./images/IT Live full white.svg" alt="error"></a>
                            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                              @include('layouts\frontmenu')
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ==========  End _ Header  ========== -->

    <div class="communities">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 my-4">
                    <div class="trener">
                        <img src="" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts\footer')


    <script src="./js/jquery.min.js"></script>
    <script src="./js/popper.min.js "></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>