@extends('admin.layout.adminlayout')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Trang  Tĩnh
                    <small> - Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12" style="padding-bottom:120px">
                @if (count($errors)>0)
                @foreach ($errors->all() as $err)
                    <div class="alert alert-danger">
                        {{$err}}
                    </div>
                @endforeach

                @endif
                @if (session('notice'))
                <div class="alert alert-success">
                    {{session('notice')}}
                </div>

                @endif
                <form action="{{ route('StaticPage_edit',[$page->id]) }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">


                    <div class="form-group{{ $errors->has('tieude') ? ' has-error' : '' }}">
                        {!! Form::label('tieude', 'Tiêu Đề') !!}
                        {!! Form::text('tieude', $page->tieude, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('tieude') }}</small>
                    </div>

                   <div class="form-group{{ $errors->has('tomtat') ? ' has-error' : '' }}">
                        {!! Form::label('tomtat', 'Tóm tắt') !!}
                        {!! Form::text('tomtat', $page->tomtat, ['class' => 'form-control']) !!}
                        <small class="text-danger">{{ $errors->first('tomtat') }}</small>
                    </div>
                    <div class="form-group{{ $errors->has('noidung') ? ' has-error' : '' }}">
                        {!! Form::label('noidung', 'Nội dung') !!}
                        {!! Form::textarea('noidung', $page->noidung, ['class' => 'form-control ckeditor','id'=>'ckeditor']) !!}
                        <small class="text-danger">{{ $errors->first('noidung') }}</small>
                    </div>
                    <div class="btn-group float-right">
                        <button type="submit" class="btn btn-success">Edit</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </div>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection

@section('script')
<script >
    $(document).ready(function()
    {

        $("#picture").change(function()
        {
            if(checkImage(this))
                 readURL(this,$('#photo_review'));
            else
             this.value="";

        });
    });

   </script>
@endsection
