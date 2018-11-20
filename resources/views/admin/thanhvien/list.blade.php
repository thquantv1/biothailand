@extends('admin.layout.adminlayout')
@section('content')
<!-- Page Content -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thành viên
                    <small> - Danh sách</small>
                </h1>
                 @if (session('notice'))
                <div class="alert alert-success">
                    {{session('notice')}}
                </div>
                @endif
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Hình Ảnh</th>
                        <th>Chức Vụ</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($dsthanhvien as $tv)
                    <tr class="odd gradeX" align="center">
                        <td>{{$tv->id}}</td>
                        <td>{{ $tv->ten}}</td>
                        <td>
                            @if($tv->hinh!="")
                                <img src="{{ asset('upload/member/'.$tv->hinh) }}" alt="" style="max-width:9rem;">
                            @endif
                        </td>
                        <td>{{ $tv->chucvu}}</td>
                        <td class="center"><i class="far fa-trash-alt"></i><a href="{{ route('ThanhVien_delete',[$tv->id]) }}" onclick="return confirm('Xóa sự kiện này thật sao?');"> Delete</a></td>
                        <td class="center"><i class="fas fa-pencil-alt"></i><a href="{{ route('ThanhVien_edit',[$tv->id]) }}">Edit</a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
@endsection
