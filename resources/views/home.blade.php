@extends('boilerplate')
@section('page')
<style>
    .column{
        height: 300px;
        width: 50%; 
    }
    #project-list{
        height: 300px;
        overflow-x: hidden;
        overflow-y: auto; 
    }
    td img{
        width: 90%;
        border-radius: 30px;
    }
    td{
        width: 33%;
    }
    #achievements{
        height:300px;
        width: 50%;
        overflow-x: hidden;
        overflow-y: auto; 
    }
    #list td img{
        width: 100%;
    }
</style>

<div class="row" style="padding: 30px;">
    <div class="column">
            <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                      <li data-target="#demo" data-slide-to="0" class="active"></li>
                      <li data-target="#demo" data-slide-to="1"></li>
                      <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                  
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="http://ves.ac.in/vesit/wp-content/uploads/sites/3/2015/11/IMG_93121-optimized.jpg" alt="Los Angeles" style="height: 300px;width: 100%">
                      </div>
                      <div class="carousel-item">
                        <img src="https://ves.ac.in/wp-content/uploads/2015/10/ves_slider_3.jpg" alt="Chicago" style="height: 300px;width: 100%">
                      </div>
                      <div class="carousel-item">
                        <img src="https://ves.ac.in/wp-content/uploads/2015/10/MG_9076.jpg" alt="New York" style="height: 300px;width: 100%">
                      </div>
                    </div>
                  
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                      <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                      <span class="carousel-control-next-icon"></span>
                    </a>
            </div>
        </div>
    <div class="column" id="project-list" >
        <h4 style="padding : 0px 0px 0px 40px;"> Ongoing Projectss</h4>
        <div class="container">
            <ul class="list-group">
                <li class="list-group-item">
                    <b>Title</b>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </li>
                <li class="list-group-item">
                        <b>Title</b>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </li>
                <li class="list-group-item">
                        <b>Title</b>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </li>             
            </ul>
        </div>
    </div>
</div>
<div class="row" style="padding: 30px;">
    <div class="column">
        <table>
            <thead style="align-content: center;padding : 40px 0px 0px 0px;">
                Research Areas
            </thead>
            <tr>
                <td style="padding: 10px;">
                    <img src="http://ves.ac.in/vesit/wp-content/uploads/sites/3/2015/11/IMG_93121-optimized.jpg" />
                    <p>Field 1</p>
                </td>
                <td style="padding: 10px;">
                    <img src="http://ves.ac.in/vesit/wp-content/uploads/sites/3/2015/11/IMG_93121-optimized.jpg" />
                    <p>Field 1</p>
                </td>
                <td style="padding: 10px;">
                    <img src="http://ves.ac.in/vesit/wp-content/uploads/sites/3/2015/11/IMG_93121-optimized.jpg" />
                     <p>Field 1</p>
                </td>
            </tr>
            <tr>
                    <td style="padding: 10px;">
                        <img src="http://ves.ac.in/vesit/wp-content/uploads/sites/3/2015/11/IMG_93121-optimized.jpg" />
                        <p>Field 1</p>
                    </td>
                    <td style="padding: 10px;">
                        <img src="http://ves.ac.in/vesit/wp-content/uploads/sites/3/2015/11/IMG_93121-optimized.jpg" />
                        <p>Field 1</p>
                    </td>
                    <td style="padding: 10px;">
                        <img src="http://ves.ac.in/vesit/wp-content/uploads/sites/3/2015/11/IMG_93121-optimized.jpg" />
                         <p>Field 1</p>
                    </td>
                </tr>
        </table>
    </div>
    <div class="column" id="achievements">
            <ul class="list-group">
                    <b><p style="padding : 0px 0px 0px 40px;">Accomplishments Of RnD department</p></b>
                    <li class="list-group-item"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod .</p></li>
                    <li class="list-group-item"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod .</p></li>
                    <li class="list-group-item"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod .</p></li>
                    <li class="list-group-item"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod .</p></li>
                    <li class="list-group-item"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod .</p></li>
                    <li class="list-group-item"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod .</p></li>
                    <li class="list-group-item"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod .</p></li>
                    
             </ul>
    </div>
    
</div>
<div class="row" style="padding: 70px;margin-bottom: 0%;">
                <table id="#list">
                        <thead style="align-content: center;padding : 40px;">
                            <p style="margin-right: 50%;margin-left: 50%"><b>List Of Projects</b></p>
                        </thead>
                        <tr>
                            <td style="padding: 10px;">
                                <img src="http://ves.ac.in/vesit/wp-content/uploads/sites/3/2015/11/IMG_93121-optimized.jpg" />
                                <p>Project 1</p>
                            </td>
                            <td style="padding: 10px;">
                                <img src="http://ves.ac.in/vesit/wp-content/uploads/sites/3/2015/11/IMG_93121-optimized.jpg" />
                                <p>Project 2</p>
                            </td>
                            <td style="padding: 10px;">
                                <img src="http://ves.ac.in/vesit/wp-content/uploads/sites/3/2015/11/IMG_93121-optimized.jpg" />
                                 <p>Project 3</p>
                            </td>
                            <td>
                                <a href="/projects" style="text-decoration: none;margin-left: 0%;">see more</a>
                            </td>
                        </tr>
                </table>
</div>
<div>

</div>
@endsection