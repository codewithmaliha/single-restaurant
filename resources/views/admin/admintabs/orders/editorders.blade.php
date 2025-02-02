@extends('admin.layouts.master_layout')

@section('main-container')


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div id="formContainer" class="form-container mt-3">
                    <form method="POST" enctype="multipart/form-data" action="{{ url('/admin/edit-orders/' .$orders->id) }}">
                        @csrf
                       
                        <!-- Common Fields (shown when a category is selected) -->
                        
                        <div class="mb-3">
                            <label for="user_id" class="form-label">User ID</label>
                            <input type="text" class="form-control" id="user_id" name="user_id"
                                value="{{ $orders->user_id }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="total_amount" class="form-label">Total amount:</label>
                            <textarea class="form-control" id="total_amount" name="total_amount" value="{{ $orders->total_amount }}" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="quantity">Quantity</label>
                            <input type="text" name="quantity" class="form-control" id="quantity"
                                value="{{ $orders->quantity }}">
                        </div>
                        {{-- <div class="mb-3">
                            <label for="price" class="form-label">Price:</label>
                            <input type="number" class="form-control" id="price" name="price"
                                value="{{ $menu->price }}" required>
                        </div> --}}

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Update order</button>
                    
                    </form>
                </div>


            </div>
            <!-- Sale & Revenue End -->




@endsection
