@extends('admin.layouts.master')
@section('title', 'Admin Dashboard | Home Slider')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5>Create New Slider</h5>
            </div>
            <hr>
            <br>
        </div>
    </div>

    <div class="pull-right">
        &nbsp;&nbsp;&nbsp;&nbsp;<a value="Back" type="Button" href="{{ route('home_slider.index') }}"
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
                    'route' => 'home_slider.store',
                    'method' => 'POST',
                    'id' => 'settings',
                    'enctype' => 'multipart/form-data',
                ]) !!}

                <div class="row">
                    <div class="input-field col m12 s12">
                        <select name="type">
                            <option disabled selected>Select Type</option>
                            <option value="Slider">Slider</option>
                            <option value="Home Page Offers">Home Page Offers</option>
                        </select>
                        <label for="first_name01">Type</label>
                    </div>

                    <div class="input-field col m6 s12">
                        <input id="first_name01" name="banner_title" type="text">
                        <label for="first_name01">Banner Title</label>
                    </div>
                    <div class="input-field col m6 s12">
                        <input id="first_name01" name="sort_order" type="number">
                        <label for="first_name01">Sort Order</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col m12 s12">
                        <input id="first_name01" name="banner_link" type="text">
                        <label for="first_name01">Banner Link</label>
                    </div>
                </div>


                <div class="row section">
                    <div class="col s12">
                        <p>Banner Image</p>
                    </div>
                    <div class="col s12 m12 l12">
                        <input type="file" id="input-file-now" class="dropify" name="banner_images"
                            data-default-file="" />
                    </div>
                </div>


                <br><br>
                <div class="row">

                    <div class="input-field col m12 s12">
                        <select name="status">
                            <option value="show">Show</option>
                            <option value="hide">Hide</option>
                        </select>
                        <label for="first_name01">Status</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="message5" class="materialize-textarea" name="description"></textarea>
                        <label for="message">Meta Description</label>
                    </div>
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
        <br><br><br><br><br><br>
    </div>


@endsection
