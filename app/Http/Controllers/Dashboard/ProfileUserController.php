<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ProfileUser;
use Illuminate\Http\Request;

class ProfileUserController extends Controller
{
    public function index()
    {
        $profile = ProfileUser::where('user_id',auth()->user()->id)->first();
        //dd($profile);
        return view('dashboard.profile.index',compact('profile'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'owner_name' => 'required',
            'hall_name' => 'required',
            'mobile' => 'nullable|int',
            'tel' => 'nullable|int',
            'size' => 'nullable|int',
            'created_date' => 'nullable|date',
        ]);
        $data = $request->except('_token');
        $data['user_id'] = auth()->user()->id;
        $profileUser = ProfileUser::create($data);
        return redirect()
            ->route('dashboard.profile.index')
            ->with('success', "تمت العملية بنجاح");
    }
}
