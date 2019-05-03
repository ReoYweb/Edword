<?php include ('partial/_header.php');?>
      <header class="underheader">
        <a href="index.php"><h1>EDWOED FORREST<br><span>PHOTOGRAPHER</span></h1></a>
      </header>
    </div>
    <main class="outer">
      <section class="undercontents">
        <div class="contact">
         <div class="contact__text">
            <h2 class="ttl2">contact</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type </p>
          </div>
          <table>
            <tr>
              <th>tel</th>
              <td>604 682 (2787)</td>
            </tr>
            <tr>
              <th>address</th>
              <td>570 Dunsmuir St #600, Vancouver, BC V6B 1Y1</td>
            </tr>
          </table>
        </div>
          <form class="form" id="form" action="save.php" method="post">
            <img src="./images/contact.png" alt="" class="test">
           <div class="form__box">
            <input type="text" placeholder="First name" name="strFirstName" required>
            <input type="text" placeholder="Last name" name="strLasttName" required>
            <input type="tel" name="strTel" placeholder="Tel" required>
            <input type="email" name="strEmail" placeholder="Email" required>
            <textarea placeholder="Massege" name="strMessage"></textarea>
             <div class="form__submit">
               <input type="submit" value="submit" class="submit">
             </div>
          </div>
          </form>
      </section>
    </main>
<script>

const $form = document.getElementById('form');
const $error = document.getElementById('error');
$form.addEventListener('change', update);
$form.addEventListener('input', update);

function update(e) {
  const type = e.target.type;
  const validity = e.target.validity;


  const $password = $form.elements['_password'];
  const $passwordConfirm = $form.elements['_passwordConfirm'];


  $passwordConfirm.setCustomValidity('');
  if ($password.value !== $passwordConfirm.value) {

    $passwordConfirm.setCustomValidity('Passwords do not match');
  }

  $error.innerHTML = $passwordConfirm.validationMessage;
}
</script>

<?php include ('partial/_footer.php');?>
