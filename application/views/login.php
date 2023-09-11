<div class="authorization">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="card mb-3" style="max-width: 600px;">
                    <div class="row g-0">

                        <div class="col-md-4">
                            <div class="bat">
                                <img src="img/regg.png" class="img-fluid rounded-start" alt="...">
                                <a href="main/register" ><button type="submit" class="btn btn-primary">Зарегистрироваться</button></a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <form method="post">
                                    <h4>Вход </h4>
                                    <div class="mb-3">
                                        <label for="loginu" class="form-label">Логин *</label>
                                        <input type="text" class="form-control" name="loginu" aria-describedby="loginu" placeholder="Введите логин">
                                    </div>
                                    <div class="mb-3">
                                        <label for="passwordu" class="form-label">Пароль *</label>
                                        <input type="password" class="form-control" name="passwordu" placeholder="Введите пароль">
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Войти</button>
                                    <p><?=$error?></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>