<?php
    // include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="styles/booking.css">
</head>
<body>

    <div class="container">
    <form action="#" method="post">

    <div class="city">
        <label>City : 
        <select name="cities" class="cities" required>
            <option value="" disabled selected>None</option>
            <option value="bangalore">Bangalore</option>
            <option value="hyderabad">Hyderabad</option>
            <option value="pune">Pune</option>
            <option value="mumbai">Mumbai</option>
            <option value="chennai">Chennai</option>
        </select>
        </label>
    </div>
    
    
    <div class="cinema">
        <label>Cinema : 
            <select name="cinemas" class="cinemas" required>
                <option value="" disabled selected>None</option>
                <option value="badboys">Bad Boys:Ride to Die</option>
                <option value="insideout">Inside Out 2</option>
                <option value="americanpsycho">American Psycho</option>
                <option value="kalki">Kalki 2898</option>
                <option value="salaar">Salaar</option>
            </select>
        </label>
    </div>
    
    
    <div class="theatre">
        <label>Theatre : 
            <select name="theatres" class="theatres" required>
                <option value="" disabled selected>None</option>
                <option value="durga">Durga</option>
                <option value="galleria">INOX : Galleria mall</option>
                <option value="pheonix">PVR : Pheonix mall</option>
                <option value="garuda">PVR : Garuda mall</option>
            </select>

        </label>
    </div>

    <div class="count">
        <input class="min" type="button" value="-">
        <input class="ticket" type="number" min=1 max=15 name="ticket" id="ticket" value="0" required>
        <input class="add" type="button" value="+">
    </div>

    <button type="submit">Book tickets</button>

    </form>
    </div>
    
</body>
<script src="scripts/booking.js"></script>
</html>