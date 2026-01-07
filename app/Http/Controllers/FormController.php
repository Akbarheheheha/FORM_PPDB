<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\FormsExport;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'organization' => 'required|string|max:255',
            'daerah' => 'nullable|string|max:255',
            'no_telp' => '|nullable|string|max:20',
        ]);

        Form::create([
            'name' => $validated["name"],
            'organization' => $validated["organization"],
            'daerah' => $validated["daerah"],
            'no_telp' => $validated["no_telp"],
        ]);
    }

    public function export()
    {
        return Excel::download(new FormsExport, 'dataForm.xlsx');
    }
}
