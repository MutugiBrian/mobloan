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

                <!-- Form -->
                <form class="" action="">

                    <!-- Section heading -->
                    <h3 class="font-weight-bold my-3">System Settings</h3>

                    <p class="text-muted mb-4 pb-2">Basic site configurations, changes made here affect the entire
                        system.</p>

                    <!-- Material form contact -->
                    <div class="card">
                        <!--Card content-->
                        <div class="card-body px-lg-5 pt-0">

                            <!-- Form -->
                            <form class="text-center" style="color: #757575;" action="#!">

                                <!-- Name -->
                                <div class="md-form mt-3">
                                    <input type="text" id="materialContactFormName" class="form-control">
                                    <label for="materialContactFormName">Site Name</label>
                                </div>

                                <!-- E-mail -->
                                <div class="md-form">
                                    <input type="email" id="materialContactFormEmail" class="form-control">
                                    <label for="materialContactFormEmail">Admin E-mail</label>
                                </div>
                                <div class="row">
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
                                </div>
                                <div class="md-form">
                                    <textarea id="materialContactFormMessage" class="form-control md-textarea"
                                        rows="3"></textarea>
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

                </form>
                <!-- Form -->

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

                <!-- Form -->
                <form class="" action="">

                    <!-- Section heading -->
                    <h3 class="font-weight-bold my-3">Loan Types</h3>

                    <p class="text-muted mb-4 pb-2">Add new loan type</p>

                    <!-- Material form contact -->
                    <div class="card">
                        <!--Card content-->
                        <div class="card-body px-lg-5 pt-0">

                            <!-- Form -->
                            <form class="text-center" style="color: #757575;" action="#!">

                                <!-- Name -->
                                <div class="md-form mt-3">
                                    <input type="text" id="materialContactFormName" class="form-control">
                                    <label for="materialContactFormName">Loan Type Name</label>
                                </div>
                                <div class="md-form">
                                    <textarea id="materialContactFormMessage" class="form-control md-textarea"
                                        rows="3"></textarea>
                                    <label for="materialContactFormMessage">Loan Type Description</label>
                                </div>

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

    </section>
    <!--Section: Content-->


</div>
@endsection


@section('pagescripts')
<script type="text/javascript">
</script>
@endsection
