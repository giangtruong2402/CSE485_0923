
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/js/all.min.js">
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 bg-white ">
            <a href="index.php"><img src="image/logo.png" alt=""></a>
            <div class="menu">
                <h3 data-bs-toggle="collapse" href="#menu1" aria-expanded="false" class="d-flex align-items-center justify-content-between">
                   <div>
                   <i class="fa-regular fa-user mr-2 "></i> User
                   </div>
                    <i class="fa-solid fa-chevron-down ml-2"></i>
                </h3>
                <ul class="collapse" id="menu1">
                    <li><a href="user.php">Users</a></li>
                    <li><a href="#">Groups</a></li>
                    <li><a href="#">Permissions</a></li>
                </ul>
            </div>


            <div class="menu">
                <h3 data-bs-toggle="collapse" href="#menu2" aria-expanded="false">CMS</h3>
                <ul class="collapse" id="menu2">
                    <li><a href="#">Danh sách 1</a></li>
                    <li><a href="#">Danh sách 2</a></li>
                    <li><a href="#">Danh sách 3</a></li>
                    <li><a href="#">Danh sách 4</a></li>
                    <li><a href="#">Danh sách 5</a></li>
                </ul>
            </div>
            <div class="menu">
                <h3 data-bs-toggle="collapse" href="#menu3" aria-expanded="false">Config</h3>
                <ul class="collapse" id="menu3">
                    <li><a href="#">Danh sách 1</a></li>
                    <li><a href="#">Danh sách 2</a></li>
                    <li><a href="#">Danh sách 3</a></li>
                    <li><a href="#">Danh sách 4</a></li>
                    <li><a href="#">Danh sách 5</a></li>
                </ul>
            </div>
            <div class="menu">
                <h3 data-bs-toggle="collapse" href="#menu4" aria-expanded="false">Dashboard</h3>
                <ul class="collapse" id="menu4">
                    <li><a href="#">Danh sách 1</a></li>
                    <li><a href="#">Danh sách 2</a></li>
                    <li><a href="#">Danh sách 3</a></li>
                    <li><a href="#">Danh sách 4</a></li>
                    <li><a href="#">Danh sách 5</a></li>
                </ul>
            </div>
            <div class="menu">
                <h3 data-bs-toggle="collapse" href="#menu5" aria-expanded="false">Courses</h3>
                <ul class="collapse" id="menu5">
                    <li><a href="#">Danh sách 1</a></li>
                    <li><a href="#">Danh sách 2</a></li>
                    <li><a href="#">Danh sách 3</a></li>
                    <li><a href="#">Danh sách 4</a></li>
                    <li><a href="#">Danh sách 5</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9" style="background-color: antiquewhite;">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center p-3">
                    <a href="#" style="text-decoration: none; color: black;"><i class="fa-solid fa-bars fa-2xl p-3"></i></a>
                    <div class="mr-3"></div>
                    <a href="#" style="text-decoration: none; color: black;"><h3>User</h3></a>
                </div>
                <form action="" style="background-color: white; border-radius: 15px;">
                    <div class="d-flex align-items-center p-1">
                        <a href="#" style="text-decoration: none; color: black;">
                            <i class="fa-solid fa-magnifying-glass p-1" style="margin-right: 10px; color:indianred;"></i>
                        </a>
                        <input type="text" class="form-control border-0" style="font-size: 1rem; outline: none;" placeholder="Search here...">
                    </div>
                </form>
            </div>
            <div class="class=bg-white">
                <h1>Add User</h1>
                <form action="process.php" method="POST">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Username <span>*</span></label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email <span>*</span></label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber">Phone Number <span>*</span></label>
                        <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required>
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <input type="text" class="form-control" id="role" name="role">
                    </div>
                    <div class="form-group">
                        <label>Gender <span>*</span></label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="male" name="gender" value="Male" required>
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="female" name="gender" value="Female" required>
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dob">Date of Birth <span>*</span></label>
                        <input type="date" class="form-control" id="dob" name="dob" required>
                    </div>
                    <div class="form-group">
                        <label for="facebookUrl">Facebook Url</label>
                        <input type="text" class="form-control" id="facebookUrl" name="facebookUrl">
                    </div>
                    <div class="form-group">
                        <label for="twitterUrl">Twitter Url</label>
                        <input type="text" class="form-control" id="twitterUrl" name="twitterUrl">
                    </div>
                    <div class="form-group">
                        <label for="linkedinUrl">Linkedin Url</label>
                        <input type="text" class="form-control" id="linkedinUrl" name="linkedinUrl">
                    </div>
                    <div class="form-group">
                        <label for="about">About</label>
                        <textarea class="form-control" id="about" name="about" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="password">Password <span>*</span></label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password <span>*</span></label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-warning">Cancel</button>
                </form>
            </div>
        </div>
        <div class="col-md-1 bg-white">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem soluta at quis, voluptas voluptatum architecto non magnam quaerat temporibus eius? </p>
        </div>
    </div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>