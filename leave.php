<?php include 'includes/header.php'; ?>
<div class="containers my-5 pt-5 form-containers">
        <h2 class="text-center mb-4">📝 Leave Application Form</h2>
        <form id="leaveForm pt-5">
            <div class="mb-3">
                <label for="studentName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="studentName" required>
            </div>

            <div class="mb-3">
                <label for="rollNumber" class="form-label">Roll Number</label>
                <input type="text" class="form-control" id="rollNumber" required>
            </div>

            <div class="mb-3">
                <label for="branch" class="form-label">Branch</label>
                <select class="form-select" id="branch" required>
                    <option selected disabled value="">Choose...</option>
                    <option>CSE</option>
                    <option>ECE</option>
                    <option>ME</option>
                    <option>EE</option>
                    <option>CE</option>
                    <option>IT</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="fromDate" class="form-label">Leave From</label>
                <input type="date" class="form-control" id="fromDate" required>
            </div>

            <div class="mb-3">
                <label for="toDate" class="form-label">Leave To</label>
                <input type="date" class="form-control" id="toDate" required>
            </div>

            <div class="mb-3">
                <label for="reason" class="form-label">Reason for Leave</label>
                <textarea class="form-control" id="reason" rows="3" required></textarea>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit Application</button>
            </div>
        </form>

        <div id="successMessage" class="alert alert-success mt-3 d-none">
            ✅ Leave application submitted successfully!
        </div>
    </div>

    <script>
        document.getElementById('leaveForm').addEventListener('submit', function (e) {
            e.preventDefault();
            // Optionally save to localStorage or send to backend here

            // Show success message
            document.getElementById('successMessage').classList.remove('d-none');

            // Reset form
            this.reset();
        });
    </script>