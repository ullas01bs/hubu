


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="http://localhost/Homepage/css/contactform.css">
</head>

<body>
    <div class="rectangle">
       
       
        <div class="text-shape-orange">
            <p class="font-size">Your dream <br>
                Job Awaits here.</p>
        </div>
        <div>
            <img class="contact-img" src="http://localhost/Homepage/drive-download-20231224T055429Z-001/Contact us/Human avatar.png">
        </div>

    </div>
    <div class="text-white">
        
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-5">
                    
                    <div class="card-body">

                        <form action="code.php" method="POST">
                            <div class="from-group mb-3">
                                <label for="">Name</label>
                                <input type="text" name="names" class="form-control" />
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control" />
                                <label for="">PhoneNumber</label>
                                <input type="text" name="pnum" class="form-control" />
                            </div>
                            <div class="from-group mb-3">
                                <label for="">Courses</label>
                                <select name="Courses" class="form-control">
                                    <option value="">--Select courses--</option>
                                    <option value="ppc adviser">PPC Adviser</option>
                                    <option value="ux design">UX Design</option>
                                </select>
                            </div>
                            <div class="from-group mb-3">
                                <button type="submit" name="save_select" class="btn btn-primary">Request to Call Back</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>



    </div>
</body>

</html>