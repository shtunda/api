@extends('layouts.app')
@section('content')
    <table class="table table-hover">
        <thead>
        <tr>
        <th>Username</th>
        <th>Position</th>
        </tr>
        </thead>
        <tbod>
            @foreach($all as $user)
                <tr>
                <td>{{ $user->username }}</td>
                <td>{{ $user->position }}</td>
                </tr>
            @endforeach
        </tbod>
    </table>
    {{ $all->links() }}
{{--    <a wire:click="load" class="btn btn-primary">Show More</a>--}}


@endsection
