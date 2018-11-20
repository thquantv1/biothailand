@extends('admin.layout.adminlayout')

@section('content')
<div id="page-wrapper">
    @if(count($errors)>0)
                <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                {{$err}}<br>
                @endforeach
                </div>
            @endif
            @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
            @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Page setting -
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-10" style="padding-bottom:120px">
            @if(count($errors)>0)
                <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                {{$err}}<br>
                @endforeach
                </div>
            @endif
            @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
            @endif
                <form action="{{ route('setting_edit', ['id'=>$field->id]) }}" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group">
                        <label>Key Name</label>
                        <input class="form-control" name="keyname" placeholder="Input key name" value="{{$field->keyname}}" disabled="" />
                    </div>
                    <div class="form-group{{ $errors->has('value') ? ' has-error' : '' }}">
                        {!! Form::label('value', 'Value') !!}
                        <br>

                        <div class="radio">
                            <label>
                                <input type="radio" name="exampleRadios" class="btradio" value="ck-on" >
                                Text Editor
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="exampleRadios" class="btradio" value="file">
                                File
                            </label>
                        </div>
                        <div class="radio disabled">
                            <label>
                                <input type="radio" name="exampleRadios" class="btradio" value="normal" checked>
                                Regular
                            </label>
                        </div>

                        {!! Form::textarea('value', $field->value, ['class' => 'form-control','placeholder'=>'Input value','id'=>'value']) !!}
                        <small class="text-danger">{{ $errors->first('value') }}</small>
                         <div id="file_upload" class="form-group{{ $errors->has('setfile') ? ' has-error' : '' }}" style="display: none;">
                            {!! Form::label('setfile', 'upload file') !!}
                            {!! Form::file('setfile') !!}

                            <small class="text-danger">{{ $errors->first('setfile') }}</small>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        {!! Form::label('description', 'description') !!}
                        {!! Form::text('description', $field->description, ['class' => 'form-control','placeholder'=>'desciption for field']) !!}
                        <small class="text-danger">{{ $errors->first('description') }}</small>
                    </div>
                    <div class="btn-group pull-right">
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
    <script type="text/javascript">
        $('.btradio').change(function(){
            switch ($(this).val()) {
                case 'ck-on':
                    {
                        $('#value').show();$('#file_upload').hide();
                         CKEDITOR.replace( 'value' );
                    }
                    break;
            case 'file':
                    {
                         if (CKEDITOR.instances.value) {
                        CKEDITOR.instances.value.destroy();
                        }
                         $('#value').hide();
                         $('#file_upload').show();
                    }
                    break;

                default:
                    {
                        if (CKEDITOR.instances.value) {
                        CKEDITOR.instances.value.destroy();
                        }
                        $('#file_upload').hide();
                        $('#value').show();

                    }
                    break;
            }
        });
    </script>
@endsection
