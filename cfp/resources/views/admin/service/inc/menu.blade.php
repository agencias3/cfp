<div class="row">
    <div class="col-sm-12 text-right">
        <a href="{{ route('admin.service.contact.index', ['id' => $idRoute]) }}" class="mb-xs mt-xs mr-xs btn btn-default"><i class="fa fa-envelope-o"></i> Contato</a>
        <a href="{{ route('admin.service.segment.index', ['id' => $idRoute]) }}" class="mb-xs mt-xs mr-xs btn btn-default"><i class="fa fa-list-alt"></i> Segmentos</a>
        <a href="{{ route('admin.service.item.index', ['id' => $idRoute]) }}" class="mb-xs mt-xs mr-xs btn btn-default"><i class="fa fa-list-ul"></i> Itens</a>
        <a href="{{ $routeBack }}" class="mb-xs mt-xs mr-xs btn btn-default"><i class="fa fa-undo"></i> Voltar</a>
    </div>
</div>