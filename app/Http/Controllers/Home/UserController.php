<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\User;
use \Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
          $users = User::whereHas('roles')
              ->where(function($query) use ($keyword){
                  $query->where('name', 'LIKE', "%$keyword%")
                  ->orWhere('email', 'LIKE', "%$keyword%")
                  ->orWhereHas('roles', function ($query) use ($keyword){
                    $query->where('name' , 'LIKE', "%$keyword%");
                  });
                })
                ->latest()->paginate($perPage);
        } else {
            $users = User::whereHas('roles')->latest()->paginate($perPage);
        }

        return view('home.users.index', compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('home.users.create');
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
          'name' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          'password' => ['required', 'string', 'min:8', 'confirmed'],
    		]);
        $requestData = $request->all();

        $user = User::create([
          'name' => $requestData['name'],
          'email' => $requestData['email'],
          'password' => Hash::make($requestData['password']),
          'email_verified_at' => Carbon::now(),
        ]);
        $user->assignRole('User');

        return redirect('home/users')->with('flash_message', 'User added!');
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
        $user = User::findOrFail($id);

        return view('home.users.edit', compact('user'));
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
          'name' => ['required', 'string', 'max:255'],
          'email' => 'required|string|email|max:255|unique:users,email,'. $id,
          'password' => 'required|string|min:8|confirmed',
    		]);
        $requestData = $request->all();

        $user = User::findOrFail($id);
        $user->update([
          'name' => $requestData['name'],
          'email' => $requestData['email'],
          'password' => Hash::make($requestData['password']),
          'email_verified_at' => Carbon::now(),
        ]);
        if ($user->roles->first()->name == 'Administrator') {
          Auth::logout();
          return redirect()->back();
        }

        return redirect('home/users')->with('flash_message', 'User updated!');
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
        User::destroy($id);

        return redirect('home/users')->with('flash_message', 'User deleted!');
    }
}
