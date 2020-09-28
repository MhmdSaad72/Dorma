<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Home\FaqQuestion;
use Illuminate\Http\Request;

class FaqQuestionController extends Controller
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
          $question = FaqQuestion::where('question', 'LIKE', "%$keyword%")
              ->orWhere('answer', 'LIKE', "%$keyword%")
              ->latest()->paginate($perPage);
      } else {
          $question = FaqQuestion::latest()->paginate($perPage);
      }

      return view('home.faq-question.index', compact('question'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\View\View
   */
  public function create()
  {
      // $question = FaqQuestion::all();
      // if ($question->count() > 5) {
      //   abort(404);
      // }
      return view('home.faq-question.create');
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
        'question' => 'required|max:255',
        'answer' => 'required|max:60000',
      ]);
      $requestData = $request->all();

      FaqQuestion::create($requestData);

      return redirect('home/faq-question')->with('flash_message', 'Question added!');
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
      $question = FaqQuestion::findOrFail($id);

      return view('home.faq-question.edit', compact('question'));
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
        'question' => 'required|max:255',
        'answer' => 'required|max:60000',
      ]);
      $requestData = $request->all();

      $question = FaqQuestion::findOrFail($id);
      $question->update($requestData);

      return redirect('home/faq-question')->with('flash_message', 'Question updated!');
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
      FaqQuestion::destroy($id);

      return redirect('home/faq-question')->with('flash_message', 'Question deleted!');
  }
}
