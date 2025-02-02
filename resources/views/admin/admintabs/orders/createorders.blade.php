@extends('admin.layouts.master_layout')


@section('main-container')

<div class="container-fluid pt-4 px-4">
    <div id="formContainer" class="form-container mt-3" style="width:20rem">
        <form action="{{ url('/admin/store-orders') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="cars">Choose a Menu:</label>

                <select class="form-control" name="menu_id">
                    @foreach ($menus as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>

            </div>

            <div class="mb-3">
                <label>Quantity</label>
                <input type="number" name="qty"  class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Save Order</button>
        </form>
</div>


@endsection
