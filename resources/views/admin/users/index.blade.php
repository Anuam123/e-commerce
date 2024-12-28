@extends('admin.layouts.master')
@section('content')


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4>Users Management</h4>
            </div>
            <hr>
            <br>
            <div class="pull-right">
                @can('create-user-btn')
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ route('users.create') }}" class="waves-effect waves-light btn mb-1">
                        <i class="material-icons right">add_circle_outline</i> Create New User</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
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
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Roles</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $user)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if (!empty($user->getRoleNames()))
                                                    @foreach ($user->getRoleNames() as $v)
                                                        <label class="bg-success text-white">{{ $v }}</label>
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col s12">
                                                        @can('user-view')
                                                            <a class="waves-effect modal-trigger mb-2 mr-1 quotation_view"
                                                                href="{{ route('users.show', $user->id) }}"><i
                                                                    style="font-size: 20px; color:dodgerblue"
                                                                    class="material-icons">visibility</i></a>
                                                        @endcan

                                                        @can('user-edit')
                                                            <a href="{{ route('users.edit', $user->id) }}"><i
                                                                    style="font-size: 20px; color:darkgreen"
                                                                    class="material-icons">border_color</i></a>
                                                        @endcan

                                                        @can('user-delete')
                                                            <form method="POST"
                                                                action="{{ route('users.destroy', $user->id) }}"
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
                                                        @endcan
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $data->render() !!}
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

            t.on('order.dt search.dt', function() {
                var rows = t.rows().count();
                t.column(0, {
                    search: 'applied',
                    order: 'applied'
                }).nodes().each(function(cell, i) {
                    cell.innerHTML = rows--;
                });
            }).draw();
        });
    </script>

@endsection
