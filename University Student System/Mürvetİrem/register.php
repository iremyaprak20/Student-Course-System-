
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<nav class="nav">
    <img src="image/eul.png">
    <button class="logout-btn"><i class='bx bx-log-out'></i></button>
</nav>

<section id="student">
    <div>
        <img id="student-img" src="image/student.png">
    </div>



    <div class="logged-user" id="logged-user">
        <?php
        // Check if the studentInfo data is present in the POST request
        if (isset($_POST['studentInfo'])) {
            $studentInfo = $_POST['studentInfo'];

            // Process the posted data as needed

            echo $studentInfo;
        } else {
            // Return an error message if the data is not found
            echo "Error: No studentInfo data found in the request";
        }
        ?>
    </div>

</section>

<section id="section2">
    <h2>Available Courses</h2>
    <select id="selectBox">
        <option value="COMP342 COMPUTER NETWORKS">COMP342 COMPUTER NETWORKS</option>
        <option value="COMP364 PRINCIPLES OF PROGRAMMING LANGUAGES">COMP364 PRINCIPLES OF PROGRAMMING LANGUAGES</option>
        <option value="SENG308 SOFTWARE QUALITY ASSURANCE AND TESTING">SENG308 SOFTWARE QUALITY ASSURANCE AND TESTING</option>
        <option value="SENG312 HUMAN COMPUTER INTERACTION">SENG312 HUMAN COMPUTER INTERACTION</option>
        <option value="COMP 471 JAVA PROGRAMMING">COMP 471 JAVA PROGRAMMING</option>
        <option value="BUSN411 STRATEGIC PLANNING AND MANAGEMENT">BUSN411 STRATEGIC PLANNING AND MANAGEMENT</option>
        <option value="COMP465 ADVANCED COMPUTER GRAPHICS">COMP465 ADVANCED COMPUTER GRAPHICS</option>
        <option value="COMP 415 ARTIFICIAL INTELLIGENCE">COMP 415 ARTIFICIAL INTELLIGENCE</option>
        <option value="ECON413 ENGINEERING ECONOMICS">ECON413 ENGINEERING ECONOMICS</option>
        <option value="SENG407 SOFTWARE PROJECT MANAGEMENT">SENG407 SOFTWARE PROJECT MANAGEMENT</option>
    </select>
    <button id="addBtn">Add</button>
    <ol id="selectList"></ol>
</section>


<section id="comment">
    <h2>Comment</h2>
    <form id="commentForm">
        <textarea name="comment" placeholder="Write your comment here"></textarea>
        <button type="submit">Submit</button>
    </form>
</section>




<script src="script.js"></script>
</body>
</html>