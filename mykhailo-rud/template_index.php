<?php 
global $db;

$images = $db->query("SELECT * FROM images")->fetchAll();
$notes = $db->query("SELECT * FROM notes")->fetchAll();
?>
<section id="images" class="works">
    <div class="container">
        <h2>Images</h2>
        <div class="row">

            <!-- Image entry -->
            <?php foreach ($images as $img){ ?>
            <div class="col-xs-12 col-sm-6">
                <figure class="works-item">

                    <!-- Show uploaded image, [uploads/Photo.png] – image name from database -->
                    <img src="uploads/<?= $img['image_name']; ?>" alt="<?= $img['title']; ?>">

                    <figcaption class="works-item_text">

                        <!-- Show only if Featured checked -->
                        <?php if($img['featured_image']==1) {?>
                        <span>Featured</span>
                        <?php } ?>
                        <h3>
                            <a href="#nolink"><?= $img['title']; ?></a>
                        </h3>
                    </figcaption>
                </figure>
            </div>
            <?php }?>
            <!-- EO Image entry -->
        </div>
    </div>
</section>

<section id="note" class="about">
    <div class="container">
        <h2>Notes</h2>
        <div class="row">

            <!-- Note entry -->
            <?php foreach($notes as $note){ ?>
            <div class="col-xs-12 col-sm-6">
                <div class="about-item">
                    <h4><a href="#link-to-view-note"><?= $note['title'] ?></a></h4>
                    <p><?= $note['content'] ?></p>
                </div>
            </div>
            <?php } ?>
            <!-- EO Note entry -->


            
        </div>
        <div class="about-brands">
            <ul>
                <li><img src="img/Google.png" alt="google"></li>
                <li><img src="img/Airbnb.png" alt="airbnb"></li>
                <li><img src="img/Dropbox.png" alt="dropbox"></li>
            </ul>
        </div>
    </div>
</section>

<section id="links" class="links">
    <div class="container">
        <h2>Links</h2>
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <p><a href="#nolink">Harness The Power Of Words In Your Life</a><span>2018</span></p>
            </div>
            <div class="col-xs-12 col-md-6">
                <p><a href="#nolink">A Starter Guide To Self Improvement</a><span>2018</span></p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <p><a href="#nolink">Benjamin Franklin S Method Of Habit Formation</a><span>2018</span></p>
            </div>
            <div class="col-xs-12 col-md-6">
                <p><a href="#nolink">Does Your Life Lack Meaning</a><span>2018</span></p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <p><a href="#nolink">Hypnotize Yourself Into The Ghost Of Christmas Future</a><span>2017</span></p>
            </div>
            <div class="col-xs-12 col-md-6">
                <p><a href="#nolink">Hypnotize Yourself Into The Ghost Of Christmas Future</a><span>2016</span></p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <p><a href="#nolink">Self Motivation How To Keep Yourself Motivated</a><span>2016</span></p>
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
                        <li><a href="#nolink"><img src="img/twitter.png" alt="twitter"></a></li>
                        <li><a href="#nolink"><img src="img/behance.png" alt="behance"></a></li>
                        <li><a href="#nolink"><img src="img/instagram.png" alt="instagram"></a></li>
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
                                    <img src="img/Button.png" alt="submit">
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