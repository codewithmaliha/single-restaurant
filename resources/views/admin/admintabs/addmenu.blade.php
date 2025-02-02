@extends('admin.layouts.master_layout')


@section('main-container')

<div class="container-fluid pt-4 px-4">
    <div id="formContainer" class="form-container mt-3">
    <form method="POST" action="{{ url('/admin/store-menu') }}">
        @csrf
        <!-- Common Fields (shown when a category is selected) -->
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Item Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="cars">Category:</label>
                    <select class="form-control" name="category" id="category">
                      <option value="karahi">KARAHI</option>
                      <option value="bbq">BBQ</option>
                      <option value="fish">FISH</option>
                      <option value="salad">SALAD</option>
                      <option value="rotti">ROTTI</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="number" class="form-control" id="price" name="price" required>
                </div>
                <div class="mb-3">
                    <label for="cars">Unit:</label>
                    <select class="form-control" name="unit" id="unit">
                      <option value="piece">Pieces</option>
                      <option value="kg">KG</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mt-3" style="background-color:#00ff2a;">Submit</button>
    </form>
</div>
@endsection
