<?php

namespace App\Http\Controllers;


use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductController extends Controller{

    public function index(Request $request){

        $product_details = Product::all();
        //  dd($product_details);

        $category = Product::select('category_id')->distinct()->get();
        $brand = Product::select('brand_id')->distinct()->get();

        $bestSellingProducts = $this->bestSellingProducts();
        $product_details = $this->filterProducts($request);

        return view('template0_pages.storepage', [
                        
            'product_details' => $product_details,
            'category' => $category,
            'brand' => $brand,
            'bestSellingProducts' => $bestSellingProducts,

        ]);

    }

    public function storeProductList(Request $request){

        $product_details = Product::all();
        $bestSellingProducts = $this->bestSellingProducts();
        // dd($product_details);
        $product_details = $this->filterProducts($request);
        $category = Product::select('category_id')->distinct()->get();
        $brand = Product::select('brand_id')->distinct()->get();
        
        

        return view('template0_pages.listpage', [
                        
            'product_details' => $product_details,
            'category' => $category,
            'brand' => $brand,
            'bestSellingProducts' => $bestSellingProducts,

        ]);

    }

    public function allProductAdmin(Request $request){

        $product_details = Product::all();
        // dd($product_details);
        $category_details = Category::all();
        $brand_details = Brand::all();
        $category = Product::select('category_id')->distinct()->get();
        $brand = Product::select('brand_id')->distinct()->get();
        $user_details = Auth::user();

        $product_details = $this->filterProducts($request);

       

        return view('template0_pages.admin.allproducts', [
                        
            'product_details' => $product_details,
            'category_details' => $category_details,
            'brand_details' => $brand_details,
            'category' => $category,
            'brand' => $brand,
            'user_details' => $user_details,

        ]);

    }

    public function allProductListAdmin(Request $request){

        $product_details = Product::all();
        // dd($product_details);
        $category_details = Category::all();
        $brand_details = Brand::all();
        $category = Product::select('category_id')->distinct()->get();
        $brand = Product::select('brand_id')->distinct()->get();
        $user_details = Auth::user();

        $product_details = $this->filterProducts($request);

        return view('template0_pages.admin.allproductslist', [
                        
            'product_details' => $product_details,
            'category_details' => $category_details,
            'brand_details' => $brand_details,
            'category' => $category,
            'user_details' => $user_details,
            
            'brand' => $brand,

        ]);

    }


    public function filterProducts(Request $request){

        $params = $request->query();
        $product_details = Product::where('id', '>' , 0);
    
        foreach($params as $key => $value){

            if(empty($value)){
                continue;
            }

            switch($key){

                case 'category':
                    $product_details->where('category_id', $value);
                    break;
                
                case 'brand':
                    $product_details->where('brand_id', $value);
                    break;

                case 'search':
                    $product_details->where('product_title', 'LIKE' , '%' .$value. '%')
                    ->orWhere('product_description', 'LIKE' , '%' .$value. '%');
                    break;

                case 'min_price':
                    $product_details->where('product_price', '>=' ,$value);
                    break;

                case 'max_price':
                    $product_details->where('product_price', '<=' ,$value);
                    break;

                case 'sort':
                    //localhost:8000/store?sort=title
                    $keyValues = $this->orderBy($value);
                    $product_details->orderBy($keyValues[0], $keyValues[1]);
                    break;

                default:

                    break;

            }
        }

        return $product_details->get();
    }

    public function orderBy($value){

        switch ($value){

            case 'title':
                return ['product_title', 'asc'];
            break;
            
            case 'title-desc':
                return ['product_title', 'desc'];
            break;

            case 'price':
                return ['product_price', 'asc'];
            break;
            
            case 'price-desc':
                return ['product_price', 'desc'];
            break;
            
            default:
               return ['product_title', 'asc'];
            break;
        }

    }
    
    public function bestSellingProducts(){

        return DB::table('order_product')
        ->select(DB::raw('*, SUM(order_product_quantity) as quantity_sold'))
        ->join('products', 'order_product.product_id', '=', 'products.id')
        ->groupBy('product_id')
        ->orderByRaw('quantity_sold DESC')
        ->limit(5)
        ->get();

    }

    public function addProduct(){

        $category_details = Category::all();
        $brand_details = Brand::all();
        $user_details = Auth::user();

        return view('template0_pages.admin.addproduct', [
            
            'category_details' => $category_details,
            'brand_details' => $brand_details,
            'user_details' => $user_details,

        ]);

    }
 
    public function insertProduct(Request $request){

        $product = new Product();
        
        $product->product_image1 = $request->input('product_image1');
        if ($request->hasFile('product_image1')){

            $file = $request->file('product_image1');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('storage/images/products/',$filename);
            $product->product_image1 = $filename;

        }

        $product->product_image2 = $request->input('product_image2');
        if ($request->hasFile('product_image2')){

            $file = $request->file('product_image2');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('storage/images/products/',$filename);
            $product->product_image2 = $filename;

        }

        $product->product_image3 = $request->input('product_image3');
        if ($request->hasFile('product_image3')){

            $file = $request->file('product_image3');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('storage/images/products/',$filename);
            $product->product_image3 = $filename;

        }

        $product->product_image4 = $request->input('product_image4');
        if ($request->hasFile('product_image4')){

            $file = $request->file('product_image4');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('storage/images/products/',$filename);
            $product->product_image4 = $filename;

        }


        $product->category_id = $request->input('category_id');
        $product->brand_id = $request->input('brand_id');
        $product->product_title = $request->input('product_title');
        $product->product_description = $request->input('product_description');
        $product->product_add_info = $request->input('product_add_info');
        $product->product_price = $request->input('product_price');
        $product->product_quantity = $request->input('product_quantity');
        $product->product_status = $request->input('product_status');
        $product->save();

        // dd($product);

        return redirect('/allproducts')->with('status', "Product Added Successfully");

    }

    public function deleteProduct(Request $request){

        $product = Product::where('id', $request->id)->delete();      

        return redirect('/allproducts')->with('status', 'Product Deleted Successfully');
        
    }

    public function editProduct($id){

        $product_details = Product::findorFail($id);
        // dd($product_details);
        $user_details = Auth::user();

        $category_details = Category::all();
        $brand_details = Brand::all();

        return view('template0_pages.admin.editproduct', [

            'data' => $product_details,
            'category_details' => $category_details,
            'brand_details' => $brand_details,
            'user_details' => $user_details,

        ]);

    }

    public function updateProduct(Request $request, $id){

        $product = Product::findorFail($id);
        // dd($product);

        if ($request->hasFile('product_image1')){

            $path = 'storage/images/products/' . $product->product_image1;

            if(File::exists($path)){

                File::delete($path);

            }
            $file = $request->file('product_image1');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('storage/images/products/',$filename);
            $product->product_image1 = $filename;
        }
        $product->product_title = $request->input('product_title');
        $product->product_description = $request->input('product_description');
        $product->product_add_info = $request->input('product_add_info');
        $product->product_price = $request->input('product_price');
        $product->product_quantity = $request->input('product_quantity');
        $product->product_status = $request->input('product_status');
        $product->update();


        return redirect('/allproducts')->with('status' ,"Product Updated Successfully");

    }



}
