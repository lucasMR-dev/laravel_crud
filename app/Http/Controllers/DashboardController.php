<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Indicator;

/**
 * Class DashboardController
 * @package App\Http\Controllers
 */
class DashboardController extends Controller
{

    /**
     * Return All Dataset
     * @return Response
     */

    public function all()
    {
        $indicator = Indicator::where('codigoIndicador', 'UF')->orderBy('fechaIndicador', 'asc')->get();
        $labels = [];
        $data = [];
        foreach ($indicator as $uf) {
            $labels[] = $uf->fechaIndicador;
            $data[] = $uf->valorIndicador;
        }
        return response()->json(['data' => $data, 'labels' =>  $labels]);
    }

    /**
     * Return filtered Dataset
     * @return \Illuminate\Http\Response
     */
    public function filtered(Request $request)
    {
        try {
            $data = [];
            $labels = [];
            $from_date = $request->from_date;
            $to_date = $request->to_date;
            $indicator = Indicator::where('codigoIndicador', 'UF')->whereBetween('fechaIndicador', [$from_date, $to_date])->orderBy('fechaIndicador', 'asc')->get();
            foreach ($indicator as $uf) {
                $labels[] = $uf->fechaIndicador;
                $data[] = $uf->valorIndicador;
            }
            return response()->json(['data' => $data, 'labels' => $labels]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
