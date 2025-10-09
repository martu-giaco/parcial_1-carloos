<x-layout>
    <div class="container my-5">
        <div class="card shadow-sm border-light rounded-4 overflow-hidden">

            <!-- Header estilo post -->
            <div class="card-header bg-light d-flex align-items-center gap-3 flex-wrap">
                <div class="rounded-circle bg-dark text-white d-flex justify-content-center align-items-center" style="width: 50px; height: 50px; font-weight: bold; font-size: 1.3rem;">
                    {{ strtoupper(substr($review->author, 0, 1)) }}
                </div>
                <div>
                    <h5 class="mb-0">{{ $review->author }}</h5>
                    <small class="text-muted">Reseña</small>
                </div>
                <div class="ms-auto d-flex align-items-center gap-1">
                    @for ($i = 0; $i < $review->rating; $i++)
                        <i class="bi bi-star-fill text-warning"></i>
                    @endfor
                    @for ($i = $review->rating; $i < 5; $i++)
                        <i class="bi bi-star text-muted"></i>
                    @endfor
                    <span class="ms-2 text-muted fw-bold">{{ $review->rating }}/5</span>
                </div>
            </div>

            <!-- Cuerpo del post -->
            <div class="card-body bg-white">
                <p class="mb-4" style="line-height: 1.7; font-size: 1rem; color: #333;">
                    {{ $review->comment }}
                </p>
                <div class="d-flex justify-content-between align-items-center mt-3 flex-wrap gap-2">
                    <span class="text-muted fst-italic" style="font-size: 0.85rem;">Publicado el {{ $review->created_at->format('d/m/Y') }}</span>
                    <a href="{{ route('reviews.index') }}"
                       class="fw-bold btn text-light rounded-4 px-4 py-2 fs-6"
                       style="background-color: #37A0AF; border-color: #37A0AF;">
                       <i class="fa-solid fa-arrow-left me-2"></i> Volver
                    </a>
                </div>
            </div>



        </div>
    </div>
</x-layout>
<!-- <a href="{{ route('reviews.index') }}"
                       class="fw-bold btn text-light rounded-4 px-4 py-2 fs-6"
                       style="background-color: #37A0AF; border-color: #37A0AF;">
                       <i class="fa-solid fa-arrow-left me-2"></i> Volver
                    </a> -->
