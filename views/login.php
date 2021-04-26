  <?php
  ini_set('display_errors', 1);
  if( isset($display_error) ){
    echo '<div>Wrong credentials</div>';
  }
?>


  <form action="/login" method="POST">
    <input name="email" type="text" placeholder="email">
    <input name="password" type="password" placeholder="password">
    <button>Login</button>
  </form>

