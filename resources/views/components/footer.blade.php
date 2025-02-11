<section class="footer" id="footer">
    <h1 class="title-footer">ОСТАВИТЬ ЗАЯВКУ</h1>
    <div class="content-footer">
        <div class="container">
            <form class="form" action="{{ route('feedback.store') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Как вас зовут?" required>
                <input type="email" name="email" placeholder="Почта" required>
                <input type="text" name="phone_number" placeholder="+7" required>
                <div class="check">
                    <input name="consent_pd" type="checkbox" required>
                    <label>Согласие обработки ПД</label>
                </div>
                <div class="btn-description">
                    <button type="submit">Оставить заявку</button>
                    <p class="description-footer">В ближайшее время с Вами свяжется наш менеджер и проконсультирует по всем вопросам</p>
                    <p class="email">Почта для связи: <a href="mailto:franshiza-kulikov@mail.ru">franshiza-kulikov@mail.ru</a></p>
                </div>
            </form>
        </div>
        <img src="{{ asset('assets/bird.png') }}" alt="">
    </div>
</section>
@push('scripts')
    @Vite(['resources/css/components/footer.css'])
@endpush
