<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
// use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller{

    public function index(Request $request){

        $category_details = Category::all();
        // dd($category_details);
        $category_details = $this->filterCategory($request);
        $user_details = Auth::user();

        return view('template0_pages.admin.category', [
                        
            'category_details' => $category_details,
            'user_details' => $user_details,

        ]);
    }

    public function addCategory(){

        return view('template0_pages.admin.addcategory');

    }

    public function filterCategory(Request $request){

        $params = $request->query();
        $category_details = Category::where('id', '>' , 0);
    
        foreach($params as $key => $value){

            if(empty($value)){
                continue;
            }

            switch($key){

                case 'search':
                    $category_details->where('category_title', 'LIKE' , '%' .$value. '%')
                    ->orWhere('category_description', 'LIKE' , '%' .$value. '%')
                    ->orWhere('id', 'LIKE' , '%' .$value. '%');
                    break;

                case 'sort':
                    //localhost:8000/store?sort=title
                    $keyValues = $this->orderBy($value);
                    $category_details->orderBy($keyValues[0], $keyValues[1]);
                    break;

                default:

                    break;

            }
        }

        return $category_details->get();
    }
 
    public function insertCategory(Request $request){

        $category = new Category();
        // dd($request);

        if($request->hasFile('category_image1')){

            $file = $request->file('category_image1');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('images/category/',$filename);
            // dd($file);
            $category->category_image1 = $filename;

        }
        // dd('stop');
        $category->category_title = $request->input('category_title');
        $category->category_description = $request->input('category_description');
        $category->category_status = $request->input('category_status') == TRUE ? '1': '0';
        $category->category_image1 = $request->input('category_image1');
        $category->save();

        // dd($category);

        return redirect('/categories')->with('status', "Category Added Successfully");

    }

    public function deleteCategory(Request $request){

        $category = Category::where('id', $request->id)->delete();      

        return redirect('/categories')->with('status', "Category Deleted Successfully");
        
    }

    public function editCategory($id){

        $category_details = Category::findorFail($id);
        // dd($category_details);

        return view('template0_pages.admin.editcategory', [

            'data' => $category_details,

        ]);

    }

    public function updateCategory(Request $request, $id){

        $category = Category::findorFail($id);
        // dd($category_details);

        if ($request->hasFile('category_image1')){

            $path = 'images/category/' . $category->category_image1;

            if(File::exists($path)){

                File::delete($path);

            }
            $file = $request->file('category_image1');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('images/category/',$filename);
            $category->category_image1 = $filename;
        }
        $category->category_title = $request->input('category_title');
        $category->category_description = $request->input('category_description');
        $category->category_status = $request->input('category_status') == TRUE ? '1': '0';
        $category->category_image1 = $request->input('category_image1');
        $category->update();


        return redirect('/categories')->with('status', "Category Updated Successfully");

    }

}
