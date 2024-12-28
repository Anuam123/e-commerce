@extends('admin.layouts.master')
@section('title', 'Admin Dashboard |Reviews')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <i class="material-icons right">add_circle_outline</i>
                <h5>&nbsp;&nbsp;&nbsp;Rewiew List </h5>
            </div>
            <hr>
            <br>
            <div class="pull-right">
                @can('slider-create')
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ route('product_review.create') }}"
                        class="waves-effect waves-light btn mb-1">
                        <i class="material-icons right">add_circle_outline</i> Create New Review</a>
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
                                        <th style="text-align: center;">Review Date</th>
                                        <th style="text-align: center;">User Name</th>
                                        <th style="text-align: center;">User Email</th>
                                        <th style="text-align: center;">Rating in Star</th>
                                        <th style="text-align: center;">Approval</th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    ?>
                                    @foreach ($reviews as $key => $review)
                                        <tr>
                                            <td style="text-align: center;">{{ ++$i }}</td>
                                            <td style="text-align: center;">{{ $review->created_at }}</td>
                                            <td style="text-align: center;">{{ $review->user_name }}</td>
                                            <td style="text-align: center;">{{ $review->user_email }}</td>
                                            <td style="text-align: center;"><span  class="badge badge pill purple float-right mr-10">{{ $review->select_rating }}</span></td>
                                            <td style="text-align: center;">Approval</td>
                                            <td style="text-align: center;">
                                                <a href="{{ route('product_review.edit', $review->id) }}"><i
                                                        style="font-size: 20px; color:darkgreen"
                                                        class="material-icons">border_color</i></a>

                                                <form method="POST"
                                                    action="{{ route('product_review.destroy', $review->id) }}"
                                                    style="display:inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button style="background: none; border: none;">
                                                        <a
                                                            onclick="return confirm('Are you sure? you want to Delete this data')">
                                                            <i style="font-size: 20px; color: brown;"
                                                                class="material-icons">delete</i>
                                                        </a>
                                                    </button>
                                                </form>
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
                    [1, 'desc']
                ]
            });
        });
    </script>

@endsection
