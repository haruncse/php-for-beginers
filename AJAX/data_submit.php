<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ajax Form Demo</title>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
  <h2>Create User</h2>
  <form id="userForm">
    <label>Name: <input type="text" name="name" required></label><br>
    <label>Role: <input type="text" name="role" required></label><br>
    <button type="submit">Submit</button>
  </form>

  <pre id="output"></pre>

  <script>
    $(function () {
      $("#userForm").on("submit", function (e) {
        e.preventDefault();

        $.ajax({
          url: "/php-for-beginers/AJAX/data_get.php",   // backend endpoint
          type: "POST",            // HTTP method
          dataType: "json",        // expect JSON response
          data: {                  // form data (no JSON.stringify)
            name: $("input[name='name']").val(),
            role: $("input[name='role']").val()
          },
          success: function (response) {
            $("#output").text("Success:\n" + JSON.stringify(response, null, 2));
          },
          error: function (xhr, status, error) {
            $("#output").text("Error:\n" + xhr.responseText);
          }
        });
      });
    });
  </script>
</body>
</html>
