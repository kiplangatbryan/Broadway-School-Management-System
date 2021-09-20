<?php include(APPPATH.'Views/templates/side-nav.php'); ?>
<?php include(APPPATH.'Views/templates/lunar-css.php'); ?>



<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Behold the term calender Events</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" id="opener" href="#"><i class="fas fa-plus fa-sm text-white-50"></i>&nbsp; &nbsp;Add Event</a>
    </div>

    <!-- create events modal -->
    <?php include(APPPATH.'Views/modals/event-create.php'); ?>


    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="text-primary fw-bold m-0">Overall Term Calendar</h6>
                    <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                        <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
                            <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="card-body" >
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>
</div>
               

 <script>

document.addEventListener('DOMContentLoaded', function() {
var calendarEl = document.getElementById('calendar');
var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    initialDate: '2021-09-19',
    headerToolbar: {
        left: 'prev, next, today',
        center: 'title',
        right: 'dayGridMonth, timeGridWeek, timeGridDay'
    },
    events: [
    {
        title: 'All day event',
        start: '2021-09-22'
    },
    {
        title: 'Long Event',
        start: '2021-09-27',
        end: '2021-09-29'
    },
    {
        title: 'All day event',
        start: '2021-09-22T16:30:00',

    }
]
});
calendar.render();
});

</script>

<?php include(APPPATH.'Views/templates/lunar-scripts.php'); ?>◘◘
<?php include(APPPATH.'Views/templates/footer-section.php'); ?>
