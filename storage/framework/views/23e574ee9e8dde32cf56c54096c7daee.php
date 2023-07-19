<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Admin Dashboard | Home</title>
<link rel="stylesheet" href="<?php echo e(asset('bootstrap.min.css')); ?>">
</head>
<body style="background-color: #d7dadb">
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3" style="margin-top: 45px">
                <h4>Admin Dashboard</h4><hr>
                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row"><?php echo e(Auth::guard('admin')->user()->name); ?></td>
                                <td><?php echo e(Auth::guard('admin')->user()->email); ?></td>
                                <td><?php echo e(Auth::guard('admin')->user()->phone); ?></td>
                                <td>
                                    <a href="<?php echo e(route('admin.logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                    <form action="<?php echo e(route('admin.logout')); ?>" id="logout-form" method="post"><?php echo csrf_field(); ?></form>
                                </td>
                            </tr>
                        </tbody>
                </table>
        </div>
    </div>
</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\hms\resources\views/dashboard/admin/home.blade.php ENDPATH**/ ?>