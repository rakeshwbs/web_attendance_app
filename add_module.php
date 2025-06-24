<?php include 'header.php'; ?>

<main class="content">
    <h2>Add Module</h2>
    <?php
    // Connect to the database
    $conn = new mysqli('localhost', 'root', '', 'lecturer_db');
    if ($conn->connect_error) {
        die('<p style="color:red;">Connection failed: ' . $conn->connect_error . '</p>');
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $module_name = $conn->real_escape_string($_POST['module_name']);
        $module_code = $conn->real_escape_string($_POST['module_code']);
        $module_type = $_POST['module_type'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $lecture_day = $_POST['lecture_day'];
        $lecture_time = $conn->real_escape_string($_POST['lecture_time']);
        $lecture_mode = $_POST['lecture_mode'];

        $sql = "INSERT INTO modules (module_name, module_code, module_type, start_date, end_date, lecture_day, lecture_time, lecture_mode)
                VALUES ('$module_name', '$module_code', '$module_type', '$start_date', '$end_date', '$lecture_day', '$lecture_time', '$lecture_mode')";

        if ($conn->query($sql) === TRUE) {
            echo '<p style="color:green;">Module added successfully.</p>';
        } else {
            echo '<p style="color:red;">Error: ' . $conn->error . '</p>';
        }
    }
    ?>

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
