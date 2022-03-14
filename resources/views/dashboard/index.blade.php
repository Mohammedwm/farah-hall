@extends('dashboard.layouts.master')

@section('content')
<p>
    <a href="">Change Password</a>
</p>

<form action="" method="post">
    @csrf
    @method('patch')
    <div class="row">
        <div class="col-6">
           44
        </div>
        <div class="col-6">
           4
        </div>
    </div>

</form>
@endsection
