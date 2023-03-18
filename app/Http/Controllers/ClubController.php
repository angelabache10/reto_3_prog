<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Membership;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index()
    {
        $clubs = Club::latest()
            ->paginate(10)
            ->withQueryString();
        
        return view('clubs.index', [
            'clubs' => $clubs,
        ]);
    }

    public function memberships(Request $request)
    {
        $club = Club::findOrFail($request->query('club'));

        $memberships = Membership::whereBelongsTo($club)
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('clubs.memberships', [
            'club' => $club,
            'memberships' => $memberships,
        ]);
    }
}
