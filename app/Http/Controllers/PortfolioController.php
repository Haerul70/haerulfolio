<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function showDataPortfolios()
    {
        $dataService = Service::all();
        $dataPortfolio = Portfolio::orderBy('created_at', 'desc')->get();
        return view('portfolio.data-portfolios', compact('dataService', 'dataPortfolio'));
    }

    public function showPortfoliosFormCreate()
    {
        $dataService = Service::all();
        $dataPortfolio = Portfolio::orderBy('created_at', 'desc')->get();

        return view('portfolio.create-dataportfolio', compact('dataService', 'dataPortfolio'));
    }

    public function saveAddDataPortfolio(Request $request)
    {
        try {
            $validateData = $request->validate([
                'service_id' => 'required|exists:services,id',
                'title' => 'required|string',
                'description' => 'required|string',
                'project_url' => 'nullable|url',
                'image_url' => 'nullable|image|mimes:png,jpeg,jpg,svg|max:2000',
            ]);

            // Menambahkan Image
            if ($request->hasFile('image_url')) {
                $imageUrl = $request->file('image_url');
                $imageUrlPath = $imageUrl->store('image_url', 'public');
                $validateData['image_url'] = $imageUrlPath;
            }

            $dataPortfolio = Portfolio::create($validateData);

            return redirect()->back()->with('success', 'Data portfolio berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function showPortfolioFormEdit($id)
    {
        try {
            $dataPortfolio = Portfolio::findOrFail($id);
            $dataService = Service::all();

            return view('portfolio.edit-data-portfolio', compact('dataPortfolio', 'dataService'));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function updateDataPortfolio(Request $request, $id)
    {
        try {
            $validateData = $request->validate([
                'service_id' => 'required|exists:services,id',
                'title' => 'required|string',
                'description' => 'required|string',
                'project_url' => 'nullable|url',
                'image_url' => 'nullable|image|mimes:png,jpeg,jpg,svg|max:2000',
            ]);

            // Memperbarui Image
            $dataPortfolio = Portfolio::findOrFail($id);

            if ($request->hasFile('image_url')) {

                // Cek jika ada gambar lama dan hapus
                if (!empty($dataPortfolio->image_url)) {

                    Storage::disk('public')->delete($dataPortfolio->image_url);
                }

                $imageUrl = $request->file('image_url');
                $imageUrlPath = $imageUrl->store('image_url', 'public');
                $validateData['image_url'] = $imageUrlPath;
            }

            $dataPortfolio->update($validateData);

            return redirect()->back()->with('success', 'Data portfolio berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function deleteDataPortfolio($id)
    {
        $dataPortfolio = Portfolio::findOrFail($id);
        return view('portfolio.delete-data-portfolio', compact('dataPortfolio'));
    }

    public function confirmDeleteDataPortfolio($id)
    {
        $dataPortfolio = Portfolio::findOrFail($id);

        $dataPortfolio->delete();

        return redirect()->back()->with('success', 'Data portfolio berhasil berhasil di hapus sementara.');
    }

    public function dataSoftDeletePortfolio()
    {
        $dataService = Service::all();
        $dataPortfolio = Portfolio::onlyTrashed()->orderBy('created_at', 'desc')->get();

        return view('portfolio.data-softdelete-portfolio', compact('dataService', 'dataPortfolio'));
    }

    public function restoreDataSoftDeletePortfolio($id)
    {
        $dataPortfolio = Portfolio::withTrashed()->findOrFail($id);
        $dataPortfolio->restore();
        return redirect()->back()->with('success', 'Berhasil memulihkan data portfolio!');
    }
}
