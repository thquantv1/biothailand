@extends('admin.layout.adminlayout')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin Tức
                    <small>Thêm</small>
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
                <form action="{{ route('news_edit',[$tintuc->id]) }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                     <div class="form-group{{ $errors->has('loaitin') ? ' has-error' : '' }}">
                        {!! Form::label('loaitin', 'Loai Tin', ['class' => ' control-label']) !!}
                        {!! Form::select('loaitin', $dsloaitin->pluck('title','id'), $tintuc->id_newstype, ['id' => 'loaitin', 'class' => 'form-control', 'required' => 'required','placeholder'=>'Chọn một loại tin']) !!}
                            <small class="text-danger">{{ $errors->first('loaitin') }}</small>
                    </div>
                    
                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                        {!! Form::label('title', 'Tiêu Đề') !!}
                        {!! Form::text('title', $tintuc->title, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('title') }}</small>
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <input id="picture" name="picture" type="file" class="form-control" >
                        <img id="photo_review" class="img-responsive img-thumbnail" style="max-width: 25rem;" src="upload/news/{{$tintuc->picture}}">
                    </div>
                   <div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
                        {!! Form::label('summary', 'Tóm tắt') !!}
                        {!! Form::textarea('summary', $tintuc->summary, ['class' => 'form-control']) !!}
                        <small class="text-danger">{{ $errors->first('summary') }}</small>
                    </div> 
                    <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                        {!! Form::label('content', 'Nội dung') !!}
                        {!! Form::textarea('content', $tintuc->content, ['class' => 'form-control ckeditor']) !!}
                        <small class="text-danger">{{ $errors->first('content') }}</small>
                    </div>
                    <div class="form-group">
                        <label>Nổi Bật?</label>
                        <label class="radio-inline">
                            <input name="highlight" value="1" @if ($tintuc->highlight==1)
                                {{"checked"}}
                            @endif type="radio">Có
                        </label>
                        <label class="radio-inline">
                            <input name="highlight" value="0" @if ($tintuc->highlight==0)
                                {{"checked"}}
                            @endif type="radio">Không
                        </label>
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