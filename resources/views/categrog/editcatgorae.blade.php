@extends('layout.admin')
@section('content')


<div class="btn-toolbar mb-2 mb-md-0">

    <div class="card-body">
        <form method="post" action="{{url('update/catgorae'.'/'.$categorgs->id)}}">
            @csrf
            <div class="form-group">
                <label for="name">Category Name:</label>
                <input type="text" class="form-control" name="product_name" value="{{$categorgs->name}}" />
            </div>

            <button type="submit" class="btn btn-danger">Update</button>
        </form>
    </div>
</div>


@endsection
