<?php
if(isset($_POST['conso'])){
  if(isset($_POST['price'])){
      $pricePerHour = $_POST['price'] * 0.0016;
      if($_POST['conso']=="medium"){
        $pricePerDay = $pricePerHour*12;
        $pricePerMonth = $pricePerHour*30;
        $pricePerYear=$pricePerMonth*12;
        echo'
        <h3>Sur une consommation moyenne de 12h/j</h3>
        <p>
          Consommation à la journée :'.$pricePerDay.'$ <br/>
          Consommation au mois :'.$pricePerMonth.'$<br/>
          Consommation à l\'année  :'.$pricePerYear.'$<br/>
        </p>

        ';
      }
      if($_POST['conso']=="max"){
        $pricePerDay = $pricePerHour*24;
        $pricePerMonth = $pricePerHour*30;
        $pricePerYear=$pricePerMonth*12;
        echo'
        <h3>Sur une consommation moyenne de 24h/j</h3>
        <p>
          Consommation à la journée :'.$pricePerDay.'$ <br/>
          Consommation au mois :'.$pricePerMonth.'$<br/>
          Consommation à l\'année  :'.$pricePerYear.'$<br/>
        </p>

        ';
      }
  }
}
?>
