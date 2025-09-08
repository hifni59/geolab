<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SigService;
use App\Models\SigTier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // <-- Import DB Facade for transactions

class SigServiceCrudController extends Controller
{
    public function index()
    {
        $services = SigService::withCount('tiers')->latest()->paginate(10);
        return view('admin.sig.index', compact('services'));
    }

    public function create()
    {
        return view('admin.sig.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'icon_class' => 'nullable|string|max:255',
            'tiers' => 'required|array|min:1',
            'tiers.*.scale' => 'required|string|max:255',
            'tiers.*.price' => 'required|integer|min:0',
        ]);

        DB::beginTransaction();
        try {
            $service = SigService::create([
                'name' => $validated['name'],
                'icon_class' => $validated['icon_class'],
            ]);

            foreach ($validated['tiers'] as $tierData) {
                $service->tiers()->create($tierData);
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal menyimpan data: ' . $e->getMessage())->withInput();
        }

        return redirect()->route('admin.sig.index')->with('success', 'Jasa SIG baru berhasil ditambahkan.');
    }

    public function edit(SigService $sigService)
    {
        // Eager load the tiers
        $sigService->load('tiers');
        return view('admin.sig.edit', compact('sigService'));
    }

    public function update(Request $request, SigService $sigService)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'icon_class' => 'nullable|string|max:255',
            'tiers' => 'required|array|min:1',
            'tiers.*.scale' => 'required|string|max:255',
            'tiers.*.price' => 'required|integer|min:0',
        ]);

        DB::beginTransaction();
        try {
            $sigService->update([
                'name' => $validated['name'],
                'icon_class' => $validated['icon_class'],
            ]);

            // Simple strategy: delete old tiers and recreate new ones
            $sigService->tiers()->delete();

            foreach ($validated['tiers'] as $tierData) {
                $sigService->tiers()->create($tierData);
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal memperbarui data: ' . $e->getMessage())->withInput();
        }

        return redirect()->route('admin.sig.index')->with('success', 'Jasa SIG berhasil diperbarui.');
    }

    public function destroy(SigService $sigService)
    {
        // Database cascade on delete will handle removing the tiers
        $sigService->delete();
        return redirect()->route('admin.sig.index')->with('success', 'Jasa SIG berhasil dihapus.');
    }
}