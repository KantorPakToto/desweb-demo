<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Bsa1;
use App\Models\Bpk8;
use App\Models\Bsa10;
use App\Models\Bmj1;
use App\Models\Sensor;

class Grafik extends BaseController
{

    public function index($id, $sensor)
    {
        if ($id == 'bsa1') {
            $model = new Bsa1();
        } else if ($id == 'bpk8') {
            $model = new Bpk8();
        } else if ($id == 'bsa10') {
            $model = new Bsa10();
        } else if ($id == 'bmj1') {
            $model = new Bmj1();
        }
        $sensors = new Sensor();

        $json = $model->where('sensor', $sensor)->findall();

        foreach ($json as $item) {
            $time = $item['created_at'];
            $arraydata[] = [$time, floatval($item['nilai'])];
        }
        $nilai = json_encode($arraydata, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

        $data = [
            'link' => 'grafik',
            'pos'   => $id,
            'data' => $nilai,
            'tabel' => $json,
            'sensor' => $sensors->where('pos', $id)->findall()
        ];
        return view('grafik', $data);
        // echo ($json[0]['nilai']);
    }
}
