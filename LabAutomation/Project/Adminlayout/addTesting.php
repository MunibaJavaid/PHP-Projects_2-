<?php include 'header.php'; ?>
<?php include '../Config/connection.php'; ?>

       <main class="dash-content">

    <div class="container"> <br>
        <h3 class = "mt-5">Add Testing</h3> <br>

        <form action="crud.php" method="post">

            <div class="row">


                <div class="col-sm-12 col-lg-6">

                    <div class="form-group wrap-input1">
                        <label for="name">Add Testing:</label>
                        <input type="text" class="form-control input1" id="name" placeholder="Enter Your Testing" name="testing">
                    </div>

                    <button type="submit" class="btn btn-dark" name="ins" >Add Testing</button>

                </div>
                

            </div>


        </form>
    </div>
        </main>

        
<?php include 'footer.php'; ?>










