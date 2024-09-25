<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Skill;
use App\Models\Service;
use App\Models\Visitor;
use App\Models\Education;
use App\Models\Portfolio;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $experienceCount = Experience::count();
        $serviceCount = Service::count();
        $skillCount = Skill::count();
        $portfolioCount = Portfolio::count();
        $dataSkill = Skill::orderBy('created_at', 'desc')->with('skills_type')->get();
        return view('dashboard.dashboard', compact('experienceCount', 'serviceCount', 'skillCount', 'portfolioCount', 'dataSkill'));
    }
}
