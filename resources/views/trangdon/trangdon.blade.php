@extends('layout.index')

@section('style')
   <link rel="stylesheet" href="{{ asset('css/asc_static.css') }}">
@endsection

@section('content')

<h1 class="display-4">{{  $page->tieude }}</h1>
<hr class="my-2">
<p class="lead">
    {{ $page->tomtat }}
</p>
<hr class="my-2">
{!! $page->noidung !!}
@endsection
