var sem='S1';
var s=[];
for (var i = 1; i < 200; i++) {
  s.push(i);
}
var s1=['Calculus','Engineering Physics','Engineering Chemistry','Engineering Mechanics','Introduction to Computing and Problem Solving','Introduction to Civil Engineering','Introduction to Mechanical Engineering','Introduction to Electrical Engineering','Introduction to Electronics Engineering','Introduction to Chemical Engineering','Introduction to Sustainable Engineering','Basics of Mechanical Engineering','Basics of Electrical Engineering','Basics of Electronics Engineering','Basics of Civil Engineering','Physics Lab','Chemistry Lab','Civil Engineering Workshop','Mechanical Engineering Workshop','Electrical Engineering Workshop','Electronics Engineering Workshop','Computer Science Engineering Workshop'];
var s3=['Discrete Computational Structures','Switching Theory and Logic Design','Data Structures','Electronics Devices and Circuits','Data Structures Lab','Electronic Circuits Lab'];
var s3me=['Mechanics of Solids','Mechanics of Fluids','Thermodynamics','Metallurgy and Materials Engineering'];
var s3ee=['Circuits and Networks','Analog Electronic Circuits','DC Machines And Transformers','Computer Programming'];
var s3ec=['Network Theory','Solid State Devices','Electronic Circuits','Logic Circuit Design'];
var s3civ=['Mechanics of  Solids','Fluid Mechanics-I','Engineering Geology','Surveying'];
var s4c=['Computer Organization and Architecture','Operating Systems','Object Oriented Design and Programming','Principles of Database Design'];
var s4me=['Advanced Mechanics of Solids','Thermal Engineering','Manufacturing Technology','Fluid Machinery'];
var s4ee=['Synchronous And Induction Machines','Digital Electronics And Logic Design','Material Science','Measurements and Instrumentation'];
var s4ec=['Signals and Systems','Analog Integrated Circuits','Computer Organisation','Analog Communication Engineering'];
var s4civ=['Structural Analysis-I','Construction Technology','Fluid Mechanics-II','Geotechnical Engineering-I'];
var s5c=['Theory of Computation','System Software','Microprocessors and Microcontrollers','Data Communication','Graph Theory and Combinatorics'];
var s5me=['Mechanics of Machinery','Machine Tools and Digital Manufacturing','Computer Programming and Numerical Methods','Electrical Drives and Control for Automation','Principles of Management'];
var s5ee=['Power Generation, Transmission And Protection','Linear Control Systems','Power Electronics','Signals And  Systems','Microprocessor and Embedded Systems'];
var s5ec=['Digital Signal Processing','Applied Electromagnetic Theory','Power Electronic And Instrumentation','Principles Of Managemnet'];
var s5civ=['Design of Concrete Structures-I','Structural Analysis-II','Geotechnical Engineering','Geomatics','Water Resources Engineering'];
$('#semester1').change(function(){

  sem=$(this).val();
  addbranch();
  subs();
});


$('#subject1').change(function(){

  var as=$(this).val();
if(as=='1000')
document.getElementById("submitButton").disabled = true;
else {
  document.getElementById("submitButton").disabled = false;
}
});


