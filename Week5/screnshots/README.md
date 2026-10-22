## 10. Checking and Displaying Uploaded File Details

- **Checking Form Submission and File Presence:** 
  - Uses `isset($_POST['submit'])` to check if the submit button was clicked.
  - Uses `isset($_FILES['scertificate'])` to verify that the file input named `scertificate` has been sent.

- **Checking Upload Success:** 
  - Uses `$_FILES['scertificate']['error'] === UPLOAD_ERR_OK` to ensure the file uploaded to the server completely without any errors.

- **Displaying File Properties:** 
  - `$_FILES['scertificate']['name']` retrieves and displays the original name of the uploaded file.
  - `$_FILES['scertificate']['size']` shows the file size in bytes.
  - `$_FILES['scertificate']['tmp_name']` displays the temporary path where the server is holding the file before moving it.
  - `$_FILES['scertificate']['type']` outputs the MIME type of the file (e.g., image/jpeg or application/pdf).

- **Handling Failure:** 
  - The `else` block catches any errors and displays a message prompting the user to try again if the upload fails.
 
  -  # screenshot2
 
  -  ## Checking File Upload
- Checks if a file has been selected using `!empty($_FILES['scertificate']['name'])`.
- Displays the uploaded file's name if present.
- Displays an error message asking the user to select a file if none is chosen.
