
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

// 
$('[data-classviewid]').click(function () {
    const schedule_id = $(this).data('classviewid')

     // pop up modal
    $('#edit-Class').modal('show')

    // make a get request
    $.ajax({
        type: 'get',
        url: `${base_url}/admin/api/schedules?_id=${schedule_id}`,
        format: 'json',
        error: function (err) {
            console.log(err.statusText)
        },
        success: function (response, responseText) {
            if (responseText == 'success') {
                
                if (Array.isArray(response)) {
                    response.forEach(el => {
                        mapEditModal(el)
                    })
                }

                else {
                    for (const el in response) {
                        mapEditModal(response[el])
                    }
                }
               
            }
            else {
                // launch failure modal
            }
        }
    })
})

// map values to edit modal

function mapEditModal(data) {
    // pick the nodes
    $teacher = $('#teacher_id')
    $class = $('#class_opt')
    $stream = $('#stream_opt')
    $subject = $('#subject_opt')
    $day = $('#day_opt')
    // fields
    const startTime = document.querySelector('#startTime')
    const endTime = document.querySelector('#endTime')
    
    $teacher[0][0].innerText = data.t_name
    $class[0][0].innerText = data.class_id
    $stream[0][0].innerText = data.stream
    $subject[0][0].innerText = data.name
    $day[0][0].innerText = data.day

    startTime.value = data.start
    endTime.value = data.end

    
}