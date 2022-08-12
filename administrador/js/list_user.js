function myFunction() {
    // Declare variables
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName('li');
  
    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
      let aa = li[i].getElementsByTagName("a")[0];
      let ab = li[i].getElementsByTagName("a")[1];
      let ac = li[i].getElementsByTagName("a")[2];

      txtValueA = aa.textContent || aa.innerText;
      console.log(txtValueA);
      txtValueB = ab.textContent || ab.innerText;
      console.log(txtValueB);
      txtValueC = ac.textContent || ac.innerText;
      console.log(txtValueC);

      if (txtValueA.toUpperCase().indexOf(filter) > -1 || txtValueB.toUpperCase().indexOf(filter) > -1 || txtValueC.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "";
      } else {
        li[i].style.display = "none";
      }     
    }
  }
  /*-------- boton eliminar */

  /*-------- fin boton eliminar */