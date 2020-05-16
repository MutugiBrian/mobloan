@extends('layout.app')


@section('pagestyle')
<style>

</style>
@endsection


@section('body')
<div class="container cloudy-knoxville-gradient py-2 px-0 z-depth-0">

    <div class="my-3 z-depth-0 mx-4 cloudy-knoxville-gradient">
        <!-- Material form register -->
        <div class="card cloudy-knoxville-gradient z-depth-0">

            <!--Card content-->
            <div class="card-body px-lg-5 pt-0">

                <!-- Form -->
                <form class="text-center" style="color: #757575;" action="#!">

                    <div class="form-row">
                        <div class="col-sm-6">
                            <!-- First name -->
                            <div class="md-form">
                                <input type="text" id="materialRegisterFormFirstName" class="form-control">
                                <label for="materialRegisterFormFirstName">Lender name</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- Last name -->
                            <div class="md-form">
                                <input type="email" id="materialRegisterFormLastName" class="form-control">
                                <label for="materialRegisterFormLastName">Lender email</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="col-sm-6">
                            <!-- First name -->
                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn btn-outline-cyan btn-rounded waves-effect btn-sm float-left">
                                        <span>Choose file</span>
                                        <input type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Upload logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- Last name -->
                            <div class="md-form">
                                <input type="text" id="materialRegisterFormLastName" class="form-control">
                                <label for="materialRegisterFormLastName">Address</label>
                            </div>
                        </div>
                    </div>


                    <!-- E-mail -->
                    <div class="md-form mb-2">
                        <input type="text" id="materialRegisterFormEmail" class="form-control">
                        <label for="materialRegisterFormEmail">Phone number</label>
                    </div>

                    <!-- Password -->
                    <div class="md-form">
                        <input type="password" id="materialRegisterFormPassword" class="form-control"
                            aria-describedby="materialRegisterFormPasswordHelpBlock">
                        <label for="materialRegisterFormPassword">Password</label>
                        <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted">
                            At least 8 characters and 1 digit
                        </small>
                    </div>


                    <!-- Password -->
                    <div class="md-form">
                        <input type="password" id="materialRegisterFormPassword" class="form-control"
                            aria-describedby="materialRegisterFormPasswordHelpBlock">
                        <label for="materialRegisterFormPassword">Confirm Password</label>
                        <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted">
                            Must match password
                        </small>
                    </div>

                    <!-- Sign up button -->
                    <button class="btn btn-cyan btn-rounded btn-block my-4 waves-effect z-depth-0"
                        type="submit">Register</button>


                    <p>Registered ?
                        <a href="/login">login</a>
                    </p>

                    <hr>

                    <!-- Terms of service -->
                    <p>By clicking
                        <em>Sign up</em> you agree to our
                        <a href="/terms" target="_blank">terms of service</a>

                </form>
                <!-- Form -->

            </div>

        </div>
        <!-- Material form register -->

    </div>
</div>

@endsection


@section('pagescripts')
<script type="text/javascript">
</script>
@endsection
