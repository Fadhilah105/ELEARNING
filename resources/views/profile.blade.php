<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <?php
        $role = "Admin";
    ?>
    <h1>Profile</h1>
    @if($role == 'Admin')
        <h3>Selamat Datang <?= $nama ?>, anda login sebagai Admin. </h3>
    @endif 
</body>
</html>