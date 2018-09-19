<div class="row">
    <div class="input-field">
        {!! Form::input('text','name',isset($permission->name) ? toWord($permission->name) : '',[])!!}
        {!! Form::label('name',trans('messages.permission').' '.trans('messages.name'),[])!!}
    </div>
    <div class="input-field">
        {!! Form::input('text','category',isset($permission->category) ? toWord($permission->category) : '',[])!!}
        {!! Form::label('category',trans('messages.permission').' '.trans('messages.category'),[])!!}
    </div>
    <div class="input-field">
        {!! Form::label('description',trans('messages.description'),[])!!}
        {!! Form::textarea('description',isset($permission->description) ? $permission->description : '',['size' => '30x3', 'class'=>'materialize-textarea',"data-show-counter" => 1])!!}
        <span class="countdown"></span>
    </div>

</div>