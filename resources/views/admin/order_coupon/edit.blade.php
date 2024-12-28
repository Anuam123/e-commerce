@extends('admin.layouts.master')
@section('title', 'Admin Dashboard | Add Coupon')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5>Edit Coupon</h5>
            </div>
            <hr>
            <br>
        </div>
    </div>

    <div class="pull-right">
        &nbsp;&nbsp;&nbsp;&nbsp;<a value="Back" type="Button" href="{{ route('order_coupon.index') }}"
            class="btn cyan waves-effect waves-light">Back <i class="material-icons right">arrow_back</i></a>
    </div>
    <br>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Something</strong> went wrong, Please try again!!<br><br>
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

                {!! Form::model($coupons, [
                    'method' => 'PATCH',
                    'id' => 'quickForm',
                    'enctype' => 'multipart/form-data',
                    'route' => ['order_coupon.update', $coupons->id],
                ]) !!}
                
                <div class="row">
                    <div class="input-field col m6 s12">
                        <select name="discount_type" id="discount_type" required>
                            <option disabled selected>Discount type</option>
                            <option value="percentage" {{ $coupons->discount_type == 'percentage' ? 'selected' : '' }}>
                                Percentage</option>
                            <option value="fixed" {{ $coupons->discount_type == 'fixed' ? 'selected' : '' }}>Fixed</option>
                        </select>
                        <label for="discount_type">Select Discount type <span style="color:red;">*</span></label>
                    </div>
                    <div class="input-field col m6 s12">
                        <input id="discount_value" name="discount_value" class="decimal_no" type="number" step="0.01"
                            value="{{ $coupons->discount_value }}" required>
                        <label for="discount_value">Discount Value <span style="color:red;">*</span></label>
                    </div>
                    <div class="input-field col m6 s12">
                        <input id="min_order_value" name="min_order_value" class="decimal_no" type="number" step="0.01"
                            value="{{ $coupons->min_order_value }}" required>
                        <label for="min_order_value">Minimum Order Value <span style="color:red;">*</span></label>
                    </div>
                    <div class="input-field col m6 s12">
                        <input id="max_discount" name="max_discount" class="decimal_no" type="number" step="0.01"
                            value="{{ $coupons->max_discount }}" required>
                        <label for="max_discount">Maximum Discount <span style="color:red;">*</span></label>
                    </div>
                    <div class="input-field col m6 s12">
                        <input id="start_date" name="start_date" type="date" value="{{ $coupons->start_date }}" required>
                        <label for="start_date">Start Date <span style="color:red;">*</span></label>
                    </div>
                    <div class="input-field col m6 s12">
                        <input id="end_date" name="end_date" type="date" value="{{ $coupons->end_date }}" required>
                        <label for="end_date">End Date <span style="color:red;">*</span></label>
                    </div>
                    <div class="input-field col m6 s12">
                        <input id="usage_limit" name="usage_limit" type="number" value="{{ $coupons->usage_limit }}">
                        <label for="usage_limit">Usage Limit</label>
                    </div>
                    <div class="input-field col m6 s12">
                        <input id="usage_count" name="usage_count" type="number" value="{{ $coupons->usage_count }}">
                        <label for="usage_count">Usage Count</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="message5" class="materialize-textarea" name="description">{{ $coupons->description}}</textarea>
                        <label for="message5">Description</label>
                    </div>
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
    <br><br><br><br><br><br>
    </div>
@endsection
