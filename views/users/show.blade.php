@extends('layout.main')

@section('title', 'User Details')

@section('content')
<div class="container mt-5">
    <h1>User Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">User Information</h5>
            <p class="card-text"><strong>ID:</strong> {{ $user->id }}</p>
            <p class="card-text"><strong>Name:</strong> {{ $user->name }}</p>
            <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
            <p class="card-text"><strong>Email_verified_at:</strong> {{ $user->email_verified_at }}</p>
        </div>
    </div>
</div>
@endsection