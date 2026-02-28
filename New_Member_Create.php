<?php
    include "Admin_Components/Header.php";
    include "Admin_Components/Navbar.php";
    include "Admin_Components/Sitebar.php";
    require "Database.php";

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $father_name = $_POST['father_name'];
        $phone = $_POST['phone'];
        $sql = "INSERT INTO village_member_name (name, father_name, phone) VALUES ('$name', '$father_name', '$phone')";

        if(mysqli_query($conn, $sql)){
            echo "New record created successfully!";
        }else{
            echo "Error: " . mysqli_error($conn);
        }
    }
?>

    <!-- Main Content -->
    <div class="container mt-4">
        <div class="container">
            <div class="card mx-auto mt-3" style="width: 50rem; background-color: #512e5f;">
                <div class="card-body p-5">
                    <h2 class="text-center text-light fw-bold">New Member Create</h2>
                    <form action="New_member_create.php" method="POST">
                        <div class="mt-5">
                            <label for="exampleInputText1" class="form-label text-light">Name</label>
                            <input type="text" name="name" class="form-control rounded-pill" id="exampleInputText1">
                        </div>
                        <div class="mt-3">
                            <label for="exampleInputText1" class="form-label text-light">Father's Name</label>
                            <input type="text" name="father_name" class="form-control rounded-pill" id="exampleInputText1">
                        </div>
                        <div class="mt-3">
                            <label for="exampleInputText1" class="form-label text-light">Phone Number</label>
                            <input type="text" name="phone" class="form-control rounded-pill" id="exampleInputText1">
                        </div>
                        <div class="mt-5 d-flex justify-content-center">
                            <button class="btn btn-light rounded-pill px-4 pb-2 fw-bold" type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include "Admin_Components/Footer.php";
?>