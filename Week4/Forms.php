
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Title Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fafafa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .form-box {
            padding: 35px;
            border-radius: 15px;
            width: 380px;
            background-color: white;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 6px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            background-color: #fff;
            outline: none;
        }

        .buttons {
            margin-top: 25px;
            display: flex;
            justify-content: space-between;
        }

        button {
            padding: 10px 22px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        .reset-btn {
            background-color: #f1f2f6;
            color: #57606f;
        }

        .register-btn {
            background-color: blue;
            color: white;
        }
    </style>
</head>

<body>
    <div class="form-box">
        <form method="POST">

            <label>Enter Full Name</label>
            <input type="text" name="name"
                   placeholder="Enter name..." required>

            <label>Enter Password</label>
            <input type="password" name="password"
                   placeholder="Enter password..." required>

            <label>Comment</label>
            <textarea name="comment" cols="30" rows="6"></textarea>

            <p>
                <input type="radio" name="sex" value="male">
                Male

                <input type="radio" name="sex" value="female">
                Female
            </p>

            <div class="buttons">
                <button type="reset" class="reset-btn">
                    Reset Form
                </button>

                <button type="submit" class="register-btn">
                    Register
                </button>
            </div>
        </form>

        <?php
        if (isset($_POST['name'])) {
            echo "Firstname is: " . htmlspecialchars($_POST['name']) . "<br>";
            echo "Password is: " . htmlspecialchars($_POST['password']);
        }
        ?>


    </div>
    <fom method _exists _POST 
</body>
</html>