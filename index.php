 <form action="action.php" method="post" validate>
  <fieldset>
    <legend>Personal information:</legend>
    First name:<br>
    <input type="text" name="firstname" value="kamal" size="40"><br>
    Last name:<br>
    <input type="text" name="lastname" value="raj"><br><br>

    E-mail: <input type="email" name="email" value="kamalraj488@gmail.com"><br>
    <br><br>
    <title>Page Title</title>
    <h>Gender;  </h><br>
    <input type="radio" name="gender" value="male" checked> Male<br>
    <input type="radio" name="gender" value="female"> Female<br>
    <input type="radio" name="gender" value="other"> Other<br><br>
    <br>

    <title>Page Title</title>
    <h>Select ur car;  </h><br>
    
    <select name="cars">
      <option value="volvo">Volvo</option>
      <option value="saab">Saab</option>
      <option value="fiat">Fiat</option>
      <option value="audi">Audi</option>
    </select>
    <br><br>
    <input type="submit" value="submit">
    <input type="reset" value="reset">
    <br><br>

    <style>
      body {background-color: powderblue;}
    </style>

</form>

