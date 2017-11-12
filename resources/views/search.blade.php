<form id="form-search" method="get" action="/searched">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="InstitutionFaculty">Faculty:</label></br>

        <select name="InstitutionFaculty" id="InstitutionFaculty" size="1" onchange="degreeAjax()" class="form-control">
            <option value="">---Select Faculty---</option>
            @foreach($sf as $val)
                <option value="{{$val}}">{{$val}}</option>
            @endforeach

        </select>
    </div>
    <div class="row">
        <div class="col-sm-6 col-xs-12 col-lg-6 col-md-6">
            <div class="form-group">
                <label for="InstitutionLevel">Level:</label></br>
                <select name="InstitutionLevel" id="InstitutionLevel" size="1" onchange="degreeAjax()" class="form-control">

                    @foreach($sfLvl as $val)
                        <option value="{{$val}}">{{$val}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-6 col-xs-12 col-lg-6 col-md-6">
            <div class="form-group">
                <label for="InstitutionSem">Semester:</label></br>
                <select name="InstitutionSem" id="InstitutionSem" size="1" onchange="subjectAjax()" class="form-control">
                    <?php
                    $ary = array("1st","2nd","3rd","4th","5th","6th","7th","8th");
                    foreach($ary as $val){
                        echo '<option value="'.$val.'">'.$val.'</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
    </div>


    <div class="form-group">
        <label for="InstitutionDegree">Degree:
        @if ($errors->has('InstitutionDegree'))

                                        <font color="#dc143c"> <h4> Sorry: {{ $errors->first('InstitutionDegree') }} For this search.</h4> </font>

        @endif
        </label>
        <br>
        <select name="InstitutionDegree" id="InstitutionDegree" onchange="subjectAjax()" size="1" class="form-control">



        </select>
    </div>

    <div class="form-group">
        <label for="InstitutionSubject">Subject:</label></br>
        <select name="InstitutionSubject" id="InstitutionSubject" size="1" class="form-control">



        </select>
    </div>

    <input type="submit" class="btn btn-primary" value="search" name="searchFromData">


</form>

<script src="js/ajaxCall.js">

</script>



