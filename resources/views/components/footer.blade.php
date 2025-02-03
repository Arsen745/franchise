<section class="footer">
    <h1 class="title-footer">ОСТАВИТЬ ЗАЯВКУ</h1>
    <div class="content-footer">
        <div class="container">
            <div class="form">
                <input type="text" placeholder="Как вас зовут?">
                <input type="text" placeholder="Почта">
                <input type="text" placeholder="+7">
                <div class="check">
                    <input type="checkbox">
                    <label>Согласие обработки ПД</label>
                </div>
                <div class="btn-description">
                    <button>Оставить заявку</button>
                    <p class="description-footer">В ближайшее время с Вами свяжется наш менеджер и проконсультирует по всем вопросам</p>
                    <p class="email">Почта для связи: <a href="mailto:franshiza-kulikov@mail.ru">franshiza-kulikov@mail.ru</a></p>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/bird.png') }}" alt="">
    </div>
</section>
@push('scripts')
    @Vite(['resources/css/components/footer.css'])
@endpush
