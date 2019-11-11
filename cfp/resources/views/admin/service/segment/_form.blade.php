<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('segment_id', 'Segmento? *') !!}
            <select class="form-control" required="required" id="segment_id" name="segment_id">
                <option value="">Selecione</option>
                @foreach($arraySelect as $row)
                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    {!! Form::hidden('service_id', $id, ['required' => 'required']) !!}
</div>
<br />