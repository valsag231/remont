<h1>Оставить заявку</h1><br><br><br>
<div class="bat2">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                 <div class="forma">
                <h1>Внимание!</h1>
                <h3>Оставить заявку сейчаc и через два дня мы ответим вам. </h3>
            </div> </div>
            <div class="col-lg-4">
               
                    <form enctype="multipart/form-data" method="post" action="kabinet/application">
                        <div class="mb-3">
                            <label class="form-label">Введити название</label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Описание</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Выбрать категорию</label>
                            <select id="disabledSelect" id="id_category" name="id_category" class="form-select">
                            <?php foreach ($cotegor as $row) {
        echo '<option value="'.$row['id_category'].'">'.$row['name_category'].'</option>';
        } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Загрузить фото</label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
                            <input type="file" class="form-control" id="img_do" name="img_do" accept="img/" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</div>