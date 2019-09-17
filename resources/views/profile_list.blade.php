@extends('boilerplate')
@section('page')
<script>
$(document).ready(function(){
    $("#AI").click(function(){  
       $('#target').html('@for($i=1;$i<2;$i++)<div class="row">@for($j=0;$j<4;$j++)<div class="column" style="align: center;padding: 30px;"><div class="column-element" style="align: center; display: flexbox;"><img src="https://i.stack.imgur.com/34AD2.jpg" height="150px" width="150px" class="pro-img"/><a href="/profile"><b><p style="text-align: center;">Name{{$i}}</p></b></a><blockquote style="text-align: center; color: #808080">Dept xyz </blockquote></div></div>&nbsp; @endfor </div> @endfor</div>')});
});
$(document).ready(function(){
    $("#All").click(function(){  
       $('#target').html('@for($i=0;$i<2;$i++)<div class="row">@for($j=0;$j<4;$j++)<div class="column" style="align: center;padding: 30px;"><div class="column-element" style="align: center; display: flexbox;"><img src="https://i.stack.imgur.com/34AD2.jpg" height="150px" width="150px" class="pro-img"/><a href="/profile"><b><p style="text-align: center;">Name{{$i}}</p></b></a><blockquote style="text-align: center; color: #808080">Dept xyz </blockquote></div></div>&nbsp; @endfor </div> @endfor</div>')});
});
$(document).ready(function(){
    $("#comms").click(function(){  
       $('#target').html('@for($i=2;$i<3;$i++)<div class="row">@for($j=0;$j<4;$j++)<div class="column" style="align: center;padding: 30px;"><div class="column-element" style="align: center; display: flexbox;"><img src="https://i.stack.imgur.com/34AD2.jpg" height="150px" width="150px" class="pro-img"/><a href="/profile"><b><p style="text-align: center;">Name{{$i}}</p></b></a><blockquote style="text-align: center; color: #808080">Dept xyz </blockquote></div></div>&nbsp; @endfor </div> @endfor</div>')});
});
$(document).ready(function(){
    $("#bchain").click(function(){  
       $('#target').html('@for($i=0;$i<1;$i++)<div class="row">@for($j=0;$j<4;$j++)<div class="column" style="align: center;padding: 30px;"><div class="column-element" style="align: center; display: flexbox;"><img src="https://i.stack.imgur.com/34AD2.jpg" height="150px" width="150px" class="pro-img"/><a href="/profile"><b><p style="text-align: center;">Name{{$i}}</p></b></a><blockquote style="text-align: center; color: #808080">Dept xyz </blockquote></div></div>&nbsp; @endfor </div> @endfor</div>')});
});
</script>
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
<div class="row">
    <div class="column col-xs-2">
        <div class="container container-fluid" style="float: left;margin-left: 0%;margin-right: auto;padding: 50px">
                <table class="sidemenu">
                <tr><td><a href="#" id="All">All</a></td></tr>
                <tr><td><a href="#" id="AI">Working On AI </a></td></tr>
                <tr><td><a href="#1" id="comms">Working On Communication</a></td></tr>
                <tr><td><a href="#2" id="bchain">Working On Blockchain</a></td></tr>
            </table>
            </div>
    </div>
    <div class="container container-fluid column col-xs-4" style="margin-right: 0%; padding: 10px;" id="target">
                @for($i=0;$i<3;$i++)
                <div class="row">
                    @for($j=0;$j<4;$j++)
                    <div class="column" style="align: center;padding: 30px;">
                        <div class="column-element" style="align: center; display: flexbox;">
                        <img src="https://i.stack.imgur.com/34AD2.jpg" height="150px" width="150px" class="pro-img"/>
                        <a href="/profile"><b><p style="text-align: center;">Name{{$i}}</p></b></a>
                        <blockquote style="text-align: center; color: #808080">Dept xyz </blockquote>
                    </div>
                    </div>
                    &nbsp; 
                    @endfor
                </div>
                @endfor
            </div>
    </div>
</div>
@endsection