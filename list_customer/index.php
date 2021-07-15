<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Customer</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
<table>
    <caption><h1>Customer List</h1></caption>
    <thead>
    <tr>
        <th>Number</th>
        <th>Name</th>
        <th>Date of birth</th>
        <th>Address</th>
        <th>Image</th>
    </tr>
    </thead>
    <?php
    $customerList = [
        "1" => [
            "Name" => "Songoku",
            "Dateofbirth" => "1983-08-20",
            "Address" => "Ha Noi",
            "Image" => "Image/img1.jpg"
        ],
        "2" => [
            "Name" => "Songohan",
            "Dateofbirth" => "1983-06-20",
            "Address" => "Ha Noi",
            "Image" => "Image/img2.jpg"
        ],
        "3" => [
            "Name" => "Mushroom",
            "Dateofbirth" => "1996-04-20",
            "Address" => "Ha Noi",
            "Image" => "Image/img3.jpg"
        ],
        "4" => [
            "Name" => "Snoopy",
            "Dateofbirth" => "1983-08-10",
            "Address" => "Ha Noi",
            "Image" => "Image/img4.jpg"
        ],
        "5" => [
            "Name" => "Luffy",
            "Dateofbirth" => "1983-08-20",
            "Address" => "Ha Noi",
            "Image" => "Image/img5.jpg"
        ],
    ];
    ?>
    <tbody>
    <?php foreach ($customerList as $key => $value): ?>
        <tr>
            <td><?php echo $key ?></td>
            <td><?php echo $value['Name'] ?></td>
            <td><?php echo $value['Dateofbirth'] ?></td>
            <td><?php echo $value['Address'] ?></td>
            <td><img src="<?php echo $value['Image'] ?>" alt="" height="200px" </td>
        </tr>
    <?php endforeach; ?>
    </tbody>

</table>
</body>
</html>

