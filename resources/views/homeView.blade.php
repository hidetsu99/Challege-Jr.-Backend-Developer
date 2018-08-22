<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Challenge - Jr. Backend Developer</h1>
    <form class="" action="/" method="post">
      {{csrf_field()}}
      <label for="">Number 3</label>
      <input type="text" name="textNumber3" value="">
      <br>
      <label for="">Number 5</label>
      <input type="text" name="textNumber5" value="">
      <br>
      <label for="">Multiples of 3 and 5</label>
      <input type="text" name="Multiples" value="">
      <br>
      <input type="submit" name="submit" value="Go!">
    </form>
    <form class="" action="/simple" method="post">
      {{csrf_field()}}
      <input type="submit" name="submit" value="Only resolution without choosing the words">
    </form>
  </body>
</html>
