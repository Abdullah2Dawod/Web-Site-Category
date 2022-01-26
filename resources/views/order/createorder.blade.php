@extends('layout.admin')
@section('content')


<div class="mr-sm-2" style="margin-left: 75%; margin-top: 10px">
    <ul class="navbar-nav px-3">
        <li class="nav-item">
            <a class="nav-link btn btn-info" type="button" href="{{url('show/order')}}">
             all Orders
            </a>
        </li>
    </ul>
</div>

<div class="btn-toolbar mb-2 mb-md-0">

    <div class="card-body">
        <form method="post" action="{{url('store/order')}}">
            @csrf
            <div class="form-group">
                <label for="price">Product Category :</label>
                <select class="form-control" id="exampleFormControlSelect1"  name="product_Category">
                    @foreach($categorgs as $categorg)
                  <option value="{{$categorg->id}}">{{$categorg->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="price">Product name :</label>
                <select class="form-control" id="exampleFormControlSelect1"  name="product_name">
                    @foreach($products as $product)
                  <option value="{{$product->id}}">{{$product->name}}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="price">Product qountte :</label>
                <select class="form-control" id="exampleFormControlSelect1"  name="product_Qountte">
                    @foreach($products as $product)
                  <option value="{{$product->id}}">{{$product->qountte}}</option>
                  @endforeach
                </select>
              </div>
            <button type="submit" class="btn btn-danger">Add</button>
        </form>
    </div>
</div>


@endsection
