<!-- resources/views/reviews/create.blade.php -->

<x-layout>
    <div class="container my-5">
        <h1 class="fw-bold display-5 mb-3">Crear nueva reseña</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('reviews.store') }}" method="POST">
            @csrf


            <div class="mb-3">
                <label for="author" class="form-label">Autor</label>
                <input type="text" name="author" id="author" class="form-control" value="{{ old('author') }}" required>
            </div>

            <div class="mb-3">
                <label for="rating" class="form-label">Calificar (1 - 5)</label>
                <input type="number" name="rating" id="rating" class="form-control" min="1" max="5" value="{{ old('rating') }}" required>
            </div>

            <div class="mb-3">
                <label for="comment" class="form-label">Comentario</label>
                <textarea name="comment" id="comment" class="form-control" rows="4" required>{{ old('comment') }}</textarea>
            </div>

            <button type="submit" class="fw-bold btn text-light rounded-4  px-3 px-sm-4 px-md-3 py-1 py-sm-2 py-md-2 fs-6 fs-sm-5 fs-md-4"
                style="background-color: #29995BFF; border-color: #37AF55FF;"><i class="fa-solid fa-plus mx-2"></i>Crear Reseña</button>
        </form>
    </div>
</x-layout>
