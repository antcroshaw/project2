@extends('app')

@section('title', 'services')

@section('content')
    <h1>Welcome to services </h1>

    <form action="/service" method="post" >
        @csrf
    <input type="text" name="name" autocomplete="off" />
    <button type="submit">Add Service</button>


    </form>

    <p style="color:red" >@error('name')  {{ $message }} @enderror</p>




    <ul>
    @forelse($services as $service)
    <li>{{ $service->name }}</li>

        @empty
        <p>no services available </p>

    @endforelse
    </ul>
    @endsection
