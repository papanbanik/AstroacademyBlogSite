@extends('admin.layouts.app')
@php
    $page = 'posts'
@endphp

@section('mainpart')
    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <div class="form-group">
                <label for="post_name">Post Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="post_name">Post Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5">{{ old('description') }}</textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="post_name">Post Thumbnail</label>
                <input type="file" class="form-control" name="thumbnail">
            </div>

            <div class="form-check">
                <label for="status" class="form-check-label">
                    <input type="checkbox" value="1" name="status" id="status"> Status
                </label>
            </div>

            <div class="form-group">
                <label for="post_name">Post Category</label>
                <select name="category_id" class="form-control">
                    <option value="">Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-light" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" type="submit" href="{{ route('post.index') }}">Add Post</button>
        </div>
    </form>


@endsection
