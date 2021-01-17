<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/regstyles.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Create Account</h2>
        </div>
        <form id="form" class="form">
            <div class="form-control">
                <label for="email">Email</label>
                <input type="email" placeholder="john@doe.com" id="email" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="studentid">Student ID</label>
                <input type="text" placeholder="johndoe12" id="studentid" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="studenttype">Student Type</label>
                <select type="password" id="studenttype">
                    <option value="voter">Voter</option>
                    <option value="candidate">Candidate</option>
                </select>
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" placeholder="Password" id="password"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="password2">Confirm Password</label>
                <input type="password" placeholder="Confirm password" id="password2"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="acc-exist-wrapper">
                <p class="acc-exist">Already have an account? <a href="../loginpage/login.html">Click here</a></p>
            </div>
            <button>Submit</button>
        </form>
    </div>
    <script src="regscript.js"></script>
</body>
</html>