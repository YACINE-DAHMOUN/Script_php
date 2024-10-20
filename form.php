<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</form></title>
</head>
<body>
<form  action="thanks.php" method="POST">
    <div>
      <label for="fname">Nom :</label>
      <input type="text"  id="fname"  name="user_fname">
    </div>
    <div>
      <label for="lname">Prénom :</label>
      <input type="text"  id="lname"  name="user_lname">
    </div>
    <div>
      <label  for="email">Courriel :</label>
        <input  type="email"  id="email"  name="user_email">
    </div>
    <div>
      <label for="Phone number">Phone Number</label>
      <input type="Phone number" id="Phone number" name="user_phone number">
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div>
      <label for="Sujet">choissisez un Sujet : </label>
      <select id="Sujet" name="Sujet" size="1">
        <option value="HTML">HTML</option>
        <option value="CSS">CSS</option>
        <option value="PHP">PHP</option>
      </select>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
  
    
</body>
</html>