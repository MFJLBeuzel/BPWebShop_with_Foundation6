<?php
include 'header.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $city = $_POST['city'];
  $street = $_POST['street'];
  $number = $_POST['number'];
  $zipcode = $_POST['zipcode'];
  $gender = $_POST['gender'];

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $sql = "INSERT INTO dbo.GEBRUIKER (GEBRUIKERSNAAM, VOORNAAM,
      ACHTERNAAM, STRAATNAAM, HUISNUMMER, POSTCODE, WOONPLAATS, EMAIL, SEXE,
      WACHTWOORD) VALUES ('$username', '$firstname', '$lastname', '$street',
      '$number', '$zipcode', '$city', '$email', '$gender', '$password')";
            }
            else{
                if( ($errors = sqlsrv_errors() ) != null) {
                    foreach( $errors as $error ) {
                            echo "SQLSTATE: ".$error[ 'SQLSTATE']."<br />";
                            echo "code: ".$error[ 'code']."<br />";
                            echo "message: ".$error[ 'message']."<br />";
                        }
                    }
                }
  }
?>

<div class="row">
                  <div class="content">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="large-6 columns">
                            <i class="subtitle">Fields with <span class="star">*</span> required</i>
                            <table>
                                <tr>
                                    <td style="vertical-align:top">
                                        username: <span class="star">*</span>
                                    </td>
                                    <td class="field">
                                        <input type="text" name="username" placeholder="username" id="email" maxlength="50">
                                        <div class="username-box"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align:top">
                                        password: <span class="star">*</span>
                                    </td>
                                    <td class="field">
                                      <input type="password" name="password" placeholder="password" id="password" maxlength="30">
                                      <div class="password-box"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align:top">
                                        Wachtwoord: <span class="star">*</span>
                                    </td>
                                    <td class="field">
                                        <input type="password" name="password" placeholder="Wachtwoord" id="password" onkeyup="check_password()" maxlength="30">
                                        <div class="password-box"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align:top">
                                        Herhaal Wachtwoord: <span class="star">*</span>
                                    </td>
                                    <td class="field">
                                        <input type="password" name="confirmpassword" placeholder="Wachtwoord" id="second_password" onkeyup="check_second_password()"
                                        maxlength="30">
                                        <div class="second_password-box"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Voornaam: <span class="star">*</span>
                                    </td>
                                    <td class="field">
                                        <input type="text" name="firstname" placeholder="Voornaam" id="voornaam" onkeyup="check_voornaam()"
                                               maxlength="50">
                                        <div class="voornaam-box"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Achternaam: <span class="star">*</span>
                                    </td>
                                    <td class="field">
                                        <input type="text" name="lastname" placeholder="Achternaam" id="achternaam"
                                        onkeyup="check_achternaam()" maxlength="50">
                                        <div class="achternaam-box"></div>
                                    </td>
                                </tr>

                            </table>
                        </div>

                        <div class="large-6 columns">
                            <table>
                                <tr>
                                    <td>
                                        Adres: <span class="star">*</span>
                                    </td>
                                    <td class="field">
                                        <input type="text" name="adres" placeholder="Adres" id="adres" onkeyup="check_adres()"
                                               maxlength="255">
                                        <div class="adres-box"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Postcode: <span class="star">*</span>
                                    </td>
                                    <td class="field">
                                        <input type="text" name="postalcode" placeholder="1234 AB" id="postcode" onkeyup="check_postcode()"
                                               maxlength="7">
                                        <div class="postcode-box"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Plaats: <span class="star">*</span>
                                    </td>
                                    <td class="field">
                                        <input type="text" name="place" placeholder="Plaats"
                                        id="plaats" onkeyup="check_plaats()" maxlength="25">
                                        <div class="plaats-box"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Land: <span class="star">*</span>
                                    </td>
                                    <td class="field">
                                        <input type="text" name="country" placeholder="Land" id="land" onkeyup="check_land()" maxlength="50">
                                        <div class="land-box"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Geboortedatum: <span class="star">*</span>
                                    </td>
                                    <td class="field">
                                        <input id="datetimepicker" name="birthday" type="text" placeholder="&#xf073;  20/01/1990" class="fontawesome">
                                        <div class="datum-box"></div>

                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Antwoord: <span class="star">*</span>
                                    </td>
                                    <td>
                                        <input type="text" name="answer" placeholder="Antwoord" id="antwoord" onkeyup="check_antwoord()" maxlength="255">
                                        <div class="antwoord-box"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><!--<div class="g-recaptcha" data-sitekey="<?php //echo $siteKey; ?>"></div>--></td>
                                </tr>
                            </table>
                            <input id="submitregister" type="submit" value="Registreren" class="rechts smallbtn" disabled>
                        </div>
                    </form>
