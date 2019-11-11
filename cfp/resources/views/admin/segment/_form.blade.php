@include('admin.layouts.forms._name')
@include('admin.layouts.forms._input_text_6_6', [
     'i_0' => [
        'label' => 'Chamada',
        'name' => 'call',
        'required' => false
    ],
    'i_1' => [
        'label' => 'Chama Itens',
        'name' => 'call_items',
        'required' => false
    ]
])
<div class="row">
@include('admin.layouts.forms._image',[
    'label' => 'Ícone',
    'size' => '74px x 63px',
    'name' => 'icon',
    'path' => 'segment',
    'merge' => true,
    'route_destroy' => route('admin.segment.destroyFile', ['id' => isset($dados->id) ? $dados->id : null, 'name' => 'icon'])
])
@include('admin.layouts.forms._image',[
    'label' => 'Ícone Hover',
    'size' => '74px x 63px',
    'name' => 'icon_hover',
    'path' => 'segment',
    'merge' => true,
    'route_destroy' => route('admin.segment.destroyFile', ['id' => isset($dados->id) ? $dados->id : null, 'name' => 'icon_hover'])
])
</div>
@include('admin.layouts.forms._image',[
    'label' => 'Imagem',
    'size' => '950px x 800px',
    'name' => 'image',
    'path' => 'segment',
    'route_destroy' => route('admin.segment.destroyFile', ['id' => isset($dados->id) ? $dados->id : null, 'name' => 'image'])
])
@include('admin.layouts.forms._active_order')
@include('admin.layouts.forms._seo_keywords_description')
@include('admin.layouts.forms._seo_link')
@include('admin.layouts.forms._description')