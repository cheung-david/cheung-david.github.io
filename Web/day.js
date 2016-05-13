// JavaScript Document
var day=new Date().getDay();
var d = new Date();
var date = d.getDate();
var month = new Date().getMonth();
var noschool="Welcome to Stephen Leacock. No School Today." ;
var pa="Welcome to Stephen Leacock. No School - PA Day." ;
var summer="Welcome to Stephen Leacock. Enjoy Your Summer." ;
var exams="Welcome to Stephen Leacock. Exam Schedule." ;
var wb="Welcome to Stephen Leacock. Enjoy the Break." ;
var mb="Welcome to Stephen Leacock. Enjoy the Break." ;
function schoolDay5(){
switch(month) 
{ 
case 0: if(date<=5) return wb;break; //Christmas holiday 
case 1: if(date===18) return mb;break; //Family Day 
case 2: if(date>=7&&date<=16||date==28) return mb;break; /*March break/Good friday*/
case 3: if(date===1) return noschool;break; //Easter monday
case 4: if(date===20) return noschool;break; //Victoria day
case 5: if(date===10||date>=17&&date<=21)return exams;break;//Summer Exams
case 6: return summer; //Summer holiday
case 7: return summer; //Summer holiday
case 8: if(date===2) return noschool;break; //Labour day
case 9: if(date===14) return noschool;break; //Thanksgiving day
case 10: if(date===15) return pa;break;//PA Day
case 11: if(date>=20) return wb;break;//Christmas holiday
} 
switch (day)
{
case 0:
return noschool;
case 6:
return noschool;
}
{
if (date%2 === 0)
return "It is Day 2";
else
return "It is Day 1";
}
}
window.onload=function(){
var str= "<span class='promo1 ribbon'>" + "<center>" + schoolDay5() +"<span>";
document.getElementById('notice').innerHTML=str;
};