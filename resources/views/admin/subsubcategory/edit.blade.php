@extends('admin.layouts.master')
@section('title', 'Admin Dashboard | subSubCategory')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5>Edit / Update Sub Sub Category</h5>
            </div>
            <hr>
            <br>
        </div>
    </div>

    <div class="pull-right">
        &nbsp;&nbsp;&nbsp;&nbsp;<a value="Back" type="Button" href="{{ route('subsubcategory.index') }}"
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

                {!! Form::model($subsubcategory, [
                    'method' => 'PATCH',
                    'id' => 'quickForm',
                    'enctype' => 'multipart/form-data',
                    'route' => ['subsubcategory.update', $subsubcategory->id],
                ]) !!}



                <input name="sub_category_id" id="selected-id-input" value="{{ $subsubcategory->sub_category_id }}" type="hidden">

                <div class="row">
                    <div class="input-field col m12 s12">
                        <div class="input-field">
                            <select class="select2-size-lg browser-default" name="category_name" onchange="getComboA(this)">

                                {{-- <option selected disabled>{{ $subsubcategory->category_names }}</option> --}}

                                <option
                                    value="{{ App\Models\Category::where('id', '=', $subsubcategory->category_names)->pluck('id')->first() }}"
                                    selected>
                                    {{ App\Models\Category::where('id', '=', $subsubcategory->category_names)->pluck('category_name')->first() }}
                                </option>

                                @foreach ($category as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="input-field col m12 s12">
                        <div class="input-field">
                            <select class="select2-size-lg browser-default" name="sub_category_name" id="parent_category"
                                onchange="updateInputValue()">
                                {{-- <option selected >{{ $subsubcategory->sub_category_names }}</option> --}}

                                <option
                                    value="{{ App\Models\SubCategory::where('id', '=', $subsubcategory->sub_category_names)->pluck('id')->first() }}"
                                    selected>
                                    {{ App\Models\SubCategory::where('id', '=', $subsubcategory->sub_category_names)->pluck('sub_category_name')->first() }}
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="input-field col m12 s12">
                        <select id="linkTypeSelect" name="link_type">
                            <option value="subCategory">{{ $subsubcategory->link_type }}</option>
                            <option value="customLink">Custom Link</option>
                        </select>
                        <label for="linkTypeSelect">Link Type</label>
                    </div>

                    <div class="input-field col m12 s12" id="customLinkInput" style="display: none;">
                        <input type="text" name="custom_link" placeholder="Enter custom link"
                            value="{{ $subsubcategory->custom_link }}">
                        <label for="custom_link">Custom Link</label>
                    </div>

                    <div class="input-field col m6 s12">
                        <input id="first_name01" name="sub_sub_category_name" type="text"
                            value="{{ $subsubcategory->sub_sub_category_name }}">
                        <label for="first_name01">Sub Sub Category Name</label>
                    </div>
                    <div class="input-field col m6 s12">
                        <input id="first_name01" name="sort_order" type="number"
                            value="{{ $subsubcategory->sort_order }}">
                        <label for="first_name01">Sort
                            Order</label>
                    </div>
                </div>
                <br><br>
                <div class="row">

                    <div class="input-field col m12 s12">
                        <select name="status">
                            <option selected>{{ $subsubcategory->status }}</option>
                            <option value="show">Show</option>
                            <option value="hide">Hide</option>
                        </select>
                        <label for="first_name01">Status</label>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="input-field col m6 s12">
                        <input id="first_name01" name="meta_title" type="text"
                            value="{{ $subsubcategory->meta_title }}">
                        <label for="first_name01">Meta Title</label>
                    </div>
                    <div class="input-field col m6 s12">
                        <input id="first_name01" name="meta_keyword" type="text"
                            value="{{ $subsubcategory->meta_keyword }}">
                        <label for="first_name01">Meta Keyword</label>
                    </div>
                </div>
                <br><br>

                <!--Default version-->

                <center><img src="{{ asset('images/' . $subsubcategory->sub_sub_category_image) }}" alt="Image Description"
                        style="width:250px;"></center>

                <div class="row section">
                    <div class="col s12 m4">
                        <p>Category Image</p>
                    </div>
                    <div class="col s12 m12 l12">
                        <input type="file" id="input-file-now" class="dropify" name="sub_sub_category_image"
                            data-default-file="" />
                    </div>
                </div>
                <br><br>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="message5" class="materialize-textarea" name="description">{{ $subsubcategory->description }}</textarea>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
            var selectElement = document.getElementById("parent_category");
            var selectedValue = selectElement.value;
            document.getElementById("selected-id-input").value = selectedValue;
        }
    </script>

    <script>
        function getComboA(selectObject) {
            var id = selectObject.value;
            //console.log(id, 'ffff');
            $.ajax({
                url: '{{ route('subc') }}',
                method: 'POST',
                dataType: "json",
                data: {
                    "_token": "{{ csrf_token() }}",
                    id: id,
                },
                success: function(response) {
                    console.log('response', response);

                    let html = '';
                    html += '<option value="selected">' + '-- Select sub Category --' + '</option>';
                    $.each(response, function(i, v) {
                        html +=
                            '<option value="' + v.id +
                            '" {{ old('sub_category_name') == '+v.id+' ? 'selected' : '' }}>' +
                            v.sub_category_name + '</option>';
                    });
                    $("#parent_category").html(html);
                }
            })
        }
    </script>

@endsection
