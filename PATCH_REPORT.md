# PATCH REPORT and Security Scan

This report lists PHP files found in your uploaded project and detected risky patterns. For each file, suggested fixes are provided.

## update_password.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## update_password_student.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## upload_assignment.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- File upload handling detected. Validate MIME, extension, size; store outside web root; rename files.

- mysqli_real_escape_string usage found; prefer prepared statements. If used, ensure proper encoding and connection.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## upload_save.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- File upload handling detected. Validate MIME, extension, size; store outside web root; rename files.

- mysqli_real_escape_string usage found; prefer prepared statements. If used, ensure proper encoding and connection.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## upload_save_student.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- File upload handling detected. Validate MIME, extension, size; store outside web root; rename files.

- mysqli_real_escape_string usage found; prefer prepared statements. If used, ensure proper encoding and connection.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## view_submit_assignment.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## about - Copy.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## add_announcement.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## add_announcement_save.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## add_assignment.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## add_assignment_save.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- File upload handling detected. Validate MIME, extension, size; store outside web root; rename files.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## add_class.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## add_class_action.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## add_class_event.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## add_downloadable.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## add_downloadable_save.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- File upload handling detected. Validate MIME, extension, size; store outside web root; rename files.

- mysqli_real_escape_string usage found; prefer prepared statements. If used, ensure proper encoding and connection.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## add_question.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## add_quiz.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## add_quiz_to_class.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## add_student.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## add_subject_overview.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## announcements.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## announcements_student.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## assign_save.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- File upload handling detected. Validate MIME, extension, size; store outside web root; rename files.

- mysqli_real_escape_string usage found; prefer prepared statements. If used, ensure proper encoding and connection.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## assignment.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## assignment_sidebar.php

Detected issues:

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## assignment_student.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## backpack.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## backpack_sidebar.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## backpack_sidebar_teacher.php

Detected issues:

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## calendar_of_events.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## campuses.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## change_password_sidebar.php

Detected issues:

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## change_password_sidebar_student.php

Detected issues:

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## change_password_student.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## change_password_teacher.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## class_calendar.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## class_calendar_script.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## class_calendar_student.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## class_quiz.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## copy_file.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## copy_file_student.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## copy_to_backpack_modal.php

Detected issues:

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## count.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## create_message.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## create_message_student.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## create_message_student_student.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## create_message_teacher.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## dasboard_teacher.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## dashboard_student.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## dbcon.php

Detected issues:

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## dbConnector.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## delete_assigment_modal.php

Detected issues:

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## delete_assignment.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## delete_backpack.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## delete_backpack_teacher.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## delete_class.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## delete_class_event.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## delete_class_modal.php

Detected issues:

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## delete_class_quiz.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## delete_download_modal.php

Detected issues:

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## delete_file.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## delete_quiz.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## delete_quiz_question.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## delete_shared.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## downloadable.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## downloadable_sidebar.php

Detected issues:

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## downloadable_sidebar_student.php

Detected issues:

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## downloadable_student.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## edit_post.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## edit_question.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## edit_quiz.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## edit_subject_overview.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## history.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## login.php

Detected issues:

- Password used directly in SQL WHERE (vulnerable). Use prepared statements and password_verify.

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## logout.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## logout_student.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## modal_share_delete.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## move_to_school_year.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## my_classmates.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## my_students.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## my_students_breadcrums.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## navbar_student.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## navbar_teacher.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## notification_teacher.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## print_student.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## profile_teacher.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## progress.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## quiz_question.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## quiz_sidebar_teacher.php

Detected issues:

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## read.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## read_message.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## read_teacher.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## remove_announcements.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## remove_announcements_modal.php

Detected issues:

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## remove_inbox_message.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## remove_inbox_message_modal.php

Detected issues:

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## remove_sent_message.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## remove_sent_message_modal.php

Detected issues:

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## remove_student.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## remove_student_modal.php

Detected issues:

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## reply.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## reply_inbox_message_modal.php

Detected issues:

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## reply_inbox_message_modal_student.php

Detected issues:

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## save_grade.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## search_class.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## search_other_class.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## send_message.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## send_message_student.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## send_message_student_to_student.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## send_message_teacher_to_student.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## sent_message.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## sent_message_student.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## share_sidebar_teacher.php

Detected issues:

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## signup_teacher_form.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## student_avatar.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- File upload handling detected. Validate MIME, extension, size; store outside web root; rename files.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## student_message.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## student_message_sidebar.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## student_message_student.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## student_notification.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## student_notification_sidebar.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## student_quiz_list.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## student_sidebar.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## student_signin_form.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## student_signup.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## subject_overview.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## subject_overview_student.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## submit_assignment.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## submit_assignment_sidebar.php

Detected issues:

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## take_test.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## teacher_add_announcement_sidebar.php

Detected issues:

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## teacher_add_assignment_sidebar.php

Detected issues:

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## teacher_add_downloadable_sidebar.php

Detected issues:

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## teacher_avatar.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- File upload handling detected. Validate MIME, extension, size; store outside web root; rename files.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## teacher_backack.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## teacher_class.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## teacher_count.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## teacher_message.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## teacher_message_sidebar.php

Detected issues:

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## teacher_message_teacher.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## teacher_notification_sidebar.php

Detected issues:

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## teacher_quiz.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## teacher_share.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## teacher_sidebar.php

Detected issues:

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## teacher_signup.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## timer.ajax.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/activate.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/activity_log.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/add_admin.php

Detected issues:

- Password used directly in SQL WHERE (vulnerable). Use prepared statements and password_verify.

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/add_class.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/add_class_event.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/add_content.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/add_school.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/add_school_year.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/add_students.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/add_subject.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/add_teacher.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/admin_calendar_script.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/admin_log.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/admin_user.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/assignment.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/class.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/content.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/dashboard.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/dbcon.php

Detected issues:

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/delete_admin.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/delete_class.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/delete_content.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/delete_event.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/delete_school.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/delete_student.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/delete_subject.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/delete_sy.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/delete_teacher.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/de_activate.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/downloadable.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/edit_admin.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/edit_admin_form.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/edit_class.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/edit_class_form.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/edit_content.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/edit_school.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/edit_school_form.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/edit_student.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/edit_students_form.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/edit_subject.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/edit_teacher.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/edit_teacher_form.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/login.php

Detected issues:

- Password used directly in SQL WHERE (vulnerable). Use prepared statements and password_verify.

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/logout.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/navbar.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/save_student.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/school.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/school_year.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/session.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/student_log.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/student_table.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/student_table_reg.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/student_table_unreg.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/subjects.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/teachers.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/teacher_log.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/user_log.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/vendors/ckeditor/samples/assets/posteddata.php

Detected issues:

- Unescaped echo of variables. Escape on output using htmlspecialchars() or template engine.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.


## admin/vendors/datatables/unit_testing/performance/large.php

Detected issues:

- Use of mysqli_query with concatenated SQL strings. Replace with prepared statements (mysqli or PDO) to prevent SQL injection.

- die(mysqli_error()) usage; replace with error_log and user-friendly message; use mysqli_error($conn) if needed.

Suggested fixes:

- Convert to prepared statements.
- Use password_hash()/password_verify().
- Sanitize and validate all file uploads. Store uploads in non-executable directories.
- Implement CSRF tokens, session hardening, and output escaping.

