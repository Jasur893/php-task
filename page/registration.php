<div class="text-center">
    <div class="container">
        <div class="border p-3 mt-3">
            <h1>Ro'yxatdan o'tish</h1>
            <form action="./database/UserReg.php" method="post">
                <div class="form-group">
                    <label>login</label>
                    <input type="text" class="form-control" name="login">
                </div>
                <div class="form-group">
                    <label>Ism</label>
                    <input type="text" class="form-control" name="ism">
                </div>
                <div class="form-group">
                    <label>Parol</label>
                    <input type="password" class="form-control" name="parol">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Shartlarga rozimisiz?</label>
                </div>
                <button type="submit" class="btn btn-primary" name="register_submit">Ro'yxatdan o'tish</button>
            </form>
        </div>
        <div>
            <p>Avtorizatsiya? <a href="?page=login">Kirish</a></p>
        </div>
    </div>
</div>
