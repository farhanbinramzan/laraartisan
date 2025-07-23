<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Teams;

use function Ramsey\Uuid\v1;

class TeamsController extends Controller
{

    public function index()
    {
        $teams = Teams::orderBy('listing_sequence')->get();
        return view('team.list',compact('teams'));
    }

    public function create()
    {
        return view('team.create');
    }

    public function store(TeamRequest $request)
    {
        // dd($validate['social_accounts']);
        if ($request->hasFile('image')) {
            $destinationPath = 'images';
            $imageName =  time() . '_' . $request->image->getClientOriginalName();
            $request->image->move(public_path($destinationPath), $imageName);
        }

            $team = new Teams();
            $team->listing_sequence = $request->listing_sequence;
            $team->name = $request->name;
            $team->desigination = $request->desigination;
            $team->image = $imageName;
            $socialAccounts = [];
            foreach ($request->platform as $key => $platform) {
                $socialAccounts[] = [
                    'platform' => $platform,
                    'account' => $request->social_accounts[$key]
                ];
            }
            $team->social_accounts = json_encode($socialAccounts);

            $team->save();
            return redirect()->route('team.index')->with('success', 'Team created successfully');
        
    }

    public function edit($id)
    {
        $team = Teams::findOrFail($id);
        return view('team.edit',compact('team'));
    }

    public function update(TeamRequest $request, $id)
    {
        $team = Teams::findOrFail($id);
        if ($request->hasFile('image')) {
            if ($team->image && file_exists(public_path('images/' . $team->image))) {
                unlink(public_path('images/' . $team->image));
            }
            $imageName = time() . '_' . $request->image->getClientOriginalName();
            $request->image->move(public_path('images'), $imageName);
            $team->image = $imageName;
        }
            $team->listing_sequence = $request->listing_sequence;
            $team->name = $request->name;
            $team->desigination = $request->desigination;
            
            $socialAccounts = [];
            foreach ($request->platform as $key => $platform) {
                $socialAccounts[] = [
                    'platform' => $platform,
                    'account' => $request->social_accounts[$key]
                ];
            }
            $team->social_accounts = json_encode($socialAccounts);

            $team->save();
            return redirect()->route('team.index')->with('success', 'Team Update successfully');
    }

    public function delete($id)
    {
        $teams = Teams::findOrFail($id);
        if (file_exists(public_path('images/' . $teams->image))) {
            unlink(public_path('images/' . $teams->image));
        }
        $teams->delete();
        return redirect()->route('team.index')->with('success', 'Team deleted successfully');
    }
}
