@extends('admin.layouts.master_layout')


@section('main-container')

<div class="container-fluid pt-4 px-4">
    <div id="formContainer" class="form-container mt-3">
        <form action="{{ url('/admin/store-orders') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>User ID</label>
                <input type="number" name="user_id" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label>Total Amount</label>
                <input type="number" name="total_amount" step="0.01" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="pending">Pending</option>
                    <option value="processing">Processing</option>
                    <option value="completed">Completed</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Save Order</button>
        </form>
</div>
@endsection