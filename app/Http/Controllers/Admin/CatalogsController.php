<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class CatalogsController extends Controller
{
    public function index()
    {
        $catalogs = Catalog::all();

        return view('admin.catalogs.index', compact('catalogs'));
    }

    public function create()
    {
        return view('admin.catalogs.create');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required|max:1000|mimes:pdf'
        ]);

        $this->makeCatalog($request->file('name'));

        return redirect()->route('catalogs.show');
    }

    public function show()
    {
        $catalog = Catalog::first();
        if (! $catalog) {
            return redirect()->route('catalogs.create');
        }
        return view('admin.catalogs.show', compact('catalog'));
    }

    public function edit(Catalog $catalog)
    {
        return view('admin.catalogs.edit', compact('catalog'));
    }

    public function update(Request $request ,Catalog $catalog)
    {
        $this->validate(request(), [
            'name' => 'required|max:1000|mimes:pdf'
        ]);

        $this->makeCatalog($request->file('name'), $catalog);

        return redirect()->route('catalogs.show');
    }

    public function delete(Catalog $catalog)
    {
        Storage::delete($catalog->path);

        $catalog->delete();

        return redirect()->route('catalogs.show');
    }

    public function downloadCatalog(Catalog $catalog)
    {
        $pathToFile = storage_path('app/') . $catalog->path;
        return response()->file($pathToFile, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; ' . $catalog->name,
        ]);
    }

    public function makeCatalog(UploadedFile $file, $catalog = null)
    {
        Catalog::nameCatalog($file->getClientOriginalName(), $catalog)->storCatalog($file);
    }
}
