
<div class="row" >
    <h3><b>Top Requests:</b></h3>
    <div class="list-group">
        @foreach($que as $val)

            <div>
                <a href="{{url('/reply/'.$val->q_id)}}" class="list-group-item" >

                    <h4> <span class="glyphicon glyphicon-education" style="color: #1e90ff">  <b>{{App\User::find($val->u_id)->username}}:</b> </span> </h4>
                    <div style="border-bottom: 1px solid #1e90ff">
                        <h3 class="list-group-item-heading"><span class="glyphicon glyphicon-hand-right"></span> {{$val->que}}</h3>
                    </div>
                    <span class="label label-primary">Replys</span>
                    <span class="label label-success">Study Degee</span>
                    <span class="label label-info">Subject</span>

                </a>
            </div>


        @endforeach
    </div>
</div>
