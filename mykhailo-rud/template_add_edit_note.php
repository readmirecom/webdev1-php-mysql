<header class="header">
    <div class="container">

        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-menu">
                <ul class="nav navbar-nav ">
                    <li><a href="#images">Images</a></li>
                    <li><a href="#note">Notes</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Add image</a></li>
                    <li><a href="#">Add note</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
            <!-- /.container-fluid -->
        </nav>


        <div id="top-logo">
            <a href="/" class="header-logo">
                <img src="img/Avatar.png" alt="Denis Abdullin">
            </a>
        </div>
    </div>
</header>

<section id="head" class="hero text-center">
    <div class="container">
        <h1>Motivation Is The First<br>Step To <span>Success</span></h1>
        <ul class="social-list">
            <li><a data-checknum="15" href="https://www.facebook.com/readmirecom/"><img src="img/twitter.png" alt="twitter"></a></li>
            <li><a data-checknum="0" href="https://readmire.com/"><img src="img/behance.png" alt="behance"></a></li>
            <li><a data-checknum="42" href="https://www.instagram.com/readmirecom/"><img src="img/instagram.png" alt="instagram"></a></li>
        </ul>
    </div>
</section>

<form action="" enctype="multipart/form-data" method="post">
    <section id="note" class="about">
        <div class="container">
            <h2>Notes</h2>
            <div class="row">

                <!-- Note entry -->
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="title">Note Title</label>
                        <input type="email" name="note_title" class="form-control" id="title" placeholder="Enter title">
                    </div>

                    <div class="form-group">
                        <label for="content">Note text</label>
                        <textarea name="note_text" class="form-control" id="content" rows="5" placeholder="Entry content"></textarea>
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