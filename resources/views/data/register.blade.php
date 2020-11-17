<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!--Heading-->
    <h2>Buat Account Baru!</h2>
    <h3>Sign Up Form</h3>
    
    <!--Form Input Text-->
    <form action="/welcome" method="POST" >
    @csrf
        <label for="User First Name">First Name: </label><br>
          <input type="text" name = "firstname" ><br><br>
        <label>Last Name :</label><br>
          <input type="text" name = "lastname" ><br><br>
          
    <!--Input Radio-->
        <label> Gender: </label><br>
          <input type="radio" name="Gender"> Male <br>
          <input type="radio" name="Gender"> Female <br>
          <input type="radio" name="Gender"> Other <br><br>

    <!--Input Select-->
        <label> Nationality:</label><br>
          <select>
            <option value="Indonesian">Indonesian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Thailand">Thailand</option>
          </select><br><br>

    <!--Input Check Box-->
        <label>Language Spoken</label><br>
          <input type="checkbox" name="Indonesia" value="0"> Bahasa Indonesia <br>
          <input type="checkbox" name="English" value="0"> English <br>
          <input type="checkbox" name="Arabic" value="0"> Arabic <br>
          <input type="checkbox" name="Japanese" value="0"> Japanese <br><br>

    <!--Text Area-->
        <label>Bio</label><br>
          <textarea cols="25" rows="10"></textarea><br><br>
          
    <!--Submit-->    
          <input type="Submit" value="Sign Up"><br> 
    </form>

</body>
</html>