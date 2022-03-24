<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Hall;
use Illuminate\Http\Request;

class HallsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $halls = Hall::all();
        return view('dashboard.halls.index',compact('halls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.halls.create',[
            'hall' => new Hall(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'owner_name' => 'required',
            'hall_name' => 'required',
            'size' => 'nullable|int',
            'created_date' => 'nullable|date',
            'min_count' => 'nullable|int',
            'max_count' => 'nullable|int|gt:min_count',
        ]);
        $data = $request->except('_token');
        $data['user_id'] = auth()->user()->id;
        $hall = Hall::create($data);

        return redirect()
            ->route('dashboard.hall.index')
            ->with('success', "تمت عملية الإضافة بنجاح");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hall = Hall::findOrFail($id);
        return view('dashboard.halls.edit',compact('hall'));
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
        $hall = Hall::findOrFail($id);

        $request->validate([
            'owner_name' => 'required',
            'hall_name' => 'required',
            'size' => 'nullable|int',
            'created_date' => 'nullable|date',
            'min_count' => 'nullable|int',
            'max_count' => 'nullable|int|gte:min_count',
        ]);
        $data = $request->except('_token');

        $hall->update($data);

        return redirect()
            ->route('dashboard.hall.index')
            ->with('success', "تمت عملية التعديل بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
