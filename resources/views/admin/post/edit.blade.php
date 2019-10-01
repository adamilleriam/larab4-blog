@extends('layouts.admin.master')
@section('title','Edit post')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit post</h4>
                    <form class="forms-sample" action="{{ route('post.update',1) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category_id" class="form-control" id="category">
                                @foreach($categories as $category)
                                    <option @if($category->id == $post->category_id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="author">Author</label>
                            <select name="author_id" class="form-control" id="author">
                                @foreach($authors as $author)
                                    <option @if($author->id == $post->author_id) selected @endif value="{{ $author->id }}">{{ $author->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input value="{{ $post->title }}" name="title" type="text" class="form-control" id="title" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="content" class="form-control" id="content" rows="6">{{ $post->content }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="#">Status</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input @if($post->status == 'published') checked @endif value="published" type="radio" class="form-check-input" name="status" id="published">
                                    Published
                                </label>
                            </div>
                            <div class="form-check">

                                <label class="form-check-label">
                                    <input @if($post->status == 'unpublished') checked @endif value="unpublished" type="radio" class="form-check-input" name="status" id="unpublished">
                                    Unpublished
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection