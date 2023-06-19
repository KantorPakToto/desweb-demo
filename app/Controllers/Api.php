<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Bsa1;
use App\Models\Bsa10;
use App\Models\Bpk8;
use App\Models\Bmj1;
use App\Models\DebitBsa1;
use App\Models\DebitBsa10;
use App\Models\DebitBpk8;
use App\Models\DebitBmj1;
use App\Models\Weather;
use Bluerhinos\phpMQTT;



class Api extends BaseController
{
    public $server = 'brg-gateway.net';     // change if necessary
    public $port = 1883;                     // change if necessary
    public $username = 'alpha';                   // set your username
    public $password = 'alpha';                   // set your password
    public $client_id = 'subscriber';

    public function index()
    {
        return 'Ya? Ada yang bisa saya bantu?';
    }

    public function service_bsa1()
    {
        $mqtt = new phpMQTT($this->server, $this->port, $this->client_id);
        if (!$mqtt->connect(true, NULL, $this->username, $this->password)) {
            exit(1);
        }
        $topics["BSa1/sensors/wlu"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa1($sensor[2], floatval($msg));
            }
        );
        $topics["BSa1/sensors/wld"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa1($sensor[2], floatval($msg));
            }
        );
        $topics["BSa1/sensors/gt1"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa1($sensor[2], floatval($msg));
            }
        );
        $topics["BSa1/sensors/gt2"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa1($sensor[2], floatval($msg));
            }
        );
        $topics["BSa1/sensors/gt3"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa1($sensor[2], floatval($msg));
            }
        );
        $topics["BSa1/sensors/gt4"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa1($sensor[2], floatval($msg));
                exit();
            }
        );
        $mqtt->subscribe($topics, 0);
        while ($mqtt->proc()) {
        }
        $mqtt->close();
    }

    public function service_bsa10()
    {
        $mqtt = new phpMQTT($this->server, $this->port, $this->client_id);
        if (!$mqtt->connect(true, NULL, $this->username, $this->password)) {
            exit(1);
        }
        $topics["BSa10/sensors/wl1"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/wl2"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/wl3"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/wl4"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/wl5"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/wl6"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/gt1"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/gt2"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/gt3"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/gt4"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/gt5"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/gt6"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/gt7"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/gt8"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/gt9"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/gt10"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
                exit();
            }
        );
        $mqtt->subscribe($topics, 0);
        while ($mqtt->proc()) {
        }
        $mqtt->close();
    }

    public function service_bpk8()
    {
        $mqtt = new phpMQTT($this->server, $this->port, $this->client_id);
        if (!$mqtt->connect(true, NULL, $this->username, $this->password)) {
            exit(1);
        }
        $topics["BPk8/sensors/wl1"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bpk8($sensor[2], floatval($msg));
            }
        );
        $topics["BPk8/sensors/wl2"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bpk8($sensor[2], floatval($msg));
            }
        );
        $topics["BPk8/sensors/wl3"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bpk8($sensor[2], floatval($msg));
            }
        );
        $topics["BPk8/sensors/wl4"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bpk8($sensor[2], floatval($msg));
            }
        );
        $topics["BPk8/sensors/wl5"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bpk8($sensor[2], floatval($msg));
            }
        );
        $topics["BPk8/sensors/gt1"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bpk8($sensor[2], floatval($msg));
            }
        );
        $topics["BPk8/sensors/gt2"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bpk8($sensor[2], floatval($msg));
            }
        );
        $topics["BPk8/sensors/gt3"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bpk8($sensor[2], floatval($msg));
            }
        );
        $topics["BPk8/sensors/gt4"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bpk8($sensor[2], floatval($msg));
            }
        );
        $topics["BPk8/sensors/gt5"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bpk8($sensor[2], floatval($msg));
            }
        );
        $topics["BPk8/sensors/gt6"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bpk8($sensor[2], floatval($msg));
            }
        );
        $topics["BPk8/sensors/gt7"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bpk8($sensor[2], floatval($msg));
            }
        );
        $topics["BPk8/sensors/gt8"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bpk8($sensor[2], floatval($msg));
            }
        );
        $topics["BPk8/sensors/gt9"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bpk8($sensor[2], floatval($msg));
                exit(1);
            }
        );

        $mqtt->subscribe($topics, 0);
        while ($mqtt->proc()) {
        }
        $mqtt->close();
    }

    public function service_bmj1()
    {
        $mqtt = new phpMQTT($this->server, $this->port, $this->client_id);
        if (!$mqtt->connect(true, NULL, $this->username, $this->password)) {
            exit(1);
        }
        $topics["BMj1/sensors/wlu"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bmj1($sensor[2], floatval($msg));
            }
        );
        $topics["BMj1/sensors/wld"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bmj1($sensor[2], floatval($msg));
            }
        );
        $topics["BMj1/sensors/gt1"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bmj1($sensor[2], floatval($msg));
                exit(1);
            }
        );
        $mqtt->subscribe($topics, 0);
        while ($mqtt->proc()) {
        }
        $mqtt->close();
    }

    // ====================== Insert Data ==============================
    public function bsa1($sensor, $nilai)
    {
        $model = new bsa1();
        $data = [
            'sensor' => $sensor,
            'nilai' => $nilai,
        ];
        $model->save($data);

        return print_r($data);
    }
    public function bsa10($sensor, $nilai)
    {
        $model = new bsa10();
        $data = [
            'sensor' => $sensor,
            'nilai' => $nilai,
        ];
        $model->save($data);
        return print_r($data);
    }
    public function bpk8($sensor, $nilai)
    {
        $model = new bpk8();
        $data = [
            'sensor' => $sensor,
            'nilai' => $nilai,
        ];
        $model->save($data);
        return print_r($data);
    }
    public function bmj1($sensor, $nilai)
    {
        $model = new bmj1();
        $data = [
            'sensor' => $sensor,
            'nilai' => $nilai,
        ];
        $model->save($data);
        return print_r($data);
    }

    // =========================Get Data=========================

    public function get_bsa1($sensor)
    {
        $model = new bsa1();
        $data = $model->where('sensor', $sensor)->orderBy('created_at', 'desc')->first();
        return $this->response->setJSON($data);
    }

    public function get_bsa10($sensor)
    {
        $model = new bsa10();
        $data = $model->where('sensor', $sensor)->orderBy('created_at', 'desc')->first();
        return $this->response->setJSON($data);
    }

    public function get_bpk8($sensor)
    {
        $model = new bpk8();
        $data = $model->where('sensor', $sensor)->orderBy('created_at', 'desc')->first();
        return $this->response->setJSON($data);
    }

    public function get_bmj1($sensor)
    {
        $model = new bmj1();
        $data = $model->where('sensor', $sensor)->orderBy('created_at', 'desc')->first();
        return $this->response->setJSON($data);
    }


    // ===================== Hitung Debit===========================
    public function debit_bsa1()
    {
        $model1 = new bsa1();
        $model2 = new debitbsa1();
        $data = $model1->where('sensor', 'wlu')->orderBy('created_at', 'desc')->first();
        $wlu = floatval($data['nilai']) / 100;

        $data = $model1->where('sensor', 'gt1')->orderBy('created_at', 'desc')->first();
        $gt1 = floatval($data['nilai']) / 100;
        $debit = (13.52 * $gt1 * sqrt($wlu - $gt1));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt2')->orderBy('created_at', 'desc')->first();
        $gt2 = floatval($data['nilai']) / 100;
        $debit = (13.52 * $gt2 * sqrt($wlu - $gt2));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt3')->orderBy('created_at', 'desc')->first();
        $gt3 = floatval($data['nilai']) / 100;
        $debit = (13.52 * $gt3 * sqrt($wlu - $gt3));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt4')->orderBy('created_at', 'desc')->first();
        $gt4 = floatval($data['nilai']) / 100;
        $debit = (13.52 * $gt4 * sqrt($wlu - $gt4));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);
    }


    public function debit_bsa10()
    {
        $model1 = new bsa10();
        $model2 = new debitbsa10();
        $data = $model1->where('sensor', 'wl1')->orderBy('created_at', 'desc')->first();
        $wlu = floatval($data['nilai']) / 100;

        $data = $model1->where('sensor', 'gt1')->orderBy('created_at', 'desc')->first();
        $gt1 = floatval($data['nilai']) / 100;
        $debit = (0.44 * 1.5 * $gt1 * sqrt(2 * 9.8 * $wlu));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt2')->orderBy('created_at', 'desc')->first();
        $gt2 = floatval($data['nilai']) / 100;
        $debit = (0.335 * 1.5 * $gt2 * sqrt(2 * 9.8 * $wlu));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt3')->orderBy('created_at', 'desc')->first();
        $gt3 = floatval($data['nilai']) / 100;
        $debit = (0.335 * 1.5 * $gt3 * sqrt(2 * 9.8 * $wlu));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt4')->orderBy('created_at', 'desc')->first();
        $gt4 = floatval($data['nilai']) / 100;
        $debit = (1.71 * 0.9 * sqrt(pow($wlu, 3)));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt5')->orderBy('created_at', 'desc')->first();
        $gt5 = floatval($data['nilai']) / 100;
        $z = $wlu - $gt5;
        $debit = (0.88 * 1.5 * $gt5 * sqrt(2 * 9.8 * abs($wlu - $gt5)));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt6')->orderBy('created_at', 'desc')->first();
        $gt6 = floatval($data['nilai']) / 100;
        $debit = (0.88 * 1.5 * $gt6 * sqrt(2 * 9.8 * abs($wlu - $gt6)));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt7')->orderBy('created_at', 'desc')->first();
        $gt7 = floatval($data['nilai']) / 100;
        $debit = (0.758 * 1.5 * $gt7 * sqrt(2 * 9.8 * abs($wlu - $gt7)));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt8')->orderBy('created_at', 'desc')->first();
        $gt8 = floatval($data['nilai']) / 100;
        $debit = (0.758 * 1.5 * $gt8 * sqrt(2 * 9.8 * abs($wlu - $gt8)));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt9')->orderBy('created_at', 'desc')->first();
        $gt9 = floatval($data['nilai']) / 100;
        $debit = (0.758 * 1.5 * $gt9 * sqrt(2 * 9.8 * abs($wlu - $gt9)));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt10')->orderBy('created_at', 'desc')->first();
        $gt10 = floatval($data['nilai']) / 100;
        $debit = (0.758 * 1.5 * $gt10 * sqrt(2 * 9.8 * abs($wlu - $gt10)));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);
    }

    public function debit_bpk8()
    {
        $model1 = new bpk8();
        $model2 = new debitbpk8();
        $data = $model1->where('sensor', 'wl1')->orderBy('created_at', 'desc')->first();
        $wlu = floatval($data['nilai']) / 100;

        $data = $model1->where('sensor', 'gt1')->orderBy('created_at', 'desc')->first();
        $gt1 = floatval($data['nilai']) / 100;
        $debit = (0.25 * 1.2 * $gt1 * sqrt(2 * 9.8 * $wlu));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt2')->orderBy('created_at', 'desc')->first();
        $gt2 = floatval($data['nilai']) / 100;
        $debit = (0.25 * 1.2 * $gt2 * sqrt(2 * 9.8 * $wlu));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt3')->orderBy('created_at', 'desc')->first();
        $gt3 = floatval($data['nilai']) / 100;
        $debit = (0.525 * 1.2 * $gt3 * sqrt(2 * 9.8 * $wlu));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt4')->orderBy('created_at', 'desc')->first();
        $gt4 = floatval($data['nilai']) / 100;
        $debit = (0.525 * 1.2 * $gt4 * sqrt(2 * 9.8 * $wlu));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt5')->orderBy('created_at', 'desc')->first();
        $gt5 = floatval($data['nilai']) / 100;
        $debit = (0.585 * 0.6 * $gt5 * sqrt(2 * 9.8 * abs($wlu - $gt5)));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt6')->orderBy('created_at', 'desc')->first();
        $gt6 = floatval($data['nilai']) / 100;
        $debit = (0.202 * 0.6 * $gt6 * sqrt(2 * 9.8 * $wlu));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt7')->orderBy('created_at', 'desc')->first();
        $gt7 = floatval($data['nilai']) / 100;
        $debit = (0.5 * 1.2 * $gt7 * sqrt(2 * 9.8 * $wlu));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt8')->orderBy('created_at', 'desc')->first();
        $gt8 = floatval($data['nilai']) / 100;
        $debit = (0.5 * 1.2 * $gt8 * sqrt(2 * 9.8 * $wlu));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt9')->orderBy('created_at', 'desc')->first();
        $gt9 = floatval($data['nilai']) / 100;
        $debit = (0.5 * 1.2 * $gt9 * sqrt(2 * 9.8 * $wlu));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);
    }


    public function debit_bmj1()
    {
        $model1 = new bmj1();
        $model2 = new debitbmj1();
        $data = $model1->where('sensor', 'wlu')->orderBy('created_at', 'desc')->first();
        $wlu = floatval($data['nilai']) / 100;

        $data = $model1->where('sensor', 'gt1')->orderBy('created_at', 'desc')->first();
        $gt1 = floatval($data['nilai']) / 100;
        $debit = (0.585 * 0.44 * $gt1 * sqrt(2 * 9.8 * abs($wlu - $gt1)));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);
    }

    public function get_debit_bsa1($sensor)
    {
        $model = new debitbsa1();
        $data = $model->where('gate', $sensor)->orderBy('created_at', 'desc')->first();
        return $this->response->setJSON($data);
    }

    public function get_debit_bsa10($sensor)
    {
        $model = new debitbsa10();
        $data = $model->where('gate', $sensor)->orderBy('created_at', 'desc')->first();
        return $this->response->setJSON($data);
    }

    public function get_debit_bpk8($sensor)
    {
        $model = new debitbpk8();
        $data = $model->where('gate', $sensor)->orderBy('created_at', 'desc')->first();
        return $this->response->setJSON($data);
    }

    public function get_debit_bmj1($sensor)
    {
        $model = new debitbmj1();
        $data = $model->where('gate', $sensor)->orderBy('created_at', 'desc')->first();
        return $this->response->setJSON($data);
    }

    public function get_supply_bsa1()
    {
        $model = new debitbsa1();
        $data1 = $model->where('gate', 'gt1')->orderBy('created_at', 'desc')->first();
        $data2 = $model->where('gate', 'gt2')->orderBy('created_at', 'desc')->first();
        $data3 = $model->where('gate', 'gt3')->orderBy('created_at', 'desc')->first();
        $data4 = $model->where('gate', 'gt4')->orderBy('created_at', 'desc')->first();
        $data['nilai'] = (round($data1['debit'] + $data2['debit'] + $data3['debit'] + $data4['debit'], 3));
        return $this->response->setJSON($data);
    }

    public function get_supply_bpk8()
    {
        $model = new debitbpk8();
        $data1 = $model->where('gate', 'gt1')->orderBy('created_at', 'desc')->first();
        $data2 = $model->where('gate', 'gt2')->orderBy('created_at', 'desc')->first();
        $data3 = $model->where('gate', 'gt3')->orderBy('created_at', 'desc')->first();
        $data4 = $model->where('gate', 'gt4')->orderBy('created_at', 'desc')->first();
        $data['nilai'] = (round($data1['debit'] + $data2['debit'] + $data3['debit'] + $data4['debit'], 3));
        return $this->response->setJSON($data);
    }

    public function get_supply_bsa10()
    {
        $model = new debitbsa10();
        $data1 = $model->where('gate', 'gt1')->orderBy('created_at', 'desc')->first();
        $data2 = $model->where('gate', 'gt2')->orderBy('created_at', 'desc')->first();
        $data3 = $model->where('gate', 'gt3')->orderBy('created_at', 'desc')->first();
        $data4 = $model->where('gate', 'gt4')->orderBy('created_at', 'desc')->first();
        $data5 = $model->where('gate', 'gt5')->orderBy('created_at', 'desc')->first();
        $data6 = $model->where('gate', 'gt6')->orderBy('created_at', 'desc')->first();
        $data7 = $model->where('gate', 'gt7')->orderBy('created_at', 'desc')->first();
        $data8 = $model->where('gate', 'gt8')->orderBy('created_at', 'desc')->first();
        $data9 = $model->where('gate', 'gt9')->orderBy('created_at', 'desc')->first();
        $data10 = $model->where('gate', 'gt10')->orderBy('created_at', 'desc')->first();
        $data['nilai'] = (round($data1['debit'] + $data2['debit'] + $data3['debit'] + $data4['debit'] + $data5['debit'] + $data6['debit'] + $data7['debit'] + $data8['debit'] + $data9['debit'] + $data10['debit'], 3));
        return $this->response->setJSON($data);
    }

    public function get_weather()
    {
        $model = new Weather();
        $data = $model->orderBy('created_at', 'desc')->first();
        return $this->response->setJSON($data);
    }

    public function send_sipasi()
    {
        $USER_KEY = 'a1244e12f5467458D5mb8568565';  //base_64 IP+User_id sipasi
        $url = 'https://sdg.sipasi.online/api?api_key=' . $USER_KEY;

        $model = new Weather();
        $data = $model->orderBy('created_at', 'desc')->first();

        $AWS = array(
            'sensor'        => 'AWS',
            'client_id'        => 'AWS_SADDANG_01',
            'name'            => 'AWS_SADDANG',
            'fid'            => '45',
            'location_id'    => 'AWS_Bendung',
            'time_record'    => $data['created_at'],
            'SR'            => $data['solar_rad'],
            'PA'            => $data['barometer'],
            'TA'            => $data['temperature'],
            'TMIN'            => $data['temperature'],
            'TMAX'            => $data['temperature'],
            'RH'            => $data['humidity'],
            'RN'            => $data['rainfall'],
            'WS'            => $data['wind_speed'],
            'WD'            => $data['wind_dir'],
            'cb'            => '1'
        );

        $list_data = $AWS; // $AWS | $AWLR
        $POST_FILE = '';
        foreach ($list_data as $key => $value) {
            $POST_FILE .= '&' . $key . '=' . $value;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $POST_FILE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);
        print $result;
        // exit();

        // ================================================================================================

        $model = new debitbsa1();
        $data1 = $model->where('gate', 'gt1')->orderBy('created_at', 'desc')->first();
        $data2 = $model->where('gate', 'gt2')->orderBy('created_at', 'desc')->first();
        $data3 = $model->where('gate', 'gt3')->orderBy('created_at', 'desc')->first();
        $data4 = $model->where('gate', 'gt4')->orderBy('created_at', 'desc')->first();
        $model = new bsa1();
        $data1b = $model->where('sensor', 'wld')->orderBy('created_at', 'desc')->first();
        $data2b = $model->where('sensor', 'wld')->orderBy('created_at', 'desc')->first();
        $data3b = $model->where('sensor', 'wld')->orderBy('created_at', 'desc')->first();
        $data4b = $model->where('sensor', 'wld')->orderBy('created_at', 'desc')->first();
        $data1['debit'] = $data1['debit'] < 0 ? 0 : $data1['debit'];
        $data2['debit'] = $data2['debit'] < 0 ? 0 : $data2['debit'];
        $data3['debit'] = $data3['debit'] < 0 ? 0 : $data3['debit'];
        $data4['debit'] = $data4['debit'] < 0 ? 0 : $data4['debit'];
        $data1b['nilai'] = $data1b['nilai'] < 0 ? 0 : $data1b['nilai'];
        $data2b['nilai'] = $data2b['nilai'] < 0 ? 0 : $data2b['nilai'];
        $data3b['nilai'] = $data3b['nilai'] < 0 ? 0 : $data3b['nilai'];
        $data4b['nilai'] = $data4b['nilai'] < 0 ? 0 : $data4b['nilai'];

        $AWLR = array(
            'sensor' => 'AWLR',
            'client_id' => 'INTAKE_Gate_1234',
            'name' => 'WL_GATE_BSa1_Intake_Sawito',
            'fid' => 45,
            'location_id' => 'INTAKE',
            'time_record' => $data1['created_at'],
            'tma' => $data1b['nilai'],
            'gate_number' => 'gate_1',
            'discharge' => $data1['debit'],
            'cb' => 1,
        );

        $list_data = $AWLR; // $AWS | $AWLR
        $POST_FILE = '';
        foreach ($list_data as $key => $value) {
            $POST_FILE .= '&' . $key . '=' . $value;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $POST_FILE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);
        print $result;

        $AWLR = array(
            'sensor' => 'AWLR',
            'client_id' => 'INTAKE_Gate_1234',
            'name' => 'WL_GATE_BSa1_Intake_Sawito',
            'fid' => 45,
            'location_id' => 'INTAKE',
            'time_record' => $data2['created_at'],
            'tma' => $data2b['nilai'],
            'gate_number' => 'gate_2',
            'discharge' => $data2['debit'],
            'cb' => 1,
        );

        $list_data = $AWLR; // $AWS | $AWLR
        $POST_FILE = '';
        foreach ($list_data as $key => $value) {
            $POST_FILE .= '&' . $key . '=' . $value;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $POST_FILE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);
        print $result;

        $AWLR = array(
            'sensor' => 'AWLR',
            'client_id' => 'INTAKE_Gate_1234',
            'name' => 'WL_GATE_BSa1_Intake_Sawito',
            'fid' => 45,
            'location_id' => 'INTAKE',
            'time_record' => $data3['created_at'],
            'tma' => $data3b['nilai'],
            'gate_number' => 'gate_3',
            'discharge' => $data3['debit'],
            'cb' => 1,
        );

        $list_data = $AWLR; // $AWS | $AWLR
        $POST_FILE = '';
        foreach ($list_data as $key => $value) {
            $POST_FILE .= '&' . $key . '=' . $value;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $POST_FILE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);
        print $result;

        $AWLR = array(
            'sensor' => 'AWLR',
            'client_id' => 'INTAKE_Gate_1234',
            'name' => 'WL_GATE_BSa1_Intake_Sawito',
            'fid' => 45,
            'location_id' => 'INTAKE',
            'time_record' => $data4['created_at'],
            'tma' => $data4b['nilai'],
            'gate_number' => 'gate_4',
            'discharge' => $data4['debit'],
            'cb' => 1,
        );

        $list_data = $AWLR; // $AWS | $AWLR
        $POST_FILE = '';
        foreach ($list_data as $key => $value) {
            $POST_FILE .= '&' . $key . '=' . $value;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $POST_FILE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);
        print $result;

        // ================================================================================================

        $model = new debitbpk8();
        $data1 = $model->where('gate', 'gt1')->orderBy('created_at', 'desc')->first();
        $data2 = $model->where('gate', 'gt2')->orderBy('created_at', 'desc')->first();
        $data3 = $model->where('gate', 'gt3')->orderBy('created_at', 'desc')->first();
        $data4 = $model->where('gate', 'gt4')->orderBy('created_at', 'desc')->first();
        $data5 = $model->where('gate', 'gt5')->orderBy('created_at', 'desc')->first();
        $model = new bpk8();
        $data1b = $model->where('sensor', 'wl2')->orderBy('created_at', 'desc')->first();
        $data2b = $model->where('sensor', 'wl2')->orderBy('created_at', 'desc')->first();
        $data3b = $model->where('sensor', 'wl3')->orderBy('created_at', 'desc')->first();
        $data4b = $model->where('sensor', 'wl3')->orderBy('created_at', 'desc')->first();
        $data5b = $model->where('sensor', 'wl4')->orderBy('created_at', 'desc')->first();

        $data1['debit'] = $data1['debit'] < 0 ? 0 : $data1['debit'];
        $data2['debit'] = $data2['debit'] < 0 ? 0 : $data2['debit'];
        $data3['debit'] = $data3['debit'] < 0 ? 0 : $data3['debit'];
        $data4['debit'] = $data4['debit'] < 0 ? 0 : $data4['debit'];
        $data5['debit'] = $data5['debit'] < 0 ? 0 : $data5['debit'];
        $data1b['nilai'] = $data1b['nilai'] < 0 ? 0 : $data1b['nilai'];
        $data2b['nilai'] = $data2b['nilai'] < 0 ? 0 : $data2b['nilai'];
        $data3b['nilai'] = $data3b['nilai'] < 0 ? 0 : $data3b['nilai'];
        $data4b['nilai'] = $data4b['nilai'] < 0 ? 0 : $data4b['nilai'];
        $data5b['nilai'] = $data5b['nilai'] < 0 ? 0 : $data5b['nilai'];

        $AWLR = array(
            'sensor' => 'AWLR',
            'client_id' => 'SS_WL1_BPk8_BKl1',
            'name' => 'SS_WL1_BPk8_BKl1',
            'fid' => 6,
            'location_id' => 'SALURAN',
            'time_record' => $data1['created_at'],
            'tma' => $data1b['nilai'],
            'gate_number' => 'gate_1',
            'discharge' => $data1['debit'],
            'cb' => 1,
        );

        $list_data = $AWLR; // $AWS | $AWLR
        $POST_FILE = '';
        foreach ($list_data as $key => $value) {
            $POST_FILE .= '&' . $key . '=' . $value;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $POST_FILE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);
        print $result;


        $AWLR = array(
            'sensor' => 'AWLR',
            'client_id' => 'SS_WL1_BPk8_BKl1',
            'name' => 'SS_WL1_BPk8_BKl1',
            'fid' => 6,
            'location_id' => 'SALURAN',
            'time_record' => $data2['created_at'],
            'tma' => $data2b['nilai'],
            'gate_number' => 'gate_2',
            'discharge' => $data2['debit'],
            'cb' => 1,
        );

        $list_data = $AWLR; // $AWS | $AWLR
        $POST_FILE = '';
        foreach ($list_data as $key => $value) {
            $POST_FILE .= '&' . $key . '=' . $value;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $POST_FILE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);
        print $result;


        $AWLR = array(
            'sensor' => 'AWLR',
            'client_id' => 'SS_WL2_BPk8_BPr1',
            'name' => 'SS_WL2_BPk8_BPr1',
            'fid' => 6,
            'location_id' => 'SALURAN',
            'time_record' => $data3['created_at'],
            'tma' => $data3b['nilai'],
            'gate_number' => 'gate_3',
            'discharge' => $data3['debit'],
            'cb' => 1,
        );

        $list_data = $AWLR; // $AWS | $AWLR
        $POST_FILE = '';
        foreach ($list_data as $key => $value) {
            $POST_FILE .= '&' . $key . '=' . $value;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $POST_FILE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);
        print $result;


        $AWLR = array(
            'sensor' => 'AWLR',
            'client_id' => 'SS_WL2_BPk8_BPr1',
            'name' => 'SS_WL2_BPk8_BPr1',
            'fid' => 6,
            'location_id' => 'SALURAN',
            'time_record' => $data4['created_at'],
            'tma' => $data4b['nilai'],
            'gate_number' => 'gate_4',
            'discharge' => $data4['debit'],
            'cb' => 1,
        );

        $list_data = $AWLR; // $AWS | $AWLR
        $POST_FILE = '';
        foreach ($list_data as $key => $value) {
            $POST_FILE .= '&' . $key . '=' . $value;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $POST_FILE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);
        print $result;




        $AWLR = array(
            'sensor' => 'AWLR',
            'client_id' => 'SS_WL4_BPk8_Pk8Te',
            'name' => 'SS_WL4_BPk8_Pk8Te',
            'fid' => 6,
            'location_id' => 'SALURAN',
            'time_record' => $data5['created_at'],
            'tma' => $data5b['nilai'],
            'gate_number' => 'gate_5',
            'discharge' => $data5['debit'],
            'cb' => 1,
        );

        $list_data = $AWLR; // $AWS | $AWLR
        $POST_FILE = '';
        foreach ($list_data as $key => $value) {
            $POST_FILE .= '&' . $key . '=' . $value;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $POST_FILE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);
        print $result;
        // ================================================================================================

        $model = new debitbsa10();
        $data1 = $model->where('gate', 'gt1')->orderBy('created_at', 'desc')->first();
        $data2 = $model->where('gate', 'gt2')->orderBy('created_at', 'desc')->first();
        $data3 = $model->where('gate', 'gt3')->orderBy('created_at', 'desc')->first();
        $data4 = $model->where('gate', 'gt4')->orderBy('created_at', 'desc')->first();
        $data5 = $model->where('gate', 'gt5')->orderBy('created_at', 'desc')->first();
        $data6 = $model->where('gate', 'gt6')->orderBy('created_at', 'desc')->first();
        $data7 = $model->where('gate', 'gt7')->orderBy('created_at', 'desc')->first();
        $data8 = $model->where('gate', 'gt8')->orderBy('created_at', 'desc')->first();
        $data9 = $model->where('gate', 'gt9')->orderBy('created_at', 'desc')->first();
        $data10 = $model->where('gate', 'gt10')->orderBy('created_at', 'desc')->first();
        $model = new bsa10();
        $data1b = $model->where('sensor', 'wl2')->orderBy('created_at', 'desc')->first();
        $data2b = $model->where('sensor', 'wl3')->orderBy('created_at', 'desc')->first();
        $data3b = $model->where('sensor', 'wl3')->orderBy('created_at', 'desc')->first();
        $data4b = $model->where('sensor', 'wl4')->orderBy('created_at', 'desc')->first();
        $data5b = $model->where('sensor', 'wl5')->orderBy('created_at', 'desc')->first();
        $data6b = $model->where('sensor', 'wl5')->orderBy('created_at', 'desc')->first();
        $data7b = $model->where('sensor', 'wl6')->orderBy('created_at', 'desc')->first();
        $data8b = $model->where('sensor', 'wl6')->orderBy('created_at', 'desc')->first();
        $data9b = $model->where('sensor', 'wl6')->orderBy('created_at', 'desc')->first();
        $data10b = $model->where('sensor', 'wl6')->orderBy('created_at', 'desc')->first();

        $data1['debit'] = $data1['debit'] < 0 ? 0 : $data1['debit'];
        $data2['debit'] = $data2['debit'] < 0 ? 0 : $data2['debit'];
        $data3['debit'] = $data3['debit'] < 0 ? 0 : $data3['debit'];
        $data4['debit'] = $data4['debit'] < 0 ? 0 : $data4['debit'];
        $data5['debit'] = $data5['debit'] < 0 ? 0 : $data5['debit'];
        $data6['debit'] = $data6['debit'] < 0 ? 0 : $data6['debit'];
        $data7['debit'] = $data7['debit'] < 0 ? 0 : $data7['debit'];
        $data8['debit'] = $data8['debit'] < 0 ? 0 : $data8['debit'];
        $data9['debit'] = $data9['debit'] < 0 ? 0 : $data9['debit'];
        $data10['debit'] = $data10['debit'] < 0 ? 0 : $data10['debit'];
        $data1b['nilai'] = $data1b['nilai'] < 0 ? 0 : $data1b['nilai'];
        $data2b['nilai'] = $data2b['nilai'] < 0 ? 0 : $data2b['nilai'];
        $data3b['nilai'] = $data3b['nilai'] < 0 ? 0 : $data3b['nilai'];
        $data4b['nilai'] = $data4b['nilai'] < 0 ? 0 : $data4b['nilai'];
        $data5b['nilai'] = $data5b['nilai'] < 0 ? 0 : $data5b['nilai'];
        $data6b['nilai'] = $data6b['nilai'] < 0 ? 0 : $data6b['nilai'];
        $data7b['nilai'] = $data7b['nilai'] < 0 ? 0 : $data7b['nilai'];
        $data8b['nilai'] = $data8b['nilai'] < 0 ? 0 : $data8b['nilai'];
        $data9b['nilai'] = $data9b['nilai'] < 0 ? 0 : $data9b['nilai'];
        $data10b['nilai'] = $data10b['nilai'] < 0 ? 0 : $data10b['nilai'];


        $AWLR = array(
            'sensor' => 'AWLR',
            'client_id' => 'SS_WL1_BSa10_BCw1',
            'name' => 'SS_WL1_BSa10_BCw1',
            'fid' => 45,
            'location_id' => 'SALURAN',
            'time_record' => $data1['created_at'],
            'tma' => $data1b['nilai'],
            'gate_number' => 'gate_1',
            'discharge' => $data1['debit'],
            'cb' => 1,
        );

        $list_data = $AWLR; // $AWS | $AWLR
        $POST_FILE = '';
        foreach ($list_data as $key => $value) {
            $POST_FILE .= '&' . $key . '=' . $value;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $POST_FILE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);
        print $result;


        $AWLR = array(
            'sensor' => 'AWLR',
            'client_id' => 'SS_WL2_BSa10_BAl1',
            'name' => 'SS_WL2_BSa10_BAl1',
            'fid' => 45,
            'location_id' => 'SALURAN',
            'time_record' => $data2['created_at'],
            'tma' => $data2b['nilai'],
            'gate_number' => 'gate_2',
            'discharge' => $data2['debit'],
            'cb' => 1,
        );

        $list_data = $AWLR; // $AWS | $AWLR
        $POST_FILE = '';
        foreach ($list_data as $key => $value) {
            $POST_FILE .= '&' . $key . '=' . $value;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $POST_FILE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);
        print $result;

        $AWLR = array(
            'sensor' => 'AWLR',
            'client_id' => 'SS_WL2_BSa10_BAl1',
            'name' => 'SS_WL2_BSa10_BAl1',
            'fid' => 45,
            'location_id' => 'SALURAN',
            'time_record' => $data3['created_at'],
            'tma' => $data3b['nilai'],
            'gate_number' => 'gate_3',
            'discharge' => $data3['debit'],
            'cb' => 1,
        );

        $list_data = $AWLR; // $AWS | $AWLR
        $POST_FILE = '';
        foreach ($list_data as $key => $value) {
            $POST_FILE .= '&' . $key . '=' . $value;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $POST_FILE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);
        print $result;

        $AWLR = array(
            'sensor' => 'AWLR',
            'client_id' => 'SS_WL3_BSa10_BUt1',
            'name' => 'SS_WL3_BSa10_BUt1',
            'fid' => 45,
            'location_id' => 'SALURAN',
            'time_record' => $data4['created_at'],
            'tma' => $data4b['nilai'],
            'gate_number' => 'gate_4',
            'discharge' => $data4['debit'],
            'cb' => 1,
        );

        $list_data = $AWLR; // $AWS | $AWLR
        $POST_FILE = '';
        foreach ($list_data as $key => $value) {
            $POST_FILE .= '&' . $key . '=' . $value;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $POST_FILE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);
        print $result;


        $AWLR = array(
            'sensor' => 'AWLR',
            'client_id' => 'SS_WL4_BSa10_BJ1',
            'name' => 'SS_WL4_BSa10_BJ1',
            'fid' => 45,
            'location_id' => 'SALURAN',
            'time_record' => $data5['created_at'],
            'tma' => $data5b['nilai'],
            'gate_number' => 'gate_5',
            'discharge' => $data5['debit'],
            'cb' => 1,
        );

        $list_data = $AWLR; // $AWS | $AWLR
        $POST_FILE = '';
        foreach ($list_data as $key => $value) {
            $POST_FILE .= '&' . $key . '=' . $value;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $POST_FILE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);
        print $result;


        $AWLR = array(
            'sensor' => 'AWLR',
            'client_id' => 'SS_WL4_BSa10_BJ1',
            'name' => 'SS_WL4_BSa10_BJ1',
            'fid' => 45,
            'location_id' => 'SALURAN',
            'time_record' => $data6['created_at'],
            'tma' => $data6b['nilai'],
            'gate_number' => 'gate_6',
            'discharge' => $data6['debit'],
            'cb' => 1,
        );

        $list_data = $AWLR; // $AWS | $AWLR
        $POST_FILE = '';
        foreach ($list_data as $key => $value) {
            $POST_FILE .= '&' . $key . '=' . $value;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $POST_FILE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);
        print $result;


        $AWLR = array(
            'sensor' => 'AWLR',
            'client_id' => 'SS_WL5_BSa10_BLa1',
            'name' => 'SS_WL5_BSa10_BLa1',
            'fid' => 45,
            'location_id' => 'SALURAN',
            'time_record' => $data7['created_at'],
            'tma' => $data7b['nilai'],
            'gate_number' => 'gate_7',
            'discharge' => $data7['debit'],
            'cb' => 1,
        );

        $list_data = $AWLR; // $AWS | $AWLR
        $POST_FILE = '';
        foreach ($list_data as $key => $value) {
            $POST_FILE .= '&' . $key . '=' . $value;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $POST_FILE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);
        print $result;

        $AWLR = array(
            'sensor' => 'AWLR',
            'client_id' => 'SS_WL5_BSa10_BLa1',
            'name' => 'SS_WL5_BSa10_BLa1',
            'fid' => 45,
            'location_id' => 'SALURAN',
            'time_record' => $data8['created_at'],
            'tma' => $data8b['nilai'],
            'gate_number' => 'gate_8',
            'discharge' => $data8['debit'],
            'cb' => 1,
        );

        $list_data = $AWLR; // $AWS | $AWLR
        $POST_FILE = '';
        foreach ($list_data as $key => $value) {
            $POST_FILE .= '&' . $key . '=' . $value;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $POST_FILE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);
        print $result;

        $AWLR = array(
            'sensor' => 'AWLR',
            'client_id' => 'SS_WL5_BSa10_BLa1',
            'name' => 'SS_WL5_BSa10_BLa1',
            'fid' => 45,
            'location_id' => 'SALURAN',
            'time_record' => $data9['created_at'],
            'tma' => $data9b['nilai'],
            'gate_number' => 'gate_9',
            'discharge' => $data9['debit'],
            'cb' => 1,
        );

        $list_data = $AWLR; // $AWS | $AWLR
        $POST_FILE = '';
        foreach ($list_data as $key => $value) {
            $POST_FILE .= '&' . $key . '=' . $value;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $POST_FILE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);
        print $result;

        $AWLR = array(
            'sensor' => 'AWLR',
            'client_id' => 'SS_WL5_BSa10_BLa1',
            'name' => 'SS_WL5_BSa10_BLa1',
            'fid' => 45,
            'location_id' => 'SALURAN',
            'time_record' => $data10['created_at'],
            'tma' => $data10b['nilai'],
            'gate_number' => 'gate_10',
            'discharge' => $data10['debit'],
            'cb' => 1,
        );

        $list_data = $AWLR; // $AWS | $AWLR
        $POST_FILE = '';
        foreach ($list_data as $key => $value) {
            $POST_FILE .= '&' . $key . '=' . $value;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $POST_FILE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);
        print $result;

        // ================================================================================================

        $model = new debitbmj1();
        $data1 = $model->where('gate', 'gt1')->orderBy('created_at', 'desc')->first();
        $model = new bmj1();
        $data1b = $model->where('sensor', 'wld')->orderBy('created_at', 'desc')->first();
        $data1['debit'] = $data1['debit'] < 0 ? 0 : $data1['debit'];
        $data1b['nilai'] = $data1b['nilai'] < 0 ? 0 : $data1b['nilai'];

        $AWLR = array(
            'sensor' => 'AWLR',
            'client_id' => 'ST_BMj1',
            'name' => 'ST_BMj1',
            'fid' => 46,
            'location_id' => 'SALURAN',
            'time_record' => $data1['created_at'],
            'tma' => $data1b['nilai'],
            'gate_number' => 'gate_1',
            'discharge' => $data1['debit'],
            'cb' => 1,
        );

        $list_data = $AWLR; // $AWS | $AWLR
        $POST_FILE = '';
        foreach ($list_data as $key => $value) {
            $POST_FILE .= '&' . $key . '=' . $value;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $POST_FILE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);
        print $result;
    }
}
