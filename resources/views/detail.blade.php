@extends('layout')


@section('content')
    <div class="wrap-detail">
        @foreach ($tipe as $item)
            <a href="{{ url('detail/' . $item->id) }}" type="button"
                class="btn btn-primary btn-lg">{{ $item->TipeMakanan }}</a>
        @endforeach
    </div>
@endsection
