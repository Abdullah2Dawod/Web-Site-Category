@extends('layout.admin')
@section('content')


<div class="btn-toolbar mb-2 mb-md-0">
    <table class="table table-bordered">
      <tbody>
          <tr>
              <th>ID</th>
              <th>Name</th>
              <th width="280px">Actions</th>
          </tr>
          @foreach($categorgs as $categorg)
          <tr>
              <td>{{$categorg->id}}</td>
              <td>{{$categorg->name}}</td>
              <td>
                <a class="btn btn-success" href="{{url('edit/catgorae'.'/'.$categorg->id)}}">Edit</a>
                <a class="btn btn-secondary" href="{{url('deleted/catgorae'.'/'.$categorg->id)}}">Deleted</a>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
</div>


@endsection
