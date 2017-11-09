@extends('layouts.layout')

@section('content')

<main role="main" class="container">
    <h1>Sign In</h1>

    <form method="POST" action="/login">


        {{ csrf_field() }}

        <div class="form-group">

            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>

        </div>

        <div class="form-group">

            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password"  required>

        </div>

        <button type="submit" class="btn btn-primary">Login</button>


        @include('layouts.errors')
</main>

@endsection