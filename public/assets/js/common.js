

$(document).ready(function () {



  // menu
  //mobile menu
  $('.btn-menu-wrap').click(function () {
    $(this).find('.btn-menu').toggleClass('open');
    $('.main-menu').toggleClass('active');
  });

  $('#main-menu a').on('click', function () {
    $('.main-menu').removeClass('active');
    $('.btn-menu-wrap .btn-menu').removeClass('open');
  });

  //запрет на ввод букв в поле input type="number"
  $("input[type='number']").keypress(function (e) {
    if (e.which != 8 && e.which != 0 && e.which != 46 && e.which != 44 && (e.which < 48 || e.which > 57)) {
      return false;
    }
  });

  //table-responsive
  $(function () {
    $('table.responsive').ngResponsiveTables();
  });

  //Убрать plasholder при клике
  $('input,textarea').focus(function () {
    $(this).data('placeholder', $(this).attr('placeholder'));
    $(this).attr('placeholder', '');
  });
  $('input,textarea').blur(function () {
    $(this).attr('placeholder', $(this).data('placeholder'));
  });

  //Проверка полей input с картинками
  $('.form-user input[name=paysystem]').on('keyup', function (e) {
    //console.log(e,this);
    if ($(this).val() == "") {
      $(this).removeClass('remove-img');
    } else {
      $(this).addClass('remove-img');
    }
  });
  $('.form-user input').keyup();

  //select
  $('select').each(function () {
    $(this).siblings('span').text($(this).children('option:selected').text());
  });
  $('select').change(function () {
    $(this).siblings('span').text($(this).children('option:selected').text());
  });

  $('.select-main select').focus(function () {
    $(this).parent().addClass('active');
  });

  $('.select-main select').blur(function () {
    $(this).parent().removeClass('active');
  });

  //табы
  $('ul.tabs__caption').on('click', 'li:not(.active)', function () {
    $(this).addClass('active').siblings().removeClass('active').closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
  });

  //accordion
  (function ($) {
    $('.accordion > li:eq(0) .accordion-title').addClass('active').next().slideDown().parent().addClass('active');

    $('.accordion .accordion-title').click(function (j) {
      var dropDown = $(this).closest('li').find('.question-block');

      $(this).closest('.accordion').find('.question-block').not(dropDown).slideUp();

      if ($(this).hasClass('active')) {
        $(this).removeClass('active').parent().removeClass('active');
      } else {
        $(this).closest('.accordion').find('.accordion-title.active').removeClass('active').parent().removeClass('active');
        $(this).addClass('active').parent().addClass('active');
      }

      dropDown.stop(false, true).slideToggle();

      j.preventDefault();
    });
  })(jQuery);

  var $graph = $('.box-graph');
  $graph.waypoint(function () {
    $('.graph-scale').addClass('scale-animate');
    $('.graph-lines').addClass('lines-animate');
    $('.graph-orange').addClass('graph-orange-animate');
    $('.graph-white').addClass('graph-white-animate');
  }, { offset: '70%'
  });

  var wow = new WOW({
    boxClass: 'wow', // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset: 100, // distance to the element when triggering the animation (default is 0)
    mobile: false, // trigger animations on mobile devices (default is true)
    live: true, // act on asynchronously loaded content (default is true)
    callback: function callback(box) {
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
    },
    scrollContainer: null // optional scroll container selector, otherwise use window
  });
  wow.init();

  $('.section-beside').matchHeight({
    byRow: true,
    property: 'height',
    target: null,
    remove: false
  });

  $('.document-item').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    mainClass: 'mfp-img-mobile',
    image: {
      verticalFit: true
    }
  });

  $('.video').magnificPopup({
    disableOn: 300,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false
  });

  var clip1 = new Clipboard('#banner1');
  var clip2 = new Clipboard('#banner2');
  var clip3 = new Clipboard('#banner3');
  var clip4 = new Clipboard('#banner4');
  var clip5 = new Clipboard('#banner5');
  //clipboard
  function bannerLink(id) {
    id.on('success', function (e) {
      swal({
        title: "Link copied",
        text: "You can paste text that has been copied by pressing Ctrl + V. The text that was copied last will be pasted.",
        type: "success",
        showCancelButton: false,
        confirmButtonClass: "btn-success",
        confirmButtonText: "OK!",
        closeOnConfirm: false,
        closeOnCancel: false
      });
    });
  }

  bannerLink(clip1);
  bannerLink(clip2);
  bannerLink(clip3);
  bannerLink(clip4);
  bannerLink(clip5);

  var affil1 = new Clipboard('#affiliater1');

  function affiliatelink(id) {
    id.on('success', function (e) {
      swal({
        title: "Your referral link copied!",
        text: "You can paste text that has been copied by pressing Ctrl + V. The text that was copied last will be pasted.",
        type: "success",
        showCancelButton: false,
        confirmButtonClass: "btn-success",
        confirmButtonText: "OK!",
        closeOnConfirm: false,
        closeOnCancel: false
      });
    });
  }

  affiliatelink(affil1);
});



function updateClock() {
  var dt = new Date();
  var dtn = new Date();
  dtn.setTime(dt.getTime());
  var hours = dtn.getHours();
  var minutes = dtn.getMinutes();
  var seconds = dtn.getSeconds();

  if (hours <= 9) hours = "0" + hours;
  if (minutes <= 9) minutes = "0" + minutes;
  if (seconds <= 9) seconds = "0" + seconds;

  var time = hours + ":" + minutes + ":" + seconds;
  var time2 = hours + ":" + minutes;

  $(".clock-box span").html(time);
  $(".calendar-header__clock span").html(time2);
}


$(document).ready(function () {
  setInterval('updateClock()', 1000);
});

function date() {
  var d = new Date();
  var dtn = new Date();
  dtn.setTime(d.getTime());
  var month_num = dtn.getMonth();
  var day = dtn.getDate();
  //var dayWeek_num = dtn.getDay();

  //var dayWeek = new Array("Воскресенье", "Понедельник", "Вторник",
  // "Среда", "Четверг", "Пятница", "Суббота");

  //var dayWeekEn = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");

  var month = new Array("января", "февраля", "марта", "апреля", "мая", "июня", "июля", "августа", "сентября", "октября", "ноября", "декабря");

  var monthEn = new Array("January", "February", "March", "April", "May", "June", "Jule", "August", "September", "October", "Navember", "December");

  if (day <= 9) day = "0" + day;

  //date_time = dayWeek[dayWeek_num] + " " + day + " " + month[month_num] + " " + d.getFullYear();
  date_time = day + " " + month[month_num] + " " + "<span>" + d.getFullYear() + "</span>";

  $(".days-box span").html(date_time);
}

$(document).ready(function () {
  setInterval('date()', 1000);
});
