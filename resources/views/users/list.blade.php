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
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="inputEmail" class="form-label form-label-sm">Name</label>
                        <input type="email" class="form-control form-control-sm" id="inputEmail" placeholder="Insert a name...">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="inputEmail" class="form-label form-label-sm">Username</label>
                        <input type="email" class="form-control form-control-sm" id="inputEmail">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="inputEmail" class="form-label form-label-sm">Email</label>
                        <input type="email" class="form-control form-control-sm" id="inputEmail">
                    </div>
                </div>
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
