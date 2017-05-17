<div class="max-width select-pi">
  <h2>WHAT'S YOUR ELECTRIC PRICE?</h2>
</div>
<div class="max-width">
  <h3>Enter your electric price in kW/h here !</h3>
  <form method="post">
<?php
  if(isset($_POST['conso'])){
    echo '<input id="conso" type="hidden" name="conso" value="'.$_POST['conso'].'" />';
  }
?>
    <input type="text" id="price" name="price" placeholder="Your electric price!" /><button id="validate" name="send">VALIDATE</button>
  </form>
</div>
<script type="text/javascript">
  $("#validate").click(function(event){
    event.preventDefault();
    var conso=$("#conso").val();
    var price=$("#price").val();
    $.post({
      data:{conso:conso,price:price},
      url:"result_conso.php",
      dataType:"html",
      success:function(reponse){
        $("body").html(reponse);
      }
    });
  });
</script>
