<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onepage</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/slider.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="#"> <img src="../assets/img/0OT34pw9juhl.png" alt="" srcset="" height="50px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Notification</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registration">Sign Up</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <!-- first section -->
        <section class="mt-5">
            <div class="cou-container">
                <div class="row">
                    <div class="col-lg-5 col-md-4 col-4">
                        <div class="dropdown">
                            <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#">
                                Categories <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                                <li><a href="#">col1</a></li>
                                <li><a href="#">col2</a></li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">col3</a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="#">col1 col1</a></li>
                                        <li class="dropdown-submenu">
                                            <a href="#">more col</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">col1 col2</a></li>
                                                <li><a href="#">col1 col3</a></li>
                                            </ul <a href="#">more col1</a>
                                        </li>
                                        <li><a href="#">more col1</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">col2</a></li>
                                <li><a href="#">col2</a></li>
                                <li><a href="#">col2</a></li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">col3</a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="#">col1 col1</a></li>
                                        <li class="dropdown-submenu">
                                            <a href="#">more col</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">col1 col2</a></li>
                                                <li><a href="#">col1 col3</a></li>
                                            </ul </li> <li><a href="#">more col1</a>
                                        </li>
                                        <li><a href="#">more col1</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">col2</a></li>
                                <li><a href="#">col2</a></li>
                                <li><a href="#">col2</a></li>
                                <li><a href="#">col2</a></li>
                                <li><a href="#">col2</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">col3</a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="#">col1 col1</a></li>
                                        <li class="dropdown-submenu">
                                            <a href="#">more col</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">col1 col2</a></li>
                                                <li><a href="#">col1 col3</a></li>
                                            </ul 
                                        </li> 
                                        <li><a href="#">more col1</a></li>
                                        <li><a href="#">more col1</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- slider part-->
                    <div class="col-lg-6 col-md-8 col-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="../assets/img/download.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="../assets/img/download.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="../assets/img/download.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- next slider -->
        <section class="home-section mt-4" id="slidernext">
            <div class="container">
                <div class="about-us" style="padding: 50px 0;">
                    <div class="text-center">
                        <span class="display-5"><b>Recommended</b></span>
                    </div>
                    <div class="container mt-4">
                        <div id="carousel-example-six" class="container carousel slide" data-ride="carousel">
                            <div class="mt-5">
                                <ul class="carousel-indicators">
                                    <li style="background-color: blue;" data-target="#carousel-example-six"
                                        data-slide-to="0" class="active"></li>
                                    <li style="background-color: blue;" data-target="#carousel-example-six"
                                        data-slide-to="1"></li>
                                    <li style="background-color: blue;" data-target="#carousel-example-six"
                                        data-slide-to="2"></li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-lg-1 col-sm-1 col-1 col-md-1">
                                    <a class="carousel-control-prev" href="#carousel-example-six" role="button"
                                        data-slide="prev">
                                        <img src="../assets/img/left-arrow-line-symbol.png" height="30px" width="auto">
                                    </a>
                                </div>
                                <div class="col-lg-10 col-sm-10 col-9 col-md-10">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-4 col-4 col-md-4">
                                                    <img src="../assets/img/10x-featured-social-media-image-size.png" class="slidersize">
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-4 col-md-4">
                                                    <img src="../assets/img/10x-featured-social-media-image-size.png" class="slidersize">
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-4 col-md-4">
                                                    <img src="../assets/img/10x-featured-social-media-image-size.png" class="slidersize">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-4 col-4 col-md-4">
                                                    <img src="../assets/img/10x-featured-social-media-image-size.png" class="slidersize">
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-4 col-md-4">
                                                    <img src="../assets/img/10x-featured-social-media-image-size.png" class="slidersize">
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-4 col-md-4">
                                                    <img src="../assets/img/10x-featured-social-media-image-size.png" class="slidersize">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-4 col-4 col-md-4">
                                                    <img src="../assets/img/10x-featured-social-media-image-size.png" class="slidersize">
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-4 col-md-4">
                                                    <img src="../assets/img/10x-featured-social-media-image-size.png" class="slidersize">
                                                </div>
                                                <div class="col-lg-4 col-sm-4 col-4 col-md-4">
                                                    <img src="../assets/img/10x-featured-social-media-image-size.png" class="slidersize">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-1 col-sm-1 col-1 col-md-1">
                                    <a class="carousel-control-next" href="#carousel-example-six" role="button"
                                        data-slide="next">
                                        <img src="../assets/img/right-arrow-line-symbol.png" height="30px" width="auto">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 2nd section -->
        <section class="mt-5">
            <div class="container">
                <div>
                    <h1 class="text-center my-5">Shop By brand</h1>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-4 mt-2">
                        <img src="../assets/img/10x-featured-social-media-image-size.png" alt="" height="100%"
                            width="100%">

                    </div>
                    <div class="col-lg-2 col-md-2 col-4 mt-2">
                        <img src="../assets/img/10x-featured-social-media-image-size.png" alt="" height="100%"
                            width="100%">

                    </div>
                    <div class="col-lg-2 col-md-2 col-4 mt-2">
                        <img src="../assets/img/10x-featured-social-media-image-size.png" alt="" height="100%"
                            width="100%">

                    </div>
                    <div class="col-lg-2 col-md-2 col-4 mt-2">
                        <img src="../assets/img/10x-featured-social-media-image-size.png" alt="" height="100%"
                            width="100%">

                    </div>
                    <div class="col-lg-2 col-md-2 col-4 mt-2">
                        <img src="../assets/img/10x-featured-social-media-image-size.png" alt="" height="100%"
                            width="100%">

                    </div>
                    <div class="col-lg-2 col-md-2 col-4">
                        <a id="dLabel" role="button" class="btn btn-primar mt-5">
                            View more
                        </a>

                    </div>

                </div>
            </div>

        </section>
        <!-- 3rd section -->
        <section class="mt-5">
            <div class="container">
                <div>
                    <h1 class="text-center my-5">Shop By Stores</h1>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-4 mt-2">
                        <img src="../assets/img/10x-featured-social-media-image-size.png" alt="" height="100%"
                            width="100%">

                    </div>
                    <div class="col-lg-2 col-md-2 col-4 mt-2">
                        <img src="../assets/img/10x-featured-social-media-image-size.png" alt="" height="100%"
                            width="100%">

                    </div>
                    <div class="col-lg-2 col-md-2 col-4 mt-2">
                        <img src="../assets/img/10x-featured-social-media-image-size.png" alt="" height="100%"
                            width="100%">

                    </div>
                    <div class="col-lg-2 col-md-2 col-4 mt-2">
                        <img src="../assets/img/10x-featured-social-media-image-size.png" alt="" height="100%"
                            width="100%">

                    </div>
                    <div class="col-lg-2 col-md-2 col-4 mt-2">
                        <img src="../assets/img/10x-featured-social-media-image-size.png" alt="" height="100%"
                            width="100%">

                    </div>
                    <div class="col-lg-2 col-md-2 col-4">
                        <a id="dLabel" role="button" class="btn btn-primar mt-5">
                            View more
                        </a>

                    </div>

                </div>
            </div>

        </section>
        <!-- 4th section -->
        <section class="mt-5">
            <div class="container">
                <div>
                    <h1 class="text-center my-5">Top trending products Now</h1>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-4 mt-2">
                        <img src="../assets/img/10x-featured-social-media-image-size.png" alt="" height="100%"
                            width="100%">

                    </div>
                    <div class="col-lg-2 col-md-2 col-4 mt-2">
                        <img src="../assets/img/10x-featured-social-media-image-size.png" alt="" height="100%"
                            width="100%">

                    </div>
                    <div class="col-lg-2 col-md-2 col-4 mt-2">
                        <img src="../assets/img/10x-featured-social-media-image-size.png" alt="" height="100%"
                            width="100%">

                    </div>
                    <div class="col-lg-2 col-md-2 col-4 mt-2">
                        <img src="../assets/img/10x-featured-social-media-image-size.png" alt="" height="100%"
                            width="100%">

                    </div>
                    <div class="col-lg-2 col-md-2 col-4 mt-2">
                        <img src="../assets/img/10x-featured-social-media-image-size.png" alt="" height="100%"
                            width="100%">

                    </div>
                    <div class="col-lg-2 col-md-2 col-4">
                        <a id="dLabel" role="button" class="btn btn-primar mt-5">
                            View more
                        </a>

                    </div>

                </div>
            </div>

        </section>

    </main>
    <!-- footer  -->
    <footer class="footerele">
        <div class="container">
            <div class="fotteraa">
                <a class="fb-ic">
                    <i class="fa fa-facebook"> </i>
                </a>
                <!-- Twitter -->
                <a class="tw-ic">
                    <i class="fa fa-twitter"> </i>
                </a>
                <!--Pinterest-->
                <a class="pin-ic">
                    <i class="fa fa-pinterest f"> </i>
                </a>
                <a class="link-ic">
                    <i class="fa fa-linkedin"> </i>
                </a>
            </div>
        </div>
        <div class="footer-copyright text-center py-5" style="color: wheat;">© 2020: Asif
        </div>

    </footer>
    <!-- Footer -->
    <script src="../assets/js/jquery-3.4.1.slim.min.js"></script>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>