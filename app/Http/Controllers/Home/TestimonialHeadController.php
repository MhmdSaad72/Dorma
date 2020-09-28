<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Home\TestimonialHead;
use Illuminate\Http\Request;

class TestimonialHeadController extends Controller
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
        $testimonial = TestimonialHead::findOrFail($id);

        return view('home.testimonial-section.edit', compact('testimonial'));
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
          'sub_title' => 'required|max:255',
    			'title' => 'required|max:255',
    			'description' => 'required|max:60000',
    		]);
        $requestData = $request->all();

        $testimonial = TestimonialHead::findOrFail($id);
        $testimonial->update($requestData);

        return redirect()->back()->with('flash_message', 'Testimonial Section updated!');
    }

}
