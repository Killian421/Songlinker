<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('/images/back8.jpg'); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh; 
            display: flex;
            justify-content: center; 
            align-items: center;  
}

        nav {
            background: transparent;
            backdrop-filter: blur(30px);
            color: grey;
            padding: 15px;
            text-align: center;
        }

        nav a {
            background-color: grey;
            border: 4px solid black;
            font-size: 30px;
            font-family:OCR A Std, monospace		;
            color: black;
            text-decoration: none;
            padding: 14px 10px;
            display: inline-block;
        }

        nav a:hover {
            background-color: lightgreen;
        }

        h1 {
            text-align: center;
            margin-top: 20px;   
            color: cyan;        
            font-family: OCR A Std, monospace	;
            font-weight: bold;
            text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
            font-size: 40px;
        }

        p {
            text-align: center;
            margin: 25px;
            font-family: DejaVu Sans Mono, monospace	;
            font-size: 20px;
            color: white;
        }

        .container {
            background: transparent;
            backdrop-filter: blur(30px);
            width: 500px;
            height: 300px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Songlinker</h1>
        <p>You are welcome to list a song you want and put a link on it so you don't have to search for it when you want to play mwehehehe.</p>
        <nav>
            <!-- <a class= "header" href="{{ route('home') }}">Home</a> -->
            <a class= "header" href="{{ route('songs.create') }}">Get started</a> <!-- Updated link to match the context -->
        </nav>
    </div>
</body>
</html>
