<form role="search" method="get" class="contact-form" action="<?php echo esc_url(home_url('/')); ?>">
    <div style="display:flex;gap:10px;">
        <input type="search" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" style="flex:1;" />
        <button type="submit" class="btn btn-primary" style="padding:14px 24px;">Search</button>
    </div>
</form>
