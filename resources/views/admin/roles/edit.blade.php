@extends('admin.layouts.master')
@section('content')

<style>
    .permission-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
        /* Use auto-fill to fill the available space */
        grid-gap: 10px;
    }

    .form-group.permission-grid label {
        display: flex;
        align-items: center;
    }
</style>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h4>Edit Role</h4>
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




{!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <br>
    <hr>
    <h5>Permissions:</h5>
    <hr>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group permission-grid">
            @foreach($permission as $value)
            <label>
                {{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                <span style="color:blue;">{{ $value->name }}</span>
            </label>
            @endforeach
        </div>
    </div>
    <hr>
    <div class="input-field col s12">
        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Update
            <i class="material-icons right">send</i>
        </button>
    </div>

</div>
<br>

{!! Form::close() !!}


@endsection