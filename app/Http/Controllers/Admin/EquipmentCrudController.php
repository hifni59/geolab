<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EquipmentCategory;
use App\Models\EquipmentItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EquipmentCrudController extends Controller
{
    /**
     * Menampilkan daftar peralatan dengan pencarian & pengurutan.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $sortBy = $request->input('sort_by', 'id');
        $sortDir = $request->input('sort_dir', 'desc');

        $query = EquipmentItem::query()
            ->select('equipment_items.*', 'equipment_categories.name as category_name')
            ->leftJoin('equipment_categories', 'equipment_items.equipment_category_id', '=', 'equipment_categories.id');

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('equipment_items.name', 'LIKE', "%{$search}%")
                  ->orWhere('equipment_items.brand', 'LIKE', "%{$search}%")
                  ->orWhere('equipment_categories.name', 'LIKE', "%{$search}%");
            });
        }

        $sortableColumns = ['id', 'name', 'category_name', 'brand', 'year'];
        if (in_array($sortBy, $sortableColumns)) {
            $query->orderBy($sortBy, $sortDir);
        }

        $equipmentItems = $query->paginate(15)->withQueryString();

        return view('admin.equipment.index', compact('equipmentItems'));
    }

    /**
     * Menampilkan form untuk membuat alat baru.
     */
    public function create()
    {
        $categories = EquipmentCategory::orderBy('name')->get();
        return view('admin.equipment.create', compact('categories'));
    }

    /**
     * Menyimpan alat baru ke database dengan upload gambar.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'equipment_category_id' => 'required|exists:equipment_categories,id',
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'year' => 'nullable|digits:4',
            'daily_rate' => 'required|integer|min:0',
            'monthly_rate' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('equipment_images', 'public');
            $validatedData['image_path'] = $path;
        }

        EquipmentItem::create($validatedData);

        return redirect()->route('admin.equipment.index')->with('success', 'Peralatan baru berhasil ditambahkan.');
    }
    
    /**
     * Menampilkan form untuk mengedit alat.
     */
    public function edit(EquipmentItem $equipmentItem)
    {
        $categories = EquipmentCategory::orderBy('name')->get();
        return view('admin.equipment.edit', compact('equipmentItem', 'categories'));
    }

    /**
     * Mengupdate data alat di database dengan update gambar.
     */
    public function update(Request $request, EquipmentItem $equipmentItem)
    {
        $validatedData = $request->validate([
            'equipment_category_id' => 'required|exists:equipment_categories,id',
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'year' => 'nullable|digits:4',
            'daily_rate' => 'required|integer|min:0',
            'monthly_rate' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($equipmentItem->image_path) {
                Storage::disk('public')->delete($equipmentItem->image_path);
            }
            $path = $request->file('image')->store('equipment_images', 'public');
            $validatedData['image_path'] = $path;
        }

        $equipmentItem->update($validatedData);

        return redirect()->route('admin.equipment.index')->with('success', 'Data peralatan berhasil diperbarui.');
    }

    /**
     * Menghapus data alat dari database beserta gambarnya.
     */
    public function destroy(EquipmentItem $equipmentItem)
    {
        if ($equipmentItem->image_path) {
            Storage::disk('public')->delete($equipmentItem->image_path);
        }
        
        $equipmentItem->delete();
        
        return redirect()->route('admin.equipment.index')->with('success', 'Peralatan berhasil dihapus.');
    }
}