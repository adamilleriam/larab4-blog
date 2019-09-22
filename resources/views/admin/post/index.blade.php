@extends('layouts.admin.master')
@section('title','List of post')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Posts</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                                Serial
                            </th>
                            <th>
                                Title
                            </th>
                            <th>
                                Category
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                Title
                            </td>
                            <td>
                                Sports
                            </td>
                            <td>
                                Published
                            </td>
                            <td>
                                <a class="btn btn-info btn-sm" href="{{ route('post.show',1) }}">Details</a>
                                <a class="btn btn-primary btn-sm" href="{{ route('post.edit',1) }}">Edit</a>
                                <form class="d-inline-block" action="{{ route('post.destroy',1) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you confirm ?')">Destroy</button>
                                </form>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection