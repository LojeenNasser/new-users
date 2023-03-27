@extends('layouts.user_type.auth')
@section('content')


<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <div class="bg-light p-4 rounded">
            <h1>Users</h1>
            <div class="lead">
                Manage your users here.
                <a href="{{ route('dashboard.users.create') }}"
                    class="btn btn-primary btn-sm float-right">Add new user</a>
            </div>

            <div class="mt-2">
            </div>

            <table class="table table-striped datatable">
                <thead>
                    <tr>
                        <th scope="col"
                            width="1%">#</th>
                        <th scope="col"
                            width="15%">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col"
                            width="10%">action</th>
                        <th scope="col"
                            width="1%"
                            colspan="3"></th>
                    </tr>
                </thead>

            </table>


        </div>
        <div class="clearfix"></div>
    </div>
    <!-- END CONTENT BODY -->
</div>

@endsection
@push('js')

<script type="text/javascript">
    $(function () {
    var table = $('.datatable').DataTable({
         processing: true,
        serverSide: true,
        responsive: true,
        ajax: "{{ route('dashboard.users.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
  });
</script>
@endpush
