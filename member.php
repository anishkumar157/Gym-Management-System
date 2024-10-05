<?php
include 'config.php';

if (isset($_REQUEST["submit"])) {
    $id = $_REQUEST["id"];
    $name = $_REQUEST["name"];
    $date = $_REQUEST["date"];
    $dob = $_REQUEST["dob"];
    $phone = $_REQUEST["phone"];
    $coach = $_REQUEST["coach"];

    $ins = "INSERT INTO member (id,name,date,dob,phone,coach) VALUES('$id','$name','$date','$dob','$phone','$coach')";

    $query1 = mysqli_query($connection, $ins);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/style3.css">
    <title>Member</title>
</head>

<body>
    <!-- side bar start -->
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li class="active">
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
            <li>
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
                <h2>Member</h2>
            </div>
        </div>
        <form class="row g-4">
            <div class="form-group col-md-6">
                <label for="inputEmail4">ID</label>
                <input type="text" name="id" class="form-control" placeholder="ID">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="inputAddress">Date of Apply</label>
                <input type="date" name=" date" class="form-control" placeholder="Date">
            </div>
            <div class="form-group">
                <label for="inputAddress">Date of birth</label>
                <input type="date" name="dob" class="form-control" placeholder="DOB">
            </div>
            <div class="form-group">
                <label for="inputAddress2">phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Phone">
            </div>
            <div class="form-group">
                <label for="inputAddress2">coach</label>
                <!-- <input type="text" name="coach" class="form-control" id="inputAddress2" placeholder="Coach"> -->
                <?php
                $sql = "SELECT * FROM `coach`";
                $result = $connection->query($sql);
                // $row = $result->fetch_assoc();
                ?>
                <select id="cars" name="coach" class="form-control" id="inputAddress2">
                    <option value="">Choose Coach</option>

                    <?php while ($row = $result->fetch_assoc()) {
                    ?>
                        <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-12">
                <button type="submit" name="submit" class="btn">Save</button>
            </div>
        </form>
    </div>


    <!-- form stop -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>