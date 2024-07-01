<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Barryvdh\DomPDF\Facade\Pdf;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.categories-entry');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'class' => 'required',
            'angkatan' => 'required',
            'gambar' => 'required|file|mimes:png,jpg,jpeg|max:2048',
        ]);

        $gambar = $request->file('gambar');
        $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
        $tujuan_upload = 'img_categories';
        $gambar->move($tujuan_upload, $nama_gambar);

        Category::create([
            'class' => $request->class,
            'angkatan' => $request->angkatan,
            'gambar' => $nama_gambar,
        ]);

        return redirect('/category');
    }

    public function cetak()
    {
        $categories = Category::all();
        $pdf = Pdf::loadview('categories.categories-cetak', compact('categories'));
        return $pdf->download('laporan-categories.pdf');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_categories)
    {
        $category = Category::find($id_categories);
        return view('categories.categories-edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_categories)
    {
        $this->validate($request, [
            'class' => 'required',
            'angkatan' => 'required',
            'gambar' => 'file|mimes:png,jpg,jpeg|max:2048',
        ]);

        $category = Category::find($id_categories);

        if($request->hasFile('gambar')){

            File::delete('img_categories/'.$category->gambar);
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $tujuan_upload = 'img_categories';
            $gambar->move($tujuan_upload, $nama_gambar);
            $category->gambar = $nama_gambar;
        }

        $category->update([
            'class' => $request->class,
            'angkatan' => $request->angkatan,
        ]);

        return redirect('/category');
    }

    public function delete($id_categories)
    {
        $category = Category::find($id_categories);
        return view('categories.categories-hapus', compact('category'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id_categories)
    {
        $category = Category::find($id_categories);
        File::delete('img_categories/'.$category->gambar);
        $category->delete();
        return redirect('/category');
    }
}
