@extends('layout.admin')
@section('content')




<div class="btn-toolbar mb-2 mb-md-0">
    <table class="table table-bordered">
      <tbody>
          <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Price</th>
              <th>Quantity</th>
              <th width="280px">Actions</th>
          </tr>
          @foreach($product as $products)
          <tr>
              <td>{{$products->id}}</td>
              <td>{{$products->name}}</td>
              <td>{{$products->price}}</td>
              <td>{{$products->qountte}}</td>
              <td>
                <a class="btn btn-success" href="{{url('edit/Product'.'/'.$products->id)}}">Edit</a>
                <a class="btn btn-secondary" href="{{url('deleted/Product'.'/'.$products->id)}}">Deleted</a>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
</div>


@endsection
