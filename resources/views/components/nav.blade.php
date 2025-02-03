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
        <div class="burger">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
        </div>
    </div>
</nav>
@push('scripts')
    @Vite(['resources/css/components/nav.css'])
@endpush
