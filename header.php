<?php
do_action( 'genesis_doctype' );
do_action( 'genesis_title' );
do_action( 'genesis_meta' );

wp_head(); /** we need this for plugins **/
?>
<script type="text/javascript" src="//use.typekit.net/eth8fjq.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<script type="text/javascript">
    $(window).load(function() {
        // The slider being synced must be initialized first
        $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            animationSpeed: 1000,
            slideshow: false,
            itemWidth: 210,
            itemMargin: 15,
            asNavFor: '#slider'
        });

        $('#slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            animationSpeed: 1000,
            slideshow: false,
            sync: "#carousel"
        });
    });
    $(document).ready(function() {
        //$('.hero h1').fitText('1.6');
    });
</script>

</head>
<body <?php body_class(); ?>>
<?php
do_action( 'genesis_header' );
?>
