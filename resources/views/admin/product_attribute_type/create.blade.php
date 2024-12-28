@extends('admin.layouts.master')
@section('title', 'Admin Dashboard |Product Attribute')
@section('content')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5>Create New Product Attribute Type</h5>
            </div>
            <hr>
            <br>
        </div>
    </div>

    <div class="pull-right">
        &nbsp;&nbsp;&nbsp;&nbsp;<a value="Back" type="Button" href="{{ route('product_attribute_type.index') }}"
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

                {!! Form::open([
                    'route' => 'product_attribute_type.store',
                    'method' => 'POST',
                    'id' => 'settings',
                    'enctype' => 'multipart/form-data',
                ]) !!}

                <div class="row">
                    <div class="input-field col m6 s6">
                        <input id="first_name01" name="product_attribute_type" type="text">
                        <label for="first_name01">Product Attribute Type</label>
                    </div>

                    <div class="row">
                        <div class="input-field col m6 s6">
                            <select name="status">
                                <option value="show">Show</option>
                                <option value="hide">Hide</option>
                            </select>
                            <label for="first_name01">Status</label>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
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
