<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>ТехЛаб</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/js/owl.carousel.css">
    <link rel="stylesheet" href="/js/fancybox/jquery.fancybox.css?1518702866">
    <link rel="stylesheet" href="/js/animate.css?<?=time();?>">
     <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <link rel="stylesheet" href="/style.css?<?=time();?>">
</head>
<?php
if($_SERVER['SCRIPT_NAME'] == '/' || $_SERVER['SCRIPT_NAME'] == '/index.php'){
    $main = true;
    $bodyClass = 'body--main';
}
if($_SERVER['SCRIPT_NAME'] == '/service-center.php'){
    $serviceCenter = true;
    $bodyClass = 'body--service-center';
    $title = 'Сервисный центр';
}
if($_SERVER['SCRIPT_NAME'] == '/catalog/' || $_SERVER['SCRIPT_NAME'] == '/catalog/index.php'){
    $catalog = true;
    $bodyClass = 'body--catalog';
}
if($_SERVER['SCRIPT_NAME'] == '/catalog/detail.php'){
    $catalog = true;
    $catalogDetail = true;
    $bodyClass = 'body--catalog-detail';
}
if($_SERVER['SCRIPT_NAME'] == '/news/index.php' || $_SERVER['SCRIPT_NAME'] == '/news'){
    $news = true;
    $bodyClass = 'body--news';
    $title = 'НОВОСТИ И МЕРОПРИЯТИЯ';
}
if($_SERVER['SCRIPT_NAME'] == '/news/detail.php'){
    $newsDsetail = true;
    $bodyClass = 'body--news-detail';
    $title = 'НОВОСТИ И МЕРОПРИЯТИЯ';
}
if($_SERVER['SCRIPT_NAME'] == '/contacts/index.php' || $_SERVER['SCRIPT_NAME'] == '/contacts'){
    $contacts = true;
    $bodyClass = 'body--contacts';
    $title = 'Контакты ';
}
if($_SERVER['SCRIPT_NAME'] == '/about.php'){
    $about = true;
    $bodyClass = 'body--about';
    $title = 'О компании';
}
?>

<body class="<?php 
echo $bodyClass; 
?>">
<div class="content">
<div class="content-crop">
<header> 
    <div class="wrap">
        <div class="search">
            <form action="">
                <input type="text" class="search-input">
                <button class="search-btn"></button>
            </form>
        </div>
        <a href="/" class="header-logo">
        </a><ul class="top-menu">
            <li><a href="/" class="<?php if($main){echo('active');}?>">Главная</a>
            </li><li><a href="/catalog" class="<?php if($catalog){echo('active');}?>">Каталог</a>
            </li><li><a href="/about.php" class="<?php if($about){echo('active');}?>">О компании</a>
            </li><li><a href="/service-center.php" class="<?php if($serviceCenter){echo('active');}?>">Сервисный центр</a>
            </li><li><a href="/news" class="<?php if($news){echo('active');}?>">Новости</a>
            </li><li><a href="/contacts" class="<?php if($contacts){echo('active');}?>">Контакты</a>
            </li><li>
                <a href="JavaScript:;" class="search-btn"></a>
            </li>
        </ul><div class="header-right">
            <a href="tel:+375297362139" class="header-phone">+375 29 736 21 39</a>
            <a href="mailto:Tehlab@mail.ru" class="header-phone">tehlab@mail.ru</a>
        </div>
    </div>
</header>
<div class="page-top">
    <h1 class="wow fadeIn"><?php echo($title);?></h1>
