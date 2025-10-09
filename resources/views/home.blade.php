<x-layout>
    <x-slot:title>Inicio | Kälm</x-slot:title>

    <header class="mt-0 mb-5 rounded-4 text-light d-flex align-items-center"
    style="background-image: url('https://files.catbox.moe/43pskb.png'); background-size: cover; background-position: center; height: 20vw;">

    <div class="container d-flex flex-row flex-md-column align-items-start justify-content-between px-3 px-md-5">
        <!-- Texto -->
        <h1 class="fw-bold mb-0 text-start fs-4 fs-sm-3 fs-md-2 fs-lg-1" style="color: #306067;">
            Descubrí los secretos de tu piel y cabello con Kälm.
        </h1>

        <!-- Botón -->
         <a href="#"
           class="fw-bold btn text-light rounded-4 mt-0 mt-md-3 px-3 px-sm-4 px-md-5 py-1 py-sm-2 py-md-2 fs-6 fs-sm-5 fs-md-4"
           style="background-color: #37A0AF; border-color: #37A0AF;">
            Ver más
        </a>
    </div>
</header>

    <div class="container">
        <div class="d-flex flex-column flex-md-row align-items-center my-5 gap-4">
            <img src="https://files.catbox.moe/y072ew.png" class="img-fluid flex-shrink-0"
                style="max-width: 40%; min-width: 200px;" alt="mockup kälm">
            <div class="text-center text-md-start flex-grow-1 mt-3 mt-md-0">
                <h2 style="color: #306067;">Tu próxima rutina de autocuidado</h2>
                <p>
                    Con la app de Kälm, diseñá una rutina de skincare que realmente se adapte a vos —a tu piel, a tu
                    ritmo y a tu día a día. Nuestra tecnología inteligente analiza tus necesidades, tipo de piel y
                    hábitos para crear un plan personalizado que evoluciona con vos.
                </p>
            </div>
        </div>



        <!-- Botones para Test de Rutina -->
        <div class="my-5 text-center">
            <h2 style="color: #306067;">Tu rutina ideal</h2>
            <p class="mb-5">Realizá nuestros tests para descubrir la rutina de autocuidado que mejor se adapta a vos.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-4 mb-5">
                <div style="width: 20vw; height: 25vw; background-image: url('https://files.catbox.moe/8ejton.jpg');"
                    class="shadow-sm rounded-5 d-flex flex-column justify-content-center align-items-center p-4">
                    <img style="height: 9vw;" class="mb-3" src="https://files.catbox.moe/zsw18a.svg" alt="skincare">
                    <p class="fw-bold text-light">Skincare</p>
                </div>
                <div style="width: 20vw; height: 25vw; background-image: url('https://files.catbox.moe/7v635c.jpg');"
                    class="shadow-sm rounded-5 d-flex flex-column justify-content-center align-items-center p-4">
                    <img style="height: 9vw;" class="mb-3" src="https://files.catbox.moe/0p4nkk.svg" alt="haircare">
                    <p class="fw-bold text-light">Haircare</p>
                </div>
                <div style="width: 20vw; height: 25vw; background-image: url('https://files.catbox.moe/5spkpv.png'); background-size: cover;"
                    class="shadow-sm rounded-5 d-flex flex-column justify-content-center align-items-center p-4">
                    <img style="height: 9vw;" class="mb-3" src="https://files.catbox.moe/dhwxv5.svg" alt="prototipo">
                    <a target="blank_" style="color: white;" class="fw-bold d-inline-block text-decoration-none"
                        href="https://www.figma.com/design/8p4Gj78estjBeiSBqFYJV5/proto?node-id=0-1&t=7gWD9YIaVhpseoar-1">Probá
                        nuestro prototipo</a>
                </div>
            </div>
        </div>

        <!-- Subscripciones -->
        <div class="my-5">
            <h2 class="text-center mb-4" style="color: #306067;">Subscripciones</h2>
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                <div class="row g-0">
                    <!-- PLAN FREE -->
                    <div class="col-12 col-md-4 p-4 border-end d-flex flex-column align-items-center">
                        <h3 class="fw-semibold">Kälm Free</h3>
                        <p class="text-muted mb-2 text-center">Ideal para quienes recién están empezando a adentrarse en el mundo
                            del haircare y el skincare.</p>
                        <p style="color:#306067;" class="fs-3 fw-bold mb-4">Gratis</p>
                        <ul class="text-secondary mb-4 ">
                            <li>Diagnóstico básico del tipo de piel</li>
                            <li>Recomendaciones diarias de rutina</li>
                            <li>Registro de Planes usados</li>
                            <li>Consejos y artículos sobre skincare</li>
                        </ul>
                        <button style="background-color:#37A0AF;margin-top: 2.5vw;"
                            class="btn text-white rounded-pill px-4">Empezar gratis</button>
                    </div>
                    <!-- PLAN PRO -->
                    <div class="col-12 col-md-4 p-4 d-flex flex-column align-items-center"
                        style="background-color: #CCE2E5;">
                        <h3 class="fw-semibold">Kälm Pro</h3>
                        <p class="text-muted mb-2 text-center">Ideal para expertos en skincare y haircare, tanto profesionales como
                            entusiastas del autocuidado.</p>
                        <p style="color:#306067;" class="fs-3 fw-bold mb-4">ARS $20,000 / mes</p>
                        <ul class="text-secondary mb-4 ">
                            <li>Asesoramiento con expertos certificados</li>
                            <li>Recomendaciones según tu presupuesto</li>
                            <li>Rutinas adaptadas a tratamientos dermatológicos</li>
                            <li>Reportes mensuales con evolución</li>
                            <li>Acceso anticipado a nuevas funciones</li>
                        </ul>
                        <button style="background-color:#37A0AF;" class="btn text-white rounded-pill px-4">Ver
                            más</button>
                    </div>
                    <!-- PLAN PLUS -->
                    <div class="col-12 col-md-4 p-4 border-end bg-light d-flex flex-column align-items-center">
                        <h3 class="fw-semibold">Kälm Plus</h3>
                        <p class="text-muted mb-2 text-center">Ideal para quienes ya conocen su piel y buscan subir de nivel, Kälm
                            Plus ofrece una experiencia aún más personalizada y sin anuncios. </p>
                        <p style="color:#306067;" class="fs-3 fw-bold mb-4">ARS $7,000 / mes</p>
                        <ul class="text-secondary mb-4 ">
                            <li>Análisis avanzado con IA y escaneo facial</li>
                            <li>Rutinas personalizadas según clima y hábitos</li>
                            <li>Recordatorios inteligentes</li>
                            <li>Estadísticas del progreso con fotos</li>
                            <li>Acceso a comunidad y foros privados</li>
                        </ul>
                        <button style="background-color:#37A0AF;" class="btn text-white rounded-pill px-4">Ver
                            más</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Preguntas Frecuentes -->
        <h2 style="color: #306067;" class="text-center my-5">Preguntas Frecuentes</h2>
        <div class="accordion mb-5" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        ¿Cómo sabe la app qué tipo de piel tengo?
                    </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Nuestra app analiza tus respuestas a un breve cuestionario dermatológico. Con esa información
                        identifica tu tipo de piel y te recomienda rutinas y Planes personalizados.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq2">
                        ¿Los Planes recomendados son de marcas específicas?
                    </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        No. La app es totalmente imparcial: te sugiere Planes basados en tus necesidades y tipo de piel,
                        sin vínculos comerciales con marcas. Aun así, podés filtrar por tus marcas favoritas si querés.
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
                        Podés usar la versión básica de forma gratuita. Si querés acceder a funciones premium —como el
                        seguimiento del progreso de tu piel, recordatorios inteligentes y rutinas avanzadas— hay planes
                        de suscripción mensual o anual.
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
