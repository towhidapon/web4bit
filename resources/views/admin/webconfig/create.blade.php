@extends('admin.layouts.app')
@section('content')
<div class="container" >
@push('css')


@endpush

<div class="row ">
    <div class="col-xl-6 mt-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Hero Section</h4>

                <form action="{{route('admin.hero.store')}} " method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label ">Hero Logo</label>
                        <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" id="formrow-firstname-input" placeholder="">



                    </div>
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label">Promo Video</label>
                        <input type="text" class="form-control @error('promo_link') is-invalid @enderror"  name="promo_link"id="formrow-firstname-input" placeholder="Enter Youtube link">


                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                    </div>
                </form>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <div class="col-xl-6 mt-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Services Section</h4>

                <form action="{{route('admin.service.store')}} " method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label ">Service Logo</label>
                        <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" id="formrow-firstname-input" placeholder="">



                    </div>
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label">Service Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror"  name="title"id="formrow-firstname-input" placeholder="Title">


                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                    </div>
                </form>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>


    <div class="col-xl-6 mt-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Clients Section</h4>

                <form action="{{route('admin.client.store')}} " method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label ">Client Logo</label>
                        <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" id="formrow-firstname-input" placeholder="">



                    </div>


                    <div>
                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                    </div>
                </form>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <div class="col-xl-6 mt-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Technology Section</h4>
                <form action="{{route('admin.tech.store')}} " method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label ">Tecnology</label>
                        <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" id="formrow-firstname-input" placeholder="">



                    </div>


                    <div>
                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                    </div>
                </form>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>

    <div class="col-xl-6 mt-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Industry Section</h4>

                <form action="{{route('admin.industry.store')}} " method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label ">Industry Logo</label>
                        <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" id="formrow-firstname-input" placeholder="">



                    </div>
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label">Service Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror"  name="title"id="formrow-firstname-input" placeholder="Title">


                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                    </div>
                </form>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <div class="col-xl-6 mt-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Slider Section</h4>

                <form action="{{route('admin.banner.store')}} " method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label ">Banner</label>
                        <input type="file" class="form-control @error('banner') is-invalid @enderror" name="banner" id="formrow-firstname-input" placeholder="">



                    </div>
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label">Meta Tag for Seo</label>
                        <input type="text" class="form-control @error('meta_teg') is-invalid @enderror"  name="meta_teg"id="formrow-firstname-input" placeholder="meta tag">


                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                    </div>
                </form>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <div class="col-xl-6 mt-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Contact Section</h4>

                <form action="{{route('admin.contact.store')}} " method="post" enctype="multipart/form-data" >
                    @csrf

                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label ">Location</label>
                        <input type="text" class="form-control @error('location') is-invalid @enderror" name="location" id="formrow-firstname-input" placeholder="Location">
                    </div>
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label ">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="formrow-firstname-input" placeholder="email">
                    </div>
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label ">Number</label>
                        <input type="text" class="form-control @error('number') is-invalid @enderror" name="number" id="formrow-firstname-input" placeholder="Number">

                    </div>
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label ">Ifram Location Link</label>
                        <input type="text" class="form-control @error('ifram_link') is-invalid @enderror" name="ifram_link" id="formrow-firstname-input" placeholder="Your Location Link">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                    </div>
                </form>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>

    <div class="col-xl-6 mt-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Team Section</h4>

                <form action="{{route('admin.team.store')}} " method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label ">Image</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="formrow-firstname-input" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label ">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="formrow-firstname-input" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label ">Designation</label>
                        <input type="text" class="form-control @error('designation') is-invalid @enderror" name="designation" id="formrow-firstname-input" placeholder="Designation">
                    </div>
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label ">About</label>
                        <textarea class="form-control @error('about') is-invalid @enderror" name="about" cols="30" rows="10"></textarea>

                    </div>
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label ">Facebook</label>
                        <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" id="formrow-firstname-input" placeholder="Your Facebook Link">
                    </div>
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label ">Instagram</label>
                        <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" id="formrow-firstname-input" placeholder="Your Instagram Link">
                    </div>
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label ">Twitter</label>
                        <input type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" id="formrow-firstname-input" placeholder="YOur Twitter Link">
                    </div>
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label ">Linkedin</label>
                        <input type="text" class="form-control @error('linkedin') is-invalid @enderror" name="linkedin" id="formrow-firstname-input" placeholder="Your Linkedin Link">
                    </div>


                    <div>
                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                    </div>
                </form>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>


</div>
</div>


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>




<script>
    @if(Session::has('hero'))
 toastr.options =
 {
     "closeButton" : true,
     "progressBar" : true
 }
         toastr.success("{{ session('hero') }}");
 @endif
</script>



@endsection
