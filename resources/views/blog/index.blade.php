@extends('blog.layouts.app')
@section('title', 'All Blog')
@section('content')
<div class="content-wrapper">
   <div class="page-header">
     <h3 class="page-title"> Blog Manage </h3>
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
         <div class="card-header">
            <div class="text-right">
               <a href="{{ route('blog.create') }}" class="btn btn-primary">Add New Blog</a>
            </div>
         </div>
         <div class="card-body">
           @include('blog.partials.messages')
           <h4 class="card-title">Blog List</h4>
           <table class="table table-bordered">
             <thead>
                <tr>
                 <th>Serial</th>
                 <th>Title</th>
                 <th>Image</th>
                 <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($blogs as $blog)
                <tr>
                   <td>{{$loop->index+1}}</td>
                   <td><a href="{{ route('blog.show',$blog->slug) }}">{{ $blog->title }}</a></td>
                   <td><img src="{{ url('featured/'.$blog->image) }}" alt="{{ $blog->image }}"></td>
                   <td>
                      <div class="">
                         <form  action="{{ route('blog.destroy',$blog->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('blog.edit',$blog->id) }}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                         </form>
                      </div>
                   </td>
                </tr>
                @endforeach
             </tbody>
           </table>
         </div>
         <br>
          <div class="d-flex float-right">
                {!! $blogs->links() !!}
          </div> 
       </div>
     </div>
   </div>
 </div>
 <!-- content-wrapper ends -->
@endsection