@extends('layout.index')
@section('style')
   <link rel="stylesheet" href="{{ asset('css/asc_static.css') }}">
@endsection
@section('content')
<div class="container" style="min-height: 65vh;">
	<div class="col-lg-12">
    <h2 class="my-4 text-capitalize">{{ $tieude }}</h2>
  </div>
  <hr class="mx-2">
	<div class="row ">
        @foreach ($dssanpham as $sp)
         <!--sản phẩm nè-->
        <a class="col-lg-4 col-sm-6 text-center mb-4" href="{{ route('sanpham',['id'=>$sp->id,'tieude'=>changeTitle($sp->ten)]) }}">

          <img class="rounded-item rounded-circle img-fluid d-block mx-auto" src="@if($sp->hinh==""){{'img/no_image.svg'}}@else{{'upload/sanpham/'.$sp->hinh}}@endif
          "  alt="">
          <h3>{{$sp->ten}}
            {{-- <small>Job Title</small> --}}
          </h3>
          <p>Giá:{{$sp->gia}}</p>

        </a>
        <!--hết phần của sản phẩm nè-->
        @endforeach
  </div>
  <div class="d-flex justify-content-center ">{{$dssanpham->links()}}</div>    
</div>
@endsection
@section('title')
   {{$cauhinh->get('title')->value}}
@endsection