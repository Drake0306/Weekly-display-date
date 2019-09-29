<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500|Montserrat:400,500,700,900&display=swap" rel="stylesheet">    
<style>  
   
    body {
        /* font-family: 'Montserrat', sans-serif;
        /* font-family: 'Dosis', sans-serif; */
        /* font-weight: 200px; */ */
    }

    #a1{
         font-family: 'Montserrat', sans-serif;
         font-weight: 900px;
         font-size: 16px;
    }
    #a2{
        font-family: 'Dosis', sans-serif; 
        font-weight: 500px;
        font-size:  18px;
        

    }

</style>




<div class="container mt-5">
    <div class="row">

        <div class="col-md-5">
            <form action="{{url('/old')}}" method="GET">
                @csrf
                <input type="hidden" name="old" value="{{$toReturn['daydate'][0]}}">

                <button type="submit" class="btn btn-info">
                    <</button> 
            </form>
             
        </div>
                    
        <div class="col-md-6">
            <form action="{{URL::to('/home_date')}}" method="GET">
                @csrf

                <button type="submit" id="a1" class="btn btn-outline-warning">Current date</button>
        
            </form>
        </div>           
    
                        
        

        <div class="col-md-1">
            <form action="{{URL::to('/next')}}" method="GET">
                @csrf
                <input type="hidden" name="new" value="{{$toReturn['daydate'][6]}}">
                <button type="submit" class="btn btn-info">></button>
        </div>
        </form>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <table class="table" border="1">
                <thead>
                    <tr id="a1">

                        <th id="mon">{{$toReturn['daydate'][0]}}</th>
                        <th id="tue">{{$toReturn['daydate'][1]}}</th>
                        <th id="wed">{{$toReturn['daydate'][2]}}</th>
                        <th id="thur">{{$toReturn['daydate'][3]}}</th>
                        <th id="fri">{{$toReturn['daydate'][4]}}</th>
                        <th id="sat">{{$toReturn['daydate'][5]}}</th>
                        <th id="sun">{{$toReturn['daydate'][6]}}</th>

                        <input type="hidden" name="old" value="{{$toReturn['daydate'][0]}}">
                        {{-- style="background-color: yellow;" --}}

                    </tr>
                </thead>
                <tbody>
                    <tr id="a2">

                        <td >{{$toReturn['day'][0]}}</td>
                        <td >{{$toReturn['day'][1]}}</td>
                        <td >{{$toReturn['day'][2]}}</td>
                        <td >{{$toReturn['day'][3]}}</td>
                        <td >{{$toReturn['day'][4]}}</td>
                        <td >{{$toReturn['day'][5]}}</td>
                        <td >{{$toReturn['day'][6]}}</td>


                    </tr>

                </tbody>
                
                <tbody>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>   
                </tbody>
            
            </table>
        </div>
    </div>
</div>



<script>
var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = dd + '-' + mm + '-' + yyyy;
a=document.getElementById('mon').innerHTML;
b=document.getElementById('tue').innerHTML;
c=document.getElementById('wed').innerHTML;
d=document.getElementById('thur').innerHTML;
e=document.getElementById('fri').innerHTML;
f=document.getElementById('sat').innerHTML;
g=document.getElementById('sun').innerHTML;
console.log(today);
console.log(g+"today");

if(a==today)
{
    document.getElementById("mon").style.backgroundColor="yellow";
    console.log(a);
    
}
else if(b==today)
{
    document.getElementById("tue").style.backgroundColor="yellow";
    console.log("worked");
}
else if(c==today)
{
    document.getElementById("wed").style.backgroundColor="yellow";
    console.log("worked");
}
else if(d==today)
{
    document.getElementById("thur").style.backgroundColor="yellow";
    console.log("worked");
}
else if(e==today)
{
    document.getElementById("fri").style.backgroundColor="yellow";
    console.log("worked");
}
else if(f==today)
{
    document.getElementById("sat").style.backgroundColor="yellow";
    console.log("worked");
}
else if(today==g)
{
    document.getElementById("sun").style.backgroundColor="yellow";
    console.log("worked");
}

else{
    console.log("did not work");
}

</script>