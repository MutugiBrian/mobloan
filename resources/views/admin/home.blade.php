@extends('layout.app')


@section('pagestyle')
<style>

</style>
@endsection


@section('body')


<table class="table" id="lendertable" style="min-height:77.5vh !important;">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Loans</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
</table>

@endsection


@section('pagescripts')
<script type="text/javascript">
$(document).ready(function() {


    var table = $('#lendertable').DataTable({
            'ajax': '{{url("/api/lenders")}}',
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
                    data: "name"
                },
                {
                    data: "email"
                },
                {
                    data: "phone"
                },
                {
                    data: "loans"
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

        $('#lendertable').find("td:nth-child(6)").each(function() {

            var id = $(this).children("span").attr("id");
            if (id === '' || id == null) {
                id = this.innerHTML;
            }
            $(this).html(
                "<span class='d-none' id='" + id +
                "'></span><a href='#' type='button' class='d-inline p-2 btn btn-rounded btn-outline-danger btn-sm waves-effect mx-0 my-0 px-1 py-1 ml-1 pc z-depth-0' onclick='deletelender(" +
                id +
                ")'>Delete</a>"
            );
            $(this).val(id);
            // }
        });
    };



    $('#dtMaterialDesignExample_wrapper').find('label').each(function() {
        $(this).parent().append($(this).children());
    });
    $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('input').each(function() {
        const $this = $(this);
        $this.attr("placeholder", "Search");
        $this.removeClass('form-control-sm');
    });
    $('#dtMaterialDesignExample_wrapper .dataTables_length').addClass('d-flex flex-row');
    $('#dtMaterialDesignExample_wrapper .dataTables_filter').addClass('md-form');
    $('#dtMaterialDesignExample_wrapper select').removeClass(
        'custom-select custom-select-sm form-control form-control-sm');
    $('#dtMaterialDesignExample_wrapper select').addClass('mdb-select');
    $('#dtMaterialDesignExample_wrapper .mdb-select').materialSelect();
    $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('label').remove();


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

function deletelender(id) {
    $.ajax({
        url: '/deletelender/' + id,
        type: "POST",
        data: []
    }).done(function(response) { //
        toastr.success('Lender Deleted');
    });
    $('#lendertable').DataTable().ajax.reload();
}
</script>
@endsection
