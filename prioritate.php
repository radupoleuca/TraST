<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
    <title>Indicatoare de prioritate</title>
    <link rel="stylesheet" type="text/css" href="avertizare.css">
	<link rel="stylesheet" type="text/css" href="antet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
    <header>
        <div id="logo"><img src="imagini/logooo.png"></div>
        <nav class="meniu">  
           <ul>
               <li><a href="index.php">HOME</a></li>
               <li><a href="index.php#about">ABOUT</a></li>
               <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">COUNTRY</a>
                   <div class="dropdown-content">
                       <a href="#"><img src="imagini/rom1.png" class="miniimg">ROMANIA</a>
                       <a href="#"><img src="imagini/sua1.png" class="miniimg">SUA</a>
                   </div>
               </li>
			   <li><a href="#contact.html">Contact</a></li>
               <li><?php if(isset($_SESSION['email'])): ?>
                            <a href="logout.php">Logout</a>
                        <?php else: ?>
                            <a href="login.php">Login</a>
                        <?php endif; ?></li>
             </ul>    
        </nav>
   </header>  
   
   <div class="progress-container">
			<div class="progress-bar" id="myBar"></div>
		</div>

   <div class="titlu">
    <h1>Indicatoare de prioritate</h1>
    </div>

    <div class="curbaT">
        <img src="prioritate/1.png" class="img" > 
        <p class="p1">Prioritate fata de circulatia din sens invers – Acest indicator se monteaza in zonele in care portiunea de drum este ingustata, astfel incat 2 autovehicule (indiferent de categorie) nu au loc sa treaca simultan. De regula, inaintea indicatorului “Prioritate fata de circulatia din sens invers” se monteaza indicatorul de “Drum Ingustat”.
            Soferii care intalnesc acest indicator nu trebuie sa faca nimic special, ei avand prioritata fata de toate celelalte autovehicule care circula din sens invers si care sunt obligate sa cedeze trecerea.</p>
    </div>

    <div class="curbaD">
        <img src="prioritate/2.png" class="img2" > 
        <p class="p2">Prioritate pentru circulatia din sens invers – Ca si indicatorul “Prioritate fata de circulatia din sens invers”, si acesta se monteaza pe sectiunile inguste de drum, in care 2 autovehicule care circula din sensuri opuse nu au loc sa treaca simultan. Atunci cand soferii intalnesc acest indicator pe sensul lor de mers, sunt obligati sa cedeze prioritatea pentru toate vehiculele care vin din sens opus, cu conditia ca acest lucru sa nu fie reglementat de un panou complementar, care sa mentioneze carei categorii de vehicule se adreseaza indicatorul principal.</p>
    </div>
    
    <div class="curbaT">
        <img src="prioritate/3.png" class="img" >
        <p class="p1">Drum cu prioritate – Acest indicator poate fi intalnit in mai multe locuri: in intersectiile din orase (unde de regula este insotit de un panou aditional care arata directia de drum care are prioritate), inaintea intersectiilor cu drumuri fara prioritate, precum si la inceputul sectoarelor de drum in care cei care circula pe directia respectiva au prioritate. Drumurile care se intersecteaza cu un sector de drum care pica sub incidenta indicatorului de prioritate au montate inaintea intersectiei fie semnul de STOP, fie pe cel de “Cedeaza Trecerea”.</p>
    </div>

    <div class="curbaD">
        <img src="prioritate/4.png" class="img2" >
        <p class="p2">Sfarsitul drumului cu prioritate – Indicatorul acesta se monteaza cu 50-100 de metri inainte de o intersectie si are rolul de a informa soferii ca in urmatoarea intersectie pe care o vor parcurge nu vor mai avea prioritatea conferita de indicatorul de “Drum cu prioritate”. Astfel, in lipsa oricaror alte indicatoare se va aplica prioritatea de dreapta sau se vor asculta eventualele indicatii ale politistilor rutieri.</p>
    </div>
    
    <div class="curbaT">
        <img src="prioritate/5.png" class="img" >
        <p class="p1"> STOP sau Oprire – Indicatorul STOP sau Oprire ii obliga pe toti cei care il intalnesc sa opreasca masina in locul in care au vizibilitatea maxima, dar fara a intra in intersectie, si sa astepte pana ce toate masinile care circula pe drumul cu prioritate sa treaca. Se monteaza cel mai adesea in locurile cu vizibilitate redusa, precum si pe drumurile fara prioritate.</p>
    </div>

    <div class="curbaD">
        <img src="prioritate/6.png" class="img2" >
        <p class="p2">Cedeaza trecerea – Atunci cand soferii intalnesc pe sensul de mers acest indicator trebuie sa cedeze prioritatea tuturor vehiculelor care circula pe drumul principal, dar nu sunt obligati sa opreasca masina daca pe drumul principal nu circula vehicule. Se monteaza inaintea intersectiei a unui drum neprioritar cu un drum prioritar.</p>
    </div>
    
	 <form method="post" action="capitolTerminat.php">
		<input class="buton-verif" type="submit" name="progres-prioritate" value="Capitol terminat">  
	</form>

	<div class="form-comment">
        <form>
    <h2>Lasati un comentariu!</h2>
    <label for="name"><b><i>Nume si prenume:</i></b></label>
    <input type="text" placeholder="Popescu Georgel" name="name" required>
    <label for="email" ><b><i>Email:</i></b></label>
    <input type="mail" placeholder="popescu@gmail.com"  name="email" required>
    <br>
    <textarea class="comment">Scrie propriul comentariu aici...</textarea>
    <br>
    <button type="submit" class="logBott">Trimite comentariu</button>
		</form>
   </div>
  
   <script type="text/javascript" src="bara-progres.js"></script>

</body>
</html>