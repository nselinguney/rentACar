<html>

<head>
    <title>CSS Website Layout</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            margin: 0;
        }

        /* Style the header */
        .header {
            background-color: #000000;
            padding: 10px;
            text-align: center;
        }

        /* Create three unequal columns that floats next to each other */
        .column {
            float: left;
            padding: 10px;
        }

        /* Left and right column */
        .column.side {
            width: 25%;
        }

        /* Middle column */
        .column.middle {
            width: 50%;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Change color on hover */
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }


        .form-style-3 {
            max-width: 450px;
            font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        }

        .form-style-3 label {
            display: block;
            margin-bottom: 10px;
        }

        .form-style-3 label>span {
            float: left;
            width: 300px;
            color: black;
            font-weight: bold;
            font-size: 20px;
            text-shadow: 1px 1px 1px #fff;
        }

        .form-style-3 fieldset {
            border-radius: 0px;
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            margin: 0px 0px 10px 0px;
            border: 1px solid black;
            padding: 20px;
            width: 1000px;
            height: 500px;
            background: white;
            box-shadow: inset 0px 0px 15px #FFE5E5;
            -moz-box-shadow: inset 0px 0px 15px #FFE5E5;
            -webkit-box-shadow: inset 0px 0px 15px #FFE5E5;
        }

        .form-style-3 fieldset legend {
            color: black;
            border-top: 1px solid black;
            border-left: 1px solid black;
            border-right: 1px solid black;
            border-radius: 5px 5px 0px 0px;
            -webkit-border-radius: 5px 5px 0px 0px;
            -moz-border-radius: 5px 5px 0px 0px;
            background: white;
            padding: 0px 8px 3px 8px;
            box-shadow: -0px -1px 2px #F1F1F1;
            -moz-box-shadow: -0px -1px 2px #F1F1F1;
            -webkit-box-shadow: -0px -1px 2px #F1F1F1;
            font-weight: normal;
            font-size: 20px;
        }


        .form-style-3 input[type=text],
        .form-style-3 input[type=date],
        .form-style-3 input[type=datetime],
        .form-style-3 input[type=number],
        .form-style-3 input[type=search],
        .form-style-3 input[type=time],
        .form-style-3 input[type=url],
        .form-style-3 input[type=email],
        .form-style-3 select,
        .form-style-3 textarea {
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border: 1px solid black;
            outline: none;
            color: black;
            padding: 5px 8px 5px 8px;
            box-shadow: inset 1px 1px 4px black;
            -moz-box-shadow: inset 1px 1px 4px black;
            -webkit-box-shadow: inset 1px 1px 4px black;
            background: white;
            width: 50%;
        }

        .form-style-3 input[type=submit],
        .form-style-3 input[type=button] {
            background: black;
            border: 1px solid gray;
            padding: 15px 30px 15px 30px;
            color: white;
            box-shadow: inset -1px -1px 3px gray;
            -moz-box-shadow: inset -1px -1px 3px gray;
            -webkit-box-shadow: inset -1px -1px 3px gray;
            border-radius: 3px;
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            font-weight: bold;
            float: right;
            margin-top: 50px;
            margin-right: 140px;
        }

        .required {
            color: red;
            font-weight: normal;
        }

        .header-text {
            color: white;
            size: 15px;
        }

        .user_img {

            margin: left: 100px;
            width: 30px;
            height: 30px;
        }

        .header_logout {
            margin-left: 1400px;
        }


        .payment-title {
            width: 100%;
            text-align: center;
        }

        .form-container .field-container:first-of-type {
            grid-area: name;
        }

        .form-container .field-container:nth-of-type(2) {
            grid-area: number;
        }

        .form-container .field-container:nth-of-type(3) {
            grid-area: expiration;
        }

        .form-container .field-container:nth-of-type(4) {
            grid-area: security;
        }

        .field-container input {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        .field-container {
            position: relative;
        }

        .form-container {
            display: grid;
            grid-column-gap: 10px;
            grid-template-columns: auto auto;
            grid-template-rows: 90px 90px 90px;
            grid-template-areas: "name name""number number""expiration security";
            max-width: 400px;
            padding: 20px;
            color: #707070;
        }

        label {
            padding-bottom: 5px;
            font-size: 13px;
        }

        input {
            margin-top: 3px;
            padding: 15px;
            font-size: 16px;
            width: 100%;
            border-radius: 3px;
            border: 1px solid #dcdcdc;
        }

        .ccicon {
            height: 38px;
            position: absolute;
            right: 6px;
            top: calc(50% - 17px);
            width: 60px;
        }

        /* CREDIT CARD IMAGE STYLING */
        .preload * {
            -webkit-transition: none !important;
            -moz-transition: none !important;
            -ms-transition: none !important;
            -o-transition: none !important;
        }

        .container {
            width: 100%;
            max-width: 400px;
            max-height: 251px;
            height: 54vw;
            padding: 20px;
        }

        #ccsingle {
            position: absolute;
            right: 15px;
            top: 20px;
        }

        #ccsingle svg {
            width: 100px;
            max-height: 60px;
        }

        .creditcard svg#cardfront,
        .creditcard svg#cardback {
            width: 100%;
            -webkit-box-shadow: 1px 5px 6px 0px black;
            box-shadow: 1px 5px 6px 0px black;
            border-radius: 22px;
        }

        #generatecard {
            cursor: pointer;
            float: right;
            font-size: 12px;
            color: #fff;
            padding: 2px 4px;
            background-color: #909090;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        /* CHANGEABLE CARD ELEMENTS */
        .creditcard .lightcolor,
        .creditcard .darkcolor {
            -webkit-transition: fill .5s;
            transition: fill .5s;
        }

        .creditcard .lightblue {
            fill: #03A9F4;
        }

        .creditcard .lightbluedark {
            fill: #0288D1;
        }

        .creditcard .red {
            fill: #ef5350;
        }

        .creditcard .reddark {
            fill: #d32f2f;
        }

        .creditcard .purple {
            fill: #ab47bc;
        }

        .creditcard .purpledark {
            fill: #7b1fa2;
        }

        .creditcard .cyan {
            fill: #26c6da;
        }

        .creditcard .cyandark {
            fill: #0097a7;
        }

        .creditcard .green {
            fill: #66bb6a;
        }

        .creditcard .greendark {
            fill: #388e3c;
        }

        .creditcard .lime {
            fill: #d4e157;
        }

        .creditcard .limedark {
            fill: #afb42b;
        }

        .creditcard .yellow {
            fill: #ffeb3b;
        }

        .creditcard .yellowdark {
            fill: #f9a825;
        }

        .creditcard .orange {
            fill: #ff9800;
        }

        .creditcard .orangedark {
            fill: #ef6c00;
        }

        .creditcard .grey {
            fill: #bdbdbd;
        }

        .creditcard .greydark {
            fill: #616161;
        }

        /* FRONT OF CARD */
        #svgname {
            text-transform: uppercase;
        }

        #cardfront .st2 {
            fill: #FFFFFF;
        }

        #cardfront .st3 {
            font-family: 'Source Code Pro', monospace;
            font-weight: 600;
        }

        #cardfront .st4 {
            font-size: 54.7817px;
        }

        #cardfront .st5 {
            font-family: 'Source Code Pro', monospace;
            font-weight: 400;
        }

        #cardfront .st6 {
            font-size: 33.1112px;
        }

        #cardfront .st7 {
            opacity: 0.6;
            fill: #FFFFFF;
        }

        #cardfront .st8 {
            font-size: 24px;
        }

        #cardfront .st9 {
            font-size: 36.5498px;
        }

        #cardfront .st10 {
            font-family: 'Source Code Pro', monospace;
            font-weight: 300;
        }

        #cardfront .st11 {
            font-size: 16.1716px;
        }

        #cardfront .st12 {
            fill: #4C4C4C;
        }

        /* BACK OF CARD */
        #cardback .st0 {
            fill: none;
            stroke: #0F0F0F;
            stroke-miterlimit: 10;
        }

        #cardback .st2 {
            fill: #111111;
        }

        #cardback .st3 {
            fill: #F2F2F2;
        }

        #cardback .st4 {
            fill: #D8D2DB;
        }

        #cardback .st5 {
            fill: #C4C4C4;
        }

        #cardback .st6 {
            font-family: 'Source Code Pro', monospace;
            font-weight: 400;
        }

        #cardback .st7 {
            font-size: 27px;
        }

        #cardback .st8 {
            opacity: 0.6;
        }

        #cardback .st9 {
            fill: #FFFFFF;
        }

        #cardback .st10 {
            font-size: 24px;
        }

        #cardback .st11 {
            fill: #EAEAEA;
        }

        #cardback .st12 {
            font-family: 'Rock Salt', cursive;
        }

        #cardback .st13 {
            font-size: 37.769px;
        }

        /* FLIP ANIMATION */
        .container {
            perspective: 1000px;
        }

        .creditcard {
            width: 100%;
            max-width: 400px;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            transition: -webkit-transform 0.6s;
            -webkit-transition: -webkit-transform 0.6s;
            transition: transform 0.6s;
            transition: transform 0.6s, -webkit-transform 0.6s;
            cursor: pointer;
        }

        .creditcard .front,
        .creditcard .back {
            position: absolute;
            width: 100%;
            max-width: 400px;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-font-smoothing: antialiased;
            color: #47525d;
        }

        .creditcard .back {
            -webkit-transform: rotateY(180deg);
            transform: rotateY(180deg);
        }

        .creditcard.flipped {
            -webkit-transform: rotateY(180deg);
            transform: rotateY(180deg);
        }

        /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
    </style>

