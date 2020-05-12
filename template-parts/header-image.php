<!-- Custom Header Image -->
<? if(get_header_image()) : ?>
    <div id="site-header">
        <img src="<? header_image(); ?>" class="img-fluid" alt="<? esc_attr(get_bloginfo('name', 'display'))?>" width="<? absint(get_custom_header()->width); ?>" height="<? absint(get_custom_header()->height); ?>">
    </div>
<? endif; ?>
<!-- End Custom Image -->