@extends('admin.layouts.master')
@section('title', 'Admin Dashboard |Product Attribute')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5>Edit / Update Attribute</h5>
            </div>
            <hr>
            <br>
        </div>
    </div>

    <div class="pull-right">
        &nbsp;&nbsp;&nbsp;&nbsp;<a value="Back" type="Button" href="{{ route('product_attribute.index') }}"
            class="btn cyan waves-effect waves-light">Back <i class="material-icons right">arrow_back</i></a>
    </div>
    <br>

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


    <!-- Form Advance -->
    <div class="col s12 m12 l12">
        <div id="Form-advance" class="card card card-default scrollspy">
            <div class="card-content">



                {!! Form::model($attribute, [
                    'method' => 'PATCH',
                    'id' => 'quickForm',
                    'enctype' => 'multipart/form-data',
                    'route' => ['product_attribute.update', $attribute->id],
                ]) !!}

                <div class="row">
                    <div class="input-field col m12 s12">
                        <select name="product_type">
                            <option value="{{$attribute->product_type}}" selected>{{$attribute->product_type}}</option>
                            <option value="Color">Color</option>
                            <option value="Type">Type</option>
                            <option value="Material">Material</option>
                            <option value="Occasion">Occasion</option>
                            <option value="Size">Size</option>
                        </select>
                        <label for="first_name01">Type</label>
                    </div>

                    <div class="input-field col m6 s12">
                        <input id="first_name01" name="names" type="text" value="{{$attribute->names}}">
                        <label for="first_name01">Name</label>
                    </div>
                    <div class="input-field col m6 s12">
                        <input id="first_name01" name="sort_order" type="number" value="{{$attribute->sort_order}}">
                        <label for="first_name01">Sort Order</label>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="input-field col m12 s12">
                        <select name="status" >
                            {{$attribute->sort_order}}
                            <option selected value="{{$attribute->status}}">{{$attribute->status}}</option>
                            <option value="show">Show</option>
                            <option value="hide">Hide</option>
                        </select>
                        <label for="first_name01">Status</label>
                    </div>
                </div>

                <div class="row">
                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Update
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br>
    </div>


@endsection
