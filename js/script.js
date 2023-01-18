const getButton = document.getElementById('get');
const multiInput = document.querySelector('multi-input'); 
const values = document.querySelector('#values'); 

getButton.onclick = () => {
  if (multiInput.getValues().length > 0) {
    values.textContent = `Got ${multiInput.getValues().join(' and ')}!`;
  } else {
    values.textContent = 'Got noone  :`^(.'; 
  }
}

document.querySelector('input').focus();
//Search skills
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
      txtValue = a[i].textContent || a[i].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        a[i].style.display = "";
      } else {
        a[i].style.display = "none";
      }
    }
  }