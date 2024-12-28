@extends('admin.layouts.master')
@section('title', 'Admin Dashboard | SubCategory')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5>Create New Sub Category</h5>
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

                {!! Form::open([
                    'route' => 'subcategory.store',
                    'method' => 'POST',
                    'id' => 'settings',
                    'enctype' => 'multipart/form-data',
                ]) !!}



                <input name="category_id" id="selected-id-input" value="" type="hidden">

                <div class="row">
                    <div class="input-field col m12 s12">
                        <div class="input-field">
                            <select class="select2-size-lg browser-default" id="large-select" name="category_name"
                                onchange="updateInputValue()">
                                <option selected disabled>-- Select Category --</option>
                                @foreach ($category as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="input-field col m12 s12">
                        <select id="linkTypeSelect" name="link_type">
                            <option value="subCategory">Sub Category Link</option>
                            <option value="customLink">Custom Link</option>
                        </select>
                        <label for="linkTypeSelect">Link Type</label>
                    </div>

                    <div class="input-field col m12 s12" id="customLinkInput" style="display: none;">
                        <input type="text" name="custom_link" placeholder="Enter custom link">
                        <label for="custom_link">Custom Link</label>
                    </div>

                    <div class="input-field col m6 s12">
                        <input id="first_name01" name="sub_category_name" type="text">
                        <label for="first_name01">Sub Category Name</label>
                    </div>
                    <div class="input-field col m6 s12">
                        <input id="first_name01" name="sort_order" type="number">
                        <label for="first_name01">Sort Order</label>
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
                <br><br>
                <div class="row">
                    <div class="input-field col m6 s12">
                        <input id="first_name01" name="meta_title" type="text">
                        <label for="first_name01">Meta Title</label>
                    </div>
                    <div class="input-field col m6 s12">
                        <input id="first_name01" name="meta_keyword" type="text">
                        <label for="first_name01">Meta Keyword</label>
                    </div>
                </div>
                <br><br>
                <!--Default version-->
                <div class="row section">
                    <div class="col s12 m4">
                        <p>Category Image</p>
                    </div>
                    <div class="col s12 m12 l12">
                        <input type="file" id="input-file-now" class="dropify" name="sub_category_image"
                            data-default-file="" />
                    </div>
                </div>
                <br><br>

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

    <script>
        function updateInputValue() {
            var selectElement = document.getElementById("large-select");
            var selectedValue = selectElement.value;
            document.getElementById("selected-id-input").value = selectedValue;
        }
    </script>

@endsection
