@extends('layout.app')


@section('pagestyle')
<style>

</style>
@endsection


@section('body')

<table class="table" id="loanstable">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Type</th>
            <th scope="col">Lender</th>
            <th scope="col">Interest</th>
            <th scope="col">Min</th>
            <th scope="col">Max</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>5%</td>
            <td>@mdo</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>5%</td>
            <td>@fat</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>5%</td>
            <td>@twitter</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>5%</td>
            <td>@twitter</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>5%</td>
            <td>@twitter</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>5%</td>
            <td>@twitter</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>5%</td>
            <td>@twitter</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>5%</td>
            <td>@twitter</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>5%</td>
            <td>@twitter</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>5%</td>
            <td>@twitter</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
    </tbody>
</table>

@endsection


@section('pagescripts')
<script type="text/javascript">
$(document).ready(function() {


    var table = $('#loanstable').DataTable({
            'ajax': '{{url("/api/allloans")}}',
            'select': {
                'style': 'multi',
                selector: ':not(:last-child)'
            },

            'order': [
                [1, 'asc']
            ],
            'columns': [{
                    data: "first_name",
                },
                {
                    data: "last_name"
                },
                {
                    data: "status"
                },
                {
                    data: "company_name"
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

        $('#dtMaterialDesignExample').find("td:nth-child(5)").each(function() {
            console.log(this);
            var id = $(this).children("span").attr("id");
            if (id === '' || id == null) {
                id = this.innerHTML;
            }
            $(this).html(
                "<span class='d-none' id='" + id +
                "'></span><a href='#'" + id +
                "' type='button' class='d-inline p-2 btn btn-outline-success btn-sm waves-effect mx-0 my-0 px-1 py-1 mr-1 pc' onclick='approveclerk(" +
                id +
                ")'>Approve</a><a href='#' type='button' class='d-inline p-2 btn btn-outline-danger btn-sm waves-effect mx-0 my-0 px-1 py-1 ml-1 pc' onclick='deleteuser(" +
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



    // $('.dt-checkboxes').on('change', function(e){

    //        // var rows_selected = table.column(0).checkboxes.selected();
    //         alert("hw");


    // });

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
</script>
@endsection
