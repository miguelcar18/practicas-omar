@extends('layouts.materialize.default')

@section('breadcrumbs')
<h5 class="breadcrumbs-title">Save</h5>
<ul class="breadcrumbs">
    <li><a href="/home">{!! trans('messages.home') !!}</a></li>
    <li><a href="/user">{!! trans('messages.permission') !!}</a></li>

</ul>
@stop
@section('content')
<div class="row">
    <div class="col l12">
        <div class="card-panel">
            <h4 class="header2"><strong>{!!trans('messages.save').'</strong> '.trans('messages.permission')!!}</h4>
            {!! Form::open(['route' => 'permission.save-permission','role' => 'form', 'class'=>'permission-form','id' => 'permission-form','data-no-form-clear' => 1]) !!}

            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>{!! trans('messages.permission') !!}</th>
                        @foreach(\App\Role::all() as $role)
                        <th>{!! toWord($role->name) !!}</th>
                        @endforeach
                    </tr>
                    </tr>
                </thead>
                <tbody>
                    @foreach($permissions as $permission)
                    @if($permission->category != $category)
                    <tr style="background-color:#3498DB;color:#ffffff;"><td colspan="{!! count(\App\Role::all())+1 !!} "><strong>{!! toWord($permission->category).' '.trans('messages.module') !!}</strong></td></tr>
                    <?php $category = $permission->category; ?>
                    @endif
                    <tr>
                        <td>{!! toWord($permission->name) !!}</td>
                        @foreach(\App\Role::all() as $role)
                        <th><input class="icheck" type="checkbox" name="permission[{!!$role->id!!}][{!!$permission->id!!}]" value = '1' {!! (in_array($role->id.'-'.$permission->id,$permission_role)) ? 'checked' : '' !!} @if($role->is_hidden) disabled @endif></th>
                        @endforeach
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light light-blue darken-4 right" type="submit" name="action">{{isset($buttonText) ? $buttonText : trans('messages.save')}}

                    </button>
                </div>
            </div>


            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop