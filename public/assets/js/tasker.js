$alertsNode = $('div#alerts-container');
$messageNode = $('div#message-container');
const spinner = $('<div class="col"><div class="text-center mt-3"><small class="fw-bold">Fetching ...</small></div><div class="mt-1 text-center"><span role="status" class="spinner-border spinner-border-lg"></span></div></div>');
// fetch messages
$(function () {
    // add spinner
    $messageNode.html(spinner);
    const filter = 'default'
    $.ajax({
        url: `${base_url}/admin/api/messages?filter=${filter}`,
        type: 'get',
        format: 'json',
        cache: true,
        error: function (err) {
            console.log(err.statusText)
        },
        success: function (response, statusText) {
            // show loading state
            // fetch the data and populate to the view
            if (statusText === 'success') {
                // sanitize for the calender
                $("span#message-count").text(response.length)
                response.forEach(el => {
                  
                     var data = (`<a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image me-3"><img class="rounded-circle" src="<?php echo base_url(); ?>/assets/img/avatars/avatar4.jpeg">
                                        <div class="bg-success status-indicator"></div>
                                    </div>
                                    <div class="fw-bold">
                                        <div class="text-truncate"><span>${el.body}</span></div>
                                        <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                    </div>
                                </a>`);
                    $messageNode.append(data);
                  
                })

            }
        }
        
    })
})

// fetch alerts
$(function () {
    // set loading
    $alertsNode.html(spinner);

    $.ajax({
        url: `${base_url}/admin/api/alerts`,
        type: 'get',
        format: 'json',
        cache: true,
        error: function (err) {
            console.log(err.statusText)
        },
        success: function (response, statusText) {
            if (statusText === 'success') {
                // sanitize for the calender
                $('span#alerts-count').text(response.length)
                $alertsNode.html('');

                response.forEach(el => {
                    var data = $(`<a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="me-3">
                                        <div class="bg-primary icon-circle"><i class="fas fa-${el.icon}-alt text-white"></i></div>
                                    </div>
                                    <div>
                                        <span class="small text-gray-500">${el.created_at}</span>
                                        <p>${el.body}</p>
                                    </div>
                                </a>`);

                    $alertsNode.append(data);
                    var show_more_btn = $('<a class="dropdown-item text-center small text-gray-500" id="showAlerts" href="#">Show All Alerts</a>')
                    $alertsNode.append(show_more_btn)
                })
            }
        }
        
    })
})



$('#contact-search').on('focus', function () {
    console.log('focused')
    const filter = 'default'
   
    if (sessionStorage.getItem('contacts') == null) {
        // fetch and store in sessionStorage
        $.ajax({
            url: `${base_url}/admin/api/contacts?filter=${filter}`,
            type: 'get',
            format: 'json',
            cache: true,
            error: function (err) {
                console.log(err.statusText)
            },
            success: function (response, responseText) {
                if (responseText == 'success') {
                    sessionStorage.setItem('contacts', JSON.stringify(response))
                }
            }
        })
    }
})

$('#contact-search').on('keyup', function (e) {
    console.log($(this).val())
    // always true
    const contacts = sessionStorage.getItem('contacts')
    if (contacts == null) return
    const searchString = $(this).val().toLowerCase()
    const filterSearch = JSON.parse(contacts).filter(function (el) {
        return el['name'].toLowerCase().indexOf(searchString) > -1
    })

    render_search_resuls(filterSearch)
})

function render_search_resuls(data) {
    $('#search-results').fadeIn()
    $('#search-results').html('')
    
    data.forEach((el) => {
        $('#search-results').append($(`<div class="result-item" data-index='${el['hash']}'><div class="main__text">${el['name']}</div><div class="subtitle__text">${el['email']}</div></div>`))
    })
    subcribe_click_event()
}

function auto_search(key) {
    if (sessionStorage.getItem('contacts') == null) return

    const data = JSON.parse(sessionStorage.getItem('contacts'))

    const lost = data.find(function (el) {
        return el['hash'] == key   
    })

    return lost
    
}

function subcribe_click_event() {
    document.querySelectorAll('.result-item').forEach(el => {
        el.addEventListener('click', function () {
            if (el.getAttribute('data-index') != null) {
                append_contact(auto_search(el.getAttribute('data-index')))
                // close popup
                add_contact_click()
                $('#search-results').fadeOut()
            }
        })
    })
}
function add_contact_click() {
    document.querySelectorAll('.contact_pill').forEach(el => {
        el.addEventListener('click', function (e) {
            pop_up_msg_window(auto_search(el.getAttribute('data-hash')))
        })
    })
}

// ontap 
// append the contact to the contact-id
// if any messages exist show them
// open a new message window

function append_contact(data) {
    const contactNode = $('#contact-box')
    $contact_pill = $(`<a data-hash="${data.hash}" class="dropdown-item d-block contact_pill d-flex align-items-center w-100 custom-block py-2"  href="#"><div class="me-3"><img class="rounded-circle" src="${base_url}/assets/teacherAvatar/${data.profileUrl}"><div class="bg-warning status-indicator"></div></div><div class="fw-bold"><div class="text-truncate"><span>${data.name}</span></div><p class="small text-gray-500 mb-0">last conversation - 2d</p></div></a>`) 
    contactNode.append($contact_pill)
}


function pop_up_msg_window(data) {
    $('.threads').attr('data-destination', data.hash)
    $('.threads').attr('data-origin', originHash)

    render_msg_thread()

}

function render_msg_thread() {
    // fetch all messages
    if (sessionStorage.getItem('messsages') == null) fetch_messages()
    console.log(JSON.parse(sessionStorage.getItem('messages')))
}

function fetch_messages() {
    const filter = 'default'
    $.ajax({
        url: `${base_url}/admin/api/messages?filter=${filter}`,
        type: 'get',
        format: 'json',
        cache: true,
        error: function (err) {
            console.log(err.statusText)
        },
        success: function (response, responseText) {
            console.log(response)
            if (responseText == 'success') {
                sessionStorage.setItem('messages', JSON.stringify(response))
            }
        }
    })
}