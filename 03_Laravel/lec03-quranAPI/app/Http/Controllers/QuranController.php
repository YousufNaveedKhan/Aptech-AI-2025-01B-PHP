<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuranController extends Controller
{
    function getSurahs()
    {
        $data = Http::get("http://api.alquran.cloud/v1/meta");
        return View('view_surahs', ['surahs' => $data['data']['surahs']['references']]);
    }

    function getSurahDetails($index) {
        $data = Http::get("https://api.alquran.cloud/v1/surah/{$index}");
        return View('read_surah', ['surah' => $data['data']]);
    }
}
