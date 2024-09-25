<?php

namespace App\Http\Controllers;


use App\Models\Skill;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function showDataServices()
    {
        $dataService = Service::orderBy('created_at', 'desc')->get();
        return view('service.data-services', compact('dataService'));
    }

    public function showServiceFormCreate()
    {
        $dataService = Service::orderBy('created_at', 'desc')->get();

        return view('service.create-data-service', compact('dataService'));
    }
    public function saveAddDataServices(Request $request)
    {
        try {
            $validateData = $request->validate([
                'title' => 'required|string',
                'description' => 'required|string',
            ]);

            $dataServices = Service::create($validateData);

            return redirect()->back()->with('success', 'Data service berhasil disimpan');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Terjadi kesalahan:' . $e->getMessage());
        }
    }
    public function showServicesFormEdit($id)
    {
        $dataService = Service::where('id', $id)->first();

        return view('service.edit-data-services', compact('dataService'));
    }

    public function updateDataServices(Request $request, $id)
    {
        try {
            $validateData = $request->validate([
                'title' => 'required|string',
                'description' => 'required|string'
            ]);

            $dataService = Service::where('id', $id)->first();
            $dataService->update($validateData);

            return redirect()->back()->with('success', 'Data service berhasil diperbarui');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Terjadi Kesalahan:' . $e->getMessage());
        }
    }

    public function deleteDataService($id)
    {
        $dataService = Service::findOrFail($id);
        return view('service.dlete-data-service', compact('dataService'));
    }

    public function confirmDeleteDataService($id)
    {
        $dataService = Service::findOrFail($id);

        $dataService->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus data service');
    }

    public function dataSoftDeleteServices()
    {
        $dataService = Service::onlyTrashed()->orderBy('created_at', 'desc')->get();
        return view('service.data-softdelete-services', compact('dataService'));
    }

    public function restoreDataSoftDeleteService($id)
    {
        $dataService = Service::withTrashed()->findOrFail($id);
        $dataService->restore();

        return redirect()->back()->with('success', 'Berhasil memulihkan data service');
    }
}
