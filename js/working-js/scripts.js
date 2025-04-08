var app = {};

app.init = function () {
  app.tour();
  app.video();
  app.videopreview();
  app.hamburger();
  app.slider();
  app.galleryModal();
  app.dropdown();
  app.lyrics();
  app.accessibleNavDropdown();
};

app.tour = function () {
  const tourContainer = $("#tourDates");

  // ATTN: PATH TO PRODUCTION API NEEDS TO BE EDITED HERE
  $.ajax({
    type: "GET",
    url: "https://tour.bonnieraitt.com/api/liveevents/bonnieraitt",
    success: function (result) {
      parseData(result);
    },
  });

  function parseData(responseData) {
    const events = responseData;
    let items = "";

    if (events.length === 0) $("#noDates").css("display", "block");

    for (let i = 0; i < 4; i++) {
      let event = events[i].LiveEvent;

      // Get the Date and put it in a <div>
      let date = formatDate(
        new Date(event.EventDate.replace(/-/g, "/").replace(/T.+/, ""))
      );
      let dateWrap = $("<div>");
      dateWrap.addClass("date-wrapper");
      dateWrap.append(date);

      // Get the Venue and Location Details and put it in a <div>
      let venue = event.Venue;
      let venueLink = $("<p>");
      // venueLink.attr("href", event.VenueUrl);
      // venueLink.attr("target", "_blank");
      // venueLink.addClass("venue-link");
      venueLink.append(venue);
      //city
      let city = event.City;
      let region = event.Region;
      let country = event.Country;
      let note = event.EventListNote;
      let cityParagraph = $('<p class="city">');
      cityParagraph.append(city, `, `);
      if (region) cityParagraph.append(region, `, `);
      if (event.Country === "United States") {
        cityParagraph.append("US");
        }
        else {
          cityParagraph.append(country);
        }
      cityParagraph.append("<br>", note);
      //wrap
      let locationWrap = $("<div>");
      locationWrap.addClass("venue-city-wrapper");
      locationWrap.append(venueLink, cityParagraph);
      
      // Get the Ticket Details and put it in a link
      let ticketText;
      let ticketEvent;

      if (event.ExternalTicketUrl)
        (ticketText = "Buy Tickets"), (ticketEvent = 'https://tour.bonnieraitt.com/');

      let ticketLink = $("<a>");
      ticketLink.addClass("button-style-1");
      ticketLink.attr("href", ticketEvent);
      ticketLink.attr("target", "_blank");
      ticketLink.append(ticketText);

      // if ticket purchase button is included in this tour widget, include ticketWrap in listItem.append below
      let ticketWrap = $("<div>");
      ticketWrap.addClass("ticket-wrapper");
      if (event.ExternalTicketUrl) ticketWrap.append(ticketLink);

      //Get Facebook RSVP and put it in a link
      let fbText;
      let fbEvent;
      if (event.FacebookEventId)
        (fbText =
          '<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-square" class="svg-inline--fa fa-facebook-square fa-w-14" role="img" aria-label="Facebook" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"></path></svg> RSVP'),
          (fbEvent =
            "https://www.facebook.com/events/" + event.FacebookEventId);
      let fbLink = $("<a>");
      fbLink.addClass("button-style-1");
      fbLink.attr("href", fbEvent);
      fbLink.attr("target", "_blank");
      fbLink.append(fbText);

      // if facebook is included in this tour widget, include fbWrap in listItem.append below
      let fbWrap = $("<div>");
      fbWrap.addClass("facebook-wrapper");
      if (event.FacebookEventId) fbWrap.append(fbLink);

      let listItem = $("<li>");
      listItem.addClass("tour-date");
      //HERE is where all the possible columns get added to the li
      listItem.append(dateWrap, locationWrap, ticketWrap, fbWrap);

      let listItemHtml = listItem[0].outerHTML;
      items += listItemHtml;
    }
    addToPage(items);
  }

  function addToPage(items) {
    tourContainer.append(items);
  }

  function formatDate(date) {
    const monthNames = [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December",
    ];

    let day = date.getDate();
    let dayString = ("0" + day).slice(-2);
    let monthIndex = date.getMonth();
    let year = date.getFullYear();

    return (
      '<span class="month">' +
      monthNames[monthIndex] +
      " </span>" +
      '<span class="day">' +
      dayString +
      ", </span>" +
      '<span class="year">' +
      year +
      "</span>"
    );
  }
};

