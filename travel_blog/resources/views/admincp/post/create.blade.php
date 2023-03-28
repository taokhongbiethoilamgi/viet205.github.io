@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Thêm bài viết</div>

				<div class="card-body">
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
					
					@if ($errors->any())
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
					@endif
					<form autocomplete="off" method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
						@csrf
					  <div class="form-group">
					    <label for="exampleInputEmail1">Tiêu đề bài viết</label>
					    <input type="text" class="form-control" name="title" placeholder="Tiêu đề...">
					     
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Hình ảnh</label>
					    <input type="file" class="form-control" name="image">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Tóm tắt</label>
					    <textarea type="form-control" id="ckeditor_tomtat" name="summary" placeholder="Tóm tắt..."></textarea>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Nội dung</label>
					    <textarea type="form-control" id="ckeditor_noidung" name="content" placeholder="Nội dung..."></textarea>
					  </div>
					  <div class="form-group">
							<label for="exampleFormControlSelect2">Danh mục</label>
							<select class="form-control" name="id_category">
								@foreach($category as $key => $cate)
								<option value="{{$cate->id_category}}">{{$cate->title}}</option>	
								@endforeach	
							</select>					  	
					  </div>
					 <div class="form-group">
					    <label for="exampleFormControlSelect2">Kích hoạt</label>
					    <select class="form-control" name="status">
					      <option value="1">Kích hoạt</option>
					      <option value="0">Không</option>
					    </select>
					  </div>
					  <button type="submit" class="btn btn-primary">Thêm danh mục</button>
					</form>
				</div>
			</div>
		</div>		
	</div>
</div>
@endsection