<?php
require_once "../controller/feedbackController.php";
session_start();
if (isset($_POST['submit'])) {
    $result = new FeedbackForm();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Эмил ВторМет - Главная страница</title>

    <!-- Local js files -->
    <script type="text/javascript" src="../js/jquery-1.11.3.js"></script>

    <!-- Local js files -->
    <script type="text/javascript" src="../js/main.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="../js/google.maps.api.js"></script>

    <!-- CSS files -->
    <link href="../css/common.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">

    <!-- Fonts -->
    <!--<link href="fonts/" rel="stylesheet">-->

    <!-- Bootstrap -->
    <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>-->
    <!--<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>-->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="../js/bootstrap.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">.fancybox-margin{margin-right:17px;}</style>
</head>
<body>
<!-- Begin top-line -->
<div class="top-box">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <a class="logo" href="../index.html"><span>Эмил</span>ВторМет</a>
            </div>
            <div class="col-md-5 col-sm-12">
                <h4>Закупка б/у электродвигателей, <br/> кабеля, а также лома черных <br/> ицветных металов</h4>
            </div>
            <div class=" contacts col-md-4 col-sm-12">
                <h4>Свяжитесь с нами</h4>
                <strong>8-985-294-47-07 <br/> 8-926-282-83-41 <br/> pismo@vtormet99.ru</strong>
            </div>
        </div>
    </div>
</div>
<!-- End top-line -->
<!--Begin header-->
<header>
    <div class="container">
        <nav class="navbar">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div id="navbar-collapse" class="collapse navbar-collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="../index.html">Главная<span></span></a></li>
                        <li><a href="shopping.html">Что мы покупаем?<span></span></a></li>
                        <li><a href="#">Фотографии товара<span></span></a></li>
                        <li><a class="first-active" href="contact.php">Контакты<span></span></a></li>
                    </ul>

                </div>

            </div>
        </nav>
    </div>
</header>
<!--End header-->

<!--Begin form-->

<section class="form">
    <div class="container">
        <div class="row">
            <div class="col-md-12 feedback-form">
                <h1><strong>Напешите</strong> нам</h1>
                <h3 class="error"><?php if (isset($_SESSION['error'])) { echo $_SESSION['error']; } ?></h3>
                <form class="row post-form"  method="post">

                    <div class="form-group col-md-4">
                        <input type="text" class="name" name="name" placeholder="Имя:" value="<?php if (isset ($_SESSION['name'])) { echo $_SESSION['name']; } ?>"/>
                    </div>

                    <div class="form-group col-md-4">
                        <input type="email" class="email" name="email" placeholder="Email:" value="<?php if (isset ($_SESSION['email'])) { echo $_SESSION['email']; } ?>"/>
                    </div>

                    <div class="form-group col-md-4">
                        <input type="phone" class="phone" name="phone" placeholder="елефон: +38(0xx)-xxx-xx-xx" value="<?php if (isset ($_SESSION['phone'])) { echo $_SESSION['phone']; } ?>"/>
                    </div>

                    <div class="form-group col-md-12">
                        <textarea class="massage" name="massage" placeholder="Соопщение:"><?php if (isset ($_SESSION['massage'])) { echo $_SESSION['massage']; } ?></textarea>
                    </div>

                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-default" name="submit">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--End form-->

<!--Begin footer-->
<footer>
    <div class="footer container">
        <div class="row">
            <div class="col-md-6">
                <h2>КОНТАКТЫ</h2>
                <dl class="dl-horizontal">
                    <dt>Телефоны</dt>
                    <dd>8-985-294-47-07 <br/> 8-926-282-83-41</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Email</dt>
                    <dd>pismo@vtormet99.ru</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Адрес</dt>
                    <dd>РФ, г.Москва, Берюлово-Западное, ул. Никопольская, дом 6</dd>
                </dl>
            </div>

            <div class="col-md-6">
                <div class="map">

                    <input type="hidden" value="г.Москва, Берюлово-Западное, ул. Никопольская, дом 6" class="address" data-zoom="14" />

                    <div id="map-canvas"></div>

                </div>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-sm-12 col-xs-12">
                    <p><a href="#">"ЭмилВторМет"</a> - закупка цветных и черных металлов в Москве и области</p>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <a href="#"  target="_blank" class="div"><img src="../images/logo.png" alt="акула"/>Разработка сайта: "Акула"</a>
                </div>

            </div>
        </div>
    </div>
</footer>
<!--End footer-->
<!--Google.maps.api-->
<div id="toTop" class="show__btn-hidden btn-hidden"></div>
<?php session_unset(); ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.js"></script>
</body>
</html>