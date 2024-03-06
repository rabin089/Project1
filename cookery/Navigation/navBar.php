<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="navBar.css">
    <script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <ul>
            <li class="brand"><img src="images/cookery.jpg" alt="Cookery" ></li>
            <li class="home" ><a href="index.html">Home</a></li>
            <li class="info"><a href="#">About Us</a></li>
            <li class="Add venue"><a href="Login/addVenue.php">Register Here </a></li>
            <li class="more" id="dropdownTrigger"><i class="fa-solid fa-list"></i>
                <ul class="dropdown-content" id="dropdownContent">
                  <li><a href="Login/signUp.php/">Sign up</a></li>
                  <li><a href="Login/loginForm.php/">login</a></li>
                </ul>
              </li>
        </ul>
    </nav>
    <script>
        // execute dropdown after click on the icon
        document.getElementById('dropdownTrigger').addEventListener('click', function() {
    var dropdownContent = document.getElementById('dropdownContent');
    if (dropdownContent.style.display === 'block') {
        dropdownContent.style.display = 'none';
    } else {
        dropdownContent.style.display = 'block';
        dropdownContent.style.top = (this.offsetTop + this.offsetHeight) + 'px';
        dropdownContent.style.left = this.offsetLeft + 'px';
    }
});
        // Close the dropdown menu when clicking outside of it
document.addEventListener('click', function(event) {
    var dropdownContent = document.getElementById('dropdownContent');
    var dropdownIcon = document.getElementById('dropdownIcon');
    if (!dropdownContent.contains(event.target) && !dropdownIcon.contains(event.target)) {
        dropdownContent.style.display = 'none';
    }
});
    </script>
</body>
</html>