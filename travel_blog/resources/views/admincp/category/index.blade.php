@extends('layouts.app')

@section('content')
<div class="container">
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
				<div class="card-header">Liệt kê danh mục bài viết</div>
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
						      <th scope="col">Tình trạng</th>
						      <th scope="col">Quản lý</th>
						    </tr>
						  </thead>
						  <tbody>
						  	@foreach($category as $key => $cate)
						    <tr>
						      <th scope="row">{{$key}}</th>
						      <td>{{$cate->title}}</td>
						      <td>
						      	@if($cate->category_status==1)
						      		<p class="text text-success">Kích hoạt</p>
						      	@else
						      		<p class="text text-danger">Không kích hoạt</p>
						      	@endif
						      </td>
						      <td>
						      	<a class="btn btn-warning" href="{{route('category.show',[$cate->id_category])}}">Edit</a>
						      	<form action="{{route('category.destroy',[$cate->id_category])}}" method="POST">
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