/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./app/assets/es6/pages/mail.js":
/*!**************************************!*\
  !*** ./app/assets/es6/pages/mail.js ***!
  \**************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\nclass AppMail {\r\n\r\n    static init() {\r\n        $('#mail-list .mail-list .list-info').on('click', (e) => {\r\n            $('#mail-list').addClass('d-none')\r\n            $('#mail-content').removeClass('d-none')\r\n        })\r\n\r\n        $('#back').on('click', (e) => {\r\n            $('#mail-content').addClass('d-none')\r\n            $('#mail-list').removeClass('d-none')\r\n        })\r\n\r\n        $('.mail-open-nav').on('click', (e) => {\r\n            $('#mail-nav').addClass('nav-open')\r\n        })\r\n\r\n        $('.mail-close-nav').on('click', (e) => {\r\n            $('#mail-nav').removeClass('nav-open')\r\n        })\r\n\r\n        $('.mail-open-compose').on('click', (e) => {\r\n            $('#mail-compose').removeClass('d-none')\r\n            $('#mail-content').addClass('d-none')\r\n            $('#mail-list').addClass('d-none')\r\n            $('#mail-nav').removeClass('nav-open')\r\n        })\r\n\r\n        $('.mail-close-compose').on('click', (e) => {\r\n            $('#mail-compose').addClass('d-none')\r\n            $('#mail-content').addClass('d-none')\r\n            $('#mail-list').removeClass('d-none')\r\n        })\r\n\r\n        $(\"#checkAll\").on('change',function(){\r\n            $('#mail-list input[type=\"checkbox\"]').prop('checked',$(this).is(\":checked\"));\r\n        }); \r\n\r\n        new Quill('#mail-compose-editor', {\r\n            theme: 'snow'\r\n        });\r\n    }\r\n}\r\n\r\n$(() => { AppMail.init(); });\r\n\r\n\n\n//# sourceURL=webpack://enlink/./app/assets/es6/pages/mail.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./app/assets/es6/pages/mail.js"](0, __webpack_exports__, __webpack_require__);
/******/ 	
/******/ })()
;