<div class="input-field col s12">
    {!! Form::label('locale',trans('messages.locale'),[])!!}
    @if(!isset($locale))
    {!! Form::input('text','locale',isset($locale) ? $locale : '',['class'=>'form-control','placeholder'=>trans('messages.locale')])!!}
    @else
    {!! Form::input('text','locale',isset($locale) ? $locale : '',['class'=>'form-control','placeholder'=>trans('messages.locale'),'readonly' => 'true'])!!}
    @endif	
</div>
<div class="input-field col s12">
    {!! Form::label('name',trans('messages.language').' '.trans('messages.name'),[])!!}
    {!! Form::input('text','name',isset($locale) ? config('lang.'.$locale.'.language') : '',['class'=>'form-control','placeholder'=>trans('messages.language').' '.trans('messages.name')])!!}
</div>
{{--<div class="row">
    <div class="input-field col s12">
        <button class="btn waves-effect waves-light light-blue darken-4 right" type="submit" name="action">{{isset($buttonText) ? $buttonText : trans('messages.save')}}

        </button>
    </div>
</div>--}}