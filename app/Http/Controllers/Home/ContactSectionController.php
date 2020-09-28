<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Home\ContactSection;
use Illuminate\Http\Request;

class ContactSectionController extends Controller
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
        $contactsection = ContactSection::findOrFail($id);

        return view('home.contact-section.edit', compact('contactsection'));
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
      dd($request->all());
        $this->validate($request, [
          'title' => 'required|max:255',
    			'sub_title' => 'required|max:255',
    			'description' => 'required|max:60000',
    		]);
        $requestData = $request->all();

        $contactsection = ContactSection::findOrFail($id);
        $contactsection->update($requestData);

        return redirect()->back()->with('flash_message', 'Contact Section updated!');
    }

}
