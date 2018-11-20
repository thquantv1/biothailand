@extends('layout.index')
@section('style')
   <link rel="stylesheet" href="{{ asset('css/asc_static.css') }}">
@endsection
@section('content')
<div class="container mb-3" style="min-height: 65vh;">
	<div class="col-lg-12">
          <h2 class="my-4 text-capitalize">{{ $tieude }}</h2>
    </div>
        <hr class="mx-2">
	<div class="row ">
				@if($dstintuc->count() == 0)
					<div class="">Chưa có có tin tức.</div>
				@endif

        @foreach($dstintuc as $tt)
        <div class="row col-md-12">
	        <div class="col-md-5">
	          <a href="{{ route('tintuc',['id'=>$tt->id,'tieude'=>changeTitle($tt->title)]) }}">
	            <img class="img-fluid rounded mb-3 mb-md-0" src="@if($tt->picture==""){{'img/no_image.svg'}}@else{{'upload/news/'.$tt->picture}}@endif" alt="">
	          </a>
	        </div>
	        <div class="col-md-7">
	          <h3>{{$tt->title}}</h3>
	          <p>{{$tt->summary}}</p>
	          <a class="btn btn-primary" href="{{ route('tintuc',['id'=>$tt->id,'tieude'=>changeTitle($tt->title)]) }}">Tìm Hiểu Thêm</a>
	        </div>
      	</div>
        @endforeach
    </div>
		<div class="d-flex justify-content-center ">{{$dstintuc->links()}}</div>
	</div>
@endsection
@section('title')
   {{$cauhinh->get('title')->value}}
@endsection
