<?php

    namespace App\Repository;
    use App\Models\Product;

    class ProductRepositary implements IProductRepositary{

        public function getAllProducts(){
            return Product::all();
        }


        public function createProduct(array $data)
        {
            Product::insert([
                'picture' => $data['picture'],
                'title' => $data['title'],
                'price'=> $data['price'],
                'description'=> $data['description']
            ]);

        }

        public function getSingleProduct($id){
                return Product::find($id);
        }

    }
?>
