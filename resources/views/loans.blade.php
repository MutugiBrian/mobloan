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
<div class="container-fluid mt-0 pt-0">
    <div class="grid mt-0 pt-0">
        <div class="grid-sizer"></div>
        <div class="grid-item">
            <div class="card card-image img-fluid z-depth-1 rounded text-center " height="800px !important;"
                style="background-image: url(https://wallpaperaccess.com/full/33110.jpg);">
                <!-- Content -->
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                    <div class="text-white text-center" style="width:100%;">
                        <h5 class="colora"><i class="fas fa-briefcase"></i> 5</h5>
                        <h3 class="card-title pt-2"><strong>Car Loan</strong></h3>
                        <p></p>
                        <a href="/compare" type="button" class="btn btn-primary btn-rounded btn-md ml-md-0 bgb"><i
                                class="fas fa-clone left"></i> Compare</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-item">
            <div class="card card-image img-fluid z-depth-1 rounded text-center " height="800px !important;"
                style="background-image: url(https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500);">
                <!-- Content -->
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                    <div class="text-white text-center" style="width:100%;">
                        <h5 class="colora"><i class="fas fa-briefcase"></i> 3</h5>
                        <h3 class="card-title pt-2"><strong>Mortgage Loan</strong></h3>
                        <p></p>
                        <a href="/compare" type="button" class="btn btn-primary btn-rounded btn-md ml-md-0 bgb"><i
                                class="fas fa-clone left"></i> Compare</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-item">
            <div class="card card-image img-fluid z-depth-1 rounded text-center " height="800px !important;"
                style="background-image: url(https://ak.picdn.net/shutterstock/videos/19504456/thumb/1.jpg);">
                <!-- Content -->
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                    <div class="text-white text-center" style="width:100%;">
                        <h5 class="colora"><i class="fas fa-briefcase"></i> 2</h5>
                        <h3 class="card-title pt-2"><strong>Salary Loan</strong></h3>
                        <p></p>
                        <a href="/compare" type="button" class="btn btn-primary btn-rounded btn-md ml-md-0 bgb"><i
                                class="fas fa-clone left"></i> Compare</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-item">
            <div class="card card-image img-fluid z-depth-1 rounded text-center " height="800px !important;"
                style="background-image: url(https://www.itl.cat/pngfile/big/80-802915_home-party-plans-unique-21st-birthday-party-planner.jpg);">
                <!-- Content -->
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                    <div class="text-white text-center" style="width:100%;">
                        <h5 class="colora"><i class="fas fa-briefcase"></i> 12</h5>
                        <h3 class="card-title pt-2"><strong>Weekend Loan</strong></h3>
                        <p></p>
                        <a href="/compare" type="button" class="btn btn-primary btn-rounded btn-md ml-md-0 bgb"><i
                                class="fas fa-clone left"></i> Compare</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-item">
            <div class="card card-image img-fluid z-depth-1 rounded text-center " height="800px !important;"
                style="background-image: url(https://www.bbva.com/wp-content/uploads/en/2015/12/bbva-banca-tarjetas-1920x1080.jpg);">
                <!-- Content -->
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                    <div class="text-white text-center" style="width:100%;">
                        <h5 class="colora"><i class="fas fa-briefcase"></i> 37</h5>
                        <h3 class="card-title pt-2"><strong>Credit Card</strong></h3>
                        <p></p>
                        <a href="/compare" type="button" class="btn btn-primary btn-rounded btn-md ml-md-0 bgb"><i
                                class="fas fa-clone left"></i> Compare</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-item">
            <div class="card card-image img-fluid z-depth-1 rounded text-center " height="800px !important;"
                style="background-image: url(https://ak5.picdn.net/shutterstock/videos/3182995/thumb/1.jpg?ip=x480);">
                <!-- Content -->
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                    <div class="text-white text-center" style="width:100%;">
                        <h5 class="colora"><i class="fas fa-briefcase"></i> 64</h5>
                        <h3 class="card-title pt-2"><strong>Log Book Loan</strong></h3>
                        <p></p>
                        <a href="/compare" type="button" class="btn btn-primary btn-rounded btn-md ml-md-0 bgb"><i
                                class="fas fa-clone left"></i> Compare</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-item">
            <div class="card card-image img-fluid z-depth-1 rounded text-center " height="800px !important;"
                style="background-image: url(https://moranridge.co.ke/images/ban4.fw.png);">
                <!-- Content -->
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                    <div class="text-white text-center" style="width:100%;">
                        <h5 class="colora"><i class="fas fa-briefcase"></i> 251</h5>
                        <h3 class="card-title pt-2"><strong>Title deed Loan</strong></h3>
                        <p></p>
                        <a href="/compare" type="button" class="btn btn-primary btn-rounded btn-md ml-md-0 bgb"><i
                                class="fas fa-clone left"></i> Compare</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-item">
            <div class="card card-image img-fluid z-depth-1 rounded text-center " height="800px !important;"
                style="background-image: url(https://businessfirstfamily.com/wp-content/uploads/2016/09/import-export-business-key-players.jpg);">
                <!-- Content -->
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                    <div class="text-white text-center" style="width:100%;">
                        <h5 class="colora"><i class="fas fa-briefcase"></i> 8</h5>
                        <h3 class="card-title pt-2"><strong>Import Finance</strong></h3>
                        <p></p>
                        <a href="/compare" type="button" class="btn btn-primary btn-rounded btn-md ml-md-0 bgb"><i
                                class="fas fa-clone left"></i> Compare</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-item">
            <div class="card card-image img-fluid z-depth-1 rounded text-center " height="800px !important;"
                style="background-image: url(https://images.unsplash.com/photo-1531206715517-5c0ba140b2b8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80);">
                <!-- Content -->
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                    <div class="text-white text-center" style="width:100%;">
                        <h5 class="colora"><i class="fas fa-briefcase"></i> 17</h5>
                        <h3 class="card-title pt-2"><strong>Chamaa Loan</strong></h3>
                        <p></p>
                        <a href="/compare" type="button" class="btn btn-primary btn-rounded btn-md ml-md-0 bgb"><i
                                class="fas fa-clone left"></i> Compare</a>
                    </div>
                </div>
            </div>
        </div>

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
