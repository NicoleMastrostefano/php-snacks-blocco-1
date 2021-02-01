<!-- PHP Snack #4:
Creiamo due pagine php. La prima farà una chiamata GET alla seconda attraverso un form.
Il form avrà un input di testo in cui inserire il nome di
un invitato.
Inseriamo nell’altro file una lista di invitati. Se la nostra query è contenuta nella lista degli invitati stampare ok, altrimenti ko. -->



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="get.php" method="get">
      <input type="text" name="nome"> Nome<br />
      <input type="submit" value="Elabora"><br />
      <input type="reset" value="Annulla">
    </form>
  </body>
</html>
