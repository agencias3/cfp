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
        'path' => 'service',
        'merge' => true,
        'route_destroy' => route('admin.service.destroyFile', ['id' => isset($dados->id) ? $dados->id : null, 'name' => 'file'])
    ])
    @include('admin.layouts.forms._image',[
        'label' => 'Imagem',
        'size' => '1920px x 380px',
        'name' => 'image',
        'path' => 'service',
        'merge' => true,
        'route_destroy' => route('admin.service.destroyFile', ['id' => isset($dados->id) ? $dados->id : null, 'name' => 'file'])
    ])
</div>
@include('admin.layouts.forms._active_order')
@include('admin.layouts.forms._seo_keywords_description')
@include('admin.layouts.forms._seo_link')
@include('admin.layouts.forms._description')