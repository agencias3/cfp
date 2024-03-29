@extends('admin.layouts.app')
@section('content')
    <section role="main" class="content-body">
        @include('admin.layouts._page_header')
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">{{ $config['title'].' > '.$config['action'] }}</h2>
            </header>
            {!! Form::open(['route'=>'admin.service.segment.store', 'files'=> true]) !!}
                <div class="panel-body">

                    @include('admin.layouts._msg')
                    @include('admin.modals._delete')

                    <?php
                    $idRoute = $id;
                    $routeBack = route('admin.service.edit', ['id' => $id]);
                    ?>

                    @include('admin.service.inc.menu')

                    @include('admin.service.segment._form')
                </div>
                <footer class="panel-footer text-right">
                    <button type="submit" class="btn btn-raised btn-success waves-effect waves-light">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Adicionar
                    </button>
                </footer>
            {!! Form::close() !!}
        </section>
        @if(!$dados->isEmpty())
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Segmentos</h2>
            </header>
            <div class="panel-body">
                <table class="table table-no-more table-bordered table-striped mb-0">
                    <thead>
                    <tr>
                        <th>Segmento</th>
                        <th class="col-md-2 text-center">Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($dados as $row)
                        <tr>
                            <td data-title="Segmento">{{ $row->segment->name }}</td>
                            <td data-title="Ação" class="actions text-center">
                                <a href="#modalDestroy" data-route="{{ route('admin.service.segment.destroy', ['id' => $row->id]) }}" class="excluir remove-row btn btn-danger white" title="Excluir">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
        @endif
    </section>
@endsection
