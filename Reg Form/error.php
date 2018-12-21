<?php if(count($error) > 0): ?>
 <div>
  <div class="alert alert-danger fade show ">
    <?php foreach ($error as $error): ?>
      <p class="h5 lead"> <?php echo $error; ?></p>
    <?php endforeach ?>
  </div>
 </div>
<?php endif ?>
