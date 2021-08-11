@extends('layout.master')

@section('title', 'Notifications')

@section('content')
<h5>Notifications</h5>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body m-sm-1 m-md-2">
                <button class="btn btn-danger btn-sm" type="button" name="button">Error</button>
                <button class="btn btn-success btn-sm" type="button" name="button">Success</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $(".btn-danger").click(function() {
            notyf.error("This is a error message.");
        });

        $(".btn-success").click(function() {
            notyf.success("This a success message.");
        });
    });
</script>
@endsection
