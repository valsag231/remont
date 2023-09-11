 <sestion>
     <div class="container">
         <h1>Регистрации</h1>
         <div class="row">
             <div class="col-lg-3"></div>
             <div class="col-lg-6">
                 <form method="post">
                     <div class="mb-3">
                         <label for="fio" class="form-label">ФИО</label>
                         <input type="text" class="form-control" name="fio" aria-describedby="fio" required>
                     </div>
                     <div class="mb-3">
                         <label for="email" class="form-label">E-mail</label>
                         <input type="email" class="form-control" name="email" aria-describedby="email" required>
                     </div>

                     <div class="mb-3">
                         <label for="loginu" class="form-label">Придумайте логин</label>
                         <input type="text" class="form-control" id="loginu" name="loginu" required>
                     </div>
                     <div class="mb-3">
                         <label for="passwordu" class="form-label">Придумайте пароль</label>
                         <input type="password" class="form-control" name="passwordu" id="passwordu" required>
                     </div>
                     <div class="mb-3">
                         <label for="passwordu1" class="form-label">Повторить пароль</label>
                         <input type="password" class="form-control" name="passwordu1" id="passwordu1" required>
                     </div>
                     <div class="mb-3">
                         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                         <label class="form-check-label" for="flexCheckDefault">
                          Согласие на обработку персональных данных
                         </label>
                     </div>
                     <button type="submit" class="btn btn-primary">Зарагистрироваться</button>
                 </form>
             </div>
         </div>
     </div>
 </sestion>