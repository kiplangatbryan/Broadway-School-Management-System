<?php include(APPPATH.'Views/templates/common-hlinks.php'); ?>
<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style.min.css">


<body>
    <div class="overlook_canvas">
         <div class="bottom_canvas">
             <h4 class="text-dark text-center mb-3">
                 Choose An Account
             </h4>
             <div class="row justify-content-center">
                    <div class="text-center col_one">With Chrome profiles you can separate all your Chrome stuff. Create profiles for friends and family, or split between work and fun.</div>
             </div>
        

            <div class="row justify-content-center fix-width">
                <a href="/login/admin" class="card_board">
                    <div class="title">
                        Admin
                    </div>
                    <div class="mt-4 icon_board">
                        <i class="fas fa-user fa-3x text-gray-500"></i>
                    </div>
                </a>
                <a href="/login/teacher" class="card_board">
                    <div class="title">
                        Teacher
                    </div>
                    <div class="mt-4 icon_board">
                        <i class="fas fa-user fa-3x text-gray-500"></i>
                    </div>
                </a>
                <a href="/login/student" class="card_board">
                    <div class="title">
                        Student
                    </div>
                    <div class="mt-4 icon_board">
                        <i class="fas fa-user fa-3x text-gray-500"></i>
                    </div>
                </a>
            </div>
         </div>
    </div>


</body>





<?php include(APPPATH.'Views/templates/footer-section.php'); ?>
