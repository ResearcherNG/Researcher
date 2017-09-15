<?php
/**
 * Created by IntelliJ IDEA.
 * User: OLAYIWOLE
 * Date: 06/09/2017
 * Time: 02:50
 */

include('config/setup.php'); // configuration file

?>
<!DOCTYPE html>

<html>

<?php include ('config/header.php') ;?>

<body>

<header id="top">

    <?php include('config/nav_main.php'); ?>

    <div id="about" class="hero-text-box">
        <!--- page header -->
        <h1><?php echo $page['header']; ?></h1>
        <div class="lead">
            <!-- body content -->
            <p><?php echo $page['body']; ?></p>
        </div>

        <!-- store links in var @joinUs and @contribute respectively -->
        <?php  $joinUs = 'https://researcherng.typeform.com/to/g4MEJa';  $contribute = 'https://researcherng.typeform.com/to/kDaJ8V'; ?>
        <a class="btn btn-full" href="<?php echo $joinUs; ?>" target="_blank">Join Our Team</a>
        <a class="btn btn-full" href="<?php  echo $contribute; ?>" target="_blank">Tell Your Data Story</a>
    </div>
</header>

<section id="work" class="work">
    <div class="container">
        <h2>Our Work</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 box">
                <i class="ion-ios-chatboxes-outline icon-big"></i>
                <h3>Opinion Polls </h3>
                <p>We amplify your voice through our opinion polls. We want to represent your opinions and how you feel about the issues and trends shaping your community </p>
            </div>

            <div class="col-md-3 box">
                <i class="ion-ios-analytics-outline icon-big"></i>
                <h3>Surveys</h3>
                <p>Make data-driven decisions based on carefully analyzed results from our surveys. Speculations are often different from the numbers.  </p>
            </div>

            <div class="col-md-3 box">
                <i class="ion-ios-mic-outline icon-big"></i>
                <h3>Media Content Analysis</h3>
                <p> Draw valid inferences from  common characteristics on mass media. Our analysis of content from social media and other media will provide context and insight into trending issues. </p>
            </div>
            <div class="col-md-3 box">
                <i class="ion-ios-people-outline icon-big"></i>
                <h3>Talks/Conferences</h3>
                <p> Catalyze action toward a more open system for sharing information. Our conferences will provide a platform for individuals and organizations to improve conversations about open access to public data. </p>
            </div>
        </div>
    </div>
</section>

<!-- Begin MailChimp Signup Form -->
<!--newsletter subscription section-->
<section id="mc_embed_signup" class="section-newsletter">
    <div id="mc_embed_signup">
        <form action="//researcher.us16.list-manage.com/subscribe/post?u=dc966b60e45abdd9634944b3d&amp;id=1bc86c7757" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
                <label for="mce-EMAIL">Subscribe to our newsletter</label>
                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_dc966b60e45abdd9634944b3d_1bc86c7757" tabindex="-1" value=""></div>
                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
            </div>
        </form>
    </div>
</section>
<!--newsletter subscription section-->
<!--End mc_embed_signup-->

<!--Footer section-->

<?php include (D_TEMPLATE.'/footer.php'); ?>

</div>
<!--/Footer section-->

</body>
</html>

