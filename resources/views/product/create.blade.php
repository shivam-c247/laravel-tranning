<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="container">    
             <div class="row">
            <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Add New Product</h2>
                    </div>
                
                </div>
            </div>

            <form action="{{route('products.store')}}" method="POST" >
                @csrf

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Product Name :</strong>
                            <input type="text" name="product_name" class="form-control" value="{{old('product_name')}}"  placeholder="Name">
                               @if ($errors->has('product_name'))
                                    <span class="text-danger">{{ $errors->first('product_name') }}</span>
                                @endif
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Product Sub Name :</strong>
                            <input type="text" name="product_sub_name" class="form-control" value="{{old('product_sub_name')}}"  placeholder="Product Sub Name">
                               @if ($errors->has('product_sub_name'))
                                    <span class="text-danger">{{ $errors->first('product_sub_name') }}</span>
                                @endif
                        </div>
                    </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Product Abbrevation :</strong>
                            <input type="text" name="product_abbreviation"  value="{{old('product_abbreviation')}}"  class="form-control" placeholder="Product Abbreviation">
                               @if ($errors->has('product_abbreviation'))
                                    <span class="text-danger">{{ $errors->first('product_abbreviation') }}</span>
                                @endif
                        </div>
                    </div>
          
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Price:</strong>
                            <input type="number" name="price" class="form-control" value="{{old('price')}}"   placeholder="Sell price">
                               @if ($errors->has('price'))
                                    <span class="text-danger">{{ $errors->first('price') }}</span>
                                @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Sell Price:</strong>
                            <input type="number" name="sell_price" class="form-control" value="{{old('sell_price')}}"  placeholder="price">
                             @if ($errors->has('sell_price'))
                                    <span class="text-danger">{{ $errors->first('sell_price') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </form>
        </div>
       </div> 
    </div>
</x-app-layout>