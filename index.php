<!DOCTYPE html>
<html lang="ru" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css?v=7">
    <title>PLAFON :: LINUX</title>
</head>
<body>
    <input type="checkbox" id="superthemes" class="superthemes" name="themes">
    <div class="root">
        <div class="content">

            <div id="up"></div>

            <!--HEADER-->
            <header id="header" class="header v-center">
                <div class="header-cont v-center">
                    <div class="header-left v-center inline">
                        <a class="v-center inline" href="/">
                            <img class="header-logo" src="/images/vector/plafon-logo.svg" alt="PLAFON">
                            <p>PLAFON</p>
                        </a>
                    </div>
                    <nav class="header-center inline">
                        <a class="btn h-btn bg-red" href="/">Главная</a>
                        <a class="btn h-btn bg-purple" href="#">Новости</a>
                        <a class="btn h-btn bg-orange" href="#">Статьи</a>
                        <a class="btn h-btn bg-green" href="#">Релизы</a>
                        <a class="btn h-btn bg-grey" href="#">Приложения</a>
                        <a class="btn h-btn bg-blue" href="#">О проекте</a>
                    </nav>
                    <div class="header-right inline">
                        <a class="icon-link v-center" href="#">
                            <svg width="23" height="27" viewBox="0 0 23 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.1612 0C10.1868 0 9.38958 0.664357 8.8581 1.68304C4.56192 2.70172 2.7903 6.55499 2.7903 11.1612V15.3688C2.7903 17.2733 0.9301 19.5764 0 19.5764V20.9937H2.7903H19.5764H22.3667V19.5764C21.4366 19.5764 19.5764 17.2733 19.5764 15.3688V11.1612C19.5764 6.55499 17.8048 2.70172 13.5086 1.68304C12.9328 0.664357 12.1356 0 11.1612 0ZM6.95361 22.3667C6.95361 24.6698 8.81381 26.5743 11.1612 26.5743C13.5086 26.5743 15.3688 24.7141 15.3688 22.3667H6.95361Z" fill="#333333"/>
                            </svg>
                        </a>
                        <a class="icon-link v-center" href="#">
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25.525 23.1739L19.1657 16.776C20.3219 15.1572 21.0157 13.153 21.0157 10.9947C21.0157 5.44471 16.5063 0.973877 10.9948 0.973877C5.48337 0.973877 0.973999 5.48325 0.973999 10.9947C0.973999 16.5062 5.48337 21.0155 10.9948 21.0155C13.1532 21.0155 15.1573 20.3218 16.7761 19.1655L23.174 25.5249C23.4823 25.8718 23.9448 26.026 24.3302 26.026C24.7157 26.026 25.2167 25.8718 25.4865 25.5249C26.1803 24.8697 26.1803 23.8291 25.525 23.1739ZM10.9948 18.8572C6.67817 18.8572 3.13233 15.3499 3.13233 10.9947C3.13233 6.6395 6.63962 3.13221 10.9948 3.13221C15.35 3.13221 18.8573 6.6395 18.8573 10.9947C18.8573 15.3499 15.3115 18.8572 10.9948 18.8572Z" fill="#333333"/>
                            </svg>
                        </a>
                        <a class="btn h-btn bg-light-green" href="#">Профиль</a>
                        <input type="checkbox" name="burger" id="burger" class="burgercheck none">
                        <label for="burger">
                            <div class="hide-fz"></div>
                        </label>
                        <nav class="drop-menu">
                            <a class="dd-btn" href="#">Профиль</a>
                            <a class="dd-btn" href="/">Главная</a>
                            <a class="dd-btn" href="#">Новости</a>
                            <a class="dd-btn" href="#">Статьи</a>
                            <a class="dd-btn" href="#">Релизы</a>
                            <a class="dd-btn" href="#">Приложения</a>
                            <a class="dd-btn" href="#">О проекте</a>
                            <div class="bg-red dd-bottom"></div>
                        </nav>
                        <label class="btn-burger" for="burger">
                            <div class="btn burger">
                                <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="7" y1="15.6538" x2="22" y2="15.6538" stroke="#36BAFE" stroke-width="2"/>
                                    <line y1="7.96155" x2="22" y2="7.96155" stroke="#36BAFE" stroke-width="2"/>
                                    <line y1="1.23071" x2="22" y2="1.23071" stroke="#36BAFE" stroke-width="2"/>
                                </svg>
                            </div>
                        </label>
                    </div>
                </div>
                <label for="superthemes" class="dark-light">
                    <span class="bg-check"></span>
                    <span class="on-check">
                        <svg width="2" height="18" viewBox="0 0 2 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1V17" stroke="#ED7161" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                        </svg>
                    </span>
                    <span class="off-check">
                        <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 9L4.29289 9.70711C4.68342 10.0976 5.31658 10.0976 5.70711 9.70711L5 9ZM13.7071 1.70711C14.0976 1.31658 14.0976 0.683418 13.7071 0.292893C13.3166 -0.0976311 12.6834 -0.0976311 12.2929 0.292893L13.7071 1.70711ZM1.70711 4.29289C1.31658 3.90237 0.683418 3.90237 0.292893 4.29289C-0.0976311 4.68342 -0.0976311 5.31658 0.292893 5.70711L1.70711 4.29289ZM5.70711 9.70711L13.7071 1.70711L12.2929 0.292893L4.29289 8.29289L5.70711 9.70711ZM0.292893 5.70711L4.29289 9.70711L5.70711 8.29289L1.70711 4.29289L0.292893 5.70711Z" fill="#61B872"/>
                        </svg>
                    </span>
                    <span class="switch-check"></span>
                </label>
            </header>
            <!--HEADER-END-->

            <!--MAIN-->
            <section class="body">

                <!--FIRST-BLOCK-->
                <div id="first" class="v-center first-block">
                    <img class="first-image" src="/images/vector/first-block.svg" alt="MAIN">
                    <img class="first-image first-image-dark" src="/images/vector/first-block-dark.svg" alt="MAIN">
                    <div class="text-block">
                        <div class="block v-center">
                            <h1 class="main-text black">Все свободные технологии<br>на одном ресурсе!</h1>
                            <h5 class="sub-text black">На сегодняшний день, дистрибутивы на базе ядра Линукс набирают огромную<br>популярность и на нашем проекте вы будете в курсе самых свежих опенсурс новостей</h5>
                            <div class="btns-block inline">
                                <h3 class="btn-main inline">
                                    <a href="#" class="btn b-btn bg-purple">Discord</a>
                                </h3>
                                <h3 class="btn-main inline">
                                    <a href="#" class="btn b-btn bg-red">YouTube</a>
                                </h3>
                                <h3 class="btn-main inline">
                                    <a href="#" class="btn b-btn bg-blue">ВК Паблик</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <a class="down-arrow" href="#second">
                        <img src="/images/vector/down-arrow.svg" alt="DOWN">
                    </a>
                </div>
                <!--FIRST-BLOCK-END-->

                <a href="#up" class="up-arrow">
                    <img src="/images/vector/up-arrow.svg" alt="DOWN">
                </a>

                <!--SECOND-BLOCK-->
                <div id="second" class="second-block">
                    <h2 class="main-text black tac">Что такое PLAFON?</h2>
                    <p class="sub-text black tac">Мы постараемся, в двух словах описать весь потенциал нашего сайта<br>
                    и наглядно показать вам насколько Линукс, может быть прост в<br>
                    использовании в домашних условиях ...</p>
                    <div class="grid blocks">
                        <div class="block sh-orange tac">
                            <div class="circle bg-orange-light all-center"><img src="/images/vector/filter.svg"></div>
                            <h4 class="grey title-card">Помощь новичкам</h4>
                            <p class="grey">На проекте вам постараются оказать любую помощь в настройке вашего дистрибутива. Но помните это наше хобби, а не работа.</p>
                            <a href="#" class="orange-2 more">Узнать больше</a>
                        </div>
                        <div class="block sh-green tac">
                            <div class="circle bg-green-light all-center"><img src="/images/vector/sheets.svg"></div>
                            <h4 class="grey title-card">Публикация своих статей</h4>
                            <p class="grey">А если вы хотите попробовать себя в качестве автора и опубликовать свою статью, то это с легкостью можно сделать у нас.</p>
                            <a href="#" class="green more">Узнать больше</a>
                        </div>
                        <div class="block sh-purple tac">
                            <div class="circle bg-grey-light all-center"><img src="/images/vector/comyounity.svg"></div>
                            <h4 class="grey title-card">Русскоязычное сообщество</h4>
                            <p class="grey">Полностью русскоязычное сообщество, с ламповой атмосферой и полным отсутсвием присловутой “токсичности”</p>
                            <a href="#" class="purple more">Узнать больше</a>
                        </div>
                        <div class="block sh-blue tac">
                            <div class="circle bg-blue-light all-center"><img src="/images/vector/scope.svg"></div>
                            <h4 class="grey title-card">Опенсурс технологии</h4>
                            <p class="grey">Альтернатива есть всегда и мы вам расскажем об этом, а самое главное покажем как использовать всю мощь опенсурса.</p>
                            <a href="#" class="blue more">Узнать больше</a>
                        </div>
                        <div class="block sh-red tac">
                            <div class="circle bg-red-light all-center"><img src="/images/vector/gps.svg"></div>
                            <h4 class="grey title-card">Один большой ресурс</h4>
                            <p class="grey">На данном сайте мы сконцентрировали все наши силы и достижения за все время существования проекта, ведь вместе -мы сила.</p>
                            <a href="#" class="red more">Узнать больше</a>
                        </div>
                    </div>
                </div>
                <!--SECOND-BLOCK-END-->

            </section>
            <!--MAIN-END-->

            <!--FOOTER-->
            <footer class="footer">
                
            </footer>
            <!--FOOTER-END-->

        </div>
    </div>
</body>
</html>