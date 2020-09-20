<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate For A Life</title>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Pacifico&display=swap" rel="stylesheet">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Actual Materialize design: CDN LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <section class="fnavbar">
        <nav class="nav-fixed">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">DonateALife</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="list-style">
                    <li><a href="./index.html">Home</a></li>
                    <li>
                        <p class="list-text-style"><i class="material-icons"
                                style="font-size: 20px; color: white; ">home</i></p>
                    </li>

                    <li><a href="./index.html">About Us</a></li>
                    <li>
                        <p class="list-text-style"><i class="material-icons"
                                style="font-size: 20px; color: white; ">person</i></p>
                    </li>

                    <li><a href="./index.html">Reviews</a></li>
                    <li>
                        <p class="list-text-style"><i class="material-icons"
                                style="font-size: 20px; color: white; ">sentiment_very_satisfied</i></p>
                    </li>

                    <li><a href="#contact">Contact</a></li>
                    <li>
                        <p class="list-text-style"><i class="material-icons"
                                style="font-size: 20px; color: white; ">star</i></p>
                    </li>
                </ul>
            </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
            <li><a href="./index.html">Home</a></li>
            <li><a href="./index.html">About Us</a></li>
            <li><a href="./index.html">Reviews</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </section>

    
    <section class="section1">
        <div class="row">
            <div class="col s12 m4 offset-m4">
                <div class="card-action teal lighten-1 white-text">
                        <h3>Donation Details</h3>
                </div>
                <div class="card-content form1">
                    <form action="./pay.php" method="post" accept-charset="utf-8"> 
                    <div class="form-field">
                        <label for="username">Donar Name</label>
                        <input type="text" placeholder="Enter Your Name" name="name" class="validate" required="" aria-required="true">
                    </div><br>

                    <div class="form-field">
                        <label for="useremail">Donar Email Id </label>
                        <input type="email" placeholder="Enter Email Id" name="email" class="validate" required="" aria-required="true">
                    </div><br>

                    <div class="form-field">
                        <label for="usernumber">Contact Number</label>
                        <input type="number" placeholder="Enter contact number" name="phone"   class="validate" required="" aria-required="true">
                    </div><br>

                    <div class="form-field">
                        <label for="amount">Donation Amount</label>
                        <input type="number" placeholder="Enter Donation Amount" name="price" class="validate" required="" aria-required="true">
                    </div><br>

                    <div class="input-field col s12">
                        <button class="btn-large waves-effect waves-dark" 
                        style="width: 100%;" type="submit" name="submit">Donate Now</button><br><br><br>
                    </div>
                    </form>
            </div>
        </div>
    </section>

    <section class="footer" id="contact">
        <footer class="footer-one">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h4 class="white-text">Contact Us</h4>
                        <p class="white-text">
                            <i class="material-icons" style="font-size: 30px; color: white; ">location_city</i>
                            ABC 507, Vadodara, India
                        </p>

                        <p class="white-text">
                            <i class="material-icons" style="font-size: 30px; color: white; ">call</i>
                            +919999999999
                        </p>
                    </div>
                    <div class="col l6 s12">
                        <h4 class="white-text">Social Media</h4>
                        <ul>
                            <li><a href="#" class="white-text">Facebook</a></li>
                            <li><a href="#" class="white-text">Instagram</a></li>
                            <li><a href="#" class="white-text">Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row footer-two">
                <div class="col l6 s12">
                    <p class="white-text">&copy; HelpAid</p>
                </div>
                <div class="col l6 s12">
                    <p class="white-text right">Designed By Ankita</p>
                </div>
            </div>
        </footer>
    </section>


    <section class="infomodal">
        <div id="modal3" class="modal">
            <div class="modal-content">
                <h4 id="info-modal-heading">Link Disabled</h4>
                <p id="modal-modal-content">Sorry all links are disabled as of now</p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
            </div>
        </div>
    </section>

</body>


<!-- jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"
    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<!-- M script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<!-- custom js -->
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="./js/main.js"></script>

</html>