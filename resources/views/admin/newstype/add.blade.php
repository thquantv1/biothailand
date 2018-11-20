@extends('admin.layout.adminlayout')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Loại Tin
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

            <form action="{{ route('NewsType_add') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">


               <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }} row">
                   {!! Form::label('title', 'Tên loại tin', ['class' => 'col-sm-3 control-label']) !!}
                   <div class="col-sm-9">
                       {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required','min'=>1,'max'=>999]) !!}
                       <small class="text-danger">{{ $errors->first('title') }}</small>
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
   

   </script>
@endsection
