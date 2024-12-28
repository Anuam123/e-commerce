@extends('admin.layouts.master')
@section('title', 'Admin Dashboard | Home Banner')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5>Edit / Update Banner</h5>
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

                {!! Form::model($banners, [
                    'method' => 'PATCH',
                    'id' => 'quickForm',
                    'enctype' => 'multipart/form-data',
                    'route' => ['home_banner.update', $banners->id],
                ]) !!}



                <div class="row">
                    <div class="col s6">
                        <div class="row section">
                            <div class="col s12">
                                <p>Banner Image One</p>
                            </div>
                            <div class="col s12 m12 l12">
                                <input type="file" id="input-file-now" class="dropify" name="banner_image_one"
                                    data-default-file="" />
                            </div>
                        </div>
                    </div>

                    <div class="col s6 mt-5">
                        <center><img src="{{ asset('images/' . $banners->banner_image_one) }}" alt="Image Description"
                                style="width:250px;"></center>
                    </div>

                </div>


                <div class="row">
                    <div class="col s6">
                        <div class="row section">
                            <div class="col s12">
                                <p>Banner Image Two</p>
                            </div>
                            <div class="col s12 m12 l12">
                                <input type="file" id="input-file-now" class="dropify" name="banner_image_two"
                                    data-default-file="" />
                            </div>
                        </div>
                    </div>

                    <div class="col s6 mt-5">
                        <center><img src="{{ asset('images/' . $banners->banner_image_two) }}" alt="Image Description"
                                style="width:250px;"></center>
                    </div>

                </div>

                <div class="row">
                    <div class="col s6">
                        <div class="row section">
                            <div class="col s12">
                                <p>Banner Image Three</p>
                            </div>
                            <div class="col s12 m12 l12">
                                <input type="file" id="input-file-now" class="dropify" name="banner_image_three"
                                    data-default-file="" />
                            </div>
                        </div>
                    </div>

                    <div class="col s6 mt-5">
                        <center><img src="{{ asset('images/' . $banners->banner_image_three) }}" alt="Image Description"
                                style="width:250px;"></center>
                    </div>

                </div>

                <div class="row">
                    <div class="col s6">
                        <div class="row section">
                            <div class="col s12">
                                <p>Banner Image Four</p>
                            </div>
                            <div class="col s12 m12 l12">
                                <input type="file" id="input-file-now" class="dropify" name="banner_image_four"
                                    data-default-file="" />
                            </div>
                        </div>
                    </div>

                    <div class="col s6 mt-5">
                        <center><img src="{{ asset('images/' . $banners->banner_image_four) }}" alt="Image Description"
                                style="width:250px;"></center>
                    </div>

                </div>

                <div class="row">
                    <div class="col s6">
                        <div class="row section">
                            <div class="col s12">
                                <p>Banner Image five</p>
                            </div>
                            <div class="col s12 m12 l12">
                                <input type="file" id="input-file-now" class="dropify" name="banner_image_five"
                                    data-default-file="" />
                            </div>
                        </div>
                    </div>

                    <div class="col s6 mt-5">
                        <center><img src="{{ asset('images/' . $banners->banner_image_five) }}" alt="Image Description"
                                style="width:250px;"></center>
                    </div>

                </div>

                <div class="row">
                    <div class="col s6">
                        <div class="row section">
                            <div class="col s12">
                                <p>Banner Image six</p>
                            </div>
                            <div class="col s12 m12 l12">
                                <input type="file" id="input-file-now" class="dropify" name="banner_image_six"
                                    data-default-file="" />
                            </div>
                        </div>
                    </div>

                    <div class="col s6 mt-5">
                        <center><img src="{{ asset('images/' . $banners->banner_image_six) }}" alt="Image Description"
                                style="width:250px;"></center>
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
        <br><br><br><br><br><br>
    </div>


@endsection
