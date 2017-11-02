
<div class="row" >
    <h3><b>Top Requests:</b></h3>
    <div class="list-group">
        @foreach($que as $val)


            <a href="{{url('/reply/'.$val->q_id)}}" class="list-group-item">

                <h3 class="list-group-item-heading"><span class="glyphicon glyphicon-hand-right"></span> {{$val->que}}</h3>

                <span class="label label-primary">Replys</span>
                <span class="label label-success">Study Degee</span>
                <span class="label label-info">Subject</span>

            </a>



        @endforeach
    </div>
</div>
