<section class="container reasons" id="reasons">
    <h1 class="title">
        ПРИЧИНЫ ПОРАБОТАТЬ С НАМИ
    </h1>
    <div class="cards-reasons desktop">
        <div class="card-reasons">
            <img class="one" src="{{ asset('assets/reasons/1.png') }}" alt="">
            <h1 class="title-card">Высокий <br>спрос</h1>
            <p class="description">Кондитерские изделия и кофе популярны во все времена года и их популярность только
                растёт.</p>
        </div>
        <div class="card-reasons">
            <img src="{{ asset('assets/reasons/2.png') }}" alt="">
            <h1 class="title-card">Готовое <br>решение</h1>
            <p class="description">Мы предлагаем готовое решение для бизнеса и знаем ответы на все вопросы, с которыми
                вы можете столкнуться.</p>
        </div>
        <div class="card-reasons">
            <img src="{{ asset('assets/reasons/3.png') }}" alt="">
            <h1 class="title-card">Надежная <br>модель бизнеса</h1>
            <p class="description">Готовые и проверенные временем стратегии открытия и развития новых рынков гарантирует
                Вам лёгкий старт бизнеса.</p>
        </div>
        <div class="card-reasons">
            <img class="four" src="{{ asset('assets/reasons/4.png') }}" alt="">
            <h1 class="title-card">Минимальные <br>риски</h1>
            <p class="description">Стабильность работы с нами обеспечивает система «Сами производим – сами продаём».Вы
                не будете зависеть от сторонних поставщиков.</p>
        </div>
        <div class="card-reasons">
            <img src="{{ asset('assets/reasons/5.png') }}" alt="">
            <h1 class="title-card">Гибкие <br>условия</h1>
            <p class="description">В зависимости от специфики рынка и планов партнёра разрабатываются индивидуальные
                условия сотрудничества (win-win)</p>
        </div>
        <div class="card-reasons">
            <img src="{{ asset('assets/reasons/6.png') }}" alt="">
            <h1 class="title-card">Маркетинговая поддержка</h1>
            <p class="description">Полный спектр готовых решений для всех каналов коммуникации. Разработка
                индивидуальной маркетинговой стратегии под отдельные рынки.</p>
        </div>
        <div class="card-reasons">
            <img src="{{ asset('assets/reasons/7.png') }}" alt="">
            <h1 class="title-card">Обучение и стандарты</h1>
            <p class="description">Корпоративный университет, системы обучения и наставничества, книги стандартов и
                чек-листы сделают управление бизнесом максимально комфортным.</p>
        </div>
    </div>

    <div class="swiper mySwiperReasons">
        <div class="swiper-wrapper cards-reasons">
            <div class="card-reasons swiper-slide">
                <img class="one" src="{{ asset('assets/reasons/1.png') }}" alt="">
                <h1 class="title-card">Высокий <br>спрос</h1>
                <p class="description">Кондитерские изделия и кофе популярны во все времена года и их популярность
                    только растёт.</p>
            </div>
            <div class="card-reasons swiper-slide">
                <img src="{{ asset('assets/reasons/2.png') }}" alt="">
                <h1 class="title-card">Готовое <br>решение</h1>
                <p class="description">Мы предлагаем готовое решение для бизнеса и знаем ответы на все вопросы, с
                    которыми вы можете столкнуться.</p>
            </div>
            <div class="card-reasons swiper-slide">
                <img src="{{ asset('assets/reasons/3.png') }}" alt="">
                <h1 class="title-card">Надежная <br>модель бизнеса</h1>
                <p class="description">Готовые и проверенные временем стратегии открытия и развития новых рынков
                    гарантирует Вам лёгкий старт бизнеса.</p>
            </div>
            <div class="card-reasons swiper-slide">
                <img class="four" src="{{ asset('assets/reasons/4.png') }}" alt="">
                <h1 class="title-card">Минимальные <br>риски</h1>
                <p class="description">Стабильность работы с нами обеспечивает система «Сами производим – сами
                    продаём».Вы не будете зависеть от сторонних поставщиков.</p>
            </div>
            <div class="card-reasons swiper-slide">
                <img src="{{ asset('assets/reasons/5.png') }}" alt="">
                <h1 class="title-card">Гибкие <br>условия</h1>
                <p class="description">В зависимости от специфики рынка и планов партнёра разрабатываются индивидуальные
                    условия сотрудничества (win-win)</p>
            </div>
            <div class="card-reasons swiper-slide">
                <img src="{{ asset('assets/reasons/6.png') }}" alt="">
                <h1 class="title-card">Маркетинговая поддержка</h1>
                <p class="description">Полный спектр готовых решений для всех каналов коммуникации. Разработка
                    индивидуальной маркетинговой стратегии под отдельные рынки.</p>
            </div>
            <div class="card-reasons swiper-slide">
                <img src="{{ asset('assets/reasons/7.png') }}" alt="">
                <h1 class="title-card">Обучение и стандарты</h1>
                <p class="description">Корпоративный университет, системы обучения и наставничества, книги стандартов и
                    чек-листы сделают управление бизнесом максимально комфортным.</p>
            </div>
        </div>
        <div class="button-reasons">
            <img src="{{ asset('assets/button.png') }}" alt="">
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@push('scripts')
    @Vite(['resources/css/components/reasons.css'])
    @Vite(['resources/js/components/reasons.js'])
@endpush

