<?php
/*
    Template Name: Contact
*/
?>
    <style type="text/css">

        .acf-map {
            width: 100%;
            height: 400px;
            border: #ccc solid 1px;
            margin: 20px 0;
        }

    </style>
<?php get_header(); ?>

<?php

$location = get_field('google_map_location');

if( !empty($location) ):
    ?>
    <div class="acf-map">
        <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php  echo $location['lng']; ?>"></div>
    </div>
<?php else: ?>
    <div class="container"><div class="row"><div class="sm-col-12">
    <pre>Why not add your offices google maps location on this page?</pre></div></div></div>
<?php endif; ?>

<!-- END Google Maps -->
<div class="width-100">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="What's your name?">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Telephone</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="What's your phone number?">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="What's your email address?">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Message</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php get_footer(); ?>