@extends('admin.layouts.master')
@section('title', 'Admin Dashboard | Category')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5>Edit / Update Category</h5>
            </div>
            <hr>
            <br>
        </div>
    </div>

    <div class="pull-right">
        &nbsp;&nbsp;&nbsp;&nbsp;<a value="Back" type="Button" href="{{ route('category.index') }}"
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



                {!! Form::model($category, [
                    'method' => 'PATCH',
                    'id' => 'quickForm',
                    'enctype' => 'multipart/form-data',
                    'route' => ['category.update', $category->id],
                ]) !!}








                <div class="row">
                    <div class="input-field col m6 s12">
                        <input id="first_name01" name="category_name" value="{{ $category->category_name }}" type="text">
                        <label for="first_name01">Category Name</label>
                    </div>
                    <div class="input-field col m6 s12">
                        <input id="first_name01" name="sort_order" type="number" value="{{ $category->sort_order }}">
                        <label for="first_name01">Sort Order</label>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="input-field col m6 s12">
                        <select name="show_on_home" value="{{ $category->show_on_home }}">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        <label for="first_name01">Show on Home Page</label>
                    </div>
                    <div class="input-field col m6 s12">
                        <select name="status" value="{{ $category->status }}">
                            <option value="show">Show</option>
                            <option value="hide">Hide</option>
                        </select>
                        <label for="first_name01">Status</label>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="input-field col m12 s12">
                        <input id="first_name01" name="meta_title" type="text" value="{{ $category->meta_title }}">
                        <label for="first_name01">Meta Title</label>
                    </div>
                    <div class="input-field col m12 s12">
                        <input id="first_name01" name="meta_keyword" type="text" value="{{ $category->meta_keyword }}">
                        <label for="first_name01">Meta Keyword</label>
                    </div>
                </div>
                <br><br>
                <!--Default version-->



                <center><img src="{{ asset('images/' . $category->category_image) }}" alt="Image Description"
                        style="width:250px;"></center>


                <div class="row section">
                    <div class="col s12 m4">
                        <p>Category Image</p>
                    </div>
                    <div class="col s12 m12 l12">
                        <input type="file" id="input-file-now" class="dropify" name="category_image"
                            data-default-file="" />
                    </div>
                </div>
                <br><br>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="message5" class="materialize-textarea" name="description">{{ $category->meta_keyword }}</textarea>
                        <label for="message">Meta Description</label>
                    </div>
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