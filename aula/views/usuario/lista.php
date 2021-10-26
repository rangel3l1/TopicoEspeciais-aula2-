<main>
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2" style="margin-top:100px">

        <table class="table">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Usuário</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['usuarios'] as $user) { ?>
            <tr>
              <td><?= $user['id'] ?></td>
              <td><?= $user['usuario'] ?></td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>
