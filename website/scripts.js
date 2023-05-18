function openCity(evt, tabName) {
    // Declare all variables
    var i, tabcontent, nav_button;
  
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabContent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="nav_button" and remove the class "active"
    nav_button = document.getElementsByClassName("nav_button");
    for (i = 0; i < nav_button.length; i++) {
      nav_button[i].className = nav_button[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "flex";
    document.getElementById(tabName).style.flexDirection = "column";
    evt.currentTarget.className += " active";
}

var acc = document.getElementsByClassName("accordion");

for (var i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active_accordion");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

document.getElementById("defaultOpen").click();


const words = ["Experiment.", "Collaborate.", "Innovate."];
let j = 0;
let timer;

function typingEffect() {
	let word = words[j].split("");
	var loopTyping = function() {
		if (word.length > 0) {
			document.getElementById('word').innerHTML += word.shift();
		} else {
      timer = setTimeout(deletingEffect, 500);
			// deletingEffect();
			return false;
		};
		timer = setTimeout(loopTyping, 100);
	};
	loopTyping();
};

function deletingEffect() {
	let word = words[j].split("");
	var loopDeleting = function() {
		if (word.length > 0) {
			word.pop();
			document.getElementById('word').innerHTML = word.join("");
		} else {
			if (words.length > (j + 1)) {
				j++;
			} else {
				j = 0;
			};
			typingEffect();
			return false;
		};
		timer = setTimeout(loopDeleting, 100);
	};
	loopDeleting();
};

typingEffect();



function searchFunc() {
	// Declare variables
	var input, filter, table, tr, td, i, txtValue;
	input = document.getElementById("myInput");
	filter = input.value.toUpperCase();
	table = document.getElementById("myTable");
	tr = table.getElementsByTagName("tr");

	const trs = table.tBodies[0].getElementsByTagName("tr");
  
	// Loop through all table rows, and hide those who don't match the search query
	// for (i = 0; i < tr.length; i++) {

	//   	td = tr[i].getElementsByTagName("td")[0];
	//  	td2 = tr[i].getElementsByTagName("td")[1];
	//   	if (td) {
	// 		txtValue = td.textContent || td.innerText;
	// 		if (txtValue.toUpperCase().indexOf(filter) > -1) {
	// 			console.log(td);
	// 		tr[i].style.display = "";
	// 		} 
	// 		else {
	// 			if (td2) {
	// 				txtValue = td2.textContent || td2.innerText;
	// 				if (txtValue.toUpperCase().indexOf(filter) > -1) {
	// 					console.log(td2);
	// 				tr[i].style.display = "";
	// 				}
	// 				else{
	// 					tr[i].style.display = "none";
	// 				}
				
	// 			}
	// 		}
	  
	// 	}
    // }

	for (var rowI = 0; rowI < trs.length; rowI++) {

		// define the row's cells
		var tds = trs[rowI].getElementsByTagName("td");
	
		// hide the row
		trs[rowI].style.display = "none";
	
		// loop through row cells
		for (var cellI = 0; cellI < tds.length; cellI++) {
	
		  // if there's a match
		  if (tds[cellI].innerHTML.toUpperCase().indexOf(filter) > -1) {
	
			// show the row
			trs[rowI].style.display = "";
	
			// skip to the next row
			continue;
	
		  }
		}
	  }
}