//Youtube Video Embed
app.video = function () {
  var div,
    n,
    v = document.getElementsByClassName("youtube-player-single");
  for (n = 0; n < v.length; n++) {
    div = document.createElement("button");
    div.setAttribute("data-id", v[n].dataset.id);
    div.setAttribute("data-title", v[n].dataset.title);
    div.setAttribute("title", v[n].dataset.title);
    div.setAttribute("class", "video-player-button");
    div.innerHTML = videoThumb(v[n].dataset.id);
    div.onclick = videoIframe;
    v[n].appendChild(div);
  }

  function videoThumb(id) {
    let imgAlt = v[n].dataset.title;
    var thumb = `<img src="https://i.ytimg.com/vi/ID/hqdefault.jpg" alt="${imgAlt}">`,
      play = '<div class="play"></div>';
    return thumb.replace("ID", id) + play;
  }

  function videoIframe() {
    var iframe = document.createElement("iframe");
    var embed = "https://www.youtube.com/embed/ID?autoplay=1";
    iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
    iframe.setAttribute("title", this.dataset.title);
    iframe.setAttribute("frameborder", "0");
    iframe.setAttribute("allowfullscreen", "1");
    this.parentNode.replaceChild(iframe, this);
  }
};

// variation of video function for landing pages, does not play video inline
app.videopreview = function () {
  var div,
    n,
    v = document.getElementsByClassName("youtube-player-preview");
  for (n = 0; n < v.length; n++) {
    div = document.createElement("div");
    div.setAttribute("data-id", v[n].dataset.id);
    div.setAttribute("data-title", v[n].dataset.title);
    div.innerHTML = videoThumb(v[n].dataset.id);
    v[n].appendChild(div);
  }

  function videoThumb(id) {
    let imgAlt = v[n].dataset.title;
    var thumb = `<img src="https://i.ytimg.com/vi/ID/hqdefault.jpg" alt="${imgAlt}">`;
    return thumb.replace("ID", id);
  }
};

//Mobile Hamburger Menu
app.hamburger = function () {
  $(".hamburger").on("click", function () {
    let isNavOpen = $(".body-with-open-nav");

    if (isNavOpen.length > 0) {
      $(".header-mobile-wrapper").attr("aria-hidden", "true");
    } else {
      $(".header-mobile-wrapper").attr("aria-hidden", "false");
    }
    $(".hamburger").toggleClass("is-active");
    $("body").toggleClass("body-with-open-nav");
  });

  // Tabbing through last menu item closes the modal
  //
  //ATTN: IF THE HEADER CONTENT HAS BEEN CHANGED FROM STARTER THEME DEFAULT, CORRECT HTML SELECTOR AND BROWSER WIDTH AT WHICH HEADER SWITCHES TO MOBILE NEEDS TO BE EDITED HERE
  //
  // direct child selector is included to account for sub menus
  $(".header-primary-nav > li:last-child a").focusout(function () {
    let width = $(window).width();
    if (width < 993) {
      $(".header-mobile-wrapper").attr("aria-expanded", "false");
      $("body").removeClass("body-with-open-nav");
      $(".hamburger").toggleClass("is-active");
      $(".hamburger").focus();
    }
  });

  // Pressing on the escape key closes the mobile menu
  $(document).keyup(function (e) {
    if (e.key === "Escape") {
      if ($("body").hasClass("body-with-open-nav")) {
        $(".header-mobile-wrapper").attr("aria-expanded", "false");
        $("body").removeClass("body-with-open-nav");
        $(".hamburger").toggleClass("is-active");
        $(".hamburger").focus();
      }
    }
  });
};

