<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Account Management System</title>

    <!-- Add Bootstrap CSS -->
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
                    <a class="nav-link" href="<?php echo site_url();?>Auth/home">Home <span class="sr-only">(current)</span></a>
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


    <div>

    </div>
    <br><br>
    <div class="container">
    <div class="d-flex justify-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Bank Name</th>
                    <th scope="col">Branch Name</th>
                    <th scope="col">Account Number</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; foreach($bank_accounts as $row){?>
                <tr>
                    <td><?=$row['bank_name']?></td>
                    <td><?=$row['branch']?></td>
                    <td><?=$row['account_number']?></td>
                    <td><a href="<?=base_url()?>Auth/delete/<?=$row['id'] ?>" class="btn btn-danger">Delete</a></td>

                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>

    <!-- Add Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
