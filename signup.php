
    <main>
        <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfields") {
                    echo '<p>Fill in all fields!</p>';
                }
                else if ($_GET['error'] == "emptyfields") {
                    echo '<p>Invalid username and e-mail!</p>';
                }
                else if ($_GET['error'] == "invaliduid") {
                    echo '<p>Invalid username!</p>';
                }
                else if ($_GET['error'] == "invalidmail") {
                    echo '<p>Invalid e-mail!</p>';
                }
                else if ($_GET['error'] == "passwordcheck") {
                    echo '<p>Your passwords do not match!</p>';
                }
                else if ($_GET['error'] == "emailtaken") {
                    echo '<p>Email is already taken!</p>';
                }
            }
            else if ($_GET['signup'] == "success") {
                echo '<p>Signup successful!</p>';
            }
        ?>
    </main>