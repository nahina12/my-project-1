<?php 
include 'inc/db.php';

if(isset($_GET['delete'])){
    $delete_id = intval($_GET['delete']);
    $del_sql = "DELETE FROM contact_messages WHERE id = $delete_id";
    mysqli_query($conn, $del_sql);
    header("Location: admin_messages.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Messages</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    background:#000;
    color:#fff;
    padding-bottom:50px;
}

/* ===== Header ===== */
header{
    position:sticky;
    top:0;
    background:#000;
    z-index:100;
    padding:15px 30px;
    box-shadow:0 1px 6px rgba(0,0,0,0.4);
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.logo{
    font-size:33px;
    font-weight:bold;
    color:#078b8e;
}

nav a{
    margin-left:20px;
    text-decoration:none;
    color:#fff;
    font-size:20px;
    position:relative;
    padding-bottom:5px;
    transition:0.3s;
}

nav a:hover{
    color:#078b8e;
}

nav a::after{
    content:'';
    position:absolute;
    left:0;
    bottom:0;
    width:0;
    height:2px;
    background:#078b8e;
    transition:0.3s;
}

nav a:hover::after{
    width:100%;
}

/* ===== Page Title ===== */
.page-title{
    text-align:center;
    font-size:32px;
    margin:30px auto 15px;
    color:#fff;
    width:fit-content;
    position:relative;
}

/* underline */
.page-title::after{
    content:'';
    display:block;
    width:200px;
    height:3px;
    background:#078b8e;
    margin:10px auto 0;
    border-radius:3px;
}

/* ===== Box ===== */
.table-box{
    max-width:1200px;
    margin:20px auto 0;
    padding:20px;
    background:#111;
    border-radius:10px;
    box-shadow:0 0 20px rgba(7,139,142,0.25);
}

/* ===== Table ===== */
table{
    width:100%;
    border-collapse:collapse;
}

th, td{
    border:1px solid #078b8e;
    padding:10px;
    text-align:left;
}

th{
    background:#111;
}

td{
    background:#222;
}

td:nth-child(6){
    max-width:300px;
    word-wrap:break-word;
}

/* Delete Button */
.delete-btn{
    color:#fff;
    background:#078b8e;
    padding:6px 12px;
    border-radius:5px;
    text-decoration:none;
    transition:0.3s;
}

.delete-btn:hover{
    background:#000;
    color:#078b8e;
    box-shadow:0 0 10px #078b8e;
}
</style>
</head>

<body>

<header>
    <h2 class="logo">Redoana Islam.</h2>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="services.php">Services</a>
        <a href="portfolio.php">Portfolio</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>

<h1 class="page-title">Admin - Contact Messages</h1>

<div class="table-box">
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Message</th>
            <th>Created At</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $sql = "SELECT * FROM contact_messages ORDER BY created_at DESC";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['name']}</td>";
        echo "<td>{$row['email']}</td>";
        echo "<td>{$row['address']}</td>";
        echo "<td>{$row['phone']}</td>";
        echo "<td>{$row['message']}</td>";
        echo "<td>{$row['created_at']}</td>";
        echo "<td>
                <a class='delete-btn'
                   href='admin_messages.php?delete={$row['id']}'
                   onclick='return confirm(\"Are you sure?\");'>
                   Delete
                </a>
              </td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</div>

</body>
</html>
