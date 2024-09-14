<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\SkillsType;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function showDataSkills()
    {
        $dataSkill = Skill::orderBy('created_at', 'desc')->get();
        $dataSkillsType = SkillsType::all();
        return view('skill.data-skills', compact('dataSkill', 'dataSkillsType'));
    }

    public function showSkillFormCreate()
    {
        $dataSkill = Skill::orderBy('created_at', 'desc')->get();
        $dataSkillsType = SkillsType::all();
        return view('skill.data-skills', compact('dataSkill', 'dataSkillsType'));
    }

    public function saveAddDataSkill(Request $request)
    {
        try {
            $validateData = $request->validate([
                'skills_type_id' => 'required|exists:skills_type,id',
                'title' => 'required|string',
            ]);

            $dataSkill = Skill::create($validateData);

            return redirect()->back()->with('success', 'Data skill berhasil disimpan');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Terjadi Kesalahan:', $e->getMessage());
        }
    }

    public function showSkillFormEdit($id)
    {
        $dataSkill = Skill::where('id', $id)->first();
        return view('skill.edit-data-skill', compact('dataSkill'));
    }
    public function updateSkillData(Request $request, $id)
    {
        try {
            $validateData = $request->validate([
                'skills_type_id' => 'required|exists:skills_type,id',
                'title' => 'required|string',
            ]);
            $dataSkill = Skill::where('id', $id)->first();
            $dataSkill->update($validateData);

            return redirect()->back()->with('success', 'Berhasil memperbarui data skill');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Terjadi Kesalahan:', $e->getMessage());
        }
    }

    public function deleteDataSkill($id)
    {
        $dataskill = Skill::findOrFail($id);
        return view('skill.delete-data-skill', compact('dataskill'));
    }

    public function confirmDeleteDataSkill($id)
    {
        $dataSkill = Skill::findOrFail($id);

        $dataSkill->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus data skill');
    }

    public function dataSoftDeleteSkills()
    {
        $dataSkill = Skill::onlyTrashed()->orderBy('created_at', 'desc')->get();

        return view('skill.data-softdelete-skill', compact('dataSkill'));
    }

    public function restoreDataSoftDeleteSkill($id)
    {
        $dataSkill = Skill::withTrashed()->findOrFail($id);

        $dataSkill->restore();

        return redirect()->back()->with('success', 'Berhasil memulihkan data Skill');
    }
}
