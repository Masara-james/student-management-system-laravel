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
     <div class="image">
          <img src="student.png"heigth="250px" width="600px" alt="">
        </div>
    <div class="container">
      <div class="row">
      <section class="col-7">
        
            <table class="table">
      
              <thead class="thread-light">
                <tr>
                  <th scope="col">cne</th>
                  <th scope="col">First Name</th>
                  <th scope="col">Second Name</th>
                  <th scope="col">Age</th>
                  <th scope="col">Speciality</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                
                @foreach ($students as $student )
      
                <tr>
                  <td>{{ $student->cne }}</td>
                  <td>{{ $student->firstName }} </td>
                  <td>{{ $student->secondName }} </td>
                  <td>{{ $student->age }} </td>
                  <td>{{ $student->speciality }} </td>
                  <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModal">
                      Edit
                    </button>
                   <a href="{{url('/show/'.$student->id)}}" type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#myModal2">
                      Show
                    </a>              
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal3">
                      Delete
                    </button>
                  </td>
                </tr>            
                <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModal3" aria-hidden="true">
               <div class="modal-dialog" role="document">
                 <div class="modal-content">
                   <div class="modal-header" style="postion:relative">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position:absolute; right:10px; top:5px">
                       <span aria-hidden="true">&times;</span>
                     </button>
                   </div>
                   <div class="modal-body">
                      <span class="text-dark">
                     Are sure you want to  delete this {{$student->firstName}} {{$student->secondName}}?
                   </span>
                   </div>
                   <div class="modal-footer">
                    <a class=" btn btn-danger"  href="{{url('/delete/'.$student->id)}}">Yes</a>        
                    <a href="" class=" btn btn-primary" >No</a>        
                   </div>
                 </div>
               </div>
             </div>
             @endforeach
                  <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal3" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header bg-success" style="postion:relative">
                         <h1 class="text-white">
                           STUDENT INFORMATION
                         </h1>
                        </div>
                            <div class="modal-body bg-info text-dark">
                               <div class="panel-body bio-graph-info">
                                    <div class="row">
                                        <div class="container">
                                        <div class="bio-row">
                                            <p><span>First Name </span>: Smith</p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Last Name </span>: Smith</p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Country </span>: Australia</p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Birthday</span>: 13 July 1983</p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Occupation </span>: UI Designer</p>
                                                              </div>
                                        <div class="bio-row">
                                            <p><span>Email </span>: jsmith@flatlab.com</p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Mobile </span>: (12) 03 4567890</p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Phone </span>: 88 (02) 123456</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                   </div>
                         <div class="modal-footer">
                            <a href="" class="btn btn-danger">
                             Close
                            </a>             
                         </div>
                       </div>
                     </div>
                   </div>
                
              </tbody>
            </table>  
          </section>
         <section class="col-5">
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
              <button type="submit" class="btn btn-secondary">Reset</button>
            </form>
         </section>
    </div>
  
      </div>
    

          
</body>
</html>