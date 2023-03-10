function searchBtn(form, searchbarId)
{
    const formChilds = form.children;
    var cookieValue = searchbarId.value;
    if(cookieValue != undefined && cookieValue != null)
    {
        setCookie("searchText", cookieValue);
        form.submit();
    }
};

var locationArray = new Array;
var experianceArray = new Array;
let data;

function displayResults(js, searchText)
{ 
    myjson = js;
    if(searchText != undefined && searchText != "all") {
        document.getElementById("SearchText").innerHTML = "Search Results for \""+searchText+"\"";
    }
    else{
        if(searchText == "all") {
            document.getElementById("SearchText").innerHTML = "Showing all the companies";
        }
    }

    var count = 1;
    for (var key in myjson) {
        if (myjson.hasOwnProperty(key)) 
        {   
            //console.log(myjson[key]); 
            let node;
            if(count > 1){
                myname = "aJobDiv"+(count-1);
                node = document.getElementById(myname);
                
                const clone = node.cloneNode(true);
                createLabels(clone);
                clone.setAttribute("id", "aJobDiv"+(count));
                clone.setAttribute("data-companyID", myjson[key].companyID);
                document.getElementById("AllJobsDiv").appendChild(clone);
                //console.log("clone "+clone.id + " " + clone.getAttribute("data-companyID"));
            }
            else{
                myname = "aJobDiv"+count;
                node = document.getElementById(myname);
                createLabels(node);
                node.setAttribute("data-companyID", myjson[key].companyID);
                //console.log(node.id + " " + node.getAttribute("data-companyID"));
            }
            count++;  
 
            function createLabels(mydiv){
            const children = mydiv.children;
                for(var child of children){
                    switch (child.id) {
                        case "companyName":
                            child.innerHTML = myjson[key].companyName;
                            break;

                        case "location":
                            child.innerHTML = myjson[key].headOfficeAddress;
                            break;
                        
                        case "description":
                            child.innerHTML = myjson[key].description;
                            break;

                        case "estabilished year":
                            child.innerHTML = myjson[key].establishedYear;
                            break;
                    }
                    if(child.innerHTML == "undefined"){
                        child.innerHTML = "";
                    }
                }
            }  
            /*
            if(myjson[key].experiances != ""){
                experianceArray.push(myjson[key].experiances);
            }

            if(myjson[key].location != ""){
                locationArray.push(myjson[key].location);
            }
            */   
        }
    }
    /*
    let locationArray1 = [...new Set(locationArray)];
    let experianceArray1 = [...new Set(experianceArray)];

    var experianceSlt = document.getElementById("experianceSelect");
    for(var w of experianceArray1)
    {
        var opt1 = document.createElement('option');
        opt1.innerHTML = w;
        opt1.value = w;
        experianceSlt.appendChild(opt1);
    }

    var locationSlt = document.getElementById("locationSelect");
    for(var q of locationArray1)
    {
        var opt2 = document.createElement('option');
        opt2.innerHTML = q;
        opt2.value = q;
        locationSlt.appendChild(opt2);
    }
    */
};

function setCookie(cookieName, cookieValue) {
    const d = new Date();
    d.setTime(d.getTime() + (86400 * 30 * 30));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cookieName + "=" + cookieValue + ";" + expires + ";path=/";
    //console.log(expires);
}

function CountHowManyJob(){
    const AllJobsDivChilds = document.getElementById("AllJobsDiv").children;
    var i = AllJobsDivChilds.length;

    var display;
    if(i == 1){ display = "none"; }
    else{ display = "flex";}

    for(var child of AllJobsDivChilds){
        child.setAttribute("display", display);
    }
}

function createJobIDcookie(parentt){
    const superParent = parentt.parentElement;
    var companyID = superParent.getAttribute("data-companyID");
    setCookie("ViewCompanyID", companyID);
    parentt.submit();
}