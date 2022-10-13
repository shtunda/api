@extends('layouts.app')
@section('content')
    <form  action="{{ route('store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="username">Enter Username</label>
            <input class="form-control w-25"  type="text" placeholder="username" name="username">
        </div>
        <div class="form-group">
            <label for="password">Enter Password</label>
            <input class="form-control w-25" type="password" placeholder="password" name="password">
        </div>
        <div class="form-group">
            <label for="position">Enter Position</label>
            <input class="form-control w-25" type="text" placeholder="position" name="position">
        </div>
        <div class="form-group">
            <label for="img">Upload Image</label>
            <input class="form-control w-25" type="file" name="img" placeholder="image">
        </div>
        <div class="form-group">
            <input  class="btn btn-primary" type="submit">
        </div>

    </form>
@endsection
