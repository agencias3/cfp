@include('admin.layouts.forms._name')
<div class="row">
@include('admin.layouts.forms._image',[
    'label' => 'Ícone',
    'size' => '(XX x XX)',
    'name' => 'icon',
    'path' => 'segment',
    'merge' => true,
    'route_destroy' => route('admin.segment.destroyFile', ['id' => isset($dados->id) ? $dados->id : null, 'name' => 'file'])
])
@include('admin.layouts.forms._image',[
    'label' => 'Imagem',
    'size' => '(XX x XX)',
    'name' => 'image',
    'path' => 'segment',
    'merge' => true,
    'route_destroy' => route('admin.segment.destroyFile', ['id' => isset($dados->id) ? $dados->id : null, 'name' => 'file'])
])
</div>
@include('admin.layouts.forms._active_order')
@include('admin.layouts.forms._seo_keywords_description')
@include('admin.layouts.forms._seo_link')
@include('admin.layouts.forms._description')