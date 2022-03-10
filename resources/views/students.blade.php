<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>STUDENT MANAGEMENT SYSTEM!</title>
  </head>
  <body>

      <div class="container-fluid">
        <div class="row">
          
          <section class="col-12">
            <form action="{{ url('/addstudent') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label class="form-label">Certified number Educator</label>
                <input type="text" name="cne" class="form-control" id="cne" placeholder="Enter your Certified number Educator">
              <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="text" name="firstName" class="form-control" id="firstName" placeholder="Enter First Name">
              </div>
              <div class="mb-3">
                <label  class="form-label">Second Name</label>
                <input type="text" name="secondName" class="form-control" id="secondName" placeholder="Enter Second Name">
              </div>
              
              <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="number" name="age" class="form-control" name="age" id="age" placeholder="Enter Your Age">
              </div>
              <div class="mb-3">
                <label  class="form-label">Speciality</label>
                <input type="text" name="speciality" class="form-control" id="speciality" placeholder="Enter your speciality">
              </div>
                            
              <button type="submit" class="btn btn-primary" name="save">Submit</button>
              <!--<button type="submit" class="btn btn-secondary">Reset</button>-->
            </form>
          </section>
        </div>
        <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
        
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">STUDENT INFORMATION</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
        
             
        
              <!-- Modal footer -->
             
        
            </div>
          </div>
        </div>
        <div class="modal" id="myModal1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">
                   Are sure you want to delete "{->firstName}} {->secondName}" ?
                   <div class="modal-footer">
                   <a  class="btn btn-danger" href="#">Yes</a>
                      <button type="submit" class="btn btn-success">No</button>      
                             
                   </div> 
              </div>
            </div>
          </div>
        </div>
        <div class="modal" id="myModal2">
          <div class="modal-dialog">
            <div class="modal-content">
        
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">STUDENT PROFILE INFORMATION</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <div class="modal-body">
              <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">

                    <div class="col-sm-6 col-md-8">
                        <h4>"firstName secondName"</h4>
                        <small><cite title="San Francisco, USA">San Francisco, USA <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i>email@example.com
                            <br />
                            <i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a>
                            <br />
                            <i class="glyphicon glyphicon-gift"></i>June 02, 1988</p>
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">
                                Social</button>
              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
               </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
  </body>
</html>