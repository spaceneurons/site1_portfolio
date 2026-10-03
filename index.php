<?php

require_once __DIR__ . '/includes/db.php';

$stmt = $db->query("
    SELECT code, value
    FROM content
");

$content = [];

foreach ($stmt as $row) {
    $content[$row['code']] = $row['value'];
}


/*
|--------------------------------------------------------------------------
| Картинки
|--------------------------------------------------------------------------
| Замени названия файлов на свои.
*/

$heroImage = 'images/finishfuniture.jpg';
$projectImage = 'images/fun.jpg';
$contactImage = 'images/stul.png';

?>

<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@300;400;500;600&display=swap" rel="stylesheet">    <title>
        <?= htmlspecialchars($content['site_title'] ?? 'WOODCRAFT') ?>
    </title>

    <link
        rel="stylesheet"
        href="style.css"
    >

</head>


<body>


<!-- =====================================================
     HEADER
===================================================== -->

<header class="header">

    <div class="container header__inner">


        <a href="#" class="logo">

            <span class="logo__title">
                <?= htmlspecialchars($content['logo_title'] ?? 'WOODCRAFT') ?>
            </span>

            <span class="logo__subtitle">
                <?= htmlspecialchars($content['logo_subtitle'] ?? 'МЕБЕЛЬ НА ЗАКАЗ') ?>
            </span>

        </a>


        <nav class="nav">

            <a href="#about">
                <?= htmlspecialchars($content['nav_about'] ?? 'О нас') ?>
            </a>

            <a href="#projects">
                <?= htmlspecialchars($content['nav_projects'] ?? 'Проекты') ?>
            </a>

            <a href="#services">
                <?= htmlspecialchars($content['nav_services'] ?? 'Услуги') ?>
            </a>

            <a href="#contacts">
                <?= htmlspecialchars($content['nav_contacts'] ?? 'Контакты') ?>
            </a>

        </nav>


        <div class="header__right">

            <span class="city">
                <?= htmlspecialchars($content['city'] ?? 'Минск') ?>
                <span class="location-icon">⌖</span>
            </span>

           <a href="#contacts" class="cart" aria-label="Корзина">

    <svg
        width="20"
        height="20"
        viewBox="0 0 24 24"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
    >
        <path
            d="M3 4H5L7.2 15.5C7.4 16.4 8.2 17 9.1 17H17.5C18.4 17 19.2 16.4 19.4 15.5L21 8H6"
            stroke="currentColor"
            stroke-width="1.5"
            stroke-linecap="round"
            stroke-linejoin="round"
        />

        <circle
            cx="9"
            cy="20"
            r="1"
            fill="currentColor"
        />

        <circle
            cx="18"
            cy="20"
            r="1"
            fill="currentColor"
        />
    </svg>

</a>

        </div>


    </div>

</header>



<main>


<!-- =====================================================
     HERO
===================================================== -->

<section class="hero">



    <div class="container hero__container">


        <div class="hero__grid">


            <div class="hero__content">


                <h1>

    <?= nl2br(
        htmlspecialchars(
            $content['hero_title']
                ?? "Мебель,\nкоторая подстраивается\nпод вашу жизнь"
        )
    ) ?>

</h1>


                <p class="hero__description">

                    <?= nl2br(
                        htmlspecialchars(
                            $content['hero_description']
                                ?? 'Изготавливаем мебель на заказ для квартир, домов и коммерческих пространств. Продуманный дизайн, качественные материалы и внимание к деталям на каждом этапе.'
                        )
                    ) ?>

                </p>


            </div>



            <div class="hero__visual">


                <div class="hero__image-card">

                    <img
                        src="<?= htmlspecialchars($heroImage) ?>"
                        alt="Проект мебели WOODCRAFT"
                    >


                    <a
                        href="#projects"
                        class="image-button"
                    >

                        <span>
                            <?= htmlspecialchars(
                                $content['hero_button']
                                    ?? 'Посмотреть проекты'
                            ) ?>
                        </span>

                        <span class="arrow">
                            ↗
                        </span>

                    </a>

                </div>


            </div>


        </div>


    </div>


</section>



<!-- =====================================================
     ABOUT
===================================================== -->

<section
    class="about"
    id="about"
>


    <div class="container">


        <div class="about__heading">


            <h2>

                <?= nl2br(
                    htmlspecialchars(
                        $content['about_title']
                            ?? "Создаём мебель,\nкоторая отражает ваш стиль"
                    )
                ) ?>

            </h2>


            <p>

                <?= nl2br(
                    htmlspecialchars(
                        $content['about_text']
                            ?? 'Мы разрабатываем и производим мебель по индивидуальным размерам, учитывая ваши потребности, пространство и стиль жизни. От идеи и проекта до установки — всё под контролем нашей команды.'
                    )
                ) ?>

            </p>


        </div>



        <div class="about__grid">

    <div class="project-image">

        <img
            src="<?= htmlspecialchars($projectImage) ?>"
            alt="Интерьер с мебелью WOODCRAFT"
        >



    </div>

    <div class="stats">


                <div class="stat">

                    <strong>
                        <?= htmlspecialchars($content['stat_1_number'] ?? '6 лет') ?>
                    </strong>

                   <span>
    <?= nl2br(
        htmlspecialchars(
            $content['stat_1_text']
                ?? 'на рынке'
        )
    ) ?>
</span>

                </div>



                <div class="stat">

                    <strong>
                        <?= htmlspecialchars($content['stat_2_number'] ?? '200+') ?>
                    </strong>

                    <span>
    <?= nl2br(
        htmlspecialchars(
            $content['stat_2_text']
                ?? "реализованных\nпроектов"
        )
    ) ?>
</span>

                </div>



                <div class="stat">

                    <strong>
                        <?= htmlspecialchars($content['stat_3_number'] ?? '98%') ?>
                    </strong>

                    <span>
    <?= nl2br(
        htmlspecialchars(
            $content['stat_3_text']
                ?? "клиентов\nрекомендуют нас"
        )
    ) ?>
</span>

                </div>


            </div>


        </div>


    </div>


</section>



<!-- =====================================================
     SERVICES
===================================================== -->

<section
    class="services"
    id="services"
>


    <div class="container">


        <div class="section-title">

            <h2>

                <?= nl2br(
                    htmlspecialchars(
                        $content['reasons_title']
                            ?? "4 причины, почему с нами удобно\nи надежно работать"
                    )
                ) ?>

            </h2>

        </div>



        <div class="reasons">


            <article class="reason">

                <span class="reason__number">
                    01
                </span>

                <h3>
                    <?= htmlspecialchars(
                        $content['reason_1_title']
                            ?? 'Индивидуальный подход'
                    ) ?>
                </h3>

                <p>
                    <?= nl2br(
                        htmlspecialchars(
                            $content['reason_1_text']
                                ?? 'Учитываем ваши пожелания, пространство и образ жизни. Каждый проект уникален.'
                        )
                    ) ?>
                </p>

            </article>



            <article class="reason">

                <span class="reason__number">
                    02
                </span>

                <h3>
                    <?= htmlspecialchars(
                        $content['reason_2_title']
                            ?? 'Качество материалов'
                    ) ?>
                </h3>

                <p>
                    <?= nl2br(
                        htmlspecialchars(
                            $content['reason_2_text']
                                ?? 'Работаем с проверенными поставщиками и используем только надежные материалы.'
                        )
                    ) ?>
                </p>

            </article>



            <article class="reason">

                <span class="reason__number">
                    03
                </span>

                <h3>
                    <?= htmlspecialchars(
                        $content['reason_3_title']
                            ?? 'Профессиональная команда'
                    ) ?>
                </h3>

                <p>
                    <?= nl2br(
                        htmlspecialchars(
                            $content['reason_3_text']
                                ?? 'Дизайнеры, конструкторы и мастера с опытом от 5 лет.'
                        )
                    ) ?>
                </p>

            </article>



            <article class="reason">

                <span class="reason__number">
                    04
                </span>

                <h3>
                    <?= htmlspecialchars(
                        $content['reason_4_title']
                            ?? 'Соблюдение сроков'
                    ) ?>
                </h3>

                <p>
                    <?= nl2br(
                        htmlspecialchars(
                            $content['reason_4_text']
                                ?? 'Четкий план, прозрачные этапы и контроль на каждом шаге.'
                        )
                    ) ?>
                </p>

            </article>


        </div>


    </div>


</section>



<!-- =====================================================
     CONTACTS
===================================================== -->

<section
    class="contacts"
    id="contacts"
>


    <div class="container contacts__grid">


        <div class="contacts__content">


            <h2>

                <?= nl2br(
                    htmlspecialchars(
                        $content['contact_title']
                            ?? "Хотите мебель,\nкоторой не будет\nни у кого?"
                    )
                ) ?>

            </h2>


            <p>

                <?= nl2br(
                    htmlspecialchars(
                        $content['contact_text']
                            ?? 'Оставьте заявку — мы свяжемся с вами, обсудим ваш проект и предложим лучшее решение.'
                    )
                ) ?>

            </p>



            <div class="socials">

                <a href="#">
                    ◎
                </a>

                <a href="#">
                    ➤
                </a>

                <a href="#">
                    ◉
                </a>

            </div>


        </div>



        <div class="contacts__visual">


            <div class="contact-leaf">

                <img
                    src="<?= htmlspecialchars($contactImage) ?>"
                    alt=""
                >

            </div>


            <form
                class="contact-form"
                method="POST"
            >


                <input
                    type="text"
                    name="name"
                    placeholder="Имя"
                >


                <input
                    type="tel"
                    name="phone"
                    placeholder="Телефон"
                >


                <textarea
                    name="message"
                    placeholder="Опишите ваш проект"
                ></textarea>


                <button
                    type="submit"
                    class="submit-button"
                >

                    <span>
                        Отправить заявку
                    </span>

                    <span>
                        ↗
                    </span>

                </button>


                <small>

                    Нажимая кнопку, вы соглашаетесь
                    на обработку персональных данных.

                </small>


            </form>


        </div>


    </div>


</section>


</main>



<!-- =====================================================
     FOOTER
===================================================== -->

<footer class="footer">


    <div class="container footer__inner">


        <a href="#" class="logo">

            <span class="logo__title">
                <?= htmlspecialchars($content['logo_title'] ?? 'WOODCRAFT') ?>
            </span>

            <span class="logo__subtitle">
                <?= htmlspecialchars($content['logo_subtitle'] ?? 'МЕБЕЛЬ НА ЗАКАЗ') ?>
            </span>

        </a>



        <nav class="footer__nav">

            <a href="#about">
                О нас
            </a>

            <a href="#projects">
                Проекты
            </a>

            <a href="#services">
                Услуги
            </a>

            <a href="#contacts">
                Контакты
            </a>

        </nav>



        <div class="footer__slogan">

            <span></span>

            <p>
                Авторская мебель для вашего
                пространства
            </p>

        </div>


    </div>


</footer>


</body>

</html>