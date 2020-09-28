<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Home\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $perPage = 10;
        $partner = Partner::latest()->paginate($perPage);

        return view('home.partner.index', compact('partner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $partner = Partner::all();
        if ($partner->count() > 7) {
          abort(404);
        }
        return view('home.partner.create');
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
    			'logo' => 'required|file|image|mimes:jpeg,png,jpg,gif,svg'
    		]);
        $requestData = $request->all();
        $requestData['logo'] = $request->file('logo')
                                       ->store('uploads', 'public');

        Partner::create($requestData);

        return redirect('home/partner')->with('flash_message', 'Partner added!');
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
        $partner = Partner::findOrFail($id);

        return view('home.partner.edit', compact('partner'));
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
    			'logo' => 'file|image|mimes:jpeg,png,jpg,gif,svg'
    		]);
        $requestData = $request->all();
        if ($request->hasFile('logo')) {
            $requestData['logo'] = $request->file('logo')
                                            ->store('uploads', 'public');
        }

        $partner = Partner::findOrFail($id);
        $partner->update($requestData);

        return redirect('home/partner')->with('flash_message', 'Partner updated!');
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
        Partner::destroy($id);

        return redirect('home/partner')->with('flash_message', 'Partner deleted!');
    }
}
