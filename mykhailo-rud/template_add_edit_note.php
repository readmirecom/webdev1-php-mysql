
<form action="" enctype="multipart/form-data" method="post">
    <section id="note" class="about">
        <div class="container">
            <h2>Notes</h2>
            <div class="row">

                <!-- Note entry -->
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="title">Note Title</label>
                        <input type="text" name="note_title" required class="form-control" id="title" placeholder="Enter title" 
                        value="<?= isset($note) ? $note['title'] : null ?>">
                    </div>

                    <div class="form-group">
                        <label for="content">Note text</label>
                        <textarea name="note_text" class="form-control" required id="content" rows="5" placeholder="Entry content"><?= isset($note) ? $note['content'] : null ?></textarea>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="submit" class="btn btn-default">Cancel</button>
                    </div>
                </div>
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
