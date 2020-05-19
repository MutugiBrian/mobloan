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
                    <img src="https://uploads-ssl.webflow.com/5bcb5ee81fb2091a2ec550c7/5c12f56db0a0f268db80c730_drawkit-content-man-colour.svg"
                        class="img-fluid" alt="smaple image">
                </div>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-7 mb-lg-0 mb-4">
                <!-- Section heading -->
                <h3 class="font-weight-bold my-3">Create new loan</h3>

                <p class="text-muted mb-4 pb-2">Enter loan details, visitors will view this loan when they visit
                    this site.</p>

                <!-- Material form contact -->
                <div class="card z-depth-1">
                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form class="text-center" style="color: #757575;" action="/createloan" method="POST">

                            <div class="md-form">
                                <span>Loan Type</span>
                                <select class="mdb-select my-1" name="loan_type">
                                    <option value="" selected disabled>Choose option</option>

                                    @if(count($loan_types) > 0)
                                    @foreach($loan_types as $loan_type)
                                    <option value="{{$loan_type->id}}">{{$loan_type->name}}</option>
                                    @endforeach
                                    @else
                                    <option selected>NO LOAN TYPES SET</option>
                                    @endif
                                </select>
                            </div>

                            <input type="hidden" name="lender" value="{{Auth::User()->id}}">

                            <!-- Name -->
                            <div class="row my-0">
                                <div class="col-sm-6">
                                    <div class="md-form">
                                        <input type="text" id="minimum_amount" name="minimum_amount"
                                            class="form-control">
                                        <label for="minimum_amount">Minimum Amount (KES)</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="md-form">
                                        <input type="text" id="maximum_amount" name="maximum_amount"
                                            class="form-control">
                                        <label for="maximum_amount">Maximum Amount (KES)</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row my-0">
                                <div class="col-sm-6">
                                    <div class="md-form">
                                        <input type="text" name="interest" id="interest" class="form-control">
                                        <label for="interest">Interest</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="md-form">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="admin_fee"
                                                name="admin_fee">
                                            <label class="form-check-label" for="admin_fee">Admin
                                                Fee</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row my-0">
                                <div class="col-sm-6">
                                    <div class="md-form">
                                        <input type="text" id="minimum_duration" name="minimum_duration"
                                            class="form-control">
                                        <label for="minimum_duration">Minimum Duration</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="md-form">
                                        <input type="text" id="maximum_duration" name="maximum_duration"
                                            class="form-control">
                                        <label for="maximum_duration">Maximum Duration</label>
                                    </div>
                                </div>
                            </div>

                            <div class="md-form">
                                <textarea id="application_link" name="application_link" class="form-control md-textarea"
                                    rows="3"></textarea>
                                <label for="application_link">Application Link</label>
                            </div>

                            <div class="row my-0">
                                <div class="col-sm-6">
                                    <div class="md-form">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="salaried"
                                                name="salaried">
                                            <label class="form-check-label" for="salaried">Required Salaried</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="md-form">
                                        <input type="text" id="salaried_duration" name="salaried_duration"
                                            class="form-control">
                                        <label for="salaried_duration">Salaried Duration</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row my-0">
                                <div class="col-sm-6">
                                    <div class="md-form">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="security"
                                                name="security">
                                            <label class="form-check-label" for="security">Required Security</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="md-form">
                                        <input type="text" id="security_type" name="security_type" class="form-control">
                                        <label for="security_type">Security Type</label>
                                    </div>
                                </div>
                            </div>
                            @csrf




                            <!-- Send button -->
                            <div class="text-right">
                                <button class="btn btn-primary btn-rounded btn-md ml-md-0 my-4 waves-effect"
                                    type="submit"><i class="fas fa-check"></i> Create</button>
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
@endsection


@section('pagescripts')
<script type="text/javascript">
</script>
@endsection
