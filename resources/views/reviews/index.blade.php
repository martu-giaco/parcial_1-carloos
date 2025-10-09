<x-layout>
    <div class="container my-5">
        <div class="d-flex align-items-center justify-content-start gap-4">
            <h1 class="fw-bold display-5 mb-3">Reseñas de usuarios</h1>
            <a href="{{ route('reviews.create', ['plan' => 'Pro']) }}" class="fw-bold btn text-light rounded-4  px-3 px-sm-4 px-md-5 py-1 py-sm-2 py-md-2 fs-6 fs-sm-5 fs-md-4"style="background-color: #29995BFF; border-color: #37AF55FF;"><i class="fa-solid fa-plus"></i> Crear Reseña</a>
        </div>


        @if(session('feedback.message'))
            <div class="alert alert-success">{{ session('feedback.message') }}</div>
        @endif

        <div class="mt-5">
            <h2 class="mb-3">Reseñas existentes</h2>

            @if($reviews->isEmpty())
                <p class="text-muted">No hay reseñas todavía.</p>
            @else
                <div class="row g-3">
                    @foreach($reviews as $review)
                        <div class="col-md-6">
                            <div class="card shadow-sm border-light">
                                <div class="card-body">
                                    <!-- Header simplificado -->
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="rounded-circle bg-secondary text-white d-flex justify-content-center align-items-center me-2"
                                            style="width: 35px; height: 35px;">
                                            {{ strtoupper(substr($review->author, 0, 1)) }}
                                        </div>
                                        <div>
                                            <h6 class="mb-0">{{ $review->author }}</h6>
                                        </div>
                                    </div>

                                    <!-- Comentario -->
                                    <p class="mb-2">{{ $review->comment }}</p>

                                    <!-- Rating con estrellas -->
                                    <div class="mb-2">
                                        @for ($i = 0; $i < $review->rating; $i++)
                                            <i class="bi bi-star-fill text-warning"></i>
                                        @endfor
                                        @for ($i = $review->rating; $i < 5; $i++)
                                            <i class="bi bi-star text-muted"></i>
                                        @endfor
                                    </div>

                                    <!-- Acciones -->
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('reviews.view', $review->id) }}"
                                            class="fw-bold btn text-light rounded-4 mt-0 mt-md-3 px-3 px-sm-4 px-md-5 py-1 py-sm-2 py-md-2 fs-6 fs-sm-5 fs-md-4"style="background-color: #37A0AF; border-color: #37A0AF;">Ver</a>
                                        <form action="{{ route('reviews.destroy', $review->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="fw-bold btn text-light rounded-4 mt-0 mt-md-3 px-3 px-sm-4 px-md-5 py-1 py-sm-2 py-md-2 fs-6 fs-sm-5 fs-md-4"style="background-color: #D63838FF; border-color: #AF3737FF;"
                                                onclick="return confirm('¿Eliminar reseña?')">Eliminar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

    </div>
</x-layout>
