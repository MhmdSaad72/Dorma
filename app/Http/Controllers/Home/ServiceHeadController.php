<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Home\ServiceHead;
use Illuminate\Http\Request;

class ServiceHeadController extends Controller
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
        $servicehead = ServiceHead::findOrFail($id);

        return view('home.service-head.edit', compact('servicehead'));
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
    		]);
        $requestData = $request->all();

        $servicehead = ServiceHead::findOrFail($id);
        $servicehead->update($requestData);

        return redirect()->back()->with('flash_message', 'Service updated!');
    }

}
