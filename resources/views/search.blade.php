<form id="form-search">
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
        <label for="InstitutionDegree">Degree:</label></br>
        <select name="InstitutionDegree" id="InstitutionDegree" onchange="subjectAjax()" size="1" class="form-control">



        </select>
    </div>

    <div class="form-group">
        <label for="InstitutionSubject">Subject:</label></br>
        <select name="InstitutionSubject" id="InstitutionSubject" size="1" class="form-control">



        </select>
    </div>

    <button type="submit" class="btn btn-primary">Search</button>
</form>

<script>
    function degreeAjax(){
        var opt = document.getElementById("InstitutionDegree");
        var resetSem = document.getElementById("InstitutionSem");
        resetSem.selectedIndex = 0;
        var len = opt.length;



        while(len!=0) {
            opt.remove(0);
            len--;

        }

        var subj = document.getElementById("InstitutionSubject");
        var lenSubj = subj.length;



        while(lenSubj!=0) {
            subj.remove(0);
            lenSubj--;

        }



        var xhttp = new XMLHttpRequest();
        var fty = document.getElementById("InstitutionFaculty").value;
        var lvl = document.getElementById("InstitutionLevel").value;

        xhttp.onreadystatechange = function(){
            if(xhttp.readyState==4 && xhttp.status==200){
                var jsonObj = JSON.parse(xhttp.responseText);
                //document.getElementById("InstitutionDegree").innerHTML = jsonObj[0];
                var x;

                for(x=0;x<jsonObj.length;x++){

                    var sel = document.createElement("option");
                    sel.setAttribute("value", jsonObj[x]);

                    sel.innerHTML = jsonObj[x];
                    opt.appendChild(sel);

                }


            }
        };
        xhttp.open("GET","/getDegreeAjax/"+fty+"/"+lvl,true);
        xhttp.send();

    }

    function subjectAjax(){
        var opt = document.getElementById("InstitutionSubject");
        var len = opt.length;



        while(len!=0) {
            opt.remove(0);
            len--;

        }



        var xhttp = new XMLHttpRequest();
        var sem = document.getElementById("InstitutionSem").value;
        var deg = document.getElementById("InstitutionDegree").value;


        xhttp.onreadystatechange = function(){
            if(xhttp.readyState==4 && xhttp.status==200){
                var jsonObj = JSON.parse(xhttp.responseText);
                //document.getElementById("InstitutionDegree").innerHTML = jsonObj[0];
                var x;

                for(x=0;x<jsonObj.length;x++){

                    var sel = document.createElement("option");
                    sel.setAttribute("value", jsonObj[x]);

                    sel.innerHTML = jsonObj[x];
                    opt.appendChild(sel);

                }


            }
        };
        xhttp.open("GET","/getSubjectAjax/"+sem+"/"+deg,true);
        xhttp.send();

    }
</script>



