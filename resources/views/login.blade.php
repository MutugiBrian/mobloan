@extends('layout.app')


@section('pagestyle')
<style>

</style>
@endsection


@section('body')
<div class="container cloudy-knoxville-gradient py-5 px-0 z-depth-0">

    <div class="my-5 z-depth-0 mx-4 cloudy-knoxville-gradient">

        <div class="row cloudy-knoxville-gradient">
            <div class="col-md-6 mx-auto cloudy-knoxville-gradient">
                <!-- Material form login -->
                <div class="card z-depth-0 cloudy-knoxville-gradient ">

                    <!--Card content-->
                    <div class="card-body cloudy-knoxville-gradient" style="min-height:60vh;">

                        <!-- Form -->
                        <form class="text-center mx-3 px-3 needs-validation" style="color: #757575;"
                            action="{{ URL::to('/user/login') }}" method="POST" novalidate>

                            <div class="my-4">
                                <div class="md-form">
                                    <input type="email" id="materialLoginFormEmail" class="form-control">
                                    <label for="materialLoginFormEmail">E-mail</label>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="my-4">
                                <div class="md-form">
                                    <input type="password" id="materialLoginFormPassword" class="form-control">
                                    <label for="materialLoginFormPassword">Password</label>
                                </div>
                            </div>

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">


                            <div class="text-center mt-3">
                                <button class="btn btn-primary btn-rounded btn-block my-4 waves-effect" type="submit"><i
                                        class="fas fa-sign-in-alt mr-1"></i> Login</button>

                            </div>

                            <div class="row mt-3 colora">
                                <small id="passwordHelpBlock" class="form-text text-right col">
                                    <a class="colorb" href="{{url('/forgotpass')}}">Forgot Password??</a>
                                </small>
                                <small id="passwordHelpBlock" class="form-text text-left col colorb">
                                    <a class="colorb" href="{{ url('/register') }}">No
                                        Account?&nbsp;Register</a>
                                </small>
                            </div>


                        </form>
                        <!-- Form -->



                    </div>

                </div>
                <!-- Material form login -->
            </div>
        </div>

    </div>


</div>
<!-- Material form login -->

<!-- Material form login -->

@endsection


@section('pagescripts')
<script type="text/javascript">
</script>
@endsection
