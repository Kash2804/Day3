<html>
  <body>
     <head><b>REGISTRATION FORM</b></head>
      <form method="POST" action="register.php">
       <table>
          <tr>
             <td>FirstName</td>
             <td><input type="text" name="txt1" required/></td>
          </tr>
          <tr>
            <td>LastName</td>
            <td><input type="text" name="txt2" required/></td>
          </tr>
          <tr>
            <td>Email Address</td>
            <td><input type="email" name="txt3"  required/></td>
          </tr>
          <tr>
            <td>Age</td>
            <td><input type="number" name="txt4" min="1" max="100" required/></td>
          </tr>
          <tr>
            <td>Gender</td>
            <td><input type="radio"  name="txt5"  required />Male</td>

            <td><input type="radio"  name="txt5"  required/>Female</td>
          </tr>
          <tr>
            <td><input type="submit"/></td>
            <td><input type="reset"/></td>
          </tr>
       </table>
     </form>

  </body>
</html>