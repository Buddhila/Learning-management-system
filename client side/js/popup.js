/*add popup*/
function displaynone()
{
	var displaynone = document.getElementById("add-form")
	displaynone.style.display = "none"
}

function displayflex()
{
	// all update forms - close
	var display_back_all = document.getElementsByClassName("upload-form-1");
	for(var i=0; i < display_back_all.length; i++) {
		let element = display_back_all[i].id;
		document.getElementById(element).style.display = "none";
	}
	
	var display_back1 = document.getElementById("add-form");
	display_back1.style.display = "flex";
}

/*update popup*/
function displaynone_2(lessonId)
{
	var displaynone = document.getElementById("update-form-" + lessonId)
	displaynone.style.display = "none"
}

function displayflex2(lessonId)
{
	// add form - close
	var display_back1 = document.getElementById("add-form");
	display_back1.style.display = "none";
	
	// all update forms - close
	var display_back_all = document.getElementsByClassName("upload-form-1");
	for(var i=0; i < display_back_all.length; i++) {
		let element = display_back_all[i].id;
		document.getElementById(element).style.display = "none";
	}
	
	// update form - open
	var display_back2 = document.getElementById("update-form-" + lessonId);
	display_back2.style.display ="flex";
}

/*sign in*/

function displaynone_3()
{
	var displaynone = document.getElementById("bg-model")
	displaynone.style.display = "none"
}

function displayflex3()
{
	var display_back2 = document.getElementById("bg-model");
	
	
	display_back2.style.display ="flex";
}

/*function drop()
{
   
        const modal = document.querySelector("#modal");
        const openModal = document.querySelector("#click");
        const closeModal = document.querySelector("#closesign");
    
        openModal.addEventListener('click', () => {
            modal.showModal();
        })
    
        closeModal.addEventListener('click', () => {
            modal.close();
        })
    
}
*/



function displayshortcourse()
{
	var display_back2 = document.getElementById("p-class-2");
	var display_back1 = document.getElementById("p-class-3");
	var display_back3 = document.getElementById("p-class-4");
	var display_back4 = document.getElementById("p-class-5");
	display_back1.style.display = "none";
	display_back2.style.display ="flex";
	display_back3.style.display ="none";
	display_back4.style.display ="none";
}

function displayfreecourse()
{
	var display_back2 = document.getElementById("p-class-2");
	var display_back1 = document.getElementById("p-class-3");
	var display_back3 = document.getElementById("p-class-4");
	var display_back4 = document.getElementById("p-class-5");
	display_back1.style.display = "flex";
	display_back2.style.display ="none";
	display_back3.style.display ="none";
	display_back4.style.display ="none";
	
}
function displaymycourse()
{
	var display_back2 = document.getElementById("p-class-2");
	var display_back1 = document.getElementById("p-class-3");
	var display_back3 = document.getElementById("p-class-4");
	var display_back4 = document.getElementById("p-class-5");
	display_back1.style.display = "none";
	display_back2.style.display ="none";
	display_back3.style.display ="flex";
	display_back4.style.display ="none";
}

function displayBookmark()
{
	var display_back2 = document.getElementById("p-class-2");
	var display_back1 = document.getElementById("p-class-3");
	var display_back3 = document.getElementById("p-class-4");
	var display_back4 = document.getElementById("p-class-5");
	display_back1.style.display = "none";
	display_back2.style.display ="none";
	display_back3.style.display ="none";
	display_back4.style.display ="flex";
}

function displaypending()
{
	alert (" Degree Program is comming soon....");
}

/*`````````````````````````````````````````````````````````````````````````````````buy*/
function displaynonerev()
{
	var displaynone = document.getElementById("add-form-rev")
	displaynone.style.display = "none"
}

function displayflexrev()
{
	
	var display_back1 = document.getElementById("add-form-rev");
	var display_back2 = document.getElementById("add-form-2");
	display_back1.style.display = "flex";
	display_back2.style.display ="none";
}

function displayflexbuy()
{
	
	var display_back1 = document.getElementById("add-form-rev");
	var display_back2 = document.getElementById("add-form-2");
	display_back1.style.display = "none";
	display_back2.style.display ="flex";
}




















/*Admin panel*/


function displayUM()
{
	var display_back1 = document.getElementById("user-M");
	var display_back2 = document.getElementById("lecture-M");
	var display_back3= document.getElementById("course-M");
	var display_back4= document.getElementById("Purchase-M");
	display_back1.style.display = "flex";
	display_back2.style.display ="none";
	display_back3.style.display ="none";
	display_back4.style.display ="none";
}

function displayLM()
{
	var display_back1 = document.getElementById("user-M");
	var display_back2 = document.getElementById("lecture-M");
	var display_back3= document.getElementById("course-M");
	var display_back4= document.getElementById("Purchase-M");
	display_back1.style.display = "none";
	display_back2.style.display ="flex";
	display_back3.style.display ="none";
	display_back4.style.display ="none";
}

function displayCM()
{
	var display_back1 = document.getElementById("user-M");
	var display_back2 = document.getElementById("lecture-M");
	var display_back3= document.getElementById("course-M");
	var display_back4= document.getElementById("Purchase-M");
	display_back1.style.display = "none";
	display_back2.style.display ="none";
	display_back3.style.display ="flex";
	display_back4.style.display ="none";
}

function displayPM()
{
	var display_back1 = document.getElementById("user-M");
	var display_back2 = document.getElementById("lecture-M");
	var display_back3= document.getElementById("course-M");
	var display_back4= document.getElementById("Purchase-M");
	display_back1.style.display = "none";
	display_back2.style.display ="none";
	display_back3.style.display ="none";
	display_back4.style.display ="flex";
}

/*````````````````````````sign in popup```````````````````````````````*/

function displayclosesignin()
{
	var displaynone = document.getElementById("add-form")
	displaynone.style.display = "none"
}

function displayflex()
{
	var display_1 = document.getElementById("add-form")
	display_1.style.display = "flex"
}




