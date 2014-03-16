// Modified http://paulirish.com/2009/markup-based-unobtrusive-comprehensive-dom-ready-execution/
// Only fires on body class (working off strictly WordPress body_class)

var Aie = {
  // All pages
  common: {
    init: function() {
      // JS here
    },
    finalize: function() { }
  },
  // Home page
  home: {
    init: function() {
      //facebook events

      var cal_id = "gf0gm9vluc14ussf7r0g6la5hk@group.calendar.google.com",
          num_results = 8,
          cal_url = "http://www.google.com/calendar/feeds/" + cal_id + "/public/full?alt=json&orderby=starttime&max-results=" + num_results + "&singleevents=true&sortorder=ascending&futureevents=true",
          $entry_container = $('#upcoming-events');

      $.getJSON(cal_url, {
          format: "json"
      })
          .done(function (data) {
          $.each(data.feed.entry, function (i, e) {
            var event_date = moment(e.gd$when[0].startTime);
            var event_link = e.link[0].href;
            
            var entry = '<div class="col-md-3">';
                  entry += '<div class="event">';
                    
                    entry += '<p class="when">' + event_date.format('dddd, MMM Do / h:m a') + '</p>';
                    entry += '<p class="title"><a href="' + event_link + '">' + e.title.$t + '</a></p>';
                  
                  entry += '</div>';
                entry += '</div>';
            
            $entry_container.append(entry);


          });

          //equal heights of events
          var largest_event_height = 0;
          $('.event').each(function(){

            var cur_height = $(this).outerHeight();
            if( cur_height > largest_event_height ){
              largest_event_height = cur_height;
            }
          });

          $('.event').css('height', (largest_event_height + 20) + 'px');
      });

     


      //linkify facebook posts
      var toHashtagUrl = function(hashtag) {
        return "http://facebook.com/hashtag/" + hashtag;
      };

      $("#facebook-posts .info-box .desc").linkify(toHashtagUrl);

    }
  },
  // About page
  about: {
    init: function() {
      // JS here
    }
  }
};

var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Aie;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {

    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });

    UTIL.fire('common', 'finalize');
  }
};

$(document).ready(UTIL.loadEvents);
