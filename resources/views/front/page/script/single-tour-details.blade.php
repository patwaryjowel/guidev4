


  @php
                         use App\Models\booking;
                         $bookings = booking::where('guide_user_id', $member->guide_id)->get();

 @endphp
 
                    [@foreach($bookings as $booking)    
                    @if (!empty($booking->tour_date_one))
                    '{{$booking->tour_date_one}}',  
                    @endif
                    @if (!empty($booking->tour_date_two))
                     '{{$booking->tour_date_two}}',  
                    @endif
                    @if (!empty($booking->tour_date_three))
                     '{{$booking->tour_date_three}}', 
                    @endif
                    @if (!empty($booking->tour_date_four))
                     '{{$booking->tour_date_four}}', 
                    @endif
                    @if (!empty($booking->tour_date_five))
                     '{{$booking->tour_date_five}}',  
                    @endif
                    @if (!empty($booking->tour_date_six))
                     '{{$booking->tour_date_six}}', 
                    @endif
                    @if (!empty($booking->tour_date_seven))
                     '{{$booking->tour_date_seven}}', 
                    @endif
                    @if (!empty($booking->tour_date_eight))
                     '{{$booking->tour_date_eight}}', 
                    @endif
                    @if (!empty($booking->tour_date_nine))
                     '{{$booking->tour_date_nine}}', 
                    @endif
                    @if (!empty($booking->tour_date_ten))
                     '{{$booking->tour_date_ten}}', 
                    @endif
                   



                         
 @endforeach]

                        $string = 15/1/2021;  
                        $tourDates = preg_split ("/\,/", $string);
                       $tourDates = $string; 
                         @endphp

<script>
       
   //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    $(".next").click(function(){
        if(animating) return false;
        animating = true;
        
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        
        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        
        //show the next fieldset
        next_fs.show(); 
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                left = (now * 50)+"%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
            'transform': 'scale('+scale+')',
            'position': 'absolute'
        });
                next_fs.css({'left': left, 'opacity': opacity});
            }, 
            duration: 800, 
            complete: function(){
                current_fs.hide();
                animating = false;
            }, 
            //this comes from the custom easing plugin
            //easing: 'easeInOutBack'
        });
    });

    
      

    $(".previous").click(function(){
        if(animating) return false;
        animating = true;
        
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        
        //de-activate current step on progressbar
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        
        //show the previous fieldset
        previous_fs.show(); 
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1-now) * 50)+"%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({'left': left, 'display': 'none'});
                previous_fs.css({
                    'transform': 'scale('+scale+')', 
                    'opacity': opacity,
                    'position': 'relative'
                });
                
            }, 
            duration: 800, 
            complete: function(){
                current_fs.hide();
                animating = false;
            }, 
            //this comes from the custom easing plugin
            //easing: 'easeInOutBack'
        });
    });

    $(".submit").click(function(){
        return false;
    }) ;
        
    
    
        
        
//     // var red = ["2020-12-11","2020-12-04","2020-12-18","2020-12-25" ];
//     // var yellow = ["2020-12-12"];
//     // var green = ["2020-12-10","2020-12-14"];

//     var dateToday = new Date();
//     var weekend_strtday = 0;
//     var weekend_endday =  6;

//   /*  $("#calendar").datepicker({
//         defaultDate: new Date(),      // Just for this demo longevity on SO ;)
//         minDate: dateToday,
//         beforeShowDay: $.datepicker.noWeekends
        
//     });*/

//     // multi Select DatesPicker
//   //  $('#calendar').multiDatesPicker();


//    /* $('#calendar').multiDatesPicker({
//     minDate: 0,
//     maxDate: 30,
//     altField: '.altField',
//     addDates: ['1/14/2021'],
//     defaultDate: '1/1/2021',
    
// });*/
    

// $('#calendar').multiDatesPicker({
//     minDate: 0,
//     maxDate: 30,
//     altField: '.altField',
//     addDates: ['1/14/2021' , '1/15/2021'],
//     defaultDate: '1/1/2021',
    
// });

// //get date from click on calendar
// $( document ).ready(function() {
//     $('#calendar').datepicker({
//         onSelect: function(dateText, inst) { 
//             console.log(dateText,inst,"good");
//         }
//     });
// });


 // var red = ["2020-12-11","2020-12-04","2020-12-18","2020-12-25" ];
     // var yellow = ["2020-12-12"];
     // var green = ["2020-12-10","2020-12-14"];
 
     var dateToday = new Date();
     var weekend_strtday = 0;
     var weekend_endday =  6;
     var selectedDate = [];
     
 
    $("#calendar").datepicker({
        defaultDate: new Date(),      // Just for this demo longevity on SO ;)
        minDate: dateToday,
        beforeShowDay: $.datepicker.noWeekends
    });
 
     // multi Select DatesPicker
     $('#calendar').multiDatesPicker({
        dateFormat: "y-m-d",
        onSelect: function(dateText, inst){
            selectedDate.push(dateText);
            Cookies.set('selected_dates', selectedDate);
            Cookies.set('clicked_date', dateText);
            $('#selected_dates').val(selectedDate);
            //console.log(selectedDate);
        },
        beforeShowDay: function(date) {
            var today = new Date(), maxDate;
            today.setHours(0,0,0,0);
            maxDate = new Date().setDate(today.getDate() + 1);
            if (date <= maxDate && date >= today ) {
                return [true, 'myClass'];
            }
            return [true, ''];

            
        }
     });
     
    //console.log(Cookies.get('selected_dates'));
    
 </script>
      <style>
        .ui-datepicker-week-end {
            pointer-events: none;
            cursor: not-allowed;
        }
    </style>




                          
                   
