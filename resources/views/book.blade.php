@extends('layout.layout')

@section('scripts')
    <title>Book Detail</title>
@endsection

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="images p-3">
                                <div class="text-center p-4">
                                    <img id="main-image" src="{{ $book->image }}" width="250" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product p-4">
                                <div class="mt-4 mb-3">
                                    <h5 class="text-uppercase text-muted brand">{{ $book->author }}</h5>
                                    <h1 class="text-uppercase fw-bold">{{ $book->title }}</h1>
                                </div>
                                <p>{{ $book->synopsis }}</p>
                                <p>Published by {{ $book->publisher['name'] }}</p>
                                <p>&copy; {{ $book->year }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
