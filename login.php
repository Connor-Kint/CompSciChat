<?php include_once "header.php";?>
    <body>
        <div class="wrapper">
            <section class="form login">
                <header>Comp Sci Chat</header>
                <form action="#">
                    <div class="error-txt">ERROR MESSAGE</div>
                    <div class="field input">
                        <label>MyLaurier Email</label>
                        <input type="text" name="email" placeholder="Enter MyLaurier Email" required>
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Create a Password">
                        <button type="button">Show/Hide Password</button>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue" required>
                    </div>
                    
                </form>
                <div class="link">Not a member yet? <a href="#">Sign up here</a></div>
            </section>
        </div>

        <script src="javascript/pass-show-hide.js"></script>
        <script src="javascript/login.js"></script>

    </body>
</html>
    