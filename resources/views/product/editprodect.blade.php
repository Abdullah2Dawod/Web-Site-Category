@extends('layout.admin')
@section('content')



          <div class="btn-toolbar mb-2 mb-md-0">

              <div class="card-body">
                  <form method="post" action="{{url('update/Product'.'/'.$product->id)}}">
                    @csrf
                      <div class="form-group">
                        <label for="name">Product Name:</label>
                        <input type="text" class="form-control" name="product_name" value="{{$product->name}}"/>
                      </div>
                      <div class="form-group">
                        <label for="price">Product Category :</label>
                        <select class="form-control" id="exampleFormControlSelect1"  name="product_Category" >
                            @foreach($categorgs as $categorg)
                          <option value="{{$categorg->id}}">{{$categorg->name}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                          <label for="price">Product Price :</label>
                          <input type="text" class="form-control" name="product_price"  value="{{$product->price}}"/>
                      </div>
                      <div class="form-group">
                          <label for="quantity">Product Quantity:</label>
                          <input type="text" class="form-control" name="product_qty" value="{{$product->qountte}}" />
                      </div>
                      <button type="submit" class="btn btn-success">Update</button>
                  </form>
              </div>
          </div>
      </main>
    </div>
  </div>







@endsection
