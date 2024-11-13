<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::orderBy('nama_set', 'ASC')->get();
        return view('admin.setting.index', compact('settings'));
    }

    public function create()
    {
        return view('admin.setting.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'jenis' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'nilai' => 'nullable|string|max:255',
        ]);

        $validated['active'] = 1;

        Setting::create($validated);

        return redirect()->route('admin.setting.index')->with('success', 'Pengaturan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $setting = Setting::findOrFail($id);
        return view('admin.setting.edit', compact('setting'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'jenis' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'nilai' => 'nullable|string|max:255',
        ]);

        $setting = Setting::findOrFail($id);
        $setting->update($validated);

        return redirect()->route('admin.setting.index')->with('success', 'Pengaturan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Setting::destroy($id);
        return redirect()->route('admin.setting.index')->with('success', 'Pengaturan berhasil dihapus.');
    }

    public function toggleStatus($id)
    {
        $setting = Setting::findOrFail($id);
        $setting->active = !$setting->active;
        $setting->save();

        return redirect()->route('admin.setting.index')->with('success', 'Status pengaturan berhasil diubah.');
    }
}
