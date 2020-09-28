<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Home\NavBar;
use Illuminate\Http\Request;

class NavBarController extends Controller
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
        $navbar = NavBar::findOrFail($id);

        return view('home.nav-bar.edit', compact('navbar'));
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
          'logo' => 'file|image|mimes:jpeg,png,jpg,gif,svg',
    			'logo_name' => 'required|max:255',
    			'home' => 'required|max:255',
    			'home_style_1' => 'required|max:255',
    			'home_style_2' => 'required|max:255',
    			'home_style_3' => 'required|max:255',
    			'about_us' => 'required|max:255',
    			'faq' => 'required|max:255',
    			'pricing' => 'required|max:255',
    			'contact' => 'required|max:255',
    			'services' => 'required|max:255',
    		]);
        $requestData = $request->all();
        if ($request->hasFile('logo')) {
            $requestData['logo'] = $request->file('logo')
                                            ->store('uploads', 'public');
        }

        $navbar = NavBar::findOrFail($id);
        $navbar->update($requestData);

        return redirect()->back()->with('flash_message', 'NavBar updated!');
    }
}
