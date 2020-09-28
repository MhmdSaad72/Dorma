<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Page\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
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
          $contacts = ContactUs::where('name', 'LIKE', "%$keyword%")
              ->orWhere('email', 'LIKE', "%$keyword%")
              ->orWhere('subject', 'LIKE', "%$keyword%")
              ->orWhere('message', 'LIKE', "%$keyword%")
              ->latest()->paginate($perPage);
      } else {
          $contacts = ContactUs::latest()->paginate($perPage);
      }

      return view('home.contacts.index', compact('contacts'));
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
        'name' => 'required|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'required|max:255',
        'message' => 'required|max:60000',
      ]);
      $requestData = $request->all();

      ContactUs::create($requestData);

      return redirect()->back();
  }
}
