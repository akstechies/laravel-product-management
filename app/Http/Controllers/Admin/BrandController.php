<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index($id = '')
    {
        $data =  array();
        if($id != ''){
            $data['editbrand'] = Brand::find($id);
            //dd($data['editbrand']);
        }
        $data['allbrands'] = Brand::all();
        return view('admin/brands/index',compact("data"));
    }

    public function create(Request $request)
    {
        //dd($request);

        $data = [
            'name' => $request->name,
        ];

        try {
        $create = Brand::create($data);
        return redirect()->route('admin.manage_category')->with('message', "Brand Added Successfully");
        } catch (\Exception $e) {
            $admin =  null;
            return redirect()->route('admin.manage_category')->with('error', "Exception");
        }
    }

    public function update(Request $request, $id)
    {
        Brand::find($id)->update(['name' => $request->name]);
        return redirect()->route('admin.manage_brand')->with('message', "Brand Updated   Successfully");
    }

    public function delete($id)
    {
        Brand::where('id',$id)->delete();
        return redirect()->route('admin.manage_brand')->with('message', "Brand Deleted   Successfully");
    }

}
