@extends('admin.layout.adminlayout')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dòng Thời Gian
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

                <form action="{{ route('Story_add') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="form-group{{ $errors->has('thoigian') ? ' has-error' : '' }} row " >
                        {!! Form::label('thoigian', 'Thời Gian', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::date('thoigian', null, ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('thoigian') }}</small>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('tieude') ? ' has-error' : '' }} row">
                        {!! Form::label('tieude', 'Tiêu Đề', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('tieude', null, ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('tieude') }}</small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-3">Hình ảnh</label>
                        <div class="col-sm-9">
                          <input id="picture" name="hinh" type="file" class="form-control " data-show-preview="false">
                          <img id="photo_review" class="img-responsive img-thumbnail quick-review" >
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('sukien') ? ' has-error' : '' }} row">
                       {!! Form::label('sukien', 'Sự Kiện', ['class' => 'col-sm-3 control-label']) !!}
                       <div class="col-sm-9">
                           {!! Form::text('sukien', null, ['class' => 'form-control', 'required' => 'required']) !!}
                           <small class="text-danger">{{ $errors->first('sukien') }}</small>
                       </div>
                    </div>

                    <div class="btn-group float-right">
                    <button type="submit" class="btn btn-success">Add</button>
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
