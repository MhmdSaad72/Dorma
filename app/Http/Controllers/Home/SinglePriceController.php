<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Home\SinglePrice;
use Illuminate\Http\Request;

class SinglePriceController extends Controller
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
            $singleprice = SinglePrice::where('type', 'LIKE', "%$keyword%")
                ->orWhere('price', 'LIKE', "%$keyword%")
                ->orWhere('period', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $singleprice = SinglePrice::latest()->paginate($perPage);
        }

        return view('home.single-price.index', compact('singleprice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $singleprice = SinglePrice::all();
        return view('home.single-price.create');
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
    			'type' => 'required|max:255',
    			'price' => 'required|max:255|gte:0',
    			'period' => 'required|max:255',
    			'detail_1' => 'nullable|max:255',
    			'detail_2' => 'nullable|max:255',
    			'detail_3' => 'nullable|max:255',
    			'detail_4' => 'nullable|max:255',
    			'detail_5' => 'nullable|max:255',
    		]);
        $requestData = $request->all();

        SinglePrice::create($requestData);

        return redirect('home/single-price')->with('flash_message', 'Pricing Plan added!');
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
        $singleprice = SinglePrice::findOrFail($id);

        return view('home.single-price.show', compact('singleprice'));
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
        $singleprice = SinglePrice::findOrFail($id);

        return view('home.single-price.edit', compact('singleprice'));
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
          'type' => 'required|max:255',
    			'price' => 'required|max:255|gte:0',
    			'period' => 'required|max:255',
    			'detail_1' => 'nullable|max:255',
    			'detail_2' => 'nullable|max:255',
    			'detail_3' => 'nullable|max:255',
    			'detail_4' => 'nullable|max:255',
    			'detail_5' => 'nullable|max:255',
    		]);
        $requestData = $request->all();

        $singleprice = SinglePrice::findOrFail($id);
        $singleprice->update($requestData);

        return redirect('home/single-price')->with('flash_message', 'Pricing Plan updated!');
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
        SinglePrice::destroy($id);

        return redirect('home/single-price')->with('flash_message', 'Pricing Plan deleted!');
    }
}
