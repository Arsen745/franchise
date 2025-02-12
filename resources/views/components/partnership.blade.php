{{--блок роль партнера--}}
<section class="partnership container">
    <h1 class="title-partnership">РОЛЬ ПАРТНЕРА</h1>
    <p class="description-partnership-head">Для успешной реализации проекта, запланированного развития и рентабильности
        проектов, мы ждём от партнёра:</p>
    <div class="partnership-items">
        {{--Desktop--}}
        <div class="left-partnership desktop">
            <div class="item-partnership">
                <img src="{{ asset('assets/partnership/partnership1.png') }}" alt="">
                <p class="description-partnership">Качественный <br>сервис</p>
            </div>
            <div class="item-partnership">
                <img src="{{ asset('assets/partnership/partnership2.png') }}" alt="">
                <p class="description-partnership">Вовлечение во <br>все процессы</p>
            </div>
            <div class="item-partnership">
                <img src="{{ asset('assets/partnership/partnership3.png') }}" alt="">
                <p class="description-partnership">Выполнение <br>планов продаж</p>
            </div>
            <div class="item-partnership">
                <img src="{{ asset('assets/partnership/partnership4.png') }}" alt="">
                <p class="description-partnership">Своевременное <br>оформление заявок</p>
            </div>
            <div class="item-partnership">
                <img src="{{ asset('assets/partnership/partnership5.png') }}" alt="">
                <p class="description-partnership">Соблюдение стандартов <br>и регламентов</p>
            </div>
            <div class="item-partnership">
                <img src="{{ asset('assets/partnership/partnership6.png') }}" alt="">
                <p class="description-partnership">Реализацию <br>маркетинговой стратегии</p>
            </div>
            <div class="item-partnership">
                <img src="{{ asset('assets/partnership/partnership7.png') }}" alt="">
                <p class="description-partnership">Заботу о гостях <br>и сотрудниках</p>
            </div>
            <div class="item-partnership">
                <img src="{{ asset('assets/partnership/partnership8.png') }}" alt="">
                <p class="description-partnership">Финансовую и <br>отчётную дисциплину</p>
            </div>
        </div>
        {{--Mobile slider --}}
        <div class="left-partnership mobile">
            <div class="swiper mySwiperPartnership">
                <div class="swiper-wrapper">
                    <div class="top swiper-slide">
                        <div class="item-partnership">
                            <img src="{{ asset('assets/partnership/partnership1.png') }}" alt="">
                            <p class="description-partnership">Качественный <br>сервис</p>
                        </div>
                        <div class="item-partnership">
                            <img src="{{ asset('assets/partnership/partnership2.png') }}" alt="">
                            <p class="description-partnership">Вовлечение во <br>все процессы</p>
                        </div>
                        <div class="item-partnership">
                            <img src="{{ asset('assets/partnership/partnership3.png') }}" alt="">
                            <p class="description-partnership">Выполнение <br>планов продаж</p>
                        </div>
                        <div class="item-partnership">
                            <img src="{{ asset('assets/partnership/partnership4.png') }}" alt="">
                            <p class="description-partnership">Своевременное <br>оформление заявок</p>
                        </div>
                    </div>
                    <div class="bottom swiper-slide">
                        <div class="item-partnership">
                            <img src="{{ asset('assets/partnership/partnership5.png') }}" alt="">
                            <p class="description-partnership">Соблюдение стандартов <br>и регламентов</p>
                        </div>
                        <div class="item-partnership">
                            <img src="{{ asset('assets/partnership/partnership6.png') }}" alt="">
                            <p class="description-partnership">Реализацию <br>маркетинговой стратегии</p>
                        </div>
                        <div class="item-partnership">
                            <img src="{{ asset('assets/partnership/partnership7.png') }}" alt="">
                            <p class="description-partnership">Заботу о гостях <br>и сотрудниках</p>
                        </div>
                        <div class="item-partnership">
                            <img src="{{ asset('assets/partnership/partnership8.png') }}" alt="">
                            <p class="description-partnership">Финансовую и <br>отчётную дисциплину</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button-partnership">
                <img src="{{ asset('assets/top.png') }}" alt="">
            </div>
        </div>
        <div class="right-partnership">
            <img src="{{ asset('assets/partnership/main.png') }}" alt="">
        </div>
    </div>
</section>
{{--Блок коммуникации с франчайзи--}}
<section class="communication container">
    <h1 class="title-communication">КОММУНИКАЦИИ С ФРАНЧАЙЗИ</h1>
    <div class="partnership-items franchise">
        <div class="left-partnership">
            <div class="item-partnership">
                <img src="{{ asset('assets/partnership/partnership1.png') }}" alt="">
                <p class="description-partnership">Своя база <br>уникальных <br>пользователей</p>
            </div>
            <div class="item-partnership">
                <img src="{{ asset('assets/partnership/partnership5.png') }}" alt="">
                <p class="description-partnership">Система <br>электронного <br>документооборота</p>
            </div>
            <div class="item-partnership">
                <img src="{{ asset('assets/partnership/partnership3.png') }}" alt="">
                <p class="description-partnership">Сервис тайных <br>покупателей</p>
            </div>
            <div class="item-partnership">
                <img src="{{ asset('assets/partnership/partnership8.png') }}" alt="">
                <p class="description-partnership">Персональный <br>менеджер</p>
            </div>
        </div>
        <div class="right-partnership">
            <img src="{{ asset('assets/communication.png') }}" alt="">
        </div>
    </div>
</section>
@push('scripts')
    @Vite(['resources/css/components/partnership.css'])
    @Vite(['resources/js/components/partnership.js'])
@endpush

