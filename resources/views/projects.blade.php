@extends('boilerplate')
@section('page')
<style>
    .nav-item a{
        color:black
    }
    .nav-item a:hover{
        color:grey;
    }
</style>
    <div class="container">
     <ul class="nav nav-pills">
     {{-- <ul class="nav nav-tabs sidenav" role="tablist">  --}}
        <li class="nav-item active"><a class="nav-link active" data-toggle="tab" href="#ongoing_projects" style="font:12px;">Ongoing Projects</a></li>
        <li class="nav-item"><a class ="nav-link" data-toggle="tab" href="#know_how_transfer" style="font:12px;">Know how transfer</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#indi_projects" style="font:12px;">Individual Projects</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#funded_projects" style="font:12px;">Funded Projects</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#industry_projects" style="font:12px;">Industry Projects</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#inhouse_projects" style="font:12px;">Inhouse Projects</a></li>
        
    </ul>
    

    <div class="tab-content">
        <div id="ongoing_projects" class="tab-pane fade in active" style="padding:10px;">
            @for($i=0;$i<4;$i++)
                <div class="container">
                    <div class="well">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <center><img style="width:100px;" src="https://i.stack.imgur.com/34AD2.jpg" class="img-circle"></center>
                            </div>
                            <div class="col-md-10 col-sm-10">
                                <a href="/individual_project"><b><p style="text-align: center;">Project{{$i}}</p></b></a>
                                <blockquote style="text-align: center; color: #808080">Name: Mr. XYZ <br/> PI: 122 <br/> Research Area: ABC </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <div id="know_how_transfer" class="tab-pane fade-in" style="margin:20px;padding:10px;">
            <h1>Know How Transfer</h1>
        </div>

         <div id="indi_projects" class="tab-pane fade-in" style="margin:20px;padding:10px;">
            <h1>Individual Projects</h1>
        </div>

         <div id="funded_projects" class="tab-pane fade-in" style="margin:20px;padding:10px;">
            <h1>Funded Projects</h1>
        </div>

         <div id="industry_projects" class="tab-pane fade-in" style="margin:20px;padding:10px;">
            <h1>Industry Projects</h1>
        </div>

         <div id="inhouse_projects" class="tab-pane fade-in" style="margin:20px;padding:10px;">
            <h1>Inhouse Projects</h1>
        </div>

    </div>
</div>
    
@endsection