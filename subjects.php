<?php include 'includes/header.php'; ?>
<!-- all other is  here -->
    <div class=" container py-5">
        <h1 class="fw-bold my-4 mb-1 p-3 text-center">Welcome To ERP Portal</h1>
        <!-- felxing items '' -->
        <div class="outer0 d-flex bg-light text-dark ">

            <!-- sidebar  -->
            <div class="outer1 d-flex slidebar flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 300px;">
                <a href="dashboard.php" class="d-flex  text-decoration-none">

                    <span class="fs-3 font-dmsans text-primary-emphasis fw-bold text-uppercase"><i
                            class="fa-regular fa-font-awesome"></i> SMART ERP</span>
                </a>
                <hr />
                <ul class=" nav nav-pills flex-column mb-auto fs-5 side-link">
                    <li class="hover nav-item side-link">
                        <a href="dashboard.php" class="nav-link link-body-emphasis">
                            <i class="fa-solid fa-id-card"></i> Dashboard
                        </a>
                    </li>
                    <li class="hover nav-item side-link ">
                        <a href="subjects.php" class="nav-link link-body-emphasis ">
                            <i class="fa-solid fa-chart-line"></i> Subjects
                        </a>
                    </li>
                    <li class="hover nav-item side-link ">
                        <a href="resume.php" class="nav-link link-body-emphasis">
                            <i class="fa-regular fa-file-pdf"></i> Auto resume generator
                        </a>
                    </li>
                  
                    <li class="hover nav-item side-link">
                        <a href="levelupquiz.php" class="nav-link link-body-emphasis">
                            <i class="fa-regular fa-pen-to-square"></i> Level Up Quiz
                        </a>
                    </li>
                    <li class="hover nav-item side-link ">
                        <a href="smartscoreboard.php" class="nav-link link-body-emphasis">
                            <i class="fa-solid fa-square-poll-vertical"></i> Smart Scoreboard
                        </a>
                    </li>

                     <li class="hover nav-item side-link">
                        <a href="leave.php" class="nav-link link-body-emphasis">
                            <i class="fa-regular fa-file-lines"></i> Leave Application
                        </a>
                    </li>
                </ul>
                <hr />
                <div class="dropdown">
                    <a href="#" class="d-flex  link-body-emphasis text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">

                        <strong><i class="fs-5 fa-regular fa-circle-user"></i> student/user</strong>
                    </a>
                    <ul class="dropdown-menu text-small shadow">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
            <div class="container py-5">
                <h2 class="mb-4 fw-semibold text-center text-primary">📘 Subject List - 3rd Semester</h2>

                <div class="row g-4">
                    <!-- Subjects 1-13 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card p-3">
                            <h5 class="fw-semibold mb-5 pt-4q">Data Structures and Algorithms</h5>
                            <div class="text-muted small">Code: <strong>CIUL301</strong></div>
                            <div class="subject-type lecture mt-2">Lecture</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card p-3">
                            <h5 class="fw-semibold mb-5">Electronic System for IoT</h5>
                            <div class="text-muted small">Code: <strong>CIUL302</strong></div>
                            <div class="subject-type lecture mt-2">Lecture</div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card p-3">
                            <h5 class="fw-semibold mb-5">Software Engg & Project Management</h5>
                            <div class="text-muted small">Code: <strong>CIUL303</strong></div>
                            <div class="subject-type lecture mt-2">Lecture</div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card p-3">
                            <h5 class="fw-semibold mb-5">Digital Electronics</h5>
                            <div class="text-muted small">Code: <strong>CIUL304</strong></div>
                            <div class="subject-type lecture mt-2">Lecture</div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card p-3">
                            <h5 class="fw-semibold mb-5">Data Structures and Algorithms Lab</h5>
                            <div class="text-muted small">Code: <strong>CIUP320</strong></div>
                            <div class="subject-type lab mt-2">Lab</div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card p-3">
                            <h5 class="fw-semibold mb-5">Programming in Java Lab</h5>
                            <div class="text-muted small">Code: <strong>CIUP321</strong></div>
                            <div class="subject-type lab mt-2">Lab</div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card p-3">
                            <h5 class="fw-semibold mb-5">Electronic System for IoT Lab</h5>
                            <div class="text-muted small">Code: <strong>CIUP322</strong></div>
                            <div class="subject-type lab mt-2">Lab</div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card p-3">
                            <h5 class="fw-semibold mb-5">Digital Electronics Lab</h5>
                            <div class="text-muted small">Code: <strong>CIUP323</strong></div>
                            <div class="subject-type lab mt-2">Lab</div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card p-3">
                            <h5 class="fw-semibold mb-5">Industrial Training</h5>
                            <div class="text-muted small">Code: <strong>CIUT330</strong></div>
                            <div class="subject-type lab mt-2">Lab</div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card p-3">
                            <h5 class="fw-semibold mb-5">Data Structures and Algorithms (Tut.)</h5>
                            <div class="text-muted small">Code: <strong>CSUL301(Tut.)</strong></div>
                            <div class="subject-type tutorial mt-2">Tutorial</div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card p-3">
                            <h5 class="fw-semibold mb-5">Managerial Economics and Financial Accounting</h5>
                            <div class="text-muted small">Code: <strong>HSUL301</strong></div>
                            <div class="subject-type lecture mt-2">Lecture</div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card p-3">
                            <h5 class="fw-semibold mb-5">Statistics and Probability Theory</h5>
                            <div class="text-muted small">Code: <strong>MAUL301</strong></div>
                            <div class="subject-type lecture mt-2">Lecture</div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card p-3">
                            <h5 class="fw-semibold mb-5">Skill Development</h5>
                            <div class="text-muted small">Code: <strong>NU99.5</strong></div>
                            <div class="subject-type lab mt-2">Lab</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- center content -->

        </div>
    </div>
    <?php include 'includes/footer.php'; ?>