<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = User::paginate(5);
        // $user = DB::table('users')
        //             ->paginate(7)
        //             ->orderByDesc('id')->get();
        $user = User::select("*")
                    ->orderBy("id", "desc")->paginate(7);
        return view('dashboard.member.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:users',
            'email' => 'required|unique:users',
            'phone' => 'required|numeric',
            'password' => 'required|min:8',
            'photo' => 'image|file|max:2048'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        if($request->file('photo')){
            $validatedData['photo'] = $request->file('photo')->store('user-img');
        }
        
        User::create($validatedData);
        
        return redirect('/admin/member')->with('success', 'Member baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->first();
        return view('dashboard.member.show', ['user' => $user]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('dashboard.member.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|numeric',
            'photo' => 'image|file|max:2048'
        ]);

        $user = User::where('id', $id)->first();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');


        if($request->file('photo')){
            if($request->oldPhoto){
                Storage::delete($request->oldPhoto);
            }
            $user->photo = $request->file('photo')->store('user-img');
        }
        
        $user->save();

        return redirect('/admin/member')->with('success', 'Member berhasil diedit');
    }

   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        User::where('id', $id)->delete();
        return redirect('/admin/member')->with('success', 'Akun telah dihapus');

    }
}
