<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Home\WhoWeFeature;
use App\Home\WhoWe;
use Illuminate\Http\Request;

class WhoWeFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $perPage = 10;
        $whowefeature = WhoWeFeature::latest()->paginate($perPage);

        return view('home.who-we-feature.index', compact('whowefeature'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $whowefeature = WhoWeFeature::all();
        if ($whowefeature->count() > 5) {
          abort(404);
        }
        return view('home.who-we-feature.create');
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
    			'title' => 'required|max:255',
    		]);
        $requestData = $request->all();
        $requestData['who_id'] = WhoWe::first()->id;

        WhoWeFeature::create($requestData);

        return redirect('home/who-we-feature')->with('flash_message', 'Feature added!');
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
      abort(404);
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
        $whowefeature = WhoWeFeature::findOrFail($id);

        return view('home.who-we-feature.edit', compact('whowefeature'));
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
    			'title' => 'required|max:255'
    		]);
        $requestData = $request->all();
        $requestData['who_id'] = WhoWe::first()->id;

        $whowefeature = WhoWeFeature::findOrFail($id);
        $whowefeature->update($requestData);

        return redirect('home/who-we-feature')->with('flash_message', 'Feature updated!');
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
        WhoWeFeature::destroy($id);

        return redirect('home/who-we-feature')->with('flash_message', 'Feature deleted!');
    }
}
