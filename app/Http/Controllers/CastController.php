<?php

namespace App\Http\Controllers;

use App\Models\cast;
use Illuminate\Http\Request;

class CastController extends Controller
{
    public function index()
    {
        $data = cast::get();
        return view('tugas4.cast.index', [
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('tugas4.cast.create');
    }

    public function show($id)
    {
        $data = cast::where('id', $id)->first();
        return view('tugas4.cast.show', [
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {
        $data = new cast();
        $data->nama = $request->nama;
        $data->umur = $request->umur;
        $data->bio = $request->umur;
        $data->save();
        if ($data) {
            return redirect()->back();
        }
        return redirect()->back()->with('message', 'gagal');
    }

    public function update(Request $request, $id)
    {
        $update = cast::where('id', $id)->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'bio' => $request->bio,
        ]);
        if ($update) {
            return redirect()->back();
        }
        return redirect()->back()->with('message', 'gagal');
    }

    public function destroy($id)
    {
        $del = cast::where('id', $id)->delete();
        if ($del) {
            return redirect()->back();
        }
        return redirect()->back()->with('message', 'gagal');
    }
}
