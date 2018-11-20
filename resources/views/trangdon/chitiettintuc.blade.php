@extends('layout.index')

@section('style')
   <link rel="stylesheet" href="{{ asset('css/asc_static.css') }}">
@endsection

@section('content')	
	<div class="container" style="min-height: 65vh;">
		<h2 class="display-4 text-capitalize font-weight-bold">{{$tt->title}}</h2>
		<p class="text-mute">Ngày đăng: {{$tt->created_at}}</p>
		<hr class="mx-3">
		<div class="row">
			<div class="col-md-6 col-sm-12 ">
				<img class="rounded img-fluid d-block mx-auto" src="@if($tt->picture==""){{'img/no_image.svg'}}@else{{'upload/news/'.$tt->picture}}@endif" alt="">
			</div>
			<div class="col-md-6 col-sm-12 font-weight-bold">
				{{$tt->summary}}
			</div>
		</div>
		<hr class="mx-3">
		<div class="container-fluid px-3">
			{!!$tt->content!!}
		</div>
	</div>
@endsection

@section('title')
   {{$cauhinh->get('title')->value}}
@endsection
