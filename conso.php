
    <div class="max-width select-pi">
      <h2>WHAT CONSUMPTION ?</h2>
    </div>
    <div class="row">
      <?php
      include_once('connect_class.php');
      if(isset($_POST['choice'])){
        $request = $bdd->query('SELECT * FROM `boitier` WHERE `id`="'.$_POST['choice'].'"');
        $data = $request->fetch();
        echo  '
        <div class="col small-12">
          <div class="row">
            <div class="col desktop-6">
              <img src="'.$data['src'].'" alt="'.$data['alt'].'" />
            </div>
            <div class="col desktop-6">
              <h3>Medium</h3>
              <p>
              Conso genre tout tout tout Lorem Ipsum et voilà sisi !Conso genre tout tout tout Lorem Ipsum et voilà sisi !
              </p>

              <button id="medium" name="medium" value="1">Take medium!</button>

            </div>
          </div>
        </div>
        <div class="col small-12">
          <div class="row">
            <div class="col desktop-6">
              <img src="'.$data['src'].'" alt="'.$data['alt'].'" />
            </div>
            <div class="col desktop-6">
              <h3>MAX</h3>
              <p>
              Conso genre tout tout tout Lorem Ipsum et voilà sisi !Conso genre tout tout tout Lorem Ipsum et voilà sisi !
              </p>

              <button id="max" name="max" value="1">Take max!</button>

            </div>
          </div>
        </div>

        ';
      }
      ?>


    </div>
    <script type="text/javascript">

    $("#medium").click(function(event){
      event.preventDefault();
      $.post({
        data:{conso:"medium"},
        url:"electric_price.php",
        dataType:"html",
        success:function(reponse){
          $("body").html(reponse);
        }
      });
    });
    $("#max").click(function(event){
      event.preventDefault();
      $.post({
        data:{conso:"max"},
        url:"electric_price.php",
        dataType:"html",
        success:function(reponse){
          $("body").html(reponse);
        }
      });
    });
    </script>
