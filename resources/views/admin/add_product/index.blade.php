@extends('admin.layouts.master')
@section('title', 'Admin Dashboard | Add Product')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <i class="material-icons right">add_circle_outline</i>
                <h5>&nbsp;&nbsp;&nbsp;All Product List </h5>
            </div>
            <hr>
            <br>
            <div class="pull-right">
                @can('role-create')
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ route('add_product.create') }}"
                        class="waves-effect waves-light btn mb-1">
                        <i class="material-icons right">add_circle_outline</i> Create New product</a>
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
                                        <th style="text-align: center;">Sku Code</th>
                                        <th style="text-align: center;">Add Date</th>
                                        <th style="text-align: center;">Name</th>
                                        <th style="text-align: center;">Image</th>
                                        {{-- <th style="text-align: center;">Reviews</th> --}}
                                        <th style="text-align: center;">Sort Order</th>
                                        <th style="text-align: center;">Status</th>
                                        <th style="text-align: center;">Out Of Stock</th>
                                        <th style="text-align: center;">Product Left Quantity</th>
                                        <th style="text-align: center;">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    ?>
                                    @foreach ($products as $key => $product)
                                        <tr>
                                            <td style="text-align: center;">{{ ++$i }}</td>
                                            <td style="text-align: center;">{{ $product->sku_code }}</td>
                                            <td style="text-align: center;">{{ $product->created_at }}</td>
                                            <td style="text-align: center;">{{ $product->product_name }}</td>
                                            <td style="text-align: center;"><img
                                                    src="{{ asset('product_image/' . $product->image) }}"
                                                    alt="No Image Found" style="width:50px;"></td>
                                            {{-- <td style="text-align: center;">{{ $product->Reviews }}</td> --}}
                                            <td style="text-align: center;">{{ $product->sort_order }}</td>

                                            @if ($product->product_status == 'Publish')
                                                <td style="text-align: center;"><span class="badge green"
                                                        style="font-size: small">Publish</span></td>
                                            @else
                                                <td style="text-align: center;"><span class="badge red"
                                                        style="font-size: small">Pending</span></td>
                                            @endif


                                            @if ($product->product_out_of_stock == 'No')
                                                <td style="text-align: center;"><span class="badge green"
                                                        style="font-size: small">Available</span></td>
                                            @elseif ($product->product_out_of_stock == 'Yes')
                                                <td style="text-align: center;"><span class="badge red"
                                                        style="font-size: small">Out Of Stock</span></td>
                                            @endif

                                            <td style="text-align: center;">{{ $product->product_left }}</td>

                                            <td style="text-align: center;">
                                                <div class="row">
                                                    <div class="col s12">
                                                        @can('role-edit')
                                                            <a href="{{ route('add_product.edit', $product->id) }}"><i
                                                                    style="font-size: 20px; color:darkgreen"
                                                                    class="material-icons">border_color</i></a>
                                                        @endcan

                                                        @can('role-delete')
                                                            <form method="POST"
                                                                action="{{ route('add_product.destroy', $product->id) }}"
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
                                                        @endcan
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
            });
        });
    </script>

@endsection
