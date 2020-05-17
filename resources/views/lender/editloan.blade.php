@extends('layout.app')


@section('pagestyle')
<style>

</style>
@endsection


@section('body')
<div class="container">


    <!--Section: Content-->
    <section class="dark-grey-text p-3">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="d-none d-sm-block col-md-5 mb-4 mb-md-0">

                <div class="view">
                    <img src="https://uploads-ssl.webflow.com/5bcb5ee81fb2091a2ec550c7/5c12f8f7d3261a2df6c31fb8_drawkit-notebook-man-colour.svg"
                        class="img-fluid" alt="smaple image">
                </div>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-7 mb-lg-0 mb-4">

                <!-- Form -->
                <form class="" action="">

                    <!-- Section heading -->
                    <h3 class="font-weight-bold my-3">Edit loan</h3>

                    <p class="text-muted mb-4 pb-2"> Change details of existing loan, the changes will be reflected
                        immedieatly on update.</p>

                    <!-- Material form contact -->
                    <div class="card z-depth-1">
                        <!--Card content-->
                        <div class="card-body px-lg-5 pt-0">

                            <!-- Form -->
                            <form class="text-center" style="color: #757575;" action="#!">

                                <div class="md-form">
                                    <span>Loan Type</span>
                                    <select class="mdb-select my-1">
                                        <option value="" disabled>Choose option</option>
                                        <option value="1" selected>Car Loan</option>
                                        <option value="2">Mortgage Loan</option>
                                    </select>
                                </div>

                                <!-- Name -->
                                <div class="row my-0">
                                    <div class="col-sm-6">
                                        <div class="md-form">
                                            <input type="number" id="materialContactFormName" class="form-control">
                                            <label for="materialContactFormName">Minimum Amount (KES)</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="md-form">
                                            <input type="number" id="materialContactFormEmail" class="form-control">
                                            <label for="materialContactFormEmail">Maximum Amount (KES)</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row my-0">
                                    <div class="col-sm-6">
                                        <div class="md-form">
                                            <input type="number" id="materialContactFormName" class="form-control">
                                            <label for="materialContactFormName">Interest (%)</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="md-form">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input"
                                                    id="materialRegisterFormNewsletter">
                                                <label class="form-check-label"
                                                    for="materialRegisterFormNewsletter">Admin Fee</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row my-0">
                                    <div class="col-sm-6">
                                        <div class="md-form">
                                            <input type="text" id="materialContactFormName" class="form-control">
                                            <label for="materialContactFormName">Minimum Duration</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="md-form">
                                            <input type="text" id="materialContactFormEmail" class="form-control">
                                            <label for="materialContactFormEmail">Maximum Duration</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="md-form">
                                    <textarea id="materialContactFormMessage" class="form-control md-textarea"
                                        rows="3"></textarea>
                                    <label for="materialContactFormMessage">Application Link</label>
                                </div>

                                <div class="row my-0">
                                    <div class="col-sm-6">
                                        <div class="md-form">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input"
                                                    id="materialRegisterFormNewsletter">
                                                <label class="form-check-label"
                                                    for="materialRegisterFormNewsletter">Required Salaried</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="md-form">
                                            <input type="text" id="materialContactFormName" class="form-control">
                                            <label for="materialContactFormName">Salaried Duration</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row my-0">
                                    <div class="col-sm-6">
                                        <div class="md-form">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input"
                                                    id="materialRegisterFormNewsletter">
                                                <label class="form-check-label"
                                                    for="materialRegisterFormNewsletter">Required Security</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="md-form">
                                            <input type="text" id="materialContactFormName" class="form-control">
                                            <label for="materialContactFormName">Security Type</label>
                                        </div>
                                    </div>
                                </div>




                                <!-- Send button -->
                                <div class="text-right">
                                    <button class="btn btn-primary btn-rounded btn-md ml-md-0 my-4 waves-effect"
                                        type="submit"><i class="fas fa-check"></i> Update</button>
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
@endsection


@section('pagescripts')
<script type="text/javascript">
</script>
@endsection
