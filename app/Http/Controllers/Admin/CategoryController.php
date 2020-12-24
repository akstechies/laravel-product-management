<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index($id = '')
    {
        $data =  array();
        if($id != ''){
            $data['editcategory'] = Category::find($id);
            //dd($data['editcategory']);
        }
        $data['allcategory'] = Category::all();
        return view('admin/category/index',compact("data"));
    }

    public function add(Request $request)
    {
        //dd($request->file('image'));

        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            $ext = $request->image->getClientOriginalExtension();



            $image = md5($filename). time() . uniqid() .'.'.$ext;
            $request->image->storeAs('admin/images/category', $image, 'public');

            $data = [
                'name' => $request->name,
                'image' => $image,
            ];

            try {
                $create = Category::create($data);
                return redirect()->route('admin.manage_category')->with('message', "Brand Added Successfully");
                } catch (\Exception $e) {
                    $admin =  null;
                    return redirect()->route('admin.manage_category')->with('error', "Exception");
                }
        } else {
            return redirect()->route('admin.manage_category')->with('error', "No Image");
        }
    }

    public function update(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            $ext = $request->image->getClientOriginalExtension();

            $image = Category::find($request->id);
            //dd($image->image);
            Storage::delete('/public/admin/images/category/'.$image->image);

            $image = md5($filename). time() . uniqid() .'.'.$ext;
            $request->image->storeAs('admin/images/category', $image, 'public');

            $data = [
                'name' => $request->name,
                'image' => $image,
            ];
        } else {
            $data = [
                'name' => $request->name,
            ];
        }
        Category::find($id)->update($data);
        return redirect()->route('admin.manage_category')->with('message', "Category Updated   Successfully");
    }

    public function delete($id)
    {
        $image = Category::find($id);
        Storage::delete('/public/admin/images/category/'.$image->image);
        Category::where('id',$id)->delete();
        return redirect()->route('admin.manage_category')->with('message', "Brand Deleted   Successfully");
    }
}
