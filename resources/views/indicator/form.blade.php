<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('nombre Indicador') }}
            {{ Form::text('nombreIndicador', $indicator->nombreIndicador, ['class' => 'form-control' . ($errors->has('nombreIndicador') ? ' is-invalid' : ''), 'placeholder' => 'Nombreindicador']) }}
            {!! $errors->first('nombreIndicador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigo Indicador') }}
            <!-- Custom Select -->
            <?php
            $options = array('LIBRA_COBRE', 'EURO', 'DOLAR', 'TPM', 'UTM', 'IVP', 'UF', 'BITCOIN', 'IPC', 'TASA_DESEMPLEO', 'IMACEC');
            echo "<select name='codigoIndicador' class='form-control'>";
            foreach ($options as $option) {
                if ($indicator->codigoIndicador == $option) {
                    echo "<option selected='selected' value='$option'>$option</option>";
                } else {
                    echo "<option value='$option'>$option</option>";
                }
            }
            echo "</select>";
            ?>
            {!! $errors->first('codigoIndicador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('unidad Medida Indicador') }}
            <!-- Custom Select -->
            <?php
            $options = array('Pesos', 'Dólar', 'Porcentaje');
            echo "<select name='unidadMedidaIndicador' class='form-control'>";
            foreach ($options as $option) {
                if ($indicator->unidadMedidaIndicador == $option) {
                    echo "<option selected='selected' value='$option'>$option</option>";
                } else {
                    echo "<option value='$option'>$option</option>";
                }
            }
            echo "</select>";
            ?>
            {!! $errors->first('unidadMedidaIndicador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valor Indicador') }}
            {{ Form::text('valorIndicador', $indicator->valorIndicador, ['class' => 'form-control' . ($errors->has('valorIndicador') ? ' is-invalid' : ''), 'placeholder' => 'Valorindicador']) }}
            {!! $errors->first('valorIndicador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha Indicador') }}
            <!-- Custom Date picker -->
            <input type="date" name="fechaIndicador" class="form-control" value="{{ $indicator->fechaIndicador }}" />
            {!! $errors->first('fechaIndicador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tiempo Indicador') }}
            {{ Form::text('tiempoIndicador', $indicator->tiempoIndicador, ['class' => 'form-control' . ($errors->has('tiempoIndicador') ? ' is-invalid' : ''), 'placeholder' => 'Tiempoindicador']) }}
            {!! $errors->first('tiempoIndicador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('origen Indicador') }}
            {{ Form::text('origenIndicador', $indicator->origenIndicador, ['class' => 'form-control' . ($errors->has('origenIndicador') ? ' is-invalid' : ''), 'placeholder' => 'Origenindicador']) }}
            {!! $errors->first('origenIndicador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>