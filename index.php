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
</head>

<body>
    <div><?php include("header.php")?></div>
    <script>
        $(document).ready(function() {
            $("body").css("overflow-y", "hidden");
            $("#close").click(function() {
                $("body").css("overflow-y", "scroll");
                $(".op").css("display", "none");
                $("href").css("display","none");
              
            });
        });
    </script>

    <div class="op ">
        <div>
        <h5 id="mm" class="border-bottom "></h5>
           <h5 class="text-center" style="color: #12140f;">Welcome to The Royal Walkway</h5>
           <p></p>
        </div>
        <p class="x_set" style="font-size: large;cursor: pointer;" id="close">X</p>
    </div>
    
    <div width="100%">
        <img class="mySlides" style="width:100%; height: 450px;" src="image/Royal_1.jpg">
        <img class="mySlides" style="width:100%; height: 450px;" src="image/royal2.jpg">
        <img class="mySlides" style="width:100%; height: 450px;" src="image/royal3.jpg">
    </div>
    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-8 col-sm-6">
                <h2 class="text-center" style="color: #666565;">About Us</h2>
                <div style="color: #bba9a9;">
                    <h6>RETAIL SHOPS | FINE DINING | MARKETPLACE | FOOD COURT | FUN & RECREATION Royal Walkway in Greater Noida Commercial Project in Jagat farm Market.</h6>
                    <p style="text-align: justify;">Vidhi infra builds launched its most awaited commercial project Royal Walkway Commercial in a Greater Noida after me the huge success of Royal Nest in Noida Extension and La Royal project in Indirapuram. the Royal Walkway is situated in one of the best and prime location of greater Noida Gamma -1 sector very close to the famous market of Jagat farm walkway has two side entries from the project with lift and escalators giving easy access to Greater Noida Pari chowk & Delhi NCR. The area covered by the building is surrounded by greenery a good planned to provide you with an eco-friendly environment.</p>
                    <p style="text-align: justify;">The Royal Walkway is one of me unique commercial plaza which is having High Street Shops, Showrooms, Hypermarket, Food Court, Kids zone with the latest concept which is having more than 350 car parking for each shop with big size beautiful atrium. Royal Walkway is the best commercial project with an ultimate investment opportunity as located very famous market Jagat farm and greater Noida biggest institutional development. Royal Walkway is the best match for anyone who wishes to make an investment in commercial the units are available in varied sizes to match the needs budget of different types of investors.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-sm-6" style="color: #666565;">
                <ul>
                    <h2>Service Highlights</h2>
                    <li class="fa fa-hand-o-right w-100 mb-3 mt-4"> Food Court</li>
                    <li class="fa fa-hand-o-right  w-100 mb-3"> Retail</li>
                    <li class="fa fa-hand-o-right  w-100 mb-3"> Kids Zone</li>
                    <li class="fa fa-hand-o-right  w-100 mb-3"> Double Ceiling Ht. Shop</li>
                    <li class="fa fa-hand-o-right  w-100 mb-3"> 450+ Car Parking Space</li>
                    <li class="fa fa-hand-o-right  w-100 mb-3"> Restro Bar</li>
                    <li class="fa fa-hand-o-right  w-100 mb-3"> 2 Side Corner Plot</li>
                    <li class="fa fa-hand-o-right  w-100 mb-3"> Centralized Ac Food Court</li>
                    <li class="fa fa-hand-o-right w-100 mb-3"> Near By Surrounded By 20000 + Family</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="size_1">
        <div class="row px-5 text-center">
            <h4 class="mt-4 text-center">Royal Walkway Jagat Farm Greater Noida</h4>
            <p class="text-center mb-5">RERA Registered No. UPRERAPRJ738675</p>
            <div class=" col-12 col-md-6 col-sm-6  col-lg-3 mb-2 ">
                <div style="color:white;background:#212529; border:2px solid black" class=" border_set " id="">
                    <div class="fs-1">
                        <h4 class="fa fa-location-arrow"></h4>
                    </div>
                    <div>
                        <h4>Location</h4>
                        <p>Jagat Farm Close Proximity</p>
                        <br>
                    </div>
                </div>
            </div>
            <div class=" col-12 col-md-6 col-sm-6  col-lg-3 mb-2 ">
                <div style="color:black;background:white; border:2px solid black" class=" border_set ">
                    <div class="fs-1">
                        <h4 class="fa fa-building"></h4>
                    </div>
                    <div>
                        <h4>Commercial</h4>
                        <p>RETAIL SHOPS & FOOD COURTS</p>
                        <br>
                    </div>
                </div>
            </div>
            <div class=" col-12 col-md-6 col-sm-6  col-lg-3 mb-2">
                <div style="color:white;background:#212529; border:2px solid black" class=" border_set ">
                    <div class="fs-1">
                        <h4 class="fa fa-key "></h4>
                    </div>
                    <div>
                        <h4>Possession</h4>
                        <p>Possession will start from Dec 2022</p>
                        <br>
                    </div>
                </div>
            </div>
            <div class=" col-12 col-md-6 col-sm-6  col-lg-3 mb-2">
                <div style="color:black;background:white; border:2px solid black" class=" border_set ">
                    <div class="fs-1">
                        <h4 class="fa fa-print "></h4>
                    </div>
                    <div>
                        <h4>Investment</h4>
                        <p>STARTING PRICE 17 LAKH* ONWARDS</p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <h2 class="text-center mt-5 mb-5">Royal Walk Way Project Specification</h2>
            <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                <h4>STRUCTURE</h4>
                <p><i class="fa fa-star" style=" color :#212529;;"></i> Earthquake resistant RCC framed structure.</p>
                <h4>DOORS &amp; WINDOWS</h4>
                <p><i class="fa fa-star" style=" color :#212529;;"></i> Outer doors &amp; windows aluminum powder coated.</p>
                <p><i class="fa fa-star" style=" color :#212529;;"></i> Internal door-frames of Marandi or equivalent wood.</p>
                <p><i class="fa fa-star" style=" color :#212529;;"></i> Good quality hardware fittings.</p>
                <h4>ELECTRICAL</h4>
                <p><i class="fa fa-star" style=" color :#212529;;"></i> Copper wire in PVC conducts with MCB supported circuits and an adequate number of points and light points on the ceilings.</p>
                <h4>FLOORING</h4>
                <p><i class="fa fa-star" style=" color :#212529;;"></i> Vitrified tiles 2'x2' in Drawing Room, Kitchen, and all Bedrooms.</p>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                <h4>SECURITY SYSTEM:</h4>
                <p><i class="fa fa-star" style=" color :#212529;;"></i> Secured gated community with intercom.</p>
                <h4>LIFT LOBBY:</h4>
                <p><i class="fa fa-star" style=" color :#212529;;"></i> High-speed passenger elevators.</p>
                <p><i class="fa fa-star" style=" color :#212529;;"></i> Lift lobby floor-combination of one or more marble/granite /vitrified tiles</p>
                <h4>KITCHEN</h4>
                <p><i class="fa fa-star" style=" color :#212529;"></i> Granite working top &amp; stainless steel sink with drainboard.</p>
                <p><i class="fa fa-star" style=" color :#212529;"></i> 2'-0" dado above the working top by ceramic tiles.</p>
                <h4>POWER BACKUP:</h4>
                <p><i class="fa fa-star" style=" color :#212529;"></i> 100% DG power back-up available to individual flat on a paid basis.</p>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
                <h4>TOILETS</h4>
                <p><i class="fa fa-star" style=" color :#212529;"></i> Ceramic tiles on walls up to door level.</p>
                <p><i class="fa fa-star" style=" color :#212529;"></i> White sanitary ware of Hindware imported or equivalent.</p>

                <h4>INSIDE WALL &amp; CEILING FINISH</h4>
                <p><i class="fa fa-star" style=" color :#212529;"></i> Finished walls &amp; ceiling with OBD in pleasing shades.</p>
                <h4>TV &amp; TELEPHONE:</h4>
                <p><i class="fa fa-star" style=" color :#212529;"></i> One landline connection with intercom facilities.</p>
                <p>
                </p>
                <p><i class="fa fa-star" style=" color :#212529;"></i> Provision for DTH/IPTV connection.</p>
                <h4>STAIRCASE:</h4>
                <p><i class="fa fa-star" style=" color :#212529;"></i> It is a long established fact that a reader will be distracted.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <h4 class="text-center mt-5 mb-5">WHY TO BUY PROPERTY IN ROYAL WALK WAY</h4>
            <div class="container-fluid" id="size_1">
                <div class="row px-5 text-center pt-5 pb-5">
                    <div class=" col-12 col-md-6 col-sm-6 col-lg-3">
                        <div class="p-lg-3 p-4 p-md-5 mx-lg-5 mb-2" style="color:white;background:#212529;border:2px solid black; border-radius: 50%;" id="lrd">
                            <div class="fs-1">
                                <h4>03</h4>
                            </div>
                            <div>
                                <h4>Location</h4>
                                <p class="mb-0">Project Located in Jagat Farm Market</p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class=" col-12 col-md-6 col-sm-6 col-lg-3">
                        <div class="p-lg-3 p-4 p-md-5 mx-lg-5 mb-2" style="color:white;background:#212529;border:2px solid black; border-radius: 50%;" id="lrd">
                            <div class="fs-1">
                                <h4>03</h4>
                            </div>
                            <div>
                                <h4>Near By</h4>
                                <p class="mb-0">Alpha-1, Metro Station Gr. Noida</p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class=" col-12 col-md-6 col-sm-6 col-lg-3">
                        <div class="p-lg-3 p-4 p-md-5 mx-lg-5 mb-2" style="color:white;background:#212529;border:2px solid black; border-radius: 50%;" id="lrd">
                            <div class="fs-1">
                                <h4>03</h4>
                            </div>
                            <div>
                                <h4>Food Court</h4>
                                <p class="mb-0">Food Court Option is available for project.</p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class=" col-12 col-md-6 col-sm-6 col-lg-3">
                        <div class="p-lg-2 p-4 p-md-5 mx-lg-5 mb-2" style="color:white;background:#212529;border:2px solid black; border-radius: 50%;" id="lrd">
                            <div class="fs-1">
                                <h4>03</h4>
                            </div>
                            <div>
                                <h4>Location</h4>
                                <p class="mb-0">Project Near By around 10000 to 15000 Family residence.</p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h4 class="text-center mt-5 mb-5">Project Gallery - ROYAL WALK WAY</h4>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <img class="w-100 m-2" style="height: 90%;" src="image/1.jpg" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <img class="w-100 m-2" style="height: 90%;" src="image/2.jpg" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <img class="w-100 m-2" style="height: 90%;" src="image/3.jpg" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <img class="w-100 m-2" style="height: 90%;" src="image/4.jpg" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <img class="w-100 m-2" style="height: 90%;" src="image/5.jpg" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <img class="w-100 m-2" style="height: 90%;" src="image/6.jpg" alt="">
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12" style="background-color: #212529;color:white">
                <div>
                    <h4 class="text-center pt-3">CONTACT SUPPORT</h4>
                    <p class="fa fa-mobile mb-0"> <b>Mobile:</b></p>
                    <p>+91-8750916600</p>
                    <p class="mb-0"><span> <img src="image/earth.png" alt=""></span> <b>Email:</b></p>
                    <p>info@royalwalkway.info</p>
                    <p class="fa fa-mobile mb-0"> <b>Address</b></p>
                    <p>Site Add- LS-5, Block - E, Sector- Gamma-1, Greater Noida, Uttar Pradesh - 201310</p>
                    <p style="border-bottom: 2px solid;"></p>
                    <h4 class="text-center">Best Features</h4>
                    <ol class="pb-0 p-3">
                        <li class="pb-1"> 5 Min Drive From Metro Station.</li>
                        <li class="pb-1"> 2 Side Corner Plot.</li>
                        <li class="pb-1"> Near By 10k to 15k Family Residence.</li>
                        <li class="pb-1"> Near By Gamma-1 & Gamma 2 Sector</li>
                        <li class="pb-1"> 50 Min Drive From Upcoming Jewar Airport</li>
                        <li class="pb-1"> Main Road Commercial Project</li>
                        <li class="pb-1"> Hi-Street Commercial Shops</li>
                    </ol>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12" style="background-color:rgb(94 68 54);color:white">
                <div>
                    <form method="POST">
                        <h4 class="text-center pt-3">QUICK ENQURY</h4>
                        <p>kindly Submit Your Contact details Our sales team will get back to you with in same day.</p>
                        <p class="ms-2 m-0"><span style="color:white;"> Name <span class="creativecontactform_field_required" style="color:red;font-size: 20px;">*</span></span></p>
                        <input class="form-control" type="text" name="name" placeholder="Name">
                        <p class="ms-2 m-0 mt-2"><span style="color:white;"> Email ID <span class="creativecontactform_field_required" style="color:red;font-size: 20px;">*</span></span></p>
                        <input class="form-control" type="email" name="email" placeholder="Email">
                        <p class="ms-2 m-0 mt-2"><span style="color:white;"> Mobile <span class="creativecontactform_field_required" style="color:red;font-size: 20px;">*</span></span></p>
                        <input class="form-control" type="number" name="number" placeholder="Mobile">
                        <p class="ms-2 m-0 mt-2"><span style="color:white;"> Message <span class="creativecontactform_field_required" style="color:red;font-size: 20px;">*</span></span></p>
                        <textarea name="msg" class="form-control" rows="4"></textarea>
                        <p class="mt-4 text-center"><input style="background-color: #212529;border:0;color:white" class="btn" type="submit" value="Submit"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <?php include("futer.php") ?>
</body>

</html>