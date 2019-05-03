<?php include ('partial/_header.php');?>

      <header class="underheader">
        <a href="index.php"><h1>EDWOED FORREST<br><span>PHOTOGRAPHER</span></h1></a>
      </header>
    </div>
    <main class="outer cf">
      <section class="undercontents">

        <div class="photos">

          <?php
          include("functions/functions.php");


          $arrFamSlides = getData("SELECT * FROM families");
          ?>
        <!-- this is the entire slide show component -->
        <?php foreach($arrFamSlides as $family): ?>
          <div class="img">
          <img id="image<?= $family["id"]?>" class="photo" src="images/<?= $family["family"] ?>">
          <p></p>
          </div>
          <div class="photos__box">
           <div class="photos__box__text">
              <h3>family#<?= $family["id"]?></h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <table>
              <tr>
                <th>model</th>
                <td>Jelena Gigi Noura Hadid</td>
              </tr>
              <tr>
                <th>title</th>
                <td>woman in white knit sweater and black fitted cap</td>
              </tr>
            </table>
          </div>
          <?php endforeach; ?>
        </div>
      </section>
    </main>

<?php include ('partial/_footer.php');?>
