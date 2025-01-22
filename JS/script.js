// function to show class 9 subject button
 function show_sub(){
 const d=document.getElementById('detail_1');
 const newbtn=document.createElement('button');
 newbtn.textContent = "Science";
 newbtn.id="scroll1";
 newbtn.onclick=function scl(){
 const sclbtn=document.getElementById("scroll1");
 const tgbtn=document.getElementById("target1");
 tgbtn.scrollIntoView({behavior:"smooth"});
 }
 d.appendChild(newbtn);
 const newbtn2=document.createElement('button');
 newbtn2.textContent = "Social Science";
 newbtn2.id="scroll2";
 newbtn2.onclick=function scl(){
 const sclbtn=document.getElementById("scroll2");
 const tgbtn=document.getElementById("target2");
 tgbtn.scrollIntoView({behavior:"smooth"});
 }
 d.appendChild(newbtn2);
 const newbtn3=document.createElement('button');
 newbtn3.textContent = "Computer Science";
 newbtn3.id="scroll3";
 newbtn3.onclick=function scl(){
 const sclbtn=document.getElementById("scroll3");
 const tgbtn=document.getElementById("target3");
 tgbtn.scrollIntoView({behavior:"smooth"});
 }
 d.appendChild(newbtn3);
 const newbtn4=document.createElement('button');
 newbtn4.textContent = "Maths";
 newbtn4.id="scroll4";
 newbtn4.onclick=function scl(){
 const sclbtn=document.getElementById("scroll4");
 const tgbtn=document.getElementById("target4");
 tgbtn.scrollIntoView({behavior:"smooth"});
 }
 d.appendChild(newbtn4);
 const newbtn5=document.createElement('button');
 newbtn5.textContent = "English";
 newbtn5.id="scroll5";
 newbtn5.onclick=function scl(){
 const sclbtn=document.getElementById("scroll5");
 const tgbtn=document.getElementById("target5");
 tgbtn.scrollIntoView({behavior:"smooth"});
 }
 d.appendChild(newbtn5);
 // adding style on button of subject
 newbtn.style.backgroundColor="white ";
 newbtn.style.fontSize="17px";
 newbtn.style.margin="25px";
 newbtn.style.borderRadius="5px"
 newbtn.style.width="100px";
 newbtn.style.height="45px";
 newbtn.style.borderColor="rgb(4, 4, 88)";
 newbtn.style.color="rgb(4, 4, 88)";
 newbtn2.style.backgroundColor="white";
 newbtn2.style.fontSize="17px";
 newbtn2.style.margin="25px";
 newbtn2.style.borderRadius="5px"
 newbtn2.style.width="150px";
 newbtn2.style.height="45px";
 newbtn2.style.borderColor="rgb(4, 4, 88)";
 newbtn2.style.color="rgb(4, 4, 88)";
 newbtn3.style.backgroundColor="white ";
 newbtn3.style.fontSize="17px";
 newbtn3.style.margin="25px";
 newbtn3.style.borderRadius="5px"
 newbtn3.style.width="180px";
 newbtn3.style.height="45px";
 newbtn3.style.borderColor="rgb(4, 4, 88)";
 newbtn3.style.color="rgb(4, 4, 88)";
 newbtn4.style.backgroundColor="white ";
 newbtn4.style.fontSize="17px";
 newbtn4.style.margin="25px";
 newbtn4.style.borderRadius="5px"
 newbtn4.style.width="100px";
 newbtn4.style.height="45px";
 newbtn4.style.borderColor="rgb(4, 4, 88)";
 newbtn4.style.color="rgb(4, 4, 88)";
 newbtn5.style.backgroundColor="white ";
 newbtn5.style.fontSize="17px";
 newbtn5.style.margin="25px";
 newbtn5.style.borderRadius="5px"
 newbtn5.style.width="100px";
 newbtn5.style.height="45px";
 newbtn5.style.borderColor="rgb(4, 4, 88)";
 newbtn5.style.color="rgb(4, 4, 88)";
 // disabling button for more click
 disableButton();
 function disableButton(){
 document.getElementById("sub9").disabled=true;
 }
 }
 // function for class 10 subject detail button
 function show_sub2(){
 const d=document.getElementById('detail_2');
 const newbtn=document.createElement('button');
 newbtn.textContent = "Science";
 newbtn.id="scroll6";
 newbtn.onclick=function scl(){
 const sclbtn=document.getElementById("scroll6");
 const tgbtn=document.getElementById("target6");
 tgbtn.scrollIntoView({behavior:"smooth"});
 }
 d.appendChild(newbtn);
 const newbtn2=document.createElement('button');
 newbtn2.textContent = "Social Science";
 newbtn2.id="scroll7";
 newbtn2.onclick=function scl(){
 const sclbtn=document.getElementById("scroll7");
 const tgbtn=document.getElementById("target7");
 tgbtn.scrollIntoView({behavior:"smooth"});
 }
 d.appendChild(newbtn2);
 const newbtn3=document.createElement('button');
 newbtn3.textContent = "Computer Science";
 newbtn3.id="scroll8";
 newbtn3.onclick=function scl(){
 const sclbtn=document.getElementById("scroll8");
 const tgbtn=document.getElementById("target8");
 tgbtn.scrollIntoView({behavior:"smooth"});
 }
 d.appendChild(newbtn3);
 const newbtn4=document.createElement('button');
 newbtn4.textContent = "Maths";
 newbtn4.id="scroll9";
 newbtn4.onclick=function scl(){
 const sclbtn=document.getElementById("scroll9");
 const tgbtn=document.getElementById("target9");
 tgbtn.scrollIntoView({behavior:"smooth"});
 }
 d.appendChild(newbtn4);
 const newbtn5=document.createElement('button');
 newbtn5.textContent = "English";
 newbtn5.id="scroll10";
 newbtn5.onclick=function scl(){
 const sclbtn=document.getElementById("scroll10");
 const tgbtn=document.getElementById("target10");
 tgbtn.scrollIntoView({behavior:"smooth"});
 }
 d.appendChild(newbtn5);
 // adding style to button
 newbtn.style.backgroundColor="white ";
 newbtn.style.fontSize="17px";
 newbtn.style.margin="25px";
 newbtn.style.borderRadius="5px"
 newbtn.style.width="100px";
 newbtn.style.height="45px";
 newbtn.style.borderColor="rgb(4, 4, 88)";
 newbtn.style.color="rgb(4, 4, 88)";
 newbtn2.style.backgroundColor="white ";
 newbtn2.style.fontSize="17px";
 newbtn2.style.margin="25px";
 newbtn2.style.borderRadius="5px"
 newbtn2.style.width="150px";
 newbtn2.style.height="45px";
 newbtn2.style.borderColor="rgb(4, 4, 88)";
 newbtn2.style.color="rgb(4, 4, 88)";
 newbtn3.style.backgroundColor="white";
 newbtn3.style.fontSize="17px";
 newbtn3.style.margin="25px";
 newbtn3.style.borderRadius="5px"
 newbtn3.style.width="180px";
 newbtn3.style.height="45px";
 newbtn3.style.borderColor="rgb(4, 4, 88)";
 newbtn3.style.color="rgb(4, 4, 88)";
 newbtn4.style.backgroundColor="white ";
 newbtn4.style.fontSize="17px";
 newbtn4.style.margin="25px";
 newbtn4.style.borderRadius="5px"
 newbtn4.style.width="100px";
 newbtn4.style.height="45px";
 newbtn4.style.borderColor="rgb(4, 4, 88)";
 newbtn4.style.color="rgb(4, 4, 88)";
 newbtn5.style.backgroundColor="white ";
 newbtn5.style.fontSize="17px";
 newbtn5.style.margin="25px";
 newbtn5.style.borderRadius="5px"
 newbtn5.style.width="100px";
 newbtn5.style.height="45px";
 newbtn5.style.borderColor="rgb(4, 4, 88)";
 newbtn5.style.color="rgb(4, 4, 88)";
 // disabling button for more click
 disableButton();
 function disableButton(){
 document.getElementById("sub10").disabled=true;
 }
 }
