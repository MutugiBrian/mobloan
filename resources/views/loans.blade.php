@extends('layout.app')


@section('pagestyle')
<style>
.gallery {
    -webkit-column-count: 3;
    -moz-column-count: 3;
    column-count: 3;
    -webkit-column-width: 33%;
    -moz-column-width: 33%;
    column-width: 33%;
}

.gallery .pics {
    -webkit-transition: all 350ms ease;
    transition: all 350ms ease;
}

.gallery .animation {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
}

@media (max-width: 450px) {
    .gallery {
        -webkit-column-count: 1;
        -moz-column-count: 1;
        column-count: 1;
        -webkit-column-width: 100%;
        -moz-column-width: 100%;
        column-width: 100%;
    }
}

@media (max-width: 400px) {
    .btn.filter {
        padding-left: 1.1rem;
        padding-right: 1.1rem;
    }
}

button.close {
    position: absolute;
    right: 0;
    z-index: 2;
    padding-right: 1rem;
    padding-top: .6rem;
}

// Within style tags in your html file
* {
    box-sizing: border-box;
}

.grid:after {
    content: '';
    display: block;
    clear: both;
}

.grid-sizer,
.grid-item {
    width: 33.333%;
}

@media (max-width: 575px) {

    .grid-sizer,
    .grid-item {
        width: 100%;
    }
}

@media (min-width: 576px) and (max-width: 767px) {

    .grid-sizer,
    .grid-item {
        width: 50%;
    }
}

/* To change the amount of columns on larger devices, uncomment the code below */

/* @media (min-width: 768px) and (max-width: 991px) {
  .grid-sizer,
  .grid-item {
    width: 33.333%;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .grid-sizer,
  .grid-item {
    width: 25%;
  }
}
@media (min-width: 1200px) {
  .grid-sizer,
  .grid-item {
    width: 20%;
  }
} */

.grid-item {
    float: left;
    padding: 10px !important;
}

.grid-item img {
    display: block;
    max-width: 100%;
}

</style>
@endsection


@section('body')
<div class="container-fluid cloudy-knoxville-gradient mt-0 pt-0" style="min-height:80vh;">
    <div class="grid mt-0 pt-0">
        <div class="grid-sizer"></div>

        @if(count($loan_types) > 0)
        @foreach($loan_types as $loan_type)
        <div class="grid-item">
            <div class="card card-image img-fluid z-depth-1 rounded text-center " height="800px !important;"
                style="background-image: url(/storage/images/{{$loan_type->image}});">
                <!-- Content -->
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                    <div class="text-white text-center" style="width:100%;">
                        <h5 class="colora"><i class="fas fa-university"></i> {{$loan_type->loans}}</h5>
                        <h3 class="card-title pt-2"><strong>{{$loan_type->name}}</strong></h3>
                        <p></p>
                        <a href="/compare/{{$loan_type->id}}" type="button"
                            class="btn btn-primary btn-rounded btn-md ml-md-0 "><i class="fas fa-clone left"></i>
                            Compare</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <div class="my-2 z-depth-1">
            <section class="text-center dark-grey-text">
                <p class="text-muted"><i class="fas fa-exclamation-triangle mr-1 text-danger my-2"></i> No Loantypes
                    created
                </p>
            </section>
        </div>
        @endif

    </div>

</div>

@endsection


@section('pagescripts')
<script type="text/javascript">
// init Masonry
var $grid = $('.grid').masonry({
    itemSelector: '.grid-item',
    percentPosition: true,
    columnWidth: '.grid-sizer'
});

// layout Masonry after each image loads
$grid.imagesLoaded().progress(function() {
    $grid.masonry();
});
</script>
@endsection
