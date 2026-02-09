<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CopomexService
{
    public function getEstados(): array
    {
        $res = Http::timeout(10)->get(
            config('services.copomex.base_uri') . 'query/get_estados',
            ['token' => config('services.copomex.token')]
        );

        if (!$res->successful()) return [];

        $json = $res->json();
        return $json['response']['estado'] ?? [];
    }

    public function getMunicipiosPorEstado(string $estado): array
    {
        $res = Http::timeout(10)->get(
            config('services.copomex.base_uri') . 'query/get_municipio_por_estado/' . rawurlencode($estado),
            ['token' => config('services.copomex.token')]
        );

        if (!$res->successful()) return [];

        $json = $res->json();
        return $json['response']['municipios'] ?? [];
    }
}