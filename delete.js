function deleteAnnuaire($action) {
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("demo").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", ".txt");
    xhttp.send();
}

var btnDel = document.querySelectorAll('#delete')

for (let i = 0; i < btnDel.length; i++) {
    btnDel[i].addEventListener('click',(e)=>{
        e.preventDefault();
        let ref = e.target.href
        console.log(ref)
    })
    
}