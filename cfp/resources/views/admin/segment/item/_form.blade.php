@include('admin.layouts.forms._name')
@include('admin.layouts.forms._active_order')
@include('admin.layouts.forms._description')
{!! Form::hidden('segment_id', $segment_id, ['class'=>'form-control', 'required' => 'required', 'maxlength' => 255]) !!}
