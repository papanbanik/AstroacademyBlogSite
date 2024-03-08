@extends('admin.layouts.app')
@php
    $page='comment'
@endphp
@section('mainpart')
<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h3 class="card-title" style="color: green">All Comment </h3>
        <a class ="nav-link" href="{{ route('comment.addcomment') }}">Ad comment</a>
    </div>
    <div class="body">
     <table  class="table table-bordered" style="color: black">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Comment</th>
            <td>Action</td>
            </tr>
            @foreach($comments as $row)
            <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->comment }}</td>
            <td>
                <a href="#">Edit</a>
                <a href="#">Delete</a>
            </td>
            </tr>
            @endforeach

    </table>
</div>
</div>


@endsection
