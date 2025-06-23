
<?php include 'header.php'; ?>
<main class="content">
    <h2>Add Student</h2>
    <form action="add_student.php" method="post">
        <label>First Name:</label>
        <input type="text" name="firstname" required>

        <label>Surname:</label>
        <input type="text" name="surname" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Mobile Number:</label>
        <input type="text" name="mobile_no" required>

        <button type="submit">Add Student</button>
    </form>
</main>
<?php include 'footer.php'; ?>
