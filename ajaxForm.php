<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prueba Ajax</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <h1>Prueba Ajax</h1>
  <div class="resultado">

  </div>
  <script>
    $(document).ready(function() {
      $.ajax({
        url: "https://api.coincap.io/v2/assets",
        type: "GET",
        success: function(data) {
          for (let i = 0; i < data.data.length; i++) {
            $(".resultado").append(`
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">${data.data[i].name}</h5>
                <h6 class="card-subtitle mb-2 text-muted">${data.data[i].symbol}</h6>
                <p class="card-text">${data.data[i].priceUsd}</p>
              </div>
            </div>
            `);
          }
        },
        error: function(error) {
          console.log(error);
        }
      });
    });
  </script>

</body>

</html>