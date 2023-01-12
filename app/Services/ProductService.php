<?php
namespace App\Services;

use App\Repositories\ProductRepository;
use App\Models\Product;

class ProductService
{
    protected $productRepository;
      /**
       * Constructor of the ProductService
       */
      public function __construct(ProductRepository $productRepository)
      {
          $this->productRepository = $productRepository;
      }



  /*
    *  Get all  products list
    */
    public function getAllProducts($request = [])
    {
        return $this->productRepository->getAllProducts($request);
    }

    /*
    *  Function to save Product details
    */
    function saveProduct($request,$product = null){
      return $this->productRepository->saveProduct($request,$product);
    }

 
 
    
    
}
