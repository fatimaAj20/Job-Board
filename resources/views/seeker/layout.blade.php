<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Job Seeker Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        /* Reset styles */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

/* Basic styles */
body {
    font-family: Arial, sans-serif;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px;
}

nav ul {
    display: flex;
    justify-content: space-between;
    align-items: center;
    list-style-type: none;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    padding: 10px;
}

nav ul li a:hover {
    background-color: #555;
}

#content {
    margin: 20px;
}

    </style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Companies</a></li>
                <li><a href="#"><i class="fas fa-user"></i></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="content">
            <!-- Content goes here -->
        </section>
    </main>
</body>
</html>
