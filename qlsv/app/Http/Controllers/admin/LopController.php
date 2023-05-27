<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Service\LopService;
use Illuminate\Http\Request;

class LopController extends Controller
{
    //
    protected $lopService;
    public function __construct(LopService $lopService)
    {
        $this->lopService = $lopService;
    }

    public function create(){
        return view('admin.lop.add',[
            'title'=>'Thêm mới lớp học'
        ]);
    }
    public function postcreate(Request $request){
       //dd($request->input());
        $result = $this->lopService->create($request);
        return redirect()->back();
    }
}
