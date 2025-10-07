<x-layout>
    <x-slot:title>Inicio | KALM</x-slot:title>

    <!-- Carousel principal con imágenes clicables y alto máximo -->
    <div id="mainCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="{{ route('products.index') }}">
                    <div class="overflow-hidden" style="max-height: 250px;">
                        <img src="https://i.pinimg.com/736x/82/8c/3a/828c3aabf4a3b79f6b003626fd98b870.jpg"
                            class="d-block w-100" style="object-fit: cover; height: 100%;" alt="Banner Skincare">
                    </div>
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
                        <h1><i class="fa-solid fa-sparkles"></i> Bienvenido a KALM</h1>
                        <p>Asesoramiento personalizado de skincare y haircare para hombres y mujeres.</p>
                    </div>
                </a>
            </div>
            <div class="carousel-item">
                <a href="{{ route('posts.index') }}">
                    <div class="overflow-hidden" style="max-height: 250px;">
                        <img src="https://i.pinimg.com/1200x/52/40/cf/5240cff0fb3479c7adc3351a22acc765.jpg"
                            class="d-block w-100" style="object-fit: cover; height: 100%;" alt="Banner Consejos">
                    </div>
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
                        <h2><i class="fa-solid fa-lightbulb"></i> Consejos Personalizados</h2>
                        <p>Rutinas diarias para mantener tu piel y cabello saludables.</p>
                    </div>
                </a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>


    <!-- Botones para Test de Rutina -->
    <div class="mb-4 d-flex align-items-center justify-content-between">
        <div>
            <p class="lead fw-bold"><i class="fa-solid fa-vial"></i> Conoce tu rutina</p>
            <a href="#" class="btn btn-info btn-lg mx-2"><i class="fa-solid fa-face-smile"></i> Test: Tipo de Piel</a>
            <a href="#" class="btn btn-warning btn-lg mx-2"><i class="fa-solid fa-droplet"></i> Test: Tipo de
                Cabello</a>
        </div>
        <div>
            <a href="https://www.figma.com/design/8p4Gj78estjBeiSBqFYJV5/proto?node-id=71-795&t=cV8twNHaBXxlKCTj-1" target="_blank"
                class="btn btn-success btn-lg d-flex align-items-center">
                <i class="fa-brands fa-figma me-2"></i> Probar Prototipo
            </a>
        </div>
    </div>


    <!-- Preguntas Frecuentes -->
    <h2 class="mb-3"><i class="fa-solid fa-question-circle"></i> Preguntas Frecuentes</h2>
    <div class="accordion mb-5" id="faqAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                    ¿Cómo puedo mantener una rutina si soy hombre?
                </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Organiza tus productos y horarios, comienza con lo esencial: limpieza, hidratación y protección
                    solar.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq2">
                    ¿Cuánto tiempo debo dedicar al cuidado del cabello?
                </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Con 10-15 minutos diarios puedes mantener un cabello saludable si usas los productos adecuados.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq3">
                    ¿Puedo combinar skincare y haircare en la misma rutina?
                </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Sí, solo asegúrate de separar productos para piel y cabello y aplicarlos en el orden correcto.
                </div>
            </div>
        </div>
    </div>

    <!-- Influencers Destacados -->
    <h2 class="mb-3"><i class="fa-brands fa-instagram"></i> Influencers Destacados</h2>
    <div class="row">
        @php
            $influencers = [
                [
                    'name' => 'Influencer',
                    'description' => 'Especialista en skincare natural y cuidado del cabello.',
                    'image' => 'https://example.com/sofia.jpg',
                    'instagram' => 'https://instagram.com/sofia.belle'
                ],
                [
                    'name' => 'Influencer',
                    'description' => 'Consejos prácticos para cabello masculino y estilo de vida saludable.',
                    'image' => 'https://example.com/lucas.jpg',
                    'instagram' => 'https://instagram.com/lucas.haircare'
                ],
                [
                    'name' => 'Influencer',
                    'description' => 'Tips diarios de belleza y cuidado personal con enfoque natural.',
                    'image' => 'https://example.com/ana.jpg',
                    'instagram' => 'https://instagram.com/ana.glow'
                ],
            ];
        @endphp

        @foreach($influencers as $influencer)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <a href="{{ $influencer['instagram'] }}" target="_blank">
                        <img src="{{ $influencer['image'] }}" class="card-img-top" alt="Foto de {{ $influencer['name'] }}">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $influencer['name'] }}</h5>
                        <p class="card-text">{{ $influencer['description'] }}</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ $influencer['instagram'] }}" target="_blank" class="btn btn-primary">
                            <i class="fa-brands fa-instagram"></i> Ver Instagram
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
