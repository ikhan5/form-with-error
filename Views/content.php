<?php 
$emailerr = "";
$firstName = $lastName = $email = $emailConfirm = "";

// if($_SERVER["REQUEST_METHOD"]=="POST"){
//     $emailerr = check_empty($email,"email");
// }


if (isset($_POST['email'])) {
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $email = $_POST['email'];
    $emailConfirm = $_POST['email-confirm'];

    $emailerr = valid_email($email);
    $emailerr = check_match($email, $emailConfirm,"Email");
}
?>
<div class="page-wrapper">
<main>
    <h1 class="hidden">Lab 4 - Imzan Khan N00669744</h1>
    <form id="newsletter" action="Views/content.php" method="POST">
        <fieldset>
            <legend>
                Sign Up for my Newsletter!
            </legend>
            <div id="newsletter__required">
                <span id="newsletter__error"><?= $emailerr ?></span>
                <span id="newsletter__fields">&#42; Required Fields</span>
            </div>
            <div class="newsletter__field">
                <label for="newsletter__first-name">First Name:</label>
                <input id="newsletter__first-name" value="<?= $firstName ?>" name="first-name" type="text" placeholder="Enter First Name here..." />
            </div>
           <div class="newsletter__field">
                <label for="newsletter__last-name">Last Name:</label>
                <input id="newsletter__last-name" value="<?= $lastName ?>" name="last-name" type="text" placeholder="Enter Last Name here..."/>
           </div>
           <div class="newsletter__field">
                <label for="newsletter__email">Email&#42;:</label>
                <input id="newsletter__email" value="<?= $email ?>" name="email" type="text" placeholder="Enter Email here..." />
           </div>
           <div class="newsletter__field">
                <label for="newsletter__email-confirm">Confirm Email&#42;:</label>
                <input id="newsletter__email-confirm" value="<?= $emailConfirm ?>" name="email-confirm" type="text" placeholder="Confirm Email here..." />
           </div>
           <div class="newsletter__field">
                <label for="newsletter__study">Area of Study:</label>
                <select id="newsletter__study">
                    <option value="" disabled selected>--Pick your Area of Study--</option>
                    <?php
                        $studyAreas = array('Engineering', 'Web Development', 'Business', 'Skilled Trades', 'Other');
                        create_dropdown($studyAreas);
                    ?>
                </select>
           </div>
           <button id="newsletter__sign-up" type="submit">Sign Up</button>
        </fieldset>
    </form>
</main>