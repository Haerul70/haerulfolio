<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Skill;
use App\Models\Service;
use App\Models\Education;
use App\Models\Portfolio;
use App\Models\Experience;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function showHome()
    {
        $skillsTechnical = Skill::where('skills_type_id', 1)->get();
        $skillsNonTechnical = Skill::where('skills_type_id', 2)->get();
        $skillsSoftware = Skill::where('skills_type_id', 3)->get();
        $abouts = About::with('user')->first();
        $portfolioAll = Portfolio::with('service')->get();
        $experiences = Experience::with('service')->get();
        $services = Service::where('id', '!=', 6)->get();
        $educations = Education::all();

        return view('index', compact('skillsTechnical', 'skillsNonTechnical', 'skillsSoftware', 'abouts', 'portfolioAll', 'experiences', 'services', 'educations'));
    }
}
