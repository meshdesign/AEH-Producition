<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div>
        <input type="text" value="" name="s" id="s" autocomplete="off" placeholder="blog search"/>
        <input type="hidden" name="post_type" value="post" />
        <input type="submit" id="searchsubmit" value="Search" />
    </div>
</form>