<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LabItem;
use App\Models\LabCategory;
use Illuminate\Http\Request;

class LabItemCrudController extends Controller
{
    /**
     * Menampilkan daftar data dengan fitur pencarian dan pengurutan.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $sortBy = $request->input('sort_by', 'id');
        $sortDir = $request->input('sort_dir', 'desc');

        $query = LabItem::query()
            ->select('lab_items.*', 'lab_categories.name as category_name')
            ->leftJoin('lab_categories', 'lab_items.lab_category_id', '=', 'lab_categories.id');

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('lab_items.name', 'LIKE', "%{$search}%")
                  ->orWhere('lab_items.aliases', 'LIKE', "%{$search}%")
                  ->orWhere('lab_categories.name', 'LIKE', "%{$search}%");
            });
        }

        $sortableColumns = ['id', 'name', 'category_name', 'price'];
        if (in_array($sortBy, $sortableColumns)) {
            $query->orderBy($sortBy, $sortDir);
        }

        $labItems = $query->paginate(15)->withQueryString();

        return view('admin.lab.index', compact('labItems'));
    }

    /**
     * Menampilkan form untuk membuat data baru.
     */
    public function create()
    {
        $categories = LabCategory::orderBy('name')->get();
        return view('admin.lab.create', compact('categories'));
    }

    /**
     * Menyimpan data baru ke dalam database.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'lab_category_id' => 'required|exists:lab_categories,id',
            'name' => 'required|string|max:255',
            'aliases' => 'nullable|string|max:255',
            'price' => 'required|integer|min:0',
            'notes' => 'nullable|string',
        ]);

        LabItem::create($validatedData);

        return redirect()->route('admin.lab.index')->with('success', 'Layanan baru berhasil ditambahkan.');
    }

    /**
     * Menampilkan data spesifik. (Biasanya tidak digunakan di CRUD admin sederhana)
     */
    public function show(LabItem $labItem)
    {
        // Redirect ke halaman edit saja
        return redirect()->route('admin.lab.edit', $labItem);
    }

    /**
     * Menampilkan form untuk mengedit data.
     */
    public function edit(LabItem $labItem)
    {
        $categories = LabCategory::orderBy('name')->get();
        return view('admin.lab.edit', compact('labItem', 'categories'));
    }

    /**
     * Mengupdate data yang ada di database.
     */
    public function update(Request $request, LabItem $labItem)
    {
        $validatedData = $request->validate([
            'lab_category_id' => 'required|exists:lab_categories,id',
            'name' => 'required|string|max:255',
            'aliases' => 'nullable|string|max:255',
            'price' => 'required|integer|min:0',
            'notes' => 'nullable|string',
        ]);

        $labItem->update($validatedData);

        return redirect()->route('admin.lab.index')->with('success', 'Layanan berhasil diperbarui.');
    }

    /**
     * Menghapus data dari database.
     */
    public function destroy(LabItem $labItem)
    {
        $labItem->delete();
        
        return redirect()->route('admin.lab.index')->with('success', 'Layanan berhasil dihapus.');
    }
}