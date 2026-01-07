<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('organization');
            $table->string('daerah');
            $table->string('no_telp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
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
    return redirect()->back()->with('success', 'Data berhasil diperbarui.');
}

};