<?php
// Je demande à WP de me charger mon header
get_header();

// Je demande à WP si j'ai du contenu
// je dit à WP alors tant que j'ai du contenu
// alors fait the_post() !
if (have_posts()): while(have_posts()): the_post();

    // J'inclu mon "fragment" de template qui génère
    // le code HTML d'un extrait d'article
    get_template_part('template-parts/posts/article-excerpt');

endwhile; endif;

// J'inclu mon "fragment" de template qui génère
// le code HTML de ma sidebar
get_template_part('template-parts/sidebar/aside');

get_template_part('template-parts/count/user-stats');

// Je demande à WP de me charger mon footer
get_footer();