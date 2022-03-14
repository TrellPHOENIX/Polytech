<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Polytech</title>
    <link rel="icon" href="https://i.ibb.co/F66RWDT/logo-polytech.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
</head>

<body>
    <header class="container d-flex flex-wrap align-items-center justify-content-between py-3 mb-3">
        <div class="me-md-auto">
            <ul class="nav item-round-txt">
                <li class="nav-item item-round"><a href="#" class="nav-link">KZ</a></li>
                <li class="nav-item item-round"><a href="#" class="nav-link">RU</a></li>
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
        <a href="/" class="mb-md-0 me-md-auto">
            <img src="https://i.ibb.co/ZVDrjfr/1.png" width="150" alt="logo">
        </a>
        <ul class="nav align-items-center">
            <li class="nav-item line-map"><a href="https://yandex.kz/maps/-/CCUBYISvXC" target="_blank">Казахстан,<br>г.
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
        <nav id="navbar_top" class="navbar header-two navbar-expand-lg navbar-light">
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
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
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
        <iframe class="box-rad-15-shad" src="https://pano3d.kz/PolyTech/" height="600px" width="100%" scrolling="no"
            allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
    </section>
    <section class="container">
        <div class="row align-items-center justify-content-around py-2">
            <div class="col-md-3 mb-2"><a href="#" class="btn btn-lg btn-outline-danger">О КОЛЛЕДЖЕ</a></div>
            <div class="col-md-3 mb-2"><a href="#" class="btn btn-lg btn-outline-danger">СПЕЦИАЛЬНОСТИ</a></div>
            <div class="col-md-3 mb-2"><a href="#" class="btn btn-lg btn-outline-danger">ПРЕИМУЩЕСТВА</a></div>
            <div class="col-md-3 mb-2"><a href="#" class="btn btn-lg btn-outline-danger">ПЛАН КОЛЛЕДЖА</a></div>
        </div>
    </section>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container col-xxl-8 px-4">
                    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                        <div class="col-10 col-sm-8 col-lg-6">
                            <img src="https://i.ibb.co/C2Bz4Q7/design-community-concept-illustration-114360-1244.png" class="d-block mx-lg-auto img-fluid"
                                alt="Bootstrap Themes" loading="lazy">
                        </div>
                        <div class="col-lg-6">
                            <h1 class="display-5 fw-bold lh-1 mb-3">Заголовок 1</h1>
                            <p class="lead">Quickly design and customize responsive mobile-first sites with
                                Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass
                                variables and mixins, responsive grid system, extensive prebuilt components, and
                                powerful JavaScript plugins.</p>
                            {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container col-xxl-8 px-4">
                    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                        <div class="col-10 col-sm-8 col-lg-6">
                            <img src="https://i.ibb.co/C2Bz4Q7/design-community-concept-illustration-114360-1244.png" class="d-block mx-lg-auto img-fluid"
                                alt="Bootstrap Themes" loading="lazy">
                        </div>
                        <div class="col-lg-6">
                            <h1 class="display-5 fw-bold lh-1 mb-3">Заголовок 2</h1>
                            <p class="lead">Quickly design and customize responsive mobile-first sites with
                                Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass
                                variables and mixins, responsive grid system, extensive prebuilt components, and
                                powerful JavaScript plugins.</p>
                            {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                            </div> --}}
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
        <div class="header-h1">
            <h1>Преимущества и возможности нашего колледжа</h1>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-4">
                <div class="solution_cards_box">
                    <div class="solution_card">
                        <div class="hover_color_bubble"></div>
                        <div class="so_top_icon">
                            <img src="https://img.icons8.com/wired/2x/fa314a/good-quality.png" alt="" width="100">
                        </div>
                        <div class="solu_title">
                            <h3>Топ-10</h3>
                        </div>
                        <div class="solu_description">
                            <p>
                                Начни свой путь высококвалифицированного специалиста с одного из "ТОП-10" колледжей
                                Алматы
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="solution_cards_box">
                    <div class="solution_card">
                        <div class="hover_color_bubble"></div>
                        <div class="so_top_icon">
                            <img src="https://img.icons8.com/dotty/2x/fa314a/favorites.png" alt="" width="100">
                        </div>
                        <div class="solu_title">
                            <h3>Качество обучения</h3>
                        </div>
                        <div class="solu_description">
                            <p>
                                Подготовка специалистов на многоуровневой образовательной деятельности
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="solution_cards_box">
                    <div class="solution_card">
                        <div class="hover_color_bubble"></div>
                        <div class="so_top_icon">
                            <img src="https://img.icons8.com/ios/2x/fa314a/astronaut.png" alt="" width="100">
                        </div>
                        <div class="solu_title">
                            <h3>Профессии будущего</h3>
                        </div>
                        <div class="solu_description">
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
    <section class="container mt-4 mb-4">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center">
            <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden box-rad-15-shad">
                <img src="https://i.ibb.co/phRR5zm/TMAX7331-min-1.jpg" width="433" height="600">
            </div>
            <div class="col-lg-6 p-3 p-lg-5 pt-lg-3">
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
                    <div class="col-md-8"><a href="#" class="btn btn-lg btn-outline-danger">Блог директора Омарбеков
                            М.А</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="header-h1">
            <h1>Специальности</h1>
        </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3 my-3">
                <div class="card box-rad-15-shad align-items-center h-100">
                    <img class="card-img-specialty" src="https://i.ibb.co/9qMMj4R/IT-Support-Monochromatic.png"
                        alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">06120100</h4>
                        <p class="card-text">ВЫЧИСЛИТЕЛЬНАЯ ТЕХНИКА И ИНФОРМАЦИОННЫЕ СЕТИ</p>
                    </div>
                    <div class="d-flex col-md-8">
                        <a href="#" class="btn btn-outline-danger mb-3">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-3">
                <div class="card box-rad-15-shad align-items-center h-100">
                    <img class="card-img-specialty" src="https://i.ibb.co/wWG4LQm/Analytics-process-Monochromatic.png"
                        alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">06130100</h4>
                        <p class="card-text">ПРОГРАММНОЕ ОБЕСПЕЧЕНИЕ</p>
                    </div>
                    <div class="d-flex col-md-8">
                        <a href="#" class="btn btn-outline-danger mb-3">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-3">
                <div class="card box-rad-15-shad align-items-center h-100">
                    <img class="card-img-specialty" src="https://i.ibb.co/hRvMDY8/Camera-Monochromatic.png"
                        alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">07140900</h4>
                        <p class="card-text">РАДИОТЕХНИКА, ЭЛЕКТРОНИКА И ТЕЛЕКОММУНИКАЦИИ</p>
                    </div>
                    <div class="d-flex col-md-8">
                        <a href="#" class="btn btn-outline-danger mb-3">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-3">
                <div class="card box-rad-15-shad align-items-center h-100">
                    <img class="card-img-specialty" src="https://i.ibb.co/QHH58RY/Calculator-Monochromatic.png"
                        alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">04110100</h4>
                        <p class="card-text">УЧЁТ И АУДИТ</p>
                    </div>
                    <div class="d-flex col-md-8">
                        <a href="#" class="btn btn-outline-danger mb-3">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-3">
                <div class="card box-rad-15-shad align-items-center h-100">
                    <img class="card-img-specialty" src="https://i.ibb.co/Ttvr3XL/Pie-chart-Monochromatic.png"
                        alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">07151100</h4>
                        <p class="card-text">ЭКСПЛУАТАЦИЯ И ТЕХНИЧЕСКОЕ ОБСЛУЖИВАНИЕ МАШИН И ОБОРУДОВАНИЯ</p>
                    </div>
                    <div class="d-flex col-md-8">
                        <a href="#" class="btn btn-outline-danger mb-3">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-3">
                <div class="card box-rad-15-shad align-items-center h-100">
                    <img class="card-img-specialty"
                        src="https://i.ibb.co/KDcwkLc/Information-carousel-Monochromatic.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">07150100</h4>
                        <p class="card-text">ТЕХНОЛОГИЯ МАШИНОСТРОЕНИЯ</p>
                    </div>
                    <div class="d-flex col-md-8">
                        <a href="#" class="btn btn-outline-danger mb-3">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-3">
                <div class="card box-rad-15-shad align-items-center h-100">
                    <img class="card-img-specialty"
                        src="https://i.ibb.co/hyhZXYs/Online-protection-Monochromatic-1.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">06120200</h4>
                        <p class="card-text">СИСТЕМЫ ИНФОРМАЦИОННОЙ БЕЗОПАСНОСТИ</p>
                    </div>
                    <div class="d-flex col-md-8">
                        <a href="#" class="btn btn-outline-danger mb-3">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="container mt-4">
        <div class="header-h1">
            <h1>Образование новой формации</h1>
            <div class="lead">Шагаем в ногу с будущем и предлагаем адаптивную среду совершенствования</div>
        </div>
    </section>
</body>
<script src="{{ asset('js/bootstrap.js') }}"></script>
{{-- Scroll-fixed-top --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                document.getElementById('navbar_top').classList.add('fixed-top', 'container');
                // add padding top to show content behind navbar
                navbar_height = document.querySelector('.navbar').offsetHeight;
                document.body.style.paddingTop = navbar_height + 'px';
            } else {
                document.getElementById('navbar_top').classList.remove('fixed-top', 'container');
                // remove padding top from body
                document.body.style.paddingTop = '0';
            }
        });
    });
</script>

</html>
