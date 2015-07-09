@extends('template')

@section('content')

    <ul class="list-group">
        @foreach($notaLists as $nota)
        <li class="list-group-item">{{ $nota }}</li>
        @endforeach
    </ul>

@stop