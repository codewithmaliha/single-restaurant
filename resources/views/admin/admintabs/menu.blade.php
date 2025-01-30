@extends('admin.layouts.master_layout')
@section('main-container')
<div class="container-fluid pt-4 px-4">
    <div id="formContainer" class="form-container mt-3">
        <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>name</th>
                  <th>category</th>
                  <th>quantity</th>
                  <th>price</th>
                  <th>Action</th>
                
                </tr>
                </thead>
                 <tbody>
                        @foreach($menu as $menu)
                    </tr>
                        <td>{{ $menu->name }}</td>
                        <td>{{ $menu->category }}</td>
                        <td>{{ $menu->quantity }}</td>
                        <td>{{ $menu->price }}</td>
                        <td>
                            <a href="{{url('admin/edit-menu', $menu->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{url('admin/delete', $menu->id)}}" class="btn btn-danger">Delete</a>
                            
                            
                           
                         
                          </td>
                    </tr>

                    @endforeach
                 </tbody>
                </table>
        </div>
</div>
@endsection