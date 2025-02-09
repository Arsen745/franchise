<section class="marketing container">
    <h1 class="title">МАРКЕТИНГ</h1>
    <p class="description">Для каждого партнера разрабатывается отдельная маркетинговая стратегия по открытию и развития
        рынка.</p>
    <div class="items">
        <div class="left">
            <div class="item">
                <img class="item-image" src="{{ asset('assets/marketing0.png') }}" alt="">
                <div class="text-market">
                    <h1 class="item-text">СОЦИАЛЬНЫЕ <br>СЕТИ</h1>
                </div>
            </div>
            <div class="item">
                <img class="item-image" src="{{ asset('assets/marketing1.png') }}" alt="">
                <div class="text-market">
                    <h1 class="item-text">МАРКЕТИНГОВЫЕ<br>ИССЛЕДОВАНИЯ</h1>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="item">
                <img class="item-image" src="{{ asset('assets/marketing2.png') }}" alt="">
                <div class="text-market">
                    <h1 class="item-text">РЕКЛАМНЫЕ <br>МАТЕРИАЛЫ</h1>
                </div>
            </div>
            <div class="item">
                <img class="item-image" src="{{ asset('assets/marketing3.png') }}" alt="">
                <div class="text-market">
                    <h1 class="item-text">ПРОМО<br>И АКЦИИ</h1>
                </div>
            </div>
        </div>
    </div>
</section>
@push('scripts')
    @Vite(['resources/css/components/marketing.css'])
@endpush
