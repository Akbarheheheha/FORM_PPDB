<?php

namespace App\Exports;

use App\Models\Form;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class FormsExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return Form::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Organisasi',
            'daerah',
            'no-telpon',
            'Created At',
            'Updated At',
        ];
    }

    public function map($form): array
    {
        return [
            $form->id,
            $form->name,
            $form->organization,
            $form->daerah,
            $form->no_telp,
            $form->created_at,
            $form->updated_at,
        ];
    }
}