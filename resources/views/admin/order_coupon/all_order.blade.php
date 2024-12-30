
@extends('admin.layouts.master')
@section('title', 'Admin Dashboard | All Order List')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <i class="material-icons right">add_circle_outline</i>
                <h5>&nbsp;&nbsp;&nbsp;All Order List </h5>
            </div>
            <hr>
            <br>
            
        </div>
    </div>
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
                                        <th style="text-align: center;">Order No.</th>
                                        <th style="text-align: center;">Total amount</th>
                                        <th style="text-align: center;">Shipping address</th>
                                        <th style="text-align: center;">Billing address</th>
                                        <th style="text-align: center;">Shipped at</th>
                                        <th style="text-align: center;">Canceled at</th>
                                        <th style="text-align: center;">Payment method</th>
                                        <th style="text-align: center;">Payment status</th>
                                        <th style="text-align: center;">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    ?>
                                    @foreach ($orders as $key => $order)
                                        <tr>
                                            <td style="text-align: center;">{{ ++$i }}</td>
                                            <td style="text-align: center;">{{ $order->order_number }}</td>
                                            <td style="text-align: center;">{{ $order->total_amount }}</td>
                                            <td style="text-align: center;">{{ $order->shipping_address }}</td>
                                            <td style="text-align: center;">{{ $order->shipped_at }}</td>
                                            <td style="text-align: center;">{{ $order->canceled_at }}</td>
                                            <td style="text-align: center;">{{ $order->billing_address }}</td>
                                            <td style="text-align: center;">{{ $order->payment_method }}</td>
                                            <td style="text-align: center;">
                                                <span class="badge 
                                                    @if ($order->payment_status == 'pending') badge-warning 
                                                    @elseif ($order->payment_status == 'refunded') badge-secondary 
                                                    @elseif ($order->payment_status == 'paid') badge-success 
                                                    @else badge-danger 
                                                    @endif">
                                                    {{ ucfirst($order->payment_status) }}
                                                </span>
                                            </td>
                                            <td style="text-align: center;">
                                                <span class="badge 
                                                    @if ($order->status == 'pending') badge-warning 
                                                    @elseif ($order->status == 'processing') badge-info 
                                                    @elseif ($order->status == 'completed') badge-success 
                                                    @elseif ($order->status == 'canceled') badge-secondary 
                                                    @else badge-danger 
                                                    @endif">
                                                    {{ ucfirst($order->status) }}
                                                </span>
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
