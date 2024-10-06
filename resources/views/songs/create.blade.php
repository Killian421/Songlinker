<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Song</title>
    <style>
        html, body {
            height: 100%; 
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('/images/back8.jpg'); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            overflow: hidden; 
        }

        body {
            display: flex;
            justify-content: center; 
            align-items: center; 
        }

        nav {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
            display: inline-block;
        }

        nav a:hover {
            background-color: #575757;
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

        .container {
            max-width: 500px;
            width: 100%;
            background: transparent;
            backdrop-filter: blur(30px);            
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        div {
            width: 100%;
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            text-align: left;
            color: #555;
        }

        input[type="text"],
        input[type="url"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #28a745;
            color: white;
            font-family: New Century Schoolbook, TeX Gyre Schola, serif;
            font-weight: bold;            
            padding: 10px 15px;
            border: 2px solid black;
            border-radius: 5px;
            cursor: pointer;
            width: 50%;
            font-size: 16px;
        }

        button:hover {
            background-color: #218838;
        }

        .titles{
            color: cyan;
            font-family: New Century Schoolbook, TeX Gyre Schola, serif;
            font-weight: bold;
        }
    </style>
</head> 
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('songs.index') }}">Go to Songs</a>
    </nav>

    <div class="container">
        <h1>Add a New Song</h1>
        <form action="{{ route('songs.store') }}" method="POST">
            @csrf
            <div>
                <label class="titles" for="title">Title:</label>
                <input type="text" name="title" id="title" placeholder="Enter Title of the Song" required>
            </div>
            <div>
                <label class="titles" for="singer">Singer:</label>
                <input type="text" name="singer" id="singer" placeholder="Enter Singer of the Song" required>
            </div>
            <div>
                <label class="titles" for="link">YouTube Link:</label>
                <input type="url" name="link" id="link" placeholder="Enter Link of the Song" required>
            </div>
            <button type="submit">Add Song</button>
        </form>
    </div>
</body>
</html>
