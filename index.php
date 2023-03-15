<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>My Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
</head>
<body>
  <div class="columns is-centered">
    <div class="column is-half">
      <form method="post" action="show.php">
        <div class="field">
          <label class="label">Enter your name:</label>
          <div class="control">
            <input name='name' class="input" type="text" placeholder="e.g. John Smith">
          </div>
        </div>
        <div class="field">
          <div class="control">
            <button type="submit" class="button is-primary is-fullwidth">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
