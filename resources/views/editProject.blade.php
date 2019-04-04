@extends('layouts.auth')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    

                    <div class="card-body" >
                        You are supervising this project,
                        {{Auth::guard('teacher')->user()->name}}!

                        
                    </div>
                      
                </div>
            </div> 
        </div>
        
        <div class="col-md-8">
        <table class="table table-striped table-bordered" background="{{asset('anik/images/image.jpg')}}" style="color: white; position: relative; top: 40px; left:180px;" >
            
            
            

            <tr>
                <td>Title</td>
                <td>{{ $project->title}}</td>
            </tr>

            <tr>
                <td>Advisor</td>
                <td>{{ $project->advisor}}</td>
            </tr>

            <tr>
                <td>Student</td>
                <td>{{ $sname }}</td>
            </tr>

            <tr>
                <td>Description</td>
                <td>{{ $project->description }}</td>
            </tr>

            <tr>
                <td>Platform</td>
                <td>{{ $project->platform }}</td>
            </tr>

            <tr>
                <td>Framework</td>
                <td>{{ $project->framework }}</td>
            </tr>

            <tr>
                <td>Technology</td>
                <td>{{ $project->technology }}</td>
            </tr>

            <tr>
                <td>Git</td>
                <td>{{ $project->git }}</td>
            </tr>

            <tr>
                <td>Tags</td>
                <td>{{ $project->tags }}</td>
            </tr>
            

            </table>

            <form action="{{ URL::to('/editStatus') }}" method="POST">
              {{ csrf_field() }}

              <table class="table table-striped table-bordered" background="{{asset('anik/images/image.jpg')}}" style="color: white; position: relative; top: 40px; left:180px;" >
                <tr>
                <td>Idea status</td>
                
                <td><input type="text" name="idea" placeholder="YES/NO"></td>
            </tr>

            

            <tr>
                <td>1st phase</td>
                <td><input type="text" name="first" placeholder="DD/MM/YYYY"></td>
            </tr>

            <tr>
                <td>2nd Phase</td>
                <td><input type="text" name="second"placeholder="DD/MM/YYYY"></td>
            </tr>

            <tr>
                <td>3rd phase</td>
                <td><input type="text" name="third"placeholder="DD/MM/YYYY"></td>
            </tr>
            
            <tr>
                <td>Is published</td>
                
                <td><input type="text" name="publish" placeholder="YES/NO"></td>
            </tr>

            <tr>
                <td>comment</td>
                
                <td><input type="text" name="comment" placeholder="Edit comment"></td>
            </tr>

            @php
            $id=$project->P_ID
            @endphp
            
            <input type="hidden" name="id" value='<?php echo "$id";?>'> 

            <tr>
                <td>Update</td>
                <td >
                <input type="submit" value="Submit"></td>
            </tr>


                  
            </table>

            </form>

            
            </div>

            
      


    </div>
    @endsection
