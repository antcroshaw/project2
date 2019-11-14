@extends('app')

@section('title', 'services');

@section('content')
    <h1>Wecome to services </h1>
    <ul>
    @forelse($services as $service)
    <li>{{ $service->name }}</li>

        @empty
        <p>no services available </p>

    @endforelse
    </ul>
    @endsection
