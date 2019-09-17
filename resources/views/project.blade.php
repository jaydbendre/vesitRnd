@extends('boilerplate')
@section('page')
<style>
        .sidemenu
        {
            background-color: #FFFFFF;
            color: #224C83; 
            border: solid;
            border-color: #224C83;
            width: 250px;
            height: 300px;
            align-items: center;
        }
    
        .sidemenu a{
            color: white;
            text-decoration: none;
            align: center;
        }
        
        .sidemenu td{
            padding: 10px;
        }
        .sidemenu tr{
            background-color: #224C83;
            border-bottom: solid; 
            border-color: #FFFFFF;
        }
        
        .filter-button{
            background: #224C83;
            color:#FFFFFF;
            padding: 2px;
            border:#224C83 solid;
            border-radius: 10px;
            margin : 0px 5px 0px 5px;
        }
    
        .row{
            overflow: hidden;
        }
    </style>
<script>
    
$(document).ready(function(){
    $("#OngoingProjects").click(function(){  
       $('#target').html('<h3>Ongoing Projects</h3>                @for($i=0;$i<3;$i++)                <div class="card mb-2 ">                    <div class="row no-gutters">                        <div class="col-md-4">                            <img class="card-img" src="https://cdn3.iconfinder.com/data/icons/lifestyle/100/Noun_Project_20Icon_10px_grid-06-2-512.png" alt="Project" style="height: 20vh;">                        </div> <div class="col-md-8">        <div class="card-body">       <div class="card-title">Project 1 </div                                <div class="card-text">lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ante eros, ultrices eu elit nec, convallis luctus nisi. Mauris vehicula elit arcu, ut maximus nisl tincidunt in. Nam massa nunc, aliquet sit amet erat convallis, mollis commodo nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In et lobortis lectus. Praesent condimentum convallis arcu. Aliquam semper vitae quam ac egestas. Donec volutpat elit varius pretium fermentum. Ut hendrerit nunc ut eros tincidunt, nec aliquam turpis volutpat. Phasellus hendrerit porttitor dignissim. Aenean tempus volutpat luctus. Nunc tristique elit dictum leo rutrum scelerisque sed sit amet enim.</div></div></div></div></div>@endfor<button class="btn btn-primary">See More</button>')});
});

$(document).ready(function(){
    $("#indiv_projects").click(function(){  
       $('#target').html('<h3>Individual Projects</h3>                @for($i=0;$i<3;$i++)                <div class="card mb-2 ">                    <div class="row no-gutters">                        <div class="col-md-4">                            <img class="card-img" src="https://cdn3.iconfinder.com/data/icons/lifestyle/100/Noun_Project_20Icon_10px_grid-06-2-512.png" alt="Project" style="height: 20vh;">                        </div> <div class="col-md-8">        <div class="card-body">       <div class="card-title">Project 2 </div>                                <div class="card-text">lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ante eros, ultrices eu elit nec, convallis luctus nisi. Mauris vehicula elit arcu, ut maximus nisl tincidunt in. Nam massa nunc, aliquet sit amet erat convallis, mollis commodo nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In et lobortis lectus. Praesent condimentum convallis arcu. Aliquam semper vitae quam ac egestas. Donec volutpat elit varius pretium fermentum. Ut hendrerit nunc ut eros tincidunt, nec aliquam turpis volutpat. Phasellus hendrerit porttitor dignissim. Aenean tempus volutpat luctus. Nunc tristique elit dictum leo rutrum scelerisque sed sit amet enim.</div></div></div></div></div>@endfor<button class="btn btn-primary">See More</button>')});
});

$(document).ready(function(){
    $("#indi_collab").click(function(){  
       $('#target').html('<h3>Industry Collaborated Projects</h3>                @for($i=0;$i<3;$i++)                <div class="card mb-2 ">                    <div class="row no-gutters">                        <div class="col-md-4">                            <img class="card-img" src="https://cdn3.iconfinder.com/data/icons/lifestyle/100/Noun_Project_20Icon_10px_grid-06-2-512.png" alt="Project" style="height: 20vh;">                        </div> <div class="col-md-8">        <div class="card-body">       <div class="card-title">Project 3 </div>                                <div class="card-text">lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ante eros, ultrices eu elit nec, convallis luctus nisi. Mauris vehicula elit arcu, ut maximus nisl tincidunt in. Nam massa nunc, aliquet sit amet erat convallis, mollis commodo nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In et lobortis lectus. Praesent condimentum convallis arcu. Aliquam semper vitae quam ac egestas. Donec volutpat elit varius pretium fermentum. Ut hendrerit nunc ut eros tincidunt, nec aliquam turpis volutpat. Phasellus hendrerit porttitor dignissim. Aenean tempus volutpat luctus. Nunc tristique elit dictum leo rutrum scelerisque sed sit amet enim.</div></div></div></div></div>@endfor<button class="btn btn-primary">See More</button>')});
});

