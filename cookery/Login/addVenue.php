<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venue Registration</title>
    <link rel="stylesheet" href="addVenue.css">
</head>
<body>
    <div class="container">
        <div class="registerForm">
            <h2 id="title">Register Your venue</h2>
            <form action="#" method="post">
                <div class="input-group">
                    <div class="input-field" id="VenueNameField">
                        
                        <input type="text" id="VenueName" name="VenueName" placeholder="Venue Name" required>
                    </div>
                    <div class="input-field" id="VenueAddress">
                        
                        <input type="text" id="address" name="address" placeholder="Venue Address" required>
                    </div>
                    <div class="input-field" id="HostInfo">
                       
                        <input type="email" id="email" name="hostEmail" placeholder="Email Address" required>
                    </div>
                    <div class="input-field">
                        
                        <input type="number" id="capacity" name="capacity" placeholder="capacity" required>
                    </div>
                    <div class="input-field" id="contact">
                        
                        <input type="text" id="contact" name="contactInfo" placeholder="Contact Number" required>
                    </div>
                    <div class="input-field">
                      
                        <input type="text" id="HostInfo" name="HostName" placeholder="Contact Person" required>
                    </div>
                    <div class="btn-field">
                        <button type="button" id="signupbtn">Register</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>