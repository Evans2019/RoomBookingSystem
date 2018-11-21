<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Vincent Garreau" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
        <title>Laravel</title>
        <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
       

        <!-- Styles -->
        <style>
            body {
                    font: 300 18px/1.5 'Roboto', sans-serif;
                    color: #333;
                    background: url('../images/bg.jpg') no-repeat;
                    background-size: cover;
                    }

                    .container {
                    max-width: 640px;
                    margin: 50px auto;
                    padding: 35px;
                    box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
                    background: #fff;
                    border-radius: 10px;
                    }

                    .holder {
                    border-bottom: 1px dashed #ccc;
                    padding: 0 0 30px;
                    margin: 0 0 30px;
                    }

                    .row {
                    margin: 0 0 15px;
                    }

                    h2 {
                    font-weight: 500;
                    font-size: 30px;
                    margin: 0 0 20px;
                    }

                    /* custom radio */

                    .customRadio input[type="radio"] {
                    position: absolute;
                    left: -9999px;
                    }

                    .customRadio input[type="radio"]+label {
                    position: relative;
                    padding: 3px 0 0 40px;
                    cursor: pointer;
                    }

                    .customRadio input[type="radio"]+label:before {
                    content: '';
                    background: #fff;
                    border: 2px solid #1cbe9d;
                    height: 25px;
                    width: 25px;
                    border-radius: 50%;
                    position: absolute;
                    top: 0;
                    left: 0;
                    }

                    .customRadio input[type="radio"]+label:after {
                    content: '';
                    background: #1cbe9d;
                    width: 15px;
                    height: 15px;
                    border-radius: 50%;
                    position: absolute;
                    top: 5px;
                    left: 5px;
                    opacity: 0;
                    transform: scale(2);
                    transition: transform 0.3s linear, opacity 0.3s linear;
                    }

                    .customRadio input[type="radio"]:checked+label:after {
                    opacity: 1;
                    transform: scale(1);
                    }

                    /* custom checkbox */

                    .customCheckbox input[type="checkbox"] {
                    position: absolute;
                    left: -9999px;
                    }

                    .customCheckbox input[type="checkbox"]+label {
                    position: relative;
                    padding: 3px 0 0 40px;
                    cursor: pointer;
                    }

                    .customCheckbox input[type="checkbox"]+label:before {
                    content: '';
                    background: #fff;
                    border: 2px solid #1cbe9d;
                    border-radius: 3px;
                    height: 25px;
                    width: 25px;
                    position: absolute;
                    top: 0;
                    left: 0;
                    }

                    .customCheckbox input[type="checkbox"]+label:after {
                    content: '';
                    border-style: solid;
                    border-width: 0 0 2px 2px;
                    border-color: transparent transparent #1cbe9d #1cbe9d;
                    width: 15px;
                    height: 8px;
                    position: absolute;
                    top: 6px;
                    left: 5px;
                    opacity: 0;
                    transform: scale(2) rotate(-45deg);
                    transition: transform 0.3s linear, opacity 0.3s linear;
                    }

                    .customCheckbox input[type="checkbox"]:checked+label:after {
                    opacity: 1;
                    transform: scale(1) rotate(-45deg);
                    }

                    /* custom select */

                    .customSelect select {
                    width: 100%;
                    height: 100%;
                    background: none;
                    border: none;
                    -webkit-appearance: none;
                    padding: 0 50px 0 20px;
                    cursor: pointer;
                    font: 300 18px/1.5 'Roboto', sans-serif;
                    text-indent: 5px;
                    }

                    .customSelect select::-ms-expand {
                    display: none;
                    }

                    .customSelect select:focus {
                    outline: none;
                    }

                    .customSelect option {
                    font: 300 16px/1.5 'Roboto', sans-serif;
                    }

                    .customSelect .select {
                    position: relative;
                    background: #fff;
                    border: 1px solid #1cbe9d;
                    height: 50px;
                    cursor: pointer;
                    }

                    .customSelect .select:before {
                    content: '';
                    background: #1cbe9d;
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    right: 0;
                    width: 40px;
                    pointer-events: none;
                    }

                    .customSelect .select:after {
                    content: '';
                    width: 0;
                    height: 0;
                    border-style: solid;
                    border-width: 10px 7px 0;
                    border-color: #fff transparent transparent transparent;
                    position: absolute;
                    right: 11px;
                    top: 50%;
                    transform: translateY(-50%);
                    }

                    /* custom toggle switch */
                    .customToggle input[type="checkbox"] {
                    position: absolute;
                    left: -9999px;
                    }

                    .customToggle label {
                    border: 1px solid #ccc;
                    background: #ccc;
                    border-radius: 25px;
                    position: relative;
                    width: 80px;
                    height: 36px;
                    display: inline-block;
                    vertical-align: top;
                    font-size: 16px;
                    transition: background 0.3s linear;
                    cursor: pointer;
                    }

                    .customToggle label:before {
                    content: '';
                    background: #fff;
                    height: 28px;
                    width: 33px;
                    position: absolute;
                    top: 3px;
                    left: 3px;
                    border-radius: 25px;
                    transform: translateX(0);
                    transition: transform 0.2s cubic-bezier(0.1, 0.8, 0.32, 1.2), background 0.2s linear;
                    }
                    @media ( min-width: 768px ) {
                        .grid-divider {
                            position: relative;
                            padding: 0;
                        }
                        .grid-divider>[class*='col-'] {
                            position: static;
                        }
                        .grid-divider>[class*='col-']:nth-child(n+2):before {
                            content: "";
                            border-left: 1px solid #DDD;
                            position: absolute;
                            top: 0;
                            bottom: 0;
                        }
                        .col-padding {
                            padding: 0 15px;
                        }
                    }
        </style>
    </head>
    <body> 
      </div>
        <div class="flex-center position-ref full-height">
           

            <div class="container">
                    <div class="holder">
                            <label for="exampleFormControlSelect1" style="font-size:22px;">ROoom Booking System</label>
                            <br>
                                    <div class="row">
                                      <div class="col">
                                          <i class=" fa fa-calendar" style="font-size:58px;color:black">
                                              
                                          </i>
                                        </div>
                                      <div class="col">
                                          
                                          <div id="time" style="font-size:38px"></div>
                                          <div id="date"></div>
                                    </div>
                                    </div>
                                    <br>
                                    <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                              <a id="home" class="nav-link active" href="#">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                    <a id="BookRoom" class="nav-link " href="#">Book Room</a>
                                            </li>
                                          </ul>    
                                          <br>
                            <br>
                            <div class="row" >
                              <div class="col">
                                    <div class="Rooms">
                                            <div class="row">
                                              <div class="col">
                                                    <label for="exampleFormControlSelect1" style="font-size:22px;">Room One</label><br>
                                                    <label for="exampleFormControlSelect1" style="font-size:12px;">Room One is Already Booked</label><br>
                                                    <button type="button" class="btn btn-outline-secondary">Info</button>
                                                    <div class="holder"></div>
                                                    <label for="exampleFormControlSelect1" style="font-size:22px;">Room Two</label><br>
                                                    <label for="exampleFormControlSelect1" style="font-size:12px;">Available</label><br>
                                                    <button type="button" class="btn btn-outline-secondary">Info</button>
                                                    <div class="holder"></div>
                                                    <label for="exampleFormControlSelect1" style="font-size:22px;">Room Three</label><br>
                                                    <label for="exampleFormControlSelect1" style="font-size:12px;">Available</label><br>
                                                    <button type="button" class="btn btn-outline-secondary">Info</button>
                                                    <div class="holder"></div>
                                                    <label for="exampleFormControlSelect1" style="font-size:22px;">Rooms Four</label><br>
                                                    <label for="exampleFormControlSelect1" style="font-size:12px;">Available</label><br>
                                                    <button type="button" class="btn btn-outline-secondary">Info</button>
                                            </div>
                                          </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Booking" >
                            <label for="exampleFormControlSelect1">You can book Room Here</label><br>
                                    <label for="exampleFormControlSelect1" style="font-size:12px;">Enter Your Name here</label>
                                    <input type="text" class="form-control" id="InputName" aria-describedby="Name" placeholder="Enter Your Name">
                                    <label for="exampleFormControlSelect1" style="font-size:12px;">Enter Your Email address here</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                    <label for="exampleFormControlSelect1" style="font-size:12px;">Enter Description of your meeting (Optional)</label>
                                    <textarea class="form-control" rows="5" id="comment"></textarea>
                                    <label for="exampleFormControlSelect1" style="font-size:12px;">Enter Date</label>
                                    <input type="date" class="form-control" id="InputDate" aria-describedby="Date" placeholder="Enter Date">
                                    <label for="exampleFormControlSelect1" style="font-size:12px;">Enter Time</label>
                                    <input type="time" class="form-control" id="Inputtime" aria-describedby="Time" placeholder="Enter Time">
                                    <div class="form-group">
                                            <label for="exampleFormControlSelect1" style="font-size:12px;">Choose Room Number</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                            </select>
                                         </div>
                                         <button type="button" class="btn btn-outline-success">Book</button>
                                </div>    
                        </div> 
                        
            </div>
            
        </div>
        
    </body>
   
    <script>
            $( document ).ready(function() {


                function checkTime(i) {
                if (i < 10) {
                    i = "0" + i;
                }
                return i;
                }

                function startTime() {
                var today = new Date();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();
                var month = today.getMonth();
                var day = today.getUTCDate();
                var month = today.getMonth();
                var year = today.getFullYear();
                // add a zero in front of numbers<10
                m = checkTime(m);
                s = checkTime(s);
                document.getElementById('time').innerHTML = h + ":" + m ;
                document.getElementById('date').innerHTML = day+"/"+month+"/"+year;
                
                t = setTimeout(function() {
                    startTime()
                }, 500);
                }
                startTime();
                
                
                
                $(".Booking").hide();

 $(".Rooms").hide();
                
                    $('#home').click(function() {
                    $(this).addClass('active');
                    $("#BookRoom").removeClass('active');
                    $(".Rooms").slideDown(800);
                    $(".Booking").hide();
                });

                
                $('#BookRoom').click(function() {
                   
                    $(this).addClass('active');
                    $("#home").removeClass('active');
                    $(".Booking").slideDown(800);
                    $(".Rooms").hide();
                });
                
                                
            });

    </script>
</html>
