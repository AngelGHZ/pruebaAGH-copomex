<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Estado;
use App\Services\CopomexService;

class SyncEstadosCopomex extends Command
{
    
    protected $signature = 'copomex:sync-estados';

    public function handle(CopomexService $copomex): int
    {
        $estados = $copomex->getEstados();
      

        $procesados = 0;
        foreach ($estados as $nombre) {
            Estado::updateOrCreate(
                ['nombre' => $nombre],
                ['nombre' => $nombre]
            );
            $procesados++;
        }

        $this->info("Estados procesados: {$procesados}");
        return self::SUCCESS;
    }
}