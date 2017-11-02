<!DOCTYPE html>
<html>
<head>
  <script src="http://ajax.microsoft.com/ajax/jquery/jquery-1.4.2.js" type="text/javascript"></script>
  <script type="text/javascript">
           $(document).ready(function() {
               $(".message").hide();
               $("span.readmore").click(function(){
                   $(".message").show("speed");
                   $(this).hide();
               });
           });
       </script>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
  <div class="row" style="padding:70px">
  <div class="col s7"><div class="row">
      <form  >
          <div class="row" style="margin-right:130px">
              <div class="input-field col s12 ">
                  <input  type="text" class="validate" value="<?php if(isset($_POST['search'])){ echo $_POST['searchtext']; }?>" style=" box-shadow: 2px 2px 7px #e0e0e0;">

                  <label ><i class="material-icons prefix">search</i></label>
              </div>
          </div>
      </form>
  </div></div>
        <div class="col s5 z-depth-2"  style="margin-top:85px ">
          <!--<div class="row" style="width:90%;float:right;margin:30px;margin-top:90px">
            <div class="card">
              <div class="card-content" style="padding:20px;">
                    Styles make the formatting job much easier
                    <span class="readmore">... <i class=" material-icons" style="font-size:11;">add</i></span>
                    <div class="message">
                      <?php //costomer text. ?>

                    </div>
              </div>
            </div> -->
            <div ></div>
      <div class="section">
        <h5>Section 1</h5>
        <p>Stuff</p>
      </div>
      <div class="divider"></div>
      <div class="section">
        <h5>Section 2</h5>
        <p>Stuff</p>
      </div>
      <div class="divider"></div>
      <div class="section">
        <h5>Section 3</h5>
        <p>Stuff</p>
      </div>
         </div>

        </div>





<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>
