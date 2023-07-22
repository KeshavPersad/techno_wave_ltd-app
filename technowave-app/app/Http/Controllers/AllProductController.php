<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AllProductController extends Controller
{
    public function index(Request $request){

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

}
