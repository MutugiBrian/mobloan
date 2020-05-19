@extends('layout.app')


@section('pagestyle')
<style>

</style>
@endsection


@section('body')
<div class="container z-depth-0 mt-4">


    <!--Section: Content-->
    <section class="dark-grey-text pt-5">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="d-none d-sm-block col-md-5 mb-4 mb-md-0">

                <div class="view">
                    <img src="https://mdbootstrap.com/img/illustrations/undraw_Group_chat_unwm.svg" class="img-fluid"
                        alt="smaple image">
                </div>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-7 mb-lg-0 mb-4">
                <!-- Section heading -->
                <h3 class="font-weight-bold my-3">System Settings</h3>

                <p class="text-muted mb-4 pb-2">Basic site configurations, changes made here affect the entire
                    system.</p>

                <!-- Material form contact -->
                <div class="card">
                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form id="settingsform" class="text-center" style="color: #757575;" action="/settings"
                            method="POST">

                            <!-- Name -->
                            <div class="md-form mt-3">
                                <input type="text" id="materialContactFormName" name="sitename"
                                    value="{{$site->sitename ?? ''}}" class="form-control">
                                <label for="materialContactFormName">Site Name</label>
                            </div>

                            <!-- E-mail -->
                            <div class="md-form">
                                <input type="email" name="adminemail" value="{{$site->adminemail ?? ''}}"
                                    id="materialContactFormEmail" class="form-control">
                                <label for="materialContactFormEmail">Admin E-mail</label>
                            </div>

                            @csrf
                            <!-- <div class="row">
                                    <div class="col-sm-4">
                                        <div class="md-form mt-3">
                                            <input type="text" id="materialContactFormNamem" class="form-control">
                                            <label for="materialContactFormNamem">Main Color</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="md-form mt-3">
                                            <input type="text" id="materialContactFormNames" class="form-control">
                                            <label for="materialContactFormNames">Secondary Color</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="md-form mt-3">
                                            <input type="text" id="materialContactFormNameo" class="form-control">
                                            <label for="materialContactFormNameo">Other Color</label>
                                        </div>
                                    </div>
                                </div> -->
                            <div class="md-form">
                                <textarea id="materialContactFormMessage" name="terms" class="form-control md-textarea"
                                    value="" rows="3">{{$site->terms ?? ''}}</textarea>
                                <label for="materialContactFormMessage">Terms and policy</label>
                            </div>

                            <!-- Send button -->
                            <div class="text-right">
                                <button class="btn btn-primary btn-rounded btn-md ml-md-0 my-4 waves-effect"
                                    type="submit"><i class="fas fa-check mr-1"></i> Update</button>
                            </div>

                        </form>
                        <!-- Form -->

                    </div>

                </div>
                <!-- Material form contact -->
                <!-- <small class="form-text black-text"><strong>* Leave your email addres to be notified
                            first.</strong></small> -->


            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </section>
    <!--Section: Content-->


</div>


<div class="container mt-5">


    <!--Section: Content-->
    <section class="dark-grey-text">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-7 mb-4 align-self-center text-center text-lg-left">

                <!-- Section heading -->
                <h3 class="font-weight-bold my-3">Loan Types</h3>

                <p class="text-muted mb-4 pb-2">Add new loan type</p>

                <!-- Material form contact -->
                <div class="card">
                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form class="text-center" style="color: #757575;" action="/createloantype" method="POST"
                            enctype="multipart/form-data">

                            <!-- Name -->
                            <div class="md-form mt-3">
                                <input type="text" id="ln" name="name" class="form-control">
                                <label for="ln">Loan Type Name</label>
                            </div>
                            <div class="md-form">
                                <input type="text" id="ld" name="description" class="form-control">
                                <label for="ld">Loan Type Description</label>
                            </div>
                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn btn-outline-primary btn-rounded waves-effect btn-sm float-left">
                                        <span>Choose file</span>
                                        <input type="file" name="imageurl">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Upload cover image"
                                            disabled>
                                    </div>
                                </div>
                            </div>

                            @csrf

                            <!-- Send button -->
                            <div class="text-right">
                                <button class="btn btn-primary btn-rounded btn-md ml-md-0 my-4 waves-effect"
                                    type="submit"><i class="fas fa-plus mr-1"></i> Add loan type</button>
                            </div>

                        </form>
                        <!-- Form -->
                    </div>
                </div>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-5 mb-4">

                <!-- Featured image -->
                <div class="view overlay">
                    <img class="img-fluid mx-auto" src="https://mdbootstrap.com/img/illustrations/app-user-colour.svg"
                        alt="Sample image">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

        @if(count($loan_types) > 0)
        <div class="card">
            <!--Card content-->
            <div class="card-body px-lg-5 pt-0">
                @foreach($loan_types as $type)


                <form class="text-center mx-3 px-3 needs-validation" style="color: #757575;" action="/updateloantype"
                    method="POST" enctype="multipart/form-data" novalidate>

                    <div class="row">

                        <div class="col-sm-10">


                            <div class="row justify-content-center">

                                <div class="col">
                                    <small id="passwordHelpBlock" class="form-text text-left col sizeb">
                                        <label for="validationCustom04">Name</label>
                                    </small>
                                    <input type="text" class="form-control nb" name="name" placeholder=""
                                        value="{{$type->name}}" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid name.
                                    </div>
                                </div>
                                <div class="col">
                                    <small id="passwordHelpBlock" class="form-text text-left col sizeb">
                                        <label for="validationCustom04">Description</label>
                                    </small>
                                    <input type="text" name="description" class="form-control nb"
                                        id="validationCustom04" placeholder="" value="{{$type->description}}" required>
                                    <div class="invalid-feedback">
                                        Please provide a description
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="my-2">
                                        <small id="passwordHelpBlock" class="form-text text-left col sizeb">
                                            <label for="validationCustom04">Cover Image - {{$type->image}}</label>
                                        </small>
                                        <input type="file" name="imageurl" id=" validationCustom04"
                                            accept="image/x-png,image/jpeg" placeholder="">
                                    </div>
                                </div>

                            </div>

                            @csrf
                            <input type="hidden" name="id" value="{{$type->id}}" required>



                        </div>
                        <div class="col-sm-2 mt-sm-4 " style="padding-top:10px;">

                            <div class="row py-0">
                                <button type="submit" class="col transparentbutton" style="border: none !important;">
                                    <i class="far fa-save text-primary"></i>
                                </button>

                                <a href="#" onclick="deletetype({{$type->id}})" class="col transparentbutton">
                                    <i class="far fa-trash-alt text-danger"></i>
                                </a>
                            </div>

                        </div>

                    </div>
                </form>






                @endforeach
            </div>
        </div>
        @else
        <div class="my-2 z-depth-1">
            <section class="text-center dark-grey-text">
                <p class="text-muted"><i class="fas fa-exclamation-triangle mr-1 text-danger my-2"></i> No
                    Loantypes
                    created
                </p>
            </section>
        </div>
        @endif


    </section>
    <!--Section: Content-->


</div>
@endsection


@section('pagescripts')
<script type="text/javascript">
function deletetype(id) {
    $.ajax({
        url: '/deletetype/' + id,
        type: "POST",
        data: []
    }).done(function(response) { //

        window.location.reload();
    });
}
</script>
@endsection
