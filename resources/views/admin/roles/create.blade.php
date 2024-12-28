@extends('admin.layouts.master')
@section('content')
    <style>
        .permission-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            grid-gap: 10px;
        }
    </style>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4>Create New Role</h4>
            </div>
            <hr>
            <br>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
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


    {!! Form::open(['route' => 'roles.store', 'method' => 'POST']) !!}
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Enter Role Name" class="form-control">
    </div>

    <br>
    <hr>
    <h5>Permissions:</h5>
    <hr>
    <div class="form-group permission-grid">

        @foreach ($permission as $value)
            <label>
                <input type="checkbox" name="permission[]" value="{{ $value->id }}" class="filled-in">
                <span style="color:blue;">{{ $value->name }}</span>
            </label>
        @endforeach
    </div>
    <hr>
    <div class="input-field col s12">
        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
        </button>
    </div>
    <br><br><br><br><br><br><br><br><br><br>
    {!! Form::close() !!}
@endsection
