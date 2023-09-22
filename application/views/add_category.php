<div class="container">
    <div class="row">
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Категории
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Номер</th>
      <th scope="col">Название</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($cotegor as $row){
        echo '<tr><td>'.$row['id_category'].'</td>
        <td>'.$row['name_category'].'</td>
        <td><button type="button" class="btn btn-danger"><a href = "Admin/delete_category?id_category='.$row['id_category'].'"> Удалить </a></button></td>
        </tr>';
    }
    ?>

  </tbody>
</table>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Добавить категорию
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <h1>Дабавить категорию</h1>
        <form method="post" action="admin/add_categ">
  <div class="mb-3">
    <label  class="form-label">Название</label>
    <input type="text" class="form-control" id="name_category" name="name_category">
  </div>
  <button type="submit" class="btn btn-primary">Дабавить</button>
</form>
      </div>
    </div>
  </div>
</div>
    </div>
</div>