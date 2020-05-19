@extends('layout.app')


@section('pagestyle')
<style>

</style>
@endsection


@section('body')
<div class="container " style="min-height:78vh !important;">
    <div class="mx-2">
        <a href="/createloan" class="btn btn-primary btn-rounded btn-md ml-md-0 my-4 waves-effect" type="submit">Offer a
            new
            loan</a>
    </div>
    <table class="table" id="loantable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Type</th>
                <th scope="col">Interest</th>
                <th scope="col">Min</th>
                <th scope="col">Max</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
    </table>
</div>
@endsection


@section('pagescripts')
<script type="text/javascript">
$(document).ready(function() {


    var table = $('#loantable').DataTable({
            'ajax': '{{url("/api/lenderloans/".Auth::User()->id)}}',
            'select': {
                'style': 'multi',
                selector: ':not(:last-child)'
            },

            'order': [
                [1, 'asc']
            ],
            'columns': [{
                    data: "id",
                },
                {
                    data: "loan_type_name"
                },
                {
                    data: "interest"
                },
                {
                    data: "minimum_amount"
                },
                {
                    data: "maximum_amount"
                },
                {
                    data: "id"
                },
            ],
            "bFilter": false,
            dom: 'Bfrtip',
        })
        .on('draw.dt', function() {
            //Add here yours filters
            apply_labels();
        });
    var clearpercentages = function() {
        $('.pc').remove();
    }

    var apply_labels = function() {
        clearpercentages();

        $('#loantable').find("td:nth-child(6)").each(function() {

            var id = $(this).children("span").attr("id");
            if (id === '' || id == null) {
                id = this.innerHTML;
            }
            $(this).html(
                "<span class='d-none' id='" + id +
                "'></span><a href='/editloan/" + id +
                "' type='button' class='d-inline p-2 btn btn-rounded btn-outline-primary btn-sm waves-effect mx-0 my-0 px-1 py-1 ml-1 pc z-depth-0'><i class='fas fa-pen mr-1'></i>Edit</a><a href='#' type='button' class='d-inline p-2 btn btn-rounded btn-outline-danger btn-sm waves-effect mx-0 my-0 px-1 py-1 ml-1 pc z-depth-0' onclick='deleteloan(" +
                id +
                ")'>Delete</a>"
            );
            $(this).val(id);
            // }
        });
    };


    $(document).on('change', 'tbody', function() {
        var rows_selected = table.column(0).checkboxes.selected();
        var row_count = rows_selected.length;

        if (row_count == 1) {
            $('#viewclerk').removeClass('disabled');
            $('#viewclerk').addClass('bgb');

            $('#removeclerk').removeClass('disabled');
            $('#removeclerk').addClass('bgb');

        } else {
            $('#viewclerk').removeClass('bgb');
            $('#viewclerk').addClass('disabled');

            $('#removeclerk').removeClass('bgb');
            $('#removeclerk').addClass('disabled');

        }
    });

});

function deleteloan(id) {
    $.ajax({
        url: '/deleteloan/' + id,
        type: "POST",
        data: []
    }).done(function(response) { //
        toastr.success('Loan Deleted');
    });
    $('#loantable').DataTable().ajax.reload();
}
</script>
@endsection
