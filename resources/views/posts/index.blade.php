<?php
/** @var \Illuminate\Database\Eloquent\Collection|\App\Models\Post[] $posts */
?>

<x-layout>
    <x-slot:title>Listado de Posts</x-slot:title>

    <div class="container my-5">
        <div class="d-flex align-items-center justify-content-start gap-4">
            <h1 class="fw-bold display-5 mb-3">Posts</h1>
            <a href="{{ route('posts.create', ['plan' => 'Pro']) }}"
                class="fw-bold btn text-light rounded-4  px-3 px-sm-4 px-md-5 py-1 py-sm-2 py-md-2 fs-6 fs-sm-5 fs-md-4"
                style="background-color: #29995BFF; border-color: #37AF55FF;"><i class="fa-solid fa-plus"></i> Crear
                Post</a>
        </div>

        @if($posts->isEmpty())
            <p class="text-muted">No hay posts aún.</p>
        @else
            <div class="row g-4">
                @foreach($posts as $post)
                        <div class="col-md-6 col-lg-4">
                            <div class="card shadow-sm border-light h-100">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text text-muted mb-2"><strong>Autor:</strong> {{ $post->author }}</p>
                                    <p class="card-text text-muted mb-3"><strong>Categoría:</strong> {{ $post->category }}</p>

                                    <div class="mt-auto d-flex gap-2">

                                        <a href="{{ route('posts.show', ['id' => $post->id]) }}"
                                            class="fw-bold btn text-light rounded-4 mt-0 mt-md-3 px-3 px-sm-4 px-md-5 py-1 py-sm-2 py-md-2 fs-6 fs-sm-5 fs-md-4"
                                            style="background-color: #37A0AF; border-color: #37A0AF;">Ver</a>
                                        <form action="{{ route('posts.destroy', ['id' => $post->id]) }}" method="POST"
                                            class="flex-fill">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="fw-bold btn text-light rounded-4 mt-0 mt-md-3
                    px-3 px-sm-4 px-md-5 py-1 py-sm-2 py-md-2 fs-6 fs-sm-5 fs-md-4"
                                                style="background-color: #D63838FF; border-color: #AF3737FF;"
                                                onclick="return confirm('¿Eliminar este post?')">
                                                Eliminar
                                            </button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
        @endif
    </div>
</x-layout>
