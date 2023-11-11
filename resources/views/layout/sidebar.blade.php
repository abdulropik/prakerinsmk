<div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
        <div class="header-left">
            <a href="index.html" class="logo">
                <img src="assets/img/logo1.png" width="40" height="40" alt="">
                <span class="text-uppercase">Preschool</span>
            </a>
        </div>
        <ul class="sidebar-ul">
            <li class="menu-title">Menu</li>
            <li>
                <a href="{{ route('dashboard') }}"><img src="assets/img/sidebar/icon-1.png"
                        alt="icon"><span>Dashboard</span></a>
            </li>
            <li class="submenu">
                <a href="#"><img src="assets/img/sidebar/icon-2.png" alt="icon"> <span>
                        Teachers</span> <span class="menu-arrow"></span></a>
                <ul class="list-unstyled" style="display: none;">
                    <li><a href="all-teachers.html"><span>All Teachers</span></a></li>
                    <li><a href="add-teacher.html"><span>Add Teacher</span></a></li>
                    <li><a href="edit-teacher.html"><span>Edit Teacher</span></a></li>
                    <li><a href="about-teacher.html"><span>About Teacher</span></a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#"><img src="assets/img/sidebar/icon-3.png" alt="icon"> <span>
                        Students</span> <span class="menu-arrow"></span></a>
                <ul class="list-unstyled" style="display: none;">
                    <li><a href="all-students.html"><span>All Students</span></a></li>
                    <li><a href="add-student.html"><span>Add Student</span></a></li>
                    <li><a href="edit-student.html"><span>Edit Student</span></a></li>
                    <li><a href="about-student.html"><span>ABout student</span></a></li>
                </ul>
        </ul>
    </div>
</div>
