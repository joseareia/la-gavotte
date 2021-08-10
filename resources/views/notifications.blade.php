@extends('layout.master')

@section('title', 'Notifications')

@section('content')
<h5>Notifications</h5>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body m-sm-1 m-md-2">
                <button class="btn btn-danger" type="button" name="button">Don't click.</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $("button").click(function() {
            notyf.error("I said, DON'T CLICK!");
        });
        notyf.success("Hello! Good message.");
    });
</script>
@endsection
