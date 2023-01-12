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
                        <h2>Product List </h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{route('products.create')}}" title="Create a product"> <i class="fas fa-plus-circle"></i>
                            </a>
                    </div>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p> {{ Session::get('success') }}</p>
                </div>
            @endif

            <table class="table table-bordered table-responsive-lg mt-5 pd-5">
                <tr>
                    <th>Product Name</th>
                    <th>Product Sub Name</th>
                    <th>Product Abbreviation</th>
                    <th>Price</th>
                    <th>Sell Price </th>
                    <th>Actions</th>
                </tr>
                @foreach ($products as $product)
                    <tr>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->product_sub_name}}</td>
                        <td>{{$product->product_abbreviation}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->sell_price}}</td>
                        <td>
                            <form action="{{route('products.destroy',$product->id)}}" method="POST">

                                <a href="" title="show">
                                    <i class="fas fa-eye text-success  fa-lg"></i>
                                </a>

                                <a href="{{route('products.edit',$product->id)}}">
                                    <i class="fas fa-edit  fa-lg"></i>
                                </a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                    <i class="fas fa-trash fa-lg text-danger"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>

            {!! $products->links() !!}
        </div>
       </div> 
    </div>
</x-app-layout>