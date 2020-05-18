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
                <form class="text-center" style="color: #757575;" action="/register" method="POST"
                    enctype="multipart/form-data">

                    <div class="form-row">
                        <div class="col-sm-6">
                            <!-- First name -->
                            <div class="md-form">
                                <input type="text" id="name" name="name" class="form-control">
                                <label for="name">Lender name</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- Last name -->
                            <div class="md-form">
                                <input type="email" id="email" name="email" class="form-control">
                                <label for="email">Lender email</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="col-sm-6">
                            <!-- First name -->
                            <div class="md-form">
                                <div class="file-field">
                                    <div class="btn btn-outline-primary btn-rounded waves-effect btn-sm float-left">
                                        <span>Choose file</span>
                                        <input type="file" name="imageurl">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Upload logo"
                                            disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- Last name -->
                            <div class="md-form">
                                <input type="text" id="address" name="address" class="form-control">
                                <label for="address">Address</label>
                            </div>
                        </div>
                    </div>


                    <!-- E-mail -->
                    <div class="md-form mb-2">
                        <input type="text" id="phone" name="phone" class="form-control">
                        <label for="phone">Phone number</label>
                    </div>

                    <!-- Password -->
                    <div class="md-form">
                        <input type="password" id="password" name="password" class="form-control"
                            aria-describedby="materialRegisterFormPasswordHelpBlock">
                        <label for="password">Password</label>
                        <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted">
                            At least 8 characters and 1 digit
                        </small>
                    </div>
                    @csrf


                    <!-- Password -->
                    <div class="md-form">
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                        <label for="password_confirmation">Confirm Password</label>
                        <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted">
                            Must match password
                        </small>
                    </div>

                    <!-- Sign up button -->
                    <button class="btn btn-primary btn-rounded btn-block my-4 waves-effect" type="submit"><i
                            class="fas fa-user-plus mr-1"></i> Register</button>


                    <p>Registered ?
                        <a href="/login">login</a>
                    </p>

                    <hr>

                    <!-- Terms of service -->
                    <p>By clicking
                        <em>Register</em> you agree to our
                        <a href="#" data-toggle="modal" data-target="#modalCookie1">terms of service</a>

                </form>
                <!-- Form -->

            </div>

        </div>
        <!-- Material form register -->

    </div>
</div>


<!--Modal: modalCookie-->
<div class="modal fade top" id="modalCookie1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" data-backdrop="true">
    <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
        <!--Content-->
        <div class="modal-content">
            <div class="modal-header z-depth-0">
                <p class="heading">Our terms of service
                </p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>
            <!--Body-->
            <div class="modal-body">
                <div class="row d-flex justify-content-center align-items-center">

                    <p class="p-2">{{$site->terms ?? ''}}</p>

                    <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Ok, thanks</a>
                </div>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: modalCookie-->

@endsection


@section('pagescripts')
<script type="text/javascript">
</script>
@endsection
