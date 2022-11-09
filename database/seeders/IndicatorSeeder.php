<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Indicator;

class IndicatorSeeder extends Seeder
{
    /**
     * Seed the Indicators Table.
     *
     * @return void
     */
    public function run()
    {
        Indicator::truncate();

        $json = file_get_contents(storage_path('json/api_indicadores.json'));

        $indicators = json_decode($json);

        foreach ($indicators as $key => $value) {

            Indicator::create([

                "nombreIndicador" => $value->nombreIndicador,

                "codigoIndicador" => $value->codigoIndicador,

                "unidadMedidaIndicador" => $value->unidadMedidaIndicador,

                "valorIndicador" => $value->valorIndicador,

                "fechaIndicador" => $value->fechaIndicador,

                "tiempoIndicador" => $value->tiempoIndicador,

                "origenIndicador" => $value->origenIndicador

            ]);
        }
    }
}
