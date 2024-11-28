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
            background-image: url('/images/CD.jpg'); 
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
            font-family: OCR A Std, monospace;
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
            font-family: OCR A Std, monospace;
            font-weight: bold;
            text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
            font-size: 40px;
        }

        p {
            text-align: center;
            margin: 25px;
            font-family: DejaVu Sans Mono, monospace;
            font-size: 20px;
            color: white;
        }

        .container {
            background: transparent;
            backdrop-filter: blur(10px);
            width: 500px;
            height: 300px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            position: relative;
        }

        .image-wrapper img {
            width: 100px; /* Adjusted width for perfect size */
            height: 150px; /* Adjusted height for perfect size */
            border-radius: 10px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            position: absolute;
        }

        .image-wrapper img:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Positioning images */
        .top-left { top: -150px; left: -150px; }
        .top { top: -150px; left: 50%; transform: translateX(-50%); }
        .top-right { top: -150px; right: -150px; }
        .left { top: 50%; left: -150px; transform: translateY(-50%); }
        .right { top: 50%; right: -150px; transform: translateY(-50%); }
        .bottom-left { bottom: -150px; left: -150px; }
        .bottom { bottom: -150px; left: 50%; transform: translateX(-50%); }
        .bottom-right { bottom: -150px; right: -150px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="image-wrapper">
            @php
                $positions = ['top-left', 'top', 'top-right', 'left', 'right', 'bottom-left', 'bottom', 'bottom-right'];
                $images = [
                    '/images/poster1.jpeg',
                    '/images/poster2.jpg',
                    '/images/poster3.jpg',
                    '/images/poster4.jpg',
                    '/images/poster5.jpg',
                    '/images/poster6.jpg',
                    '/images/poster7.jpg',
                    '/images/poster8.jpg',
                ];
            @endphp

            @foreach ($images as $index => $src)    
                <img class="{{ $positions[$index] }}" src="{{ asset($src) }}" alt="Hoverable Image">
            @endforeach
        </div>
        <h1>Welcome to Music List</h1>
        <p>You are welcome to list a song you want and put a link on it so you don't have to search for it when you want to play mwehehehe.</p>
        <nav>
            <a class="header" href="{{ route('songs.create') }}">Get started</a>
        </nav>
    </div>
</body>
</html>
