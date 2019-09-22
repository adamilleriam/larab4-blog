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
                                <option value="sports">Sports</option>
                                <option value="news" selected>News</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" placeholder="Title" value="Title">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="content" class="form-control" id="content" rows="6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consequuntur distinctio dolor, earum ipsam iure molestias pariatur provident quis reprehenderit? Architecto illo incidunt nulla suscipit totam! Culpa magni non optio.</textarea>
                        </div>
                        <div class="form-group">
                            <label for="#">Status</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" checked class="form-check-input" name="status" id="published">
                                    Published
                                </label>
                            </div>
                            <div class="form-check">

                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="status" id="unpublished">
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