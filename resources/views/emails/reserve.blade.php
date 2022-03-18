<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Request for New Reservation</title>
</head>
<body>
    <h1>Hi Admin!</h1>
    <h2>My Name is <strong>{{ $name }}</strong></h2>
    <p>I need you <strong>{{ $hall }}</strong> for <strong>{{ $ocation }}</strong> </p>
    <br> 
    <br>
    <p>Hall/Center : <strong>{{ $hall }}</strong></p>
    <p>Ocation: <strong>{{ $ocation }}</strong></p>
    <p>Date: <strong>{{ $date }}</strong></p>
    <p>Time : <strong>{{ $time }}</strong></p>
    <p>Person's: <strong>{{ $person }}</strong></p>
    <p>Budget: <strong>{{ $budget }}</strong></p>

    <h1> Contact Me:</h1>
    <p>Eamil: {{ $email }}</p>
    <p>Phone: {{ $contact }}</p>

    
    
</body>
</html>