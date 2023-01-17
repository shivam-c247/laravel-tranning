<?php

namespace App\Repositories;

use App\Models\Product;


class ProductRepository
{
    protected $product;
      /**
       * Constructor of the ProductRepository
       */
      public function __construct(Product $product)
      {
          $this->product = $product;
      }


      /*
      *  Get all products for products
      */
      public function getAllProducts($paginate = true){
  
            return Product::latest()->paginate(4);

 
      }

   /*
  *  Save product details
  */
    public function saveProduct($post,$product = null){

        if (empty($product)) {

          $product = new Product($post);
        } else {

          $product->fill($post);
        }
        $product->product_name = (!empty($post['product_name']))?$post['product_name']:NULL;
        $product->product_sub_name = (!empty($post['product_sub_name']))?$post['product_sub_name']:NULL;
        $product->product_abbreviation = (!empty($post['product_abbreviation']))?$post['product_abbreviation']:NULL;
        $product->price = (!empty($post['price']))?$post['price']:NULL;
        $product->sell_price = (!empty($post['sell_price']))?$post['sell_price']:NULL;
        $product->save();
        return $product;

    }








}
