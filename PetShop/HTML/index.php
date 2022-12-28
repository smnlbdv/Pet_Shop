<?php require "db.php" ?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/disign_site/salegames.svg">
    <link rel="stylesheet" href="/CSS/index.css">
    <link rel="stylesheet" href="/CSS/normalixed.css">
    <link rel="stylesheet" href="/font-montserrat/Montserrat/stylesheet.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <title>PetShop</title>
</head>

<body>
    <header id="header" class="header1">
        <div class="conteiner">
            <div class="logo">
                <a href="index.php"><img src="/disign/Лого.png" alt="logo"></a>
            </div>
            <div class="menu_icon" id="menu_icon">
                <span class="bar" id="bar"></span>
                <span class="bar" id="bar1"></span>
                <span class="bar" id="bar2"></span>
            </div>
            <nav class="menu_body" id="menu_body">
                <ul class="nav">
                    <li class="child1">
                        <img src="/disign/icon/Icon awesome-map-marker-alt.png" alt="nav-icon">
                        <a href="#">Регион</a>
                        <ul class="submenu">
			                <li><a href="#">Гродненская область</a></li>
			                <li><a href="#">Витебская область</a></li>
			                <li><a href="#">Могилевская область</a></li>
                            <li><a href="#">Гомельская область</a></li>
                            <li><a href="#">Брестская область</a></li>
                            <li><a href="#">Минская область</a></li>
			            </ul>
                    </li>
                    <li>
                        <img src="/disign/icon/Icon awesome-dog.png" alt="nav-icon">
                        <a href="#">Питомец</a>
                        <ul class="submenu child2">
			                <li><a href="#">Собаки</a></li>
			                <li><a href="#">Рыбки</a></li>
			                <li><a href="#">Птицы</a></li>
                            <li><a href="#">Грызуны</a></li>
                            <li><a href="#">Кошки</a></li>
			            </ul>
                    </li>
                    <li>
                        <img src="/disign/icon/Icon awesome-shopping-bag.png" alt="nav-icon">
                        <a href="https://yandex.ru/maps/?um=constructor%3A20a4aa964aab22341c30f706f5e1b3f1535779184a9748f305db2ba33316e2f8&source=constructorLink" target="_blank">Магазины</a>
                    </li>
                    <li>
                        <img src="/disign/icon/Icon awesome-list-alt.png" alt="nav-icon">
                        <a href="#">О нас</a>
                    </li>
                    <li>
                        <img src="/disign/icon/Icon awesome-shopping-basket.png" alt="nav-icon">
                        <a href="#">Корзина</a>
                    </li>
                    <li>
                        <img src="/disign/icon/Icon awesome-pen.png" alt="nav-icon">
                        <a href="#">Регистарция</a>
                    </li>
                </ul>
            </nav>
        </div>  
    </header>
    <section class="bg-section">
        <div class="conteiner">
            <div class="block-left">
                    <h1 class="header-h1">Лучшие товары для
                        ваших питомцев
                    </h1>
                    <p class="header-p">*по самым низким ценам</p>
                <div class="garant">
                    <div class="garant-info">
                        <img class="img-img3" src="/disign/icon/icons8-скидка-90 (1).png" alt="garant-1">
                        <p>Скидка 25% на второй товар</p>
                    </div>
                    <div class="garant-info">
                        <img class="img-img2"src="/disign/icon/icons8-лента-за-первое-место-90 (2).png" alt="garant-2">
                        <p>Товары от лучших производителей</p>
                    </div>
                    <div class="garant-info">
                        <img class="img-img"src="/disign/icon/icons8-друзья-90-1.png" alt="garant-3">
                        <p>Сотни довольных покупателей</p>
                    </div>
                </div>
                <div class="block-btn">
                    <a class="button" href="#">Подробнее</a>
                </div>
            </div>
            <div class="block-right">
                <img src="/disign/dog.png" alt="">
            </div>
        </div>
    </section>
    <section class="grid-caregory">
            <p class="conteiner-p">Вид питомца</p>
            <div class="grid-conteiner">
                <div class="kacegory">
                    <div class="img-1">

                    </div>
                </div>
                <div class="kacegory">
                    <div class="img-2">

                    </div>
                </div>
                <div class="kacegory class1">
                    <div class="img-3">

                    </div>
                </div>
                <div class="kacegory">
                    <img class="" src="/disign/gategory/category-new/Сгруппировать 215.png" alt="">
                </div>
                <div class="kacegory class2">
                    <div class="img-5">

                    </div>
                </div>
               
            </div>
    </section>
    <section class="image-slider  akzii">
            <p class="conteiner-p">Акции</p>
            
            <div class="image-slider swiper">
                <!-- Additional required wrapper -->
                <div class="image-slider_wrapper swiper-wrapper">
                  <!-- Slides -->
                    <?php foreach ($info as $info): ?>
                        <div class="image-slider_slide swiper-slide">
                                <div class="image-slider_image">
                                    <div class="block-akzii">
                                        <a href="#popup" class="click-img" data-id="<?php echo $info['id'] ?>" ><img src="<?php echo $info['image'] ?>" alt=""></a>
                                    </div>
                                </div>
                        </div>
                    <?php endforeach; ?> 
                </div> 
                
                <!-- If we need pagination -->
              
                <!-- If we need navigation buttons -->
                <!-- <div class="image-slider_btn swiper-button-prev"></div>
                <div class="image-slider_btn swiper-button-next"></div> -->
                <div class="pag">
                    <div class="swiper-pagination"></div>
                </div>
                
                <!-- If we need scrollbar -->
            </div>

    </section>
    <section class="brend">
        <p class="conteiner-p">Наши партнеры</p>
        <div class="con-pod con-pod2">
            <!-- <img class="img_bg" src="/disign/brend/8ecbf6afad505d6d2dc99bbc4fd89b6f.svg" alt=""> -->
            <a href="https://www.pedigree.ru/o-nas" target="_blank"><img class="img_bg" src="/disign/brend/Сгруппировать 52.png" alt=""></a>
            <a href="https://brit-petfood.by/about/" target="_blank" ><img class="img_bg" src="/disign/brend/Сгруппировать 53.png" alt=""></a>
            <a href="https://www.royalcanin.com/us/about-us" target="_blank"><img class="img_bg" src="/disign/brend/Сгруппировать 54.png" alt=""></a>
            <a href="https://stage.chappi.ru/" target="_blank"><img class="img_bg" src="/disign/brend/Сгруппировать 55.png" alt=""></a>
            <a href="https://www.ever-clean.ru/о-нас/" target="_blank"><img class="img_bg" src="/disign/brend/Сгруппировать 56.png" alt=""></a>
        </div>
    </section>
    <section class="podpiska">
        <p class="conteiner-p2">Узнавайте первыми о скидках и бонусах!</p>
        <div class="con-pod">
            <div class="block-left1">
                    <form action="/files_recall/recall/mail.php" method="post">
                        <div class="input-podpis">
                            <input name="email" class="search-pochta" type="text" placeholder="Ваш email..."> 
                        </div>
                        <button class="button" class="block-btn block-1-1 "  type="submit" >
                            Подписаться
                        </button>
                    </form >

            
                
            </div>
            <img class="img-dogg" src="/disign/podpiska/Dogs_Jack_Russell_461862.png" alt="">
        </div>
    </section>
    <footer class="footer">
        <div class="con3 conteiner">
            <div class="o-company">
                <p class="conteiner-p3">О компании</p>
                <div class="block-lin">
                    <img src="/disign/icon-footer/Линия 22.png" alt="">
                <ul class="first1">
                    <li>Ваканзии</li>
                    <li>О нас</li>
                    <li>Наш магазины</li>
                    <li>Пункты самовывоза</li>
                  </ul>
                </div>
            </div>
            <div class="o-company">
                <p class="conteiner-p3">Магазин</p>
                    <div class="block-lin">
                        <img src="/disign/icon-footer/Линия 22.png" alt="">
                    <ul class="first1">
                        <li>Каталог</li>
                        <li>Питомцы</li>
                        <li>Корзина</li>
                        <li>Регион</li>
                    </ul>
                    </div>
            </div>
            <div class="o-company">
                <p class="conteiner-p3">Контакты</p>
                    <div class="block-lin">
                        <img src="/disign/icon-footer/Линия 22.png" alt="">
                        <ul class="first1">
                            <li>Адрес: г. Минск, ул. Гая, 178/89</li>
                            <li>Email: PetShop@yandex.by</li>
                            <li>+375(29)545-00-00</li>
                            <li>+375(29)545-15-15</li>
                        </ul>
                    </div>
            </div>
            <div class="o-company">
                <div class="block-werh">
                    <img src="/disign/icon-footer/Icon awesome-vk.png" alt="vk.icon">
                    <img src="/disign/icon-footer/Icon awesome-instagram.png" alt="inst.icon">
                    <img src="/disign/icon-footer/Icon awesome-facebook.png" alt="face.icon">
                </div>
                <div class="block-niz">
                    <img src="/disign/icon-footer/Icon awesome-cc-visa.png" alt="visa.icon">
                    <img src="/disign/icon-footer/Icon awesome-cc-mastercard.png" alt="master.icon">
                    <img src="/disign/icon-footer/Icon payment-verified-by-visa.png" alt="face.icon">
                </div>
            </div>
        </div>  
    </footer>
    <script src="/js/jquery-3.6.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://kit.fontawesome.com/95a02bd20d.js"></script>
    <script src="/js/click.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="/js/script.js"></script>
    <script src="/js/scroll.js"></script>
    <script src="/js/localStorage.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js" integrity="sha256-huW7yWl7tNfP7lGk46XE+Sp0nCotjzYodhVKlwaNeco=" crossorigin="anonymous"></script>
    <script>
    SmoothScroll({
        // Время скролла 400 = 0.4 секунды
        animationTime    : 600,
        // Размер шага в пикселях 
        stepSize         : 75,

        // Дополнительные настройки:
        
        // Ускорение 
        accelerationDelta : 30,  
        // Максимальное ускорение
        accelerationMax   : 2,   

        // Поддержка клавиатуры
        keyboardSupport   : true,  
        // Шаг скролла стрелками на клавиатуре в пикселях
        arrowScroll       : 50,

        // Pulse (less tweakable)
        // ratio of "tail" to "acceleration"
        pulseAlgorithm   : true,
        pulseScale       : 4,
        pulseNormalize   : 1,

        // Поддержка тачпада
        touchpadSupport   : true,
    })
    </script>
    <script src="//code.jivo.ru/widget/VuVz7nAVQ7" async></script>
    
    
    
    <div id="popup" class="popup">
            <a href="#header" class="popup_area"></a>
                <div class="poput_body">
                    <div class="popup_content">
                        <a class="popup_close" href="#header">X</a>
                        <div class="popup_title">
                            <img src="" alt="">
                        </div>
                        <div class="popup_text">
                            <p></p>
                        </div>
                    </div>
                </div>

    </div>
</body>
</html>