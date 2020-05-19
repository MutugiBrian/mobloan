@extends('layout.app')


@section('pagestyle')
<style>
.amountinput {
    width: 200px !important;
}

</style>
@endsection


@section('body')
<!-- <div class="container">
    <!-- Material input -->
<!-- <div class="md-form">
    <i class="fas fa-hand-holding-usd prefix"></i>
    <input type="number" id="inputValidationEx2" class="form-control validate amountinput">
    <label for="inputValidationEx2" data-error="wrong" data-success="right">Enter Amount</label>
</div>
</div> -->

<!-- Grid row -->
<!-- <div class="light-font my-0 py-0 rounded-0" style="width:100% !important;">
    <nav aria-label="breadcrumb my-0 py-0 rounded-0" style="width:100% !important;">
        <ol class="breadcrumb cyan lighten-4 my-0 rounded-0" style="width:100% !important;">
            <li class="breadcrumb-item"><a class="" href="/loans">Loans</a></li>
            <li class="breadcrumb-item active"><a class="font-weight-bold" href="#">car
                    loan</a>
            </li>
        </ol>
    </nav>
</div> -->
<div class="row cloudy-knoxville-gradient d-flex justify-content-center mx-0 px-2 px-md-0 my-0"
    style="width:100% !important;">


    <!-- Grid column -->
    <div class="col-md-10 col-xl-11 mx-0 px-0 py-0">

        <div class="row mt-1 mx-1">
            <div class="col-6 text-primary text-left py-2">
                Sort by
            </div>
            <div class="col-6 text-right my-0 py-0 row">
                <div class="col-md-8"></div>
                <select class="mdb-select md-form my-0 py-0 col-md-4">
                    <option value="" disabled selected>choose option</option>
                    <option value="1">Lowest interest</option>
                    <option value="2">Maximum amount</option>
                    <option value="3">Maximum duration</option>
                </select>
            </div>
        </div>

        <!--Accordion wrapper-->
        <div class="accordion md-accordion accordion-2" id="accordionEx7" role="tablist" aria-multiselectable="true">
            <?php $i = 0; ?>
            @if(count($loans) > 0)
            @foreach($loans as $loan)
            <!-- Accordion card -->
            <div class="card z-depth-1 rgba-stylish-strong border-primary borderc mb-3 mx-0 p-2">

                <!-- Card header -->
                <div class="card-header mb-1" role="tab" id="heading1">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="/storage/images/{{$loan->lender_logo}}"
                                style="width:100% !important;height:20vh !important;" alt="">
                        </div>
                        <div class="col row py-md-3  mt-1 mx-0 px-0 mt-md-0">

                            <div class="col-12 mx-0 px-0  row">
                                <div class="col row mx-0 px-0">
                                    <div class="col-12 col-md-3 row text-md-center">
                                        <div class="col-6 col-md-12 text-muted">
                                            Interest
                                        </div>
                                        <div class="col-6 col-md-12 text-dark font-weight-bold">
                                            {{$loan->interest}}
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-3 row text-md-center">
                                        <div class="col-6 col-md-12 text-muted">
                                            Admin Fee
                                        </div>
                                        <div class="col-6 col-md-12 text-dark font-weight-bold">
                                            @if($loan->admin_fee)
                                            YES
                                            @else
                                            NO
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-3 row text-md-center">
                                        <div class="col-6 col-md-12 text-muted">
                                            Minimum
                                        </div>
                                        <div class="col-6 col-md-12 text-dark font-weight-bold">
                                            KES {{$loan->minimum_amount}}
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-3 row text-md-center">
                                        <div class="col-6 col-md-12 text-muted">
                                            Maximum
                                        </div>
                                        <div class="col-6 col-md-12 text-dark font-weight-bold">
                                            KES {{$loan->maximum_amount}}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 text-center my-2 my-md-0">
                                    <a target="_blank" href="{{$loan->application_link}}" type="button"
                                        class="btn btn-primary btn-rounded btn-md ml-md-0 z-depth-1 mx-2"
                                        style="width:90%;"><i class="fas fa-pen-alt"></i> Apply Now</a>
                                </div>
                            </div>
                            <a class="col-12 my-2 text-center" data-toggle="collapse" data-parent="#accordionEx7"
                                href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                More details
                            </a>

                        </div>
                    </div>

                </div>

                <!-- Card body -->
                <div id="collapse1" class="collapse 
                @if($i == 0)
                show
                @endif
                " role="tabpanel" aria-labelledby="heading1" data-parent="#accordionEx7">
                    <div class="card-body mb-1">
                        <div class="row">
                            <div class="col-md-6 my-2">
                                <div class="col-12 font-weight-bold colorb">
                                    Salaried
                                </div>
                                <div class="col-12 text-dark">
                                    @if($loan->salaried)
                                    Required
                                    @else
                                    Not Required
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 my-2">
                                <div class="col-12 font-weight-bold colorb">
                                    Salaried Duration
                                </div>
                                <div class="col-12 text-dark">
                                    {{$loan->salaried_duration}}
                                </div>
                            </div>
                            <div class="col-md-6 my-2">
                                <div class="col-12 font-weight-bold colorb">
                                    Security
                                </div>
                                <div class="col-12 text-dark">
                                    @if($loan->security)
                                    Required
                                    @else
                                    Not Required
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 my-2">
                                <div class="col-12 font-weight-bold colorb">
                                    Security Type
                                </div>
                                <div class="col-12 text-dark">
                                    {{$loan->security_type}}
                                </div>
                            </div>
                            <div class="col-md-6 my-2">
                                <div class="col-12 font-weight-bold colorb">
                                    Minimum Duration
                                </div>
                                <div class="col-12 text-dark">
                                    {{$loan->minimum_duration}}
                                </div>
                            </div>
                            <div class="col-md-6 my-2">
                                <div class="col-12 font-weight-bold colorb">
                                    Maximum Duration
                                </div>
                                <div class="col-12 text-dark">
                                    {{$loan->maximum_duration}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Accordion card -->
            <?php $i++; ?>
            @endforeach
            @else
            <div class="my-2 z-depth-1">
                <section class="text-center dark-grey-text">
                    <p class="text-muted"><i class="fas fa-exclamation-triangle mr-1 text-danger my-5 py-5"></i> No
                        Loans in
                        this
                        category yet.
                    </p>
                </section>
            </div>
            @endif

        </div>
        <!--/.Accordion wrapper-->

    </div>
    <!-- Grid column -->

</div>
<!-- Grid row -->
@endsection


@section('pagescripts')
<script type="text/javascript">

</script>
@endsection
