<?php include 'includes/header.php'; ?>
     <div class="containerscores my-5 pt-5">
        <h2 class="text-center text-primary mb-4">📊 Quiz Scoreboard</h2>

        <table class="table table-bordered table-striped shadow">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Roll No</th>
                    <th>Branch</th>
                    <th>Score</th>
                    <th>Wrong Answers</th>
                </tr>
            </thead>
            <tbody id="scoreTableBody"></tbody>
        </table>

        <!-- 🔴 Reset Button -->
        <div class="text-end">
            <button class="btn btn-danger" onclick="resetScoreboard()">Reset Data 🔁</button>
            <button class="btn btn-primary" onclick="history.back()">
                ⬅ Back
            </button>

        </div>
    </div>

    <script>
        const tableBody = document.getElementById("scoreTableBody");
        const data = JSON.parse(localStorage.getItem("quizResults")) || [];

        function displayScores() {
            if (data.length === 0) {
                tableBody.innerHTML = `<tr><td colspan="6" class="text-center text-danger">No results found</td></tr>`;
            } else {
                data.forEach((item, index) => {
                    const row = `<tr>
          <td>${index + 1}</td>
          <td>${item.name}</td>
          <td>${item.roll}</td>
          <td>${item.branch}</td>
          <td>${item.score}</td>
          <td>${item.wrong && item.wrong.length > 0 ? item.wrong.join(', ') : '✅ All Correct'}</td>
        </tr>`;
                    tableBody.innerHTML += row;
                });
            }
        }

        function resetScoreboard() {
            if (confirm("Are you sure you want to delete all scores?")) {
                localStorage.removeItem("quizResults");
                location.reload();
            }
        }

        displayScores();
    </script>
    
<?php include 'includes/footer.php'; ?>
