        <div class="me-md-auto">
            <ul class="nav item-round-txt">
                <li class="nav-item item-round"><a href="http://127.0.0.1:8000/kz" class="nav-link">KZ</a></li>
                <li class="nav-item item-round item-round-current"><a href="http://127.0.0.1:8000/ru"
                        class="nav-link">RU</a></li>
                <li class="nav-item item-round"><a href="http://127.0.0.1:8000/en" class="nav-link">EN</a></li>
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
                            <a class="nav-link" aria-current="page" href="#">@lang('locale.home')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">@lang('locale.college')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">@lang('locale.applicants')</a>
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
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="title-modal">
                                        <h4>Управление</h4>
                                    </div>
                                    <div class="title-hr-modal"></div>
                                    <div class="link-modal">
                                        <div class="dropdown dropdown-text-modal">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Знакомство с АГПК
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <li><a class="dropdown-item" href="#">История и факты</a></li>
                                                <li><a class="dropdown-item" href="#">Музей колледжа</a></li>
                                            </ul>
                                        </div>
                                        <a href="#">Администрация</a>
                                        <br>
                                        <a href="#">ПЦК</a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="title-modal">
                                        <h4>Планирование</h4>
                                    </div>
                                    <div class="title-hr-modal"></div>
                                    <div class="link-modal">
                                        <a href="#">Стратегический план</a>
                                        <br>
                                        <a href="#">План работы колледжа на учебный год</a>
                                        <br>
                                        <a href="#">План внутриколледжного контроля</a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="title-modal">
                                        <h4>Участие</h4>
                                    </div>
                                    <div class="title-hr-modal"></div>
                                    <div class="link-modal">
                                        <a href="#">Hackathon</a>
                                        <br>
                                        <a href="#">WorldSkills</a>
                                        <br>
                                        <a href="#">Проект «Жас маман»</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
