/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/script.js":
/*!********************************!*\
  !*** ./resources/js/script.js ***!
  \********************************/
/***/ (() => {

eval("// Scroll-fixed-top\ndocument.addEventListener(\"DOMContentLoaded\", function () {\n  window.addEventListener('scroll', function () {\n    if (window.scrollY > 50) {\n      document.getElementById('navbar_top').classList.add('fixed-top', 'container');\n      navbar_height = document.querySelector('.navbar').offsetHeight;\n      document.body.style.paddingTop = navbar_height + 'px';\n    } else {\n      document.getElementById('navbar_top').classList.remove('fixed-top', 'container');\n      document.body.style.paddingTop = '0';\n    }\n  });\n}); // img-width\n\njQuery(document).ready(function ($) {\n  $(\".owl-carousel\").each(function (index, el) {\n    var containerHeight = $(el).height();\n    $(el).find(\"img\").each(function (index, img) {\n      var w = $(img).prop('naturalWidth');\n      var h = $(img).prop('naturalHeight');\n      $(img).css({\n        'width': Math.round(containerHeight * w / h) + 'px',\n        'height': containerHeight + 'px'\n      });\n    }), $(el).owlCarousel({\n      autoWidth: true\n    });\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9sb2NhbGhvc3QvLi9yZXNvdXJjZXMvanMvc2NyaXB0LmpzP2M2M2IiXSwibmFtZXMiOlsiZG9jdW1lbnQiLCJhZGRFdmVudExpc3RlbmVyIiwid2luZG93Iiwic2Nyb2xsWSIsImdldEVsZW1lbnRCeUlkIiwiY2xhc3NMaXN0IiwiYWRkIiwibmF2YmFyX2hlaWdodCIsInF1ZXJ5U2VsZWN0b3IiLCJvZmZzZXRIZWlnaHQiLCJib2R5Iiwic3R5bGUiLCJwYWRkaW5nVG9wIiwicmVtb3ZlIiwialF1ZXJ5IiwicmVhZHkiLCIkIiwiZWFjaCIsImluZGV4IiwiZWwiLCJjb250YWluZXJIZWlnaHQiLCJoZWlnaHQiLCJmaW5kIiwiaW1nIiwidyIsInByb3AiLCJoIiwiY3NzIiwiTWF0aCIsInJvdW5kIiwib3dsQ2Fyb3VzZWwiLCJhdXRvV2lkdGgiXSwibWFwcGluZ3MiOiJBQUFJO0FBQ0FBLFFBQVEsQ0FBQ0MsZ0JBQVQsQ0FBMEIsa0JBQTFCLEVBQThDLFlBQVc7QUFDckRDLEVBQUFBLE1BQU0sQ0FBQ0QsZ0JBQVAsQ0FBd0IsUUFBeEIsRUFBa0MsWUFBVztBQUN6QyxRQUFJQyxNQUFNLENBQUNDLE9BQVAsR0FBaUIsRUFBckIsRUFBeUI7QUFDckJILE1BQUFBLFFBQVEsQ0FBQ0ksY0FBVCxDQUF3QixZQUF4QixFQUFzQ0MsU0FBdEMsQ0FBZ0RDLEdBQWhELENBQW9ELFdBQXBELEVBQWlFLFdBQWpFO0FBQ0FDLE1BQUFBLGFBQWEsR0FBR1AsUUFBUSxDQUFDUSxhQUFULENBQXVCLFNBQXZCLEVBQWtDQyxZQUFsRDtBQUNBVCxNQUFBQSxRQUFRLENBQUNVLElBQVQsQ0FBY0MsS0FBZCxDQUFvQkMsVUFBcEIsR0FBaUNMLGFBQWEsR0FBRyxJQUFqRDtBQUNILEtBSkQsTUFJTztBQUNIUCxNQUFBQSxRQUFRLENBQUNJLGNBQVQsQ0FBd0IsWUFBeEIsRUFBc0NDLFNBQXRDLENBQWdEUSxNQUFoRCxDQUF1RCxXQUF2RCxFQUFvRSxXQUFwRTtBQUNBYixNQUFBQSxRQUFRLENBQUNVLElBQVQsQ0FBY0MsS0FBZCxDQUFvQkMsVUFBcEIsR0FBaUMsR0FBakM7QUFDSDtBQUNKLEdBVEQ7QUFVSCxDQVhELEUsQ0FZQTs7QUFDQUUsTUFBTSxDQUFDZCxRQUFELENBQU4sQ0FBaUJlLEtBQWpCLENBQXVCLFVBQVNDLENBQVQsRUFBWTtBQUMvQkEsRUFBQUEsQ0FBQyxDQUFDLGVBQUQsQ0FBRCxDQUFtQkMsSUFBbkIsQ0FBd0IsVUFBU0MsS0FBVCxFQUFnQkMsRUFBaEIsRUFBb0I7QUFDeEMsUUFBSUMsZUFBZSxHQUFHSixDQUFDLENBQUNHLEVBQUQsQ0FBRCxDQUFNRSxNQUFOLEVBQXRCO0FBQ0FMLElBQUFBLENBQUMsQ0FBQ0csRUFBRCxDQUFELENBQU1HLElBQU4sQ0FBVyxLQUFYLEVBQWtCTCxJQUFsQixDQUF1QixVQUFTQyxLQUFULEVBQWdCSyxHQUFoQixFQUFxQjtBQUNwQyxVQUFJQyxDQUFDLEdBQUdSLENBQUMsQ0FBQ08sR0FBRCxDQUFELENBQU9FLElBQVAsQ0FBWSxjQUFaLENBQVI7QUFDQSxVQUFJQyxDQUFDLEdBQUdWLENBQUMsQ0FBQ08sR0FBRCxDQUFELENBQU9FLElBQVAsQ0FBWSxlQUFaLENBQVI7QUFDQVQsTUFBQUEsQ0FBQyxDQUFDTyxHQUFELENBQUQsQ0FBT0ksR0FBUCxDQUFXO0FBQ1AsaUJBQVNDLElBQUksQ0FBQ0MsS0FBTCxDQUFXVCxlQUFlLEdBQUdJLENBQWxCLEdBQXNCRSxDQUFqQyxJQUFzQyxJQUR4QztBQUVQLGtCQUFVTixlQUFlLEdBQUc7QUFGckIsT0FBWDtBQUlILEtBUEwsR0FRSUosQ0FBQyxDQUFDRyxFQUFELENBQUQsQ0FBTVcsV0FBTixDQUFrQjtBQUNkQyxNQUFBQSxTQUFTLEVBQUU7QUFERyxLQUFsQixDQVJKO0FBV0gsR0FiRDtBQWNILENBZkQiLCJzb3VyY2VzQ29udGVudCI6WyIgICAgLy8gU2Nyb2xsLWZpeGVkLXRvcFxuICAgIGRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoXCJET01Db250ZW50TG9hZGVkXCIsIGZ1bmN0aW9uKCkge1xuICAgICAgICB3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcignc2Nyb2xsJywgZnVuY3Rpb24oKSB7XG4gICAgICAgICAgICBpZiAod2luZG93LnNjcm9sbFkgPiA1MCkge1xuICAgICAgICAgICAgICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCduYXZiYXJfdG9wJykuY2xhc3NMaXN0LmFkZCgnZml4ZWQtdG9wJywgJ2NvbnRhaW5lcicpO1xuICAgICAgICAgICAgICAgIG5hdmJhcl9oZWlnaHQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcubmF2YmFyJykub2Zmc2V0SGVpZ2h0O1xuICAgICAgICAgICAgICAgIGRvY3VtZW50LmJvZHkuc3R5bGUucGFkZGluZ1RvcCA9IG5hdmJhcl9oZWlnaHQgKyAncHgnO1xuICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbmF2YmFyX3RvcCcpLmNsYXNzTGlzdC5yZW1vdmUoJ2ZpeGVkLXRvcCcsICdjb250YWluZXInKTtcbiAgICAgICAgICAgICAgICBkb2N1bWVudC5ib2R5LnN0eWxlLnBhZGRpbmdUb3AgPSAnMCc7XG4gICAgICAgICAgICB9XG4gICAgICAgIH0pO1xuICAgIH0pO1xuICAgIC8vIGltZy13aWR0aFxuICAgIGpRdWVyeShkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oJCkge1xuICAgICAgICAkKFwiLm93bC1jYXJvdXNlbFwiKS5lYWNoKGZ1bmN0aW9uKGluZGV4LCBlbCkge1xuICAgICAgICAgICAgdmFyIGNvbnRhaW5lckhlaWdodCA9ICQoZWwpLmhlaWdodCgpO1xuICAgICAgICAgICAgJChlbCkuZmluZChcImltZ1wiKS5lYWNoKGZ1bmN0aW9uKGluZGV4LCBpbWcpIHtcbiAgICAgICAgICAgICAgICAgICAgdmFyIHcgPSAkKGltZykucHJvcCgnbmF0dXJhbFdpZHRoJyk7XG4gICAgICAgICAgICAgICAgICAgIHZhciBoID0gJChpbWcpLnByb3AoJ25hdHVyYWxIZWlnaHQnKTtcbiAgICAgICAgICAgICAgICAgICAgJChpbWcpLmNzcyh7XG4gICAgICAgICAgICAgICAgICAgICAgICAnd2lkdGgnOiBNYXRoLnJvdW5kKGNvbnRhaW5lckhlaWdodCAqIHcgLyBoKSArICdweCcsXG4gICAgICAgICAgICAgICAgICAgICAgICAnaGVpZ2h0JzogY29udGFpbmVySGVpZ2h0ICsgJ3B4J1xuICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICB9KSxcbiAgICAgICAgICAgICAgICAkKGVsKS5vd2xDYXJvdXNlbCh7XG4gICAgICAgICAgICAgICAgICAgIGF1dG9XaWR0aDogdHJ1ZSxcbiAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgfSk7XG4gICAgfSk7XG4iXSwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL3NjcmlwdC5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/script.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/script.js"]();
/******/ 	
/******/ })()
;