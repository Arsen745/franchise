<nav class="nav">
    <div class="container">
        <div class="logo">
            <a href="#"><img src="{{ asset('assets/logo.png') }}" alt=""></a>
        </div>
        <div class="nav-buttons">
            <a href="#about">О нас</a>
            <a href="#reasons">О преимуществах</a>
            <a href="#footer">Оставить заявку</a>
        </div>
        <div class="burger">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
        </div>
        <div class="modal">
            <div class="close">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                </svg>
            </div>
            <a href="#about">О нас</a>
            <a href="#reasons">О преимуществах</a>
            <a href="#footer">Оставить заявку</a>
        </div>
    </div>
</nav>
@push('scripts')
    @Vite(['resources/css/components/nav.css'])
    @Vite(['resources/js/components/modal.js'])
@endpush
