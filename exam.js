// var count = 0;
// var btn = document.getElementById("btn");


// btn.onclick = function () {
//     count++;
//     if(count>3)
//     {
//         alert("max");
//     }
// }
var repeat=0;
var marks=0;
var submitAnswer = function() {
 
  var q1 = document.getElementsByName('q1');
  var q2 = document.getElementsByName('q2');
  var q3 = document.getElementsByName('q3');
  var q4 = document.getElementsByName('q4');
  var q=['q1','q2','q3','q4'];
  var val= "";
  
  for (var i = 0; i < 2; i++) {
      if (q1[i].checked) {
         val=q1[i].value;
         if(val=="true")
         { 
           marks++;
        } 
       }

       if (q2[i].checked) {
        val=q2[i].value;
        if(val=="true")
        { 
          marks++;
       } 
      }

      if (q3[i].checked) {
        val=q3[i].value;
        if(val=="true")
        { 
          marks++;
       } 
      }

      if (q4[i].checked) {
        val=q4[i].value;
        if(val=="true")
        { 
          marks++;
       } 
      }
       
  }
 
 if(marks>2){
   alert(`u pass you got marks in the exam`);
   window.location.href = "neet-course-content.php";
   
 }
 else if(marks<=2)
 {
   repeat++;
   if(repeat<3)
   {
     var text=`you got less then 3 marks ${2-repeat} attempt left try to get more then 2 marks` 
     alert(text);
  window.location.href = "javascript:;";
   }
   else if(repeat>=3)
   {
     alert("u exced maximum attempts so try with easy quiz");
     window.location.href = "easy.html";
   }
 }
};