</head>

<body>

    <div class="header">
        <div class="header-text">

            <div class="header_logout">
                <?php
       echo "
        <a href='logout.php'><img src='image2.png' class='user_img'></a>
        ";
        ?>
            </div>
            <h1 style="font-size:25px">Ödeme Bilgileri</h1>

        </div>
    </div>

    <div class="row">
        <div class="column side">

        </div>

        <div class="column middle">
            <div class="form-style-3">

                <?php

                        if(isset($_POST["sec"])) {

                            $carId = $_POST["carId"];
                            /*$konum = $_POST["konum"];
                            $aracAdi = $_POST["aracAdi"];
                            $aracSinifi = $_POST["aracSinifi"];
                            $yakitTipi = $_POST["yakitTipi"];
                            $vitesTipi = $_POST["vitesTipi"];
                            $gunlukUcret = $_POST["gunlukUcret"];
                            $alisTarihi = $_POST["tarih1"];
                            $iadeTarihi = $_POST["tarih2"];*/


                            $con=mysqli_connect("localhost:3308", "root", "", "rentacar");
                            
                            $query = mysqli_query($con, "SELECT * FROM arabalar where id='{$carId}'");
                            $araba = mysqli_fetch_assoc($query);
                        
                            $konum = $araba['konum'];
                            $aracAdi = $araba['arac_adi'];
                            $aracSinifi = $araba['arac_sinifi'];
                            $yakitTipi = $araba['yakit_tipi'];
                            $vitesTipi = $araba['vites_tipi'];
                            $gunlukUcret = $araba['gunluk_ucret'];
                            $alisTarihi = $araba['alis_tarihi'];
                            $iadeTarihi = $araba['iade_tarihi'];
                            $aracFotograf = $araba['arac_fotograf'];
                            $id=$araba["id"];
                            //$query = mysqli_query($con, "SELECT * FROM arabalar where id='{$carId}' ");
                            
                            
                            echo "
                            
                            <img src='data:image/jpg;charset=utf8;base64,".base64_encode($araba['arac_fotograf'])."'/><br>
                            ".$araba['arac_adi']."
                            <br><br><br>
                            ";
                
                        }

                ?>

                <div class="payment-title">
                    <h1>Ödeme Bilgileri</h1>
                </div>
                <div class="container preload">
                    <div class="creditcard">
                        <div class="front">
                            <div id="ccsingle"></div>
                            <svg version="1.1" id="cardfront" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 750 471"
                                style="enable-background:new 0 0 750 471;" xml:space="preserve">
                                <g id="Front">
                                    <g id="CardBackground">
                                        <g id="Page-1_1_">
                                            <g id="amex_1_">
                                                <path id="Rectangle-1_1_" class="lightcolor grey" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                            C0,17.9,17.9,0,40,0z" />
                                            </g>
                                        </g>
                                        <path class="darkcolor greydark"
                                            d="M750,431V193.2c-217.6-57.5-556.4-13.5-750,24.9V431c0,22.1,17.9,40,40,40h670C732.1,471,750,453.1,750,431z" />
                                    </g>
                                    <text transform="matrix(1 0 0 1 60.106 295.0121)" id="svgnumber"
                                        class="st2 st3 st4">0123 4567 8910 1112</text>
                                    <text transform="matrix(1 0 0 1 54.1064 428.1723)" id="svgname"
                                        class="st2 st5 st6">Selin GÜNEY</text>
                                    <text transform="matrix(1 0 0 1 54.1074 389.8793)" class="st7 st5 st8">kart sahibi
                                        ismi</text>
                                    <text transform="matrix(1 0 0 1 479.7754 388.8793)"
                                        class="st7 st5 st8">expiration</text>
                                    <text transform="matrix(1 0 0 1 65.1054 241.5)" class="st7 st5 st8">kart
                                        numarası</text>
                                    <g>
                                        <text transform="matrix(1 0 0 1 574.4219 433.8095)" id="svgexpire"
                                            class="st2 st5 st9">01/23</text>
                                        <text transform="matrix(1 0 0 1 479.3848 417.0097)"
                                            class="st2 st10 st11">VALID</text>
                                        <text transform="matrix(1 0 0 1 479.3848 435.6762)"
                                            class="st2 st10 st11">THRU</text>
                                        <polygon class="st2" points="554.5,421 540.4,414.2 540.4,427.9 		" />
                                    </g>
                                    <g id="cchip">
                                        <g>
                                            <path class="st2" d="M168.1,143.6H82.9c-10.2,0-18.5-8.3-18.5-18.5V74.9c0-10.2,8.3-18.5,18.5-18.5h85.3
                        c10.2,0,18.5,8.3,18.5,18.5v50.2C186.6,135.3,178.3,143.6,168.1,143.6z" />
                                        </g>
                                        <g>
                                            <g>
                                                <rect x="82" y="70" class="st12" width="1.5" height="60" />
                                            </g>
                                            <g>
                                                <rect x="167.4" y="70" class="st12" width="1.5" height="60" />
                                            </g>
                                            <g>
                                                <path class="st12" d="M125.5,130.8c-10.2,0-18.5-8.3-18.5-18.5c0-4.6,1.7-8.9,4.7-12.3c-3-3.4-4.7-7.7-4.7-12.3
                            c0-10.2,8.3-18.5,18.5-18.5s18.5,8.3,18.5,18.5c0,4.6-1.7,8.9-4.7,12.3c3,3.4,4.7,7.7,4.7,12.3
                            C143.9,122.5,135.7,130.8,125.5,130.8z M125.5,70.8c-9.3,0-16.9,7.6-16.9,16.9c0,4.4,1.7,8.6,4.8,11.8l0.5,0.5l-0.5,0.5
                            c-3.1,3.2-4.8,7.4-4.8,11.8c0,9.3,7.6,16.9,16.9,16.9s16.9-7.6,16.9-16.9c0-4.4-1.7-8.6-4.8-11.8l-0.5-0.5l0.5-0.5
                            c3.1-3.2,4.8-7.4,4.8-11.8C142.4,78.4,134.8,70.8,125.5,70.8z" />
                                            </g>
                                            <g>
                                                <rect x="82.8" y="82.1" class="st12" width="25.8" height="1.5" />
                                            </g>
                                            <g>
                                                <rect x="82.8" y="117.9" class="st12" width="26.1" height="1.5" />
                                            </g>
                                            <g>
                                                <rect x="142.4" y="82.1" class="st12" width="25.8" height="1.5" />
                                            </g>
                                            <g>
                                                <rect x="142" y="117.9" class="st12" width="26.2" height="1.5" />
                                            </g>
                                        </g>
                                    </g>
                                </g>
                                <g id="Back">
                                </g>
                            </svg>
                        </div>
                        <div class="back">
                            <svg version="1.1" id="cardback" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 750 471"
                                style="enable-background:new 0 0 750 471;" xml:space="preserve">
                                <g id="Front">
                                    <line class="st0" x1="35.3" y1="10.4" x2="36.7" y2="11" />
                                </g>
                                <g id="Back">
                                    <g id="Page-1_2_">
                                        <g id="amex_2_">
                                            <path id="Rectangle-1_2_" class="darkcolor greydark" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                        C0,17.9,17.9,0,40,0z" />
                                        </g>
                                    </g>
                                    <rect y="61.6" class="st2" width="750" height="78" />
                                    <g>
                                        <path class="st3" d="M701.1,249.1H48.9c-3.3,0-6-2.7-6-6v-52.5c0-3.3,2.7-6,6-6h652.1c3.3,0,6,2.7,6,6v52.5
                    C707.1,246.4,704.4,249.1,701.1,249.1z" />
                                        <rect x="42.9" y="198.6" class="st4" width="664.1" height="10.5" />
                                        <rect x="42.9" y="224.5" class="st4" width="664.1" height="10.5" />
                                        <path class="st5"
                                            d="M701.1,184.6H618h-8h-10v64.5h10h8h83.1c3.3,0,6-2.7,6-6v-52.5C707.1,187.3,704.4,184.6,701.1,184.6z" />
                                    </g>
                                    <text transform="matrix(1 0 0 1 621.999 227.2734)" id="svgsecurity"
                                        class="st6 st7">985</text>
                                    <g class="st8">
                                        <text transform="matrix(1 0 0 1 518.083 280.0879)" class="st9 st6 st10">security
                                            code</text>
                                    </g>
                                    <rect x="58.1" y="378.6" class="st11" width="375.5" height="13.5" />
                                    <rect x="58.1" y="405.6" class="st11" width="421.7" height="13.5" />
                                    <text transform="matrix(1 0 0 1 59.5073 228.6099)" id="svgnameback"
                                        class="st12 st13">John Doe</text>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="form-container">
                    <div class="field-container">
                        <label for="name">Name</label>
                        <input id="name" maxlength="20" type="text">
                    </div>
                    <div class="field-container">
                        <label for="cardnumber">Card Number</label><span id="generatecard"></span>
                        <input id="cardnumber" type="text" pattern="[0-9]*" inputmode="numeric">
                        <svg id="ccicon" class="ccicon" width="750" height="471" viewBox="0 0 750 471" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                        </svg>
                    </div>
                    <div class="field-container">
                        <label for="expirationdate">Expiration (mm/yy)</label>
                        <input id="expirationdate" type="text" pattern="[0-9]*" inputmode="numeric">
                    </div>
                    <div class="field-container">
                        <label for="securitycode">Security Code</label>
                        <input id="securitycode" type="text" pattern="[0-9]*" inputmode="numeric">
                    </div>


                </div>
            </div>

            <div class="satisYapildi">
                
                <form name="satisForm" method="post" action = "üyeOlunduBireysel.php">      
                    <input type="submit" name="satis" value="Satışı Onayla">
                    
                    <input type='hidden' name="carId" value="<?php echo $id; ?>">
                    <input type='hidden' name='konum' value="<?php echo $konum; ?>">
                    <input type='hidden' name='aracAdi' value="<?php echo $aracAdi; ?>">
                    <input type='hidden' name='aracSinifi' value="<?php echo $aracSinifi; ?>">
                    <input type='hidden' name='yakitTipi' value="<?php echo $yakitTipi; ?>">
                    <input type='hidden' name='vitesTipi' value="<?php echo $vitesTipi ?>">
                    <input type='hidden' name='gunlukUcret' value="<?php echo $gunlukUcret; ?>">
                    <input type='hidden' name='alisTarihi' value="<?php echo $alisTarihi; ?>">
                    <input type='hidden' name='iadeTarihi' value="<?php echo $iadeTarihi; ?>">
                </form>
                    
                <?php

                    

                ?>
            </div>

        </div>
</body>

</html>