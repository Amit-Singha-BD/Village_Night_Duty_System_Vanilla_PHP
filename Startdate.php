<?php
    include "Admin_Components/Header.php";
    include "Admin_Components/Navbar.php";
    include "Admin_Components/Sitebar.php";
    require "Database.php";

    session_start();
    if(isset($_POST['submit'])){
        $date = $_POST['date'];
        $_SESSION['date_set'] = $date;
    }
?>

    <div class="container mt-4">
        <div class="container">
            <div class="card mx-auto mt-3" style="width: 50rem; background-color: #512e5f;">
                <div class="card-body p-5">
                    <h2 class="text-center text-light fw-bold">Pahara Start Date</h2>
                    <form action="Startdate.php" method="POST">
                        <div class="mt-5">
                            <label for="exampleInputText1" class="form-label text-light">Date</label>
                            <input type="date" name="date" class="form-control rounded-pill" id="exampleInputText1">
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