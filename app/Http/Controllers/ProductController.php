<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\IProductRepositary;
use App\Models\Product;


class ProductController extends Controller
{
    public $product;

    public function __construct(IProductRepositary $product){
        $this->product = $product;
    }



    public function index(){

         $products =  $this->product->getAllProducts();
         return view('product.index')->with('products', $products);
    }



    public function create(){
        return view('product.create');
    }



    public function store(Request $request){

              // to validate data
            $request->validate([
                'picture'=>'required',
                'title'=>'required',
                'price'=>'required'
            ]);

            $data = $request->all();

            // for to uplaod image
            if($image = $request-> file('picture')){
                $name = $image->getClientOriginalName();
                $image->move(public_path('images'), $name);

                $data['picture'] = $name;
            }
            $this->product->createProduct($data);
            return redirect('/products');
    }



    public function show($id){
       $product =  $this->product->getSingleProduct($id);

       return view('product.show')->with('product', $product);
    }




    // public function search(Request $request){

    //     if($request->ajax()){

    //         $output = '';

    //         $products = Product::where('title', 'LIKE', '%'.$request->search.'%')
    //                             ->onWhere('price', 'LIKE', '%'.$request->search.'%')
    //                             ->onWhere('description', 'LIKE', '%'.$request->search.'%')
    //                             ->get();

    //         if($products){

    //                 foreach($products as $product){
    //                         $output .=
    //                                 '<div class="card-body">
    //                                     <img src="'.$product->picture.'" class="card-img-top" alt="not found">
    //                                     <h5 class="card-title"><b>'.$product->title.'<b/></h5>
    //                                     <h5 class="card-title">'.$product->price.'</h5>
    //                                     <h5 class="card-title">$'.$product->description.'</h5>
    //                                 </div>
    //                                 ';
    //                 }
    //                 return Response()->json($output);
    //         }
    //     }
    //     return view('product.search');
    // }

    public function search(Request $request){
        if($request->ajax()){
            $output = '';
            $search = $request->search;

            if(!empty($search)){
                $products = Product::where('title', 'LIKE', '%'.$search.'%')
                                    ->orWhere('price', 'LIKE', '%'.$search.'%')
                                    ->orWhere('description', 'LIKE', '%'.$search.'%')
                                    ->get();

                if($products->count() > 0){
                    $output .= '<div class="row">';
                    foreach($products as $product){
                        $output .=
                            '<div class="col-md-4">
                                <div class="card-body">
                                    <img src="'.($product->picture ? '/images/'.$product->picture : '/placeholder-image.jpg').'" class="card-img-top" alt="not found">
                                    <h5 class="card-title"><b>'.$product->title.'</b></h5>
                                    <h5 class="card-title">Price:  $'.$product->price.'.00</h5>
                                    <h5 class="card-title">'.$product->description.'</h5>
                                </div>
                            </div>';
                    }
                    $output .= '</div>';
                } else {
                    // No products found
                    $output = '<div class="alert alert-warning" role="alert">Search product not available</div>';
                }
                return response()->json($output);
            }
        }
        return view('product.search');
    }
}
