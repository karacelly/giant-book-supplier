@extends('layout.layout')

@section('scripts')
    <title>Publishers</title>
@endsection

@section('content')
    <div class="title">
        <h1>Publishers Page</h1>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center my-2 row-cols-2 g-4">
            @foreach ($publishers as $p)
                <div class="col">
                    <div class="card h-100">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="images p-3">
                                    <div class="text-center p-4">
                                        <img id="main-image" src="{{ $p->image }}" width="150" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="product p-4">
                                    <div class="mt-4 mb-3">
                                        <h2 class="text-uppercase fw-bold">{{ $p->name }}</h2>
                                    </div>
                                    <p>{{ $p->address }}</p>
                                    <p>{{ $p->email }}</p>
                                    <p>{{ $p->phone }}</p>
                                    <a class="btn btn-warning" href="{{ route('publisher', $p) }}">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
