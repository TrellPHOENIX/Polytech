<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<div class="header-h1">
    <h1>Стань одним из наших студентом!</h1>
</div>
<form name="studentsForm" id="studentsForm" method="POST" action="{{ url('store-form') }}">
    @csrf
    <div class="row">
        <div class="col-6">
            <div class="form-group mb-3">
                <label for="name" class="form-label">Инициалы</label>
                <input type="name" name="name" placeholder="Введите ФИО" class="form-control" id=" name"
                    aria-describedby="name" required="">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group mb-3">
                <label for="tel" class="form-label">Номер телефона</label>
                <input type="tel" name="tel" placeholder="Введите номер телефона" class="form-control" id="tel"
                    aria-describedby="tel" required="">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group mb-3">
                <label for="e-mail" class="form-label">E-mail почта</label>
                <input type="email" name="email" placeholder="Введите E-mail" class="form-control"
                    aria-describedby="emailHelp" required="">
            </div>
        </div>
        <div class="col-12">
            <label for="specialty" class="form-label">Cпециальность</label>
            <select name="specialty" class="form-select mb-3" aria-label="Пример выбора по умолчанию" required="">
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
