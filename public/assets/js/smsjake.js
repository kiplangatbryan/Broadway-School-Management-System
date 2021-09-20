
// make and ajax call
$.ajax({
    url: `${base_url}/events/fetch_all`,
    type: 'get',
    format: 'json',
    cache: true,
    error: function (err) {
        console.log(err.statusText)
    },
    success: function (response, statusText) {
        if (statusText === 'success') {
            // sanitize for the calender
            RenderCalender(processResponse(response))
        }
    }
})

// process response

function processResponse(response) {
     return response.map(event => {
        return {
            title: event.title,
            start: event.start_date,
            end: event.end_date === '0000-00-00' ? null : event.end_date
        }
    })
}



function RenderCalender(events, refresh=false) {
    var calendarEl = document.getElementById('calendar');
    if (refresh) {
        calendarEl.innerHTML = ''
    }
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        initialDate: '2021-09-19',
        headerToolbar: {
            left: 'prev, next, today',
            center: 'title',
            right: 'dayGridMonth, timeGridWeek, timeGridDay'
        },
        events: events
    });
    calendar.render();  
}

// create a new event
$('#createEvent').submit(function (e) {
    e.preventDefault()
    var body = $('#body_data').val()
    var start_date = $('#start_data').val()
    var end_date = $('#end_data').val()

    $.ajax({
         url: `${base_url}/events/create`,
        type: 'post',
        format: 'json',
        data: {
            title: body,
            start_date,
            end_date
        },
        cache: true,
        error: function (err) {
            console.log(err.statusText)
        },
        success: function async (response, statusText) {
            if (statusText === 'OK') {
                // sanitize for the calender
                RenderCalender(processResponse(response), refresh=true)
            }
        }
    })
    
    


})
