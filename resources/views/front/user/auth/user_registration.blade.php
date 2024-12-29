@extends('front.layouts.master')
@section('title','Login')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center"><h4>Xordox Registration</h4></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('registers') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                            @error('name') <span>{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            @error('email') <span>{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="mobile_number">Mobile Number</label>
                            <input id="mobile" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" required>
                            @error('mobile') <span>{{ $message }}</span> @enderror
                        </div>
                        <!-- <div class="form-group">
                            <label>Gender</label>
                            <div>
                                <input type="radio" id="male" name="gender" value="Male" required>
                                <label for="male">Male</label>
                                <input type="radio" id="female" name="gender" value="Female" required>
                                <label for="female">Female</label>
                            </div>
                        </div> -->
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                            @error('password') <span>{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="password-confirm">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                        <div class="text-center">
                            By continuing, you agree to Xordox's <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection