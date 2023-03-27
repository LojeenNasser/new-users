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
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- END CONTENT BODY -->
</div>

@endsection
