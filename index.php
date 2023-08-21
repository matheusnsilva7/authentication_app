<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <title>Register</title>
    <link rel="stylesheet" href="./style/register.css" />
</head>

<body>
    <div class="login-container">
        <h2>devchallenges</h2>
        <h1>Join thousands of learners from around the world </h1>
        <h3>Master web development by making real-life projects. There are multiple paths for you to choose</h3>
        <form method="post" action="./handler_db/create_db.php">
            <div class="input">
                <label for="email">
                    <span class=" material-symbols-outlined">
                        mail
                    </span>
                </label>
                <input type="email" name="email" placeholder="Email" id="email" required>
            </div>
            <div class="input">
                <label for="password">
                    <span class="material-symbols-outlined">
                        lock
                    </span>
                </label>
                <input type="password" name="psswrd" placeholder="Password" id="password" required>
            </div>

            <button>Start coding now</button>
            <?php if (isset($loginError)) {
                echo $loginError;
            } ?>
        </form>
        <p>or continue with these social profile</p>
        <div class="social-media">
            <div>
                <span class="material-symbols-outlined">
                    fingerprint
                </span>
            </div>
            <div>
                <span class="material-symbols-outlined">
                    fingerprint
                </span>
            </div>
            <div>
                <span class="material-symbols-outlined">
                    fingerprint
                </span>
            </div>
            <div>
                <span class="material-symbols-outlined">
                    fingerprint
                </span>
            </div>
        </div>
        <p>Adready a member? <a href="./view/login.php">Login</a></p>
    </div>
</body>

</html>