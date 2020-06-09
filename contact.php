
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="contact.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="formular">
        <form action="contactform.php" method="POST">
            <div class="rand">
              <div class="camp-label">
                <label for="nume">Nume</label>
              </div>
              <div class="camp-input">
                <input id="nume" type="text" name="nume" placeholder="Numele tau...">
              </div>
            </div>
            <div class="rand">
              <div class="camp-label">
                <label for="prenume">Prenume</label>
              </div>
              <div class="camp-input">
                <input id="prenume" type="text" name="prenume" placeholder="Prenumele tau">
              </div>
            </div>
            <div class="rand">
                <div class="camp-label">
                  <label for="email">Email</label>
                </div>
                <div class="camp-input">
                  <input id="email" type="text" name="email" placeholder="Email-ul tau">
                </div>
            </div>
            <div class="rand">
                <div class="camp-label">
                  <label for="subiect">Subiect</label>
                </div>
                <div class="camp-input">
                  <input id="subiect" type="text" name="subiect" placeholder="Subiectul mesajului">
                </div>
            </div>
            <div class="rand">
              <div class="camp-label">
                <label for="mesaj">Mesaj</label>
              </div>
              <div class="camp-input">
                <textarea id="mesaj" name="mesaj" placeholder="Scrie ceva..." style="height:200px"></textarea>
              </div>
            </div>
            <div class="rand">
              <input type="submit" value="Submit" name="submit">
            </div>
            </form>
    </div>
      
</body>
</html>