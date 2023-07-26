<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductController extends Controller{

    public function index(Request $request){

        $product_details = Product::all();
        $bestSellingProducts = $this->bestSellingProducts();
        // dd($product_details);

        $product_details = $this->filterProducts($request);

        $category_details = Product::select('product_category')->distinct()->get();
        $brand_details = Product::select('product_brand')->distinct()->get();

        return view('template0_pages.storepage', [
                        
            'product_details' => $product_details,
            'category_details' => $category_details,
            'brand_details' => $brand_details,
            'bestSellingProducts' => $bestSellingProducts,

        ]);

    }

    public function storeProductList(Request $request){

        $product_details = Product::all();
        $bestSellingProducts = $this->bestSellingProducts();
        // dd($product_details);

        $product_details = $this->filterProducts($request);

        $category_details = Product::select('product_category')->distinct()->get();
        $brand_details = Product::select('product_brand')->distinct()->get();

        return view('template0_pages.listpage', [
                        
            'product_details' => $product_details,
            'category_details' => $category_details,
            'brand_details' => $brand_details,
            'bestSellingProducts' => $bestSellingProducts,

        ]);

    }

    public function allProductAdmin(Request $request){

        $product_details = Product::all();
        // dd($product_details);

        $product_details = $this->filterProducts($request);

        $category_details = Product::select('product_category')->distinct()->get();
        $brand_details = Product::select('product_brand')->distinct()->get();

        return view('template0_pages.admin.allproducts', [
                        
            'product_details' => $product_details,
            'category_details' => $category_details,
            'brand_details' => $brand_details,

        ]);

    }

    public function allProductListAdmin(Request $request){

        $product_details = Product::all();
        // dd($product_details);

        $product_details = $this->filterProducts($request);

        $category_details = Product::select('product_category')->distinct()->get();
        $brand_details = Product::select('product_brand')->distinct()->get();

        return view('template0_pages.admin.allproductslist', [
                        
            'product_details' => $product_details,
            'category_details' => $category_details,
            'brand_details' => $brand_details,

        ]);

    }

    public function productDetailsAdmin($id){

        $product_details = Product::findorFail($id);

        // dd($product_details);

        return view('template0_pages.admin.adminproductdetails', [
            'data' => $product_details,

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
                    $product_details->where('product_category', $value);
                    break;
                
                case 'brand':
                    $product_details->where('product_brand', $value);
                    break;

                case 'search':
                    $product_details->where('product_title', 'LIKE' , '%' .$value. '%');
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

        return view('template0_pages.admin.addproduct');

    }
 
    public function insertProduct(Request $request){

        $product = new Product();

        if ($request->hasFile('product_image1')){

            $file = $request->file('product_image1');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('images/products/',$filename);
            $product->product_image1 = $filename;

        }
        $product->product_title = $request->input('product_title');
        $product->product_description = $request->input('product_description');
        $product->product_add_info = $request->input('product_add_info');
        $product->product_price = $request->input('product_price');
        $product->product_quantity = $request->input('product_quantity');
        $product->product_image1 = $request->input('product_image1');
        $product->product_image2 = $request->input('product_image2');
        $product->product_image3 = $request->input('product_image3');
        $product->product_image4 = $request->input('product_image4');
        $product->product_status = $request->input('product_status');
        $product->product_category = $request->input('product_category');
        $product->product_brand = $request->input('product_brand');
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

        return view('template0_pages.admin.editproduct', [

            'data' => $product_details,

        ]);

    }

    public function updateProduct(Request $request, $id){

        $product = Product::findorFail($id);
        // dd($product_details);

        // if ($request->hasFile('product_image1')){

        //     $path = 'storage/images/product' . $product->product_image1;

        //     if(File::exists($path)){

        //         File::delete($path);

        //     }
        //     $file = $request->file('product_image1');
        //     $ext = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$ext;
        //     $file->move('storage/images/product',$filename);
        //     $product->product_image1 = $filename;
        // }
        $product->product_title = $request->input('product_title');
        $product->product_description = $request->input('product_description');
        $product->product_add_info = $request->input('product_add_info');
        $product->product_price = $request->input('product_price');
        $product->product_quantity = $request->input('product_quantity');
        $product->product_image1 = $request->input('product_image1');
        $product->product_image2 = $request->input('product_image2');
        $product->product_image3 = $request->input('product_image3');
        $product->product_image4 = $request->input('product_image4');
        $product->product_status = $request->input('product_status');
        $product->product_category = $request->input('product_category');
        $product->product_brand = $request->input('product_brand');
        $product->update();


        return redirect('/allproducts')->with('status',"Product Updated Successfully");

    }


}
