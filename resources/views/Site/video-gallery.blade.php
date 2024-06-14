@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center mb-4">گالری تصاویر</h2>

        <div class="row">
            @foreach ($images as $image)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $image->path) }}" class="card-img-top" alt="{{ $image->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $image->name }}</h5>
                            <p class="card-text">{{ $image->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
