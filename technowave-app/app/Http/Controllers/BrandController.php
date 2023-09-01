<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class BrandController extends Controller{

    public function index(Request $request){

        $brand_details = Brand::all();
        // dd($brand_details);

        $user_details = Auth::user();
        $brand_details = $this->filterBrand($request);

        return view('template0_pages.admin.brand', [
                        
            'brand_details' => $brand_details,
            'user_details' => $user_details,

        ]);
    }

    public function addBrand(){

        $user_details = Auth::user();   
        return view('template0_pages.admin.addbrand', [

            'user_details' => $user_details,
        ]);

    }

    public function filterBrand(Request $request){

        $params = $request->query();
        $brand_details = Brand::where('id', '>' , 0);
    
        foreach($params as $key => $value){

            if(empty($value)){
                continue;
            }

            switch($key){

                case 'search':
                    $brand_details->where('brand_title', 'LIKE' , '%' .$value. '%')
                    ->orWhere('brand_description', 'LIKE' , '%' .$value. '%')
                    ->orWhere('id', 'LIKE' , '%' .$value. '%');
                    break;

                case 'sort':
                    //localhost:8000/store?sort=title
                    $keyValues = $this->orderBy($value);
                    $brand_details->orderBy($keyValues[0], $keyValues[1]);
                    break;

                default:

                    break;

            }
        }

        return $brand_details->get();
    }
 
    public function insertBrand(Request $request){

        $brand = new Brand();

        $brand->brand_image1 = $request->input('brand_image1');

        if ($request->hasFile('brand_image1')){

            $file = $request->file('brand_image1');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('storage/images/brand/',$filename);
            $brand->brand_image1 = $filename;

        }
        $brand->brand_title = $request->input('brand_title');
        $brand->brand_description = $request->input('brand_description');
        $brand->brand_status = $request->input('brand_status') == TRUE ? '1': '0';
        
        $brand->save();

        // dd($brand);

        return redirect('/brands')->with('status', "Brand Added Successfully");

    }

    public function deleteBrand(Request $request){

        $brand = Brand::where('id', $request->id)->delete();      

        return redirect('/brands')->with('status', "Brand Deleted Successfully");
        
    }

    public function editBrand($id){

        $user_details = Auth::user();
        $brand_details = Brand::findorFail($id);
        // dd($brand_details);

        return view('template0_pages.admin.editbrand', [

            'data' => $brand_details,
            'user_details' => $user_details,

        ]);

    }

    public function updateBrand(Request $request, $id){

        $brand = Brand::findorFail($id);
        // dd($brand_details);

        $brand->brand_image1 = $request->input('brand_image1');

        if ($request->hasFile('brand_image1')){

            $path = 'storage/images/brand/' . $brand->brand_image1;

            if(File::exists($path)){

                File::delete($path);

            }
            $file = $request->file('brand_image1');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('storage/images/brand/',$filename);
            $brand->brand_image1 = $filename;
        }
        
        $brand->brand_title = $request->input('brand_title');
        $brand->brand_description = $request->input('brand_description');
        $brand->brand_status = $request->input('brand_status') == TRUE ? '1': '0';
        $brand->update();


        return redirect('/brands')->with('status', "Brand Updated Successfully");

    }
    
}
