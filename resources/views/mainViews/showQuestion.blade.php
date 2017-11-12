
<div class="row" >
    <h3><b>Top Requests:</b></h3>
    <div class="list-group">
        @foreach($que as $val)

            <div style="padding-top: 6px">
                <a href="{{url('/reply/'.$val->q_id)}}" class="list-group-item" >

                    <h3 style="margin-top: 5px"> <span class="glyphicon glyphicon-education" style="color: #1e90ff">  <b>{{App\User::find($val->u_id)->username}}:</b> </span> </h3>
                    <div style="border-bottom: 1px solid #1e90ff">
                        <h3 class="list-group-item-heading"><span class="glyphicon glyphicon-hand-right"></span> {{$val->que}}</h3>
                    </div>
                    <input type="hidden" value="{{$subject = App\Subject::where('sub_id',$val->sub_id)->select('semester','sub_name')->first()}}">
                    <h5>
                        <span class="label label-primary" >{{App\Studyfield::where('sf_id',$val->sf_id)->pluck('degree')->first()}}</span>
                        <span class="label label-success">Semester : {{$subject->semester}}</span>
                        <span class="label label-info">Subject: {{$subject->sub_name}}</span>
                        <div style="float: right;padding-top: 5px"> <span class="glyphicon glyphicon-tags"></span> <span class="badge" style="margin-bottom: 15px">{{App\Reply::where('q_id',$val->q_id)->count()}}</span></div>
                    </h5>

                </a>
            </div>


        @endforeach
    </div>
</div>
