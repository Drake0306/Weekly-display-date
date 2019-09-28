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





<div class="container">
    <div class="row">

        <div class="col-md-3">
            <form action="{{url('/old')}}" method="GET">
                @csrf
                <input type="hidden" name="old" value="{{$toReturn['daydate'][0]}}">

                <button type="submit" class="btn btn-primary">
                    <</button> </form> </div> <div class="col-md-8">

        </div>

        <div class="col-md-1">
            <form action="{{URL::to('/next')}}" method="GET">
                @csrf
                <input type="hidden" name="new" value="{{$toReturn['daydate'][6]}}">
                <button type="submit" class="btn btn-primary">></button>
        </div>
        </form>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>

                        <th>{{$toReturn['daydate'][0]}}</th>
                        <th>{{$toReturn['daydate'][1]}}</th>
                        <th>{{$toReturn['daydate'][2]}}</th>
                        <th>{{$toReturn['daydate'][3]}}</th>
                        <th>{{$toReturn['daydate'][4]}}</th>
                        <th>{{$toReturn['daydate'][5]}}</th>
                        <th>{{$toReturn['daydate'][6]}}</th>

                        <input type="hidden" name="old" value="{{$toReturn['daydate'][0]}}">


                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td scope="row"></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
