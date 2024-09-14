<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function showDataExperiences()
    {
        $dataExperience = Experience::orderBy('created_at', 'desc')->get();
        $dataService = Service::all();
        return view('experience.data-experiences', compact('dataExperience', 'dataService'));
    }
    public function showExperienceFormCreate()
    {
        $dataExperience = Experience::orderBy('created_at', 'desc')->get();
        $dataService = Service::all();
        return view('experience.data-experiences', compact('dataExperience', 'dataService'));
    }

    public function saveAddDataExperience(Request $request)
    {
        try {
            $validateData = $request->validate([
                'service_id' => 'required|exists:services,id',
                'company' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'description' => 'required',
            ]);
            $dataExperience = Experience::create($validateData);

            return redirect()->back()->with('success', 'Data Experience Berhasil Ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Terjadi Kesalahan:' . $e->getMessage());
        }
    }

    public function showExperienceFormEdit($id)
    {
        $dataService = Service::all();
        $dataExperience = Experience::findOrFail($id);

        return view('experience.edit-data-experience', compact('dataService', 'dataExperience'));
    }

    public function updateDataExperience(Request $request, $id)
    {
        try {
            $validateData = $request->validate([
                'service_id' => 'required|exists:services,id',
                'company' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'description' => 'required',
            ]);
            $dataExperience = Experience::findOrFail($id);
            $dataExperience->update($validateData);

            return redirect()->back()->with('success', 'Berhasil memperbarui data Experience');
        } catch (\Exception $e) {
            return redirect()->back()->with('Terjadi Kesalahan: ' . $e->getMessage());
        }
    }

    public function deleteDataExperience($id)
    {
        $dataExperience = Experience::findOrFail($id);

        return view('experience.delete-data-experience', compact('dataExperience'));
    }

    public function confirmDeleteDataExperience($id)
    {
        $dataExperience = Experience::findOrFail($id);

        $dataExperience->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus data Experience!');
    }

    public function dataSoftDeleteExperience()
    {
        $dataExperience = Experience::onlyTrashed()->orderBy('created_at', 'desc')->get();

        return view('experience.data-softdelete-experience', compact('dataExperience'));
    }

    public function restoreDataSoftDeleteExperience($id)
    {
        $dataExperience = Experience::withTrashed()->findOrFail($id);

        $dataExperience->restore();

        return redirect()->back()->with('success', 'Berhasil memulihkan data Experience');
    }
}
