<?php get_header();

// start of hero
if(have_rows('header_content')): while(have_rows('header_content')): the_row();
echo '<header>';
echo '<section class="hero" style="position:relative;">';

$bgImg = get_sub_field('background_image');

echo '<div class="container" style="position:relative;">';
echo '<div class="row">';
echo '<div class="col-12">';
echo '<div style="position:relative;background:url(' . wp_get_attachment_image_url($bgImg['id'],'full') . ');background-size:cover;background-position:right top;">';

echo '<div class="" style="position:absolute;top:0;left:0;width:100%;height:100%;
background: rgb(255,255,255);
background: linear-gradient(90deg, rgba(255,255,255,0.70) 0%, rgba(255,255,255,1) 14%, rgba(255,255,255,1) 60%, rgba(255,255,255,0.50) 80%, rgba(255,255,255,0) 100%);
"></div>';

echo '<div class="hero-content" style="position:relative;padding:100px 0 100px 100px;">';
echo '<h1 style="font-size:62px;margin:0;">' . get_sub_field('title') . '</h1>';
echo '</div>';

echo '</div>';

echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
echo '</header>';
endwhile; endif;
// end of hero

echo '<main>';
// start of objectives
if(have_rows('objectives_group')): while(have_rows('objectives_group')): the_row();
echo '<section class="objectives" style="position:relative;padding:65px 0;">';

$topRightImg = get_sub_field('top_right_image');

echo wp_get_attachment_image($topRightImg['id'],'full','',[
    'class'=>'objectives-top-right-img',
    'style'=>'width:auto;height:auto;max-width: 70%;',
    'aria-label'=>$topRightImg['alt']
]);

echo '<div class="container" style="position:relative;">';
echo '<div class="row">';
echo '<div class="col-12">';

echo '<div class="objectives-content" style="">';

echo '<div class="col-md-6" style="padding-bottom:25px;padding-left:0;">';
echo get_sub_field('content');
echo '</div>';

if(have_rows('columns_repeater')):
    echo '<div class="row">';
    while(have_rows('columns_repeater')): the_row();

    echo '<div class="col-lg-6 col-12" style="margin-bottom:18px;position:relative;">';

    echo '<div class="columns-repeater-bg" style="background:#F8F8F8;box-shadow: 0px 4px 24px rgba(0, 0, 0, 0.15);border-left:5px solid var(--accent-primary);padding:40px;">';

    echo '<div class="d-flex">';

    echo '<div class="columns-repeater-svg-icon" style="margin-right:18px;" aria-hidden="true">';

    echo get_sub_field('svg_icon');

    echo '</div>';


    echo '<h3 class="text-accent-secondary" style="margin:0px;">' . get_sub_field('title') . '</h3>';
    
    echo '</div>';
    
    echo get_sub_field('content');

    echo '</div>';

    echo '</div>';

    endwhile;
    echo '</div>';
endif;

echo '</div>';

echo '</div>';
echo '</div>';





echo '</div>';
echo '</section>';
endwhile; endif;
// end of objectives

// start of practical skills
if(have_rows('practical_skills_group')): while(have_rows('practical_skills_group')): the_row();
echo '<section class="objectives" style="position:relative;padding:65px 0;">';

$topLeftImg = get_sub_field('top_left_image');

echo wp_get_attachment_image($topLeftImg['id'],'full','',[
    'class'=>'practical-skills-top-left-img',
    'style'=>'top:-80px;width:auto;height:auto;max-width:70%;mix-blend-mode:multiply;',
    'aria-label'=>$topLeftImg['alt']
]);

$bottomRightImg = get_sub_field('bottom_right_image');

echo wp_get_attachment_image($bottomRightImg['id'],'full','',[
    'class'=>'practical-skills-bottom-right-img',
    'style'=>'width:auto;height:auto;max-width:70%;mix-blend-mode:multiply;',
    'aria-label'=>$bottomRightImg['alt']
]);

echo '<div class="container" style="position:relative;">';
echo '<div class="row">';

if(have_rows('left_column_group')): while(have_rows('left_column_group')): the_row();
echo '<div class="col-lg-6">';

echo '<div class="practical-skills-icons" style="background:#F5F4F3;padding:45px;">';

if(have_rows('icons_repeater')):
    echo '<div class="row">';
    while(have_rows('icons_repeater')): the_row();

    echo '<div class="col-6" style="margin-bottom:18px;position:relative;text-align:center;">';

    echo '<div columns-repeater-bg style="">';

    echo '<div class="practical-skills-columns-svg-icon" style="">';
    echo get_sub_field('svg_icon');
    echo '</div>';


    echo '<div class="practical-skills-columns-content">';
    echo '<h3 class="text-accent-secondary" style="margin-top:0px;margin-bottom:0px;">' . get_sub_field('title') . '</h3>';
    echo get_sub_field('content');
    echo '</div>';



    echo '</div>';

    echo '</div>';

    endwhile;
    echo '</div>';
endif;

echo '</div>';

echo '</div>';
endwhile; endif;

if(have_rows('right_column_group')): while(have_rows('right_column_group')): the_row();

echo '<div class="col-lg-6">';
    echo get_sub_field('content');
echo '</div>';

endwhile; endif;

echo '</div>';





echo '</div>';
echo '</section>';
endwhile; endif;
// end of practical skills

// start of modal
if(have_rows('popup_group')): while(have_rows('popup_group')): the_row();
echo '<section style="position:relative;">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12" style="text-align:center;">';

echo '<span class="btn-main request-more-info open-modal" id="request-more-info" style="" aria-label="Open popup">Request Information</span>';

echo '</div>';
echo '</div>';
echo '</div>';

echo '<div class="modal-content request-more-info z-3" style="opacity:0;pointer-events:none;">';
echo '<div class="bg-overlay"></div>';
echo '<div class="bg-content">';
echo '<div class="bg-content-inner">';
echo '<div class="close" aria-label="Close popup" id="">X</div>';
echo '<div>';
echo get_sub_field('popup_content');
echo '</div>';
echo '</div>';

echo '</div>';
echo '</div>';

echo '</section>';



endwhile; endif;
// end of modal

// start of content gallery
if(have_rows('content_and_gallery')): while(have_rows('content_and_gallery')): the_row();
echo '<section style="padding-top:100px;">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12" style="text-align:center;">';

echo '<h2 class="text-accent">' . get_sub_field('title') . '</h2>';

echo '</div>';
echo '</div>';

$gallery = get_sub_field('gallery');
if( $gallery ): 
    echo '<div class="row justify-content-center" style="padding-top:69px;">';
    foreach( $gallery as $image ):
    echo '<div class="col-lg col-6" style="text-align:center;">';
    echo '<div class="position-relative">';
    
    echo wp_get_attachment_image($image['id'], 'full','',[
        'class'=>'w-100 img-portfolio',
        'aria-label'=>$image['alt']
        ] );

    echo '</div>';
    echo '</div>';
    endforeach; 
    echo '</div>';
endif;

echo '</div>';
echo '</section>';
endwhile; endif;
// end of content gallery

echo '</main>';

get_footer(); ?>