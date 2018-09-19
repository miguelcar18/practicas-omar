<div class="row">

	 <div class="input-field">

	    {!! Form::select('category', $category, '',[])!!}
	     {!! Form::label('category',trans('messages.category'),[])!!}
	 </div>
	<div class="input-field">

		{!! Form::input('text','name','',[])!!}
		{!! Form::label('name',trans('messages.name'),[])!!}
	</div>
</div>