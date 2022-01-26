@extends('layout.admin')
@section('content')

<div class="mr-sm-2" style="margin-left: 75%; margin-top: 10px">

    <ul class="navbar-nav px-3">
        <li class="nav-item">
        <a class="nav-link btn btn-info" type="button" href="{{url('show/Product')}}">
            all Products
        </a>
    </li>
    </ul>
</div>

          <div class="btn-toolbar mb-2 mb-md-0">

              <div class="card-body">
                  <form method="post" action="{{url('store/Product')}}">
                    @csrf
                      <div class="form-group">
                        <label for="name">Product Name:</label>
                        <input type="text" class="form-control" name="product_name" />
                      </div>
                      <div class="form-group">
                        <label for="price">Product Category :</label>
                        <select class="form-control" id="exampleFormControlSelect1"  name="product_Category">
                            @foreach($categorgs as $categorg)
                          <option value="{{$categorg->id}}">{{$categorg->name}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                          <label for="price">Product Price :</label>
                          <input type="text" class="form-control" name="product_price" />
                      </div>
                      <div class="form-group">
                          <label for="quantity">Product Quantity:</label>
                          <input type="text" class="form-control" name="product_qty" />
                      </div>
                      <button type="submit" class="btn btn-danger">Add</button>
                  </form>
              </div>
          </div>







@endsection
