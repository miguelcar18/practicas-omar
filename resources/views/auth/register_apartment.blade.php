
<div class="col s8 m8 l6">
<div class="card-panel">
<div class="row">
<div class="col-sm-6">
    <div class="input-field col s6">
        <i class="mdi-communication-business prefix"></i>

        <input type="text" name="code_apartment" id="code_apartment" placeholder="xxxxx">
        <label class="center-align">{!! trans('messages.code').' '.trans('messages.apartment') !!}</label>
    </div>


    <div class="input-field col s6">
        <i class="mdi-social-person prefix"></i>

        <input type="text" name="owner" id="owner" placeholder="Owner">
        <label  class="center-align">{!! trans('messages.owner') !!}</label>
    </div>


    <div class="input-field col s6">
        <i class="mdi-communication-email prefix"></i>

        <input type="text" name="email" id="email" placeholder="example@example.com">
        <label  class="center-align">{!! trans('messages.email')!!}</label>
    </div>


    <div class="input-field col s2">
        {!! Form::select('status', [
        '1'=>'Habilitado',
        '0'=>'Deshabilitado'
        ],(isset($role) && $role->default_user_role),['disabled' => 'disabled'],[])!!}
        {!! Form::label('address',trans('messages.status'),[])!!}
    </div>


