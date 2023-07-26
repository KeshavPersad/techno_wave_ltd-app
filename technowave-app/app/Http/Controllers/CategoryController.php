<?php

namespace App\Http\Controllers;

use App\Models\Category;
// use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller{

    public function index(){

        $category_details = Category::all();
        // dd($category_details);

        return view('template0_pages.admin.category', [
                        
            'category_details' => $category_details,

        ]);
    }

    public function addCategory(){

        return view('template0_pages.admin.addcategory');

    }
 
    public function insertCategory(Request $request){

        $category = new Category();

        if ($request->hasFile('category_image1')){

            $file = $request->file('category_image1');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('storage/images/category',$filename);
            $category->category_image1 = $filename;

        }
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

        return redirect('/categories')->with('message', 'Category Deleted Successfully');
        
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

            $path = 'storage/images/category' . $category->category_image1;

            if(File::exists($path)){

                File::delete($path);

            }
            $file = $request->file('category_image1');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('storage/images/category',$filename);
            $category->category_image1 = $filename;
        }
        $category->category_title = $request->input('category_title');
        $category->category_description = $request->input('category_description');
        $category->category_status = $request->input('category_status') == TRUE ? '1': '0';
        $category->category_image1 = $request->input('category_image1');
        $category->update();


        return redirect('/categories')->with('status',"Category Updated Successfully");

    }
}