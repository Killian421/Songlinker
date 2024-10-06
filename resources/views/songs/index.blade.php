@extends('layouts.app')

@section('content')

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
        background-image: url('/images/back8.jpg'); /* Ensure correct path */
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        display: flex;
        flex-direction: column;
        align-items: center; 
    }

    nav {
        width: 100vw; /* Full viewport width */
        background-color: rgba(0, 0, 0, 0.5);
        color: white;       
        text-align: center;
        padding: 15px;
        position: fixed; /* Ensure it stays at the top */
        top: 0;
        left: 0;
        z-index: 1; /* Ensure it stays above other content */
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

    .container {
        background: transparent;
        padding: 20px;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100%; /* Set height */
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

    .success-message {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
        padding: 10px;
        margin-bottom: 20px;
        text-align: center;
        border-radius: 5px;
        width: 80%;
    }

    .table-container {
        width: 100%;
        max-width: 900px;
        max-height: 500px; /* Limit height for scrolling */
        overflow-y: auto; /* Enable vertical scroll if content exceeds height */
        border-radius: 10px;
        border: 1px solid #ddd;
        background-color: white;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #007bff; /* Solid blue header */
        color: white;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-bottom: 2px solid #0056b3;
    }

    td {
        background-color: #f9f9f9; /* Light gray background for rows */
    }

    tr:hover {
        background-color: #f1f1f1; /* Slight highlight on hover */
    }

    .edit-button {
        background-color: #007bff;
        color: white;
        padding: 6px 12px;
        text-decoration: none;
        border-radius: 5px;
        border: 2px solid black;
        transition: background-color 0.3s;
    }

    .edit-button:hover {
        background-color: #0056b3;
    }

    button[type="submit"] {
        background-color: #dc3545;
        color: white;
        padding: 6px 12px;
        border: 2px solid black;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button[type="submit"]:hover {
        background-color: #c82333;
        
    }

    input[type="checkbox"] {
        transform: scale(1.2); /* Make checkboxes larger */
        size: 100px;
    }

    .sub-container{
        background: transparent;
        backdrop-filter: blur(30px);  
        padding: 20px;
        border-radius: 10px;
    }
</style>

<!-- Navbar outside the container -->
<nav>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('songs.create') }}">List a Song</a>
</nav>

<!-- Main content container to center the table and heading -->
<div class="container">
    <div class ="sub-container">
    <h1>Songs List</h1>

    @if(session('success'))
    <center>
        <div class="success-message">{{ session('success') }}</div>
    </center>
    @endif

    <div class="table-container">
        <table>
            <tr>
                <th>Title</th>
                <th>Singer</th>
                <th>Link</th>
                <th>Played</th>
                <th>Actions</th>
            </tr>
            @foreach ($songs as $song)
            <tr>
                <td>{{ $song->title }}</td>
                <td>{{ $song->singer }}</td>
                <td>
                    <a href="{{ $song->link }}" target="_blank" rel="noopener noreferrer">Watch on YouTube</a>
                </td>
                <td>
                    <input type="checkbox" name="ids[]" value="{{ $song->id }}" {{ $song->played ? 'checked' : '' }}>
                </td>
                <td>
                    <!-- Delete Form -->
                    <form action="{{ route('songs.destroy', $song->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                    <!-- Styled Edit Button -->
                    <a href="{{ route('songs.edit', $song->id) }}" class="edit-button">Edit</a>
                </td>
            </tr>
            @endforeach
        </table>
     </div>
    </div>
</div>

@endsection