function addbranch() {
  $('#branch1').html('');

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
    if ($('#branch1').val() == 'CSE') {

       $('#subject1').html('');
       $('#subject1').append($('<option>', {
       value: 10000,
       text: '--select--'
       }));
       document.getElementById("submitButton").disabled = true;
       for (var i = 0; i < 6; i++) {
         $('#subject1').append($('<option>', {
        value: s[i+22],
        text: s3[i]
    }));

     }
       }
       if ($('#branch1').val() == 'MECH') {

          $('#subject1').html('');
          $('#subject1').append($('<option>', {
          value: 10000,
          text: '--select--'
          }));
          document.getElementById("submitButton").disabled = true;
          for (var i = 0; i < 4; i++) {
            $('#subject1').append($('<option>', {
           value: s[i+28],
           text: s3me[i]
       }));

        }
          }
          if ($('#branch1').val() == 'EEE') {

             $('#subject1').html('');
             $('#subject1').append($('<option>', {
             value: 10000,
             text: '--select--'
             }));
             document.getElementById("submitButton").disabled = true;
             for (var i = 0; i < 4; i++) {
               $('#subject1').append($('<option>', {
              value: s[i+32],
              text: s3ee[i]
          }));

           }
             }
             if ($('#branch1').val() == 'EC') {

                $('#subject1').html('');
                $('#subject1').append($('<option>', {
                value: 10000,
                text: '--select--'
                }));
                document.getElementById("submitButton").disabled = true;
                for (var i = 0; i < 4; i++) {
                  $('#subject1').append($('<option>', {
                 value: s[i+36],
                 text: s3ec[i]
             }));

              }
                }
                if ($('#branch1').val() == 'CIVIL') {

                   $('#subject1').html('');
                   $('#subject1').append($('<option>', {
                   value: 10000,
                   text: '--select--'
                   }));
                   document.getElementById("submitButton").disabled = true;
                   for (var i = 0; i < 4; i++) {
                     $('#subject1').append($('<option>', {
                    value: s[i+40],
                    text: s3civ[i]
                }));

                 }
                   }
    }


  if (sem == 'S4'){
    if ($('#branch1').val() == 'CSE') {

       $('#subject1').html('');
       $('#subject1').append($('<option>', {
       value: 10000,
       text: '--select--'
       }));
       document.getElementById("submitButton").disabled = true;
       for (var i = 0; i < 4; i++) {
         $('#subject1').append($('<option>', {
        value: s[i+44],
        text: s4c[i]
    }));

     }
       }
       if ($('#branch1').val() == 'MECH') {

          $('#subject1').html('');
          $('#subject1').append($('<option>', {
          value: 10000,
          text: '--select--'
          }));
          document.getElementById("submitButton").disabled = true;
          for (var i = 0; i < 4; i++) {
            $('#subject1').append($('<option>', {
           value: s[i+48],
           text: s4me[i]
       }));

        }
          }
          if ($('#branch1').val() == 'EEE') {

             $('#subject1').html('');
             $('#subject1').append($('<option>', {
             value: 10000,
             text: '--select--'
             }));
             document.getElementById("submitButton").disabled = true;
             for (var i = 0; i < 4; i++) {
               $('#subject1').append($('<option>', {
              value: s[i+52],
              text: s4ee[i]
          }));

           }
             }
             if ($('#branch1').val() == 'EC') {

                $('#subject1').html('');
                $('#subject1').append($('<option>', {
                value: 10000,
                text: '--select--'
                }));
                document.getElementById("submitButton").disabled = true;
                for (var i = 0; i < 4; i++) {
                  $('#subject1').append($('<option>', {
                 value: s[i+56],
                 text: s4ec[i]
             }));

              }
                }
                if ($('#branch1').val() == 'CIVIL') {

                   $('#subject1').html('');
                   $('#subject1').append($('<option>', {
                   value: 10000,
                   text: '--select--'
                   }));
                   document.getElementById("submitButton").disabled = true;
                   for (var i = 0; i < 4; i++) {
                     $('#subject1').append($('<option>', {
                    value: s[i+60],
                    text: s4civ[i]
                }));

                 }
                   }
  }


  if (sem == 'S5'){
    if ($('#branch1').val() == 'CSE') {

       $('#subject1').html('');
       $('#subject1').append($('<option>', {
       value: 10000,
       text: '--select--'
       }));
       document.getElementById("submitButton").disabled = true;
       for (var i = 0; i < 5; i++) {
         $('#subject1').append($('<option>', {
        value: s[i+64],
        text: s5c[i]
    }));

     }
       }
       if ($('#branch1').val() == 'MECH') {

          $('#subject1').html('');
          $('#subject1').append($('<option>', {
          value: 10000,
          text: '--select--'
          }));
          document.getElementById("submitButton").disabled = true;
          for (var i = 0; i < 5; i++) {
            $('#subject1').append($('<option>', {
           value: s[i+69],
           text: s5me[i]
       }));

        }
          }
          if ($('#branch1').val() == 'EEE') {

             $('#subject1').html('');
             $('#subject1').append($('<option>', {
             value: 10000,
             text: '--select--'
             }));
             document.getElementById("submitButton").disabled = true;
             for (var i = 0; i < 5; i++) {
               $('#subject1').append($('<option>', {
              value: s[i+74],
              text: s5ee[i]
          }));

           }
             }
             if ($('#branch1').val() == 'EC') {

                $('#subject1').html('');
                $('#subject1').append($('<option>', {
                value: 10000,
                text: '--select--'
                }));
                document.getElementById("submitButton").disabled = true;
                for (var i = 0; i < 4; i++) {
                  $('#subject1').append($('<option>', {
                 value: s[i+79],
                 text: s5ec[i]
             }));

              }
                }
                if ($('#branch1').val() == 'CIVIL') {

                   $('#subject1').html('');
                   $('#subject1').append($('<option>', {
                   value: 10000,
                   text: '--select--'
                   }));
                   document.getElementById("submitButton").disabled = true;
                   for (var i = 0; i < 5; i++) {
                     $('#subject1').append($('<option>', {
                    value: s[i+83],
                    text: s5civ[i]
                }));

                 }
                   }
  }


}



