@extends('layouts.app')

@section('content')
    <h1>{{ $type }}ランキング</h1>
    @include('items.items', ['items' => $items, 'type' => $type])
@endsection
