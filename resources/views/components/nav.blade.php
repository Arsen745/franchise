<nav class="nav">
    <div class="container">
        <div class="logo">
            <a href="#"><img src="{{ asset('assets/logo.png') }}" alt=""></a>
        </div>
        <div class="nav-buttons">
            <a href="#about">О нас</a>
            <a href="#reasons">О преимуществах</a>
            <a href="">Оставить заявку</a>
        </div>
    </div>
</nav>
@push('scripts')
    @Vite(['resources/css/components/nav.css'])
@endpush
