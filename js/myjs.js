var sem='S1';
var s=[];
for (var i = 1; i < 200; i++) {
  s.push(i);
}
var s1=['Calculus','Engineering Physics','Engineering Chemistry','Engineering Mechanics','Introduction to Computing and Problem Solving','Introduction to Civil Engineering','Introduction to Mechanical Engineering','Introduction to Electrical Engineering','Introduction to Electronics Engineering','Introduction to Chemical Engineering','Introduction to Sustainable Engineering','Basics of Mechanical Engineering','Basics of Electrical Engineering','Basics of Electronics Engineering','Basics of Civil Engineering','Physics Lab','Chemistry Lab','Civil Engineering Workshop','Mechanical Engineering Workshop','Electrical Engineering Workshop','Electronics Engineering Workshop','Computer Science Engineering Workshop'];

$('#semester1').change(function(){
  //do stuff here, eg.
  sem=$(this).val();
  addbranch();
  subs();
});


function addbranch() {

  $('#branch1').append($('<option>', {
  value: 'CSE',
  text: 'Computer Science Engineering'
  }));

    $('#branch1').append($('<option>', {
    value: 'MECH',
    text: 'Mechanical Engineering'
    }));
    $('#branch1').append($('<option>', {
    value: 'EEE',
    text: 'Electrical Engineering'
    }));
    $('#branch1').append($('<option>', {
    value: 'EC',
    text: 'Electronics Engineering'
    }));
    $('#branch1').append($('<option>', {
    value: 'CIVIL',
    text: 'Civil Engineering'
    }));
}


function semch(){

  sem=('#semester1').val();
}


function subs(){


    $('#subject1').append($('<option>', {
    value: 'sem',
    text: 'sem'
    }));
    if (sem == 'S1'){
      $('#subject1').html('');
      for (var i = 0; i < 22; i++) {
        $('#subject1').append($('<option>', {
       value: s[i],
       text: s1[i]
   }));

    }
  }

  if (sem == 'S2'){
    $('#subject1').html('');
    $('#subject1').append($('<option>', {
    value: 24,
    text: 'Differential Equations'
    }));
    for (var i = 1; i < 22; i++) {
      $('#subject1').append($('<option>', {
     value: s[i],
     text: s1[i]
  }));

  }
  }


    if (sem == 'S3'){
    if ($('#semester1').val() == 'CSE') { //check the selected option etc.
       //do more stuff
       $('#subject1').html('');


       }
    }


  if (sem == 'S4'){
  if ($('#semester1').val() == 'CSE') { //check the selected option etc.
     //do more stuff
     $('#subject1').html('');


     }
  }


  if (sem == 'S5'){
  if ($('#semester1').val() == 'CSE') { //check the selected option etc.
     //do more stuff
     $('#subject1').html('');


     }
  }


}



$('#branch1').change(function(){
  //do stuff here, eg.

  $('#subject1').append($('<option>', {
  value: 'sem',
  text: 'sem'
  }));
  if (sem == 'S1'){
    $('#subject1').html('');
    for (var i = 0; i < 22; i++) {
      $('#subject1').append($('<option>', {
     value: s[i],
     text: s1[i]
 }));

  }
}

if (sem == 'S2'){
  $('#subject1').html('');
  $('#subject1').append($('<option>', {
  value: 24,
  text: 'Differential Equations'
  }));
  for (var i = 1; i < 22; i++) {
    $('#subject1').append($('<option>', {
   value: s[i],
   text: s1[i]
}));

}
}


  if (sem == 'S3'){
  if ($(this).val() == 'CSE') { //check the selected option etc.
     //do more stuff
     $('#subject1').html('');


     }
  }


if (sem == 'S4'){
if ($(this).val() == 'CSE') { //check the selected option etc.
   //do more stuff
   $('#subject1').html('');


   }
}


if (sem == 'S5'){
if ($(this).val() == 'CSE') { //check the selected option etc.
   //do more stuff
   $('#subject1').html('');


   }
}


});
