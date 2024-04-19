<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <h1>Daftar Komik</h1>
  <div class="row">
    <div class="col">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <?php $i = 1; ?>
        <?php foreach($komik as $k): ?>
        <tr>
          <th scope="row"><?= $i++; ?></th>
          <td><img src="img/<?= $k['sampul']; ?>" alt="" class="sampul"></td>
          <td><?= $k['judul']; ?></td>
          <td>
            <a href="/komik/<?= $k['slug'] ?>" class="btn btn-success">Detail</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>