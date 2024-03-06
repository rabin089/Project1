<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <nav>
        <?php
            require_once('Navigation/navBar.php')
        ?>
        
    </nav>
    <main>
            <div class="search-bar">
                <div class="search-input">
                    <input type="text" id="location" placeholder="Location">
                </div>
                <div class="search-input">
                    <input type="date" id="checkin" placeholder="Check-in Date">
                </div>
                <div class="search-input">
                    <select id="capacity">
                        <option value="1">1 Guest</option>
                        <option value="2">2 Guests</option>
                        <option value="3">3 Guests</option>
                        <option value="4">4 Guests</option>
                    </select>
                </div>
                <div class="search-input">
                    <button type="submit" onclick="search()">Search</button>
                </div>
            </div>
            <script >
                function search() {
            var location = document.getElementById('location').value;
            var checkin = document.getElementById('checkin').value;
            var capacity = document.getElementById('capacity').value;
        
            // Perform search operation with the entered parameters
            console.log("Location: " + location);
            console.log("Check-in Date: " + checkin);
            console.log("Capacity: " + capacity);
        }
        
            </script>
    </main>

</body>
</html>