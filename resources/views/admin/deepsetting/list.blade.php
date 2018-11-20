@extends('admin.layout.adminlayout')
@section('content')
<!-- Page Content -->
<div class="container-fluid">
	@if (session('notice'))
		<div class="alert alert-success">
			{{session('notice')}}
		</div>
		{{-- expr --}}
		@endif
	<div class="row">
		<div class="col-lg-12 clearfix">
			<div class="float-left"><h1 class="page-header">Deep setting
				<small>List</small>
			</h1></div>
			<div class="float-right"><a class="btn btn-success pull-right" href="admin/setting/add"><i class="fa fa-plus"></i> Add new field</a></div>
		</div>
		<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover" id="dataTables">
			<thead>
				<tr align="center">
					<th>ID</th>
					<th>Key Name</th>
					<th>Value</th>
					<th>Desciption</th>
					<th>Delete</th>
					<th>Edit</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($deepset as $ds)
				<tr class="odd gradeX" align="center">
					<td>{{$ds->id}}</td>
					<td>{{$ds->keyname}}</td>
					<td>{{str_limit($ds->value,50)}}</td>
					<td>{{$ds->description}}</td>
					<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/setting/delete/{{$ds->id}}" onclick="return confirm('Xóa cấu hình này thật sao?');"> Delete</a></td>
					<td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/setting/edit/{{$ds->id}}">Edit</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
		</div>
	</div>
	<!-- /.row -->
</div>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready( function () {
            $('#dataTables').DataTable();
        } );
    </script>
    {{-- expr --}}
    @endsection