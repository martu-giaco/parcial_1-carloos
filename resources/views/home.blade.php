<x-layout>
    <x-slot:title>Inicio | Kälm</x-slot:title>

    <header style="background-image: url('https://files.catbox.moe/43pskb.png'); background-size:cover; height:30vw;" class="mt-0 m-2 p-9 mb-5 rounded-4 text-light d-flex justify-content-between align-items-center">
        <div style="width: 34vw;" class="ms-5">
            <h1 style="color: #306067;" class="fw-bold text-5xl mb-3">Comprendé los secretos de tu piel y cabello con Kälm.</h1>
            <a style="border-color: #37A0AF; background-color: #37A0AF;" class="fw-bold me-2 px-4 py-2 rounded-4 text-light w-20 text-center text-decoration-none" ">Ver más</a>
        </div>
    </header>


<div class="container">
    <div class="d-flex my-5">
        <img class="img-fluid" src="https://files.catbox.moe/y072ew.png" alt="mockup kälm">
        <div>
            <h2>Descubrí tu próxima rutina de autocuidado</h2>
            <p>Con la app de Kälm, vas a poder crear una rutina personalizada que se adapte a tus necesidades y tipo de piel.</p>
        </div>
    </div>

        <!-- Botones para Test de Rutina -->
    <div class="my-5">
        <h2 class="text-center fw-bold mb-5">Conocé tu Rutina</h2>
        <div style="color: #306067;" class="d-flex justify-content-center flex-wrap mb-5">
            <div style="width: 17vw;" class="text-center shadow-sm rounded-5 p-5 me-5">
                <img style="height: 9vw;" class="mb-5" class="mb-5" src="https://files.catbox.moe/ivevkn.png" alt="skincare">
                <p class="fw-bold">Skincare</p>
            </div>
            <div style="width: 17vw;" class="text-center shadow-sm rounded-5 p-5 me-5">
                <img style="height: 9vw;" class="mb-5" src="https://files.catbox.moe/c9ui5a.png" alt="haircare">
                <p class="fw-bold">Haircare</p>
            </div>
            <div style="width: 17vw;" class="text-center shadow-sm rounded-5 p-5 me-5">
                <img style="height: 9vw;" class="mb-5" src="https://files.catbox.moe/di4wo8.png" alt="prototipo">
                <a style="color: #306067;" class="fw-bold d-inline-block text-decoration-none" href="https://www.figma.com/design/8p4Gj78estjBeiSBqFYJV5/proto?node-id=0-1&t=7gWD9YIaVhpseoar-1">Probá nuestro prototipo</a>
            </div>
        </div>
    </div>

    <!-- Preguntas Frecuentes -->
    <h2 class="mb-3"><i class="fa-solid fa-question-circle"></i> Preguntas Frecuentes</h2>
    <div class="accordion mb-5" id="faqAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                    ¿Cómo sabe la app qué tipo de piel tengo?
                </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Nuestra app analiza tus respuestas a un breve cuestionario dermatológico. Con esa información identifica tu tipo de piel y te recomienda rutinas y productos personalizados.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq2">
                    ¿Los productos recomendados son de marcas específicas?
                </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse">
                <div class="accordion-body">
                    No. La app es totalmente imparcial: te sugiere productos basados en tus necesidades y tipo de piel, sin vínculos comerciales con marcas. Aun así, podés filtrar por tus marcas favoritas si querés.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq3">
                    ¿Necesito pagar para usar la app?
                </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Podés usar la versión básica de forma gratuita. Si querés acceder a funciones premium —como el seguimiento del progreso de tu piel, recordatorios inteligentes y rutinas avanzadas— hay planes de suscripción mensual o anual.
                </div>
            </div>
        </div>
    </div>

    <!-- Influencers Destacados -->
    <h2 class="mb-3"><i class="fa-brands fa-instagram"></i> Nuestra comunidad</h2>
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
</div>
</x-layout>
