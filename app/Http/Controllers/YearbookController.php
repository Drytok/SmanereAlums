<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Yearbook;

class YearbookController extends Controller
{
    public function index()
    {
        $yearbooks = Yearbook::all();
        return view('yearbook.yearbook', compact('yearbooks'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('yearbook.yearbook-entry', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'category_id' => 'required',
            'angkatan' => 'required|integer',
            'motto' => 'required',
        ]);

        Yearbook::create([
            'nama' => $request->nama,
            'category_id' => $request->category_id,
            'angkatan' => $request->angkatan,
            'motto' => $request->motto,
        ]);

        return redirect('/yearbook');
    }

    public function edit($id_yearbook)
    {
        $categories = Category::all();
        $yearbook = Yearbook::find($id_yearbook);
        return view('yearbook.yearbook-edit', compact('yearbook', 'categories'));
    }

    public function update(Request $request, $id_yearbook)
    {
        $this->validate($request, [
            'nama' => 'required',
            'category_id' => 'required',
            'angkatan' => 'required|integer',
            'motto' => 'required',
        ]);

        $yearbook = Yearbook::find($id_yearbook);

        $yearbook->update([
            'nama' => $request->nama,
            'category_id' => $request->category_id,
            'angkatan' => $request->angkatan,
            'motto' => $request->motto,
        ]);

        return redirect('/yearbook');
    }

    public function delete($id_yearbook)
    {
        $yearbook = Yearbook::find($id_yearbook);
        return view('yearbook.yearbook-hapus', compact('yearbook'));
    }

    public function destroy($id_yearbook)
    {
        $yearbook = Yearbook::find($id_yearbook);
        $yearbook->delete();
        return redirect('/yearbook');
    }

}
