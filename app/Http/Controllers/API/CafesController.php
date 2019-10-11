<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cafe;

class CafesController extends Controller
{
    /**
     * 咖啡店列表
     * @author baiwei@julyedu.cn
     */
    public function getCafes()
    {
        $cafes = Cafe::all();
        return response()->json($cafes);
    }

    /**
     * 咖啡店详情
     * @param $id
     * @author baiwei@julyedu.cn
     */
    public function getCafe($id){
        $cafe = Cafe::where('id', '=', $id)->first();
        return response()->json($cafe);
    }

    /**
     * 新建咖啡店
     * @author baiwei@julyedu.cn
     */

    public function postNewCafe(){
        $cafe = new Cafe();

        $cafe->name     = Request::get('name');
        $cafe->address  = Request::get('address');
        $cafe->city     = Request::get('city');
        $cafe->state    = Request::get('state');
        $cafe->zip      = Request::get('zip');

        $cafe->save();

        return response()->json($cafe, 201);
    }
}
