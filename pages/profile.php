<?php

if(!isset($_SESSION))
{
    session_start();
}

if(isset($_SESSION['user-profile-stored-photo']) || isset($_SESSION['user-profile-image']))
{
    if(!empty($_SESSION['user-profile-stored-photo']))
    {
        $store = $_SESSION['user-profile-stored-photo'];
        $photo_stored = "uploads/$store";
    }
    else if(!empty($_SESSION['user-profile-image']))
    {
        $store = $_SESSION['user-profile-image'];
        $photo_stored = "uploads/$store";
    }
    else
    {
        $photo_stored = "images/blank-profile-picture.png";
    }
} else { $photo_stored = "images/blank-profile-picture.png";}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>GAMER|LAND</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../images/gamerland-logo-light.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/header.css">
    <script src="../js/project.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>

<body class="disable-select" onscroll="scroll1()">
    <?php include("header.php"); ?>
    <section class="u-profile">
        <img class="zoom-bg" src="images/battle_image_2.jpg">
        <div class="profile-submittion container">
            <section class="profile col-sm-4 col-lg-3">
                <form action="upload-user-image" method="POST" enctype="multipart/form-data">
                    <div class="profile-image">
                        <img class="user-profile-photo" src="<?php echo $photo_stored; ?>">
                    </div>
                    <div class="profile-select">
                        <input class="p-image" type="file" name="user-photo">
                        <input type="submit" name="submit-profile">
                    </div>
                </form>
            </section>
            <section class="profile-info col-sm-12 col-lg-9">
                <form class="profile-sections" action="detail" method="POST" id="detail-form">
                    <div class="profile-info-form">
                        <div class="p-detail">
                            <h2 class="p-detail-head">personal details</h2>
                        </div>
                        <div class="info">
                            <label for="Name">Name: </label>
                            <input class="p_d" type="text" placeholder="Name" name="name" value="<?php if(isset($_SESSION['name'])){echo $_SESSION['name'];} else{echo '';} ?>" required>
                        </div>
                        <div class="info">
                            <label for="Lastname">Lastname: </label>
                            <input class="p_d" type="text" placeholder="Lastname" name="lastname" value="<?php if(isset($_SESSION['lastname'])){echo $_SESSION['lastname'];} else{echo '';} ?>" required>
                        </div>
                        <div class="info">
                            <label for="Username">Username: </label>
                            <input class="p_d" type="text" placeholder="Username" name="username" value="<?php if(isset($_SESSION['username'])){echo $_SESSION['username'];} else{echo '';} ?>" required>
                        </div>
                        <div class="info">
                            <label for="Email">Email: </label>
                            <input class="p_d" type="email" placeholder="Email" name="email" value="<?php if(isset($_SESSION['mail'])){echo $_SESSION['mail'];} else{echo '';} ?>" required>
                        </div>
                        <div class="info">
                            <label for="Mobile Number">Mobile Number: </label>
                            <input class="p_d" type="tel" placeholder="Mobile Number" name="mobile" value="<?php if(isset($_SESSION['mobile'])){echo $_SESSION['mobile'];} else{echo '';} ?>" required>
                        </div>
                        <div class="info">
                            <label for="Language">Language: </label>
                            <select class="p_d" id="languages" name="languages" required>
                                <option value="blank"><?php if(isset($_SESSION['language'])){echo $_SESSION['language'];} else{echo '';} ?></option>
                                <option value="af">Afrikaans</option>
                                <option value="sq">Albanian - shqip</option>
                                <option value="am">Amharic - አማርኛ</option>
                                <option value="ar">Arabic - العربية</option>
                                <option value="an">Aragonese - aragonés</option>
                                <option value="hy">Armenian - հայերեն</option>
                                <option value="ast">Asturian - asturianu</option>
                                <option value="az">Azerbaijani - azərbaycan dili</option>
                                <option value="eu">Basque - euskara</option>
                                <option value="be">Belarusian - беларуская</option>
                                <option value="bn">Bengali - বাংলা</option>
                                <option value="bs">Bosnian - bosanski</option>
                                <option value="br">Breton - brezhoneg</option>
                                <option value="bg">Bulgarian - български</option>
                                <option value="ca">Catalan - català</option>
                                <option value="ckb">Central Kurdish - کوردی (دەستنوسی عەرەبی)</option>
                                <option value="zh">Chinese - 中文</option>
                                <option value="zh-HK">Chinese (Hong Kong) - 中文（香港）</option>
                                <option value="zh-CN">Chinese (Simplified) - 中文（简体）</option>
                                <option value="zh-TW">Chinese (Traditional) - 中文（繁體）</option>
                                <option value="co">Corsican</option>
                                <option value="hr">Croatian - hrvatski</option>
                                <option value="cs">Czech - čeština</option>
                                <option value="da">Danish - dansk</option>
                                <option value="nl">Dutch - Nederlands</option>
                                <option value="en">English</option>
                                <option value="en-AU">English (Australia)</option>
                                <option value="en-CA">English (Canada)</option>
                                <option value="en-IN">English (India)</option>
                                <option value="en-NZ">English (New Zealand)</option>
                                <option value="en-ZA">English (South Africa)</option>
                                <option value="en-GB">English (United Kingdom)</option>
                                <option value="en-US">English (United States)</option>
                                <option value="eo">Esperanto - esperanto</option>
                                <option value="et">Estonian - eesti</option>
                                <option value="fo">Faroese - føroyskt</option>
                                <option value="fil">Filipino</option>
                                <option value="fi">Finnish - suomi</option>
                                <option value="fr">French - français</option>
                                <option value="fr-CA">French (Canada) - français (Canada)</option>
                                <option value="fr-FR">French (France) - français (France)</option>
                                <option value="fr-CH">French (Switzerland) - français (Suisse)</option>
                                <option value="gl">Galician - galego</option>
                                <option value="ka">Georgian - ქართული</option>
                                <option value="de">German - Deutsch</option>
                                <option value="de-AT">German (Austria) - Deutsch (Österreich)</option>
                                <option value="de-DE">German (Germany) - Deutsch (Deutschland)</option>
                                <option value="de-LI">German (Liechtenstein) - Deutsch (Liechtenstein)</option>
                                <option value="de-CH">German (Switzerland) - Deutsch (Schweiz)</option>
                                <option value="el">Greek - Ελληνικά</option>
                                <option value="gn">Guarani</option>
                                <option value="gu">Gujarati - ગુજરાતી</option>
                                <option value="ha">Hausa</option>
                                <option value="haw">Hawaiian - ʻŌlelo Hawaiʻi</option>
                                <option value="he">Hebrew - עברית</option>
                                <option value="hi">Hindi - हिन्दी</option>
                                <option value="hu">Hungarian - magyar</option>
                                <option value="is">Icelandic - íslenska</option>
                                <option value="id">Indonesian - Indonesia</option>
                                <option value="ia">Interlingua</option>
                                <option value="ga">Irish - Gaeilge</option>
                                <option value="it">Italian - italiano</option>
                                <option value="it-IT">Italian (Italy) - italiano (Italia)</option>
                                <option value="it-CH">Italian (Switzerland) - italiano (Svizzera)</option>
                                <option value="ja">Japanese - 日本語</option>
                                <option value="kn">Kannada - ಕನ್ನಡ</option>
                                <option value="kk">Kazakh - қазақ тілі</option>
                                <option value="km">Khmer - ខ្មែរ</option>
                                <option value="ko">Korean - 한국어</option>
                                <option value="ku">Kurdish - Kurdî</option>
                                <option value="ky">Kyrgyz - кыргызча</option>
                                <option value="lo">Lao - ລາວ</option>
                                <option value="la">Latin</option>
                                <option value="lv">Latvian - latviešu</option>
                                <option value="ln">Lingala - lingála</option>
                                <option value="lt">Lithuanian - lietuvių</option>
                                <option value="mk">Macedonian - македонски</option>
                                <option value="ms">Malay - Bahasa Melayu</option>
                                <option value="ml">Malayalam - മലയാളം</option>
                                <option value="mt">Maltese - Malti</option>
                                <option value="mr">Marathi - मराठी</option>
                                <option value="mn">Mongolian - монгол</option>
                                <option value="ne">Nepali - नेपाली</option>
                                <option value="no">Norwegian - norsk</option>
                                <option value="nb">Norwegian Bokmål - norsk bokmål</option>
                                <option value="nn">Norwegian Nynorsk - nynorsk</option>
                                <option value="oc">Occitan</option>
                                <option value="or">Oriya - ଓଡ଼ିଆ</option>
                                <option value="om">Oromo - Oromoo</option>
                                <option value="ps">Pashto - پښتو</option>
                                <option value="fa">Persian - فارسی</option>
                                <option value="pl">Polish - polski</option>
                                <option value="pt">Portuguese - português</option>
                                <option value="pt-BR">Portuguese (Brazil) - português (Brasil)</option>
                                <option value="pt-PT">Portuguese (Portugal) - português (Portugal)</option>
                                <option value="pa">Punjabi - ਪੰਜਾਬੀ</option>
                                <option value="qu">Quechua</option>
                                <option value="ro">Romanian - română</option>
                                <option value="mo">Romanian (Moldova) - română (Moldova)</option>
                                <option value="rm">Romansh - rumantsch</option>
                                <option value="ru">Russian - русский</option>
                                <option value="gd">Scottish Gaelic</option>
                                <option value="sr">Serbian - српски</option>
                                <option value="sh">Serbo-Croatian - Srpskohrvatski</option>
                                <option value="sn">Shona - chiShona</option>
                                <option value="sd">Sindhi</option>
                                <option value="si">Sinhala - සිංහල</option>
                                <option value="sk">Slovak - slovenčina</option>
                                <option value="sl">Slovenian - slovenščina</option>
                                <option value="so">Somali - Soomaali</option>
                                <option value="st">Southern Sotho</option>
                                <option value="es">Spanish - español</option>
                                <option value="es-AR">Spanish (Argentina) - español (Argentina)</option>
                                <option value="es-419">Spanish (Latin America) - español (Latinoamérica)</option>
                                <option value="es-MX">Spanish (Mexico) - español (México)</option>
                                <option value="es-ES">Spanish (Spain) - español (España)</option>
                                <option value="es-US">Spanish (United States) - español (Estados Unidos)</option>
                                <option value="su">Sundanese</option>
                                <option value="sw">Swahili - Kiswahili</option>
                                <option value="sv">Swedish - svenska</option>
                                <option value="tg">Tajik - тоҷикӣ</option>
                                <option value="ta">Tamil - தமிழ்</option>
                                <option value="tt">Tatar</option>
                                <option value="te">Telugu - తెలుగు</option>
                                <option value="th">Thai - ไทย</option>
                                <option value="ti">Tigrinya - ትግርኛ</option>
                                <option value="to">Tongan - lea fakatonga</option>
                                <option value="tr">Turkish - Türkçe</option>
                                <option value="tk">Turkmen</option>
                                <option value="tw">Twi</option>
                                <option value="uk">Ukrainian - українська</option>
                                <option value="ur">Urdu - اردو</option>
                                <option value="ug">Uyghur</option>
                                <option value="uz">Uzbek - o‘zbek</option>
                                <option value="vi">Vietnamese - Tiếng Việt</option>
                                <option value="wa">Walloon - wa</option>
                                <option value="cy">Welsh - Cymraeg</option>
                                <option value="fy">Western Frisian</option>
                                <option value="xh">Xhosa</option>
                                <option value="yi">Yiddish</option>
                                <option value="yo">Yoruba - Èdè Yorùbá</option>
                                <option value="zu">Zulu - isiZulu</option>
                            </select>
                        </div>
                        <div class="address">
                            <h2 class="address-head">address:</h2>
                        </div>
                        <div class="info">
                            <label for="Address 1">Address 1: </label>
                            <input class="p_d" class="addresses" type="text" placeholder="Address 1" value="<?php if(isset($_SESSION['add-1'])){echo $_SESSION['add-1'];} else{echo '';} ?>" name="address-1">
                        </div>
                        <div class="info">
                            <label for="Address 2">Address 2: </label>
                            <input class="p_d" class="addresses" type="text" placeholder="Address 2" value="<?php if(isset($_SESSION['add-2'])){echo $_SESSION['add-2'];} else{echo '';} ?>" name="address-2">
                        </div>
                        <div class="info">
                            <label for="City">City: </label>
                            <input class="p_d" class="addresses" type="text" placeholder="City" value="<?php if(isset($_SESSION['city'])){echo $_SESSION['city'];} else{echo '';} ?>" name="city">
                        </div>
                        <div class="info">
                            <label for="Country">Country: </label>
                            <select class="p_d" id="country" name="country" required>
                                <option value="blank"><?php if(isset($_SESSION['country'])){echo $_SESSION['country'];} else{echo '';} ?></option>
                                <option value="Afganistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bonaire">Bonaire</option>
                                <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                <option value="Brunei">Brunei</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Canary Islands">Canary Islands</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Channel Islands">Channel Islands</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos Island">Cocos Island</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote DIvoire">Cote DIvoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Curaco">Curacao</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor">East Timor</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands">Falkland Islands</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Ter">French Southern Ter</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Great Britain">Great Britain</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Hawaii">Hawaii</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="India">India</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea North">Korea North</option>
                                <option value="Korea Sout">Korea South</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Laos">Laos</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macau">Macau</option>
                                <option value="Macedonia">Macedonia</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Midway Islands">Midway Islands</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Nambia">Nambia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherland Antilles">Netherland Antilles</option>
                                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                <option value="Nevis">Nevis</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau Island">Palau Island</option>
                                <option value="Palestine">Palestine</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Phillipines">Philippines</option>
                                <option value="Pitcairn Island">Pitcairn Island</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Republic of Montenegro">Republic of Montenegro</option>
                                <option value="Republic of Serbia">Republic of Serbia</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russia</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="St Barthelemy">St Barthelemy</option>
                                <option value="St Eustatius">St Eustatius</option>
                                <option value="St Helena">St Helena</option>
                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                <option value="St Lucia">St Lucia</option>
                                <option value="St Maarten">St Maarten</option>
                                <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                <option value="Saipan">Saipan</option>
                                <option value="Samoa">Samoa</option>
                                <option value="Samoa American">Samoa American</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syria</option>
                                <option value="Tahiti">Tahiti</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Erimates">United Arab Emirates</option>
                                <option value="United States of America">United States of America</option>
                                <option value="Uraguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Vatican City State">Vatican City State</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                <option value="Wake Island">Wake Island</option>
                                <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zaire">Zaire</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                        <div class="info">
                            <label for="Postal">Postal: </label>
                            <input class="p_d" class="addresses" type="text" placeholder="Postal" value="<?php if(isset($_SESSION['postal'])){echo $_SESSION['postal'];} else{echo '';} ?>" name="postal">
                        </div>
                        <div class="form-buttons">
                            <input class="button" type="submit" name="detail-form" placeholder="Submit">
                            <input class="button" type="reset" name="detail-form" placeholder="Reset">
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </section>
</body>

</html>