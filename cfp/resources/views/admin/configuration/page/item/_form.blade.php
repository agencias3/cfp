@include('admin.layouts.forms._name')
@include('admin.layouts.forms._active_order')
@if($page_id == 10)
    @include('admin.layouts.forms._image',[
        'label' => 'Imagem',
        'size' => '70px X 70px',
        'name' => 'image',
        'path' => 'page/item',
        'route_destroy' => route('admin.configuration.page.item.destroyFile', ['id' => isset($dados->id) ? $dados->id : null, 'name' => 'image'])
    ])
@endif
@include('admin.layouts.forms._description')
{!! Form::hidden('page_id', $page_id, ['required', true]) !!}