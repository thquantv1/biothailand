@extends('layout.index')
@section('style')
   <link rel="stylesheet" href="{{ asset('css/asc_static.css') }}">
@endsection
@section('content')
	<div class="container">
		<h2 class="display-4 text-capitalize">{{$sp->ten}}</h2>
		<hr class="mx-3">
		<div class="row">
			<div class="col-md-6 col-sm-12 ">
				<img class="item-pic img-thumbnail d-block mx-auto" src="@if($sp->hinh==""){{'img/no_image.svg'}}@else{{'upload/sanpham/'.$sp->hinh}}@endif
          " alt="">
			</div>
			<div class="col-md-6 col-sm-12 ">
				<div class="row">
					<p class="font-weight-bold">Qui Cách:&nbsp;</p> 
					<p>{{$sp->quycach}}</p>
				</div>
				<div class="row">
					<p class="font-weight-bold">Chất Lượng:&nbsp;</p> 
					<p>{{$sp->chatluong}}</p>
				</div>
				<div class="row">
					<p class="font-weight-bold">Công Dụng:&nbsp;</p> 
					<p>{{$sp->congdung}}</p>
				</div>
				<div class="row">
					<p class="font-weight-bold">Năng Lực Đáp Ứng:&nbsp;</p> 
					<p>{{$sp->nanglucdapung}}</p>
				</div>
			</div>
		</div>
		<hr class="mx-3">
		<div class="container-fluid">
			{!!$sp->mota!!}
		</div>
	</div>
@endsection
@section('title')
   {{$cauhinh->get('title')->value}}
@endsection