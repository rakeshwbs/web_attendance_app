
# 📘 Lecturer Attendance Management System

**Module:** Web Technology  
**Weighting:** 20%  
**Duration:** 4 Weeks  
**Technology Stack:** HTML, CSS (template-based), JavaScript (basic), PHP (no framework), MySQL  

---

## 🎯 Objective

Develop a standalone web application for a **single lecturer** to:
- Create and manage modules
- Add and assign students to modules
- Take attendance for lectures
- Generate attendance reports

This is a local, non-authenticated system (no login required).

---

## ✅ Functional Requirements

### 1. Module Management
- Fields: `module_name`, `module_code`, `module_type (NCC/LUC)`, `start_date`, `end_date`, `lecture_day`, `lecture_time`, `lecture_mode (Online/Face to Face)`

### 2. Student Management
- Fields: `firstname`, `surname`, `email`, `mobile_no`

### 3. Assign Students to Modules
- Many-to-many relationship
- Prevent duplicate assignments

### 4. Take Attendance
- Select a module and date
- Mark each student as **Present** or **Absent**
- Prevent duplicate attendance per session

### 5. Generate Reports
- Show attendance summary per module
- Calculate percentage of attendance per student

---

## 🧠 Learning Outcomes
- Relational DB design and joins
- Server-side programming in PHP
- Form handling and validation
- Business logic implementation

---

## 🗂️ Recommended Folder Structure

```
attendance_app/
├── index.php
├── add_module.php
├── add_student.php
├── assign_student.php
├── take_attendance.php
├── view_report.php
├── assets/         # CSS template files
├── db.sql          # SQL dump of MySQL database
└── README.md       # This assignment brief
```

---

## 📑 Submission Requirements

- Functional PHP application with full source code
- SQL dump file (`db.sql`)
- Short documentation (1-2 pages) including:
  - ERD
  - Description of business rules
  - Known bugs or limitations

---

## 📝 Marking Scheme (Total: 20 Marks)

| Criteria                              | Marks |
|---------------------------------------|-------|
| Correct MySQL schema                  | 2     |
| Module management implementation      | 2     |
| Student management implementation     | 2     |
| Assignment of students to modules     | 3     |
| Attendance tracking & validation      | 4     |
| Attendance report and analytics       | 3     |
| Integration of CSS template           | 1     |
| Documentation (ERD + rules)           | 2     |
| Code structure & presentation         | 1     |
| **Total**                             | **20** |

*Bonus*: +2 marks for additional features like CSV export or AJAX

---

## ℹ️ Notes

- Use procedural PHP or basic PHP classes — no frameworks allowed.
- Avoid unnecessary features. Focus on the core logic and correctness.

---

Happy coding!
