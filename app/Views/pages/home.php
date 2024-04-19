<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col text-center mt-5">
      <?php 
        // dd(user());
      ?>
      <h1>Hello, <?= user()->username; ?></h1>
      <img src="<?= base_url('uploads'); ?>/<?= user()->image; ?>" alt="">
    </div>
  </div>
</div>
<?= $this->endSection(); ?>

