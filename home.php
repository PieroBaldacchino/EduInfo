<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body class="bg-light">
    <div class="contenitore">
        <div class="sidebar d-flex flex-column text-white bg-success">
            <div class="mainul">
                <h2 class="logo">InfoLogia</h2>
                <hr>
                <ul class="nav nav-pills flex-column wow" data-aos="fade-right">
                    <li>
                        <a href="#" class="nav-link text-white"><i class="fa fa-home"></i>&nbsp;Home</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white"><i class="fa fa-trash"></i>&nbsp;Come si differenzia</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white"><i class="fa fa-map-marker"></i>&nbsp;Centri Raccolta</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white"><i class="fa fa-question-circle"></i>&nbsp;Chi siamo?</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white"><i class="fa fa-phone"></i>&nbsp;Contattaci</a>
                    </li>
                </ul>
            </div>
            <ul class="nav nav-pills flex-column wow" data-aos="fade-right">
            <li></li>
                    <a href="#" class="nav-link text-white"><i class="fa fa-home"></i>&nbsp;Home</a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white"><i class="fa fa-trash"></i>&nbsp;Dove lo getto?</a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white"><i class="fa fa-map-marker"></i>&nbsp;Centri Raccolta</a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white"><i class="fa fa-question-circle"></i>&nbsp;Chi siamo?</a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white"><i class="fa fa-phone"></i>&nbsp;Contattaci</a>
                </li>
            </ul>
        </div>
        <div class="content bg-light">
            <div class="title"><p data-aos="zoom-in">Infologia</p><h1 data-aos="zoom-in">[slogan]</h1></div>
            <div class="differenziata">
                <datalist>
                    <?php
                        include "Accesso.php";

                        $sql = "SELECT * FROM rifiuti";
                        $ris = $conn->query($sql);
                        if($ris->rowCount()>0)
                        {
                            foreach($ris as $row)
                            {
                                ?><option value='<?php echo $row["nomeRifiuto"];?>'><?php
                            }
                        }
                    ?>
                </datalist>
            </div>
        </div>
        <div class="login p-3">
            <?php
                if(isset($_SESSION))
                {
                    session_start();
                    echo "<a href='#' class='log'><span class='icon'><i class='fa fa-user'></i></span>&nbsp;".$_SESSION['user']."</a>";
                }
                else
                {
                    echo "<a href='#' class='log'><strong><i class='fa fa-sign-in'></i>&nbsp;Login</strong></a>";
                }
             ?>
        </div>
        <button class="btn btn-success btn-circle btn-sm" id="top" onclick="topFunction()"><i class="fa fa-arrow-up"></i></button>
    </div>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
    </body>
</html>