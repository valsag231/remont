<div class="container">
    <div class="row">
        <h1>Личный кабинет</h1>
        <div class="col-lg-1"></div>
        <div class="col-lg-3">
            <div class="img">
                <img src="img/user.png" width="300px">
            </div>
        </div>
        <div class="col-lg-4">
            <?php
            foreach ($user as $row) {
                echo '  <form  method="post" action="Kabinet/users">
                  <div class="mb-3">
                    <label class="form-label">ФИО</label>
                    <input type="text" class="form-control" id="fio" value="' . $row['fio'] . '">
                  </div>
                  <div class="mb-3">
                    <label  class="form-label">Почта</label>
                    <input type="email" class="form-control" value="' . $row['email'] . '">
                 </div>
                 <div class="mb-3">
                 <label class="form-label">Логин</label>
                 <input type="text" class="form-control" id="fio" value="' . $row['loginu'] . '">
               </div>
               <div class="mb-3">
                 <label  class="form-label">Пароль</label>
                 <input type="password" class="form-control" value="' . $row['passwordu'] . '">
              </div>
               <button type="submit" class="btn btn-primary">Изменить</button>
              </form> ';
            }
            ?>

        </div>
    </div>