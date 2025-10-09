<?php
/** \Illuminate\Support\ViewErrorBag $errors */
?>

<x-layout>
    <x-slot:title>Crear post</x-slot:title>

    <div class="container">
        <h1 class="fw-bold display-5 mb-3">Crear post</h1>

        @if ($errors->any())
            <div class="alert alert-danger">La información contiene errores.</div>
        @endif

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Título</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Contenido</label>
                <textarea name="content" id="content" class="form-control">{{ old('content') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="author" class="form-label">Autor</label>
                <input type="text" name="author" id="author" class="form-control" value="{{ old('author') }}">
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Categoría</label>
                <select name="category" id="category" class="form-select">
                    <option value="">Seleccionar una categoría</option>
                    <option value="skincare" {{ old('category') == 'skincare' ? 'selected' : '' }}>Skincare</option>
                    <option value="haircare" {{ old('category') == 'haircare' ? 'selected' : '' }}>Haircare</option>
                </select>
            </div>

            <button type="submit"
                class="fw-bold btn text-light rounded-4  px-3 px-sm-4 px-md-3 py-1 py-sm-2 py-md-2 fs-6 fs-sm-5 fs-md-4"
                style="background-color: #29995BFF; border-color: #37AF55FF;"><i class="fa-solid fa-plus mx-2"></i>Crear
                Post</button>
        </form>
    </div>

</x-layout>
