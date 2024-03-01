<div class="container" id="container">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,800'>
    <link rel="stylesheet" href="./LoginStyle.css">
    <div class="form-container sign-up-container">
        <form action="./RegisterCode.php" method="post">
            <h1>Create Account</h1>
            <span>or use your email for registration</span>
            <?php if (isset($_GET['error'])) { ?>
     		    <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
     	    <?php } ?>
            <?php if (isset($_GET['success'])) { ?>
     		    <div class="alert alert-success" role="alert">
                    <?php echo $_GET['success']; ?>
                </div>
     	    <?php } ?>
            <?php if (isset($_GET['name'])) { ?>
                <input type="text" 
                        name="name" 
                        placeholder="Name"
                        value="<?php echo $_GET['name']; ?>"><br>
            <?php }else{ ?>
                <input type="text" 
                        name="name" 
                        placeholder="Name"><br>
            <?php }?>
            <?php if (isset($_GET['username'])) { ?>
               <input type="text" 
                      name="username" 
                      placeholder="User Name"
                      value="<?php echo $_GET['username']; ?>"><br>
            <?php }else{ ?>
                <input type="text" 
                        name="username" 
                        placeholder="User Name"><br>
            <?php }?>
            <input type="password" name="password" placeholder="Password" />
            <button>Sign Up</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="./LoginCode.php" method="post">
            <h1>Sign in</h1>
            <span>or use your account</span>
            <?php if (isset($_GET['error'])) { ?>
     		    <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
     	    <?php } ?>
            <input type="text" name="uname" placeholder="User Name" />
            <input type="password" name="password" placeholder="Password" />
            <a href="#">Forgot your password?</a>
            <button>Sign In</button>
            <a>OR</a>
            <span>
                <a href="../Admin/index.php">Connect as administrator</a>
            </span>
        
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>
<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>