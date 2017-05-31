<div class="contentHolder">
  <h2 class="text-center">Su mumis galite susisiekti</h2>
  <div class="pageContent">
    <div class="row">
      <div class="col-md-6 col-sm-6 hidden-xs paddingTop10">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17834.476373559282!2d23.324065311631085!3d54.697208734004406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e6d30a9d03ffeb%3A0x8d3477865af5d1c7!2sGaisriai+69370!5e0!3m2!1slt!2slt!4v1496139629064"
          width="100%" height="330" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-md-6 col-sm-6">
        <h4>Gaisrių k., Antanavo sen., Kazlų Rūdos sav.</h4>
        <h4>+370 612 18983 </h4>
        <h4><a href="mailto:nuostabus.v@gmail.com">nuostabus.v@gmail.com</a></h4>

        <!-- Forma -->
        <?php
          if(isset($error) && !empty($error)) {
            echo "<div class='error'>" . $error . "</div>";
          } elseif (isset($error)) {
            echo "<div class='success'>Žinutė sėkmingai išsiųsta</div>";
          }
          ?>

          <form class="" action="" method="post">
            <input class="formCss" type="text" <?php if(isset($error) && !empty($error)) { echo 'value="'.$_POST['vardas'].'"'; } ?> name="vardas" placeholder="Jūsų vardas" /><br/>
            <input class="formCss" type="text" <?php if(isset($error) && !empty($error)) { echo 'value="'.$_POST['pastas'].'"'; } ?> name="pastas" placeholder="Jūsų el.pašto adresas" /><br/>
            <textarea class="formCss minHeight12" name="zinute" placeholder="Žinutė"><?php if(isset($error) && !empty($error)) { echo $_POST['pastas']; } ?></textarea><br/>
            <input class="btn btn-default open-contacts-form" type="submit" name="submited" value="Rašykite mums" />
          </form>
          <!-- Forma pabaiga -->

      </div>
    </div>

  </div>
</div>
