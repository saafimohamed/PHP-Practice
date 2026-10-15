# Chapter 4: Advanced PHP Forms, Validation & Application Workflow

## 1. Introduction to Forms
A form is a collection of input fields used to collect information from users.

## 2. How Forms Work
- Create a form.
- Submit data to the server.
- Process and validate the submitted data using PHP.

## 3. Basic Form Requirements
- Opening and closing `<form>` tags.
- A submission method (`GET` or `POST`).
- One or more input controls.
- A destination URL (`action`).

## 4. Form Elements
- `<form>` – Creates a form.
- `<fieldset>` – Groups related fields.
- `<legend>` – Defines a title for a fieldset.
- `<label>` – Defines a label for an input.
- `<input>` – Creates input controls.
- `<select>` – Creates a dropdown list.
- `<option>` – Defines an option in a dropdown.
- `<textarea>` – Creates a multiline text field.

## 5. Retrieving Submitted Data
PHP uses superglobal variables to retrieve form data.

- `$_GET` – Retrieves GET data.
- `$_POST` – Retrieves POST data.
- `$_REQUEST` – Retrieves GET or POST data.
- `$_FILES` – Retrieves uploaded file information.

Example:

```php
echo $_POST['name'];
```

## 6. Textbox and Password
- `type="text"` – Accepts text input.
- `type="password"` – Hides entered characters.
- `type="submit"` – Submits the form.
- `type="reset"` – Resets form fields.

## 7. Textarea
A textarea allows users to enter multiple lines of text.

- `cols` – Defines the approximate width.
- `rows` – Defines the number of visible lines.

## 8. Radio Button
A radio button allows users to select only one option from a group.

Example:

```html
<input type="radio" name="sex" value="male"> Male
<input type="radio" name="sex" value="female"> Female
```

PHP Example:

```php
if (!empty($_POST['sex'])) {
    echo "Sex: " . $_POST['sex'];
}
```

**Key Points:**
- `name` groups related radio buttons.
- `value` specifies the value submitted to PHP.
- `$_POST['sex']` retrieves the selected option.
- `!empty()` checks whether the submitted value is not empty.

## Summary
HTML forms collect user information, while PHP retrieves and processes the submitted data using superglobal variables.
