<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Home\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
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
        $footer = Footer::findOrFail($id);

        return view('home.footer.edit', compact('footer'));
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
          'logo_name' => 'required|max:255',
    			'description' => 'required|max:60000',
          'email' => 'required|email|max:255',
          'mail_address' => 'required|max:255',
          'address' => 'required|max:255',
          'phone' => 'required|max:255',
          'logo' => 'file|image|mimes:jpeg,png,jpg,gif,svg',
          'facebook' => 'required|url|max:255',
          'twitter' => 'required|url|max:255',
          'linkedin' => 'required|url|max:255',
          'instagram' => 'required|url|max:255',
          'google_plus' => 'required|url|max:255',
    		]);
        $requestData = $request->all();
        if ($request->hasFile('logo')) {
            $requestData['logo'] = $request->file('logo')
                                            ->store('uploads', 'public');
        }
        $footer = Footer::findOrFail($id);
        $footer->update($requestData);

        return redirect()->back()->with('flash_message', 'Footer updated!');
    }
}
