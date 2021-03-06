<?php 
    include('./config.php');
    $obj = new db();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-</title>
    <link rel="stylesheet" href="./assets/style.css" class="css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
</head>
<body onscroll='scrolWin()'>
    <header class="BodySpaceLayout">
        <div>
            <img class='logo' src="./assets/images/logo.png" alt="">
        </div>
        <nav class="pcvivew">
            
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
                <li class="loginbtn"><a href="">Login</a></li>
            </ul>
        </nav>
        <div class="mobileMenu">
            <div class="menuBar">
                <div class="barsDiv">
                    <i class="fas fa-bars barSize" onclick="clicktoShowMenu()"></i>
                </div>
                <ul class="shoeMenu mobileMenuShoew">
                    <li><a href="">Home</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li class="loginbtn"><a href="">Login</a></li>
                </ul>
            </div>
        </div>
    </header>
    <script>
        function clicktoShowMenu(){
            document.querySelector('.menuBar ul').classList.toggle('shoeMenu')
            document.querySelector('.menuBar ul').classList.toggle('animMenu')
            if(document.querySelector('.menuBar ul').classList.contains('shoeMenu')){
                document.querySelector('.barsDiv').innerHTML=' <i class="fas barSize fa-bars" onclick="clicktoShowMenu()"></i>'
            }else{
                document.querySelector('.barsDiv').innerHTML=' <i class="fas barSize fa-times" onclick="clicktoShowMenu()"></i>'
            }
            
        }

        function scrolWin(){
            if(window.scrollY>100){
                document.querySelector('header').classList.add('stickyHead')
            }else{
                document.querySelector('header').classList.remove('stickyHead')
            }
        }
        
    </script>
    <section class="BodySpaceLayout HeadSection">
        <img class="headerSecImage" src="./assets/images/web3.png" alt="">
        <div class="leftDetailDiv">
            <div class="leftHeadText">
                <h1>Best Textile Machineries in Bangladesh</h1>
                <p>Specialized in Textile Machine</p>
                <a class="loginbtn" href=""><i class="fas fa-play"></i> Watch the video</a>
            </div>
        </div>

        <div class="categoryConteiner">
            <div class="categorDiv">
                <a href="">
                    <img src="./assets/images/icon1.png" alt="">
                    <h3>Lorem, ipsum dolor</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                </a>
            </div>
            <div class="categorDiv">
                <a href="">
                    <img src="./assets/images/icons2.png" alt="">
                    <h3>Lorem ipsum dolor sit</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                </a>
            </div>
            <div class="categorDiv">
                <a href="">
                    <img src="./assets/images/icons3.png" alt="">
                    <h3>Lorem ipsum dolor sit amet</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                </a>
            </div>
            <div class="categorDiv">
                <a href="">
                    <img src="./assets/images/icons4.png" alt="">
                    <h3>Lorem, ipsum dolor</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                </a>
            </div>
        </div>
    </section>
    <br><br>
    <section class="serviceSection BodySpaceLayout">
        <div>
            <h2 style="text-align: center;">Our Services</h2><br><br><br>
        </div>
        <div class="serviceContainer">
            <?php 
                // $sqlCat="SELECT * FROM achivements";
                // $cat = $obj->getAllProjectList($sqlCat);
                // $i=0;
                // if($cat->num_rows>0){
                //     while($rowCat=$cat->fetch_array()){  
                //         $i++;          

            
            ?>
            <!-- <div class="serviceDiv <?php if($i==1) echo 'serviceDiv1' ?>">
                <h1>0<?php //echo $i ?></h1>
                <h3><?php //echo $rowCat['title'] ?></h3>
                <p><?php //echo $rowCat['descript'] ?></p>
            </div> -->

            <?php // }} ?>
            <div class="serviceDiv serviceDiv1">
                <h1>01</h1>
                <h3>Service 2</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo repellendus rem illo quas, ullam doloribus iusto laborum. Eum, vero sunt.</p>
            </div>
            <div class="serviceDiv">
                <h1>02</h1>
                <h3>Service 2</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo repellendus rem illo quas, ullam doloribus iusto laborum. Eum, vero sunt.</p>
            </div>
            <div class="serviceDiv">
                <h1>03</h1>
                <h3>Service 3</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo repellendus rem illo quas, ullam doloribus iusto laborum. Eum, vero sunt.</p>
            </div>
            <div class="serviceDiv">
                <h1>04</h1>
                <h3>Service 4</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo repellendus rem illo quas, ullam doloribus iusto laborum. Eum, vero sunt.</p>
            </div>
        </div>
    </section>

   
        
    <section class='BodySpaceLayout aboutSecDivCon'>
    <img class='bgshowdiv' src="https://www.envato.com/static/media/cta-image.0433f50c.svg" alt="">
        <div>
            <h2 style="text-align: center;">About Us</h2><br><br><br>
        </div>
        <div class="aboutSecContainer">
            <div class="aboutDiv">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Consequatur perspiciatis consequuntur distinctio quae debitis nisi, 
                    at maxime eum voluptatem animi eos amet quam repellat quisquam 
                    dolorum commodi. Enim dolore dicta cum quidem pariatur molestias, i
                    d fugiat quam, sapiente cupiditate repudiandae corporis commodi 
                    officiis cumque excepturi animi amet eum nulla fugit, possimus quis
                    numquam! Ea tempora, laudantium veritatis velit quisquam 
                    necessitatibus? Voluptates iusto temporibus, animi rem, 
                    eveniet ratione sequi consequuntur iure laudantium repudiandae 
                    vel minus quae repellat voluptas sit doloremque provident delectus.
                    Praesentium voluptate molestias voluptas quasi dicta consequuntur
                    corporis, nisi doloremque nulla alias vero vitae odit ab. Debitis,
                        similique reprehenderit?
                </p><br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Facere quas temporibus earum excepturi nam nisi 
                    aliquam, consectetur nobis sunt ipsam, labore possimus
                    sit eos vero minus, delectus amet consequuntur hic 
                    dolor est exercitationem neque nihil illum. Laborum ad,
                    incidunt fugit ipsa quasi ducimus mollitia quae beatae 
                    atque hic nesciunt odit!
                </p><br>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Consequatur perspiciatis consequuntur distinctio quae debitis nisi, 
                    at maxime eum voluptatem animi eos amet quam repellat quisquam 
                    dolorum commodi. Enim dolore dicta cum quidem pariatur molestias, i
                    d fugiat quam, sapiente cupiditate repudiandae corporis commodi 
                    officiis cumque excepturi animi amet eum nulla fugit, possimus quis
                    numquam! Ea tempora, laudantium veritatis velit quisquam 
                    necessitatibus? Voluptates iusto temporibus, animi rem, 
                    eveniet ratione sequi consequuntur iure laudantium repudiandae 
                    vel minus quae repellat voluptas sit doloremque provident delectus.
                    Praesentium voluptate molestias voluptas quasi dicta consequuntur
                    corporis, nisi doloremque nulla alias vero vitae odit ab. Debitis,
                        similique reprehenderit?
                </p><br>
            </div>
        </div>
    </section>
    <br><br>

    <footer class='BodySpaceLayout'>
        <div class="contactSec">
            <form action="">
                <div class="inputDiv">
                    <label>Name:</label><br>
                    <input type="text" name="name" placeholder="jonh Dona">
                </div>
                <div class="inputDiv">
                    <label>Email:</label><br>
                    <input type="email" name="name" placeholder="jonhdona23@gmail.com">
                </div>
                <div class="inputDiv">
                    <label>Message:</label><br>
                    <textarea name="sms" placeholder='message....'></textarea>
                </div>
                <div class="inputDiv">
                    <input class='sendbtn' type="submit" name='send' value="SEND">
                </div>
            </form>
        </div>

        <!-- <div class="linkSectionF" style='text-align:center'>
            <h3 style='color:white'>Quick Links</h3><br><br>
            <li class="li"><a href=""> <i class="fas fa-link"></i> Home</a></li>
            <li class="li"> <a href=""><i class="fas fa-link"></i> About</a></li>
            <li class="li"><a href=""><i class="fas fa-link"></i> Services</a></li>
            <li class="li"><a href=""><i class="fas fa-link"></i> Product</a></li>
            
        </div> -->

        <div class="logoSec">
            <div style='text-align:center'>
                <img class='logo' style='max-width:100px' src="./assets/images/logo.png" alt="">
                <h2 style='color:white'>Universal Textile Machinery</h2>
                <p style='color:grey'>Address: Mirpur 10, Sector 05, Block 04, Dhaka, Bangladesh</p>
            </div> 
            <div style='text-align:center' class="socialIcon">
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a><br><br><br>
            </div>
            <p style='text-align:center; color:grey'>All Right Reserved &copy; <a href="/">UTM</a> | <?php echo date('Y') ?></p>
        </div>
    </footer>
    



</body>
</html>