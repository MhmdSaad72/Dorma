<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Home\SideFeature;
use Illuminate\Http\Request;

class SideFeatureController extends Controller
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
            $sidefeature = SideFeature::where('description', 'LIKE', "%$keyword%")
                ->orWhere('content', 'LIKE', "%$keyword%")
                ->orWhere('feature_1', 'LIKE', "%$keyword%")
                ->orWhere('feature_2', 'LIKE', "%$keyword%")
                ->orWhere('feature_3', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $sidefeature = SideFeature::latest()->paginate($perPage);
        }

        return view('home.side-feature.index', compact('sidefeature'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $sidefeature = SideFeature::all();
        return view('home.side-feature.create');
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
          'description' => 'required|max:255',
    			'content' => 'required|max:60000',
          'icon' => 'required|file|image|mimes:jpeg,png,jpg,gif,svg',
          'feature_1' => 'nullable|max:255',
          'feature_2' => 'nullable|max:255',
          'feature_3' => 'nullable|max:255',
    		]);
        $requestData = $request->all();
        $requestData['icon'] = $request->file('icon')
                                       ->store('uploads', 'public');

        SideFeature::create($requestData);

        return redirect('home/side-feature')->with('flash_message', 'Side Feature added!');
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
        $sidefeature = SideFeature::findOrFail($id);

        return view('home.side-feature.show', compact('sidefeature'));
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
        $sidefeature = SideFeature::findOrFail($id);

        return view('home.side-feature.edit', compact('sidefeature'));
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
          'description' => 'required|max:255',
    			'content' => 'required|max:60000',
          'icon' => 'required|file|image|mimes:jpeg,png,jpg,gif,svg',
          'feature_1' => 'nullable|max:255',
          'feature_2' => 'nullable|max:255',
          'feature_3' => 'nullable|max:255',
    		]);
        $requestData = $request->all();
        if ($request->hasFile('icon')) {
            $requestData['icon'] = $request->file('icon')
                                            ->store('uploads', 'public');
        }

        $sidefeature = SideFeature::findOrFail($id);
        $sidefeature->update($requestData);

        return redirect('home/side-feature')->with('flash_message', 'Side Feature updated!');
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
        SideFeature::destroy($id);

        return redirect('home/side-feature')->with('flash_message', 'Side Feature deleted!');
    }
}
