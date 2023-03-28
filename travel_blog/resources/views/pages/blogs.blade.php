@extends('../layout')
@section('content')
<div class="container">
@foreach($get_category as $key => $title)
	
@endforeach
<h3 class="tieudeindex">{{$title->category->title}}</h3>
@foreach($get_category as $key => $p)
<div class="row container-baiviet">
	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
		<img src="{{asset('public/uploads/'.$p->image_post)}}" width="100%">
	</div>
	<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
		<div class="box-baiviet">
			<h5 class="tieudebaiviet">{{$p->title_post}}</h5>
			<div class="tomtatbaiviet">
				{{$p->summary_post}}
			</div>
			<a href="{{url('bai-viet/'.$p->id_post)}}" class"btn-btn-primary">Xem bài viết</a>
			</div>
		</div>
	</div>
	@endforeach
</div>

@endsection