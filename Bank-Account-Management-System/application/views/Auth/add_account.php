<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Bank Account Management System</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="<?php echo site_url();?>assets/logo-2.png" alt="logo" width="180" height="auto"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active mr-4">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" href="#">Bank Details</a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" href="<?php echo site_url();?>Auth/add_account">Add Bank Details</a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" href="#">Delete</a>
                </li>
                <li class="nav-item mr-4">
                    <a class="btn btn-danger" href="<?php echo site_url();?>">Logout</a>
                </li>
            </ul>
        </div>
    </nav>


    <div>

    </div>

    <!-- Add Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <br>
    <br>
    <br>
    <div class="container">
    <div class="card mx-auto" style="width: 18rem;">
        <div class="card-body text-center"> <!-- Center the content within the card -->
            <h5 class="card-title">Add Bank Details</h5>

            <form class="text-left" method="post" action="<?= site_url('Auth/add_account') ?>">
                <div class="mb-3">
                    <label for="bankName" class="form-label">Bank Name</label>
                    <input type="text" name="bankName" class="form-control" id="bankName">
                </div>
                <div class="mb-3">
                    <label for="branchName" class="form-label">Branch Name</label>
                    <input type="text" name="branchName" class="form-control" id="branchName">
                </div>
                <div class="mb-3">
                    <label for="acNumber" class="form-label">Account number</label>
                    <input type="text" name="acNumber" class="form-control" id="acNumber">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
   </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>