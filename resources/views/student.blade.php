@extends('layouts.auth')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    

                    <div class="card-body" >
                        Welcome back,
                        {{Auth::guard('student')->user()->name}}!

                        
                    </div>
                      
                </div>
            </div> 
        </div>
        
        <div class="col-md-8">
        <table class="table table-striped table-bordered" background="{{asset('anik/images/image.jpg')}}" style="color: white; position: relative; top: 40px; left:180px" >
            
            <tr>
                <td>Name</td>
                <td>{{  $student->name }}</td>
            </tr>
            <tr>
                <td>Institute</td>
                <td>{{ $student->institute }}</td>
            </tr>
            <tr>
                <td>Dept</td>
                <td>{{ $student->dept }}</td>
            </tr>
            <tr>
                <td>Reg</td>
                <td>{{ $student->iid }}</td>
            </tr>
            <tr>
                <td>Cell</td>
                <td>{{ $student->cell }}</td>
            </tr>

            <tr>
                <td>Email</td>
                <td>{{ $student->email }}</td>
            </tr>

      
           
      </table>
      </div>
      
      <table class="table table-striped table-bordered" background="{{asset('anik/images/picture.jpg')}}" style="color: white; position: relative; top: 40px; " >
        <thead >
          
          <tr >
             <td style="text-align:center;">Assigned Project and Thesis</td>
          </tr>
        </thead>
      </table>

      

      
        <table class="table table-striped table-bordered" background="{{asset('anik/images/image.jpg')}}" style="color: white; position: relative; top:40px;" >
            <thead >
                <tr>
                    <!--<td>T_ID</td>-->
                    <td>Title</td>
                    <td>Description</td>
                    <td>Platform</td>
                    <td>Github Link</td>
                    <td>details</td>
                    
                </tr>
            </thead>
            <tbody style="color: white;">
            @foreach($project as $project)
            @php
            $id=$project->title
            @endphp
            <tr>

                <td>{{ $project->title }}</td>
                <td>{{ $project->description }}</td>
                <td>{{ $project->platform }}</td>
                <td>{{ $project->git }}</td>
                <td>
                  <form action="/pdprivatestudent" method="POST" role="search">
                  {{ csrf_field() }}
                  <input type="hidden" name="project_id" id="project_id" value="<?php echo htmlspecialchars($id); ?>" />
                  <button type="submit" class="btn btn-default">Click Here</button>
                  </form>
                </td>

            </tr>
            @endforeach
        
        </tbody>
        </table>

        <table class="table table-striped table-bordered" background="{{asset('anik/images/picture.jpg')}}" style="color: white; position: relative; top: 40px; " >
        <thead >
          
          <tr >
             <td style="text-align:center;"><a href="/submit">Submit New Project/Thesis !! </a></td>
          </tr>
        </thead>
      </table>




    </div>
    @endsection
