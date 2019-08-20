
<form action="" enctype="multipart/form-data" method="post">
    <section id="images" class="works">
        <div class="container">
            <h2>Images</h2>
            <div class="row">
                <!-- Image entry -->
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="title">Image Title</label>
                        <input type="text" required name="image_title" class="form-control" id="title" placeholder="Enter title">
                    </div>

                    <div class="checkbox">
                        <label>
                            <input name="image_featured" type="checkbox" value="1" id="featured">
                            Featured Image
                        </label>
                    </div>



                    <div class="form-group">
                        <label for="image">Image upload</label>
                        <input type="file" required name="image_file" class="form-control" id="image" placeholder="Select image">
                    </div>

                    <!-- Show uploaded image on edit page only -->
                    <div class="form-group">
                        <div><label>Current image</label></div>
                        <img src="<?= registerSrc('uploads/Photo2.png'); ?>" alt="[ENTRY TITLE]">
                    </div>
                    <!-- EO Show uploaded image-->

                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="submit" class="btn btn-default">Cancel</button>
                </div>
                <div>
                </div>
                <!-- EO Image entry -->
            </div>
        </div>
    </section>
</form>

<footer id="contacts" class="contacts">
    <div class="container">
        <div class="contacts-bottom">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <p>Copyright &copy; 2018 Denis Abdullin – deab.ru</p>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="contacts-link">
                        <p><a href="#nolink">Invoicing</a></p>
                        <p><a href="#nolink">Documents</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
