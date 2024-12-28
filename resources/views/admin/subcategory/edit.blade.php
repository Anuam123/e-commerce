@extends('admin.layouts.master')
@section('title', 'Admin Dashboard | SubCategory')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5>Edit / Update Sub Category</h5>
            </div>
            <hr>
            <br>
        </div>
    </div>

    <div class="pull-right">
        &nbsp;&nbsp;&nbsp;&nbsp;<a value="Back" type="Button" href="{{ route('subcategory.index') }}"
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




                {!! Form::model($subcategory, [
                    'method' => 'PATCH',
                    'id' => 'quickForm',
                    'enctype' => 'multipart/form-data',
                    'route' => ['subcategory.update', $subcategory->id],
                ]) !!}

                <input name="category_id" id="selected-id-input" value="{{$subcategory->category_id}}" type="hidden">

                <div class="row">
                    <div class="input-field col m12 s12">
                        <div class="input-field">
                            <select class="select2-size-lg browser-default" name="category_name">

                                <option
                                    value="{{ App\Models\Category::where('id', '=', $subcategory->category_id)->pluck('id')->first() }}"
                                    selected>
                                    {{ App\Models\Category::where('id', '=', $subcategory->category_names)->pluck('category_name')->first() }}
                                </option>

                                @foreach ($category as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                                @endforeach
                            </select>
                            <label for="linkTypeSelect">Category Name</label>
                        </div>
                    </div>

                    <div class="input-field col m12 s12">
                        <select id="linkTypeSelect" name="link_type" value="{{ $subcategory->link_type }}">
                            <option value="subCategory">Sub Category Link</option>
                            <option value="customLink">Custom Link</option>
                        </select>
                        <label for="linkTypeSelect">Link Type</label>
                    </div>

                    <div class="input-field col m12 s12" id="customLinkInput" style="display: none;">
                        <input type="text" name="custom_link" placeholder="Enter custom link"
                            value="{{ $subcategory->custom_link }}">
                        <label for="custom_link">Custom Link</label>
                    </div>

                    <div class="input-field col m6 s12">
                        <input id="first_name01" name="sub_category_name" type="text"
                            value="{{ $subcategory->sub_category_name }}">
                        <label for="first_name01">Sub Category Name</label>
                    </div>
                    <div class="input-field col m6 s12">
                        <input id="first_name01" name="sort_order" type="number" value="{{ $subcategory->sort_order }}">
                        <label for="first_name01">Sort Order</label>
                    </div>
                </div>
                <br><br>
                <div class="row">

                    <div class="input-field col m12 s12">
                        <select name="status">
                            <option selected value="{{ $subcategory->status }}">{{ $subcategory->status }}</option>
                            <option value="show">Show</option>
                            <option value="hide">Hide</option>
                        </select>
                        <label for="first_name01">Status</label>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="input-field col m6 s12">
                        <input id="first_name01" name="meta_title" type="text" value="{{ $subcategory->meta_title }}">
                        <label for="first_name01">Meta Title</label>
                    </div>
                    <div class="input-field col m6 s12">
                        <input id="first_name01" name="meta_keyword" type="text"
                            value="{{ $subcategory->meta_keyword }}">
                        <label for="first_name01">Meta Keyword</label>
                    </div>
                </div>
                <br><br>

                <center><img src="{{ asset('images/' . $subcategory->sub_category_image) }}" alt="Image Description"
                        style="width:250px;"></center>

                <!--Default version-->
                <div class="row section">
                    <div class="col s12 m4">
                        <p>sub_Category Image</p>
                    </div>
                    <div class="col s12 m12 l12">
                        <input type="file" id="input-file-now" class="dropify" name="sub_category_image"
                            data-default-file="" />
                    </div>
                </div>
                <br><br>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="message5" class="materialize-textarea" name="description">{{ $subcategory->description }}</textarea>
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



    <script>
        const linkTypeSelect = document.getElementById('linkTypeSelect');
        const customLinkInput = document.getElementById('customLinkInput');

        linkTypeSelect.addEventListener('change', function() {
            if (this.value === 'customLink') {
                customLinkInput.style.display = 'block';
            } else {
                customLinkInput.style.display = 'none';
            }
        });
    </script>




@endsection
