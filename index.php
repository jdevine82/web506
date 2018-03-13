<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <title>Bakers Galore</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">


    <link rel="icon" href="img/favicon.ico">

    <!-- Compressed CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.1/css/foundation.min.css" />
    <link rel="stylesheet" href="custom.css" />
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro" rel="stylesheet">

</head>

<body>
    <div class="grid-container">
        <!-- setup vertical grid -->
        <div class="grid-y x">
            <div class="cell shrink header"> <!-- start of header in grid-y-->
                <div class="grid-x auto">
                    <div class="cell  title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">  <!-- start of mobile navigation-->
                        <div class="grid-x auto">
                            <button class="menu-icon" type="button" data-toggle="main-menu"></button>
                            <div class="cell small-3 title-bar-title ">Menu</div>


                            <div class="cell small-8 top-bar" id="main-menu">
                                <div class=" top-bar-left">

                                    <ul class=" drop-down vertical menu " data-dropdown-menu>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Menu</a></li>
                                        <li><a href="#">Location</a></li>
                                        <li><a href="#">Catering</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of mobile navigation -->

                    <div class="cell medium-2">
                        <img src="http://d243fxl63lktap.cloudfront.net/logo.png" alt="Little Pea Bakery logo" width="98" height="76" id="logo">
                    </div>
                    <div class="cell auto">
                        <h1>Baker's Galore deserts lollies pastry sweet</h1> <!-- 1px SEO H1 tag-->
                    </div>
                    <div class="cell medium-4">
                        <form action="#" method="post" id="form-search">
                            <div class="input-group">
                                <label class="input-group-label" for="search">Search:</label>
                                <input type="text" name="search" id="search" value="" class="input-group-field">
                                <input type="submit" value="go" class="input-group-button">
                            </div>
                        </form>
                    </div><!-- search form cell end-->
                </div> <!-- end of x-grid for header -->
            </div> <!-- end of grid-y header-->
            <!-- end of header div -->
            <div class="cell shrink body "> <!-- start of body in grid-y -->
                <div class="grid-x auto  "> <!-- setup x grid for body content-->
                    <div class="cell  small-0 medium-3 large-2 xlarge-1 show-for-medium navigation"> <!-- setup column for navigation space -->

                        <ul class="vertical menu  ">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Menu</a></li>
                            <li><a href="#">Location</a></li>
                            <li><a href="#">Catering</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>

                    </div> <!-- end navigation column-->
                    <div class="cell small-auto medium-auto large-auto mainpage "> <!-- setup main content column -->
                        <h2>You deserve a sweet little treat every now and then.</h2>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero s
                            it amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit 
                            amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit 
                            amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus
                            enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis.</p>
                        <div class="grid-x auto"> <!-- setup row of columns for features-->
                            <div class="cell small-12 medium-6 large-4 flex-container"> <!-- setup column for first column-->
                                <div class="feature card" id="feature-candy">

                                    <div class="card-section">
                                        <h3>Candies</h3>
                                        <h4>Truffles, Bars, Caramels, and more</h4>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. </p>
                                    </div>
                                </div>
                            </div> <!-- end first feature column -->

                            <div class="cell small-12 medium-6 large-4 flex-container"> <!-- setup 2nd column for second feature -->
                                <div class="feature card" id="feature-pastry">
                                    <h3>Pastries</h3>
                                    <h4>Croissants, Danishes, Cream Puffs, and more</h4>
                                    <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.</p>
                                </div>
                            </div> <!-- end second column feature-->
                            <div class="cell small-12 medium-6 large-4 flex-container"> <!-- setup third column feature -->
                                <div class="feature card" id="feature-dessert">
                                    <h3>Desserts</h3>
                                    <h4>Cakes, Pies, Tarts, Cookies, and more</h4>
                                    <p>Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                                </div>
                            </div> <!-- end third column feature-->
                        </div> <!-- end row of feature columns -->
                        <div class="grid-x auto" id="contactus"> <!-- setup container for contact form -->
                            <form class="grid-x grid-margin-x"> <!-- setup row for contact form -->
                                <h3 class="cell small-12 ">Contact Form</h3><!-- use full width cell-->
                                <div class="grid-container fluid"> <!-- setup full width container-->
                                    <div class="grid-x grid-margin-x"> <!-- setup row -->
                                        <div class="small-9 cell">
                                            <input type="text" id="name-label" placeholder="John Doe">
                                        </div>
                                        <div class="small-3 cell">
                                            <label for="name-label" class="text-left middle">Name</label>
                                        </div>
                                    </div> <!-- end row of input for contact us -->
                                    <div class="grid-x grid-margin-x"> <!-- setup row for contact us-->
                                        <div class="small-9 cell">
                                            <input type="email" id="middle-label" placeholder="mail@example.com">
                                        </div>
                                        <div class="small-3 cell">
                                            <label for="middle-label" class="text-left middle">Email</label>
                                        </div>
                                    </div> <!-- end row for contact us -->
                                    <div class="grid-x grid-margin-x"><!-- setup row for contact us-->
                                        <div class="small-9 cell">
                                            <input type="url" id="website-label" placeholder="www.example.com">
                                        </div>
                                        <div class="small-3 cell">
                                            <label for="website-label" class="text-left middle">Website</label>
                                        </div>
                                    </div> <!-- finish row for contact us-->
                                    <div class="grid-x grid-margin-x"> <!-- setup row for contact us-->
                                        <div class="small-12 cell">
                                            <textarea placeholder="Write something to us"></textarea>
                                        </div>

                                    </div> <!-- finish row for contacts us-->
                                    <div class="input-group-button">
                                        <input type="submit" class="button" value="Submit">
                                    </div>
                                </div> <!-- finish full width container -->

                            </form>
                        </div> <!-- finsish contact us form container-->

                    </div> <!-- finish mainpage column -->
                    <div class="cell small-12 medium-8 medium-offset-3 large-offset-0 large-3  newsfeed"> <!-- establish newsfeed side column-->
                        <div id="newsletter" class="cell"> 
                            <h3>Email Newsletter</h3>
                            <p>Sign up to get monthly recipes, exclusive offers and more.</p>
                            <form action="#" method="post" id="form-newsletter">
                                <label for="email">Email:</label>
                                <input type="text" name="email" id="email" value="">
                                <input type="submit" value="subscribe">
                            </form>
                        </div>
                        <div id="specials" class="cell">
                            <h3 class="badge">Sweet Deals</h3>
                            <h3>Mother's Day Special</h3>
                            <p>Pellen tesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                        </div>
                        <div id="news" class="cell">
                            <h3>News</h3>
                            <ul>
                                <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></li>
                                <li><a href="#">Aliquam tincidunt mauris eu risus</a></li>
                                <li><a href="#">Vestibulum auctor dapibus neque</a></li>
                            </ul>
                            <p>Read more at our <a href="#">blog</a> and <a href="#">follow us on Twitter</a>.</p>
                        </div>
                    </div> <!-- end of newsfeed column -->

                </div><!-- end row of main page content -->
            </div> <!-- end of vertical cell content-->
            <div class="cell shrink footer"><!-- start of footer in grid-y -->
                <div class="grid-x auto grid-padding-x"> <!-- start of row in footer -->
                <div id="about" class="cell small-9">
                    <h3>About this Page</h3>
                    <p>This page is for a fictional site. It was created by <a href="http://www.zomigi.com">Zoe Mickley Gillenwater</a> as an exercise in the book <a href="http://www.stunningcss3.com"><i>Stunning CSS3: A Project-based Guide to the Latest in CSS</i></a>. It uses CSS3 media queries to change the design at different screen sizes; resize your browser window or load it up in a mobile device to check it out.</p>
                </div>
                <div id="credits" class="cell small-3">
                    <h3>Credits</h3>
                    <dl>
                        <dt>Web Fonts: </dt>
                        <dd>Nadia Serif from <a href="http://www.kernest.com">Kernest</a></dd>
                        <dt>Illustrations: </dt>
                        <dd>Yummy by <a href="http://www.iconeden.com/icon/yummy-free-icons.html">Icon Eden</a></dd>
                    </dl>
                </div>
                </div> <!-- start of row in footer-->
            </div> <!-- end of grid-y header -->
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <!-- Compressed JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.1/js/foundation.min.js"></script>
    <script>
        $(document).foundation();

    </script>
</body>

</html>
