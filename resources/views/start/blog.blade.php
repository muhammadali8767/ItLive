<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery.min.js" ></script>
    <script src="./js/bootstrap.bundle.min.js" ></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,700;1,100&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style/blog.css">
    <link rel="stylesheet" href="./style/cource.css">
    <title>Blog</title>
</head>

<body>

<!-- ======= Starting_Header ======= -->
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
<!-- ======= End_Header ======= -->

<!-- ======= Starting_Blog ======= -->

    <div class="container">
        <div class="row py-5">

            @foreach($blogs as $blog)
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-2 mb-lg-4">
                <div class="NewCategory">

                    <img src="./images/blog3.png" alt="img eror">
                    {{-- <img src="{{ $blog->featured_image }}" alt="img eror"> --}}
                    <div class="time pr-1 pl-1 mt-3 ">
                        <p>Category</p>
                        <p>{{$blog->created_at}}</p>
                    </div>
                    <h4 class="mb-3">{{$blog->title}}</h4>
                    <p class="mb-4">{{$blog->text}}</p>
                    <a href="#">Read more</a>
                </div>
            </div>

            @endforeach
        </div>
        <div class="row justify-content-center">{{ $blogs->links() }}</div>
    </div>
<!-- ======= End_Blog ======= -->

    @include('layouts\footer')


</body>

</html>
