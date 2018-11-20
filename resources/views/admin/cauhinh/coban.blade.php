{!! Form::open(['method' => 'POST', 'route' => 'basic_config', 'id'=>'basic_config','class' => 'form-horizontal my-3','files'=>true]) !!}
	<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }} row mx-2">
	    {!! Form::label('title', 'Title', ['class' => 'col-sm-3 control-label']) !!}
		<div class="col-sm-9">
	    	{!! Form::text('title', $cauhinh->valueof('title'), ['class' => 'form-control', 'required' => 'required']) !!}
	    	<small class="text-danger">{{ $errors->first('title') }}</small>
		</div>
	</div>
	<div class="form-group{{ $errors->has('tencty') ? ' has-error' : '' }} row mx-2">
	    {!! Form::label('tencty', 'Tên Công Ty', ['class' => 'col-sm-3 control-label']) !!}
		<div class="col-sm-9">
	    	{!! Form::text('tencty', $cauhinh->valueof('tencty'), ['class' => 'form-control', 'required' => 'required']) !!}
	    	<small class="text-danger">{{ $errors->first('tencty') }}</small>
		</div>
	</div>
	<div class="form-group{{ $errors->has('tencty_daydu') ? ' has-error' : '' }} row mx-2">
	    {!! Form::label('tencty_daydu', 'Tên Công Ty Đầy Đủ', ['class' => 'col-sm-3 control-label']) !!}
		<div class="col-sm-9">
	    	{!! Form::text('tencty_daydu', $cauhinh->valueof('tencty_daydu'), ['class' => 'form-control', 'required' => 'required']) !!}
	    	<small class="text-danger">{{ $errors->first('tencty_daydu') }}</small>
		</div>
	</div>
	
    <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }} row mx-2">
         {!! Form::label('logo', 'Logo công ty',['class' => 'col-sm-3 control-label']) !!}
         <div class="col-sm-9">
	         {!! Form::file('logo', ['class' => 'form-control']) !!}
	         <img class="logo rounded img-responsive col-sm-4" id="logo_upload" src="{{ asset($cauhinh->valueof('logo')) }}">
	         <small class="text-danger">{{ $errors->first('logo') }}</small>
     	</div>
    </div> 
    
    <div class="btn-group text-right d-flex">
       {!! Form::submit("Save", ['class' => 'btn btn-success ml-auto']) !!}
    </div>
{!! Form::close() !!}
@section('script')
@parent
	<script type="text/javascript">
		$("#logo").change(function() {
    		if(checkImage(this))
        		readURL(this,$('#logo_upload'));
    		else
        		this.value="";  
	});
	</script>
@stop