# Partie 0 :
1. `$v1` et `$v2` ne partagent pas la même valeur de `$marque`  car chaque objet a sa propre valeur . 
# Partie 1 :
## Expérimentation

### l'erreur affiché  pour  "" echo $p->cin; ""  :
Fatal error: Uncaught Error: Cannot access private property Personne::$cin in C:\xampp\htdocs\web_s3\TP4\TP04-PHP-SARA_EJEKA\tp_poo\partie1.php:52 Stack trace: #0 {main} thrown in C:\xampp\htdocs\web_s3\TP4\TP04-PHP-SARA_EJEKA\tp_poo\partie1.php on line 52
### l'erreur affiché  pour  "" echo $p->dateNaissance; ""  :
Fatal error: Uncaught Error: Cannot access private property Personne::$dateNaissance in C:\xampp\htdocs\web_s3\TP4\TP04-PHP-SARA_EJEKA\tp_poo\partie1.php:53 Stack trace: #0 {main} thrown in C:\xampp\htdocs\web_s3\TP4\TP04-PHP-SARA_EJEKA\tp_poo\partie1.php on line 53
### l'erreur affiché  pour  "" echo $p->getAge(); ""  :
Fatal error: Uncaught Error: Call to private method Personne::getAge() from global scope in C:\xampp\htdocs\web_s3\TP4\TP04-PHP-SARA_EJEKA\tp_poo\partie1.php:52 Stack trace: #0 {main} thrown in C:\xampp\htdocs\web_s3\TP4\TP04-PHP-SARA_EJEKA\tp_poo\partie1.php on line 52

1. 2. il est  dangereux de laisser `cin` en `public` car il va être accessible partout .
1. 3.  `getAge()` est privée : elle n'est pas  donc inutile , elle utile car elle sécuris. on l'utilise en l'appelant en interne par d'autres méthodes de la classe pour calculer et fournir l'âge en toute sécurité .
1. 4.   elle devient accéssible depuis les classes filles seulement et inaccéssible depius le scripte principal .

# Partie2 :

### 2.1 Constructeur avec valeurs par défaut

2. 1. a. Avec 'new Voiture("Noire")', on a un nouveau objet avec un couleur Noire de type string et vitesse prend valeur par défaut  AVec `new Voiture(120)` , on a un nouveau objet avec un couleur 120 (c'est un entier mais elle est declaree comme couleur qui est string ) de type string et vitesse prend valeur par défaut .
2. 2. b. l'avantage de cette écriture est de simplifier  le code.

### 2.2 Le piège des deux constructeurs 
2. 2. a. Dans l'exécution , on a un erreur :
Fatal error: Cannot redeclare Personne::__construct() in C:\xampp\htdocs\web_s3\TP4\TP04-PHP-SARA_EJEKA\tp_poo\partie1.php on line 18  
car on a  déclaré deux fois la méthode __construct dans la même classe .
2. 2. b. la solution en PHP consiste à utiliser des valeurs par défaut pour les paramètres de la méthode (voir le code ).
### 2.3 Le destructeur
2. 3. a. Dans quel ordre les trois messages s'affichent dans l'orde (selon leurs ordre dans le code créée , puis  détruite puis dernier echo )
2. 3. b. Apres suppression , l'ordre change et les message devient :
Voiture Blanche créée.
Fin du script.
Voiture Blanche détruite.
car le  PHP libère la mémoire à  la fin .
2. 3. c. Apres avoir  créez deux objets `$a` et `$b`, sans `unset`, les objets sont  detruit dans l' ordre inverse  de leur  création c-à-d si  la premiére qui sera détruit est $b puis $a.


# Paetie 3 :

### Questions 
3. 1.  voir le code .
3. 2. avec `__set` , si on écrit  `$p->nom = "X"` si `nom` est `private` , l'affichage est normal .
      Sans `__set` , dans l'execution on a un erreur  : "Fatal error: Uncaught Error: Cannot access private property Personne::$nom" car le nom est `private` .