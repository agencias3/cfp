@include('admin.layouts.forms._name_select_pluck', [
    'label' => 'Tipo',
    'required' => true,
    'name' => 'type',
    'select' => ['partner' => 'Sócio', 'associate' => 'Associado']
])
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('email', 'E-mail') !!}
            {!! Form::email('email', null, ['class'=>'form-control', 'maxlength' => 255]) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('office', 'Cargo') !!}
            {!! Form::text('office', null, ['class'=>'form-control', 'maxlength' => 255]) !!}
        </div>
    </div>
</div>
@include('admin.layouts.forms._image',[
    'label' => 'Imagem',
    'size' => '(XX x XX)',
    'name' => 'image',
    'path' => 'team',
    'route_destroy' => route('admin.team.destroyFile', ['id' => isset($dados->id) ? $dados->id : null, 'name' => 'file'])
])
@include('admin.layouts.forms._active_order')