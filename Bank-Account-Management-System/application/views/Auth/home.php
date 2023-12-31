<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Account Management System</title>

    <!-- Add Bootstrap CSS -->
    <link rel="icon" href="<?=base_url()?>assets/logo-2.png" type="image/gif" height="10px" width="auto">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                    <a class="nav-link" href="<?php echo site_url();?>Auth/view_account">Bank Details</a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" href="<?php echo site_url();?>Auth/add_account">Add Bank Details</a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" href="<?php echo site_url();?>Auth/delete_account">Delete</a>
                </li>
                <li class="nav-item mr-4">
                    <a class="btn btn-danger" href="<?php echo site_url();?>">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <br><br><br>
    <div class="row align-items-center">
    <img src="<?php echo site_url();?>assets/bank.jpg" alt="logo" width="500" height="auto">
    <h1 style="font-size: 45px;">Bank Account Management System</h1>
    </div>

    <!-- Add Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
