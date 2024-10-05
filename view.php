<?php

include 'config.php';
$query1 = "select * from member";
$result = mysqli_query($connection, $query1);
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
                <span>Edit</span>
                <h2>Members</h2>
            </div>
        </div>
        <table class="table">
            <tr class="thead">
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Coach</th>
                <th scope="col">Amount</th>
                <th scope="col">Delete</th>
                <th scope="col">Edit</th>
            </tr>
            <?php

            while ($row = mysqli_fetch_assoc($result)) {

                $ID = $row['id'];
                $Name = $row['name'];
                $Phone = $row['phone'];
                $Coach = $row['coach'];
                $query2 = "SELECT * FROM `billing` WHERE name='$Name'";
                $result2 = mysqli_query($connection, $query2);
                while ($row2 = mysqli_fetch_assoc($result2)) {
                    $Amount = $row2['amount'];
            ?>
                    <tr>
                        <td><?php echo $ID ?></td>
                        <td><?php echo $Name ?></td>
                        <td><?php echo $Phone ?></td>
                        <td><?php echo $Coach ?></td>
                        <td><?php echo $Amount ?></td>
                        <td><a href="delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure?..')" h class="btn btn-danger">Delete</a></td>
                        <td><a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Update</a></td>
                    </tr>
            <?php
                }
            }
            ?>
    </div>
    <!-- form stop -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>