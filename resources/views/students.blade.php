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
     
      @if ($layout == 'index')

      <div class="container-fluid">
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
                @foreach ($students as $students )
                <tr>
                  <td>{{$students->cne }}</td>
                  <td>{{ $students->firstName }} </td>
                  <td>{{ $students->secondName }} </td>
                  <td>{{ $students->age }} </td>
                  <td>{{ $students->speciality }} </td>
                  <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModal">
                      Edit
                    </button>
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#myModal2">
                      Show
                    </button>              
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal1">
                      Delete
                    </button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>   
          </section>
          <section class="col-5">
            <form action="{{ url('/store') }}" method="POST">
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
        
              <!-- Modal body -->
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label >Certified Number Educator</label>
                    <input type="number" class="form-control" id="cne" placeholder="{{$students->cne }}">
                  </div>
                  <div class="form-group">
                    <label >First Name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="{{$students->firstName}}">
                  </div>
                  <div class="form-group">
                    <label >Second Name</label>
                    <input type="number" class="form-control" id="secondName" placeholder="{{$students->secondName}}">
                  </div>
                  <div class="form-group">
                    <label >Age</label>
                    <input type="number" class="form-control" id="age" placeholder="{{$students->age}}">
                  </div>
                  <div class="form-group">
                    <label>Speciality</label>
                    <input type="type" class="form-control" id="speciality" aria-describedby="emailHelp" placeholder="{{$students->speciality}}">
                  </div>                
                </form>
              </div>
        
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update</button>          
               </div>
        
            </div>
          </div>
        </div>
        <div class="modal" id="myModal1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">
                   Are sure you want to delete {{$students->firstName}} {{$students->firstName}} ?
                   <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Yes</button>  
                      <button type="submit" class="btn btn-success">No</button>      
                             
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