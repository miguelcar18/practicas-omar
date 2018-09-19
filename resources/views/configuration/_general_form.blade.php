<div class="row">
    <div class="col s12 m12 l12">
        <div class="card-panel">
            <h4 class="header2">{{trans('messages.general')}} {{trans('messages.configuration')}}</h4>
            {!! Form::open(['route' => 'configuration.store','role' => 'form','class'=>'config-system-form', 'id' => 'config-general-form','data-no-form-clear' => 1]) !!}
            <div class="row">
                <div class="col-sm-6">
                    <div class="input-field col s6">
                        {!! Form::input('text','company_name',(config('config.company_name')) ? : '',[])!!}
                        {!! Form::label('company_name',trans('messages.company').' '.trans('messages.name'),[])!!}
                    </div>
                    <div class="input-field col s6">
                        {!! Form::input('text','contact_person',(config('config.contact_person')) ? : '')!!}
                        {!! Form::label('contact_person',trans('messages.contact').' '.trans('messages.person'),[])!!}
                    </div>
                    <div class="input-field col s6">

                        {!! Form::input('text','email',(config('config.email')) ? : '',[])!!}
                        {!! Form::label('email',trans('messages.email'),[])!!}
                    </div>
                    <div class="input-field col s6">
                        {!! Form::input('text','phone',(config('config.phone')) ? : '',[])!!}
                        {!! Form::label('phone',trans('messages.phone'),[])!!}
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="input-field col s6">
                        <div class="input-field col s12">
                            {!! Form::label('address',trans('messages.address'),[])!!}
                            {!! Form::input('text','address_1',(config('config.address_1')) ? : '',[])!!}
                        </div>
                        <br />
                        <div class="input-field col s12">
                            {!! Form::label('address',trans('messages.address'),[])!!}
                            {!! Form::input('text','address_2',(config('config.address_2')) ? : '',[])!!}
                        </div>
                        <br />

                        <div class="row">
                            <div class="input-field col s6">
                                {!! Form::input('text','city',(config('config.city')) ? : '',[])!!}
                                {!! Form::label('address',trans('messages.city'),[])!!}
                            </div>
                            <div class="input-field col s6">
                                {!! Form::input('text','state',(config('config.state')) ? : '',[])!!}
                                {!! Form::label('address',trans('messages.state'),[])!!}
                            </div>
                            <div class="input-field col s6">
                                {!! Form::input('text','zipcode',(config('config.zipcode')) ? : '',[])!!}
                                {!! Form::label('address',trans('messages.zipcode'),[])!!}
                            </div>
                        </div>
                        <br />
                        <div class="input-field col s6">
                            {!! Form::select('country_id', config('country'),(config('config.country_id')) ? : '',[])!!}
                            {!! Form::label('address',trans('messages.country'),[])!!}

                        </div>
                    </div>


                    {!! Form::hidden('config_type','general')!!}
                </div>

            </div>



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
