

               
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
                                        <button type="button" class="btn btn-danger">Delete</button>
                                        {{-- <button type="button" class="btn btn-primary">Edit</button> --}}
                                       
                                     
                                      </td>
                                </tr>

                                @endforeach
                             </tbody>
                            </table>
                    </div>
            </div>


            </div>
            <!-- Sale & Revenue End -->


          


          


            <!-- Footer Start -->
           @include('admin.layouts.footer')


</body>

</html>
            