@include('admin.layouts.forms._name')
@if(isset($dados))
    @if($dados->id == 1 || $dados->id == 2)
        @include('admin.layouts.forms._image',[
            'label' => 'Imagem',
            'size' => $imageSize,
            'name' => 'image',
            'path' => 'page',
            'route_destroy' => route('admin.configuration.page.destroyFile', ['id' => isset($dados->id) ? $dados->id : null, 'name' => 'image'])
        ])
    @endif
    @if($dados->id != 7 && $dados->id != 8)
        @include('admin.layouts.forms._description')
    @endif
@endif