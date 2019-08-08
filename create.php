
<?php
require 'db.php';
$message = '';
if (isset ($_POST['name'])  && isset($_POST['surname']) && isset($_POST['phone']) && isset($_POST['email']) ) {
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $sql = 'INSERT INTO users(name, surname, phone, email) VALUES(:name, :surname, :phone, :email)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':name' => $name, ':surname' => $surname,  ':phone' => $phone, ':email' => $email])) {
    $message = 'data inserted successfully';
  }

}


 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Create a User</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="surname">Surname</label>
          <input type="text" name="surname" id="surname" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">Phone</label>
          <input type="text" name="phone" id="phone" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Create a User</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
