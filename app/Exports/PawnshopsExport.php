<?php

namespace App\Exports;

use App\Models\Pawnshop;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PawnshopsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pawnshop:: with('response')->orderBy('created_at', 'DESC')->get();  
    }

    public function headings(): array
    {
        return [
            'ID',
            'NIK pelapor',
            'Nama pelapor',
            'No Telp pelapor',
            'umur',
            'Investasi',
            'Status Response',
            'pesan Response',
        ];
    }

    public function map($item): array
    {
        return [
            $item->id,
            $item->nik,
            $item->nama,
            $item->no_telp,
            $item->umur,
            \Carbon\Carbon::parse($item->created_at)->format('j F, Y'), //
            $item->Investasi,
            $item->response ? $item->response['status'] : '-',
            $item->response ? $item->response['pesan'] : '-',
        ];
}
}