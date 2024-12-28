@extends('admin.layouts.master')
@section('content')

<style>
    .permission-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        grid-gap: 10px;
    }
    .label.label-success {
        display: inline-block;
        padding: 5px 10px;
        background-color: #5cb85c;
        color: white;
        font-size: large;
        border-radius: 5px;
        margin-right: 10px;
    }
</style>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h4> Show Role</h4>
        </div>
        <hr>
        <br>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
        </div>
    </div>
</div>
<br>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <h5 style="color:blue;">Name:
                {{ $role->name }}
            </h5>
        </div>
        <hr>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group permission-grid">
            <strong style="color: black; font-size: large;"><u>Permissions:</u></strong>
            @if(!empty($rolePermissions))
            @foreach($rolePermissions as $v)
            <label class="label label-success">{{ $v->name }}</label>
            @endforeach
            @endif
        </div>
    </div>
</div>
@endsection