<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="styles/site.css" rel="stylesheet">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/site.js"></script>
    <title>Онлайн магазин</title>
</head>
<body>
<header>
    <div id="headerInside">
        <div id="logo"></div>
        <div id="companyName">Brand</div>
        <div id="navWrap">
            <a href="/">
                Главная
            </a>
            <a href="index.php?page=shop">
                Магазин
            </a>
        </div>
    </div>
</header>

<div id="content">
    <?php
     $goods = [
        [
          'id' => 1,
          'name' => 'Iphone',
          'desc' => 'Iphone никогда не подводил качеством своих товаров, поэтому и цена довольно большая.',
          'img' => '/images/goods/iphone.jpg',
          'price' => '20 000 руб.'
        ],
        [
            'id' => 2,
            'name' => 'HTC',
            'desc' => 'HTC подходит для людей, которым нужен недорогой качественный телефон.',
            'img' => '/images/goods/htc.jpg',
            'price' => '12 000 руб.'
        ],
        [
           'id' => 3,
            'name' => 'Samsung',
            'desc' => 'Samsung также, как и Iphone никогда не подводит качеством, но Samsung отличается более низкой ценой.',
            'img' => '/images/goods/samsung.jpg',
            'price' => '14 000 руб.'
        ],
        [
           'id' => 4,
            'name' => 'Xiaomi',
            'desc' => 'Xiaomi один из китайских недорогих брендов.',
            'img' => '/images/goods/xiaomi.jpg',
            'price' => '11 000 руб.'
        ],
        [
           'id' => 5,
            'name' => 'Honor',
            'desc' => 'Honor отличный китайский смартфон, который имеет превосходную камеру.',
            'img' => '/images/goods/honor.jpg',
            'price' => '13 000 руб.'
        ],
        [
           'id' => 6,
            'name' => 'Huawei',
            'desc' => 'Huawei также, как и honor имеет отличную камеру и большой экран.',
            'img' => '/images/goods/huawei.jpg',
            'price' => '12 000 руб.'
        ]
     ];

     $page = $_GET['page'];
     if (!isset($page)) {
        require('templates/main.php');
     } elseif ($page == 'shop') {
        require('templates/shop.php');
     } elseif ($page == 'product') {
        $id = $_GET['id'];
        $good = [];
        foreach ($goods as $product) {
           if ($product['id'] == $id) {
            $good = $product;
            break;
           }
        }
        require('templates/openedProduct.php');
     }
    ?>

</div>

<footer>
    <div id="footerInside">

        <div id="contacts">
            <div class="contactWrap">
                <img src="images/envelope.svg" class="contactIcon">
                tofindaio@gmail.com
            </div>
            <div class="contactWrap">
                <img src="images/phone-call.svg" class="contactIcon">
                8 981 142 63 16
            </div>
            <div class="contactWrap">
                <img src="images/placeholder.svg" class="contactIcon">
                Санкт-Петербург
            </div>
        </div>

        <div id="footerNav">
            <a href="/">Главная</a>
            <a href="index.php?page=shop">Магазин</a>
        </div>

        <div id="social">
            <img class="socialItem" src="images/vk-social-logotype.svg">
            <img class="socialItem" src="images/google-plus-social-logotype.svg">
            <img class="socialItem" src="images/facebook-logo.svg">
        </div>

        <div id="copyrights">&copy; Brandshop</div>
    </div>
</footer>

</body>
</html>