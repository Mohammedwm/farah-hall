<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ProfileUser;
use Illuminate\Http\Request;

class ProfileUserController extends Controller
{
    public function index()
    {
        return view('dashboard.profile.index');
    }
    public function store(Request $request)
    {
        $rules = $this->rules();
        $request->validate($rules, [
            'owner_name' => 'required|exists:profile_users,id',
            'hall_name' => 'required|exists:profile_users,id',
            'compare_price' => 'nullable|numeric|gt:price',
            'mobile' => 'nullable|int',
            'tel' => 'nullable|int',
            'size' => 'nullable|int',
            'created_date' => 'nullable|date',
        ]);

        $profileUser = ProfileUser::create($request->all());
        return redirect()
            ->route('dashboard.profile.index')
            ->with('success', "تمت العملية بنجاح");
    }
}
