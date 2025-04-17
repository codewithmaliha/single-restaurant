

@extends('admin.layouts.master_layout')
@section('main-container')
<div class="container-fluid pt-4 px-4">
    <div id="formContainer" class="form-container mt-3">
        <div class="table-responsive">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Orders List</h2>
                <a href="{{ url('admin/create-orders') }}" class="btn btn-primary">Create Order</a>
            </div>

            <table class="table">
                    <thead>
                        <tr>
                            <th>Order By</th>
                            <th>Menu</th>
                            <th>Quantity</th>
                            <th>Total Amount</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->user_name }}</td>
                                <td>{{ $order->menu_name }}</td>

                                <td>{{ $order->quantity }}</td>
                                <td>{{ $order->price }}</td>
                                <td>
                                    @if($order->status == 1)
                                  
                                       
                                    @endif
                                </td>
                                <td>
                                    {{-- <a href="{{ url('orders.', $order->id) }}" class="btn btn-info btn-sm">View</a> --}}
                                    <a href="{{ url('admin/edit-orders', $order->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ url('admin/delete-order', $order->id) }}" class="btn btn-danger">Delete</a>

                                    {{-- <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this order?')">Delete</button>
                                    </form> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
</div>
@endsection

