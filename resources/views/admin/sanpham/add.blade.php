@extends('admin.layout.adminlayout')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sản Phẩm
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

            <form action="{{ route('SanPham_add') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group{{ $errors->has('catalog') ? ' has-error' : '' }} row">
                    {!! Form::label('catalog', 'Loại sản phẩm',['class'=>'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                      {!! Form::select('catalog', $dscatalog->pluck('name','id'), null, ['id' => 'catalog', 'class' => 'form-control', 'required' => 'required', ]) !!}
                      <small class="text-danger">{{ $errors->first('catalog') }}</small>
                    </div>
                </div>
               <div class="form-group{{ $errors->has('ten') ? ' has-error' : '' }} row">
                   {!! Form::label('ten', 'Tên', ['class' => 'col-sm-3 control-label']) !!}
                 <div class="col-sm-9">
                     {!! Form::text('ten', null, ['class' => 'form-control', 'required' => 'required']) !!}
                     <small class="text-danger">{{ $errors->first('ten') }}</small>
                 </div>
               </div>
               
                <div class="form-group row">
                    <label class="control-label col-sm-3">Hình ảnh</label>
                    <div class="col-sm-9">
                      <input id="picture" name="hinh" type="file" class="form-control " data-show-preview="false">
                      <img id="photo_review" class="img-responsive img-thumbnail quick-review" >
                    </div>                    
                    
                </div>
                <div class="form-group{{ $errors->has('quycach') ? ' has-error' : '' }} row">
                    {!! Form::label('quycach', 'Quy Cách', ['class' => 'col-sm-3 control-label']) !!}
                  <div class="col-sm-9">
                      {!! Form::text('quycach', null, ['class' => 'form-control', ]) !!}
                      <small class="text-danger">{{ $errors->first('quycach') }}</small>
                  </div>
                </div>
                <div class="form-group{{ $errors->has('chatluong') ? ' has-error' : '' }} row">
                    {!! Form::label('chatluong', 'Chỉ tiêu chất lượng', ['class' => 'col-sm-3 control-label']) !!}
                  <div class="col-sm-9">
                      {!! Form::text('chatluong', null, ['class' => 'form-control', ]) !!}
                      <small class="text-danger">{{ $errors->first('chatluong') }}</small>
                  </div>
                </div>

                <div class="form-group{{ $errors->has('congdung') ? ' has-error' : '' }} row">
                    {!! Form::label('congdung', 'Công dụng', ['class' => 'col-sm-3 control-label']) !!}
                  <div class="col-sm-9">
                      {!! Form::text('congdung', null, ['class' => 'form-control', ]) !!}
                      <small class="text-danger">{{ $errors->first('congdung') }}</small>
                  </div>
                </div>
                
                <div class="form-group{{ $errors->has('nanglucdapung') ? ' has-error' : '' }} row">
                    {!! Form::label('nanglucdapung', 'Năng lực đáp ứng', ['class' => 'col-sm-3 control-label']) !!}
                  <div class="col-sm-9">
                      {!! Form::text('nanglucdapung', null, ['class' => 'form-control', ]) !!}
                      <small class="text-danger">{{ $errors->first('nanglucdapung') }}</small>
                  </div>
                </div>
                <div class="form-group{{ $errors->has('gia') ? ' has-error' : '' }} row">
                    {!! Form::label('gia', 'Giá', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                      {!! Form::number('gia', null, ['class' => 'form-control', ]) !!}
                      <small class="text-danger">{{ $errors->first('gia') }}</small>
                  </div>
                </div>
                <div class="form-group{{ $errors->has('mota') ? ' has-error' : '' }} row">
                    {!! Form::label('mota', 'Mô tả', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                      {!! Form::textarea('mota', null, ['class' => 'form-control ckeditor', ]) !!}
                      <small class="text-danger">{{ $errors->first('mota') }}</small>
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
