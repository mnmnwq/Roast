<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    /**
     * 上传文件
     * @author baiwei@julyedu.cn
     */
    public function formPage()
    {
        return view('request.form');
    }

    /**
     * 接收上传文件资源
     * @author baiwei@julyedu.cn
     */
    public function fileUpload(Request $request)
    {
        if ($request->hasFile('picture')) {
            dd($request->file('picture'));
        }
    }
}
