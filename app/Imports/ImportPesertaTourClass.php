<?php

namespace App\Imports;

use App\Models\Peserta;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportPesertaTourClass implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Peserta([
            'nama_peserta' => $row[1],
            'kelas' => $row[2],
            'no_peserta_tour' => $row[3],
            'id_tour' => $row[4],
        ]);    
    }
}
