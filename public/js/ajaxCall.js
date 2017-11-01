/**
 * Created by Anibm on 11/1/2017.
 */

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
