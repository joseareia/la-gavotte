@extends('layout.master')

@section('title', 'Users')

@section('content')
<h5>Users</h5>
<div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-body m-sm-1 m-md-2">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">E-mail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <div class="card-body m-sm-1 m-md-2">
                <form class="" action="index.html" method="post">
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="inputName" class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="inputName">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="inputUsername" class="form-label">Username <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="inputUsername">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="inputEmail" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                    </div>
                    <div class="btn-group-form">
                            <button class="btn btn-reset" type="reset" name="button">Clear</button>
                            <button class="btn btn-primary" type="button" name="button">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('.table').DataTable({
            responsive: true
        });
    });
</script>
@endsection
