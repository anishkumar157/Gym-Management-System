<?php
include 'config.php';

if (isset($_REQUEST["submit"])) {
    $id = $_REQUEST["id"];
    $name = $_REQUEST["name"];
    $period = $_REQUEST["period"];
    $experience = $_REQUEST["experience"];

    $ins = "INSERT INTO coach (id,name,period,experience) VALUES('$id','$name','$period','$experience')";

    $query1 = mysqli_query($connection, $ins);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style3.css">
    <title>Document</title>
</head>

<body>
    <!-- side bar start -->
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li>
                <a href="member.php">
                    <i class="fas fa-user"></i>
                    <span>Members</span>
                </a>
            </li>
            <li>
                <a href="view.php">
                    <i class="fa-solid fa-eye"></i>
                    <span>View</span>
                </a>
            </li>
            <li>
                <a href="billing.php">
                    <i class="fas fa-file-invoice"></i>
                    <span>billing</span>
                </a>
            </li>
            <li class="active">
                <a href="coach.php">
                    <i class="fa-solid fa-dumbbell"></i>
                    <span>Coach</span>
                </a>
            </li>
            <li class="logout">
                <a href="logout.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- side bar stop -->

    <!-- form start -->
    <div class="main">
        <div class="wrapper">
            <div class="header-title">
                <span>Add</span>
                <h2>Coach</h2>
            </div>
        </div>
        <form class="row g-4">
            <div class="form-group col-md-6">
                <label for="inputEmail4">ID</label>
                <input type="text" name="id" class="form-control" id="inputEmail4" placeholder="ID">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Name</label>
                <input type="text" name="name" class="form-control" id="inputPassword4" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="inputAddress">Date of birth</label>
                <input type="date" name="period" class="form-control" id="inputAddress" placeholder="Period">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Experience</label>
                <input type="text" name="experience" class="form-control" id="inputAddress2" placeholder="In Years">
            </div>

            <div class="col-12">
                <button type="submit" name="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
    <!-- form stop -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>