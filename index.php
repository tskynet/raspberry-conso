<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="css/jquery-ui.css" />
    <script type="text/javascript" src="js/jQuery.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <link type="text/css" rel="stylesheet" href="font-awesome.css" />
    <link type="text/css" rel="stylesheet" href="css/grid.css" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <title>Raspberry</title>
  </head>
  <body>
    <div class="max-width select-pi">
      <h2>SELECT YOUR BOX PI</h2>
    </div>

    <div class="row">
      <?php
        include_once('connect_class.php');
        $request = $bdd->query('SELECT * FROM `boitier`');
        while($data = $request->fetch()){
          echo'
          <div class="col desktop-3 medium-4 small-6">
            <img src="'.$data['src'].'" alt="'.$data['alt'].'" />
            <h3>'.$data['title'].'</h3>
            <span>'.$data['price'].'$</span>
            <button name="choice" value="'.$data['id'].'" onclick="validate('.$data['id'].')" ">Chose this !</button>
          </div>
          ';
        }
      ?>


  </body>
  <script type="text/javascript">
    function validate(id){
      $.post({
        data:{choice:id},
        url:"conso.php",
        dataType:"html",
        success:function(reponse){
          $("body").html(reponse);
        }
      });

    }

        function conso(choice){
          $.post({
            data:{conso:choice},
            url:"electric_price.php",
            dataType:"html",
            success:function(reponse){
              $("body").html(reponse);
            }
          });

        }

  </script>
</html>
