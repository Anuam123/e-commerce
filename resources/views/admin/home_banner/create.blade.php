@extends('admin.layouts.master')
@section('title', 'Admin Dashboard | Home Banner')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5>Create New Banner</h5>
            </div>
            <hr>
            <br>
        </div>
    </div>

    <div class="pull-right">
        &nbsp;&nbsp;&nbsp;&nbsp;<a value="Back" type="Button" href="{{ route('home_banner.index') }}"
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
                    'route' => 'home_banner.store',
                    'method' => 'POST',
                    'id' => 'settings',
                    'enctype' => 'multipart/form-data',
                ]) !!}


                <div class="row section">
                    <div class="col s6">
                        <p>Banner Image one</p>
                    </div>
                    <div class="col s12 m12 l12">
                        <input type="file" id="input-file-now" class="dropify" name="banner_image_one"
                            data-default-file="" />
                    </div>
                </div>

                <div class="row section">
                    <div class="col s6">
                        <p>Banner Image Two</p>
                    </div>
                    <div class="col s12 m12 l12">
                        <input type="file" id="input-file-now" class="dropify" name="banner_image_two"
                            data-default-file="" />
                    </div>
                </div>

                <div class="row section">
                    <div class="col s6">
                        <p>Banner Image Three</p>
                    </div>
                    <div class="col s12 m12 l12">
                        <input type="file" id="input-file-now" class="dropify" name="banner_image_three"
                            data-default-file="" />
                    </div>
                </div>

                <div class="row section">
                    <div class="col s6">
                        <p>Banner Image Four</p>
                    </div>
                    <div class="col s12 m12 l12">
                        <input type="file" id="input-file-now" class="dropify" name="banner_image_four"
                            data-default-file="" />
                    </div>
                </div>

                <div class="row section">
                    <div class="col s6">
                        <p>Banner Image Five</p>
                    </div>
                    <div class="col s12 m12 l12">
                        <input type="file" id="input-file-now" class="dropify" name="banner_image_five"
                            data-default-file="" />
                    </div>
                </div>

                <div class="row section">
                    <div class="col s6">
                        <p>Banner Image six</p>
                    </div>
                    <div class="col s12 m12 l12">
                        <input type="file" id="input-file-now" class="dropify" name="banner_image_six"
                            data-default-file="" />
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
        <br><br><br><br><br><br>
    </div>


@endsection
