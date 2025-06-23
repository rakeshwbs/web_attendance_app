
<?php include 'header.php'; ?>
<main class="content">
    <h2>Attendance Report</h2>
    <form method="get" action="view_report.php">
        <label>Select Module:</label>
        <!-- Populate dynamically from DB -->
        <select name="module_id"></select>
        <button type="submit">View</button>
    </form>

    <!-- Generate and display report here -->
    <div class="report">
        <!-- Table showing student names, total sessions, present count, percentage -->
    </div>
</main>
<?php include 'footer.php'; ?>
