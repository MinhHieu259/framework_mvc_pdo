<section id="main-content">
	<section class="wrapper">
    <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm danh mục sản phẩm
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form action="<?php echo BASE_URL;?>/product/insert_product" method="POST">
                                <div class="form-group">
                                    <label>Tên danh mục</label>
                                    <input type="text" name="title_category_product" class="form-control"  placeholder="Nhập tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <input type="text" name="desc_category_product" class="form-control"  placeholder="Nhập mô tả">
                                </div>
                               
                              
                                <button type="submit" class="btn btn-info">Thêm danh mục</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
        </div>
</section>