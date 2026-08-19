<?php

$total       = isset( $args['total'] ) ? $args['total'] : false;
$show_form   = isset( $args['show_form'] ) ? $args['show_form'] : false;
$show_button = isset( $args['show_button'] ) ? $args['show_button'] : true;

?>
<div class="accordion accordion-flush search" id="accordion-search">
    <div class="accordion-item">
        <div class="accordion-header">
            <?php if ( $show_button && ! get_search_query() ) : ?>
                <div class="accordion-button collapsed search-header-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-search" aria-expanded="false" aria-controls-="collapse-search">
                </div>
            <?php endif; ?>
        </div>
        <?php if ( $total && get_search_query() ) : ?>
            <h1>
                <?php
                printf(
                    esc_html(
                        /* translators: %d: The number of search results. */
                        _n(
                            'We found %d result for your search',
                            'We found %d results for your search',
                            $total,
                            'minimalist'
                        )
                    ),
                    $total
                );
                ?>
            </h1>
        <?php endif; ?>
        <div id="collapse-search" class="accordion-collapse collapse <?php echo ( get_search_query() || $show_form )? 'show' : ''; ?>" data-bs-parent="#accordion-search">
            <div class="accordion-body search-body">
                <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <div class="mb-3">
                        <input type="search" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder' ); ?>" value="<?php echo get_search_query();  ?>" name="s" />
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="search-submit btn btn-primary" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
