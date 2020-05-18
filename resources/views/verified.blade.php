@extends('layout.app')

@section('pagestyle')

@endsection


@section('body')

<div class="mask" style="min-height:80vh;">

    <div class="container mt-0 px-0 z-depth-0 h-100">

        <div class="col-md-6 mx-auto mt-0 h-100">
            <!-- Material form login -->
            <div class="card z-depth-0 bgi mt-0 text-center">

                <!--Card content-->
                <div class="card-body mt-0">

                    <i class="fas fa-5x colora fa-user-check mb-2" aria-hidden="true"></i>

                    <p class="colorb">
                        Account verified successfully.
                        <br />
                        You can now <a href="/login">login</a>.
                    </p>
                    <br />

                </div>


            </div>
            <!-- Material form login -->
        </div>
    </div>

</div>

@endsection


@section('pagescripts')

@endsection
