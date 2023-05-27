<?php

namespace App\Http\Service;

use App\Models\Lop;
use PHPUnit\Exception;

class LopService
{
    public function create($request){
        try {
            Lop::create([
                'malop'=>$request->input('malop'),
                'tenlop'=>$request->input('tenlop'),
                'mota'=>$request->input('mota'),
                'soluongsv'=>$request->input('soluongsv'),
            ]);
            Session()->flash('success','Thêm mới lớp học thành công');

        }
        catch (Exception $ex){
            Session()->flash('error',$ex->getMessage());
            return false;
        }
        return true;
    }
}
