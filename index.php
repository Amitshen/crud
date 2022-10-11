<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootsrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>jQuery</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="alert-info text-center mb-5 p-3">
            AJEX --PHP -- Bootstrap 5 -- jQuery (CRUD)
        </h1>
        <div class="row">
            <form action="" id="myform" class="col-sm-5">
                <h3 class="alert-warning text-center p-2">Add/Update Student</h3>
                <div>
                    <!-- <input type="text" class="form-control" id="stuid"> -->
                    <label for="nameid" class="form-label">Name</label>
                    <input class="form-control" placeholder="Amit" type="text" id="nameid"></input>
                </div>
                <div>
                    <label for="emailid" class="form-label">Email</label>
                    <input class="form-control" placeholder="amit@gmail.com" type="" id="emailid" require></input>
                </div>
                <div>
                    <label for="password" class="form-label">Password</label>
                    <input class="form-control" placeholder="8 digit strong password" type="password" id="passwordid"></input>
                </div>
                <div class="mt-5">
                    <button type="submit" class="btn btn-outline-success" id="btnadd">Save</button>
                </div>
                <div id="msg"></div>
            </form>
            <div class="col-sm-7 text-center">
                <h3 class="alert-warning p-2">Show Student Infomation </h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="clo">ID</th>
                            <th scope="clo">Name</th>
                            <th scope="clo">Email</th>
                            <th scope="clo">Password</th>
                            <th scope="clo">Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbody"></tbody>
                </table>
            </div>
        </div>
        
    </div>
    <script src="js/bootstrap.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jqajex.js"></script>
</body>
</html>