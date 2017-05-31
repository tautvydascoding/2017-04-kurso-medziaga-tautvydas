
<?php
      $articles = getPosts($connection);
      // $articles = getCustomPosts($connection, "Sabonis");
     if(mysqli_num_rows($articles) > 0 ) {
       // spausdiname straipnsnius
       while( $post = mysqli_fetch_assoc($articles)) {  // && $i++ < 10
?>
              <div class="row">
                <div class="col-lg-12">
                  <h2> <?php echo $post['title']; ?> </h2>
                  <p>
                      <?php echo $post['article']; ?>
                  </p>
                </div>
              </div>
  <?php
          }
    }
   ?>
