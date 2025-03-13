<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        label {
            display: inline-block;
            width: 100px;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"],
        select,
        textarea {
            display: inline-block;
            width: calc(100% - 110px);
            margin-bottom: 8px;
            box-sizing: border-box;
        }

        select {
            width: calc(100% - 114px);
        }

        textarea {
            width: calc(100% - 106px);
            vertical-align: top;
        }

        input[type="submit"] {
            margin-top: 10px;
        }

        form {
            max-width: 450px;
        }

        .options {
            display: flex;  
        }
    </style>
</head>
<body>
    <h2>Registration Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" novalidate>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="surname">Surname:</label>
        <input type="text" id="surname" name="surname" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>
    
        <label for="country">Country:</label>
            <select id="country" name="country" required placeholder="Select a country">
            <option value="" disabled selected>Select a country</option>
            <option value="turkey">Turkey</option>
            <option value="america">America</option>
            <option value="uk">United Kingdom</option>
            <option value="australia">Australia</option>
            <option value="germany">Germany</option>
            </select>
        </div>

        <label for="zipcode">ZIP Code:</label>
        <input type="text" id="zipcode" name="zipcode" required>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>

        <div class="options">
            <label for="sex">Sex:</label>
            <input type="radio" id="male" name="sex" value="male" required>
            <label for="male">Male</label>
            <input type="radio" id="female" name="sex" value="female" required>
            <label for="female">Female</label>
        </div>

        <div class="options">
            <label for="language">Language:</label>
            <input type="checkbox" id="turkish" name="language" value="turkish">
            <label for="turkish">Turkish</label>
            <input type="checkbox" id="english" name="language" value="english">
            <label for="english">English</label>
            <input type="checkbox" id="german" name="language" value="german">
            <label for="german">German</label>
        </div>


        <label for="about">About:</label>
        <textarea id="about" name="about" rows="5"></textarea>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = !empty($_POST["name"]) ? $_POST["name"] : "Name: Not Provided";
        $surname = !empty($_POST["surname"]) ? $_POST["surname"] : "Surname: Not Provided";
        $password = !empty($_POST["password"]) ? $_POST["password"] : "Password: Not Provided";
        $address = !empty($_POST["address"]) ? $_POST["address"] : "Address: Not Provided";
        $country = !empty($_POST["country"]) ? $_POST["country"] : "Country: Not Provided";
        $zipcode = !empty($_POST["zipcode"]) ? $_POST["zipcode"] : "Zip: Not Provided";
        $email = !empty($_POST["email"]) ? $_POST["email"] : "Email: Not Provided";
        $sex = !empty($_POST["sex"]) ? $_POST["sex"] : "Sex: Not Provided";
        $language = !empty($_POST["language"]) ? $_POST["language"] : "Language: Not Provided";
        $about = !empty($_POST["about"]) ? $_POST["about"] : "About: Not Provided";
    
        header("Location: Activity6-preview.php?name=$name&surname=$surname&password=$password&address=$address&country=$country&zipcode=$zipcode&email=$email&sex=$sex&language=$language&about=$about");
        exit;
    }
    ?>
</body>
</html>