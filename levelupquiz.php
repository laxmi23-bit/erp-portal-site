<?php include 'includes/header.php'; ?>
<!-- all other is  here -->
    <div class=" container py-5">
        <h1 class="fw-bold my-4 mb-1 p-3 text-center">Welcome To ERP Portal</h1>
        <!-- felxing items '' -->
        <div class="outer0 d-flex bg-light text-dark ">


            <!-- sidebar  -->
            <div class="outer1 d-flex slidebar flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 300px;">
                <a href="dashboard.html" class="d-flex  text-decoration-none">

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
            <!-- QUIZZZZ -->
            <div class="container">
                <h2 class="text-center text-primary mb-4">🚀 Level-Up Quiz</h2>

                <!-- Step 1: Student Info Form -->
                <div id="studentForm">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Roll No</label>
                        <input type="text" class="form-control" id="roll" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Branch</label>
                        <select class="form-select" id="branch">
                            <option>CSE</option>
                            <option>ECE</option>
                            <option>EEE</option>
                            <option>ME</option>
                            <option>CE</option>
                        </select>
                    </div>
                    <button class="btn btn-primary w-100" onclick="startQuiz()">Start Quiz</button>
                </div>

                <!-- Step 2: Quiz Questions -->
                <div id="quizBox" class="quiz-box">
                    <form id="quizForm">
                        <div class="mb-3">
                            <label>1. What is the output of 5 == '5' in JS?</label><br>
                            <input type="radio" name="q1" value="false" /> False<br>
                            <input type="radio" name="q1" value="true" /> True
                        </div>
                        <div class="mb-3">
                            <label>2. const in C means?</label><br>
                            <input type="radio" name="q2" value="constant" /> Constant variable<br>
                            <input type="radio" name="q2" value="var" /> A new variable
                        </div>
                        <div class="mb-3">
                            <label>3. Bootstrap is used for?</label><br>
                            <input type="radio" name="q3" value="design" /> UI/Design<br>
                            <input type="radio" name="q3" value="backend" /> Backend Logic
                        </div>
                        <button type="button" class="btn btn-success w-100" onclick="submitQuiz()">Submit Quiz</button>
                    </form>
                </div>

                <!-- Step 3: Result -->
                <div id="resultBox" class="mt-4"></div>
            </div>

            <script>
                let student = {};

                function startQuiz() {
                    student.name = document.getElementById("name").value.trim();
                    student.roll = document.getElementById("roll").value.trim();
                    student.branch = document.getElementById("branch").value;

                    if (!student.name || !student.roll) {
                        alert("Please fill all student details");
                        return;
                    }

                    document.getElementById("studentForm").style.display = "none";
                    document.getElementById("quizBox").style.display = "block";
                }

                function submitQuiz() {
                    const answers = {
                        q1: "false",
                        q2: "constant",
                        q3: "design"
                    };

                    let score = 0;
                    let wrong = [];

                    Object.keys(answers).forEach(q => {
                        const selected = document.querySelector(`input[name=${q}]:checked`);
                        if (selected) {
                            if (selected.value === answers[q]) score++;
                            else wrong.push(q.toUpperCase());
                        } else {
                            wrong.push(q.toUpperCase());
                        }
                    });

                    student.score = score;
                    student.wrong = wrong;

                    // Store result in localStorage
                    const prev = JSON.parse(localStorage.getItem("quizResults")) || [];
                    prev.push(student);
                    localStorage.setItem("quizResults", JSON.stringify(prev));

                    // Show result

                    document.getElementById("quizBox").style.display = "none";
                    document.getElementById("resultBox").innerHTML = `
                    <div class="alert alert-info">
                        <h5>🎉 Result for ${student.name} (${student.roll} - ${student.branch})</h5>
                        <p>Score: <strong>${score}/3</strong></p>
                        <p>${wrong.length ? 'Wrong Answers: ' + wrong.join(", ") : '✅ All Correct!'}</p>
                        <a href="smartscoreboard.php" class="btn btn-dark mt-2">View Scoreboard</a>
                    </div>
                            `;
                }

            </script>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>