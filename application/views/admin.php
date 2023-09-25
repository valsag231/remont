<div class="container">
    <div class="row">
        <h1>Заявки пользователей</h1>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Временная метка</th>
      <th scope="col">ФИО Пользователя</th>
      <th scope="col">Название заявки</th>
      <th scope="col">Описание заявки</th>
      <th scope="col">Дата здачи</th>
      <th scope="col">Категория заявки</th>
      <th scope="col">Статус</th>
      <th scope="col">Действие</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($applic as $row){
        echo '<tr><td>'.$row['data_n'].'</td>
        <td>'.$row['fio'].'</td>
        <td>'.$row['name'].'</td>
        <td>'.$row['description'].'</td>
        <td>'.$row['data_k'].'</td>
        <td>'.$row['name_category'].'</td>
        <td>'.$row['statys'].'</td>';
        if($row['statys'] == "Новый"){
          echo '<<td> <button type="button" class="btn btn-dark"><a href="admin/status/'.$row['id_application'].'/1">Принять</button>';
          echo '<button type="button" class="btn btn-dark"><a href="admin/status/'.$row['id_application'].'/2">Отклонить</button>';
        }
          if($row['statys'] == "Принято"){
            echo'<<td> <button type="button" class="btn btn-dark"><a href="admin/add_img/'.$row['id_application'].'/3">Решено</button>';
            }
            echo '</td></tr>';
        }
      
    ?>
   
  </tbody>
</table>
    </div>
</div>