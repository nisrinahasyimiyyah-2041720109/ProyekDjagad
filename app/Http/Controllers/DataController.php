<?php

namespace App\Http\Controllers;

use App\Data;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyDataRequest;
use App\Http\Requests\StoreDataRequest;
use App\Http\Requests\UpdateDataRequest;
use App\Models\Data as ModelsData;
use App\Models\User as ModelsUser;
use App\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelsData::with('user')->get();
        $user = ModelsUser::paginate(7);
        return view('dashboard.data.index', compact('data', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = ModelsUser::pluck('nama', 'id');

        return view('dashboard.data.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDataRequest $request)
    {
        ModelsData::create($request->all());

        return redirect()->route('dashboard.data.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function show(ModelsData $data)
    {
        return view('dashboard.data.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelsData $data)
    {
        $users = ModelsUser::pluck('nama', 'id');

        return view('dashboard.data.edit', compact('data', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDataRequest  $request
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDataRequest $request, ModelsData $data)
    {
        $data->update($request->all());

        return redirect()->route('dashboard.data.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelsData $data)
    {
        $data->delete();

        return back();
    }
}
