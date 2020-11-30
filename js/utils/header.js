export const headerExp = function testExports() {
  jQuery(document).ready(function ($) {
    // Burger menu toggle
    (function () {
      const $hamburger = $(".hamburger");
      $hamburger.on("click", function (e) {
        $hamburger.toggleClass("is-active");
        // $(".menu-top__nav").slideToggle("fast"); // Slide down
         $('.menu-top__nav').animate({width:'toggle'},350); // slide from sides, just change right: 0; or left: 0;.
        $(".header-nav__bg").toggle();
      });
      $(".header-nav__bg").on("click", function (e) {
        $hamburger.toggleClass("is-active");
        // $(".menu-top__nav").slideToggle("fast"); // Slide down
         $('.menu-top__nav').animate({width:'toggle'},350); // slide from sides, just change right: 0; or left: 0;.
        $(".header-nav__bg").toggle();
      });
    })();

    // Burger menu dropdown
    (function () {
      // This hides all the sub menus on page load
      $(".menu-top__nav ul.sub-menu, .menu-bottom ul.sub-menu").hide();
      // This makes sure that all the sub menus are open when applicable
      $(".menu-top__nav li.current-menu-item, .menu-bottom li.current-menu-item").children().show();
      // This keeps the nav open to the item that you are navigating to.
      // $('.menu-top__nav li.current-menu-item').parents().show();
      $(".menu-top__nav ul li a, .menu-bottom ul li a").click(function () {
        var checkElement = $(this).next();
        if (checkElement.is("ul") && checkElement.is(":visible")) {
          checkElement.slideUp("normal");
          return false;
        }
        if (checkElement.is("ul") && !checkElement.is(":visible")) {
          $(this).parent().siblings("li:has(ul)").find("ul").slideUp("normal");
          $(".menu-top__nav ul ul li ul:visible, .menu-bottom ul ul li ul:visible").slideUp("normal");
          checkElement.slideDown("normal");
          return false;
        }
      });
      $(".menu-top__nav ul ul li a, .menu-bottom ul ul li a").click(function () {
        var checkElement = $(this).next();
        if (checkElement.is("ul") && checkElement.is(":visible")) {
          checkElement.slideUp("normal");
          return false;
        }
        if (checkElement.is("ul") && !checkElement.is(":visible")) {
          $(".menu-top__nav ul ul, .menu-bottom ul ul").slideUp("normal");
          $(".menu-top__nav ul ul li ul:visible, .menu-bottom ul ul li ul:visible").slideUp("normal");
          checkElement.slideDown("normal");
          return false;
        }
      });
    })();
  });
};
