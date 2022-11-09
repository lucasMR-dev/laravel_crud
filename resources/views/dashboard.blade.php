@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col"><span>From:</span><input type="date" id="fromDate"></div>
                        <div class="col"><span>To: </span><input type="date" id="toDate"></div>
                        <div class="col">
                            <button type="button" id="btnFilter" class="btn btn-primary">Filter</button>
                        </div>
                    </div>
                    <div style="position: relative; width: auto; margin: auto;">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection