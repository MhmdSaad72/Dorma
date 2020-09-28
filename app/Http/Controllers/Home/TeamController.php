<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Home\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 10;

        if (!empty($keyword)) {
            $team = Team::where('image', 'LIKE', "%$keyword%")
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->orWhere('position', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $team = Team::latest()->paginate($perPage);
        }

        return view('home.team.index', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $team = Team::all();
        return view('home.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
    			'name' => 'required|max:255',
    			'position' => 'required|max:255',
    			'image' => 'required|file|image|mimes:jpeg,png,jpg,gif,svg',
    			'facebook' => 'nullable|url|max:255',
    			'twitter' => 'nullable|url|max:255',
    			'linkedin' => 'nullable|url|max:255',
    		]);
        $requestData = $request->all();
        $requestData['image'] = $request->file('image')
                                       ->store('uploads', 'public');

        Team::create($requestData);

        return redirect('home/team')->with('flash_message', 'Team Member added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $team = Team::findOrFail($id);

        return view('home.team.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $team = Team::findOrFail($id);

        return view('home.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'name' => 'required|max:255',
    			'position' => 'required|max:255',
    			'image' => 'file|image|mimes:jpeg,png,jpg,gif,svg',
    			'facebook' => 'nullable|url|max:255',
    			'twitter' => 'nullable|url|max:255',
    			'linkedin' => 'nullable|url|max:255',
    		]);
        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')
                                            ->store('uploads', 'public');
        }

        $team = Team::findOrFail($id);
        $team->update($requestData);

        return redirect('home/team')->with('flash_message', 'Team Member updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Team::destroy($id);

        return redirect('home/team')->with('flash_message', 'Team Member deleted!');
    }
}
