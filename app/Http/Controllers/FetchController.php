<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FetchController extends Controller
{
    public function getData()
    {
        $data = Http::withHeaders([
            'Content-Type' => 'application/json; charset=UTF-8',
        ])->get('https://cuaca-gempa-rest-api.vercel.app/quake')->object();

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'message' => 'success get gempa data',
            'data' => $data
        ]);
    }

    public function showData($provinsi)
    {
        $data = Http::get('https://cuaca-gempa-rest-api.vercel.app/quake/' . $provinsi);

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'message' => 'success get gempa data provinsi',
            'data' => $data
        ]);
    }

    public function getDataByKota($kota)
    {
        $data = Http::get('https://cuaca-gempa-rest-api.vercel.app/quake/' . $kota);

        return response()->json([
            'code' => 200,
            'status' => 'success',
            'message' => 'success get gempa data kota',
            'data' => $data
        ]);
    }
}
