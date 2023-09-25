<div class="container">
    <div class="row">
        <h1>Отправить фото</h1>
        <form enctype="multipart/form-data" method="post" action="kabinet/application">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Загрузить фото</label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
                            <input type="file" class="form-control" id="img_pocle" name="img_pocle" accept="img/" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </form>
    </div>
</div>