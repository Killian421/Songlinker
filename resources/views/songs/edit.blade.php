<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Song</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            overflow: hidden; /* Prevent scroll */
        }

        body {
            font-family: Arial, sans-serif;
            background-image: url('/images/CD.jpg'); /* Ensure correct path */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            justify-content: center; /* Horizontally center */
            align-items: center; /* Vertically center */
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
            margin: 0 10px;
            display: inline-block;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #575757;
            border-radius: 5px;
        }

        .container {
            max-width: 600px;
            width: 100%;
            background: transparent;
            backdrop-filter: blur(10px);            
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
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
            color: #555;
            text-align: left;
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
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
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
        <a href="{{ route('songs.index') }}">Back to Songs</a>
    </nav>

    <div class="container">
        <h1>Edit Song</h1>
        <form action="{{ route('songs.update', $song->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label class="titles" for="title">Title:</label>
                <input type="text" name="title" id="title" value="{{ old('title', $song->title) }}" placeholder="Enter Title of the Song" required>
            </div>
            <div>
                <label class="titles" for="singer">Singer:</label>
                <input type="text" name="singer" id="singer" value="{{ old('singer', $song->singer) }}" placeholder="Enter Singer of the Song" required>
            </div>
            <div>
                <label class="titles" for="link">YouTube Link:</label>
                <input type="url" name="link" id="link" value="{{ old('link', $song->link) }}" placeholder="Enter Link of the Song" required>
            </div>
            <div>
                <button type="submit">Submit Edited Song</button>
            </div>
        </form>
    </div>
</body>
</html>
