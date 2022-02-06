@extends('blog.layouts.app')
@section('title', 'Create New Blog')
@section('content')

<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Create Blog </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Blog</a></li>
          <li class="breadcrumb-item active" aria-current="page">Blog List</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Create Blog</h4>
            @include('blog.partials.messages')
            <form action="{{ route('blog.store') }}" method="post" enctype=multipart/form-data>
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-12 col-form-label">Title</label>
                      <div class="col-sm-12">
                        <input name="title" type="text" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-12 col-form-label">Slug</label>
                      <div class="col-sm-12">
                        <input name="slug" type="text" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-12 col-form-label">Excerpt</label>
                      <div class="col-sm-12">
                        <textarea name="excerpt" class="content" rows="3"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-12 col-form-label">Content</label>
                      <div class="col-sm-12">
                        <textarea name="content" class="content"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-12 col-form-label">Meta Title</label>
                      <div class="col-sm-12">
                        <input name="meta_title" type="text" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-12 col-form-label">Meta Description</label>
                      <div class="col-sm-12">
                        <input name="meta_descr" type="text" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-12 col-form-label">Meta Keywords</label>
                      <div class="col-sm-12">
                        <input name="meta_key" type="text" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-12 col-form-label">Category</label>
                      <div class="col-sm-12">
                        <input name="category" type="text" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-12 col-form-label">File</label>
                      <div class="col-sm-12">
                        <input name="image" type="file" class="form-control" />
                      </div>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary px-4 float-left">Submit</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection


