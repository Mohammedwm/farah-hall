<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Hall;
use App\Models\HallService;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class HallServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(auth()->user()->type == 'admin'){
            $hall_services = HallService::get();
        }else{
            $hall_services = HallService::whereHas('hall', function ($query) {
                        $query->where('user_id', auth()->id());
                    })->get();
        }
        return view('dashboard.hall_services.index',compact('hall_services'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $halls = Hall::where([
         // 'user_id' => auth()->id(),
            'status'=>'certified'
            ])->get();
        $services = Service::get();

        return view('dashboard.hall_services.create',compact('halls','services'));
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
            'hall_id' => 'required|exists:halls,id',
          //  'service_id' => ['required','exists:services,id',
            'service_id' =>  [
                'required',
                'exists:services,id',
                Rule::unique('hall_services')
                       ->where('hall_id', $request->hall_id)
                       ->where('service_id', $request->service_id)
               ] ,
            'price' => 'required|int',
        ]);
        $data = $request->except('_token');
        $hallService = HallService::create($data);

        return redirect()
            ->route('dashboard.HallService.index')
            ->with('success', "تمت عملية الإضافة بنجاح");
    }

}
