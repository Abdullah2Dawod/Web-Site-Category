@extends('layout.admin')
@section('content')


<div class="mr-sm-2" style="margin-left: 75%; margin-top: 10px">
    <ul class="navbar-nav px-3">
        <li class="nav-item">
            <a class="nav-link btn btn-info" type="button"  href="{{url('show/catgorae')}}">
                  All Categories
            </a>
        </li>
    </ul>
</div>

<div class="btn-toolbar mb-2 mb-md-0">

    <div class="card-body">
        <form method="post" action="{{url('store/catgorae')}}">
            @csrf
            <div class="form-group">
                <label for="name">Category Name:</label>
                <input type="text" class="form-control" name="product_name" />
            </div>

            <button type="submit" class="btn btn-danger">Add</button>
        </form>
    </div>
</div>


@endsection
