<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {
        Service::create([
            'nama_layanan' => $request->nama_layanan,
            'deskripsi'    => $request->deskripsi,
            'harga'        => $request->harga,
        ]);

        return redirect('/services')->with('success', 'Layanan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $service->update([
            'nama_layanan' => $request->nama_layanan,
            'deskripsi'    => $request->deskripsi,
            'harga'        => $request->harga,
        ]);

        return redirect('/services')->with('success', 'Layanan berhasil diubah');
    }

    public function destroy($id)
    {
        Service::destroy($id);
        return redirect('/services')->with('success', 'Layanan dihapus');
    }
}
