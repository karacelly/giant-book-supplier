@extends('layout.layout')

@section('scripts')
    <title>Publisher Detail</title>
@endsection

@section('content')
    <div class="title">
        <h1>Publisher Detail</h1>
    </div>
    <div class="publisher">
        <div class="row d-flex justify-content-center my-4">
            <div class="col-md-11">
                <div class="card">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="images p-3">
                                <div class="text-center p-4">
                                    <img id="main-image" src="{{ $publisher->image }}" width="200" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="product p-4">
                                <div class="mt-4 mb-3">
                                    <h1 class="text-uppercase fw-bold">{{ $publisher->name }}</h1>
                                </div>
                                <p>{{ $publisher->address }}</p>
                                <p>{{ $publisher->email }}</p>
                                <p>{{ $publisher->phone }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container py-3">
                            <div class="row row-cols-2 row-cols-md-4 g-6 mx-4">
                                @foreach ($publisher->books as $b)
                                    <div class="col">
                                        <div class="card h-100">
                                            <div class="img h-100">
                                                <img src="{{ $b->image }}" class="card-img-top h-100" />
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $b->title }}</h5>
                                                <p class="card-text">
                                                    {{ $b->author }}
                                                </p>
                                                <a class="btn btn-warning" href="{{ route('book', $b) }}">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
