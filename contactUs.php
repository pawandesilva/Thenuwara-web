<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact Us</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="ThenuwaraCss.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
    </head>

    <body >
        <div class="mt-4">
            <img src="contact Us.jpg" class="img-fluid" alt=""/>


        </div>
        <nav class="navbar fixed-top navbar-expand-lg bg-body-secondary">
            <div class="container-fluid">
                <a class="navbar-brand text-body-emphasis " href="#">
                    <img src="2.png" alt="Logo" width="100" height="100" class="d-inline-block align-text-middle rounded-3 ">

                    Thenuwara Jewellers</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link "  href="index.php">Home</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutUs.php">About Us</a>
                        </li>
                        <a href="aboutUs.php"></a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Jewellery
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Bridal</a></li>
                                <li><a class="dropdown-item" href="#">Bracelets</a></li>
                                <li><a class="dropdown-item" href="#">Bangles</a></li>
                                <li><a class="dropdown-item" href="#">Chains</a></li>
                                <li><a class="dropdown-item" href="#">Rings</a></li>
                                <li><a class="dropdown-item" href="#">Earings</a></li>
                                <li><a class="dropdown-item" href="#">Pendents</a></li>
                                <li><a class="dropdown-item" href="#">Necklaces</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Other</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link "  href="services.php">Services</a>

                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </form>


                </div>
            </div>
        </nav>
        <div class="container-fluid ">
            <div class="row">
                <div class="col mt-4 text-lg-center offset-md-1">
                    
                <p class="lead">We would love to hear from you, please use the email form below to send us a question!</p>
                <p class="lead">We typically respond to customer e-mails within one business day. </p>
                <p class="lead">Send us your question in the form below.
                </p>
                <div class="col-md-5 mt-5 offset-md-3">
                    <h2 class="text-center mt-4 ">Email Us</h2>
                    <hr class="col-6 offset-md-3 mb-4">

                </div>
                <div  class="border-black">
                    <form style="background-color:     #d9d9d9" id="customerForm" class="col-md-10 p-md-5 rounded-5 text-black offset-md-1 " onsubmit="storeCustomerInfo(event)">
                        <div class="row">
                            <div class="form-group col-md-5">
                                <label for="fnameInput"><b>*First Name</b></label>
                                <input type="text" class="form-control mt-3 " id="fnameInput" placeholder="First Name" required><br>
                            </div>
                            <div class="form-group col-md-5 ">
                                <label for="lnameInput"><b>*Last Name</b></label>
                                <input type="text" class="form-control mt-3 " id="lnameInput" placeholder="Last Name" required><br>

                            </div>
                        </div>
                        <div class="form-group col-md-10">
                            <label for="emailInput"><b>*Email</b> </label>
                            <input type="text" class="form-control mt-3" id="emailInput" placeholder="Email" required><br>
                        </div>
                        <div class="form-group col-md-10">
                            <label for="nicInput"><b>*NIC</b></label>
                            <input type="text" class="form-control mt-3" id="nicInput" placeholder="NIC" required><br>
                        </div>
                        <div class="row">
                            <p><b> Telephone No</b></p>
                            <div class="form-group col-md-5">
                                <label for="hphoneInput"><b>*Home</b></label>
                                <input type="text" class="form-control mt-3" id="hphoneInput" placeholder="TelePhone No" ><br>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="mphoneInput"><b>*Mobile</b></label>
                                <input type="text" class="form-control mt-3" id="mphoneInput" placeholder="TelePhone No" required><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-5 ">
                                <label for="SubjectInput"><b>*Subject</b></label>
                                <select class="form-control" id="SubjectInput" >
                                    <option value="product_information"><b>Product Information</b></option>
                                <option value="custom_design ">Custom Design</option>
                                <option value="jewellery_repair">Jewellery Repair</option>
                                    <option value="other">Other</option>
                                </select>

                            </div>
                            <div class="form-group col-md-5">
                                <label for="fileUpload"><b>*Upload </b><br>(max file size:10MB)</label>
                                <input type="file" class="form-control-file" id="fileUpload" accept=".jpg,.jpeg,.png,.pdf">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="form-group col-md-5">
                                <label for="addressInput"><b>*Address</b></label>
                                <textarea id="addressInput" name="Address" rows="3" cols="47"></textarea>
                            </div>
                        </div>
                        <div class="form-group col-md-5 mt-4">
                            <label for="commentsInput"><b>*Comments</b></label>
                            <textarea id="commentsInput" name="comments" rows="4" cols="47"></textarea>
                        </div>
                        <div class="col-5 offset-md-3 mt-3">
                            <button type="submit" class="btn btn-outline-dark col-10" >Submit</button>
                        </div>
                                            </form>
                    

                </div>




                </div>




                <div class="col mt-auto ">
                    <div class="container-fluid">
                       <img src="contact2.jpg" alt="im1"/>
                       
                    </div>



                    
            </div>
                         
<div class="container mt-5 bg-body-tertiary">
  <div class="row rounded-2 blue-bg">
    <div class="col-md-5 ">
      <section class="contact-section">
        <div class="container rounded-4 offset-md-4">
          <h2>Address:</h2>
          <div class="row">
            <div class="col-lg-9 offset-md-3 ">
              <p class="address" style="font-size: 30px">
                Thenuwara Jewellers<br>
                56/11,<br> Alubomulla,<br>
                Panadura,<br> Sri Lanka.
              </p>
            </div>
          </div>
        </div>
      </section>
    </div>

    <div class="col-md-3 offset-md-1 offset-md-2">
      <h2>Contact:</h2>
      <div class="row">
        <div class="col-lg-9 offset-md-3 ">
          <p class="telephone" style="font-size: 45px">
            0382247809 <br>
            0777888351<br>
            0777653786<br>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
            </div>
            
        </div>
        


<footer class="align-content-end offset-5">
  <p>&copy; Thenuwara Jewellers. All Rights Reserved.</p>
</footer>

    </body>
</html>
