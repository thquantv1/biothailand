@extends('admin.layout.adminlayout')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 clearfix">
                <h1 class="page-header float-left">Sản Phẩm
                    <small>Danh sách</small>
                </h1>
                <div class="float-right"><a class="btn btn-success pull-right" href="{{ route('SanPham_add') }}"><i class="fa fa-plus"></i> </a></div>
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
                            <th>Tên</th>
                            <th>Ảnh</th>
                            <th>Loại</th>
                            <th>Giá</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dssanpham as $sp)
                        <tr class="odd gradeX" align="center">
                            <td>{{$sp->id}}</td>
                            <td>{{$sp->ten}}</td> 
                                
                            <td>
                                <img src="
                                @if($sp->hinh!="")
                                upload/sanpham/{{$sp->hinh}}
                                @else
                                img/no_image.svg
                                @endif
                                " class="img-thumbnail" style="max-width: 150px;">
                            </td>
                            <td>{{$sp->Catalog->name}}</td>
                            <td>{{ $sp->gia." vnd" }}</td>
                            <td class="center"><i class="far fa-trash-alt"></i><a href="{{ route('SanPham_delete',[$sp->id]) }} "
                                onclick="return confirm('Xóa sản phẩm này thật sao?');"> Delete</a></td>
                                <td class="center"><i class="fas fa-pencil-alt"></i><a href="{{ route('SanPham_edit',[$sp->id]) }}">Edit</a></td>
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
