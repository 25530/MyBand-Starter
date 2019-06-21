<?php include 'header.php';?>

<body>
<div class="contactainer">
  <div style="text-align:center">
    <h2>Neem Contact met mij op</h2>
    <p>Neem gezellig contact met mij op!! :)</p>
  </div>
  <div class="row">
    <div class="coluymn">
      <img src="images/gezichtje.png">
    </div>
    <div class="column">
      <form id="veldje" action="/action_page.php">
        <label for="fname">Voornaam</label>
        <input type="text" id="fname" name="firstname" placeholder="Jouw Voornaam..">
        
        <label for="lname">Achternaam</label>
        <br>
        <br>
        <input type="text" id="lname" name="lastname" placeholder="Jouw Achternaam..">
        <br>
        <br>
        <label for="subject">Stel hier uw vraag</label>
        <br>
        <br>
        <textarea id="subject" name="subject" placeholder="Schrijf hier.." style="height:170px"></textarea>
        <input type="submit" value="Verstuur">
      </form>
    </div>
  </div>
</div>

</body>
<?php include 'footer.php';?>