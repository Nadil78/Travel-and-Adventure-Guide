<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-image: url('traveler and guide.jpg'); 
            background-size: cover;
            background-position: center;
            padding: 20px;
            color: #333;
        }
        .container {
            max-width: 450px;
            margin: auto;
            background: rgba(255, 255, 255, 0.9); 
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        input[type="file"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border 0.3s;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus,
        input[type="tel"]:focus,
        select:focus {
            border: 1px solid orange; 
            outline: none;
        }
        .checkbox-group {
            margin: 15px 0;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: orange;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s;
        }
        button:hover {
            background-color: orange; 
        }
        .link {
            text-align: center;
            margin-top: 15px;
        }
        .hidden {
            display: none;
        }
        .country-select {
            position: relative;
        }
        .country-code {
            display: flex;
            align-items: center;
        }
        .country-code img {
            width: 20px; 
            height: auto;
            margin-right: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Sign Up</h2>
    <form id="signup-form">
        <div class="form-group">
            <label for="full-name">Full Name:</label>
            <input type="text" id="full-name" name="full-name" required>
        </div>

        <div class="form-group">
            <label for="email">Email ID:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Password (8 characters):</label>
            <input type="password" id="password" name="password" minlength="8" required>
        </div>

        <div class="form-group">
            <label for="mobile">Mobile No:</label>
            <div class="country-select">
                <select id="country-code" name="country-code" required>
                    <option value="+94" data-flag="https://flagcdn.com/w320/lk.png">Sri Lanka (+94)</option>
                    <option value="+1" data-flag="https://flagcdn.com/w320/us.png">USA (+1)</option>
                    <option value="+44" data-flag="https://flagcdn.com/w320/gb.png">UK (+44)</option>
                    <option value="+91" data-flag="https://flagcdn.com/w320/in.png">India (+91)</option>
                    <option value="+61" data-flag="https://flagcdn.com/w320/au.png">Australia (+61)</option>
                    <option value="+81" data-flag="https://flagcdn.com/w320/jp.png">Japan (+81)</option>
                    <option value="+49" data-flag="https://flagcdn.com/w320/de.png">Germany (+49)</option>
                    <option value="+33" data-flag="https://flagcdn.com/w320/fr.png">France (+33)</option>
                    <option value="+39" data-flag="https://flagcdn.com/w320/it.png">Italy (+39)</option>
                    <option value="+34" data-flag="https://flagcdn.com/w320/es.png">Spain (+34)</option>
                    <option value="+82" data-flag="https://flagcdn.com/w320/kr.png">South Korea (+82)</option>
                    <option value="+65" data-flag="https://flagcdn.com/w320/sg.png">Singapore (+65)</option>
                    <option value="+55" data-flag="https://flagcdn.com/w320/br.png">Brazil (+55)</option>
                    <option value="+61" data-flag="https://flagcdn.com/w320/nz.png">New Zealand (+61)</option>
                    <option value="+46" data-flag="https://flagcdn.com/w320/se.png">Sweden (+46)</option>
                    <option value="+41" data-flag="https://flagcdn.com/w320/ch.png">Switzerland (+41)</option>
                    <option value="+27" data-flag="https://flagcdn.com/w320/za.png">South Africa (+27)</option>
                    <option value="+62" data-flag="https://flagcdn.com/w320/id.png">Indonesia (+62)</option>
                    <option value="+31" data-flag="https://flagcdn.com/w320/nl.png">Netherlands (+31)</option>
                    <option value="+351" data-flag="https://flagcdn.com/w320/pt.png">Portugal (+351)</option>
                    <option value="+420" data-flag="https://flagcdn.com/w320/cz.png">Czech Republic (+420)</option>
                    <option value="+358" data-flag="https://flagcdn.com/w320/fi.png">Finland (+358)</option>
                    <!-- Add more countries as needed -->
                </select>
                <span class="country-code">
                    <img src="https://flagcdn.com/w320/lk.png" alt="Flag" id="flag-icon" />
                </span>
                <input type="tel" id="mobile" name="mobile" placeholder="Mobile Number" required>
            </div>
        </div>

        <div class="checkbox-group">
            <label>
                <input type="checkbox" id="terms" required> I accept the terms & conditions and privacy policy
            </label>
        </div>

        <div class="form-group">
            <label>Are You a Guide?</label>
            <label>
                <input type="checkbox" id="guide-checkbox"> Join Us
            </label>
        </div>

        <div id="guide-info" class="hidden">
            <div class="form-group">
                <label for="guide-first-name">First Name:</label>
                <input type="text" id="guide-first-name" name="guide-first-name" required>
            </div>

            <div class="form-group">
                <label for="guide-last-name">Last Name:</label>
                <input type="text" id="guide-last-name" name="guide-last-name" required>
            </div>

            <div class="form-group">
                <label for="guide-email">Email ID:</label>
                <input type="email" id="guide-email" name="guide-email" required>
            </div>

            <div class="form-group">
                <label for="guide-password">Password (8 characters):</label>
                <input type="password" id="guide-password" name="guide-password" minlength="8" required>
            </div>

            <div class="form-group">
                <label for="guide-mobile">Mobile No:</label>
                <div class="country-select">
                    <select id="guide-country-code" name="guide-country-code" required>
                        <option value="+94" data-flag="https://flagcdn.com/w320/lk.png">Sri Lanka (+94)</option>
                        <option value="+1" data-flag="https://flagcdn.com/w320/us.png">USA (+1)</option>
                        <option value="+44" data-flag="https://flagcdn.com/w320/gb.png">UK (+44)</option>
                        <option value="+91" data-flag="https://flagcdn.com/w320/in.png">India (+91)</option>
                        <option value="+61" data-flag="https://flagcdn.com/w320/au.png">Australia (+61)</option>
                        <option value="+81" data-flag="https://flagcdn.com/w320/jp.png">Japan (+81)</option>
                        <option value="+49" data-flag="https://flagcdn.com/w320/de.png">Germany (+49)</option>
                        <option value="+33" data-flag="https://flagcdn.com/w320/fr.png">France (+33)</option>
                        <option value="+39" data-flag="https://flagcdn.com/w320/it.png">Italy (+39)</option>
                        <option value="+34" data-flag="https://flagcdn.com/w320/es.png">Spain (+34)</option>
                        <option value="+82" data-flag="https://flagcdn.com/w320/kr.png">South Korea (+82)</option>
                        <option value="+65" data-flag="https://flagcdn.com/w320/sg.png">Singapore (+65)</option>
                        <option value="+55" data-flag="https://flagcdn.com/w320/br.png">Brazil (+55)</option>
                        <option value="+61" data-flag="https://flagcdn.com/w320/nz.png">New Zealand (+61)</option>
                        <option value="+46" data-flag="https://flagcdn.com/w320/se.png">Sweden (+46)</option>
                        <option value="+41" data-flag="https://flagcdn.com/w320/ch.png">Switzerland (+41)</option>
                        <option value="+27" data-flag="https://flagcdn.com/w320/za.png">South Africa (+27)</option>
                        <option value="+62" data-flag="https://flagcdn.com/w320/id.png">Indonesia (+62)</option>
                        <option value="+31" data-flag="https://flagcdn.com/w320/nl.png">Netherlands (+31)</option>
                        <option value="+351" data-flag="https://flagcdn.com/w320/pt.png">Portugal (+351)</option>
                        <option value="+420" data-flag="https://flagcdn.com/w320/cz.png">Czech Republic (+420)</option>
                        <option value="+358" data-flag="https://flagcdn.com/w320/fi.png">Finland (+358)</option>
                        <!-- Add more countries as needed -->
                    </select>
                    <span class="country-code">
                        <img src="https://flagcdn.com/w320/lk.png" alt="Flag" id="guide-flag-icon" />
                    </span>
                    <input type="tel" id="guide-mobile" name="guide-mobile" placeholder="Mobile Number" required>
                </div>
            </div>

            <div class="form-group">
                <label for="guide-bio">Your Bio:</label>
                <textarea id="guide-bio" name="guide-bio" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="cv-upload">Upload CV:</label>
                <input type="file" id="cv-upload" name="cv-upload" accept=".pdf,.doc,.docx" required>
            </div>
        </div>

        <button type="submit">Sign Up</button>
    </form>

    <div class="link">
        <p>Already have an account? <a href="#">Log In</a></p>
    </div>
</div>

<script>
    // Show guide info if checkbox is checked
    document.getElementById('guide-checkbox').addEventListener('change', function () {
        document.getElementById('guide-info').classList.toggle('hidden', !this.checked);
    });

    // Update flag icon when country code changes
    const countrySelect = document.getElementById('country-code');
    const flagIcon = document.getElementById('flag-icon');

    countrySelect.addEventListener('change', function () {
        const selectedOption = countrySelect.options[countrySelect.selectedIndex];
        flagIcon.src = selectedOption.dataset.flag;
    });

    // Update guide flag icon when guide country code changes
    const guideCountrySelect = document.getElementById('guide-country-code');
    const guideFlagIcon = document.getElementById('guide-flag-icon');

    guideCountrySelect.addEventListener('change', function () {
        const selectedOption = guideCountrySelect.options[guideCountrySelect.selectedIndex];
        guideFlagIcon.src = selectedOption.dataset.flag;
    });
</script>

</body>
</html>
