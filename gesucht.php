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
  <div class="row">
  <div class="col s7"><div class="row">
      <form  >
          <div class="row" style="margin-top:75px;">
              <div class="input-field col s12 ">
                  <input  type="text" class="validate " style=" box-shadow: 2px 2px 7px #e0e0e0;">

                  <label ><i class="material-icons prefix">search</i></label>
              </div>
          </div>
      </form>
  </div></div>
        <div class="col s5"><div class="row">
          <div  style="width:90%;float:right;margin:30px;margin-top:90px">
            <div class="card">
              <div class="card-image">
                <img src="images/sample-1.jpg">
                <span class="card-title">Card Title</span>
              </div>
              <div class="card-content" style="padding:20px;">
                <div>
                    </div>
                    Styles make the formatting job much easier
                    <span class="readmore">... <i class=" material-icons" style="font-size:11;">add</i></span>
                    <div class="message">
                      <?php echo "To give an attractive look to web sites, styles are heavily used.
                      JQuery is a powerful JavaScript library that allows us to add dynamic elements to our web
                      sites. Not only it is easy to learn, but it's easy to implement too. A person must have a
                      good knowledge of HTML and CSS and a bit of JavaScript. jQuery is an open source project
                      that provides a wide range of features with cross-platform compatibility."; ?>
                    </div>
              </div>
              </div>

            </div>
          </div>
        </div>
        </div>

      </div>



<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>
