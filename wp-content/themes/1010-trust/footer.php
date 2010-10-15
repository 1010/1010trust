<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
      <div id="footer">
        <div id="col1">
          Charity number: 1137030<br />
          Company number: 07223810<br />
          <a href="<?php bloginfo( 'home' ); ?>/terms-and-conditions">Website terms of use</a>
        </div>
        <div id="col2">
          8a Delancey Passage<br />
          London<br />
          NW1 7NN
        </div>
      </div><!-- #footer -->
    </div><!-- #wrapper -->
<?php	wp_footer(); ?>
  </body>
</html>
