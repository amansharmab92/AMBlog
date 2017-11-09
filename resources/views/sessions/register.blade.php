@extends('layouts.layout')

@section('content')

<main role="main" class="container">

    <h1>Register a user</h1>

    <form method="POST" action="/register">


        {{ csrf_field() }}

        <div class="form-group">

            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>

        </div>

        <div class="form-group">

            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>

        </div>

        <div class="form-group">

            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password"  required>

        </div>
        <div class="form-group">

            <label for="password_confirmation">Password Confirmation</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"  required>

        </div>

        <button type="submit" class="btn btn-primary">Register</button>


        @include('layouts.errors')


    </form>
</main>

@endsection