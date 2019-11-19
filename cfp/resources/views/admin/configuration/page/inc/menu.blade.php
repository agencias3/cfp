@if($idRoute == 2 || $idRoute == 4 || $idRoute == 7 || $idRoute == 8 || $idRoute == 9 || $idRoute == 10 || $idRoute == 11)
<div class="row">
    <div class="col-sm-12 text-right">
        @if($idRoute == 2 || $idRoute == 4 || $idRoute == 8 || $idRoute == 9 || $idRoute == 11)
        <a href="{{ route('admin.configuration.page.gallery.index', ['id' => $idRoute]) }}" class="mb-xs mt-xs mr-xs btn btn-default"><i class="fa fa-image"></i> Galeria</a>
        @endif
        @if($idRoute == 7 || $idRoute == 10)
            <a href="{{ route('admin.configuration.page.item.index', ['id' => $idRoute]) }}" class="mb-xs mt-xs mr-xs btn btn-default"><i class="fa fa-list-ul"></i> Itens</a>
        @endif
        <a href="{{ $routeBack }}" class="mb-xs mt-xs mr-xs btn btn-default"><i class="fa fa-undo"></i> Voltar</a>
    </div>
</div>
@endif