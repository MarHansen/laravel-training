@extends('layout')


@section('content')
    <h1>{{ $tipe->TipeMakanan }}</h1>
    <div class="row item-wrap">
        @foreach ($recipe as $item)
            <div class="card" style="width: 18rem;">

                <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <p class="card-text">{{ $item->description }}</p>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $item->type->TipeMakanan }}</h6>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">By {{ $item->writer->name }}</li>
                    <li class="list-group-item">Posted</li>
                    <li class="list-group-item">Woof Woof nggh ahhnnn</li>
                </ul>
            </div>
        @endforeach
    </div>
@endsection
