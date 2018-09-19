<div class="row">
    <div class="input-field">
        {!! Form::label('name',trans('messages.role').' '.trans('messages.name'),[])!!}
        {!! Form::input('text','name',isset($role->name) ? toWord($role->name) : '',['class'=>'form-control','placeholder'=>trans('messages.role').' '.trans('messages.name')])!!}
    </div>
    <div class="input-field">
        {!! Form::label('description',trans('messages.description'),[])!!}
        {!! Form::textarea('description',isset($role->description) ? $role->description : '',['size' => '30x3', 'class' => 'materialize-textarea', 'placeholder' => trans('messages.description'),"data-show-counter" => 1])!!}
        <span class="countdown"></span>
    </div>
    @if(!isset($role) || (isset($role) && !$role->default_user_role))
    <div class="input-field col s5">
        {{--<input name="default_user_role" type="checkbox" class="switch-input" data-size="mini" data-on-text="Yes" data-off-text="No" value="1" {{ (isset($role) && $role->default_user_role) ? 'checked' : '' }}> {!! trans('messages.default_user_role') !!}
        --}}
        {!! Form::select('default_user_role', [
        '1'=>'Yes',
        '0'=>'No'
        ],(isset($role) && $role->default_user_role),[])!!}
        {!! Form::label('default_user_role',trans('messages.default_user_role'),[])!!}
    </div>
    @endif
</div>

