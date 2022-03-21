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
        $profileUser = ProfileUser::updateOrCreate(
            ['user_id' => $data['user_id'] ]
            ,
            [
                'owner_name'    => $data['owner_name'],
                'hall_name'     => $data['hall_name'],
                'address'       => $data['address'],
                'created_date'  => $data['created_date'],
                'mobile'        => $data['mobile'],
                'tel'           => $data['tel'],
                'size'          => $data['size'],
            //    'min_count'     => $data['min_count'],
            //    'max_count'     => $data['max_count'],
            ]
        );
        return redirect()
            ->route('dashboard.profile')
            ->with('success', "تمت العملية بنجاح");
    }
}
