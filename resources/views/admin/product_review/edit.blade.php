@extends('admin.layouts.master')
@section('title', 'Admin Dashboard |Reviews')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5>Edit / Update Review</h5>
            </div>
            <hr>
            <br>
        </div>
    </div>

    <div class="pull-right">
        &nbsp;&nbsp;&nbsp;&nbsp;<a value="Back" type="Button" href="{{ route('product_review.index') }}"
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

                {!! Form::model($reviews, [
                    'method' => 'PATCH',
                    'id' => 'quickForm',
                    'enctype' => 'multipart/form-data',
                    'route' => ['product_review.update', $reviews->id],
                ]) !!}

                <div class="row">
                    <div class="input-field col m6 s12">
                        <input id="first_name01" name="user_name" type="text" value="{{$reviews->user_name}}">
                        <label for="first_name01">User Name</label>
                    </div>

                    <div class="input-field col m6 s12">
                        <input id="first_name01" name="user_email" type="email" value="{{$reviews->user_email}}">
                        <label for="first_name01">User Email</label>
                    </div>
                    <div class="input-field col m6 s12">
                        <div class="input-field">
                            <select class="select2-size-lg browser-default" name="select_product"
                                onchange="updateInputValue()">
                                <option selected {{$reviews->select_product}}>{{$reviews->select_product}}</option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->product_name }}">{{ $product->product_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="input-field col m6 s12">
                        <div class="input-field">
                            <select class="select2-size-lg browser-default" name="select_rating"
                                onchange="updateInputValue()">
                                <option selected {{ $reviews->select_rating }}>{{ $reviews->select_rating }}</option>
                                <option value="1">1 Star</option>
                                <option value="2">2 Star</option>
                                <option value="3">3 Star</option>
                                <option value="4">4 Star</option>
                                <option value="5">5 Star</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="message5" class="materialize-textarea" name="comment">{{ $reviews->comment }}</textarea>
                        <label for="message">Comment</label>
                    </div>
                </div>


                <br><br>
                <div class="row">

                    <div class="input-field col m12 s12">
                        <select name="status">
                            <option value="{{ $reviews->status }}">{{ $reviews->status }}</option>
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
        <br><br><br><br><br><br>
    </div>
@endsection
