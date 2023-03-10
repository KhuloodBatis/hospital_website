@extends('layout')



@section('content')

 <!-- Back to top button -->
 <div class="back-to-top"></div>


 <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
   <div class="banner-section">
     <div class="container text-center wow fadeInUp">
       <nav aria-label="Breadcrumb">
         <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
           <li class="breadcrumb-item active" aria-current="page">Blog</li>
         </ol>
       </nav>
       <h1 class="font-weight-normal">Articles</h1>
     </div> <!-- .container -->
   </div> <!-- .banner-section -->
 </div> <!-- .page-banner -->



        <form class="contact-form mt-5" method="POST" action="/articles/{{$article->id}}">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <h3> Update Article</h3>
                     <div class="col-12 py-2 wow fadeInUp">
                        <label for="title">Title</label>
                        <input
                        type="text"
                        name="title"
                        class="form-control"
                        placeholder="Title .."
                        value="{{old('title')}}">
                        @if($errors->has('title'))
                        <div class="error text-danger">{{ $errors->first('title') }}</div>
                    @endif
                    </div>

            <div class="col-12 py-2 wow fadeInUp">
                <label for="excerpt">Excerpt</label>
                <input type="text"
                name="excerpt"
                class="form-control"
                placeholder="Enter excerpt.."
                value="{{old('excerpt')}}">

                @if($errors->has('excerpt'))
                <div class="error text-danger">{{ $errors->first('excerpt') }}</div>
            @endif
            </div>

            <div class="col-12 py-2 wow fadeInUp">
                <label for="body">Body</label>
                <textarea
                name="body"
                class="form-control"
                rows="8"
                placeholder="Enter body."
                value="{{old('body')}}"
                ></textarea>
                @if($errors->has('body'))
                <div class="error text-danger">{{ $errors->first('body') }}</div>
            @endif
            </div>

            </div>
            <button type="submit" class="btn btn-primary wow zoomIn">Update Article</button>

        </form>

 </div> <!-- .page-section -->




<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

@endsection
