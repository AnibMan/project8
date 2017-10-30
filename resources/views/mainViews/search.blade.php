<form id="form-search">
    <div class="form-group">
        <label>Faculty :</label></br>

        <select name="InstitutionSubjects" id="InstitutionFaculty" size="1" onchange="degreeAjax()" class="font-size-12" style="display:inline; width:380px; height:30px;">
            <option value="">---Select Faculty---</option>
            @foreach($sf as $val)
                <option value="{{$val}}">{{$val}}</option>
            @endforeach

        </select>
    </div>
    <div class="form-group">
        <label >Level :</label></br>
        <select name="InstitutionDegrees" id="InstitutionLevel" size="1" onchange="degreeAjax()" style="display:inline; width:380px;height:30px;">

            @foreach($sfLvl as $val)
                <option value="{{$val}}">{{$val}}</option>
            @endforeach
        </select>
    </div>


    <div class="form-group">
        <label >Level :</label></br>
        <select name="InstitutionDegrees" id="InstitutionDegree" size="1"  style="display:inline; width:380px;height:30px;">



        </select>
    </div>
    </br>
    <button type="submit" class="btn btn-primary">Search</button>
</form>

<script>
    function degreeAjax(){
        var opt = document.getElementById("InstitutionDegree");
        var len = opt.length;



            while(len!=0) {
                opt.remove(0);
                len--;

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
</script>



