<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
  <table class="tabla">
    <tr id="row1">
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>
        <form action="ajaxForm.php" method="post">
          <input type="hidden" name="nrodoc" value="1">
          <input type="submit" value="Enviar">
      </td>
    </tr>
    <tr id="row2">
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>
        <form action="ajaxForm.php" method="post">
          <input type="hidden" name="nrodoc" value="2">
          <input type="submit" value="Enviar">
      </td>

    </tr>
    <tr id="row3">
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>
        <form action="ajaxForm.php" method="post">
          <input type="hidden" name="nrodoc" value="3">
          <input type="submit" value="Enviar">
      </td>

    </tr>
  </table>

  <script>
    $(document).ready(function() {
      $("form").submit(function(e) {
        e.preventDefault();
        var form = $(this);
        var url = form.attr("action");
        $.ajax({
          type: "POST",
          url: url,
          data: form.serialize(),
          success: function(data) {
            console.log(data);
            if (data == 1) {
              $("#row" + data).remove();
            }
          }
        });
      });
    });
  </script>
</body>

</html>