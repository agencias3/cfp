@include('admin.layouts.forms._name')
@include('admin.layouts.forms._image',[
    'label' => 'Ícone',
    'size' => '(XX x XX)',
    'name' => 'image',
    'path' => 'service',
    'route_destroy' => route('admin.service.destroyFile', ['id' => isset($dados->id) ? $dados->id : null, 'name' => 'file'])
])
@include('admin.layouts.forms._active_order')
@include('admin.layouts.forms._seo_keywords_description')
@include('admin.layouts.forms._seo_link')
@include('admin.layouts.forms._description')