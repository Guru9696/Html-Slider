<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        header {
            text-align: center;
            padding: 10px;
        }
        header img {
            width: 150px;
            border-radius: 50%;
        }
        .content {
            text-align: center;
        }
        .projects {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .project {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fafafa;
        }
    </style>
</head>

<body>

<div class="container">
    <?php
    $name = "Your Name";
    $bio = "A short bio about yourself.";
    $profile_pic = "profile.jpg"; // path to your profile picture

    $projects = [
        ["title" => "Project 1", "description" => "Description of project 1"],
        ["title" => "Project 2", "description" => "Description of project 2"],
        ["title" => "Project 3", "description" => "Description of project 3"],
        // Add more projects as needed
    ];
    ?>

    <header>
        <img src="<?php echo $profile_pic; ?>" alt="Profile Picture">
        <h1><?php echo $name; ?></h1>
        <p><?php echo $bio; ?></p>
    </header>

    <div class="content">
        <h2>Projects</h2>
        <div class="projects">
            <?php foreach ($projects as $project): ?>
                <div class="project">
                    <h3><?php echo $project["title"]; ?></h3>
                    <p><?php echo $project["description"]; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

</body>

</html>
