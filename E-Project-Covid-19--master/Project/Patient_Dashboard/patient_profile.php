<?php include 'header.php'; ?>
<?php include '../includes/patient_authorized.php'; ?>
<?php include '../includes/connection.php'; ?>


<main class="page-content">
<div class="title" style="background-color: white; padding: 10px 15px;">
    <h3> Profile <i class="fa-solid fa-user"></i> </h3>
</div> <br>
<form action="profile_update.php" method="post" enctype="multipart/form-data" name="formid">
    <div class="container">
        <!-- code here -->
        <div class="card">
            <div class="card-image">
                <h2 class="card-heading" style="text-align: center !important">
                    Update Profile
                </h2>
            </div>
            <form class="card-form">
                <div class="input">
                    <input type="text" class="input-field" name="name" value="<?= $_SESSION['db_Name'] ?>" required />
                    <label class="input-label">Name:</label>
                </div>
                <div class="input">
                    <input type="email" class="input-field" id="datepicker" name="email" required />
                    <label class="input-label">Email:</label>
                </div>
                <div class="input">
                    <input type="text" class="input-field" name="address" required />
                    <label class="input-label">Password:</label>
                </div>
                <div class="action">
                    <button type="submit" class="action-button" name="up">Update</button>
                </div>
            </form>
            <div class="card-info">
                <p>By signing up you are agreeing to our <a href="#">Terms and Conditions</a></p>
            </div>
        </div>
    </div>
    </form>



</main>

