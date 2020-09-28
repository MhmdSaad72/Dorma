<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Home\MainImage;
use Illuminate\Http\Request;

class MainImageController extends Controller
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
        $mainimage = MainImage::findOrFail($id);

        return view('home.main-image.edit', compact('mainimage'));
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
    			'image' => 'file|image|mimes:jpeg,png,jpg,gif,svg'
    		]);
        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')
                                            ->store('uploads', 'public');
        }

        $mainimage = MainImage::findOrFail($id);
        $mainimage->update($requestData);

        return redirect()->back()->with('flash_message', 'Image updated!');
    }
}
