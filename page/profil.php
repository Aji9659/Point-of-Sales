<?php
include '../config/conn.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile - Alpha Store POS</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }
        
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        
        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
        }
        
        .nav-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        
        .nav-links a {
            text-decoration: none;
            color: #3498db;
            font-weight: 500;
            padding: 5px 10px;
            border-radius: 4px;
            transition: all 0.3s;
        }
        
        .nav-links a:hover {
            background-color: #f0f0f0;
        }
        
        .nav-links a.active {
            color: white;
            background-color: #3498db;
        }
        
        .profile-section {
            display: flex;
            gap: 30px;
        }
        
        .profile-sidebar {
            width: 250px;
            text-align: center;
        }
        
        .profile-pic {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #ecf0f1;
            margin-bottom: 15px;
        }
        
        .profile-name {
            font-size: 1.4rem;
            margin: 10px 0 5px;
            color: #2c3e50;
        }
        
        .profile-role {
            color: #7f8c8d;
            margin-bottom: 20px;
        }
        
        .profile-details {
            flex: 1;
        }
        
        .detail-group {
            margin-bottom: 20px;
        }
        
        .detail-group h3 {
            color: #3498db;
            border-bottom: 2px solid #3498db;
            padding-bottom: 5px;
            margin-bottom: 15px;
        }
        
        .detail-row {
            display: flex;
            margin-bottom: 10px;
        }
        
        .detail-label {
            width: 150px;
            font-weight: 600;
            color: #555;
        }
        
        .detail-value {
            flex: 1;
            padding: 8px;
            background: #f9f9f9;
            border-radius: 4px;
        }
        
        .edit-btn {
            background: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            margin-top: 20px;
            transition: background 0.3s;
        }
        
        .edit-btn:hover {
            background: #2980b9;
        }
    </style>
</head>

<body>
<div class="container">
    <h1>Alpha Store Point Of Sales</h1>
    
    <div class="nav-links">
        <a href="../page/dashboard.php">Dashboard</a>
        <a href="../page/profil.php" class="active">My Profile</a>
    </div>
    
    <div class="profile-section">
        <div class="profile-sidebar">
            <h2 class="profile-name">Muhammad Aji Firmansyah</h2>
            <p class="profile-role">Store Manager</p>
        </div>
        
        <div class="profile-details">
            <div class="detail-group">
                <h3>Personal Information</h3>
                <div class="detail-row">
                    <div class="detail-label">Full Name</div>
                    <div class="detail-value">Muhammad Aji Firmansyah</div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Date of Birth</div>
                    <div class="detail-value">January 15, 2000</div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Gender</div>
                    <div class="detail-value">Male</div>
                </div>
            </div>
            
            <div class="detail-group">
                <h3>Contact Information</h3>
                <div class="detail-row">
                    <div class="detail-label">Email</div>
                    <div class="detail-value">aji@alphastore.com</div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Phone Number</div>
                    <div class="detail-value">+62 812 3456 7890</div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Address</div>
                    <div class="detail-value">123 Store Street, Retail City</div>
                </div>
            </div>
            
            <div class="detail-group">
                <h3>Professional Information</h3>
                <div class="detail-row">
                    <div class="detail-label">Position</div>
                    <div class="detail-value">Store Manager</div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Join Date</div>
                    <div class="detail-value">January 15, 2022</div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">User Role</div>
                    <div class="detail-value">Administrator</div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>