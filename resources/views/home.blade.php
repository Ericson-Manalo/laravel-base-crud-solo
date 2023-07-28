@extends('layouts.app')


@section('title', 'Checking if it works!')


@section('main-content')
    <h1>
        Congratulation, it works!
    </h1>

    <a href="{{route('guest.shores.index')}}">
        <button type="button" class="btn btn-primary">Primary</button>
    </a>

@endsection