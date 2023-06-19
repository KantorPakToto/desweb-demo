<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Bsa1;
use App\Models\Bpk8;
use App\Models\Bsa10;
use App\Models\Bmj1;
use App\Models\Sensor;

class Pos extends BaseController
{
    public function index($id)
    {

        $sensors = new Sensor();
        $list = $sensors->where('pos', $id)->findall();

        if ($id == 'bsa1') {
            $model = new Bsa1();
            $json = $model->where('sensor', 'wlu')->orderBy('created_at', 'desc')->findall(10, 0);
            foreach (array_reverse($json) as $item) {
                $time = $item['created_at'];
                $arraydata[] = [$time, floatval($item['nilai'])];
            }
            $nilai1 = json_encode($arraydata, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

            $json = $model->where('sensor', 'wld')->orderBy('created_at', 'desc')->findall(10, 0);
            foreach (array_reverse($json) as $item) {
                $time = $item['created_at'];
                $arraydata2[] = [$time, floatval($item['nilai'])];
            }
            $nilai2 = json_encode($arraydata2, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

            helper('filesystem');
            $citra = scandir("./upload/$id/", SCANDIR_SORT_DESCENDING);
            $data = [
                'link' => 'pos',
                'pos'   => $id,
                'cctv' => $id . '/' . $citra[0],
                'waktu' => filemtime("./upload/$id/$citra[0]"),
                'grafik1' => $nilai1,
                'grafik2' => $nilai2,
                'sensor' => $list
            ];
        } else if ($id == 'bpk8') {
            $model = new Bpk8();
            $json = $model->where('sensor', 'wl1')->orderBy('created_at', 'desc')->findall(10, 0);
            foreach (array_reverse($json) as $item) {
                $time = $item['created_at'];
                $arraydata[] = [$time, floatval($item['nilai'])];
            }
            $nilai1 = json_encode($arraydata, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

            $json = $model->where('sensor', 'gt1')->orderBy('created_at', 'desc')->findall(10, 0);
            foreach (array_reverse($json) as $item) {
                $time = $item['created_at'];
                $arraydata2[] = [$time, floatval($item['nilai'])];
            }
            $nilai2 = json_encode($arraydata2, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

            $json = $model->where('sensor', 'gt2')->orderBy('created_at', 'desc')->findall(10, 0);
            foreach (array_reverse($json) as $item) {
                $time = $item['created_at'];
                $arraydata3[] = [$time, floatval($item['nilai'])];
            }
            $nilai3 = json_encode($arraydata2, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

            helper('filesystem');
            $citra = scandir("./upload/$id/", SCANDIR_SORT_DESCENDING);
            $data = [
                'link' => 'pos',
                'pos'   => $id,
                'cctv' => $id . '/' . $citra[0],
                'waktu' => filemtime("./upload/$id/$citra[0]"),
                'grafik1' => $nilai1,
                'grafik2' => $nilai2,
                'grafik3' => $nilai3,
                'sensor' => $list
            ];
        } else if ($id == 'bsa10') {
            $model = new Bsa10();
            $json = $model->where('sensor', 'wl1')->orderBy('created_at', 'desc')->findall(10, 0);
            foreach (array_reverse($json) as $item) {
                $time = $item['created_at'];
                $arraydata[] = [$time, floatval($item['nilai'])];
            }
            $nilai1 = json_encode($arraydata, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

            $json = $model->where('sensor', 'wl2')->orderBy('created_at', 'desc')->findall(10, 0);
            foreach (array_reverse($json) as $item) {
                $time = $item['created_at'];
                $arraydata2[] = [$time, floatval($item['nilai'])];
            }
            $nilai2 = json_encode($arraydata2, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

            $json = $model->where('sensor', 'wl3')->orderBy('created_at', 'desc')->findall(10, 0);
            foreach (array_reverse($json) as $item) {
                $time = $item['created_at'];
                $arraydata3[] = [$time, floatval($item['nilai'])];
            }
            $nilai3 = json_encode($arraydata3, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

            $json = $model->where('sensor', 'wl4')->orderBy('created_at', 'desc')->findall(10, 0);
            foreach (array_reverse($json) as $item) {
                $time = $item['created_at'];
                $arraydata4[] = [$time, floatval($item['nilai'])];
            }
            $nilai4 = json_encode($arraydata4, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

            $json = $model->where('sensor', 'wl2')->orderBy('created_at', 'desc')->findall(10, 0);
            foreach (array_reverse($json) as $item) {
                $time = $item['created_at'];
                $arraydata5[] = [$time, floatval($item['nilai'])];
            }
            $nilai5 = json_encode($arraydata5, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

            $json = $model->where('sensor', 'wl6')->orderBy('created_at', 'desc')->findall(10, 0);
            foreach (array_reverse($json) as $item) {
                $time = $item['created_at'];
                $arraydata6[] = [$time, floatval($item['nilai'])];
            }
            $nilai6 = json_encode($arraydata6, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

            helper('filesystem');
            $citra = scandir("./upload/$id/", SCANDIR_SORT_DESCENDING);
            $data = [
                'link' => 'pos',
                'pos'   => $id,
                'cctv' => $id . '/' . $citra[0],
                'waktu' => filemtime("./upload/$id/$citra[0]"),
                'grafik1' => $nilai1,
                'grafik2' => $nilai2,
                'grafik3' => $nilai3,
                'grafik4' => $nilai4,
                'grafik5' => $nilai5,
                'grafik6' => $nilai6,
                'sensor' => $list
            ];
        } else if ($id == 'bmj1') {
            $model = new Bsa1();
            $json = $model->where('sensor', 'wlu')->orderBy('created_at', 'desc')->findall(10, 0);
            foreach (array_reverse($json) as $item) {
                $time = $item['created_at'];
                $arraydata[] = [$time, floatval($item['nilai'])];
            }
            $nilai1 = json_encode($arraydata, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

            $json = $model->where('sensor', 'wld')->orderBy('created_at', 'desc')->findall(10, 0);
            foreach (array_reverse($json) as $item) {
                $time = $item['created_at'];
                $arraydata2[] = [$time, floatval($item['nilai'])];
            }
            $nilai2 = json_encode($arraydata2, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

            helper('filesystem');
            $citra = scandir("./upload/$id/", SCANDIR_SORT_DESCENDING);
            $data = [
                'link' => 'pos',
                'pos'   => $id,
                'cctv' => $id . '/' . $citra[0],
                'waktu' => filemtime("./upload/$id/$citra[0]"),
                'grafik1' => $nilai1,
                'grafik2' => $nilai2,
                'sensor' => $list
            ];
        }

        return view('pos', $data);
    }
}
