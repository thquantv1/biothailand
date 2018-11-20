@extends('admin.layout.adminlayout')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 clearfix">
                <h1 class="page-header float-left">Tin Tức
                    <small>Danh sách</small>
                </h1>
                <div class="float-right"><a class="btn btn-success pull-right" href="{{ route('news_add') }}"><i class="fa fa-plus"></i> </a></div>
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
                        <th>Tiêu Đề</th>
                        <th>Tóm Tắt</th>
                        <th>Nổi Bật</th>
                        <th>Loại Tin</th>
                        <th>Ngày tạo</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $tt)
                    <tr class="odd gradeX" align="center">
                        <td>{{$tt->id}}</td>
                        <td><p>{{$tt->title}}</p>
                            <img src="upload/news/{{$tt->picture}}" class="img-thumbnail" style="max-width: 150px;">
                        </td>
                        <td>{{str_limit($tt->summary,150)}}</td>
                        
                        <td>@if ($tt->highlight==0)
                            {{"Không"}}
                        @else
                            {{"Có"}}
                        @endif</td>
                        <td>{{$tt->NewsType->title}}</td>
                        <td>{{$tt->created_at}}</td>
                        
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{ route('news_delete',[$tt->id]) }}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('news_edit',[$tt->id]) }}">Edit</a></td>
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection