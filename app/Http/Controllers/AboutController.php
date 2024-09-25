<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::with('user')->get();

        return view('welcome', compact('about'));
    }
    public function showDataAbout()
    {
        $dataUser = User::all();
        $about = About::orderBy('created_at', 'desc')->get();

        return view('about.data-about', compact('dataUser', 'about'));
    }
    public function showAboutFormCreate()
    {
        $dataUser = User::all();
        return view('about.create-data-about', compact('dataUser'));
    }
    public function saveAddDataAbout(Request $request)
    {
        try {
            // Validasi input
            $validatedData = $request->validate([
                'user_id' => 'required|exists:users,id',
                'bio' => 'required',
                'degree' => 'required|string',
                'phone' => 'required|string',
                'address' => 'required|string',
                'city' => 'required|string',
                'country' => 'required|string',
                'birthday' => 'required|string',
                'email' => 'required|string',
                'profile_picture' => 'nullable|image|mimes:jpeg,jpg,png,svg|max:2000',
            ]);

            // Menangani upload gambar profil
            if ($request->hasFile('profile_picture')) {
                $profilePicture = $request->file('profile_picture');
                $profilePicturePath = $profilePicture->store('profile_pictures', 'public');
                $validatedData['profile_picture'] = $profilePicturePath;
            }

            // Simpan data ke database
            $about = About::create($validatedData);

            return redirect()->back()->with('success', 'Data about berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    public function showAboutFormEdit($id)
    {
        try {
            $dataUser = User::all();
            $about = About::findOrFail($id);

            return view('about.edit-data-about', compact('dataUser', 'about'));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function updateAboutData(Request $request, $id)
    {
        try {
            // Validasi input
            $validatedData = $request->validate([
                'user_id' => 'required|exists:users,id',
                'bio' => 'required',
                'degree' => 'required|string',
                'phone' => 'required|string',
                'address' => 'required|string',
                'city' => 'required|string',
                'country' => 'required|string',
                'birthday' => 'required|string',
                'email' => 'required|string',
                'profile_picture' => 'nullable|image|mimes:jpeg,jpg,png,svg|max:2000',
            ]);

            // Menangani upload gambar profil
            // Update data di database
            $about = About::findOrFail($id);

            if ($request->hasFile('profile_picture')) {

                if (!empty($about->profile_picture)) {
                    Storage::disk('public')->delete($about->profile_picture);
                }
                $profilePicture = $request->file('profile_picture');
                $profilePicturePath = $profilePicture->store('profile_pictures', 'public');
                $validatedData['profile_picture'] = $profilePicturePath;
            }

            $about->update($validatedData);

            return redirect()->back()->with('success', 'Data about berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    public function deleteDataAbout($id)
    {
        $about = About::findByFail($id);
        return view('about.delete-data-about', compact('about'));
    }

    public function confirmDeleteDataAbout($id)
    {
        $about = About::findOrfail($id);

        $about->delete();

        return redirect()->back()->with('success', 'Berhasi menghapus Data About');
    }

    // public function dataSoftDeleteAbout()
    // {
    //     $dataUser = User::all();
    //     $about = About::onlyTrashed()->orderBy('created_at', 'desc')->get();

    //     return view('about.data-softdelete-about', compact('dataUser', 'about'));
    // }

    // public function restoreDataSoftDeleteAbout($id)
    // {
    //     $about = About::withTrashed()->findOrFail($id);
    //     $about->restore();

    //     return redirect()->back()->with('success', 'Berhasil memulihkan data about');
    // }
}
