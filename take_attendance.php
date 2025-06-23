
<?php include 'header.php'; ?>
<main class="content">
    <h2>Take Attendance</h2>
    <form action="take_attendance.php" method="post">
        <label>Select Module:</label>
        <!-- Populate dynamically from DB -->
        <select name="module_id"></select>

        <label>Date:</label>
        <input type="date" name="session_date" required>

        <!-- Display student list dynamically -->
        <div class="attendance-list">
            <!-- Example:
            <div>
                <span>Student Name</span>
                <select name="attendance[student_id]">
                    <option value="Present">Present</option>
                    <option value="Absent">Absent</option>
                </select>
            </div>
            -->
        </div>

        <button type="submit">Submit Attendance</button>
    </form>
</main>
<?php include 'footer.php'; ?>
