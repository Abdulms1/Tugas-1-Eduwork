@extends('template.layout')
@section('title', 'Home')
@section('content')
<x-alert style="success">
    This is a success alert!
</x-alert>
<h1>Welcome to the Home Page</h1>
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['age'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
@push('styles')
    <style>
        h1 {
            color: blue;
        }
    </style>
@endpush