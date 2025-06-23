
<?php include 'header.php'; ?>
<main class="content">
    <h2>Assign Student to Module</h2>
    <form action="assign_student.php" method="post">
        <label>Select Module:</label>
        <!-- Populate dynamically from DB -->
        <select name="module_id"></select>

        <label>Select Student:</label>
        <!-- Populate dynamically from DB -->
        <select name="student_id"></select>

        <button type="submit">Assign</button>
    </form>
</main>
<?php include 'footer.php'; ?>
