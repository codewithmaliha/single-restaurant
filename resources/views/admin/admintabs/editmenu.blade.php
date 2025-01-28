@extends('admin.layouts.master_layout')

@section('main-container')


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div id="formContainer" class="form-container mt-3">
                    <form method="POST" enctype="multipart/form-data" action="{{ url('/admin/edit-menu/') }}">
                        @csrf
                        <!-- Common Fields (shown when a category is selected) -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Item Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $menu->name }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category:</label>
                            <textarea class="form-control" id="category" name="category" value="{{ $menu->category }}" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="quantity">Quantity</label>
                            <input type="text" name="quantity" class="form-control" id="quantity"
                                value="{{ $menu->quantity }}">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price:</label>
                            <input type="number" class="form-control" id="price" name="price"
                                value="{{ $menu->price }}" required>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary mt-3"
                            style="background-color:#fdb900;">Update</button>
                    </form>
                </div>


            </div>
            <!-- Sale & Revenue End -->




@endsection
