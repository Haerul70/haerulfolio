<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitorController extends Controller
{
    public function getVisitorData(Request $request)
    {
        $query = Visitor::query();

        if ($request->filled('filter')) {
            switch ($request->input('filter')) {
                case 'daily':
                    $data = $query->select(DB::raw('DATE(visited_at) as date'), DB::raw('count(*) as count'))
                        ->groupBy('date')
                        ->orderBy('date')
                        ->get();
                    break;
                case 'monthly':
                    $data = $query->select(DB::raw('DATE_FORMAT(visited_at, "%Y-%m") as month'), DB::raw('count(*) as count'))
                        ->groupBy('month')
                        ->orderBy('month')
                        ->get();
                    break;
                case 'yearly':
                    $data = $query->select(DB::raw('YEAR(visited_at) as year'), DB::raw('count(*) as count'))
                        ->groupBy('year')
                        ->orderBy('year')
                        ->get();
                    break;
            }
        } else {
            $data = $query->all();
        }

        return response()->json($data);
    }
}
