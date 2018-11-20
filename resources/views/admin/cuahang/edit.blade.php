@extends('admin.layout.adminlayout')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Cửa Hàng
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

            <form action="{{ route('CuaHang_edit',[$ch->id]) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">


               <div class="form-group{{ $errors->has('stt') ? ' has-error' : '' }} row">
                   {!! Form::label('stt', 'STT', ['class' => 'col-sm-3 control-label']) !!}
                   <div class="col-sm-9">
                       {!! Form::number('stt', $ch->stt, ['class' => 'form-control', 'required' => 'required','min'=>1,'max'=>999]) !!}
                       <small class="text-danger">{{ $errors->first('stt') }}</small>
                   </div>
               </div>
               <div class="form-group{{ $errors->has('ten') ? ' has-error' : '' }} row">
                   {!! Form::label('ten', 'Tên Cửa Hàng', ['class' => 'col-sm-3 control-label']) !!}
                   <div class="col-sm-9">
                       {!! Form::text('ten', $ch->ten, ['class' => 'form-control', 'required' => 'required']) !!}
                       <small class="text-danger">{{ $errors->first('ten') }}</small>
                   </div>
               </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3">Hình ảnh</label>
                    <div class="col-sm-9">
                      <input id="picture" name="hinh" type="file" class="form-control " data-show-preview="false">
                      <img  id="photo_review" class="img-responsive img-thumbnail quick-review" 
                      @if ($ch->hinh!=null)
                          src="upload/cuahang/{{ $ch->hinh }}" 
                      @endif>
                    </div>                    
                    
                </div>
              <div class="radio{{ $errors->has('loai') ? ' has-error' : '' }} form-group row">
                <div class="control-label col-sm-3">
                    <label for="loai">Loại Cửa Hàng</label>
                </div>
                  <div class="col-sm-offset-3 col-sm-9">
                      <label for="loai">
                          {!! Form::radio('loai', 1, ($ch->loai==1)?1:0 , ['id' => 'loai']) !!} Cửa Hàng Chính
                          {!! Form::radio('loai', 2, ($ch->loai==2)?1:0 , ['id' => 'loai']) !!} Cửa Hàng Nhượng Quyền
                      </label>
                      <small class="text-danger">{{ $errors->first('loai') }}</small>
                  </div>
              </div>
                <div class="form-group{{ $errors->has('diachi') ? ' has-error' : '' }} row">
                    {!! Form::label('diachi', 'Địa Chỉ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::text('diachi', $ch->diachi, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('diachi') }}</small>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('sdt') ? ' has-error' : '' }} row">
                    {!! Form::label('sdt', 'Điện Thoại', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::text('sdt', $ch->sdt, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('sdt') }}</small>
                    </div>
                </div>
                <!--Tỉnh thành phố-->
                <div class="form-group{{ $errors->has('tinhthanhpho') ? ' has-error' : '' }} row">
                    {!! Form::label('tinhthanhpho', 'Tỉnh / Thành Phố', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::select('tinhthanhpho', $dstinhthanh->sortBy('name')->pluck('name','matp'), 
                        $ch->quanhuyen->matp, ['id' => 'tinhthanhpho', 'class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('tinhthanhpho') }}</small>
                    </div>
                </div>
                <!--Quận Huyện-->
                <div class="form-group row {{ $errors->has('maqh') ? ' has-error' : '' }}">
                    {!! Form::label('maqh', 'Quận / Huyện', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        <div id="loadqh">
                            {!! Form::select('maqh',$ch->quanhuyen->TinhThanhPho->QuanHuyen->sortBy('name')->pluck('name','maqh'),$ch->maqh, ['id' => 'maqh', 'class' => 'form-control', 'required' => 'required']) !!}
                        </div>                        
                        <small class="text-danger">{{ $errors->first('maqh') }}</small>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('tthd') ? ' has-error' : '' }} row">
                    {!! Form::label('tthd', 'Tình Trạng Hợp Đồng', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::select('tthd',tinhtranghd(), $ch->tthd, ['id' => 'tthd', 'class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('tthd') }}</small>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('thongtin') ? ' has-error' : '' }} row">
                    {!! Form::label('thongtin', 'Thông Tin', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::textarea('thongtin', $ch->thongtin, ['class' => 'form-control ckeditor', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('thongtin') }}</small>
                    </div>
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

        $("#tinhthanhpho").change(function()
        {           
            var matp = $(this).val();            
            $.get("admin/ajax/selectqh/"+matp,function(data)
                {
                    $('#loadqh').html(data);
                }
                );
        });
    });

   </script>
@endsection