$('#branch1').change(function(){


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
  if ($(this).val() == 'CSE') {


     $('#subject1').html('');
     $('#subject1').append($('<option>', {
     value: 10000,
     text: '--select--'
     }));
     document.getElementById("submitButton").disabled = true;
     for (var i = 0; i < 6; i++) {
       $('#subject1').append($('<option>', {
      value: s[i+22],
      text: s3[i]
  }));

   }

     }
     if ($(this).val() == 'MECH') {


        $('#subject1').html('');
        $('#subject1').append($('<option>', {
        value: 10000,
        text: '--select--'
        }));
        document.getElementById("submitButton").disabled = true;
        for (var i = 0; i < 4; i++) {
          $('#subject1').append($('<option>', {
         value: s[i+28],
         text: s3me[i]
     }));

      }

        }
        if ($(this).val() == 'EEE') {

           $('#subject1').html('');
           $('#subject1').append($('<option>', {
           value: 10000,
           text: '--select--'
           }));
           document.getElementById("submitButton").disabled = true;
           for (var i = 0; i < 4; i++) {
             $('#subject1').append($('<option>', {
            value: s[i+32],
            text: s3ee[i]
        }));

         }

           }
           if ($(this).val() == 'EC') {

              $('#subject1').html('');
              $('#subject1').append($('<option>', {
              value: 10000,
              text: '--select--'
              }));
              document.getElementById("submitButton").disabled = true;
              for (var i = 0; i < 4; i++) {
                $('#subject1').append($('<option>', {
               value: s[i+36],
               text: s3ec[i]
           }));

            }

              }
              if ($(this).val() == 'CIVIL') {

                 $('#subject1').html('');
                 $('#subject1').append($('<option>', {
                 value: 10000,
                 text: '--select--'
                 }));
                 document.getElementById("submitButton").disabled = true;
                 for (var i = 0; i < 4; i++) {
                   $('#subject1').append($('<option>', {
                  value: s[i+40],
                  text: s3civ[i]
              }));

               }

                 }
  }


if (sem == 'S4'){
  if ($(this).val() == 'CSE') {


     $('#subject1').html('');
     $('#subject1').append($('<option>', {
     value: 10000,
     text: '--select--'
     }));
     document.getElementById("submitButton").disabled = true;
     for (var i = 0; i < 4; i++) {
       $('#subject1').append($('<option>', {
      value: s[i+44],
      text: s4c[i]
  }));

   }

     }
     if ($(this).val() == 'MECH') {


        $('#subject1').html('');
        $('#subject1').append($('<option>', {
        value: 10000,
        text: '--select--'
        }));
        document.getElementById("submitButton").disabled = true;
        for (var i = 0; i < 4; i++) {
          $('#subject1').append($('<option>', {
         value: s[i+48],
         text: s4me[i]
     }));

      }

        }
        if ($(this).val() == 'EEE') {

           $('#subject1').html('');
           $('#subject1').append($('<option>', {
           value: 10000,
           text: '--select--'
           }));
           document.getElementById("submitButton").disabled = true;
           for (var i = 0; i < 4; i++) {
             $('#subject1').append($('<option>', {
            value: s[i+52],
            text: s4ee[i]
        }));

         }

           }
           if ($(this).val() == 'EC') {

              $('#subject1').html('');
              $('#subject1').append($('<option>', {
              value: 10000,
              text: '--select--'
              }));
              document.getElementById("submitButton").disabled = true;
              for (var i = 0; i < 4; i++) {
                $('#subject1').append($('<option>', {
               value: s[i+56],
               text: s4ec[i]
           }));

            }

              }
              if ($(this).val() == 'CIVIL') {

                 $('#subject1').html('');
                 $('#subject1').append($('<option>', {
                 value: 10000,
                 text: '--select--'
                 }));
                 document.getElementById("submitButton").disabled = true;
                 for (var i = 0; i < 4; i++) {
                   $('#subject1').append($('<option>', {
                  value: s[i+60],
                  text: s4civ[i]
              }));

               }

                 }
}


if (sem == 'S5'){
  if ($(this).val() == 'CSE') {


     $('#subject1').html('');
     $('#subject1').append($('<option>', {
     value: 10000,
     text: '--select--'
     }));
     document.getElementById("submitButton").disabled = true;
     for (var i = 0; i < 5; i++) {
       $('#subject1').append($('<option>', {
      value: s[i+64],
      text: s5c[i]
  }));

   }

     }
     if ($(this).val() == 'MECH') {


        $('#subject1').html('');
        $('#subject1').append($('<option>', {
        value: 10000,
        text: '--select--'
        }));
        document.getElementById("submitButton").disabled = true;
        for (var i = 0; i < 5; i++) {
          $('#subject1').append($('<option>', {
         value: s[i+69],
         text: s5me[i]
     }));

      }

        }
        if ($(this).val() == 'EEE') {

           $('#subject1').html('');
           $('#subject1').append($('<option>', {
           value: 10000,
           text: '--select--'
           }));
           document.getElementById("submitButton").disabled = true;
           for (var i = 0; i < 5; i++) {
             $('#subject1').append($('<option>', {
            value: s[i+74],
            text: s5ee[i]
        }));

         }

           }
           if ($(this).val() == 'EC') {

              $('#subject1').html('');
              $('#subject1').append($('<option>', {
              value: 10000,
              text: '--select--'
              }));
              document.getElementById("submitButton").disabled = true;
              for (var i = 0; i < 4; i++) {
                $('#subject1').append($('<option>', {
               value: s[i+79],
               text: s5ec[i]
           }));

            }

              }
              if ($(this).val() == 'CIVIL') {

                 $('#subject1').html('');
                 $('#subject1').append($('<option>', {
                 value: 10000,
                 text: '--select--'
                 }));
                 document.getElementById("submitButton").disabled = true;
                 for (var i = 0; i < 5; i++) {
                   $('#subject1').append($('<option>', {
                  value: s[i+83],
                  text: s5civ[i]
              }));

               }

                 }
}


});
