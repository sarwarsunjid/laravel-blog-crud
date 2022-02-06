@extends('blog.layouts.app')
@section('title', $blog->title)
@section('title', $blog->meta_title)
@section('description', $blog->meta_descr)
@section('keywords', $blog->meta_key)
@section('content')
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title"> Show Blog </h3>
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
            <h4 class="card-title">{{$blog->title}}</h4>
            <br>
            <div class="col-lg-8">
                <img width="100%" src="{{ url('featured/'.$blog->image) }}" alt="{{ $blog->image }}">
                <p>{!!$blog->content!!}</p>
                <p><b>Category:</b> {{$blog->category}}</p>
            </div>  
          </div>
        </div>
      </div>
    </div>
</div>   
@endsection

