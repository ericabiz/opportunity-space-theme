<?php
do_action( 'genesis_doctype' );
do_action( 'genesis_title' );
do_action( 'genesis_meta' );

wp_head(); /** we need this for plugins **/
?>
<script type="text/javascript" src="//use.typekit.net/eth8fjq.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>
<body <?php body_class(); ?>>
<?php
do_action( 'genesis_header' );
?>
