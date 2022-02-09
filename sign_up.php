<?php
require "header.php";
?>
<main>
    <div class="wrapper-main">

        <section class="forms">
            <h1>SIGN IN</h1>
            <form name="contact" id="contact" method="POST" action="include/sign_up.inc.php" data-netlify="true">
                <input type="hidden" name="form-name" value="contact" />
                <div class="input_field">
                    <label>First Name </label>
                    <input type="text" class="input" id="firstName" name="firstName">
                </div>
                <div class="input_field">
                    <label>Last Name </label>
                    <input type="text" class="input" id="lastName" name="lastName">
                </div>
                <div class="input_field">
                    <label>User Name </label>
                    <input type="text" class="input" id="userName" name="userName">
                </div>


                <div class="input_field">
                    <label>Password </label>
                    <input type="password" class="input" id="password" name="password">
                </div>
                <div class="input_field">
                    <label>Confirm Password </label>
                    <input type="password" class="input" id="password" name="repeatPassword">
                </div>
                <div class="input_field">
                    <label>Email Adress </label>
                    <input type="email" class="input" id="UserEmail" name="userEmail">
                </div>
                <div class="input_field">
                    <label>Phone Number </label>
                    <input type="text" class="input" id="phoneNumber" name="phoneNumber">
                </div>
                <!-- <div class="input_field">
                    <label>Adresss </label>
                    <textarea class="textarea"></textarea>
                </div> -->
                <div class="input_field">
                    <label>Postal code </label>
                    <input type="text" class="input" id="postalCode" name="postalCode">
                </div>
                <div class="input_field">

                    <input type="submit" name="signup-submit" value="Register" class="btn">

                </div>


            </form>


        </section>
    </div>
</main>
<?php
require "footer.php";
?>