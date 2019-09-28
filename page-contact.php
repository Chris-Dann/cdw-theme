<?php get_header(); ?>

<div class="contact-header">
    <h2 class="inner-page-title">let's talk</h2>
</div>

<div class="contact_level_1 container">

    <div class="contact-blurb">
        <h3 class="d-none d-md-block">Contact Me</h3>
        <p>It all starts with a conversation.  I'm here to discuss your online goals, what the web could do for you, and whether we'd be a good fit to work together.  I return messages super-quick, so drop me a line and let's chat today.</p>
    </div>

    <div class="callback_form contact-callback">
        <h2 class="callback_header">quick<br>callback</h2>
        <div class="callback_form_inner">
            <?php echo do_shortcode('[contact-form-7 id="65" title="Callback Form"]'); ?>
        </div>
    </div>
    
</div>

<div class="service-separator rotate-cw contact-separator"></div>

<div class="contact-level-2 container">
    <div class="contact_form">
        <h2 class="contact_header">contact form</h2>
        <div class="contact_form_inner">
            <?php echo do_shortcode('[contact-form-7 id="51" title="Contact form 1"]'); ?>
        </div>
    </div>
</div>

<?php get_footer();
