<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;//モデルの指定

class SettingController extends Controller
{
    
    //
    public function getList(Request $request)	
    {	
	    $data = Setting::where('uid', '=', $request->uid)->get();
	    return $data;  
    }
    
    public function getListByName(Request $request)	
    {	
	    $data = Setting::where('uid', '=', $request->uid)->where('name','=',$request->name)->get();
	    return $data;
    }
    public function insert(Request $request)
    {
        $setting = new Setting();
        $setting->uid = $request->uid;
        $setting->name = $request->name;
        $setting->val = $request->val;
        $setting->fval = $request->fval;
        $setting->text = $request->text;
        $setting->save();
    } 
}
