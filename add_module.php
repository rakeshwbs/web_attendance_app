
<?php include 'header.php'; ?>
<main class="content">
    <h2>Add Module</h2>
    <form action="add_module.php" method="post">
        <label>Module Name:</label>
        <input type="text" name="module_name" required>

        <label>Module Code:</label>
        <input type="text" name="module_code" required>

        <label>Module Type:</label>
        <select name="module_type" required>
            <option value="NCC">NCC</option>
            <option value="LUC">LUC</option>
        </select>

        <label>Start Date:</label>
        <input type="date" name="start_date" required>

        <label>End Date:</label>
        <input type="date" name="end_date" required>

        <label>Lecture Day:</label>
        <select name="lecture_day" required>
            <option>Monday</option><option>Tuesday</option><option>Wednesday</option>
            <option>Thursday</option><option>Friday</option><option>Saturday</option><option>Sunday</option>
        </select>

        <label>Lecture Time:</label>
        <input type="text" name="lecture_time" placeholder="e.g. 15:00 - 17:00" required>

        <label>Lecture Mode:</label>
        <select name="lecture_mode" required>
            <option>Online</option>
            <option>Face to Face</option>
        </select>

        <button type="submit">Add Module</button>
    </form>
</main>
<?php include 'footer.php'; ?>
