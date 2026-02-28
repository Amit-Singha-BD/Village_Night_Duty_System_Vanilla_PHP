<?php
    include "User_Components/Header.php";
    // include "User_Components/Navbar.php";
    require "Database.php";

    $list_id  = $_GET['id'];
	$sql = "SELECT * FROM village_member_name WHERE id = '$list_id'"; 
	$result = mysqli_query($conn, $sql); 
	$list_data = mysqli_fetch_assoc($result);
?>

<div class="container">
    <h2 class="mt-5 pt-5 text-center text-light fw-bold">Gourd Info</h2>
    <div class="card my-4 mx-auto" style="width: 40rem;">
        <div class="card-body">
        <h4 class="text-center"><?php echo $list_data['name'];?></h4>
            <h5 class="card-title text-center">Count Down</h5>
            <h6 class="card-subtitle mb-2 text-muted text-center">Day-Hours-Minute-Second</h6>
            <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">SR</th>
                        <th scope="col">Date</th>
                        <th scope="col">Attendance</th>
                        <th scope="col">Absent Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>01/01/2000</td>
                        <td>Yes</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>02/01/2000</td>
                        <td>Yes</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>03/01/2000</td>
                        <td>No</td>
                        <td>Asustho</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>04/01/2000</td>
                        <td>Yes</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>05/01/2000</td>
                        <td>Yes</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>06/01/2000</td>
                        <td>Yes</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>07/01/2000</td>
                        <td>Yes</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>08/01/2000</td>
                        <td>Yes</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>09/01/2000</td>
                        <td>Yes</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>

<?php
    include "User_Components/Footer.php";
?>