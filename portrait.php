<?php include ('partial/_header.php');?>

      <header class="underheader">
        <a href="index.php"><h1>EDWOED FORREST<br><span>PHOTOGRAPHER</span></h1></a>
      </header>
    </div>
    <main class="outer">
      <section class="undercontents">

        <div class="photos">

          <?php
          include("functions/functions.php");


          $arrFamSlides = getData("SELECT * FROM portraits");
          ?>
        <!-- this is the entire slide show component -->
        <?php foreach($arrFamSlides as $portrait): ?>
          <div class="img">
          <img id="image<?= $portrait["id"]?>" class="photo" src="images/<?= $portrait["portrait"] ?>">
          <p></p>
          </div>
          <div class="photos__box">
           <div class="photos__box__text">
              <h3>portrait#<?= $portrait["id"]?></h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <table>
              <tr>
                <th>model</th>
                <td>Kendall Nicole Jenner</td>
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
