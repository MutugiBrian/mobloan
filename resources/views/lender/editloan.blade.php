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

                <!-- Section heading -->
                <h3 class="font-weight-bold my-3">Edit loan</h3>

                <p class="text-muted mb-4 pb-2"> Change details of existing loan, the changes will be reflected
                    immedieatly on update.</p>

                <!-- Material form contact -->
                <div class="card z-depth-1">
                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form class="text-center" style="color: #757575;" action="/editloan" method="POST">
                            <div class="md-form">
                                <span>Loan Type</span>
                                <select class="mdb-select my-1" name="loan_type">
                                    <option value="" disabled>Choose option</option>
                                    @if(count($loan_types) 0)
                                    @foreach($loan_types as $loan_type)
                                    <option value="{{$loan_type->id}}" @if($loan_type->id == $loan->loan_type)
                                        selected
                                        @endif
                                        >{{$loan_type->name}}</option>
                                    @endforeach
                                    @else
                                    <option value="" selected disabled>No loan types set</option>
                                    @endif
                                </select>
                            </div>

                            <input type="hidden" name="lender" value="{{Auth::User()->id}}">
                            <!-- Name -->
                            <div class="row my-0">
                                <div class="col-sm-6">
                                    <div class="md-form">
                                        <input type="text" id="minimum_amount" name="minimum_amount"
                                            value="{{$loan->minimum_amount}}" class="form-control">
                                        <label for="minimum_amount">Minimum Amount (KES)</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="md-form">
                                        <input type="text" id="maximum_amount" name="maximum_amount"
                                            value="{{$loan->maximum_amount}}" class="form-control">
                                        <label for="maximum_amount">Maximum Amount (KES)</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row my-0">
                                <div class="col-sm-6">
                                    <div class="md-form">
                                        <input type="text" name="interest" id="interest" class="form-control"
                                            value="{{$loan->interest}}">
                                        <label for="interest">Interest</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="md-form">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="admin_fee"
                                                name="admin_fee" @if($loan->admin_fee)
                                            checked
                                            @endif
                                            >
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
                                            class="form-control" value="{{$loan->minimum_duration}}">
                                        <label for="minimum_duration">Minimum Duration</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="md-form">
                                        <input type="text" id="maximum_duration" name="maximum_duration"
                                            class="form-control" value="{{$loan->maximum_duration}}">
                                        <label for="maximum_duration">Maximum Duration</label>
                                    </div>
                                </div>
                            </div>

                            <div class="md-form">
                                <textarea id="application_link" name="application_link" class="form-control md-textarea"
                                    rows="3">{{$loan->application_link}}</textarea>
                                <label for="application_link">Application Link</label>
                            </div>

                            <div class="row my-0">
                                <div class="col-sm-6">
                                    <div class="md-form">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="salaried"
                                                name="salaried" @if($loan->salaried)
                                            checked
                                            @endif
                                            >
                                            <label class="form-check-label" for="salaried">Required Salaried</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="md-form">
                                        <input type="text" id="salaried_duration" name="salaried_duration"
                                            class="form-control" value="{{$loan->salaried_duration}}">
                                        <label for="salaried_duration">Salaried Duration</label>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="{{$loan->id}}">
                            <div class="row my-0">
                                <div class="col-sm-6">
                                    <div class="md-form">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="security"
                                                name="security" @if($loan->security)
                                            checked
                                            @endif
                                            >
                                            <label class="form-check-label" for="security">Required Security</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="md-form">
                                        <input type="text" id="security_type" name="security_type" class="form-control"
                                            value="{{$loan->security_type}}">
                                        <label for="security_type">Security Type</label>
                                    </div>
                                </div>
                            </div>
                            @csrf




                            <!-- Send button -->
                            <div class="text-right">
                                <button class="btn btn-primary btn-rounded btn-md ml-md-0 my-4 waves-effect"
                                    type="submit"><i class="fas fa-check"></i> Update</button>
                            </div>

                        </form>
                        <!-- Form -->

                    </div>

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
