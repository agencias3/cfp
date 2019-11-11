<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('service_id', 'Serviço? *') !!}
            <select class="form-control" required="required" id="service_id" name="service_id">
                <option value="">Selecione</option>
                @foreach($arraySelect as $row)
                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    {!! Form::hidden('segment_id', $id, ['required' => 'required']) !!}
</div>
<br />