</div>
<div class="main">
    <div class="main-top">
        <div class="main-top__items" data-js-owl="1">
            <div class="main-top__item">
                <div class="main-top__bg" style="background-image: url(images/main-top.png);"></div>
                <div class="main-top__purple">
                    <div class="main-top__purple-text">
                        <a href="#" class="logo"></a>
                        <div class="title-h1">Лабораторное <br>оборудования <br>и расходные <br>материалы</div>
                        <a href="#" class="phone">Подробнее</a>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="main-top__nav">
                    <div class="main-top__nav-circle">
                        <div class="main-top__nav-prev"  data-js-owl-prev></div>
                        <div class="main-top__nav-slide">01</div>
                        <div class="main-top__nav-next" data-js-owl-next></div>
                    </div>
                    <div class="main-top__nav-top">
                        <h3>ОБОРУДОВАНИЕ ДЛЯ КОНТРОЛЯ КАЧЕСТВА ЛЕКАРСТВЕННЫХ ФОРМ. Pharma test</h3>
                        <p>Оборудование для контроля качества фармацевтических препаратов и упаковки. Соответствие стандартам европейской фармакопеи.</p>
                    </div>
                    <div class="main-top__nav-bot">
                        <div class="main-top__nav-item active" data-js-owl-nav="0">01
                        </div><div class="main-top__nav-item" data-js-owl-nav="1">02
                        </div><div class="main-top__nav-item" data-js-owl-nav="2">03
                        </div><div class="main-top__nav-item" data-js-owl-nav="3">04</div>
                    </div>
                </div>
            </div>
            <div class="main-top__item">
                <div class="main-top__bg" style="background-image: url(images/main-top.png);"></div>
                <div class="main-top__purple">
                    <div class="main-top__purple-text">
                        <a href="#" class="logo"></a>
                        <div class="title-h1">Лабораторное <br>оборудования <br>и расходные <br>материалы</div>
                        <a href="#" class="phone">Подробнее</a>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="main-top__nav">
                     <div class="main-top__nav-circle">
                        <div class="main-top__nav-prev"  data-js-owl-prev></div>
                        <div class="main-top__nav-slide">02</div>
                        <div class="main-top__nav-next" data-js-owl-next></div>
                    </div>
                    <div class="main-top__nav-top">
                        <h3>ОБОРУДОВАНИЕ ДЛЯ КОНТРОЛЯ КАЧЕСТВА ЛЕКАРСТВЕННЫХ ФОРМ. Pharma test</h3>
                        <p>Оборудование для контроля качества фармацевтических препаратов и упаковки. Соответствие стандартам европейской фармакопеи.</p>
                    </div>
                    <div class="main-top__nav-bot">
                        <div class="main-top__nav-item" data-js-owl-nav="0">01
                        </div><div class="main-top__nav-item active" data-js-owl-nav="1">02
                        </div><div class="main-top__nav-item" data-js-owl-nav="2">03
                        </div><div class="main-top__nav-item" data-js-owl-nav="3">04</div>
                    </div>
                </div>
            </div>
            <div class="main-top__item">
                <div class="main-top__bg" style="background-image: url(images/main-top.png);"></div>
                <div class="main-top__purple">
                    <div class="main-top__purple-text">
                        <a href="#" class="logo"></a>
                        <div class="title-h1">Лабораторное <br>оборудования <br>и расходные <br>материалы</div>
                        <a href="#" class="phone">Подробнее</a>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="main-top__nav">
                     <div class="main-top__nav-circle">
                        <div class="main-top__nav-prev"  data-js-owl-prev></div>
                        <div class="main-top__nav-slide">03</div>
                        <div class="main-top__nav-next" data-js-owl-next></div>
                    </div>
                    <div class="main-top__nav-top">
                        <h3>ОБОРУДОВАНИЕ ДЛЯ КОНТРОЛЯ КАЧЕСТВА ЛЕКАРСТВЕННЫХ ФОРМ. Pharma test</h3>
                        <p>Оборудование для контроля качества фармацевтических препаратов и упаковки. Соответствие стандартам европейской фармакопеи.</p>
                    </div>
                    <div class="main-top__nav-bot">
                        <div class="main-top__nav-item" data-js-owl-nav="0">01
                        </div><div class="main-top__nav-item" data-js-owl-nav="1">02
                        </div><div class="main-top__nav-item active" data-js-owl-nav="2">03
                        </div><div class="main-top__nav-item" data-js-owl-nav="3">04</div>
                    </div>
                </div>
            </div>
            <div class="main-top__item">
                <div class="main-top__bg" style="background-image: url(images/main-top.png);"></div>
                <div class="main-top__purple">
                    <div class="main-top__purple-text">
                        <a href="#" class="logo"></a>
                        <div class="title-h1">Лабораторное <br>оборудования <br>и расходные <br>материалы</div>
                        <a href="#" class="phone">Подробнее</a>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="main-top__nav">
                     <div class="main-top__nav-circle">
                        <div class="main-top__nav-prev"  data-js-owl-prev></div>
                        <div class="main-top__nav-slide">04</div>
                        <div class="main-top__nav-next" data-js-owl-next></div>
                    </div>
                    <div class="main-top__nav-top">
                        <h3>ОБОРУДОВАНИЕ ДЛЯ КОНТРОЛЯ КАЧЕСТВА ЛЕКАРСТВЕННЫХ ФОРМ. Pharma test</h3>
                        <p>Оборудование для контроля качества фармацевтических препаратов и упаковки. Соответствие стандартам европейской фармакопеи.</p>
                    </div>
                    <div class="main-top__nav-bot">
                        <div class="main-top__nav-item" data-js-owl-nav="0">01
                        </div><div class="main-top__nav-item" data-js-owl-nav="1">02
                        </div><div class="main-top__nav-item" data-js-owl-nav="2">03
                        </div><div class="main-top__nav-item active" data-js-owl-nav="3">04</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap">