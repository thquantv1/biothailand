@extends('admin.layout.adminlayout')
@section('content')
<!-- Page Content -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dòng Thời Gian
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
                        <th>Thời Gian</th>
                        <th>Hình Ảnh</th>
                        <th>Sự Kiện</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($pages as $tt)
                    <tr class="odd gradeX" align="center">
                        <td>{{$tt->id}}</td>
                        <td>{{ $tt->thoigian->format('d-m-Y') }}<br>{{ $tt->tieude }}</td>
                        <td>
                            @if($tt->hinh!="")
                                <img src="{{ asset('upload/story/'.$tt->hinh) }}" alt="" style="max-width:9rem;">
                            @endif
                        </td>
                        <td>{{ $tt->sukien}}</td>
                        <td class="center"><i class="far fa-trash-alt"></i><a href="{{ route('Story_delete',[$tt->id]) }}" onclick="return confirm('Xóa sự kiện này thật sao?');"> Delete</a></td>
                        <td class="center"><i class="fas fa-pencil-alt"></i><a href="{{ route('Story_edit',[$tt->id]) }}">Edit</a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
@endsection
