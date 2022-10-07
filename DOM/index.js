function getcube() {
    var number = document.getElementById("no").value;

    age = number * number * number;
    var obj1 = document.getElementById("para");
    if (age > 27) {
      obj1.style.display = "none";
    } 
    else if(age<27){
        obj1.style.textDecoration = "line-through";
        var obj1 = document.getElementById("para");
        var col = obj1.style.color;
        obj1.innerHTML = col ;
        console.log(obj1.style.color);
    }
    else{
        obj1.style.textDecoration = "underline";
        obj1.style.color = "red";
     
    }
}