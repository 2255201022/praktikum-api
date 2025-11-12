@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-5">
        <h1 class="h4 text-gray-900 mb-4 text-center">Login</h1>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>

            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>

        <hr>
        <div class="text-center">
            <a class="small" href="{{ route('register') }}">Buat akun baru!</a>
        </div>
    </div>
</div>
@endsection
