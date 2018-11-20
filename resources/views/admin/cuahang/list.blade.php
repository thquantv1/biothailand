@extends('admin.layout.adminlayout')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cửa hàng
                    <small>Danh sách</small>
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
                            <th>Stt</th>
                            <th>Tên</th>
                            <th>Ảnh</th>
                            <th>Địa Chỉ</th>
                            <th>SĐT</th>
                            <th>
                                Tình Trạng<br>
                                Hợp Đồng
                            </th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dscuahang as $ch)
                        <tr class="odd gradeX" align="center">
                            <td>{{$ch->stt}}</td>
                            <td>
                                <p>
                                    {{$ch->ten}} <br>  
                                    {{ 'Loại :'.loaich()[$ch->loai] }} 
                                </p>
                            </td>
                            <td>
                                <img src="upload/cuahang/{{$ch->hinh}}" class="img-thumbnail" style="max-width: 150px;">
                            </td>
                            <td>{{ $ch->diachi}}</td>
                            <td>{{ $ch->sdt }}</td>
                            <td>{{ tinhtranghd()[$ch->tthd] }}</td>
                            <td class="center"><i class="far fa-trash-alt"></i><a href="{{ route('CuaHang_delete',[$ch->id]) }} " 
                                onclick="return confirm('Xóa cửa hàng này thật sao?');"> Delete</a></td>
                                <td class="center"><i class="fas fa-pencil-alt"></i><a href="{{ route('CuaHang_edit',[$ch->id]) }}">Edit</a></td>
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