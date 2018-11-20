@extends('layout.index')
@section('content')
     <!-- Header -->
    @include('trangchu.intro')
    <!-- Portfolio Grid -->
    @include('trangchu.portfolio')
    <!-- hight light news -->
    @include('trangchu.news')
    <!-- About -->
     {{-- @include('trangchu.about') --}}
    <!-- Team -->
    {{-- @include('trangchu.team') --}}
    <!-- Contact -->
    @include('trangchu.contact')
    @include('trangchu.currency')
    <!-- Portfolio Modals -->

@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/jquery.form.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/trangchu.js') }}"></script>

@endsection

@section('metatag')
   @include('layout.metatag',compact('cauhinh'))
@endsection
@section('title')
   {{$cauhinh->get('title')->value}}
@endsection
