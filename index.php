<?php include_once "header.php";?>
    <body>
        <div class="wrapper">
            <section class="form signup">
                <header>Comp Sci Chat</header>
                <form action="#">
                    <div class="error-txt">ERROR MESSAGE</div>
                    <div class="name-details">
                        <div class="field input">
                            <label>First Name</label>
                            <input type="text" name="fname" placeholder="First Name" required>
                        </div>
                        <div class="field input">
                            <label>Last Name</label>
                            <input type="text" name="lname" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="field input">
                        <label>MyLaurier Email</label>
                        <input type="text" name="email" placeholder="Enter MyLaurier Email" required>
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Create a Password" required></input>
                        <button type="button">Show/Hide Password</button>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue">
                    </div>
                    
                </form>
                <div class="link">Already a Member? <a href="#">Login Here</a></div>
            </section>
        </div>

        <script src="javascript/pass-show-hide.js"></script>
        <script src="javascript/signup.js"></script>

    </body>

    