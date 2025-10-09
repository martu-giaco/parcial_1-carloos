<?php
/** \Illuminate\Support\ViewErrorBag $errors */
?>

<x-layout>
    <x-slot:title>Crear plan</x-slot:title>

    <div class="container">
        <h1 class="fw-bold display-5 mb-3">Crear plan</h1>

        @if ($errors->any())
            <div class="alert alert-danger">La información contiene errores.</div>
        @endif

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Precio</label>
                <input type="text" name="price" id="price" class="form-control" value="{{ old('price') }}">
            </div>

            <button type="submit" class="fw-bold btn text-light rounded-4  px-3 px-sm-4 px-md-3 py-1 py-sm-2 py-md-2 fs-6 fs-sm-5 fs-md-4"
                style="background-color: #29995BFF; border-color: #37AF55FF;"><i class="fa-solid fa-plus mx-2"></i>Crear Plan</button>
        </form>
    </div>


</x-layout>
