@extends('admin.layout.adminlayout')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Trang Tĩnh
                <small> - Danh sách</small>
            </h1>
             @if (session('notice'))
            <div class="alert alert-success">
                {{session('notice')}}
            </div>
            @endif
        </div>
        <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables">
            <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Tiêu Đề</th>
                    <th>Tóm Tắt</th>                        
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pages as $tt)
                <tr class="odd gradeX" align="center">
                    <td>{{$tt->id}}</td>
                    <td>{{$tt->tieude}}</td>
                    <td>{{str_limit($tt->tomtat,150)}}</td>
                    <td class="center"><i class="far fa-trash-alt"></i><a href="{{ route('StaticPage_delete',[$tt->id]) }}" onclick="return confirm('Xóa trang này thật sao?');"> Delete</a></td>
                    <td class="center"><i class="fas fa-pencil-alt"></i><a href="{{ route('StaticPage_edit',[$tt->id]) }}">Edit</a></td>
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