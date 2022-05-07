<!doctype html>
<html lang="en">
<head>
    <title>Главная</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
{{--    <link rel="stylesheet" href="css/aos.css">--}}

<!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>

<div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="#" class="text-white"><span class="mr-2 text-white icon-envelope-open-o"></span>
                        <span class="d-none d-md-inline-block">wuseitek@mail.ru</span></a>
                    <span class="mx-md-2 d-inline-block"></span>
                    <a href="#" class="text-white"><span class="mr-2 text-white icon-phone"></span> <span class="d-none d-md-inline-block">(+996 312) 66 29 14</span></a>

                    <div class="float-right">

                        <a href="#" class="text-white"><span class="mr-2 text-white icon-twitter"></span> <span class="d-none d-md-inline-block">Twitter</span></a>
                        <span class="mx-md-2 d-inline-block"></span>
                        <a href="#" class="text-white"><span class="mr-2 text-white icon-instagram"></span> <span class="d-none d-md-inline-block">Instagram</span></a>


                        {{--                        <span> <a href="http://google.com"  target="_blank" class="nav-link">О нас</a></span>--}}

                    </div>

                </div>

            </div>

        </div>
    </div>

    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

        <div class="container">

            <div class="row align-items-center position-relative">
                <div class="site-logo">
                    <a href="index.html" class="text-black"><span class="text-primary"><img src="/images/logo_.png"></span></a>
                </div>
                <div class="col-lg-12">
                    <nav class="site-navigation text-right  " role="navigation">

                        <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                            @yield('nav-content')
{{--                            <li><a href="#home-section" class="nav-link">Главная</a></li>--}}
{{--                            <li><a href="#services-section" class="nav-link">Новости</a></li>--}}
{{--                            --}}
{{--                            <li class="has-children">--}}
{{--                                <a href="#about-section" class="nav-link">Руководство</a>--}}
{{--                                <ul class="dropdown arrow-top">--}}
{{--                                    <li><a href="#managerTeam-section" class="nav-link">Руководящий состав</a></li>--}}
{{--                                    <li><a href="#coaches-section" class="nav-link">Тренерско-инструкторский</a></li>--}}
{{--                                    <li class="has-children">--}}
{{--                                        <a href="#">More Links</a>--}}
{{--                                        <ul class="dropdown">--}}
{{--                                            <li><a href="#">Menu One</a></li>--}}
{{--                                            <li><a href="#">Menu Two</a></li>--}}
{{--                                            <li><a href="#">Menu Three</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li><a href="#groups-section" class="nav-link">Школы и клубы</a></li>--}}
{{--                            <li><a href="#teachers-section" class="nav-link">Наши учителя</a></li>--}}

{{--                            <li><a href="#faq-section" alt="часто задаваемые вопросы" class="nav-link">FAQ</a></li>--}}
{{--                            <li><a href="#contact-section" class="nav-link">Контакты</a></li>--}}
{{--                            <li><a href="#about-section" target="_blank" class="nav-link">О нас</a></li>--}}

                        </ul>
                    </nav>

                </div>

                <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

            </div>
        </div>

    </header>

    @yield('main-content')

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-8">
                                <h2 class="footer-heading mb-4">About Us</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
                            </div>
                            <div class="col-md-4 ml-auto">
                                <h2 class="footer-heading mb-4">Features</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Press Releases</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="mb-5">
                            <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
                            <form action="#" method="post" class="footer-suscribe-form">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary text-white" type="button" id="button-addon2">Subscribe</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <form>
                        <h2 class="footer-heading mb-4">Follow Us</h2>
                        <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                    </form>
                </div>
            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <div class="border-top pt-5">
                        <p class="copyright"><small>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </small></p>
                    </div>
                </div>

            </div>
    </div>
    </footer>

</div>
<script src="{{ mix('js/app.js') }}"></script>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>

<script src="js/main.js"></script>

</body>
</html>
<style>
    .news {
        height: 300px;
        margin-bottom: 60px;
    }
    .news h2{
        -webkit-line-clamp: 2; /* Число отображаемых строк */
        display: -webkit-box; /* Включаем флексбоксы */
        -webkit-box-orient: vertical; /* Вертикальная ориентация */
        overflow: hidden; /* Обрезаем всё за пределами блока */
    }
    .news p {
        -webkit-line-clamp: 6; /* Число отображаемых строк */
        display: -webkit-box; /* Включаем флексбоксы */
        -webkit-box-orient: vertical; /* Вертикальная ориентация */
        overflow: hidden; /* Обрезаем всё за пределами блока */
    }
    .news img{
        float:left; /* Выравнивание по левому краю */
        margin: 7px 7px 7px 0; /* Отступы вокруг картинки */
    }
    .site-section a{
        color: black;
    }
    a:hover{
        color: #d87e12;
    }

    .name-manager{
        height: 60px;
    }
    .positons{
        height: 60px;
    }
    .mb-4, .my-4 {
        margin-bottom: 1.5rem!important;
        width: 300px;
        margin: 30px;
    }
    .col-lg-4 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 33.33333%;
        flex: 0 0 33.33333%;
        max-width: 25%;
    }
    p{
        text-align: justify;
    }
    .groups-h{
        text-align: center;
        color: black;
    }
    .see-more{
        text-align: right;
    }
    .manager-image-block{
        padding: 10px; /* Поля вокруг */
        display: block; /* Блочный элемент */
        width: 300px; /* Ширина */
        /*float: left; !* Блоки выстраиваются по горизонтали *!*/
        margin:  10px 10px ; /* Отступы */
        /*text-align: center; !* Выравнивание по центру *!*/
        height: 200px;
    }
    .teachers-block-image  {
        padding: 10px; /* Поля вокруг */
        display: block; /* Блочный элемент */
        /*width: 300px; !* Ширина *!*/
        /*float: left; !* Блоки выстраиваются по горизонтали *!*/
        margin: 0px 10px ; /* Отступы */
        /*text-align: center; !* Выравнивание по центру *!*/
    }
    .block-team-member-1{
        padding: 10px;
    }
    .col-lg-4 {
        max-width: 320px;
    }
    .all-news {
        margin-top: -180px;
        /* float: right; */
        /* padding-right: 130px; */
        margin-right: 90px;
    }
</style>

