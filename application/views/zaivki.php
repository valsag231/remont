<div class="container">
    <div class="row">
        <h1>Мои заявки</h1>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Временная метка</th>
      <th scope="col">Название заявки</th>
      <th scope="col">Описание заявки</th>
      <th scope="col">Категория заявки</th>
      <th scope="col">Статус</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    
        <?php
        foreach ($zaivki as $row){
            echo '<tr>  <th scope="col">'.$row['data_n'].'</th>
            <th scope="col">'.$row['name'].'</th>
            <th scope="col">'.$row['description'].'</th>
            <th scope="col">'.$row['id_category'].'</th>
            <th scope="col">'.$row['statys'].'</th>
            <th><button type="button" class="btn btn-danger"><a href = "Kabinet/delete_applications?id_application='.$row['id_application'].'"> Удалить </a></button></th>
             </tr>';
        }
        ?>
   
  </tbody>
</table>
    </div>
</div>