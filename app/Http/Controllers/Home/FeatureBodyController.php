<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Home\FeatureBody;
use Illuminate\Http\Request;

class FeatureBodyController extends Controller
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
            $featurebody = FeatureBody::where('description', 'LIKE', "%$keyword%")
                ->orWhere('content', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $featurebody = FeatureBody::latest()->paginate($perPage);
        }

        return view('home.feature-body.index', compact('featurebody'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $featurebody = FeatureBody::all();
        return view('home.feature-body.create');
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
    		]);
        $requestData = $request->all();
        $requestData['icon'] = $request->file('icon')
                                       ->store('uploads', 'public');

        FeatureBody::create($requestData);

        return redirect('home/feature-body')->with('flash_message', 'Feature added!');
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
        $featurebody = FeatureBody::findOrFail($id);

        return view('home.feature-body.edit', compact('featurebody'));
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
          'icon' => 'file|image|mimes:jpeg,png,jpg,gif,svg',
    		]);
        $requestData = $request->all();
        if ($request->hasFile('icon')) {
            $requestData['icon'] = $request->file('icon')
                                            ->store('uploads', 'public');
        }

        $featurebody = FeatureBody::findOrFail($id);
        $featurebody->update($requestData);

        return redirect('home/feature-body')->with('flash_message', 'Feature updated!');
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
        FeatureBody::destroy($id);

        return redirect('home/feature-body')->with('flash_message', 'Feature deleted!');
    }
}
