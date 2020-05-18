<div class="my-3">

    Dear <strong>{{ $name }}</strong>,
    <br />
    <br />
    Please click on the following link to verify your account:<br />



    <a href={{ url('/verify/'.$verification_code) }}>
        {{ url('/verify/'.$verification_code) }}
    </a>

    <br />
    <br />

    <div class="mt-4 mb-0 text-muted">
        <i>Ignore if you did not try to register at {{$sitename}}</i>
    </div>

</div>
