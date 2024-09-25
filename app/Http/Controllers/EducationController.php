<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function showDataEducation()
    {
        $dataEducation = Education::orderBy('created_at', 'desc')->get();
        return view('education.data-education', compact('dataEducation'));
    }

    public function showEducationFormCreate()
    {
        $dataEducation = Education::orderBy('created_at', 'desc')->get();

        return view('education.create-data-education', compact('dataEducation'));
    }

    public function saveAddDataEducation(Request $request)
    {
        try {
            $validateData = $request->validate([
                'major' => 'required',
                'school_name' => 'required',
                'description' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
            ]);

            $dataEducation = Education::create($validateData);

            return redirect()->back()->with('success', 'Berhasil menambahkan data education');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Terjadi Kesalahan: ' . $e->getMessage());
        }
    }

    public function showEducationFormEdit($id)
    {
        $dataEducation = Education::findOrFail($id);

        return view('education.edit-data-education', compact('dataEducation'));
    }

    public function updateDataEducation(Request $request, $id)
    {
        try {
            $validateData = $request->validate([
                'major' => 'required',
                'school_name' => 'required',
                'description' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
            ]);

            $dataEducation = Education::findOrFail($id);
            $dataEducation->update($validateData);

            return redirect()->back()->with('success', 'Berhasil memperbarui data education');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Terjadi Kesalahan: ' . $e->getMessage());
        }
    }

    public function dataSoftDeleteEducation()
    {
        $dataEducation = Education::onlyTrashed()->orderBy('created_at', 'desc')->get();

        return view('Education.data-softdelete-education', compact('dataEducation'));
    }

    public function restoreDataSoftDeleteEducation($id)
    {
        $dataEducation = Education::withTrashed()->findOrFail($id);

        $dataEducation->restore();

        return redirect()->back()->with('success', 'Berhasil memulihkan data Education');
    }
}
