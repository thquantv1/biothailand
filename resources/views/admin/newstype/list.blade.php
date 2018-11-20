@extends('admin.layout.adminlayout')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 clearfix">
                <h1 class="page-header float-left">Loại Tin
                    <small>Danh sách</small>
                </h1>
                <div class="float-right"><a class="btn btn-success pull-right" href="{{ route('NewsType_add') }}"><i class="fa fa-plus"></i> </a></div>
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
                            <th>Stt</th>
                            <th>Tên Loại Tin</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($newstypes as $nt)
                        <tr class="odd gradeX" align="center">
                            <td>{{$nt->id}}</td>
                            <td>{{$nt->title}}</td>
                            <td class="center"><i class="far fa-trash-alt"></i><a href="{{ route('NewsType_delete',[$nt->id]) }} " 
                                onclick="return confirm('Xóa loại tin này thật sao?');"> Delete</a></td>
                            <td class="center"><i class="fas fa-pencil-alt"></i><a href="{{ route('NewsType_edit',[$nt->id]) }}">Edit</a></td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
    @endsection
    @section('script')
    <script type="text/javascript">
        $(document).ready( function () {
            $('#dataTables').DataTable();
        } );
    </script>
    {{-- expr --}}
    @endsection