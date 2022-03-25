<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Polytech</title>
    <link rel="icon" href="https://i.ibb.co/F66RWDT/logo-polytech.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" />
</head>

<body>
    <header class="container d-flex flex-wrap align-items-center justify-content-between bg-branded mb-2 pt-2">
        <div class="me-md-auto">
            <ul class="nav item-round-txt">
                <li class="nav-item item-round"><a href="#" class="nav-link">KZ</a></li>
                <li class="nav-item item-round item-round-current"><a href="#" class="nav-link">RU</a></li>
                <li class="nav-item item-round"><a href="#" class="nav-link">EN</a></li>
                <li class="nav-item item-round mx-4">
                    <a href="#" class="nav-link">
                        <span>
                            <i class="bi bi-eye-fill"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <a href="/" class="mb-md-0 me-md-auto py-2">
            <img src="{{ asset('img/logo.png') }}" width="150" alt="logo">
        </a>
        <ul class="nav align-items-center">
            <li class="nav-item line-map"><a
                    href="https://yandex.kz/maps/org/almatinskiy_gosudarstvenny_politekhnicheskiy_kolledzh/1105826750/?utm_medium=mapframe&amp;utm_source=maps"
                    target="_blank">Казахстан,<br>г.
                    Алматы,<br>мкрн. Тастак<br>1, д. 1В</a></li>
            <li class="nav-item line-phone"><a href="tel:+7&nbsp;727&nbsp;3933952">Тел.:
                    +7&nbsp;727&nbsp;393&nbsp;39&nbsp;52</a> <br><a href="tel:+7&nbsp;702&nbsp;9582637">Моб.:
                    +7&nbsp;702&nbsp;958&nbsp;26&nbsp;37</a></li>
            <div class="d-flex social align-items-center">
                <li class="nav-item"><a href="#"><i class="bi bi-youtube"></i></a></li>
                <li class="nav-item"><a href="#"><i class="bi bi-instagram"></i></a></li>
                <li class="nav-item"><a href="#"><i class="bi bi-whatsapp"></i></a></li>
                <li class="nav-item bi-moodle"><a href="#"><img src="{{ asset('img/bi-moodle.svg') }}"
                            alt="bi-moodle"></a></li>
            </div>
        </ul>
        <nav id="navbar_top" class="navbar header-two navbar-expand-lg navbar-dark">
            <section class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-column align-items-center justify-content-between"
                    id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">ГЛАВНАЯ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">КОЛЛЕДЖ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">АБИТУРИЕНТАМ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">СТУДЕНТАМ</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                ГОСУДАРСТВО
                            </a>
                            <ul class="dropdown-menu dropdown-container-item" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Государственные символы</a></li>
                                <li><a class="dropdown-item" href="#">Государственные закупки</a></li>
                                <li><a class="dropdown-item" href="#">Перечень государственных услуг</a></li>
                                <li><a class="dropdown-item" href="#">Конституция</a></li>
                                <li><a class="dropdown-item" href="#">Open Almaty</a></li>
                                <li><a class="dropdown-item" href="#">График приема граждан</a></li>
                                <li><a class="dropdown-item" href="#">Антикоррупция</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ПРЕПОДАВАТЕЛЯМ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">КОНТАКТЫ</a>
                        </li>
                    </ul>
                </div>
            </section>
        </nav>
    </header>
    <section class="container mb-1">
        <div class="header-h1">
            <h1>Пройдите тур по колледжу</h1>
        </div>
        <iframe class="box-rad-15-shad" src="https://pano3d.kz/PolyTech/" height="495px" width="100%" scrolling="no"
            allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
        <div class="row align-items-center justify-content-around py-1">
            <div class="col-md-3 mt-1"><a href="#" class="btn btn-my btn-outline-danger">О КОЛЛЕДЖЕ</a></div>
            <div class="col-md-3 mt-1"><a href="#" class="btn btn-my btn-outline-danger">СПЕЦИАЛЬНОСТИ</a></div>
            <div class="col-md-3 mt-1"><a href="#" class="btn btn-my btn-outline-danger">ПРЕИМУЩЕСТВА</a></div>
            <div class="col-md-3 mt-1"><a href="#" class="btn btn-my btn-outline-danger">ПЛАН КОЛЛЕДЖА</a></div>
        </div>
    </section>
    <section class="container mt-4 mb-4">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-3 align-items-center">
            <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden box-rad-15-shad">
                <img src="https://i.ibb.co/phRR5zm/TMAX7331-min-1.jpg" width="433" height="600">
            </div>
            <div class="col-lg-6 p-3 p-lg-5">
                <h1 class="fw-bold mb-3">Уважаемые посетители сайта!</h1>
                <p class="lead">
                    Современные темпы развития Казахстана предъявляют высокие требования к информационной стратегии
                    системы образования. Сегодня Интернет, как средство коммуникации, играет важную роль в формировании
                    гражданского общества, является показателем открытости, прозрачности деятельности учебного
                    заведения. Официальный web-сайт Алматинского государственного политехнического колледжа – источник
                    достоверной информации о деятельности колледжа. Рубрика «Блог директора» дает реальную возможность
                    напрямую обратиться с вопросами, предложениями и пожеланиями к руководству колледжа. Мы надеемся,
                    что данный web-сайт будет полезным для Вас в решении самых разных проблем, как личного характера,
                    так и касающихся деятельности нашего колледжа.
                </p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                    <div class="col-md-8"><a href="#" class="btn btn-my btn-outline-danger">Блог директора
                            Омарбеков
                            М.А</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container pt-lg-5">
        <div class="header-h1">
            <h1>Преимущества и возможности нашего колледжа</h1>
        </div>
    </section>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container col-xxl-8 px-4">
                    <div class="row flex-lg-row-reverse align-items-center g-5 pt-3 pb-4">
                        <div class="col-10 col-sm-8 col-lg-6">
                            <img src="https://i.ibb.co/gwcmQ6W/ec234cc0-eae6-4a57-81bf-c02aabdd3166.jpg"
                                class="d-block mx-lg-auto img-fluid box-rad-15-shad" alt="Bootstrap Themes"
                                loading="lazy">
                        </div>
                        <div class="col-lg-6">
                            <h1 class="display-5 fw-bold lh-1 mb-3">Топ-10</h1>
                            <p class="lead">
                                Начни свой путь высококвалифицированного специалиста с одного из "ТОП-10" колледжей
                                Алматы
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container col-xxl-8 px-4">
                    <div class="row flex-lg-row-reverse align-items-center g-5 pt-3 pb-4">
                        <div class="col-10 col-sm-8 col-lg-6">
                            <img src="https://i.ibb.co/C01f8TL/a3e9d5ef-f35f-444f-a817-ae69516fc52e.jpg"
                                class="d-block mx-lg-auto img-fluid box-rad-15-shad" alt="Bootstrap Themes"
                                loading="lazy">
                        </div>
                        <div class="col-lg-6">
                            <h1 class="display-5 fw-bold lh-1 mb-3">Качество обучения</h1>
                            <p class="lead">
                                Подготовка специалистов на многоуровневой образовательной деятельности
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container col-xxl-8 px-4">
                    <div class="row flex-lg-row-reverse align-items-center g-5 pt-3 pb-4">
                        <div class="col-10 col-sm-8 col-lg-6">
                            <img src="https://i.ibb.co/mGNwWnD/4b8e0636-2b0a-4677-87d0-ba3030d4cfa1.jpg"
                                class="d-block mx-lg-auto img-fluid box-rad-15-shad" alt="Bootstrap Themes"
                                loading="lazy">
                        </div>
                        <div class="col-lg-6">
                            <h1 class="display-5 fw-bold lh-1 mb-3">Профессии будущего</h1>
                            <p class="lead">
                                Наш путь за грамотными специалистами. Образование в Политехе - залог перспективных
                                возможностей!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-4">
                <div class="order-cards-box">
                    <div class="order-card">
                        <div class="hover-color-bubble"></div>
                        <div class="so-top-icon">
                            <img src="https://img.icons8.com/wired/2x/fa314a/good-quality.png" alt="" width="100">
                        </div>
                        <div class="solu-title">
                            <h3>Топ-10</h3>
                        </div>
                        <div class="solu-description">
                            <p>
                                Начни свой путь высококвалифицированного специалиста с одного из "ТОП-10" колледжей
                                Алматы
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="order-cards-box">
                    <div class="order-card">
                        <div class="hover-color-bubble"></div>
                        <div class="so-top-icon">
                            <img src="https://img.icons8.com/dotty/2x/fa314a/favorites.png" alt="" width="100">
                        </div>
                        <div class="solu-title">
                            <h3>Качество обучения</h3>
                        </div>
                        <div class="solu-description">
                            <p>
                                Подготовка специалистов на многоуровневой образовательной деятельности
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="order-cards-box">
                    <div class="order-card">
                        <div class="hover-color-bubble"></div>
                        <div class="so-top-icon">
                            <img src="https://img.icons8.com/ios/2x/fa314a/astronaut.png" alt="" width="100">
                        </div>
                        <div class="solu-title">
                            <h3>Профессии будущего</h3>
                        </div>
                        <div class="solu-description">
                            <p>
                                Наш путь за грамотными специалистами. Образование в Политехе - залог перспективных
                                возможностей!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    <section class="container">
        <div class="header-h1">
            <h1>Специальности</h1>
        </div>
        <div class="row justify-content-center">
            <div class="card-specialty col-md-3 my-3">
                <div class="card box-rad-15-shad align-items-center h-100">
                    <img class="w-50" src="https://i.ibb.co/9qMMj4R/IT-Support-Monochromatic.png"
                        alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">06120100</h4>
                        <p class="card-text">ВЫЧИСЛИТЕЛЬНАЯ ТЕХНИКА И ИНФОРМАЦИОННЫЕ СЕТИ</p>
                    </div>
                    <div class="d-flex col-md-6">
                        <a href="#" class="btn btn-outline-danger mb-3">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="card-specialty col-md-3 my-3">
                <div class="card box-rad-15-shad align-items-center h-100">
                    <img class="w-50" src="https://i.ibb.co/wWG4LQm/Analytics-process-Monochromatic.png"
                        alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">06130100</h4>
                        <p class="card-text">ПРОГРАММНОЕ ОБЕСПЕЧЕНИЕ</p>
                    </div>
                    <div class="d-flex col-md-6">
                        <a href="#" class="btn btn-outline-danger mb-3">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="card-specialty col-md-3 my-3">
                <div class="card box-rad-15-shad align-items-center h-100">
                    <img class="w-50" src="https://i.ibb.co/hRvMDY8/Camera-Monochromatic.png"
                        alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">07140900</h4>
                        <p class="card-text">РАДИОТЕХНИКА, ЭЛЕКТРОНИКА И ТЕЛЕКОММУНИКАЦИИ</p>
                    </div>
                    <div class="d-flex col-md-6">
                        <a href="#" class="btn btn-outline-danger mb-3">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="card-specialty col-md-3 my-3">
                <div class="card box-rad-15-shad align-items-center h-100">
                    <img class="w-50" src="https://i.ibb.co/QHH58RY/Calculator-Monochromatic.png"
                        alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">04110100</h4>
                        <p class="card-text">УЧЁТ И АУДИТ</p>
                    </div>
                    <div class="d-flex col-md-6">
                        <a href="#" class="btn btn-outline-danger mb-3">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="card-specialty col-md-3 my-3">
                <div class="card box-rad-15-shad align-items-center h-100">
                    <img class="w-50" src="https://i.ibb.co/Ttvr3XL/Pie-chart-Monochromatic.png"
                        alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">07151100</h4>
                        <p class="card-text">ЭКСПЛУАТАЦИЯ И ТЕХНИЧЕСКОЕ ОБСЛУЖИВАНИЕ МАШИН И ОБОРУДОВАНИЯ</p>
                    </div>
                    <div class="d-flex col-md-6">
                        <a href="#" class="btn btn-outline-danger mb-3">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="card-specialty col-md-3 my-3">
                <div class="card box-rad-15-shad align-items-center h-100">
                    <img class="w-50" src="https://i.ibb.co/KDcwkLc/Information-carousel-Monochromatic.png"
                        alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">07150100</h4>
                        <p class="card-text">ТЕХНОЛОГИЯ МАШИНОСТРОЕНИЯ</p>
                    </div>
                    <div class="d-flex col-md-6">
                        <a href="#" class="btn btn-outline-danger mb-3">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="card-specialty col-md-3 my-3">
                <div class="card box-rad-15-shad align-items-center h-100">
                    <img class="w-50" src="https://i.ibb.co/hyhZXYs/Online-protection-Monochromatic-1.png"
                        alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">06120200</h4>
                        <p class="card-text">СИСТЕМЫ ИНФОРМАЦИОННОЙ БЕЗОПАСНОСТИ</p>
                    </div>
                    <div class="d-flex col-md-6">
                        <a href="#" class="btn btn-outline-danger mb-3">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container my-4">
        <div class="header-h1">
            <h1>Образование новой формации</h1>
        </div>
        <div class="container card-formation">
            <div class="row justify-content-center">
                <div class="col-lg-2 my-3">
                    <div class="card mb-4 rounded-3 text-center box-rad-15-shad border-danger h-100">
                        <div class="card-header py-3 bg-danger border-danger">
                            <h5 class="my-0 fw-normal text-white">Практика интеллекта</h5>
                        </div>
                        <div class="align-items-center">
                            <img class="w-50 mt-3" src="https://img.icons8.com/carbon-copy/2x/fa314a/brain.png"
                                alt="Card image">
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Мы даем актуальные знания, которые востребованы на рынке, и учим постоянно
                                самообразо-вываться.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 my-3">
                    <div class="card mb-4 rounded-3 text-center box-rad-15-shad border-danger h-100">
                        <div class="card-header py-3 bg-danger border-danger">
                            <h5 class="my-0 fw-normal text-white">Нестандартный подход</h5>
                        </div>
                        <div class="align-items-center">
                            <img class="w-50 mt-3" src="https://img.icons8.com/dotty/2x/fa314a/idea-sharing.png"
                                alt="Card image">
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Мы используем новые форматы и инструменты проведения занятий, которые обеспечивают
                                высокое качество образования.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 my-3">
                    <div class="card mb-4 rounded-3 text-center box-rad-15-shad border-danger h-100">
                        <div class="card-header py-3 bg-danger border-danger">
                            <h5 class="my-0 fw-normal text-white">Индивидуальный подход</h5>
                        </div>
                        <div class="align-items-center">
                            <img class="w-50 mt-3" src="https://img.icons8.com/carbon-copy/2x/fa314a/star.png"
                                alt="Card image">
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Мы помогаем каждому построить свою траекторию успеха. У нас всегда открытые и
                                доверительные отношения.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 my-3">
                    <div class="card mb-4 rounded-3 text-center box-rad-15-shad border-danger h-100">
                        <div class="card-header py-3 bg-danger border-danger">
                            <h5 class="my-0 fw-normal text-white">Востребован- ность</h5>
                        </div>
                        <div class="align-items-center">
                            <img class="w-50 mt-3" src="https://img.icons8.com/dotty/2x/fa314a/demand.png"
                                alt="Card image">
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Каждая программа ежегодно обновляется, чтобы компетенции выпускников соответствовали
                                запросам работодателей.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 my-3">
                    <div class="card mb-4 rounded-3 text-center box-rad-15-shad border-danger h-100">
                        <div class="card-header py-3 bg-danger border-danger">
                            <h5 class="my-0 fw-normal text-white">Единая команда</h5>
                        </div>
                        <div class="align-items-center">
                            <img class="w-50 mt-3"
                                src="https://img.icons8.com/dotty/2x/fa314a/people-working-together.png"
                                alt="Card image">
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Позитивная команда, сплочённость и семейный дух. Мы поддерживаем друг друга и
                                развиваемся вместе.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 my-3">
                    <div class="card mb-4 rounded-3 text-center box-rad-15-shad border-danger h-100">
                        <div class="card-header py-3 bg-danger border-danger">
                            <h5 class="my-0 fw-normal text-white">Гибкость и рост рынка</h5>
                        </div>
                        <div class="align-items-center">
                            <img class="w-50 mt-3"
                                src="https://img.icons8.com/dotty/2x/fa314a/personal-growth.png" alt="Card image">
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Мы быстро меняемся и растем, исходя из потребностей рынка.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="header-h1 mb-3">
            <h1>Все преимущества и шансы</h1>
        </div>
        <div class="row justify-content-center">
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box box-rad-15-shad h-100">
                    <div class="shape-one"></div>
                    <div class="shape-two"></div>
                    <div class="icon-box">
                        <span class="icon flaticon-coding-1"></span>
                    </div>
                    <i class="icon-box bi bi-file-earmark-text"></i>
                    <h5>Международные сертификаты</h5>
                    <div class="text">Получи в дополнение к государственному диплому сертификаты Microsoft,
                        Adobe, Autodesk, Apple и другие.</div>
                </div>
            </div>
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box box-rad-15-shad h-100">
                    <div class="shape-one"></div>
                    <div class="shape-two"></div>
                    <div class="icon-box">
                        <span class="icon flaticon-coding-1"></span>
                    </div>
                    <i class="icon-box bi bi-person-square"></i>
                    <h5>Преподаватели практики</h5>
                    <div class="text">Благодаря эудированным наставникам студенты всегда в курсе, как всё
                        бывает не в учебниках, а в реальной жизни. В сфере IT технологий.</div>
                </div>
            </div>
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box box-rad-15-shad h-100">
                    <div class="shape-one"></div>
                    <div class="shape-two"></div>
                    <div class="icon-box">
                        <span class="icon flaticon-coding-1"></span>
                    </div>
                    <i class="icon-box bi bi-check2-circle"></i>
                    <h5>Стажировки в IT - компаниях</h5>
                    <div class="text">Со 2 курса — обязательная практика. С 3 Kypca многие студенты уже
                        работают или стажируются в IT - компаниях.</div>
                </div>
            </div>
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box box-rad-15-shad h-100">
                    <div class="shape-one"></div>
                    <div class="shape-two"></div>
                    <div class="icon-box">
                        <span class="icon flaticon-coding-1"></span>
                    </div>
                    <i class="icon-box bi bi-journal-check"></i>
                    <h5>Проектное обучение</h5>
                    <div class="text">В конце семестра с тебя спросят не реферат, а готовый проект — сайт,
                        бизнес-план, рекламную кампанию. Практика является средством повышения профессиональной
                        компетенции.</div>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="header-h1">
            <h1>Сервисы колледжа</h1>
        </div>
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="https://i.ibb.co/WGD5bGB/image-processing20210726-1298-1x1b0pi.gif"
                    class="d-block mx-lg-auto img-fluid box-rad-15-shad" alt="Bootstrap Themes" width="700"
                    height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <div class="d-grid gap-2">
                    <button class="btn btn-my btn-outline-danger" type="button">Виртуальный тур в музей
                        колледжа</button>
                    <button class="btn btn-my btn-outline-danger" type="button">Поучавствуй в жизни колледжа Оставь
                        свои пожелания</button>
                    <button class="btn btn-my btn-outline-danger" type="button">Almaty State Polytechnic College
                        WorldSkills-2020</button>
                    <button class="btn btn-my btn-outline-danger" type="button">WEb-библиотека</button>
                    <button class="btn btn-my btn-outline-danger" type="button">Для работодателей</button>
                    <button class="btn btn-my btn-outline-danger" type="button">Банк идей</button>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="container-fluid">
            <div class="row flex-md-row-reverse g-5 py-5">
                <div class="owl-carousel owl-theme" style="height: 55px!important;">
                    <div class="item col-md-8 mx-auto">
                        <img src="https://i.ibb.co/c2d4v1X/4-removebg-preview.png" class="img-fluid" alt="img">
                    </div>
                    <div class="item col-md-8 mx-auto">
                        <img src="https://i.ibb.co/6ywg2VV/sulpak-colour.png" class="img-fluid" alt="img">
                    </div>
                    <div class="item col-md-8 mx-auto">
                        <img src="https://i.ibb.co/yF9nQpy/5-removebg-preview.png" class="img-fluid" alt="img">
                    </div>
                    <div class="item col-md-8 mx-auto">
                        <img src="https://i.ibb.co/Jp6P31F/logo.png" class="img-fluid" alt="img">
                    </div>
                    <div class="item col-md-8 mx-auto">
                        <img src="https://i.ibb.co/72vH1pv/6.jpg" class="img-fluid" alt="img">
                    </div>
                    <div class="item col-md-8 mx-auto">
                        <img src="https://assets.lsegissuerservices.com/original-32e5822a-95ff-4dcf-87e1-fa4c884c49c3.png"
                            class="img-fluid" alt="img">
                    </div>
                    <div class="item col-md-8 mx-auto">
                        <img src="https://i.ibb.co/PCRcPsM/14.jpg" class="img-fluid" alt="img">
                    </div>
                    <div class="item col-md-8 mx-auto">
                        <img src="https://olgoffice.com/wp-content/uploads/2019/11/OLG-Logo.png" class="img-fluid alt="
                            img">
                    </div>
                    <div class="item col-md-8 mx-auto">
                        <img src="https://i.ibb.co/3TZkgrN/13.jpg" class="img-fluid" alt="img">
                    </div>
                    <div class="item col-md-8 mx-auto">
                        <img src="https://images.satu.kz/111750024_w640_h640_deltachip.jpg" class="img-fluid"
                            alt="img">
                    </div>
                </div>
            </div>
        </div>
        <script>
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                items: 5,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 9999999999,
                autoplayHoverPause: false,
                center: true,
                dots: false,
                responsive: {
                    0: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            });
        </script>
    </section>
    <section class="container">
        <div class="header-h1">
            <h1>Стань одним из наших студентом!</h1>
        </div>
        <form>
            <div class="row">
                <div class="col-6">
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Инициалы</label>
                        <input type="name" placeholder="Введите ФИО" class="form-control" id="name"
                            aria-describedby="name">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group mb-3">
                        <label for="tel" class="form-label">Номер телефона</label>
                        <input type="tel" placeholder="Введите номер телефона" class="form-control" id="tel"
                            aria-describedby="tel">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label">E-mail почта</label>
                        <input type="email" placeholder="Введите E-mail" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col-12">
                    <label for="exampleInputEmail1" class="form-label">Cпециальность</label>
                    <select class="form-select mb-3" aria-label="Пример выбора по умолчанию">
                        <option selected>06120100 - Вычислительная техника и информационные системы</option>
                        <option>06130100 - Программное обеспечение</option>
                        <option>07140900 - Радиотехника, электроника и телекоммуникации</option>
                        <option>04110100 - Учет и аудит</option>
                        <option>07151100 - Эксплуатация и техническое обслуживание машин и оборудования</option>
                        <option>07150100 - Технология машиностроения</option>
                        <option>06120200 - Системы информационной безопасности</option>
                    </select>
                </div>
                <div class="col-md-3 mb-4">
                    <button type="submit" class="btn btn-my btn-outline-danger">Отправить данные</button>
                </div>
            </div>
        </form>
    </section>
    <div class="d-flex flex-column h-100">
        <section class="footer-hero text-white py-5 flex-grow-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="footer-hero-lead-4">Спешите стать нашим студентом, нас легко найти!</h1>
                        <p class="text-white">Получи шанс востребованной специальности в <a class="text-primary"
                                href="https://yandex.kz/maps/org/1105826750/?from=mapframe&ll=76.862501%2C43.249245&z=18"
                                target="_blank">Политехническом колледже города
                                Алматы</a></p>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-map my-4 pt-2">
                            <div><a
                                    href="https://yandex.kz/maps/org/almatinskiy_gosudarstvenny_politekhnicheskiy_kolledzh/1105826750/?utm_medium=mapframe&amp;utm_source=maps">Алматинский
                                    государственный
                                    политехнический колледж</a><a
                                    href="https://yandex.kz/maps/162/almaty/category/college/?utm_medium=mapframe&amp;utm_source=maps">Колледж
                                    в Алматы</a>
                                <iframe src="https://yandex.kz/map-widget/v1/-/CCQpZKAvLA" width="100%" height="300"
                                    class="footer-map" frameborder="1" allowfullscreen="true"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="w-100 pt-4 pb-2 flex-shrink-0">
            <div class="container">
                <div class="row gy-4 gx-5">
                    <div class="col-lg-6 col-md-6">
                        <h5 class="text-white mb-3 h3">О сайте</h5>
                        <p class="text-copyright">©1940-2022, ГККП "Алматинский государственный политехнический
                            колледж" Управления образования города Алматы</p>
                        <h5 class="text-white mb-3 h3">Социальные сети</h5>
                        <div class="d-flex p-0 social social-footer justify-content-start align-items-center">
                            <li class="nav-item"><a href="#"><i class="bi bi-youtube"></i></a></li>
                            <li class="nav-item"><a href="#"><i class="bi bi-instagram"></i></a></li>
                            <li class="nav-item"><a href="#"><i class="bi bi-whatsapp"></i></a></li>
                            <li class="nav-item"><a href="#"><i class="bi bi-telegram"></i></a></li>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-3 h3">Помощь</h5>
                        <p class="text-copyright">По впоросам и сотрудничестве сайта</p>
                        <p class="footer-text">Роман: <a
                                href="https://wa.me/87087179348?text=Здравствуйте%2C+у+меня+есть+вопрос+по+сайту"
                                target="_blank">
                                +7&nbsp;708&nbsp;717&nbsp;93&nbsp;48&nbsp;&nbsp;<i class="bi bi-whatsapp"></i></a></p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-3 h3">Контакты</h5>
                        <div class="footer-contact footer-contact-address">
                            <p class="footer-title">Адрес</p>
                            <p class="footer-text"><a
                                    href="https://yandex.kz/maps/org/1105826750/?ll=76.862501%2C43.249245&utm_medium=mapframe&utm_source=maps&z=18"
                                    target="_blank">Казахстан,
                                    Алматы, микрорайон Тастак-1, 1В</a></p>
                        </div>
                        <div class="footer-contact footer-contact-phone">
                            <p class="footer-title">Телефон</p>
                            <p class="footer-text"><a href="tel:+7&nbsp;727&nbsp;3933952">Тел.:
                                    +7&nbsp;727&nbsp;393&nbsp;39&nbsp;52</a> <br><a
                                    href="tel:+7&nbsp;702&nbsp;9582637">Моб.:
                                    +7&nbsp;702&nbsp;958&nbsp;26&nbsp;37</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

</html>
