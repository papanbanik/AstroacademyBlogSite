@extends('admin.layouts.app')

@section('title')
@endsection
@php
    $page='Categories'
@endphp

@section('mainpart')
<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h3 class="card-title" style="color: black">All Categories</h3>
        <button class="btn-btn primary" data-toggle="modal" data-target="#AddCategoryModal">Add Category</button>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="dataTable"  style="color: black">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($categories as $sl=>$category )
               <tr>
               <td>{{ ++$sl }}</td>
               <td>{{ $category->name }}</td>
               <td>{{$category->description}}</td>
               <td>
                <button><i class="fas fa-edit">  </i></button>
                <button><i class="fas fa-trash"> </i></button>
                </td>
               </tr>
               @endforeach
            </tbody>
        </table>
    </div>
</div>

 <!-- Category add Modal-->
 <div class="modal fade" id="AddCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
             <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">×</span>
             </button>
         </div>

         <form action="{{ route('category.store') }}" method="POST">
            @csrf
         <div class="modal-body">
                <div class="form-group"  style="color: black">
                    <label for="category_name">Category_Name</label>
                    <input type="text" class="form-control" name="name"  style="color: black">
                   </div>
                   <div class="form-group"  style="color: black">
                    <label for="category_name">Category Description</label>
                    <textarea  class="form-control"  style="color: black" name="description" rows="3"></textarea>
                   </div>
         </div>
         <div class="modal-footer">
             <a class="btn btn-light" type="button" data-dismiss="modal">Cancel</a>
             <button class="btn btn-primary" type="submit">AddCategory</button>
         </div>
        </form>
     </div>
 </div>
</div>


@endsection

