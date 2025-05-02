<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $server = "localhost";
    $username = "root";
    $password = ""; 
    $database = "hackathonForm2"; 

    $con = mysqli_connect($server, $username, $password, $database);

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $other = mysqli_real_escape_string($con, $_POST['other']);

    $sql = "INSERT INTO `trip` (`name`, `gender`, `password`, `email`, `phonenumber`, `other`, `dt`) 
            VALUES (?, ?, ?, ?, ?, ?, current_timestamp())";

    $stmt = $con->prepare($sql);
    $stmt->bind_param("ssssss", $name, $gender, $password, $email, $phone, $other);

    if($stmt->execute()) {
    
        echo "Successfully submitted";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;

    }

    $stmt->close();
    $con->close();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to hackathon form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="my-10 justify-center flex gap-4 px-10">
        <div class="bg-gray-200 shadow-xl rounded-md px-10 py-10 flex flex-col gap-3 w-[600px]">
            <h1 class="text-3xl font-medium">Welcome to hackathon form</h1>
            
            <p>Enter your details about you and your team</p>
            
            <form method="POST" class="flex flex-col gap-3">
                <div class="flex gap-2">
                    <div class="w-1/2">
                        <label for="name" class="block">Name:</label>
                        <input type="text" name="name" id="name" class="w-full p-2 border rounded" required>
                    </div>
                    <div class="w-1/2">
                        <label for="gender" class="block">Gender:</label>
                        <select name="gender" id="gender" class="w-full p-2 border rounded" required>
                            <option value="">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
                
                <div class="flex gap-2">
                    <div class="w-1/2">
                        <label for="password" class="block">Password:</label>
                        <input type="password" name="password" id="password" class="w-full p-2 border rounded" required>
                    </div>
                    <div class="w-1/2">
                        <label for="email" class="block">Email:</label>
                        <input type="email" name="email" id="email" class="w-full p-2 border rounded" required>
                    </div>
                </div>
                
                <div>
                    <label for="phone" class="block">Phone Number:</label>
                    <input type="tel" name="phone" id="phone" class="w-full p-2 border rounded" required>
                </div>
                
                <div>
                    <label for="other" class="block">Additional Information:</label>
                    <textarea placeholder="Enter any information here" name="other" id="other" cols="30" rows="5" class="w-full p-2 border rounded"></textarea>
                </div>
                
                <div class="flex gap-2">
                    <button type="submit" class="px-4 py-2 bg-black text-white font-medium">Submit</button>
                    <button type="reset" class="px-4 py-2 bg-gray-600 text-white font-medium">Reset</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>