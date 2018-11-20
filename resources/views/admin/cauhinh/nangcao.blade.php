{!! Form::open(['method' => 'POST', 'route' => 'addition_config', 'id'=>'addition_config','class' => 'form-horizontal my-3','files'=>true]) !!}
	<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row mx-2">
	    {!! Form::label('email', 'Địa chỉ Email nhận phản hồi', ['class' => 'col-sm-3 control-label']) !!}
		<div class="col-sm-9">
	    	{!! Form::email('email', $cauhinh->valueof('email'), ['class' => 'form-control', 'required' => 'required']) !!}
	    	<small class="text-danger">{{ $errors->first('email') }}</small>
		</div>
    </div>
    <div class="form-group{{ $errors->has('sdt') ? ' has-error' : '' }} row mx-2">
	    {!! Form::label('sdt', 'Số điện thoại liên hệ', ['class' => 'col-sm-3 control-label']) !!}
		<div class="col-sm-9">
	    	{!! Form::email('sdt', $cauhinh->valueof('sdt'), ['class' => 'form-control', 'required' => 'required']) !!}
	    	<small class="text-danger">{{ $errors->first('sdt') }}</small>
		</div>
    </div>
    
	<div class="form-group{{ $errors->has('keyword') ? ' has-error' : '' }} row mx-2">
	    {!! Form::label('keyword', 'Từ Khóa', ['class' => 'col-sm-3 control-label']) !!}
		<div class="col-sm-9">
	    	{!! Form::textarea('keyword', $cauhinh->valueof('keyword'), ['class' => 'form-control', 'required' => 'required']) !!}
	    	<small class="text-danger">{{ $errors->first('keyword') }}</small>
		</div>
	</div>

	<div class="form-group{{ $errors->has('page_description') ? ' has-error' : '' }} row mx-2">
	    {!! Form::label('page_description', 'Mô tả trang web', ['class' => 'col-sm-3 control-label']) !!}
		<div class="col-sm-9">
	    	{!! Form::textarea('page_description', $cauhinh->valueof('page_description'), ['class' => 'form-control', 'required' => 'required']) !!}
	    	<small class="text-danger">{{ $errors->first('page_description') }}</small>
		</div>
	</div>
	<div class="form-group{{ $errors->has('Search_pagename') ? ' has-error' : '' }} row mx-2">
	    {!! Form::label('Search_pagename', 'Tên công ty cho các công cụ tìm kiếm', ['class' => 'col-sm-3 control-label']) !!}
		<div class="col-sm-9">
	    	{!! Form::text('Search_pagename', $cauhinh->valueof('Search_pagename'), ['class' => 'form-control', 'required' => 'required']) !!}
	    	<small class="text-danger">{{ $errors->first('Search_pagename') }}</small>
		</div>
	</div>
    
    <div class="form-group{{ $errors->has('page_picture') ? ' has-error' : '' }} row mx-2">
         {!! Form::label('page_picture', 'Hình đại diện của trang',['class' => 'col-sm-3 control-label']) !!}
         <div class="col-sm-9">
	         {!! Form::file('page_picture', ['class' => 'form-control']) !!}
	         <img class="img-responsive col-sm-4" id="page_picture_upload" src="{{ asset($cauhinh->valueof('page_picture')) }}">
	         <small class="text-danger">{{ $errors->first('page_picture') }}</small>
     	</div>
    </div>
    <div class="btn-group text-right d-flex">
       {!! Form::submit("Save", ['class' => 'btn btn-success ml-auto']) !!}
    </div>


{!! Form::close() !!}
@section('script')
	@parent
	<script type="text/javascript">		
		$("#page_picture").change(function() {
    		if(checkImage(this))
        		readURL(this,$('#page_picture_upload'));
    		else
        		this.value="";
		});
	</script>
@stop
