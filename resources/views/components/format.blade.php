<section class="format container">
    <h1 class="format-title">ФОРМАТЫ МАГАЗИНОВ</h1>
    <div class="formats">
        <div class="format-card">
            <img src="{{ asset('assets/format-image1.png') }}" alt="">
            <div class="format-description">
                <h4>Фирменный магазин до 40м</h4>
                <p>от 2,5 млн руб.</p>
            </div>
        </div>
        <div class="format-card">
            <img src="{{ asset('assets/format-image2.png') }}" alt="">
            <div class="format-description">
                <h4>Фирменный магазин до 40м</h4>
                <p>от 2,5 млн руб.</p>
            </div>
        </div>
        <div class="format-card">
            <img src="{{ asset('assets/format-image3.png') }}" alt="">
            <div class="format-description">
                <h4>Фирменный магазин до 40м</h4>
                <p>от 2,5 млн руб.</p>
            </div>
        </div>
    </div>
</section>
<section class="model container">
    <h1 class="title-model">ФИНАНСОВАЯ МОДЕЛЬ</h1>
    <div class="descriptions-model">
        <p>На примере г. Новосибирск (с населением 1 600 000 человек) </p>
        <h4 class="people">Расчётный оборот <span>2 500 000</span> руб./месяц</h4>
        <h4 class="title-table">Ежемесячные расходы:</h4>
    </div>
    <div class="table">
        <h2 class="table-text">Аренда <span>150000 руб.</span></h2>
        <h2 class="table-text">Заработные платы сотрудников <span>200000 руб.</span></h2>
        <h2 class="table-text">Обслуживание ОС и МБП <span>15000 руб.</span></h2>
        <h2 class="table-text">Средства для уборки и гигиены<span> 15000 руб.</span></h2>
        <h2 class="table-text">Канцелярские товары <span> 2000 руб.</span></h2>
        <h2 class="table-text">Упаковка, салфетки и приборы <span> 30000 руб.</span></h2>
        <h2 class="table-text">Налоги и соц. выплаты по сотрудникам <span> 70000 руб.</span></h2>
    </div>
</section>
<section class="finance container">
    <h1 class="title-finance">ФИНАНСОВЫЕ  УСЛОВИЯ</h1>
    <div class="cards-finance">
        <div class="card-finance">
            <h1 class="title-card-finance">Выгодные условия поставок</h1>
            <p class="description-card-finance">Благодаря нашим объёмам, мы получаем самые низкие цены на сырьё – поэтому можем предложить франчайзи самые выгодные цены на продукцию и удобные решения по логистике.</p>
        </div>
        <div class="card-finance">
            <h1 class="title-card-finance">Обучение персонала и системы управления</h1>
            <p class="description-card-finance">Доступ к обучающим материалам, корпоративным стандартам и программам наставничества и помощь в построении грамотной системы управления.</p>
        </div>
        <div class="card-finance">
            <h1 class="title-card-finance">Сезонные обновления и маркетинговая поддержка</h1>
            <p class="description-card-finance">Регулярные сезонные обновления продукции и полный спектр маркетинговых решений для всех каналов коммуникации под отдельные рынки.</p>
        </div>
        <div class="card-finance">
            <h1 class="title-card-finance">Персональный менеджер и консультации</h1>
            <p class="description-card-finance">Мы знаем ответы на все вопросы, с которыми вы можете столкнуться и сделаем бизнес максимально камфорным.</p>
        </div>
    </div>
</section>
@push('scripts')
    @Vite(['resources/css/components/format.css'])
@endpush
