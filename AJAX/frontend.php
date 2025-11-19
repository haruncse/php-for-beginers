<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8">
  <title>Ajax Demo</title>
  <meta name="csrf-token" content="YOUR_TOKEN_IF_YOU_USE_ONE">
  <style>
    .error { color: #b00020; }
    .success { color: #0a7a2f; }
    .loading { opacity: 0.6; pointer-events: none; }
  </style>
</head>
<body>
  <form id="userForm">
    <label>নাম:
      <input type="text" name="name" required>
    </label>
    <label>ইমেইল:
      <input type="email" name="email" required>
    </label>
    <button type="submit">পাঠান</button>
  </form>

  <div id="response" role="alert" aria-live="polite"></div>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script>
    $(function () {
      const $form = $('#userForm');
      const $resp = $('#response');

      function setLoading(state) {
        $form.toggleClass('loading', state);
      }

      $form.on('submit', function (e) {
        e.preventDefault();
        $resp.removeClass('error success').text('');

        const formData = $form.serialize(); // application/x-www-form-urlencoded

        setLoading(true);
        $.ajax({
          url: '/php-for-beginers/AJAX/save_user.php',
          method: 'POST',
          data: formData,
          dataType: 'json',       // expect JSON back
          timeout: 15000,         // 15s
          headers: {
            // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') || ''
          }
        })
        .done(function (res, textStatus, jqXHR) {
          if (res && res.status === 'success') {
            $resp.addClass('success').text(res.message || 'সফলভাবে সম্পন্ন হয়েছে।');
            // Optional: use res.data
          } else {
            $resp.addClass('error').text(res.message || 'দুঃখিত, সমস্যা হয়েছে।');
          }
        })
        .fail(function (jqXHR, textStatus) {
          let msg = 'নেটওয়ার্ক বা সার্ভার ত্রুটি হয়েছে।';
          try {
            const json = JSON.parse(jqXHR.responseText);
            if (json && json.message) msg = json.message;
          } catch (_) {}
          $resp.addClass('error').text(msg);
        })
        .always(function () {
          setLoading(false);
        });
      });
    });
  </script>
</body>
</html>
