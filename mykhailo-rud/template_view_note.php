
<section id="note" class="about">
    <div class="container">
        <h2>Notes</h2>
        <div class="row">

            <!-- Note entry -->
            <div class="col-xs-12">
                <div class="about-item">
                    <h4>[ENTRY TITLE]</h4>
                    <p>[Entry content with stripped HTML]</p>
                </div>

                <div>
                    <a class="btn btn-info" href="#edit_link">Edit note</a>
                    <a class="btn btn-danger" href="#delete_link">Delete note</a>
                </div>
            </div>
        </div>

    </div>
</section>


<footer id="contacts" class="contacts">
    <div class="container">
        <div class="contacts-top">
            <div class="row">
                <div class="col-xs-12">
                    <h4>Contacts</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <p>Positive pleasure-oriented goals are much more powerful motivators than negative fear-based ones.</p>
                    <ul class="social-list">
                        <li><a href="#nolink"><img src="<?= registerSrc('img/twitter.png'); ?>" alt="twitter"></a></li>
                        <li><a href="#nolink"><img src="<?= registerSrc('img/behance.png'); ?>" alt="behance"></a></li>
                        <li><a href="#nolink"><img src="<?= registerSrc('img/instagram.png'); ?>" alt="instagram"></a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-9">
                    <form class="contacts-form" method="post">
                        <div class="row">
                            <div class="col-xs-12 col-sm-10">
                                <label>
                                    <span>Name</span>
                                    <input type="text" name="name" placeholder="Incognito" required>
                                </label>
                                <label>
                                    <span>E-Mail</span>
                                    <input type="email" name="email" placeholder="incognito@gmail.com" required>
                                </label>
                                <label>
                                    <span>Message</span>
                                    <textarea name="text" placeholder="Your question or suggestion"></textarea>
                                </label>
                            </div>
                            <div class="col-xs-12 col-sm-2 text-right">
                                <button type="submit">
                                    <img src="<?= registerSrc('img/Button.png'); ?>" alt="submit">
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

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
