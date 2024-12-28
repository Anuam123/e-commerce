@extends('admin.layouts.master')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4>Create New User</h4>
            </div>
            <hr>
            <br>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
            <br>
        </div>
    </div>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <!-- Form with icon prefixes -->
    <div class="col s12 m6 l2">
    </div>
    <div class="col s12 m6 l8">
        <div id="prefixes" class="card card card-default scrollspy">
            <div class="card-content">
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="is_admin" value="1">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input type="text" name="name" placeholder="Name">
                            <label for="name3">Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">email</i>
                            <input type="text" name="email" placeholder="Email">
                            <label for="email3">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock_outline</i>
                            <input type="password" name="password" placeholder="Password">
                            <label for="password3">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock_outline</i>
                            <input type="password" name="confirm-password" placeholder="Confirm Password">
                            <label for="password3">Confirm Password</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">face</i>
                            <label for="message3">Role</label>
                        </div>
                        <br><br>
                        <select name="roles[]" multiple>
                            @foreach ($roles as $role)
                                <option value="{{ $role }}">{{ $role }}</option>
                            @endforeach
                        </select>
                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br><br><br><br><br><br>
    </div>
    <div class="col s12 m6 l2">
    </div>

    <!-- Form with validation -->


@endsection
