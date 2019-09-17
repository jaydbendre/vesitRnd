@extends('boilerplate')
@section('page')
<script>
$(document).ready(function(){
    $("#achievements").click(function(){  
       $('#target').html('<ul><li>This is a list element1 </li><li>This is a list element2 </li><li>This is a list element3 </li><li>This is a list element 4</li></ul>');
   });
});
$(document).ready(function(){
    $("#details").click(function(){  
       $('#target').html('Name<br>Department<br>Contact<br>Address<br>')});
});

$(document).ready(function(){
    $("#complete").click(function(){  
       $('#target').html('<ul><li>This is a list element1 </li><li>This is a list element2 </li><li><b>Acquisition and Analysis of EEG Signals with Improved Signal to Noise Ratio</b>Signal analysis data alone can contribute important information for diagnosis and tracking of disease. Electrocardiogram (ECG) results have made major contributions to cardiac diagnosis whereas the electroencephalogram (EEG) is useful in neurological diagnosis. In many cases combination of signal analysis data with other clinical information results in a more comprehensive analysis. The automation of the entire process requires the construction of higher order processing methodology in which signal analysis results can play a major role.The design includes a sophisticated EEG acquisition system that picks up signals from the brain of the patient using special scalp electrodes, conditions the signal like amplify it, filter it and process it in such a way that it is suitable for further analysis. The components for design are advanced filter and instrumentation amplifier IC chips with very low noise, high gain accuracy, low gain temperature coefficient and high linearity, such that the EEG signal obtained at the end of the Signal Conditioning system is with excellent signal to noise ratio. Such signals can then be further analysed for various mental disorders and neurological correlations. </li><li>This is a list element 4</li></ul>');
   });
});
$(document).ready(function(){
    $("#ongoing").click(function(){  
       $('#target').html('<ul><li>This is a list element1 </li><li>This is a ongoing list element2 </li><li>This is a list element3 </li><li>This is a list element 4</li></ul>');
   });
});
$(document).ready(function(){
    $("#research").click(function(){  
       $('#target').html('<ul><li>This is a list element1 </li><li>This is a list element2 </li><li>This is a list element3 </li><li>This is a list element 4</li></ul>');
   });
});
</script>
<style>
    #target li{
        border: grey solid 0.5px;
        display: flex; 
        padding: 30px;
        width: 650px;
        overflow-x: hidden;
        overflow-y: auto; 
        scroll-margin-right:0%; 
    }
    #target{
        overflow-x: hidden;
        overflow-y: auto;
        width: 650px;
        height: 60%;
    }
     .sidemenu
    {
        background-color: #FFFFFF;
        color: #224C83; 
        border: solid;
        border-color: #224C83;
        width: 250px;
        height: 300px;
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
    </style>
<div class="row">
        <div class="column col-xs-2">
            <div class="container container-fluid" style="float: left;margin-left: 0%;margin-right: auto;padding:50px">
                    <table class="sidemenu">
                    <tr><td><a href="#" id="details">Details</a></td></tr>
                    <tr><td><a href="#achievements" id="achievements">Achievements </a></td></tr>
                    <tr><td><a href="#complete" id="complete">Projects Completed</a></td></tr>
                    <tr><td><a href="#ongoing" id="ongoing" >On going projects</a></td></tr>
                    <tr><td><a href="#research" id="research" >Research Papers</a></td></tr>
                </table>
                </div>
        </div>
        <div class="column">
            <div class="container container-fluid" style="float: left;margin-left: 0%;margin-right: auto;padding:50px">
                <img src="https://i.stack.imgur.com/34AD2.jpg" height="250px" width="250px"/>
            </div>
        </div>
        <div class="column">
                <div class="container container-fluid" style="float: left;margin-left: 0%;margin-right: auto;padding:50px" id="target">
                    Name<br>
                    Department<br>
                    Contact<br>
                    Address<br>
                </div>
        </div>    
</div>
@endsection