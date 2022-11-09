@extends('layouts.app')

@section('template_title')
Indicator
@endsection

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">

                <span id="card_title">
                    {{ __('Indicator') }}
                </span>

                <div class="float-right">
                    <a href="{{ route('indicators.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                        {{ __('Create New') }}
                    </a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-sm">
                    <thead class="thead">
                        <tr>
                            <th>Id</th>
                            <th>Nombre Indicador</th>
                            <th>Codigo Indicador</th>
                            <th>Unidad Medida Indicador</th>
                            <th>Valor Indicador</th>
                            <th>Fecha Indicador</th>
                            <th>Tiempo Indicador</th>
                            <th>Origen Indicador</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($indicators as $indicator)
                        <tr>
                            <td>{{ $indicator->id }}</td>
                            <td>{{ $indicator->nombreIndicador }}</td>
                            <td>{{ $indicator->codigoIndicador }}</td>
                            <td>{{ $indicator->unidadMedidaIndicador }}</td>
                            <td>{{ number_format($indicator->valorIndicador, 2, ",", ".") }}</td>
                            <td>{{ $indicator->fechaIndicador }}</td>
                            <td>{{ $indicator->tiempoIndicador }}</td>
                            <td>{{ $indicator->origenIndicador }}</td>

                            <td>
                                <form action="{{ route('indicators.destroy',$indicator->id) }}" method="POST">
                                    <a class="btn btn-sm btn-primary " href="{{ route('indicators.show',$indicator->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                    <a class="btn btn-sm btn-success" href="{{ route('indicators.edit',$indicator->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $indicators->links() }}
        </div>
    </div>
</div>
@endsection