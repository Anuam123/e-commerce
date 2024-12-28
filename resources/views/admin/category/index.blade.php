@extends('admin.layouts.master')
@section('title', 'Admin Dashboard | Category')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <i class="material-icons right">add_circle_outline</i>
                <h5>&nbsp;&nbsp;&nbsp;All Category List</h5>
            </div>
            <hr>
            <br>
            <div class="pull-right">
                @can('category-create-btn')
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ route('category.create') }}"
                        class="waves-effect waves-light btn mb-1">
                        <i class="material-icons right">add_circle_outline</i> Create New Category</a>
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
                                        <th style="text-align: center;">Created Date</th>
                                        <th style="text-align: center;">Category Name</th>
                                        <th style="text-align: center;">Sort</th>
                                        <th style="text-align: center;">Status</th>
                                        <th style="text-align: center;">Show on Home</th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    ?>
                                    @foreach ($category as $key => $cat)
                                        <tr>
                                            <td style="text-align: center;">{{ ++$i }}</td>
                                            <td style="text-align: center;">{{ $cat->created_at }}</td>
                                            <td style="text-align: center;">{{ $cat->category_name }}</td>
                                            <td style="text-align: center;">{{ $cat->sort_order }}</td>

                                            @if ($cat->status == 'Hide')
                                                <td style="text-align: center;"><span class="badge red"
                                                        style="font-size: small">{{ $cat->status }}</span></td>
                                            @else
                                                <td style="text-align: center;"><span class="badge green"
                                                        style="font-size: small">{{ $cat->status }}</span></td>
                                            @endif

                                            @if ($cat->show_on_home == 'Yes')
                                                <td style="text-align: center;"><span class="badge green"
                                                        style="font-size: small">{{ $cat->show_on_home }}</span></td>
                                            @else
                                                <td style="text-align: center;"><span class="badge red"
                                                        style="font-size: small">{{ $cat->show_on_home }}</span></td>
                                            @endif


                                            <td style="text-align: center;">
                                                <div class="row">
                                                    <div class="col s12">
                                                        {{-- <a class="waves-effect modal-trigger mb-2 mr-1 quotation_view"
                                                            href="{{ route('roles.show', $cat->id) }}"><i
                                                                style="font-size: 20px; color:dodgerblue"
                                                                class="material-icons">visibility</i></a> --}}

                                                        @can('category-edit')
                                                            <a href="{{ route('category.edit', $cat->id) }}"><i
                                                                    style="font-size: 20px; color:darkgreen"
                                                                    class="material-icons">border_color</i></a>
                                                        @endcan

                                                        @can('category-delete')
                                                            <form method="POST"
                                                                action="{{ route('category.destroy', $cat->id) }}"
                                                                style="display:inline">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button style="background: none; border: none;">
                                                                    <a onclick="return confirm('Are you sure you want to delete this data?')">
                                                                        <i style="font-size: 20px; color: brown;" class="material-icons">delete</i>
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
                "order": [
                    [1, 'desc']
                ]
            });
        });
    </script>

@endsection
