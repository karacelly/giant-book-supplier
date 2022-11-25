@extends('layout.layout')

@section('scripts')
    <title>Homepage</title>
@endsection

@section('content')
    <div class="title">
        <h1>Book List</h1>
    </div>
    <div class="container py-3">
        <div class="row row-cols-2 row-cols-md-5 g-4">
            @foreach ($books as $b)
                <div class="col">
                    <div class="card h-100">
                        <div class="img h-65">
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
@endsection
