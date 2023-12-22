<?php

    namespace App\Repository;

    interface IProductRepositary{
        public function getAllProducts();

        public function createProduct(array $data);

        public function getSingleProduct($id);
    }
?>
