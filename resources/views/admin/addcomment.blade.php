@extends('admin.layouts.app')
@php
    $page = 'Addcomment'
@endphp

@section('mainpart')
    <form method="POST" action="{{ route('comment.insertdata') }}" style="padding-left: 10ch" >
        @csrf <!-- CSRF protection -->

    <input type="text" name="name" placeholder="name" >
    <br>
    <br>
    <input type="text" name="comment" placeholder="comment">
<br><br>
    <input type="submit" name="submit" value="submit">

    </form>
@endsection
