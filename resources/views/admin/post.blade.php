@extends('admin.layouts.app')

@php
    $page='posts'
@endphp
@section('mainpart')
<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h3 class="card-title" style="color: green">All Posts </h3>
        {{-- <button class="btn-btn primary" data-toggle="modal" data-target="#AddPostModal">Add Post</button> --}}
        <a class="btn-btn primary" href="{{ route('post.addpost') }}">Add Post</a>
    </div>

    <div class="card-body">
        <table class="table table-bordered" id="dataTable" style="color: black">
            <thead>
                <tr>
                    <th style="width: 100px;">Post ID</th>
                    <th style="text-align: center;"">Post Title</th>
                    <th style="text-align: center;">Post Description</th>
                    <th style="width: 150px;">Post Category</th>
                    <th>Thumbnail</th>
                    <th style="width: 150px; text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $key=>$post)
                <tr>
                     <td>{{ ++$key }}</td>
                     <td>{{ $post->title }}</td>
                     <td>{{ $post->description }}</td>
                     <td>{{ $post->category->name}}</td>
                     <td>
                        <img src="{{ asset('post_thumbnails/' . $post->thumbnail) }}" alt="Post Thumbnail" height="70px" width="80px">                     </td>
                <td>
            <button><i class="fas fa-trash"></i>Edit</button>
            <button><i class="fas fa-trash"></i>Delete</button>
             </td>
              </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</div>

  @endsection
