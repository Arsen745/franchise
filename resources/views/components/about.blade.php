<section class="container about" id="about">
    <div class="title">
        <h1>О НАС</h1>
    </div>
    <div class="cards">
        <div class="card">
            <img src="{{ asset('assets/about/about-image-1.png') }}" alt="">
            <p>Истории нашего бренда - уже 33 года. За это время мы выросли до сети в четырёх странах (Кыргызтан, Казахстан, Россия, Узбекистан) с более сотней фирменных магазинов. Быть с Kulikov - это быть частью фиолетовой семьи, которая ценит натуральность и качество в каждом кусочке.</p>
        </div>
        <div class="card">
            <img src="{{ asset('assets/about/about-image-2.png') }}" alt="">
            <p>Мы – за натуральность. В нашей продукции используется экологически чистое сырьё – только натуральное коровье молоко, свежие 38% сливки, спелые фрукты, ягоды, самые качественные орехи и горный мёд.</p>
        </div>
        <div class="card">
            <img src="{{ asset('assets/about/about-image-3.png') }}" alt="">
            <p>Наш консервант – холод. Заморозка по технологии Smart Frost – это единственный 100% натуральный способ консервации, который позволяет сохранить вкус, структуру и всю пользу натуральных ингредиентов.</p>
        </div>
    </div>
</section>
@push('scripts')
    @Vite(['resources/css/components/about.css'])
@endpush
