
const config = {}

$('#lauchClass').click(function () {
    // lauch modal
    $("#add-Class").modal("show");
})

// launch edit tab


// launch delete confirmation tab
$('[data-classdelid]').click(function () {
    config['_id'] = $(this).data('classdelid')
    $('#confirmModal').modal('show')
})

$('[data-proceed]').click(function () {
    // make api call
    $.ajax({
        type: 'post',
        url: `${base_url}/purge/schedule`,
        data: {
            schedule_id: config._id
        },
        format: 'json',
        error: function (err) {
            console.log(err.statusText)
        },
        success: function (response, responseText) {
            if (responseText == 'success') {
                window.location.reload()
            }
        }
    })
})

// data dismiss

$('[data-dismiss]').click(function () {
     $(".modal:not(.auto-off)").modal("hide");
})

