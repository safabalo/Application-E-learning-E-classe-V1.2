
<nav class="sidebar navbar float-start vh-100 position-fixed">
        <ul class="navbar-nav d-md-flex justify-content-md-center ms-md-3">
            <li class=" d-sm-none d-lg-block">
                <h1 class="border-start border-5 border-info h2 ms-2">E-classe</h1>
            </li>
            <li>
                <img src="img/Admin-photo.png" alt="" id="admin" height="100px" width="100px" class="ms-5 d-sm-none d-lg-block">
            </li>
            <li>
                <h3 class="ms-3 d-sm-none d-lg-block admin"> <?php
                if($_SESSION["first_name"] && $_SESSION["last_name"] ) {
                ?>
                <?php echo $_SESSION["first_name"], " " ,$_SESSION["last_name"] ; ?>
                <?php
                }else echo "<h1>Please login first .</h1>";
                ?></h3>
            </li>
            <li class="text-info h5 ms-5 d-sm-none d-lg-block admin">Admin</li>
            <li class="list_elements ms-lg-5 mb-md-3">
                <a href="dashboard.php" class="d-flex nav-link text-black">
                    <img src="img/Home.svg" alt="home">
                    <p class="pt-lg-3 ps-2 d-sm-none d-lg-block paragraph home">Home</p>
                </a>
            </li>
            <li class="list_elements ms-lg-5 mb-md-3">
                <a href="courses.php" class="d-flex nav-link text-black">
                    <img src="img/Course.svg" alt="course">
                    <p class="pt-lg-3 ps-2 d-sm-none d-lg-block paragraph">Course</p>
                </a>
            </li>
            <li class="list_elements ms-lg-5 mb-md-3">
                <a href="student.php" class="d-flex nav-link text-black">
                    <img src="img/Student.svg" alt="student">
                    <p class="pt-lg-3 ps-2 d-sm-none d-lg-block paragraph" id="student">Student</p>
                </a>
            </li>
            <li class="list_elements ms-lg-5 mb-md-3">
                <a href="payment.php" class="d-flex nav-link text-black">
                    <img src="img/Payment.svg" alt="payment">
                    <p class="pt-3 ps-2 d-sm-none d-lg-block paragraph">Payment</p>
                </a>
            </li>
            <li class="list_elements ms-lg-5 mb-md-3">
                <a href="#" class="d-flex nav-link text-black">
                    <img src="img/Report.svg" alt="repport">
                    <p class="pt-lg-3 ps-2 d-sm-none d-lg-block paragraph">Report</p>
                </a>
            </li>
            <li class="list_elements ms-lg-5 mb-md-3">
                <a href="#" class="d-flex nav-link text-black">
                    <img src="img/Setting.svg" alt="setting">
                    <p class="pt-lg-3 ps-lg-2 d-sm-none d-lg-block paragraph">Setting</p>
                </a>
            </li>
            <li class="list_elements ms-lg-5 mt-lg-1 mb-md-3">
                <a href="logout.php" class="d-flex nav-link text-black">
                    <p class="pt-lg-3 pe-lg-2 d-sm-none d-lg-block paragraph">Logout</p>
                    <img src="img/Logout.svg" alt="logout">
                </a>
            </li>
        </ul>
    </nav>