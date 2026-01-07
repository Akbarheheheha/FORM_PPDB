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
        // Biasanya index menampilkan daftar data, ganti ke view daftar jika perlu
        $forms = Form::all();
        return view('form', compact('forms'));
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'organization' => 'required|string|max:255',
            'daerah' => 'nullable|string|max:255',
            'no_telp' => 'nullable|string|max:20',
        ]);

        Form::create($validated);

        return redirect()->back()->with('success', 'Data berhasil dikirim. Terima kasih!');
    }

    // 1. Menampilkan halaman edit
    public function edit($id)
    {
        $data = Form::findOrFail($id);
        return view('FormEdit', compact('data')); // Pastikan nama file view-nya 'edit.blade.php'
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'organization' => 'required|string|max:255',
            'daerah' => 'nullable|string|max:255',
            'no_telp' => 'nullable|string|max:20',
        ]);

        $form = Form::findOrFail($id);
        $form->update($validated);

        return redirect('/admin/dashboard')->with('success', 'Data berhasil diperbarua');
    }

    public function destroy($id)
    {
        $form = Form::findOrFail($id);
        $form->delete();

        return redirect('/admin/dashboard');
    }

    public function export()
    {
        return Excel::download(new FormsExport, 'dataForm.xlsx');
    }
}