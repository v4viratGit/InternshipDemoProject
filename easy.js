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
   alert("Congratulations! You've passed the quiz.");
   localStorage.setItem("exam", "over");
   window.close();
 }
 else if(marks<=2)
 {
   
     var text=`You've got less then 3 marks, please apply for mentorship!`
     alert(text); 
     window.location.href = "mentor.html";
 }
};