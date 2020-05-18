@extends('layout.app')


@section('pagestyle')
<style>

</style>
@endsection


@section('body')
<div class="" style="min-height:80vh;">

    <div class="container mt-0 px-0 z-depth-0 h-100">

        <div class="col-md-6 mx-auto mt-0 h-100">
            <!-- Material form login -->
            <div class="card z-depth-0 bgi mt-0 text-center">

                <!--Card content-->
                <div class="card-body mt-0">

                    <i class="fas fa-5x colora fa-check-double mb-2" aria-hidden="true"></i>

                    <p class="colorb">
                        Registered Successfuly. <br />
                        A verification link email has been sent to {{$email}} .<br />
                        Verify the account and <a href="/login">login</a>.

                    </p>
                    <br />
                    <div class="mx-4 my-2">
                        <a href="{{ url('/') }}" type="button"
                            class="btn btn-link cbuttonw z-depth-0 rounded mb-0">Home</a>
                    </div>

                </div>


            </div>
            <!-- Material form login -->
        </div>
    </div>

</div>


</div>

</div>
@endsection


@section('pagescripts')
<script type="text/javascript">
</script>
@endsection
