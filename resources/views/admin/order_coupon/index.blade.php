
@extends('admin.layouts.master')
@section('title', 'Admin Dashboard | Order & Coupons')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <i class="material-icons right">add_circle_outline</i>
                <h5>&nbsp;&nbsp;&nbsp;All Coupon List </h5>
            </div>
            <hr>
            <br>
            <div class="pull-right">
                @can('slider-create')
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ route('order_coupon.create') }}"
                        class="waves-effect waves-light btn mb-1">
                        <i class="material-icons right">add_circle_outline</i> Create New Coupon</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="card-alert card gradient-45deg-green-teal">
            <div class="card-content white-text">
                <p>
                    <i class="material-icons">check</i> SUCCESS: {{ $message }}
                </p>
            </div>
            <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif

    @if ($message = Session::get('danger'))
        <div class="card-alert card red">
            <div class="card-content white-text">
                <p>
                    <i class="material-icons">check</i> Error: {{ $message }}
                </p>
            </div>
            <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif

    <!-- Page Length Options -->
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="col s12">
                            <table id="tableID" class="display">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">SN</th>
                                        <th style="text-align: center;">Discount Type</th>
                                        <th style="text-align: center;">Discount Value</th>
                                        <th style="text-align: center;">Min Order Value</th>
                                        <th style="text-align: center;">Max Discount</th>
                                        <th style="text-align: center;">Start Date</th>
                                        <th style="text-align: center;">End Date</th>
                                        <th style="text-align: center;">Status</th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    ?>
                                    @foreach ($coupons as $key => $coupon)
                                        <tr>
                                            <td style="text-align: center;">{{ ++$i }}</td>
                                            <td style="text-align: center;">{{ $coupon->discount_type }}</td>
                                            <td style="text-align: center;">{{ $coupon->discount_value }}</td>
                                            <td style="text-align: center;">{{ $coupon->min_order_value }}</td>
                                            <td style="text-align: center;">{{ $coupon->max_discount }}</td>
                                            <td style="text-align: center;">{{ $coupon->start_date }}</td>
                                            <td style="text-align: center;">{{ $coupon->end_date }}</td>

                                            @if ($coupon->status == 'inactive')
                                                <td style="text-align: center;"><span class="badge red"
                                                        style="font-size: small">{{ $coupon->status }}</span></td>
                                            @else
                                                <td style="text-align: center;"><span class="badge green"
                                                        style="font-size: small">{{ $coupon->status }}</span></td>
                                            @endif

                                            <td style="text-align: center;">
                                                <div class="row">
                                                    <div class="col s12">
                                                      
                                                       
                                                            <a href="{{ route('order_coupon.edit', $coupon->id) }}"><i
                                                                    style="font-size: 20px; color:darkgreen"
                                                                    class="material-icons">border_color</i></a>
                                                      

                                                      
                                                            <form method="POST"
                                                                action="{{ route('order_coupon.destroy', $coupon->id) }}"
                                                                style="display:inline">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button style="background: none; border: none;">
                                                                    <a
                                                                        onclick="return confirm('Are you sure you want to delete this data?')">
                                                                        <i style="font-size: 20px; color: brown;"
                                                                            class="material-icons">delete</i>
                                                                    </a>
                                                                </button>
                                                            </form>
                                                       
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Scroll - vertical, dynamic height -->

    <script>
        $(document).ready(function() {
            var t = $('#tableID').DataTable({
                "columnDefs": [{
                    "searchable": false,
                    "orderable": false,
                    "targets": 0
                }],
                "order": [
                   // [1, 'ASC']
                ]
            });
        });
    </script>

@endsection
