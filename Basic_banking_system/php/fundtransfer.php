<?php
 include("connection.php");
 error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,  initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    
        <!--========== CSS ==========-->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/tfm.css">
    
        <title>Fund Transfer</title>
    </head>
    <body>

        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-chevron-up scrolltop__icon'></i>
        </a>

        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <img src="../img/logo1.svg" alt="QuickCash Banking" class="nav__logo">

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a class="nav__link" href="../index.html">Home</a></li>
                        <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>
        <!--========== MONEY TRANSFER FORM ==========-->
        <div class="money_transfer">
            <form class="mtf" action="fundtransfer.php" method="post">
                <h1 class="section">Fund Transfer</h1>
                 <label for="inputState">Sender</label>
      <select id="inputState" class="form-control" name="sender_info">
        <option >From</option>
        <option>Naman Mathur</option>
        <option>Parv Singh</option>
        <option>Yash Soni</option>
        <option>Tanmay Singh</option>
        <option>Animesh Aggarwal</option>
        <option>Lokesh Jain</option>
        <option>Ketan Patel</option>
        <option>Mrinmoy Lahkar</option>
        <option>Mithul Nayak</option>
        <option>Ajay Nagar</option>
      </select>
    <br>
      <label for="inputState">Reciver</label>
      <select id="inputState" class="form-control" name="reciver_info" >
        <option>To</option>
        <option>Naman Mathur</option>
        <option>Parv Singh</option>
        <option>Yash Soni</option>
        <option>Tanmay Singh</option>
        <option>Animesh Aggarwal</option>
        <option>Lokesh Jain</option>
        <option>Ketan Patel</option>
        <option>Mrinmoy Lahkar</option>
        <option>Mithul Nayak</option>
        <option>Ajay Nagar</option>
      </select>

      <br>
    <label for="balance">Amount</label>
    <input type="number" class="form-control" id="Balance" placeholder="Enter amount" name="money_given">
    <br><br>
                    <input type="submit" class="button" value="send" name="submit">  
                    <br><br>
                    <a href="transactionhistory.php" class="button">View transaction history</a>  
            </form>
        
        
            <?php
        if(isset($_POST['submit'])){
        
        mysqli_select_db($conn, 'bank_customers');
            $sender =$_POST['sender_info'];
            $reciver =$_POST['reciver_info'];
            $money =$_POST['money_given'];

            $data = "INSERT INTO txn_history (Sender ,Receiver , Amount) VALUES ('$sender', '$reciver', '$money')";

            mysqli_query($conn, $data);
            
        }
            
            ?>





        <footer class="footer section bd-container">
            <p class="footer__copy">&#169; 2021 QuickCash Banking. All right reserved <br> Developed by: Hari Om</p>
        </footer>
        <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--========== MAIN JS ==========-->
        <script src="../js/main.js"></script>
        <script src="../js/app.js"></script>
    </body>
</html>


        