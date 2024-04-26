<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>

<?php include_once './parts/header.php'; ?>
    <!--- بداية الكونتينر -->
    <center>
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <img src="./images/ahmed.png">
      <h1 class="display-4 fst-italic">مسابقة</h1>
      <p class="lead my-3">تبقى على نهاية المسابقة</p>
      <h3 id="countdown"></h3>
    <div class="container">
    <ul class="list-group list-group-flush"><br>
    <a class="btn btn-outline-secondary" href="https://www.snapchat.com/add/oe-hu" target="_blank">سنابي</a>
  <li class="list-group-item">المشروع</li>
  <li class="list-group-item">عمل الطالب : احمد عبدالرحمن الغامدي</li>
  <p><h3>للدخول في السحب ادخل معلوماتك في الأسفل</h3></p>
</ul>
</center>
    </div>
    </div>
  </div>
    </div>
  </div>

<div class="container">

    <!--- التسجيل -->
    <div class="position-relative text-right">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
        <h3>أدخل معلوماتك للتسجيل</h3>
<form>
        <!--- الاسم الاول -->
  <div class="mb-3">
    <label for="firstname" class="form-label">الإسم الأول</label>
    <input type="text" name="firstname" id="firstname" class="form-control" value="<?php echo $firstname ?>">
    <div class="form-text error"><?php echo $errors['firstnameError'] ?></div>
  </div>
        <!--- الاسم الاخير -->
  <div class="mb-3">
    <label for="lastname" class="form-label">الإسم الأخير</label>
    <input type="text" name="lastname" id="lastname" class="form-control" value="<?php echo $lastname ?>">
    <div class="form-text error"><?php echo $errors['lastnameError'] ?></div>
  </div>

        <!--- البريد -->
 <div class="mb-3">
    <label for="email" class="form-label">البريد الإلكتروني</label>
    <input type="text" name="email" id="email" class="form-control" value="<?php echo $email ?>">
    
    <div class="form-text error"><?php echo $errors['emailError'] ?></div>
  </div> 

<br>
  <button type="submit" name="submit" class="btn btn-primary">تسجيل</button>
</form>
</div>
  </div>

       <!--- العداد وقت السحب --> 
       <div class="loader-con">
    <div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
<div class="button-wrapper">
</div>
</div>
<!--- زر اختيار الرابح -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
<button type="button" id="winner" class="btn btn-primary">
إختيار الرابح
</button>
</div>
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user): ?>
        <h1 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstname']) . ' ' . htmlspecialchars($user['lastname']);?></h1>
      <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>



<?php include_once './parts/footer.php'; ?>