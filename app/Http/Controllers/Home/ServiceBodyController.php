<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Home\ServiceBody;
use Illuminate\Http\Request;

class ServiceBodyController extends Controller
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
            $servicebody = ServiceBody::where('description', 'LIKE', "%$keyword%")
                ->orWhere('content', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $servicebody = ServiceBody::latest()->paginate($perPage);
        }

        return view('home.service-body.index', compact('servicebody'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $servicebody = ServiceBody::all();
        if ($servicebody->count() > 5) {
          abort(404);
        }
        return view('home.service-body.create');
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

        ServiceBody::create($requestData);

        return redirect('home/service-body')->with('flash_message', 'Service added!');
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
        $servicebody = ServiceBody::findOrFail($id);

        return view('home.service-body.edit', compact('servicebody'));
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

        $servicebody = ServiceBody::findOrFail($id);
        $servicebody->update($requestData);

        return redirect('home/service-body')->with('flash_message', 'Service updated!');
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
        ServiceBody::destroy($id);

        return redirect('home/service-body')->with('flash_message', 'Service deleted!');
    }
}
