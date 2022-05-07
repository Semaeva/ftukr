<!Doctype>
<html>
<head><title>Главная</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<div id="header">
    <div class="fixed-container">
        <div class="inline-block">
        <img id="logo" src="/images/logo_.png">
            <div class="inline-block"><h2>Федерация традиционного ушу КР</h2></div>
        </div>
        <div id="menu">

            <div class="inline-block"><a href="">Главная&nbsp;/</a></div>
            <div class="inline-block" ><a href="#news">Новости&nbsp;/</a></div>

            <div class="inline-block">
                <a href="">Руководство</a>&nbsp;/</div>
            <div class="inline-block"><a href="">Школы и клубы&nbsp;/</a></div>
            <div class="inline-block"><a href="">Наши учителя&nbsp;/</a></div>
            <div class="inline-block"><a href="">Контакты&nbsp;/</a></div>
        </div>

        <div class="container">
            <br><br>
            <div id="myCarousel" class="carousel slide">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li class="item1 active"></li>
                    <li class="item2"></li>
                    <li class="item3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <img src="/images/6.png" alt="Chania" width="460" height="345">
                    </div>

                    <div class="item">
                        <img src="/images/13.png" alt="Chania" width="460" height="345">
                    </div>

                    <div class="item">
                        <img src="/images/21.png" alt="Flower" width="460" height="345">
                    </div>


                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div id="caption"></div>
        <div id="news" style="position: absolute; top:550px">
            <h2 style="color: #020a31">Новости</h2>
            <div class="inline-block"></div>
            <div class="inline-block"><a href="">Наши учителя&nbsp;/</a></div>
            <div class="inline-block"><a href="">Контакты&nbsp;/</a></div>
        </div>

    </div>


</div>


</body>
</html>
<style>

    .item{
        height: 350px;
    }
    .container{
        position: absolute;
        right: 20px;left: 20px;
        width: 100%;
    }

    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 70%;
        margin: 50px;}

    html,
    body {
        margin: 0;
        padding: 0;
        min-width: 1000px;
        background-color:white ;
    }
    #menu   {
        position: absolute;
        top: 20px;
        right: 40px;
    }

    #menu a {
        text-decoration: none;
        color: white;
    }

    .inline-block {
        text-align: left;
        margin-bottom: 10px;
        display: inline-block;
        padding-right: 20px;
    }

    .fixed-container {
        margin: 0 auto;
        position: relative;
        background-color: #b30000;
    }
    #logo{
        margin-top: 10px;
        margin-left: 40px;
    }

    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 70%;
        margin: auto;
    }
    h2{
        color: #fafa97;
    }
</style>

    <script>
    $(document).ready(function(){
        // Activate Carousel
        $("#myCarousel").carousel({interval: 1500, pause: "hover"});
        // Enable Carousel Indicators
        $(".item1").click(function(){
            $("#myCarousel").carousel(0);
        });
        $(".item2").click(function(){
            $("#myCarousel").carousel(1);
        });
        $(".item3").click(function(){
            $("#myCarousel").carousel(2);
        });
        $(".item4").click(function(){
            $("#myCarousel").carousel(3);
        });

        // Enable Carousel Controls
        $(".left").click(function(){
            $("#myCarousel").carousel("prev");
        });
        $(".right").click(function(){
            $("#myCarousel").carousel("next");
        });
    });

</script>
