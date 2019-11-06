@include('admin.layouts.forms._name')
@include('admin.layouts.forms._active_order')
@include('admin.layouts.forms._description')
{!! Form::hidden('service_id', $service_id, ['class'=>'form-control', 'required' => 'required', 'maxlength' => 255]) !!}
