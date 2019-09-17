@extends('boilerplate')
@section('page')
<div id="ongoing_projects">
            @foreach($data as $project)
                <div class="container">
                    <div class="well">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <center><img style="width:100px;" src="https://i.stack.imgur.com/34AD2.jpg" class="img-circle"></center>
                            </div>
                            <div class="col-md-10 col-sm-10">
                                <a href="/individual_project"><b><p style="text-align: center; font-size:20px;">Project{{$project->pname}}</p></b></a>
                                <blockquote style="text-align: center; color: #808080">Name: {{$project->faculty}} <br/>PI: {{$project->pid}} <br/> Research Area: {{$project->research_area}} </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                
                @endforeach
                    <center><span>{{$data->links()}}</span></center>
                @endsection
@endsection