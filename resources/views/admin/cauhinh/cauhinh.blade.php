@extends('admin.layout.adminlayout')

@section('content')
<div class="container-fluid">
	@if (session('notice'))
		<div class="alert alert-success">
			{{session('notice')}}
		</div>
		{{-- expr --}}
		@endif
	<div class="row">
		<div class="col-lg-12 clearfix">
			<div class="float-left">
				<h1 class="page-header">Cài đặt
				</h1>
			</div>
		</div>
		<!-- Chổ này là nội dung của phần setting -->
		<div class="container-fluid">
			<ul class="nav nav-pills " id="pills-tab" role="tablist">
			  <li class="nav-item">
			    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-basic" role="tab" aria-controls="pills-basic" aria-selected="true">Cơ Bản</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-addition" role="tab" aria-controls="pills-addition" aria-selected="false">Nâng Cao</a>
			  </li>
			  
			</ul>
			<div class="tab-content" id="pills-tabContent">
			  <div class="tab-pane fade show active  border border-dark rounded" id="pills-basic" role="tabpanel" aria-labelledby="pills-home-tab">@include('admin.cauhinh.coban')</div>
			  <div class="tab-pane fade border border-dark rounded" id="pills-addition" role="tabpanel" aria-labelledby="pills-profile-tab">@include('admin.cauhinh.nangcao')</div>
			 
			</div>
		</div>

	</div>

	<!-- /.row -->
</div>
@endsection
@section('topscript')
	<script type="text/javascript" src="{{ asset('js/configpage.js') }}"></script>
@endsection
