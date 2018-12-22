<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home - Getpayed</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
   <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
  <script src="script.js"></script>
</head>
<body>
<div class="row">
    <div class="col-lg-6">
        
    </div>
    <div class="col-lg-6">

    </div>
</div>
                
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <form action="register.php" method="POST">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="username">Email:</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="email">Password:</label>
                            <input type="password" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="email">Confirm Password:</label>
                            <input type="password2" class="form-control" id="email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="bank name">Bank Name:</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="username">Account Number:</label>
                            <input type="number" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="username">Account Name:</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="username">Birth Day:</label>
                            <select class="form-control">
                            <option value="volvo">Day</option>
                                <option value="volvo">1</option>
                                <option value="saab">2</option>
                                <option value="mercedes">3</option>
                                <option value="audi">4</option>
                                <option value="saab">5</option>
                                <option value="mercedes">3</option>
                                <option value="audi">4</option>
                                <option value="saab">6</option>
                                <option value="mercedes">7</option>
                                <option value="audi">8</option>
                                <option value="saab">9</option>
                                <option value="mercedes">10</option>
                                <option value="audi">11</option>
                                <option value="saab">12</option>
                                <option value="mercedes">13</option>
                                <option value="audi">14</option>
                                <option value="saab">15</option>
                                <option value="mercedes">16</option>
                                <option value="audi">17</option>
                                <option value="saab">18</option>
                                <option value="mercedes">19</option>
                                <option value="audi">20</option>
                                <option value="saab">21</option>
                                <option value="mercedes">22</option>
                                <option value="audi">23</option>
                                <option value="saab">24</option>
                                <option value="mercedes">25</option>
                                <option value="audi">26</option>
                                <option value="saab">27</option>
                                <option value="mercedes">28</option>
                                <option value="audi">29</option>
                                <option value="saab">30</option>
                                <option value="mercedes">31</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                        <div class="form-group">
                            <label for="username">Birth Month:</label>
                            <select class="form-control">
                            <option value="volvo">Month</option>
                                <option value="volvo">Jan</option>
                                <option value="saab">Feb</option>
                                <option value="mercedes">March</option>
                                <option value="audi">Apr</option>
                                <option value="saab">May</option>
                                <option value="mercedes">Jun</option>
                                <option value="audi">Jul</option>
                                <option value="saab">Aug</option>
                                <option value="mercedes">Sep</option>
                                <option value="audi">Oct</option>
                                <option value="saab">Nov</option>
                                <option value="mercedes">Dec</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="form-group">
                            <label for="username">Birth Day:</label>
                            <select name="year" class="form-control">
                                <option value="year">Year</option>
                                <script language="javascript">
                                    var offset = new Date().getFullYear() - 18;
                                    for (var i = 1930; i <= offset; i ++) {
                                        document.write("<option value=\"" + i + "\">" + i + "</option>\n");
                                    }
                                </script>
                            </select>
                        </div>
                    </div>
                </div> 
                <input type="submit" value="submit"/>  
                </form>
            </div>
        </div>
    </div>
</section>



</body>
</html>
