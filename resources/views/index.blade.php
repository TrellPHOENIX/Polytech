<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Polytech</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
</head>

<body>
    <header class="container d-flex flex-wrap align-items-center justify-content-between py-3 mb-3">
        <div class="me-md-auto">
            <ul class="nav header_round_txt">
                <li class="nav-item header_round"><a href="#" class="nav-link">KZ</a></li>
                <li class="nav-item header_round"><a href="#" class="nav-link">RU</a></li>
                <li class="nav-item header_round"><a href="#" class="nav-link">EN</a></li>
                <li class="nav-item header_round mx-4">
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
                <li class="nav-item px-2 line-h16">Казахстан,<br>г. Алматы,<br>мкрн. Тастак<br>1, д. 1В</li>
                <li class="nav-item px-2">Тел.: +(727)393 39 52 <br>Моб.: +7(702)958 26 37</li>
                <div class="d-flex social px-2">
                    <li class="nav-item px-2"><a href="#"><i class="bi bi-youtube"></i></a></li>
                    <li class="nav-item px-2"><a href="#"><i class="bi bi-instagram"></i></a></li>
                    <li class="nav-item px-2"><a href="#"><i class="bi bi-whatsapp"></i></a></li>
                    <li class="nav-item px-2"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="42" height="42"
                        viewBox="20 22 220 220"
                        style=" fill:#000000;"><g fill="none" fill-rule="none" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,226v-226h226v226z" fill="none" fill-rule="nonzero"></path><g fill="#e74c3c" fill-rule="evenodd"><path d="M140.12,45.2l-63.28,4.52l-54.24,31.64h13.56v41.65109c-2.63078,2.17172 -4.52,7.96297 -4.52,14.84891c0,8.73984 3.03687,15.82 6.78,15.82c3.74312,0 6.78,-4.82016 6.78,-13.56c0,-6.88594 -1.88922,-14.05437 -4.52,-16.82641v-41.93359h49.72zM115.26,67.8l-22.6,18.08h-36.16c-0.44141,2.18937 -0.565,2.11875 -0.565,4.43172c0,2.34828 0.24719,4.64359 0.70625,6.86828c1.25359,-0.05297 26.97875,-2.26 40.62703,9.04c2.64844,-8.01594 9.99344,-18.30953 20.41062,-27.66734c0.95344,-0.86516 1.13,-0.90047 2.10109,-1.71266c0,-4.52 -2.08344,-6.42687 -4.52,-9.04zM153.68,72.32c-10.41719,0 -19.89859,3.99031 -27.12,10.48781c-1.37719,-1.23594 -2.84266,-2.33062 -4.37875,-3.35469c-0.54734,0.47672 -1.13,0.93578 -1.67734,1.43016c-7.345,6.60344 -13.11859,13.66594 -16.82641,20.0575c5.47344,2.48953 9.3225,7.94531 9.3225,14.31922v51.98h27.12v-51.98c0,-8.70453 7.11547,-15.82 15.82,-15.82c8.70453,0 15.82,7.11547 15.82,15.82v51.98h27.12v-54.24c0,-22.37047 -18.30953,-40.68 -40.68,-40.68zM56.64125,99.51062c-1.51844,4.2375 -2.40125,8.7575 -2.40125,13.48937v54.24h27.12v-51.98c0,-3.91969 1.50078,-7.45094 3.88438,-10.18766c-6.95656,-3.21344 -17.14422,-5.29687 -28.60312,-5.56172z"></path></g></g></svg></li>
                </div>
            </ul>
                <nav id="navbar_top" class="navbar container navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse flex-column align-items-center justify-content-between" id="navbarNavDropdown">
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
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                    </div>
                  </nav>
    </header>
    <p class="h1 text-center mb-5" style="color: #da1b11; user-select: none;">Пройдите тур по колледжу<br>не выходя из дома!</p>
    <div class="line m-auto"></div>
    <div class="container">
        <iframe src="https://pano3d.kz/PolyTech/" height="600px" width="100%" scrolling="no" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" style="border-radius: 15px;"></iframe>
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-around py-3">
            <div class="col-md-3"><a href="#" class="btn btn-outline-danger" style="width: 100%; font-weight: 700;">О КОЛЛЕДЖЕ</a></div>
            <div class="col-md-3"><a href="#" class="btn btn-outline-danger" style="width: 100%; font-weight: 700;">СПЕЦИАЛЬНОСТИ</a></div>
            <div class="col-md-3"><a href="#" class="btn btn-outline-danger" style="width: 100%; font-weight: 700;">ПРЕИМУЩЕСТВА</a></div>
            <div class="col-md-3"><a href="#" class="btn btn-outline-danger" style="width: 100%; font-weight: 700;">ПЛАН КОЛЛЕДЖА</a></div>
        </div>
    </div>
    <div class="line m-auto"></div>
    <p class="h1 text-center my-5" style="color: #da1b11; user-select: none;">Все преимущества и возможности, <br> которые вы получите поступив в наш колледж!</p>
    <div class="line m-auto" style="height: 0.99px;"></div>
<div class="section_our_solution mb-2">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="our_solution_category">
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
                Начни свой путь высококвалифицированного специалиста с одного из "ТОП-10" колледжей Алматы
              </p>
            </div>
          </div>
          <div class="solution_card">
            <div class="hover_color_bubble"></div>
            <div class="so_top_icon">
                <img src="https://img.icons8.com/dotty/2x/fa314a/favorites.png" width="60" alt="">
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
                Наш путь за грамотными специалистами. Образование в Политехе - залог перспективных возможностей!
              </p>
            </div>
          </div>
        </div>
    </div>
    </div>
</div>
</div>
<div class="line m-auto" style="height: 1.5px;"></div>
</body>
<script src="{{ asset('js/bootstrap.js') }}"></script>
{{-- Scroll-fixed-top --}}
<script>
document.addEventListener("DOMContentLoaded", function(){
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
          document.getElementById('navbar_top').classList.add('fixed-top');
          // add padding top to show content behind navbar
          navbar_height = document.querySelector('.navbar').offsetHeight;
          document.body.style.paddingTop = navbar_height + 'px';
        } else {
          document.getElementById('navbar_top').classList.remove('fixed-top');
           // remove padding top from body
          document.body.style.paddingTop = '0';
        }
    });
  });
  </script>
</html>
