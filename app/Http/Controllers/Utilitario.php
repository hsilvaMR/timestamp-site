<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Utilitario extends Controller
{


    public static function getCurrentDataTime()
    {

        // Carbon::now()->format('Y-m-d H:i:s')
        $data_time = Carbon::now();
        $data_time->format('d-m-Y H:i:s jS F Y');
        return  $data_time;
    }

    public function getCurrentData()
    {
    }

    public static function getCurrenTime()
    {
    }

    public static function getCurrentLocal()
    {
    }
    public  static function getFormatCurrency()
    {
    }
}
