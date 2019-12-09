@extends('layouts.master')

@section('title', 'Категория' . $category->name)

@section('content')
        <h1>{{ $category->name }}</h1>
        <p>
        <h4>Для вас найдено {{ $category->products->count() }} товаров</h4>>
            {{ $category->description }}
        </p>
        <div class="row">
            @foreach($category->products as $product)
                @include('layouts.card', compact('product'))
            @endforeach
        </div>
@endsection

