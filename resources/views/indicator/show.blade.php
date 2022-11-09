@extends('layouts.app')

@section('template_title')
    {{ $indicator->name ?? 'Show Indicator' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Indicator</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('indicators.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombreindicador:</strong>
                            {{ $indicator->nombreIndicador }}
                        </div>
                        <div class="form-group">
                            <strong>Codigoindicador:</strong>
                            {{ $indicator->codigoIndicador }}
                        </div>
                        <div class="form-group">
                            <strong>Unidadmedidaindicador:</strong>
                            {{ $indicator->unidadMedidaIndicador }}
                        </div>
                        <div class="form-group">
                            <strong>Valorindicador:</strong>
                            {{ $indicator->valorIndicador }}
                        </div>
                        <div class="form-group">
                            <strong>Fechaindicador:</strong>
                            {{ $indicator->fechaIndicador }}
                        </div>
                        <div class="form-group">
                            <strong>Tiempoindicador:</strong>
                            {{ $indicator->tiempoIndicador }}
                        </div>
                        <div class="form-group">
                            <strong>Origenindicador:</strong>
                            {{ $indicator->origenIndicador }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
