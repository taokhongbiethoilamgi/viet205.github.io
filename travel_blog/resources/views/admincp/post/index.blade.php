@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
					@if(Session::has('success'))
						<div class="alert alert-success">
							{{ Session::get('success')}}
							@php
								Session::forget('success');
							@endphp						
						</div>
					@endif
					@if(Session::has('fail'))
						<div class="alert alert-danger">
							{{ Session::get('fail')}}
							@php
								Session::forget('fail');
							@endphp						
						</div>
					@endif
				<div class="card-header">Liệt kê bài viết</div>
				<div class="card-body">
					@if (session('status'))
						<div class="alert alert-success" role="alert">
							{{session('status') }}	
						</div>
					@endif
					<table class="table table-striped">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Tên danh mục</th>
						      <th scope="col">Hình ảnh</th>
						      <th scope="col">Danh mục bài viết</th>
						      <th scope="col">Tóm tắt</th>
						      <th scope="col">Tình trạng</th>
						      <th scope="col">Quản lý</th>
						    </tr>
						  </thead>
						  <tbody>
						  	@foreach($post as $key => $value)
						    <tr>
						      <th scope="row">{{$key}}</th>
						      <td>{{$value->title_post}}</td>
						      <td><img src="{{asset('public/uploads/'.$value->image_post)}}" width="250px"></td>
						      <td>{{$value->category->title}}</td>
						      <td>{{$value->summary_post}}</td>
						      <td>
						      	@if($value->status_post==1)
						      		<p class="text text-success">Kích hoạt</p>
						      	@else
						      		<p class="text text-danger">Không kích hoạt</p>
						      	@endif
						      </td>
						      <td>
						      	<a class="btn btn-warning" href="{{route('post.show',[$value->id_post])}}">Edit</a>
						      	<form action="{{route('post.destroy',[$value->id_post])}}" method="POST">
									@method('DELETE')	
									@csrf
									<input class="btn btn-danger" type="submit" value="Delete" />	    
						      	</form>
						      	</td>
						    </tr>
						    @endforeach
						  </tbody>
						</table>
				</div>
			</div>
		</div>		
	</div>
</div>
@endsection