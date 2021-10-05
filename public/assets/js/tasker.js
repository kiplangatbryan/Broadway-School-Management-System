$alertsNode = $('div#alerts-container');
$messageNode = $('div#message-container');
const spinner = $('<div class="col"><div class="text-center mt-3"><small class="fw-bold">Fetching ...</small></div><div class="mt-1 text-center"><span role="status" class="spinner-border spinner-border-lg"></span></div></div>');
// fetch messages
$(function () {
    // add spinner
    $messageNode.html(spinner);

    $.ajax({
        url: `${base_url}/admin/api/messages`,
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
                console.log(response.length)
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
                })
            }
        }
        
    })
})