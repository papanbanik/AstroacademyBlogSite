@extends('admin.layouts.app')

@section('title')
Categories
@endsection
@php
    $page='posts'
@endphp

@section('mainpart')
<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h3 class="card-title">All posts</h3>
        <button class="btn-btn primary" data-toggle="modal" data-target="#AddpostModal">Add Posts</button>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="dataTable">
            <thead>
                <tr>
                    <th>name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $sl=>$post)
                <tr>
        <td>{{ ++$sl }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->description }}</td>
        <td>{{ $post->category_name }}</td>
        <td>
            <button><i class="fas fa-trash"></i></button>
            <button><i class="fas fa-trash"></i></button>
        </td>
    </tr>
@endforeach


            </tbody>
        </table>
    </div>
</div>

 <!-- pos add Modal-->
 <div class="modal fade" id="AddpostModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Add post</h5>
             <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">×</span>
             </button>
         </div>

         <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="post_name">Post Title</label>
                    <input type="text" class="form-control" name="title">
                   </div>

                   <div class="form-group">
                    <label for="post_name">Post Category</label>
                    <select name="category_id"> id="">
                        @foreach ($categories as $sl=>$category )
                          <option value="{{ $category->id }}"> {{ $category->name }} </option>
                        @endforeach
                    </select>
                       </div>


                       <div class="form-group">
                        <label for="post_name">Post Description</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>



                   <div class="form-group">
                    <label for="post_name">Post Thumbnail</label>
                    <input type="file" class="form-control"  name="thumbnail" >
                   </div>



         </div>
         <div class="modal-footer">
             <a class="btn btn-light" type="button" data-dismiss="modal">Cancel</a>
             <button class="btn btn-primary" type="submit">AddPost</button>
         </div>
        </form>

     </div>
 </div>
</div>


@endsection

