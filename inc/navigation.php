<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #e22b2b; color:#fff">
    <div class="container-fluid" style="color:#fff">
        <img src="https://vedrio.com/logo/logo.svg" width="30" alt="">
        <a class="navbar-brand text-light" href="#" style="padding-left:10px;">Prerna Project - 01</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-light <?= (isset($page)) && $page == 'home' ? 'active' : '' ?>" href="./">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light <?= (isset($page)) && $page == 'class_list' ? 'active' : '' ?>" href="./?page=class_list">Classes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light <?= (isset($page)) && $page == 'student_list' ? 'active' : '' ?>" href="./?page=student_list">Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light <?= (isset($page)) && $page == 'attendance' ? 'active' : '' ?>" href="./?page=attendance">Attendance</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light <?= (isset($page)) && $page == 'attendance_report' ? 'active' : '' ?>" href="./?page=attendance_report">Report</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>