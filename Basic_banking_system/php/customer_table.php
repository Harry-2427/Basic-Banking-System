<?php
  include ("connection.php");
  $query = "SELECT * FROM customer_table";
  $result = $conn->query($query);
  $conn->close(); 
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
        
        
    
        <title>Customer Information</title>
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

        <main class="l-main">
            <!--========== CUSTOMER TABLE ==========-->
            <section class="table" id="table">
                <div class="table__container section bd-container">
                    <h1 class="section-title" style="color:#069C54;">Customer's Information</h1>
                    <table class="const__table">
                        <tr>
                            <th>ID</th>
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Account Number</th>
                            <th>Phone Number</th>
                            <th>Current Balance</th>
                            <th>More</th>
                            
                        </tr>
                         <!-- PHP CODE TO FETCH DATA FROM ROWS-->
                        <?php
                            while($rows=$result->fetch_assoc())
                            {
                        ?>
                            <tr>
                                <!--FETCHING DATA FROM EACH ROW OF EVERY COLUMN-->
                                <td><?php echo $rows['ID'];?></td>
                                <td><?php echo $rows['Customer Name'];?></td>
                                <td><?php echo $rows['Email'];?></td>
                                <td><?php echo $rows['Account Number'];?></td>
                                <td><?php echo $rows['Phone Number'];?></td>
                                <td><?php echo $rows['Current Balance'];?></td>
                                <td><a href="fundtransfer.php" class="button">Make transaction</a></td>

                            </tr>
                            
                        <?php
                            }
                        ?>
                    </table>

                </div>

            </section>
            
            
                
            
        </main>
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