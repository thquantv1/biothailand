@extends('admin.layout.adminlayout')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Loại Sản Phẩm
                <small>Sửa</small>
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

            <form action="{{ route('Catalog_edit',[$catalog->id]) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} row">
                   {!! Form::label('name', 'Tên loại sản phẩm', ['class' => 'col-sm-3 control-label']) !!}
                   <div class="col-sm-9">
                       {!! Form::text('name', $catalog->name, ['class' => 'form-control', 'required' => 'required']) !!}
                       <small class="text-danger">{{ $errors->first('name') }}</small>
                   </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3">Hình ảnh</label>
                    <div class="col-sm-9">
                        <input id="picture" name="hinh" type="file" class="form-control " data-show-preview="false">
                        <img id="photo_review" class="img-responsive img-thumbnail quick-review" 
                        @if ($catalog->picture!=null)
                          src="upload/cuahang/{{ $sp->hinh }}" 
                      @endif>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('intro') ? ' has-error' : '' }} row">
                    {!! Form::label('intro', 'Giới thiệu', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::textarea('intro', $catalog->intro, ['class' => 'form-control']) !!}
                        <small class="text-danger">{{ $errors->first('intro') }}</small>
                    </div>
                </div>
                <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }} row">
                    {!! Form::label('content', 'Nội Dung', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-9">
                        {!! Form::textarea('content', $catalog->content, ['class' => 'form-control']) !!}
                        <small class="text-danger">{{ $errors->first('content') }}</small>
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


   </script>
@endsection
