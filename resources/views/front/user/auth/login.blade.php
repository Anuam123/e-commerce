@extends('front.layouts.master')
@section('title','Login')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 p-2">
            <div class="card">
                @if (session('success'))
                <div style="color: green; background-color: #d4edda; padding: 10px; border-radius: 5px;">
                    {{ session('success') }}
                </div>
                @endif  
                @if ($errors->any())
                <div style="color: red; background-color: #f8d7da; padding: 10px; border-radius: 5px;">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
                @endif
                <div class="card-header text-center"><h4>Xordox Login</h4></div>
                <div class="card-body">
                    <form method="POST" action="{{route('login.user')}}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Log In</button>
                        </div>
                        <div class="text-center">
                            Don't have an account? <a href="{{ route('user.registration') }}">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection