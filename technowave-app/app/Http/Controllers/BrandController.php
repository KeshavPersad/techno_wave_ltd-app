<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BrandController extends Controller{

    public function index(){

        $brand_details = Brand::all();
        // dd($brand_details);

        return view('template0_pages.admin.brand', [
                        
            'brand_details' => $brand_details,

        ]);
    }

    public function addBrand(){

        return view('template0_pages.admin.addbrand');

    }
 
    public function insertBrand(Request $request){

        $brand = new Brand();

        if ($request->hasFile('brand_image1')){

            $file = $request->file('brand_image1');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('storage/images/brand',$filename);
            $brand->brand_image1 = $filename;

        }
        $brand->brand_title = $request->input('brand_title');
        $brand->brand_description = $request->input('brand_description');
        $brand->brand_status = $request->input('brand_status') == TRUE ? '1': '0';
        $brand->brand_image1 = $request->input('brand_image1');
        $brand->save();

        // dd($brand);

        return redirect('/brands')->with('status', "Brand Added Successfully");

    }

    public function deleteBrand(Request $request){

        $brand = Brand::where('id', $request->id)->delete();      

        return redirect('/brands')->with('message', 'Brand Deleted Successfully');
        
    }

    public function editBrand($id){

        $brand_details = Brand::findorFail($id);
        // dd($brand_details);

        return view('template0_pages.admin.editbrand', [

            'data' => $brand_details,

        ]);

    }

    public function updateBrand(Request $request, $id){

        $brand = Brand::findorFail($id);
        // dd($brand_details);

        if ($request->hasFile('brand_image1')){

            $path = 'storage/images/brand' . $brand->brand_image1;

            if(File::exists($path)){

                File::delete($path);

            }
            $file = $request->file('brand_image1');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('storage/images/brand',$filename);
            $brand->brand_image1 = $filename;
        }
        $brand->brand_title = $request->input('brand_title');
        $brand->brand_description = $request->input('brand_description');
        $brand->brand_status = $request->input('brand_status') == TRUE ? '1': '0';
        $brand->brand_image1 = $request->input('brand_image1');
        $brand->update();


        return redirect('/brands')->with('status',"Brand Updated Successfully");

    }
    
}