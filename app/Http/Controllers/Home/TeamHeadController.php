<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Home\TeamHead;
use Illuminate\Http\Request;

class TeamHeadController extends Controller
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
        $teamhead = TeamHead::findOrFail($id);

        return view('home.team-head.edit', compact('teamhead'));
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

        $teamhead = TeamHead::findOrFail($id);
        $teamhead->update($requestData);

        return redirect()->back()->with('flash_message', 'Team updated!');
    }
}
