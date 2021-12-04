<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royalwalkway.in</title>
    <link rel="stylesheet" href="class/style.css">
    <link rel="stylesheet" href="class/media.css">
    <script src="class/bootstrap.js"></script>
    <script src="class/jquery.min.js"></script>
    <script src="class/popper.min.js"></script>
    <link rel="stylesheet" href="class/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .abc1{
            color: black;
            list-style: none;
            text-decoration: none;
        }
        .abc1:hover{
            color: black;
        }
    </style>
</head>

<body>
    <div id="sp-logo" class="one_set">
        <div class="container-fluid">
            <div class="row px-lg-5">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12" style="z-index: 2 !important;">
                    <a href="index.php"><img class="one_1"  src="image/logo-royal-walkway-logo.png" alt=""></a>
                    <span  class="fa fa-bars fa-2x pt-4 none1" style="float: right;"></span>
                    <span style="position:absolute;right: 0; padding-right: 17px;top: 25px;" class="h3 none2" id="Cut">X</span>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12 navbar" style="display: flex;justify-content: space-between;">
                    <span class="one_one">
                        <table>
                            <tr>
                                <td>
                                     <p class="fa fa-phone fa-2x"></p>
                                </td>
                                <td class="ps-2">
                                  <span>Call Us</span>
                                  <p>8010019019</p>
                                </td>
                            </tr>
                        </table>
                    </span>
                    <span>
                        <table>
                            <tr>
                                <td>
                                     <p class="fa fa-envelope fa-2x"></p>
                                </td>
                                <td class="ps-2">
                                  <span>Drop us a line</span>
                                  <p>walkwayroyal@gmail.com</p>
                                </td>
                            </tr>
                        </table>
                    </span>
                    <span class="text-sm-center">
                        <table>
                            <tr>
                                <td>
                                     <p class="fa fa-map-marker fa-2x"></p>
                                </td>
                                <td class="ps-2">
                                  <span>Site Address</span>
                                  <p>LS-5, Gamma-1, Gr. Noida</p>
                                </td>
                            </tr>
                        </table>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color: black;">
     <div class="row">
       <div class="col-12">
            <ul class="px-lg-5 set_one navbar"style="background-color: black;position: sticky;top: 0px; ">
                <li> <span class="fa fa-home"></span> <a class="abc" href="index.php">Home</a></li>
                <li><span class="fa fa-hand-pointer-o "></span> <a class="abc" href="Aboutus.php">About Us</a></li>
                <li><span class="fa fa-building"> </span><a class="abc" href="FloorPlan.php"> Floor Plan</a></li>
                <li><span class="fa fa-check-square"></span> <a class="abc" href="Layout.php">Layout Plan</a></li>
                <li><span class="fa fa-key"></span> <a class="abc" href="Price.php">Price List</a></li>
                <li><span class="fa fa-location-arrow"></span> <a class="abc" href="LocationMap.php">Location Map</a></li>
                <li><span class="fa fa-arrow-circle-left"></span> <a class="abc" href="Specification.php">Specification</a></li>
                <li><span class="fa fa-phone"></span>  <a class="abc" href="contect.php">Contect Us</a></li>
            </ul>
            <script>
                $(document).ready(function(){
                    $(".none1").click(function(){
                       $("#mobile_one").slideToggle();
                       $(".none1").css("display","none");
                       $(".none2").css("display","block");
                    });
                });
                $(document).ready(function(){
                    $(".none2").click(function(){
                        $("#mobile_one").slideToggle();
                        $(".none1").css("display","block");
                       $(".none2").css("display","none");
                    });
                });
            </script>
            <ul class="px-lg-5  navbar"id="mobile_one">
            <li> <span class="fa fa-home"></span> <a class="abc1" href="index.php">Home</a></li>
                <li><span class="fa fa-hand-pointer-o "></span> <a class="abc1" href="Aboutus.php">About Us</a></li>
                <li><span class="fa fa-building"> </span><a class="abc1" href="FloorPlan.php"> Floor Plan</a></li>
                <li><span class="fa fa-check-square"></span> <a class="abc1" href="Layout.php">Layout Plan</a></li>
                <li><span class="fa fa-key"></span> <a class="abc1" href="Price.php">Price List</a></li>
                <li><span class="fa fa-location-arrow"></span> <a class="abc1" href="LocationMap.php">Location Map</a></li>
                <li><span class="fa fa-arrow-circle-left"></span> <a class="abc1" href="Specification.php">Specification</a></li>
                <li><span class="fa fa-phone"></span>  <a class="abc1" href="contect.php">Contect Us</a></li>
            </ul>
       </div>
     </div>
    </div>
    <div>
        <ul class="icon" style=" position:fixed; top:150px; z-index:1 ">
            <li><span class=" fa fa-facebook fa-2x icone_1" style="background-color:#4867aa;color:white"></span></li>
            <li><span class=" fa fa-twitter fa-2x icone_2" style="background-color:#00aef1;color:white"></span></li>
            <li><span class=" fa fa-whatsapp fa-2x icone_3" style="background-color:#1b892a;color:white"></span></li>
            <li><span class=" fa fa-pinterest fa-2x icone_3" style="background-color:#b7081b;color:white"></span></li>
            <li><span class=" fa fa-linkedin fa-2x icone_4" style="background-color:#0a66c2;color:white"></span></li>
        </ul>
    </div>
    <script>
        $(document).ready(function() {
            $(".image_rotate").click(function() {
                $(".image_rotate").css("display", "none");
                $(".one").css("display", "block");
                $(".image_rotate1").css("display", "block");
            });
        });
        $(document).ready(function() {
            $(".image_rotate1").click(function() {
                $(".one").css("display", "none");
                $(".image_rotate").css("display", "block");
                $(".image_rotate1").css("display", "none");
            });
        });
    </script>
    <div>
        <ul class="icon" style=" position:fixed; bottom:0; z-index:1 ">
            <div class="set_one_logo one" style="margin-bottom: 5px;">
                <div class="image_rotate_facebook" style="padding-left: 4px;">
                    <a href=""><p id="mis_icon" class="fa fa-facebook fs-5   m-0"></p></a>
                </div>
            </div>
            <div class="set_one_logo one" style="margin-bottom: 5px;">
                <div class="image_rotate_twitter">
                    <a href=""><p id="mis_icon" class="fa fa-twitter fs-5   m-0"></p></a>
                </div>
            </div>
            <div class="set_one_logo">
                <div class="image_rotate">
                    <a href=""><p id="mis_icon" class="fa fa-share fs-5   m-0"></p></a>
                </div>
                <div class="image_rotate1 none_button" id="hi">
                    <a href=""><p id="mis_icon1" class="fa fa-plus fs-5   m-0"></p></a>
                </div>
            </div>
        </ul>
    </div>
    <div>
        <ul class="icon" style=" position:fixed; right:0;bottom:0; z-index:1 ">
            <div class="set_one_logo_1" style="margin-bottom: 5px;">
                <div class="image_rotate_twitter">
                    <p id="mis_icon" class="m-0 text-center scrollUp"><a  href="#top" style="z-index: 2147483647;"><i class="fa fa-angle-up fa-2x text-white"></i></a></p>
                </div>
            </div>
        </ul>
    </div>
</body>

</html>