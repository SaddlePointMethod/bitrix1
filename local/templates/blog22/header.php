<?php
use Bitrix\Main\Page\Asset;
?>

<!--A Design by W3layouts
    Author: W3layout
    Author URL: http://w3layouts.com
    License: Creative Commons Attribution 3.0 Unported
    License URL: http://creativecommons.org/licenses/by/3.0/
    -->
<!DOCTYPE HTML>
<head>
    <?php $APPLICATION->ShowHead(); ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <?php
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/style.css');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery-1.11.1.min.js');
    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">');
    Asset::getInstance()->addString("<link href='//fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>");
    Asset::getInstance()->addString("<link href='//fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>");
    ?>

</head>
<body>
<?php $APPLICATION->ShowPanel();?>
<div class="header">
    <div class="header_top">
        <div class="wrap">
            <div class="header-top-left">
                <div class="logo">
                    <a href="index.html"><h1>SHARE</h1>
                        <h2>The Blog</h2>
                    </a>
                </div>
                <div class="menu">
                    <ul class="menu bounce">
                        <li class="active"><a href="index.html" class="active">Home</a></li>
                        <li><a href="single.html">About</a></li>
                        <li><a href="single.html">Support</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <div class="header-top-right">
                <div class="social-icons">
                    <ul>
                        <li><a class="youtube" href="#" target="_blank"><span>Youtube</span></a></li>
                        <li><a class="facebook" href="#" target="_blank"><span>Facebook</span> </a></li>
                        <li><a class="twitter" href="#" target="_blank"><span>Twitter</span> </a></li>
                        <li><a class="skype" href="#" target="_blank"><span>Skype</span> </a></li>
                        <li><a class="likedin" href="#" target="_blank"><span>Likedin</span> </a></li>
                        <li><a class="vimeo" href="#" target="_blank"><span>vimeo</span> </a></li>
                        <div class="clear"></div>
                    </ul>
                </div>
                <div class="search_box">
                    <form>
                        <input type="text" class="text-box" placeholder="Search for Blog"><input type="submit" value="" />
                    </form>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!--------------------- Main Content ------------------->
<div class="wrap">
    <div class="main">
        <div class="content">