<section class="corporate container">
    <h1 class="title">ФИРМЕННЫЙ СТИЛЬ</h1>
    <div class="top">
        <img src="{{ asset('assets/corporate-1.png') }}" alt="">
        <img src="{{ asset('assets/corporate-2.png') }}" alt="">
    </div>
    <div class="bottom">
        <img class="image-half" src="{{ asset('assets/corporate-3.png') }}" alt="">
        <img src="{{ asset('assets/corporate-4.png') }}" alt="">
    </div>
    <div class="corporate-description">
        <p>Фирменный стиль магазинов, форма, упаковка и другие брендированные элементы, линия мерча – всё это повышает лояльность гостей и узнаваемость бренда, что в итоге приводит к возврату клиентов и повышению продаж.</p>
    </div>
</section>
@push('scripts')
    @Vite(['resources/css/components/corporate.css'])
@endpush
