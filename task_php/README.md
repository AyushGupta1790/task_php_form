# Contact Form with Validation and Database Storage

This project aims to create a contact form using HTML and PHP that validates user input and saves the form data to a MySQL database table. The form will ensure that the submitted data is valid and securely store it in a database for future reference.

## Prerequisites

Before running this project, ensure you have the following:

- A web server with PHP support (e.g., Apache or Nginx)
- PHP installed on the server
- MySQL database server

## Installation

To set up the contact form and database, follow these steps:

1. Clone or download the project files to your web server's document root.
2. Create a MySQL database for storing the contact form data.
3. Import the provided `task_php.sql` file into your newly created database. This will create the necessary table structure.
4. Update the `config.php` file with your database connection details (host, username, password, and database name).

## Usage

To use the contact form, follow these instructions:

1. Navigate to the project directory on your web server.
2. Open the `index.php` file in a text editor and customize the form fields according to your requirements.
3. Customize the form validation rules in the `validateForm()` function to suit your needs.
4. Customize the success and error messages in the `processForm()` function.
5. Save the changes to `index.php`.
6. Access the contact form through your web browser by visiting the URL where the project is hosted.
7. Fill out the form and submit it. You should see a success message upon successful submission.

## Validation

The contact form performs basic validation to ensure that the user-provided data is in the correct format. The following validations are implemented:

- **Required Fields:** All fields marked as required must be filled out before submitting the form.
- **Email Format:** The email field should contain a valid email address.
- **Phone Number Format:** The phone number field should contain a valid phone number.
- **Message Length:** The message field should not exceed a certain length.

You can modify the validation rules in the `validateForm()` function in `index.php` as per your specific requirements.

## Database Storage

When the form is submitted and passes validation, the provided data is securely saved to the MySQL database table. The `config.php` file contains the necessary configuration details for establishing a database connection.

The table structure for storing the form data consists of the following fields:

- `id` (auto-incremented unique identifier)
- `name` (varchar, 255 characters)
- `email` (varchar, 255 characters)
- `phone` (varchar, 20 characters)
- `message` (text)
- `timestamp` (datetime)
- `ip`(varchar , 20 characters)

You can modify the table structure and database connection details in the `database.sql` and `config.php` files, respectively, to suit your setup.

## License

This project is licensed under the [MIT License](LICENSE). Feel free to use, modify, and distribute the code as per the terms of the license.

## Acknowledgements

This project is inspired by the need for a reliable contact form solution with data validation and storage. It builds upon various HTML, PHP, and MySQL resources available online.

