<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Home\SubscribeSection;
use App\Page\Subscribe;
use Illuminate\Http\Request;

class SubscribeSectionController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $subscribe = SubscribeSection::findOrFail($id);

        return view('home.subscribe-section.edit', compact('subscribe'));
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
          'title' => 'required|max:255',
    			'sub_title' => 'required|max:255',
    			'description' => 'required|max:60000',
          'placeholder' => 'nullable|max:255',
          'image' => 'file|image|mimes:jpeg,png,jpg,gif,svg',
    		]);
        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')
                                            ->store('uploads', 'public');
        }

        $contactu = SubscribeSection::findOrFail($id);
        $contactu->update($requestData);

        return redirect()->back()->with('flash_message', 'Subscribe Section updated!');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function subscribes(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 10;

        if (!empty($keyword)) {
            $subscribes = Subscribe::where('email', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $subscribes = Subscribe::latest()->paginate($perPage);
        }

        return view('home.subscribe-section.subscribes', compact('subscribes'));
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
    			'email' => 'required|email|max:255',
    		]);
        $requestData = $request->all();

        Subscribe::create($requestData);

        return redirect()->back();
    }

}
