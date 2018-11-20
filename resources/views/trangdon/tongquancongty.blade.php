@extends('layout.index')

@section('style')
   <link rel="stylesheet" href="{{ asset('css/asc_static.css') }}">
@endsection

@section('content')

	<div class="container mt-2" style="min-height: 65vh;">
        <h2 class="my-4 text-capitalize">{{$cauhinh->get('tong_quan_cong_ty')->description}}</h2>
        <hr class="mx-2" />
         {!! $cauhinh->get('tong_quan_cong_ty')->value !!}

	</div>
@endsection

@section('title')
   {{$cauhinh->get('title')->value}}
@endsection
