@extends('../layout')
@section('content')
<style type="text/css">
	ul.baivietlienquan li {
		font-size: 15px;
		text-transform: uppercase;
	}
ul.baivietlienquan li a {
	text-decoration: none;
	color: #000;
}
</style>
<div class="container">
	<div class="jumbotron">
	  <h1 class="display-4">{{$get_post->title_post}}</h1>
	  <p class="lead">{{$get_post->summary_post}}</p>
	  <hr class="my-4">
	  <p>{{$get_post->content_post}}</p>
	</div>

	<div class="jumbotron">
	  <h1 class="display-4">Có thể bạn quan tâm</h1>
	  <ul class="baivietlienquan">
	  	@foreach($relate as $key => $rep)
	  	<li><a href="{{url('bai-viet/'.$rep->id_post)}}">{{$rep->title_post}}</a></li>
	  	@endforeach
	  </ul>

	</div>
</div>
@endsection
