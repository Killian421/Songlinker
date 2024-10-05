<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lian's Songlist</title>

    <!-- Basic CSS styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .navbar {
            background-color: #333;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
            display: inline-block;
        }

        .navbar a:hover {
            background-color: #575757;
            color: white;
        }

        /* .container {
            margin: 20px auto;
            padding: 20px;
            max-width: 800px;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        } */

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #333;
            color: white;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        /* Button styling */
        button, input[type="submit"], .edit-button {
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            display: inline-block;
        }

        /* Default button styles */
        button, input[type="submit"] {
            background-color: #333;
        }

        button:hover, input[type="submit"]:hover {
            background-color: #575757;
        }

        /* Edit button specific style */
        .edit-button {
            background-color: #28a745; /* Green color for the edit button */
        }

        .edit-button:hover {
            background-color: #218838; /* Darker green on hover */
        }

        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            margin-bottom: 20px;
            border-left: 5px solid #28a745;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <!-- <div class="navbar">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('songs.index') }}">Songs List</a>
        <a href="{{ route('songs.create') }}">List a Song</a> <!-- Brought back as a separate link -->
    </div> -->

    <!-- Content container -->
    <!-- <div class="container"> -->
        @yield('content')
    </div>
</body>
</html>
