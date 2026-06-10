<?php
/**
 * Custom Search Form
 *
 * @package PayPerGrowth
 */
?>
<form role="search" method="get" class="search-form contact-form" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="form-group" style="margin-bottom: 0;">
        <label for="search-field" class="screen-reader-text"><?php esc_html_e('Search for:', 'paypergrowth'); ?></label>
        <div style="display: flex; gap: 10px;">
            <input type="search" id="search-field" class="search-field" placeholder="<?php esc_attr_e('Search...', 'paypergrowth'); ?>" value="<?php echo get_search_query(); ?>" name="s" style="flex: 1;" />
            <button type="submit" class="btn btn-primary" style="padding: 14px 24px;">Search</button>
        </div>
    </div>
</form>
