<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$CurDir = $APPLICATION->GetCurDir();
$CurUri = $APPLICATION->GetCurUri();
?>
<!doctype html>
<html xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<head>
    <?

    use Bitrix\Main\Page\Asset;
    use Bitrix\Main\UI\Extension;

    // CSS;
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/js/fancy/jquery.fancybox.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/bootstrap.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/style.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/megamenu.css');
    ?>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
    <?
    // JS
    CJSCore::Init(array("jquery3"));
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/fancy/jquery.fancybox.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/myscripts.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/js/jquery-1.11.1.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/js/megamenu.js');
    ?>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
    <?
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/js/menu_jquery.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/js/js/menu_jquery.js');
    // HEADERS

    $APPLICATION->ShowHead();
    ?>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="apple-touch-icon" sizes="57x57" href="/local/ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/local/ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/local/ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/local/ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/local/ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/local/ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/local/ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/local/ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/local/ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/local/ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/local/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/local/ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/local/ico/favicon-16x16.png">
    <link rel="manifest" href="/local/ico/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/local/ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title><? $APPLICATION->ShowTitle() ?></title>
</head>
<body>
<?$APPLICATION->ShowPanel();?>

<div class="top_bg">
    <div class="container">
        <div class="header_top">
            <div class="top_right">
                <ul>
                    <li><a href="#">help</a></li>|
                    <li><a href="contact.html">Contact</a></li>|
                    <li><a href="#">Delivery information</a></li>
                </ul>
            </div>
            <div class="top_left">
                <h2><span></span> Call us : 032 2352 782</h2>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="header_bg">
    <div class="container">
        <div class="header">
            <div class="head-t">
                <div class="logo">
                    <a href="index.html"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" class="img-responsive" alt=""/> </a>
                </div>
                <!-- start header_right -->
                <div class="header_right">
                    <div class="rgt-bottom">
                        <div class="log">
                            <div class="login" >
                                <div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
                                    <div id="loginBox">
                                        <form id="loginForm">
                                            <fieldset id="body">
                                                <fieldset>
                                                    <label for="email">Email Address</label>
                                                    <input type="text" name="email" id="email">
                                                </fieldset>
                                                <fieldset>
                                                    <label for="password">Password</label>
                                                    <input type="password" name="password" id="password">
                                                </fieldset>
                                                <input type="submit" id="login" value="Sign in">
                                                <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                                            </fieldset>
                                            <span><a href="#">Forgot your password?</a></span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reg">
                            <a href="register.html">REGISTER</a>
                        </div>
                        <div class="cart box_1">
                            <a href="checkout.html">
                                <h3> <span class="simpleCart_total">$0.00</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">0</span> items)<img src="images/bag.png" alt=""></h3>
                            </a>
                            <p><a href="javascript:;" class="simpleCart_empty">(empty card)</a></p>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="create_btn">
                            <a href="checkout.html">CHECKOUT</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="search">
                        <form>
                            <input type="text" value="" placeholder="search...">
                            <input type="submit" value="">
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!-- start header menu -->
            <ul class="megamenu skyblue">
                <li class="active grid"><a class="color1" href="index.html">Home</a></li>
                <li class="grid"><a class="color2" href="#">new arrivals</a>
                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Clothing</h4>
                                    <ul>
                                        <li><a href="women.html">new arrivals</a></li>
                                        <li><a href="women.html">men</a></li>
                                        <li><a href="women.html">women</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">brands</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>kids</h4>
                                    <ul>
                                        <li><a href="women.html">Pools&Tees</a></li>
                                        <li><a href="women.html">shirts</a></li>
                                        <li><a href="women.html">shorts</a></li>
                                        <li><a href="women.html">twinsets</a></li>
                                        <li><a href="women.html">kurts</a></li>
                                        <li><a href="women.html">jackets</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Bags</h4>
                                    <ul>
                                        <li><a href="women.html">Handbag</a></li>
                                        <li><a href="women.html">Slingbags</a></li>
                                        <li><a href="women.html">Clutches</a></li>
                                        <li><a href="women.html">Totes</a></li>
                                        <li><a href="women.html">Wallets</a></li>
                                        <li><a href="women.html">Laptopbags</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>account</h4>
                                    <ul>
                                        <li><a href="#">login</a></li>
                                        <li><a href="register.html">create an account</a></li>
                                        <li><a href="women.html">create wishlist</a></li>
                                        <li><a href="women.html">my shopping bag</a></li>
                                        <li><a href="women.html">brands</a></li>
                                        <li><a href="women.html">create wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Accessories</h4>
                                    <ul>
                                        <li><a href="women.html">Belts</a></li>
                                        <li><a href="women.html">Pens</a></li>
                                        <li><a href="women.html">Eyeglasses</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">Watches</a></li>
                                        <li><a href="women.html">Jewellery</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Footwear</h4>
                                    <ul>
                                        <li><a href="women.html">new arrivals</a></li>
                                        <li><a href="women.html">men</a></li>
                                        <li><a href="women.html">women</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                        </div>
                    </div>
                </li>
                <li><a class="color4" href="#">TUXEDO</a>
                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Clothing</h4>
                                    <ul>
                                        <li><a href="women.html">new arrivals</a></li>
                                        <li><a href="women.html">men</a></li>
                                        <li><a href="women.html">women</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">brands</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>kids</h4>
                                    <ul>
                                        <li><a href="women.html">Pools&Tees</a></li>
                                        <li><a href="women.html">shirts</a></li>
                                        <li><a href="women.html">shorts</a></li>
                                        <li><a href="women.html">twinsets</a></li>
                                        <li><a href="women.html">kurts</a></li>
                                        <li><a href="women.html">jackets</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Bags</h4>
                                    <ul>
                                        <li><a href="women.html">Handbag</a></li>
                                        <li><a href="women.html">Slingbags</a></li>
                                        <li><a href="women.html">Clutches</a></li>
                                        <li><a href="women.html">Totes</a></li>
                                        <li><a href="women.html">Wallets</a></li>
                                        <li><a href="women.html">Laptopbags</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>account</h4>
                                    <ul>
                                        <li><a href="#">login</a></li>
                                        <li><a href="register.html">create an account</a></li>
                                        <li><a href="women.html">create wishlist</a></li>
                                        <li><a href="women.html">my shopping bag</a></li>
                                        <li><a href="women.html">brands</a></li>
                                        <li><a href="women.html">create wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Accessories</h4>
                                    <ul>
                                        <li><a href="women.html">Belts</a></li>
                                        <li><a href="women.html">Pens</a></li>
                                        <li><a href="women.html">Eyeglasses</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">Watches</a></li>
                                        <li><a href="women.html">Jewellery</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Footwear</h4>
                                    <ul>
                                        <li><a href="women.html">new arrivals</a></li>
                                        <li><a href="women.html">men</a></li>
                                        <li><a href="women.html">women</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                        </div>
                    </div>
                </li>
                <li><a class="color5" href="#">SWEATER</a>
                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Clothing</h4>
                                    <ul>
                                        <li><a href="women.html">new arrivals</a></li>
                                        <li><a href="women.html">men</a></li>
                                        <li><a href="women.html">women</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">brands</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>kids</h4>
                                    <ul>
                                        <li><a href="women.html">Pools&Tees</a></li>
                                        <li><a href="women.html">shirts</a></li>
                                        <li><a href="women.html">shorts</a></li>
                                        <li><a href="women.html">twinsets</a></li>
                                        <li><a href="women.html">kurts</a></li>
                                        <li><a href="women.html">jackets</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Bags</h4>
                                    <ul>
                                        <li><a href="women.html">Handbag</a></li>
                                        <li><a href="women.html">Slingbags</a></li>
                                        <li><a href="women.html">Clutches</a></li>
                                        <li><a href="women.html">Totes</a></li>
                                        <li><a href="women.html">Wallets</a></li>
                                        <li><a href="women.html">Laptopbags</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>account</h4>
                                    <ul>
                                        <li><a href="#">login</a></li>
                                        <li><a href="register.html">create an account</a></li>
                                        <li><a href="women.html">create wishlist</a></li>
                                        <li><a href="women.html">my shopping bag</a></li>
                                        <li><a href="women.html">brands</a></li>
                                        <li><a href="women.html">create wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Accessories</h4>
                                    <ul>
                                        <li><a href="women.html">Belts</a></li>
                                        <li><a href="women.html">Pens</a></li>
                                        <li><a href="women.html">Eyeglasses</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">Watches</a></li>
                                        <li><a href="women.html">Jewellery</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Footwear</h4>
                                    <ul>
                                        <li><a href="women.html">new arrivals</a></li>
                                        <li><a href="women.html">men</a></li>
                                        <li><a href="women.html">women</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                        </div>
                    </div>
                </li>
                <li><a class="color6" href="#">SHOES</a>
                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Clothing</h4>
                                    <ul>
                                        <li><a href="women.html">new arrivals</a></li>
                                        <li><a href="women.html">men</a></li>
                                        <li><a href="women.html">women</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">brands</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>kids</h4>
                                    <ul>
                                        <li><a href="women.html">Pools&Tees</a></li>
                                        <li><a href="women.html">shirts</a></li>
                                        <li><a href="women.html">shorts</a></li>
                                        <li><a href="women.html">twinsets</a></li>
                                        <li><a href="women.html">kurts</a></li>
                                        <li><a href="women.html">jackets</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Bags</h4>
                                    <ul>
                                        <li><a href="women.html">Handbag</a></li>
                                        <li><a href="women.html">Slingbags</a></li>
                                        <li><a href="women.html">Clutches</a></li>
                                        <li><a href="women.html">Totes</a></li>
                                        <li><a href="women.html">Wallets</a></li>
                                        <li><a href="women.html">Laptopbags</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>account</h4>
                                    <ul>
                                        <li><a href="#">login</a></li>
                                        <li><a href="register.html">create an account</a></li>
                                        <li><a href="women.html">create wishlist</a></li>
                                        <li><a href="women.html">my shopping bag</a></li>
                                        <li><a href="women.html">brands</a></li>
                                        <li><a href="women.html">create wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Accessories</h4>
                                    <ul>
                                        <li><a href="women.html">Belts</a></li>
                                        <li><a href="women.html">Pens</a></li>
                                        <li><a href="women.html">Eyeglasses</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">Watches</a></li>
                                        <li><a href="women.html">Jewellery</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Footwear</h4>
                                    <ul>
                                        <li><a href="women.html">new arrivals</a></li>
                                        <li><a href="women.html">men</a></li>
                                        <li><a href="women.html">women</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                        </div>
                    </div>
                </li>

                <li><a class="color7" href="#">GLASSES</a>
                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Clothing</h4>
                                    <ul>
                                        <li><a href="women.html">new arrivals</a></li>
                                        <li><a href="women.html">men</a></li>
                                        <li><a href="women.html">women</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">brands</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>kids</h4>
                                    <ul>
                                        <li><a href="women.html">Pools&Tees</a></li>
                                        <li><a href="women.html">shirts</a></li>
                                        <li><a href="women.html">shorts</a></li>
                                        <li><a href="women.html">twinsets</a></li>
                                        <li><a href="women.html">kurts</a></li>
                                        <li><a href="women.html">jackets</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Bags</h4>
                                    <ul>
                                        <li><a href="women.html">Handbag</a></li>
                                        <li><a href="women.html">Slingbags</a></li>
                                        <li><a href="women.html">Clutches</a></li>
                                        <li><a href="women.html">Totes</a></li>
                                        <li><a href="women.html">Wallets</a></li>
                                        <li><a href="women.html">Laptopbags</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>account</h4>
                                    <ul>
                                        <li><a href="#">login</a></li>
                                        <li><a href="register.html">create an account</a></li>
                                        <li><a href="women.html">create wishlist</a></li>
                                        <li><a href="women.html">my shopping bag</a></li>
                                        <li><a href="women.html">brands</a></li>
                                        <li><a href="women.html">create wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Accessories</h4>
                                    <ul>
                                        <li><a href="women.html">Belts</a></li>
                                        <li><a href="women.html">Pens</a></li>
                                        <li><a href="women.html">Eyeglasses</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">Watches</a></li>
                                        <li><a href="women.html">Jewellery</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Footwear</h4>
                                    <ul>
                                        <li><a href="women.html">new arrivals</a></li>
                                        <li><a href="women.html">men</a></li>
                                        <li><a href="women.html">women</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                        </div>
                    </div>
                </li>

                <li><a class="color8" href="#">T-SHIRT</a>
                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Clothing</h4>
                                    <ul>
                                        <li><a href="women.html">new arrivals</a></li>
                                        <li><a href="women.html">men</a></li>
                                        <li><a href="women.html">women</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">brands</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>kids</h4>
                                    <ul>
                                        <li><a href="women.html">trends</a></li>
                                        <li><a href="women.html">sale</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Bags</h4>
                                    <ul>
                                        <li><a href="women.html">trends</a></li>
                                        <li><a href="women.html">sale</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>account</h4>
                                    <ul>
                                        <li><a href="#">login</a></li>
                                        <li><a href="register.html">create an account</a></li>
                                        <li><a href="women.html">create wishlist</a></li>
                                        <li><a href="women.html">my shopping bag</a></li>
                                        <li><a href="women.html">brands</a></li>
                                        <li><a href="women.html">create wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Accessories</h4>
                                    <ul>
                                        <li><a href="women.html">trends</a></li>
                                        <li><a href="women.html">sale</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Footwear</h4>
                                    <ul>
                                        <li><a href="women.html">new arrivals</a></li>
                                        <li><a href="women.html">men</a></li>
                                        <li><a href="women.html">women</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                        </div>
                    </div>
                </li>
                <li><a class="color9" href="#">WATCHES</a>
                    <div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Clothing</h4>
                                    <ul>
                                        <li><a href="women.html">new arrivals</a></li>
                                        <li><a href="women.html">men</a></li>
                                        <li><a href="women.html">women</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">brands</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>kids</h4>
                                    <ul>
                                        <li><a href="women.html">trends</a></li>
                                        <li><a href="women.html">sale</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Bags</h4>
                                    <ul>
                                        <li><a href="women.html">trends</a></li>
                                        <li><a href="women.html">sale</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>account</h4>
                                    <ul>
                                        <li><a href="#">login</a></li>
                                        <li><a href="register.html">create an account</a></li>
                                        <li><a href="women.html">create wishlist</a></li>
                                        <li><a href="women.html">my shopping bag</a></li>
                                        <li><a href="women.html">brands</a></li>
                                        <li><a href="women.html">create wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Accessories</h4>
                                    <ul>
                                        <li><a href="women.html">trends</a></li>
                                        <li><a href="women.html">sale</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Footwear</h4>
                                    <ul>
                                        <li><a href="women.html">new arrivals</a></li>
                                        <li><a href="women.html">men</a></li>
                                        <li><a href="women.html">women</a></li>
                                        <li><a href="women.html">accessories</a></li>
                                        <li><a href="women.html">kids</a></li>
                                        <li><a href="women.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>