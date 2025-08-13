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
            <!-- resume -->
            <div class="container py-5">
                <h2 class="text-center mb-4 page-title">Auto Resume Generator – Institutional</h2>

                <div class="row g-4">
                    <!-- Form Section -->
                    <div class="col-lg-6">
                        <div class="form-card">
                            <form id="resume-form">
                                <div class="mb-3">
                                    <label for="name">Full Name</label>
                                    <input type="text" id="name" class="form-control" placeholder="e.g.Name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" class="form-control"
                                        placeholder="e.g. name@example.com" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" id="phone" class="form-control" placeholder="e.g. 9876543210"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="education">Education</label>
                                    <input type="text" id="education" class="form-control"
                                        placeholder="e.g. BTech CSE - SKIT Jaipur (2022–2026)" required>
                                </div>
                                <div class="mb-3">
                                    <label for="cgpa">CGPA</label>
                                    <input type="text" id="cgpa" class="form-control" placeholder="e.g. 8.9" required>
                                </div>
                                <div class="mb-3">
                                    <label for="skills">Skills (comma-separated)</label>
                                    <input type="text" id="skills" class="form-control"
                                        placeholder="e.g. HTML, CSS, Java, Python" required>
                                </div>
                                <div class="mb-3">
                                    <label for="projects">Projects</label>
                                    <textarea id="projects" class="form-control" rows="3"
                                        placeholder="Write about your projects..." required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="hackathon">Hackathon Participation</label>
                                    <select id="hackathon" class="form-select" required>
                                        <option value="">-- Select --</option>
                                        <option value="Yes">Yes ✅</option>
                                        <option value="No">No ❌</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="hobbies">Hobbies</label>
                                    <input type="text" id="hobbies" class="form-control"
                                        placeholder="e.g., Drawing, Football, Blogging" required>
                                </div>
                                <div class="d-flex gap-2">
                                    <button type="button" class="btn btn-primary" onclick="generateResume()">Generate
                                        Preview</button>
                                    <button type="button" class="btn btn-success" onclick="downloadPDF()">Download
                                        PDF</button>
                                    <button type="reset" class="btn btn-warning">Reset
                                        PDF</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Preview Section -->
                    <div class="col-lg-6">
                        <div class="preview-card">
                            <div id="resume-preview" class="resume-preview preview-box">
                                <h2 id="preview-name">Your Name</h2>
                                <p id="preview-contact" class="text-muted">Email | Phone</p>

                                <h5 class="section-title">🎓 Education</h5>
                                <p id="preview-education">Your education details</p>
                                <p><strong>CGPA:</strong> <span id="preview-cgpa">--</span></p>

                                <h5 class="section-title">➤ Skills</h5>
                                <ul id="preview-skills"></ul>

                                <h5 class="section-title">➤ Projects</h5>
                                <p id="preview-projects">Your project details</p>

                                <h5 class="section-title">➤ Hackathon Participation</h5>
                                <p id="preview-hackathon">--</p>

                                <h5 class="section-title">➤ Hobbies</h5>
                                <p id="preview-hobbies">--</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                function generateResume() {
                    document.getElementById("preview-name").innerText = document.getElementById("name").value;
                    document.getElementById("preview-contact").innerText = `${document.getElementById("email").value} | ${document.getElementById("phone").value}`;
                    document.getElementById("preview-education").innerText = document.getElementById("education").value;
                    document.getElementById("preview-cgpa").innerText = document.getElementById("cgpa").value;

                    const skillsInput = document.getElementById("skills").value;
                    const skillList = skillsInput.split(',');
                    const ul = document.getElementById("preview-skills");
                    ul.innerHTML = "";
                    skillList.forEach(skill => {
                        const li = document.createElement("li");
                        li.textContent = skill.trim();
                        ul.appendChild(li);
                    });

                    document.getElementById("preview-projects").innerText = document.getElementById("projects").value;
                    document.getElementById("preview-hackathon").innerText = document.getElementById("hackathon").value;
                    document.getElementById("preview-hobbies").innerText = document.getElementById("hobbies").value;
                }


                function downloadPDF() {
                    // Make sure the preview is updated with form data
                    generateResume();

                    const element = document.getElementById("resume-preview");

                    const opt = {
                        margin: 0.5,
                        filename: 'SKIT_Resume.pdf',
                        image: { type: 'jpeg', quality: 1 },
                        html2canvas: {
                            scale: 2,      // Higher scale for better clarity
                            useCORS: true, // Load images/fonts properly
                            logging: false
                        },
                        jsPDF: { unit: 'in', format: 'a4', orientation: 'portrait' }
                    };

                    // Small delay to let DOM update before capture
                    setTimeout(() => {
                        html2pdf().set(opt).from(element).save();
                    }, 200);
                }


            </script>
        </div>
    </div>
<?php include 'includes/footer.php'; ?>