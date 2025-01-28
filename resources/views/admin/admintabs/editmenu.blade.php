

               
<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.header')
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">

           @include('admin.layouts.sidebar')


        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
           @include('admin.layouts.navbar')
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div id="formContainer" class="form-container mt-3">
                <form method="POST" enctype="multipart/form-data" action="{{ url('/admin/edit-menu/') }}">
                    @csrf
                    <!-- Common Fields (shown when a category is selected) -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Item Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$menu->name}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category:</label>
                        <textarea class="form-control" id="category" name="category" value="{{$menu->category}}"  required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="quantity">Quantity</label>
                        <input type="text" name="quantity" class="form-control" id="quantity" value="{{$menu->quantity}}" >
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price:</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{$menu->price}}"  required>
                    </div>
                    
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary mt-3" style="background-color:#fdb900;">Update</button>
                </form>
            </div>


            </div>
            <!-- Sale & Revenue End -->


          


          


            <!-- Footer Start -->
           @include('admin.layouts.footer')


</body>

</html>
            