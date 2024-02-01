<div class="text-center">
    <div class="container">
        <div class="border p-3 mt-3">
            <h1>Mahsulot qo'shish</h1>
            <form action="./database/AddProducts.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Mahsulot nomi</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>Mahsulot haqida</label>
                    <input type="text" class="form-control" name="info">
                </div>
                <div class="form-group">
                    <label>Mahsulot narxi</label>
                    <input type="text" class="form-control" name="price">
                </div>
                <div class="form-group">
                    <label>Mahsulot rasmi</label>
                    <input type="file" class="form-control" name="photo">
                </div>
                <button type="submit" class="btn btn-primary" name="add_products_submit">Qo'shish</button>
            </form>
        </div>
    </div>
</div>
