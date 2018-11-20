@extends('admin.layout.adminlayout')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thành Viên
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

                <form action="{{ route('ThanhVien_edit',[$mem->id]) }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group{{ $errors->has('ten') ? ' has-error' : '' }} row">
                        {!! Form::label('ten', 'Tên', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('ten',$mem->ten, ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('ten') }}</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-3">Hình ảnh</label>
                        <div class="col-sm-9">
                          <input id="picture" name="hinh" type="file" class="form-control " data-show-preview="false">
                          <img id="photo_review" class="img-responsive img-thumbnail quick-review" 
                            @if ($mem->hinh!="")
                              src="{{ asset('upload/member/'.$mem->hinh) }}"
                            @endif
                          >
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('chucvu') ? ' has-error' : '' }} row">
                        {!! Form::label('chucvu', 'Chức Vụ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('chucvu', $mem->chucvu, ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('chucvu') }}</small>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('thongtin') ? ' has-error' : '' }} row">
                        {!! Form::label('thongtin', 'Thông Tin', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('thongtin', $mem->thongtin, ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('thongtin') }}</small>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('fblink') ? ' has-error' : '' }} row">
                        {!! Form::label('fblink', 'FaceBook Link', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('fblink', $mem->fblink, ['class' => 'form-control']) !!}
                            <small class="text-danger">{{ $errors->first('fblink') }}</small>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('twlink') ? ' has-error' : '' }} row">
                        {!! Form::label('twlink', 'Twitter Link', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('twlink', $mem->twlink, ['class' => 'form-control']) !!}
                            <small class="text-danger">{{ $errors->first('twlink') }}</small>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('iglink') ? ' has-error' : '' }} row">
                        {!! Form::label('iglink', 'Instagram Link', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('iglink', $mem->iglink, ['class' => 'form-control']) !!}
                            <small class="text-danger">{{ $errors->first('iglink') }}</small>
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