// default slider with auto advance
app.slider = function () {
  if ($(".slider").length) {
    var slideIndex = 0;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides((slideIndex += n));
    }

    function autoAdvance() {
      plusSlides(1);
    }

    autoAdvance();

    var timerId = setInterval(autoAdvance, 9000);

    $(".slider-prev").click(function () {
      plusSlides(-1);
      clearInterval(timerId);
    });
    $(".slider-next").click(function () {
      plusSlides(1);
      clearInterval(timerId);
    });
    $(".pause-slideshow").on("click", function () {
      clearInterval(timerId);
      $(this).css("display", "none");
      $(".play-slideshow").css("display", "flex");
    });
    $(".play-slideshow").on("click", function () {
      plusSlides(1);
      timerId = setInterval(autoAdvance, 9000);
      $(this).css("display", "none");
      $(".pause-slideshow").css("display", "flex");
    });

    function showSlides(n) {
      var i;
      var x = document.getElementsByClassName("hero-slides");
      if (n > x.length) {
        slideIndex = 1;
      }
      if (n < 1) {
        slideIndex = x.length;
      }
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      x[slideIndex - 1].style.display = "block";
    }

    //If only one slide exists, don't show the prev + next + pause buttons
    const slides = document.querySelectorAll(".hero-slides");
    if (slides.length < 2) {
      $(".slider-button").css("display", "none");
    }
  }
};

//slider and modal as used on a single gallery page. Does not autoadvance.
app.galleryModal = function () {
  const imageModal = document.querySelector(".gallery-modal");
  const closeButton = document.querySelector(".gallery-modal-close");

  let previousActiveElement;

  if (imageModal) {
    $(".preview-link").focus(function () {
      if ($(".gallery-modal").hasClass("modal-showing")) {
        closeImageModal();
      }
    });

    let slideIndex = null;

    $(".preview-link").on("click", function () {
      slideIndex = $(this).data("index");
      showSlides((slideIndex += 1));
      previousActiveElement = document.activeElement;
      imageModal.classList.add("modal-showing");
      $("body").addClass("body-with-open-modal");
      $(imageModal).attr("aria-hidden", "false");
      closeButton.focus();
      return previousActiveElement;
    });

    function plusSlides(n) {
      showSlides((slideIndex += n));
    }

    $(".slider-prev").click(function () {
      plusSlides(-1);
    });
    $(".slider-next").click(function () {
      plusSlides(1);
    });

    function showSlides(n) {
      let i;
      let x = document.getElementsByClassName("one-modal-img");
      if (n > x.length) {
        slideIndex = 1;
      }
      if (n < 1) {
        slideIndex = x.length;
      }
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      x[slideIndex - 1].style.display = "block";
    }

    closeButton.addEventListener("click", closeImageModal);

    //ESCAPE BUTTON CLOSES MODAL
    $(document).keydown(function (event) {
      if (event.keyCode == 27) {
        closeImageModal();
      }
    });

    function closeImageModal() {
      imageModal.classList.remove("modal-showing");
      $("body").removeClass("body-with-open-modal");
      $(imageModal).attr("aria-hidden", "true");
      previousActiveElement.focus();
    }
  }
};

app.dropdown = function () {
  //dropdown general functionality
  $(".dropdown").click(function () {
    if ($(this).hasClass("button-with-open-content")) {
      $(this).next(".dropdown-content").removeClass("dropdown-is-open");
      $(this).attr("aria-expanded", "false");
      $(this).removeClass("button-with-open-content");
    } else {
      $(this).next(".dropdown-content").addClass("dropdown-is-open");
      $(this).attr("aria-expanded", "true");
      $(this).addClass("button-with-open-content");
    }
  });
};

app.lyrics = function() {

  $(".dropdownContent").hide();
  $(".dropdown").click(function () {
    $(this).siblings(".dropdownContent").slideToggle();
    $(this).find(".caret").toggleClass("fa-caret-up fa-caret-down");
  });
  
  $(".lyrics-header").on("click", function () {
    var expanded_setting = $(this).attr("aria-expanded");
    if (expanded_setting == "false") {
      $(this).attr("aria-expanded", "true");
    } else {
      $(this).attr("aria-expanded", "false");
    }
  });
}

app.accessibleNavDropdown = function () {
  $(".menu-item-has-children>a")
    .attr("aria-haspopup", "true")
    .attr("aria-expanded", "false");

  $(".menu-item-has-children").on("mouseenter focusin", function () {
    $(".menu-item-has-children>a").attr("aria-expanded", "true");
  });

  $(".menu-item-has-children").on("mouseleave focusout", function () {
    $(".menu-item-has-children>a").attr("aria-expanded", "false");
  });
};


$(document).ready(function () {
  //call all the app functions
  app.init();
  if (OCC.Membership.IsLoggedIn()) {
    toggleMembershipVisibility(true, OCC.Membership.UserName());
} else {
    toggleMembershipVisibility(false);
}
});
