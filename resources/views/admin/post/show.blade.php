@extends('layouts.admin.master')
@section('title','Post details')
@section('content')
    <div class="row">
        <div class="col-12 col-md-10">
            <div class="col-12 grid-margin" id="doc-intro">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-4 mt-4">Title</h3>
                        <p class="card-subtitle">
                            News, <i>Published</i>
                            <br>
                            32 Jan, 2019
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur delectus dignissimos eaque est ex exercitationem ipsa ipsum iusto maiores mollitia nesciunt, nisi odio optio possimus quisquam quod recusandae velit!</p>
                        <div class="text-right">
                            <a href="{{ route('post.index') }}" class="btn btn-dark btn-sm">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection