<div class="row">
    <div class="col-sm-12 text-right">
        <a href="{{ route('admin.segment.contact.index', ['id' => $idRoute]) }}" class="mb-xs mt-xs mr-xs btn btn-default"><i class="fa fa-envelope-o"></i> Contatos</a>
        <a href="{{ route('admin.segment.service.index', ['id' => $idRoute]) }}" class="mb-xs mt-xs mr-xs btn btn-default"><i class="fa fa-list-ol"></i> Serviços</a>
        <a href="{{ route('admin.segment.item.index', ['id' => $idRoute]) }}" class="mb-xs mt-xs mr-xs btn btn-default"><i class="fa fa-list-ul"></i> Itens</a>
        <a href="{{ $routeBack }}" class="mb-xs mt-xs mr-xs btn btn-default"><i class="fa fa-undo"></i> Voltar</a>
    </div>
</div>