@extends('admin.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">


        <div class="card">
       <div class="card-header">
         Edit Product
       </div>
       <div class="card-body">
         <form action="{{ route('admin.product.update', $product->id) }}" method="post" enctype="multipart/form-data">
           @include('admin.partials.messages')
           {{ csrf_field() }}
           <div class="form-group">
             <label for="exampleInputEmail1">Title</label>
             <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{ $product->title }}" >
           </div>
           <div class="form-group">
             <label for="exampleInputPassword1">Description</label>
             <textarea name="description" rows="8" cols="80" class="form-control">{{ $product->description }}</textarea>

           </div>
           <div class="form-group">
             <label for="exampleInputEmail1">Price</label>
             <input type="number" class="form-control" name="price" id="exampleInputEmail1" value="{{ $product->price }}">
           </div>
           <div class="form-group">
             <label for="exampleInputEmail1">Quantity</label>
             <input type="number" class="form-control" name="quantity" id="exampleInputEmail1" value="{{ $product->quantity }}">
           </div>

           <div class="form-group">
              <label for="product_image">Product Image</label>
              <input type="file" class="form-control" name="product_image" id="product_image" >
            </div>

           <button type="submit" class="btn btn-primary">Update Product</button>
         </form>
       </div>
     </div>





         </div>






      </div>







    </div>
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
@endsection
