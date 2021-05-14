<?php
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: login.php");
    }
?>

<?php include_once "./php/header2.php";?>
<body>
    <header class="header">
        <div class="container">
            <nav class="nav">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="./index.html" class="nav__link">
                            Главная
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="./history.html" class="nav__link">
                            Информация о школе
                        </a>
                        <span class="span__link">
                            <img src="./image/arrow.png" alt="">
                        </span>
                        <ul class="nav__menu">
                            <li class="menu__item">
                                <a href="./" class="menu__link">
                                    Антикоррупционная политика
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="./contact.html" class="menu__link">
                                    Контакты
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav__item">
                        <a href="http://xn--8--vlccgea0cdhkl2d.xn--p1ai/files/polozhenie_o_sohranosti_uchebnikov.pdf" target="_blank" class="nav__link">
                            ГИА
                        </a>
                        <span class="span__link">
                            <img src="./image/arrow.png" alt="">
                        </span>
                        <ul class="menu__list">
                            <li class="menu__wrap">
                                <a href="./exam.html" class="menu">
                                    ЕГЭ
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link">
                            Условия обучения
                        </a>
                        <span class="span__link">
                            <img src="./image/arrow.png" alt="">
                        </span>
                        <ul class="nav__menu">
                            <li class="menu__item">
                                <a href="./jingle.html" class="menu__link">
                                    Расписание звонков
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="./lessons.html" class="menu__link">
                                    Расписание уроков
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="./operating-mode.html" class="menu__link">
                                    Режим работы
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link">
                            Финансирование
                        </a>
                        <span class="span__link">
                            <img src="./image/arrow.png" alt="">
                        </span>
                        <ul class="nav__menu">
                            <li class="menu__item">
                                <a href="./finanse.html" class="menu__link">
                                    Платежные реквизиты
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link">
                            Сведения об образовательной организации
                        </a>
                        <span class="span__link">
                            <img src="./image/arrow.png" alt="">
                        </span>
                        <ul class="nav__menu">
                            <li class="menu__item">
                                <a href="./structure.html" class="menu__link">
                                    Структура и органы управления
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="./intelligence.html" class="menu__link">
                                    Основные сведения
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="./document.html" class="menu__link">
                                    Документы
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="./education.html" class="menu__link">
                                    Образование
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="./standarts.html" class="menu__link">
                                    Образовательные стандарты
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="./team.html" class="menu__link">
                                    Руководство и коллектив
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="./technic-material.html" class="menu__link">
                                    Материально-техническое обеспечение
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="grand.html" class="menu__link">
                                    Стипендия
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="search-input">
                    <input type="text" class="search-txt" name="" placeholder="Поиск..">
                    <div class="autocom-box">
                        <li class="autocom">
                            Педагогам
                        </li>
                    </div>
                    <div class="icon">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
            </nav>
            <!--<div class="header__title">
                <h2 class="main__title">
                    «Зорко одно лишь сердце. Самого главного глазами не увидишь…» Антуан де Сент. Экзюпери
                </h2>
            </div>-->
        </div>
    </header>

    <section class="institutions">
        <div class="container">
            <div class="institutions__wrapper">
                <div class="institutions__item">
                    <p class="institutions__text">
                        «Зорко одно лишь сердце. Самого главного глазами не увидишь…» Антуан де Сент. Экзюпери
                    </p>
                    <div class="institutions__logo">
                        <div class="institutions__image">
                            <img src="./image/logo.png" alt="photo">
                        </div>
                        <h2 class="institutions__title">
                            ГОСУДАРСТВЕННОЕ ОБЩЕОБРАЗОВАТЕЛЬНОЕ КАЗЕННОЕ УЧРЕЖДЕНИЕ ИРКУТСКОЙ ОБЛАСТИ СПЕЦИАЛЬНАЯ (КОРРЕКЦИОННАЯ) ШКОЛА-ИНТЕРНАТ ДЛЯ ОБУЧАЮЩИХСЯ С НАРУШЕНИЯМИ ЗРЕНИЯ № 8 Г. ИРКУТСКА
                        </h2>
                    </div>
                    <div class="tabs">
                        <ul class="tabs__list">
                            <li class="tabs__item">
                                <button class="tabs__btn tabs__btn--active" data-tabs-path="main">
                                        Безопасность
                                    </button>
                            </li>
                            <li class="tabs__item">
                                <button class="tabs__btn" data-tabs-path="archive">
                                        Библиотека
                                    </button>
                            </li>
                        </ul>
                        <div class="tabs__content " data-tabs-target="main">
                            <div class="content">
                                <h2 class="content__title">
                                    Безопасность
                                </h2>
                                <p class="content__descr">
                                    ОХРАНА ТРУДА
                                </p>
                                <ul class="content__list">
                                    <li class="content__item">
                                        <a href="http://xn--8--vlccgea0cdhkl2d.xn--p1ai/images/cms/data/1/2020-2021_uchebnii_god/prikaz_po_ohrane_truda_2020-2021.pdf" target="_blank" class="content__link">
                                            <span class="content__text">
                                                    Приказ о назначении ответственных лиц за организацию безопасной работы на 2020-2021 у.г. Сводная ведомость по СОУТ 2018 Отчет по СОУТ 2018
                                                </span>
                                        </a>
                                    </li>
                                    <li class="content__item">
                                        <a href="http://xn--8--vlccgea0cdhkl2d.xn--p1ai/files/otchet_po_sout_za_2016g_svodnaya_vedomost_po_sout_2016g.pdf" target="_blank" class="content__link">
                                            <span class="content__text">
                                                    Отчет, сводная ведомость по СОУТ 2016 г.
                                                </span>
                                        </a>
                                    </li>
                                    <li class="content__item">
                                        <a href="http://xn--8--vlccgea0cdhkl2d.xn--p1ai/files/perechen_rekomenduemyh_meropriyatij_po_uluchsheniyu_uslovij_truda.pdf" target="_blank" class="content__link">
                                            <span class="content__text">
                                                    Перечень рекомендуемых мероприятий по улучшению условий труда 2016г. План мероприятий по охране труда 2017г.
                                                </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tabs__content" data-tabs-target="archive">
                            <div class="content">
                                <h2 class="content__title">
                                    БИБЛИОТЕКА
                                </h2>
                                <p class="content__description-text">
                                    Библиотекарь: Черемных Елена Геннадьевна
                                </p>
                                <p class="content__description">
                                    <span class="strong">Контакты: </span>664001, Иркутская обл, Иркутск г, Нестерова ул, дом № 30 e-mail: kov508009@yandex.ru Работает с 1 сентября 2017 года.
                                </p>
                                <p class="content__description-ed">
                                    Образование:
                                </p>
                                <ul class="description__list">
                                    <li class="description__item">
                                        <p class="description__link">
                                            - Среднее специальное Государственный областной Колледж культуры г. Иркутск, специальность «Библиотекарь специалист по работе с информационными ресурсами»
                                        </p>
                                    </li>
                                    <li class="description__item">
                                        <p class="description__link">
                                            - Образование высшее педагогическое. Иркутский государственный Педагогический университет – специальность «Дошкольная педагогика и психология»
                                        </p>
                                    </li>
                                </ul>
                                <ul class="content__list">
                                    <li class="content__item">
                                        <a href="http://xn--8--vlccgea0cdhkl2d.xn--p1ai/files/polozhenie_o_sohranosti_uchebnikov.pdf" target="_blank" class="content__link">
                                            <span class="content__text">
                                                    ПОЛОЖЕНИЕ О СОХРАННОСТИ УЧЕБНИКОВ
                                                </span>
                                        </a>
                                    </li>
                                    <li class="content__item">
                                        <a href="http://xn--8--vlccgea0cdhkl2d.xn--p1ai/files/polozhenie_o_shkol_noj_bib.pdf" target="_blank" class="content__link">
                                            <span class="content__text">
                                                    ПОЛОЖЕНИЕ О ШКОЛЬНОЙ БИБЛИОТЕКЕ
                                                </span>
                                        </a>
                                    </li>
                                    <li class="content__item">
                                        <a href="http://xn--8--vlccgea0cdhkl2d.xn--p1ai/files/polozhenie_o_uteri_literatury_shkol_noj_biblioteke.pdf" target="_blank" class="content__link">
                                            <span class="content__text">
                                                    ПОЛОЖЕНИЕ «ОТВЕТСТВЕННОСТЬ ЗА УТЕРЮ И ПОРЧУ БЕСПЛАТНЫХ БИБЛИОТЕЧНЫХ ДОКУМЕНТОВ: УЧЕБНИКОВ И ХУДОЖЕСТВЕННОЙ ЛИТЕРАТУРЫ».
                                                </span>
                                        </a>
                                    </li>
                                    <li class="content__item">
                                        <a href="http://xn--8--vlccgea0cdhkl2d.xn--p1ai/files/perechen_rekomenduemyh_meropriyatij_po_uluchsheniyu_uslovij_truda.pdf" target="_blank" class="content__link">
                                            <span class="content__text">
                                                    СПИСОК ХУДОЖЕСТВЕННОЙ ЛИТЕРАТУРЫ КРУПНЫМ ШРИФТОМ ПОЛУЧЕННЫЕ В 2019 ГОДУ.
                                                </span>
                                        </a>
                                    </li>
                                    <li class="content__item">
                                        <a href="http://xn--8--vlccgea0cdhkl2d.xn--p1ai/files/perechen_rekomenduemyh_meropriyatij_po_uluchsheniyu_uslovij_truda.pdf" target="_blank" class="content__link">
                                            <span class="content__text">
                                                    ФОНД ЛИТЕРАТУРЫ НА 2019-2020 УЧЕБНЫЙ ГОД.
                                                </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="wrapper">
        <div class="container">
            <section class="chat-area">
                <header class="head-chat">
                <?php
                include_once "./php/config.php";
                $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
                    if(mysqli_num_rows($sql) > 0){
                        $row = mysqli_fetch_assoc($sql);
                    }
                ?>
                    <a href="users.php" class="back-icon">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                    <img src="./php/images/<?php echo $row['img'] ?>" alt="">
                    <div class="details">
                        <span>
                            <?php echo $row['fname'] . " " . $row['lname'] ?>
                        </span>
                        <p class="details__text"><?php echo $row['status']?></p>
                    </div>
                </header>
                <div class="chat-box">
                    <!-- <div class="chat outgoing">
                        <div class="details">
                            <p class="det__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                    <div class="chat incoming">
                        <img src="./image/woman.jpg" alt="">
                        <div class="details">
                            <p class="det__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                     -->
                </div>
                <form action="#" class="typing-area" autocomplete="off">
                    <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
                    <input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                    <input type="text" name="message" class="input-field" placeholder="Введите вопрос..">
                    <button><i class="fab fa-telegram-plane"></i></button>
                </form>
            </section>
        </div>
    </div>

    <section class="img">
        <div class="container">
            <div class="img__wrapper">
                <div class="img__item">
                    <a href="http://fcior.edu.ru/" class="img__link">
                        <img src="./image/sc1.gif" alt="Картинка">
                    </a>
                </div>
                <div class="img__item">
                    <a href="http://school-collection.edu.ru/" class="img__link">
                        <img src="./image/sc2.gif" alt="Картинка">
                    </a>
                </div>
                <div class="img__item">
                    <a href="http://window.edu.ru/" class="img__link">
                        <img src="./image/sc3.gif" alt="Картинка">
                    </a>
                </div>
                <div class="img__item">
                    <a href="http://www.edu.ru/" class="img__link">
                        <img src="./image/sc4.gif" alt="Картинка">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer__wrapper">
                <div class="footer__inner">
                    <ul class="footer__list">
                        <li class="footer__item-active">
                            <p class="footer__link-active">
                                Информация о школе
                            </p>
                        </li>
                        <li class="footer__item">
                            <a href="./corruption.html" class="footer__link">
                                Антикоррупционная политика
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="./contact.html" class="footer__link">
                                Контакты
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer__inner">
                    <ul class="footer__list">
                        <li class="footer__item-active">
                            <p class="footer__link-active">
                                ГИА
                            </p>
                        </li>
                        <li class="footer__item">
                            <a href="./exam.html" class="footer__link">
                                ЕГЭ
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer__inner">
                    <ul class="footer__list">
                        <li class="footer__item-active">
                            <p class="footer__link-active">
                                Условия обучения
                            </p>
                        </li>
                        <li class="footer__item">
                            <a href="./jingle.html" class="footer__link">
                                Расписание звонков
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="./lessons.html" class="footer__link">
                                Расписание уроков
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="./operating-mode.html" class="footer__link">
                                Режим работы
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer__inner">
                    <ul class="footer__list">
                        <li class="footer__item-active">
                            <p class="footer__link-active">
                                Сведения об образовательной организации
                            </p>
                        </li>
                        <li class="footer__item">
                            <a href="./structure.html" class="footer__link">
                                Структура и органы управления
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="./intelligence.html" class="footer__link">
                                Основные сведения
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="./document.html" class="footer__link">
                                Документы
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="./education.html" class="footer__link">
                                Образование
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="./standarts.html" class="footer__link">
                                Образовательные стандарты
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="./team.html" class="footer__link">
                                Руководство и коллектив
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="./technic-material.html" class="footer__link">
                                Материально-техническое обеспечение
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="./grand.html" class="footer__link">
                                Стипендия
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer__inner">
                    <ul class="footer__list">
                        <li class="footer__item-active">
                            <a href="./cart-site.html" class="footer__link-active">
                                Карта сайта
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--Поиск по сайту-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/suggerstions.js"></script>
    <!--Табы-->
    <script src="./js/tabs.js"></script>

    <script src="./js/chat.js"></script>

    <script>
        window.replainSettings = {
            id: '76026d24-b706-4a52-8173-5216cf346368'
        };
        (function(u) {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = u;
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })('https://widget.replain.cc/dist/client.js');
    </script>