$(document).ready(function(){
    $("#inhouse").click(function(){  
       $('#target').html('<h3>Inhouse Projects</h3>                @for($i=0;$i<3;$i++)                <div class="card mb-2 ">                    <div class="row no-gutters">                        <div class="col-md-4">                            <img class="card-img" src="https://cdn3.iconfinder.com/data/icons/lifestyle/100/Noun_Project_20Icon_10px_grid-06-2-512.png" alt="Project" style="height: 20vh;">                        </div> <div class="col-md-8">        <div class="card-body">       <div class="card-title">Project 4 </div>                                <div class="card-text">lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ante eros, ultrices eu elit nec, convallis luctus nisi. Mauris vehicula elit arcu, ut maximus nisl tincidunt in. Nam massa nunc, aliquet sit amet erat convallis, mollis commodo nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In et lobortis lectus. Praesent condimentum convallis arcu. Aliquam semper vitae quam ac egestas. Donec volutpat elit varius pretium fermentum. Ut hendrerit nunc ut eros tincidunt, nec aliquam turpis volutpat. Phasellus hendrerit porttitor dignissim. Aenean tempus volutpat luctus. Nunc tristique elit dictum leo rutrum scelerisque sed sit amet enim.</div></div></div></div></div>@endfor<button class="btn btn-primary">See More</button>')});
});

$(document).ready(function(){
    $("#kht").click(function(){  
       $('#target').html('<h3>Know How Transfer Projects</h3>                @for($i=0;$i<3;$i++)                <div class="card mb-2 ">                    <div class="row no-gutters">                        <div class="col-md-4">                            <img class="card-img" src="https://cdn3.iconfinder.com/data/icons/lifestyle/100/Noun_Project_20Icon_10px_grid-06-2-512.png" alt="Project" style="height: 20vh;">                        </div> <div class="col-md-8">        <div class="card-body">       <div class="card-title">Project 5 </div>                                <div class="card-text">lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ante eros, ultrices eu elit nec, convallis luctus nisi. Mauris vehicula elit arcu, ut maximus nisl tincidunt in. Nam massa nunc, aliquet sit amet erat convallis, mollis commodo nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In et lobortis lectus. Praesent condimentum convallis arcu. Aliquam semper vitae quam ac egestas. Donec volutpat elit varius pretium fermentum. Ut hendrerit nunc ut eros tincidunt, nec aliquam turpis volutpat. Phasellus hendrerit porttitor dignissim. Aenean tempus volutpat luctus. Nunc tristique elit dictum leo rutrum scelerisque sed sit amet enim.</div></div></div></div></div>@endfor<button class="btn btn-primary">See More</button>')});
});

$(document).ready(function(){
    $("#funded").click(function(){  
       $('#target').html('<h3>Funded Projects</h3>                @for($i=0;$i<3;$i++)                <div class="card mb-2 ">                    <div class="row no-gutters">                        <div class="col-md-4">                            <img class="card-img" src="https://cdn3.iconfinder.com/data/icons/lifestyle/100/Noun_Project_20Icon_10px_grid-06-2-512.png" alt="Project" style="height: 20vh;">                        </div> <div class="col-md-8">        <div class="card-body">       <div class="card-title">Project 6 </div>                                <div class="card-text">lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ante eros, ultrices eu elit nec, convallis luctus nisi. Mauris vehicula elit arcu, ut maximus nisl tincidunt in. Nam massa nunc, aliquet sit amet erat convallis, mollis commodo nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In et lobortis lectus. Praesent condimentum convallis arcu. Aliquam semper vitae quam ac egestas. Donec volutpat elit varius pretium fermentum. Ut hendrerit nunc ut eros tincidunt, nec aliquam turpis volutpat. Phasellus hendrerit porttitor dignissim. Aenean tempus volutpat luctus. Nunc tristique elit dictum leo rutrum scelerisque sed sit amet enim.</div></div></div></div></div>@endfor<button class="btn btn-primary">See More</button>')});
});
</script>
    <div class="row">
        <div class="column col-xs-2">
            <div class="container container-fluid" style="float: left;margin-left: 0%;margin-right: auto;padding: 50px">
                    <table class="sidemenu">
                    <tr><td><a href="#ongoingprojects" id="OngoingProjects">Ongoing Projects</a></td></tr>
                    <tr><td><a href="#indiv_project" id="indiv_projects">Individual Projects </a></td></tr>
                    <tr><td><a href="#indi_collab" id="indi_collab">Industry Collaborated</a></td></tr>
                    <tr><td><a href="#inhouse" id="inhouse">Inhouse Projects</a></td></tr>
                    <tr><td><a href="#kht" id="kht">Know-how-transfer</a></td></tr>
                    <tr><td><a href="#funded" id="funded">Funded Projects</a></td></tr>
                    
                </table>
                </div>
        </div>
        <div class="container container-fluid column col-xs-4 mr-auto mb-4">
            <div class="container container-fluid" style="margin-top:25px;padding: 20px;" id="target">
                <h3>Ongoing Projects</h3>
                @for($i=0;$i<3;$i++)
                <div class="card mb-2 ">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="card-img" src="https://cdn3.iconfinder.com/data/icons/lifestyle/100/Noun_Project_20Icon_10px_grid-06-2-512.png" alt="Project" style="height: 20vh;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="card-title">
                                    <a href="/individual_project" style="color:black;text-decoration: none;"><b>Project 1</b></a>    
                                </div>
                                <div class="card-text">lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ante eros, ultrices eu elit nec, convallis luctus nisi. Mauris vehicula elit arcu, ut maximus nisl tincidunt in. Nam massa nunc, aliquet sit amet erat convallis, mollis commodo nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In et lobortis lectus. Praesent condimentum convallis arcu. Aliquam semper vitae quam ac egestas. Donec volutpat elit varius pretium fermentum. Ut hendrerit nunc ut eros tincidunt, nec aliquam turpis volutpat. Phasellus hendrerit porttitor dignissim. Aenean tempus volutpat luctus. Nunc tristique elit dictum leo rutrum scelerisque sed sit amet enim.</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
                <button class="btn btn-primary">See More</button>
        </div>
    </div>
@endsection