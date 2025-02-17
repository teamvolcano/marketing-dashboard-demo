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

/***/ "./app/assets/es6/constant/theme-constant.js":
/*!***************************************************!*\
  !*** ./app/assets/es6/constant/theme-constant.js ***!
  \***************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n\r\nconst ThemeConstant = {\r\n   \r\n    magenta: '#eb2f96',\r\n    magentaLight: 'rgba(235, 47, 150, 0.05)',\r\n    red: '#de4436',\r\n    redLight: 'rgba(222, 68, 54, 0.05)',\r\n    volcano: '#fa541c',\r\n    volcanoLight: 'rgba(250, 84, 28, 0.05)',\r\n    orange: '#fa8c16',\r\n    orangeLight: 'rgba(250, 140, 22, 0.1)',\r\n    gold: '#ffc107',\r\n    goldLight: 'rgba(255, 193, 7, 0.1)',\r\n    lime: '#a0d911',\r\n    limeLight: 'rgba(160, 217, 17, 0.1)',\r\n    green: '#52c41a',\r\n    greenLight: 'rgba(82, 196, 26, 0.1)',\r\n    cyan: \"#05c9a7\",\r\n    cyanLight: 'rgba(0, 201, 167, 0.1)',\r\n    blue: '#3f87f5',\r\n    blueLight: 'rgba(63, 135, 245, 0.15)',\r\n    geekBlue: '#2f54eb',\r\n    geekBlueLight: 'rgba(47, 84, 235, 0.1)',\r\n    purple: '#886cff',\r\n    purpleLight: 'rgba(136, 108, 255, 0.1)',\r\n    gray: '#53535f',\r\n    grayLight: '#77838f',\r\n    grayLighter: '#ededed',\r\n    grayLightest: '#f1f2f3',\r\n    border: '#edf2f9',\r\n    white: '#ffffff',\r\n    dark: '#2a2a2a',\r\n    transparent: 'rgba(255, 255, 255, 0)'\r\n}\r\n\r\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (ThemeConstant);\n\n//# sourceURL=webpack://enlink/./app/assets/es6/constant/theme-constant.js?");

/***/ }),

/***/ "./app/assets/es6/pages/dashboard-project.js":
/*!***************************************************!*\
  !*** ./app/assets/es6/pages/dashboard-project.js ***!
  \***************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _constant_theme_constant_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../constant/theme-constant.js */ \"./app/assets/es6/constant/theme-constant.js\");\n\r\n\r\nclass DashboardProject {\r\n\r\n    static init() {\r\n        \r\n        $('.datepicker-calendar').datepicker();\r\n        \r\n        const completionChart = document.getElementById(\"completion-chart\");\r\n        let gradient = completionChart.getContext('2d').createLinearGradient(0, 30, 10, 320);\r\n        gradient.addColorStop(0, _constant_theme_constant_js__WEBPACK_IMPORTED_MODULE_0__[\"default\"].blueLight);\r\n        gradient.addColorStop(1, _constant_theme_constant_js__WEBPACK_IMPORTED_MODULE_0__[\"default\"].transparent);\r\n        const lineCtx = completionChart.getContext('2d');\r\n        completionChart.height = 120;\r\n        const lineConfig = new Chart(lineCtx, {\r\n            type: 'line',\r\n            data: {\r\n            labels: [\"16th\", \"17th\", \"18th\", \"19th\", \"20th\", \"21th\", \"22th\", \"23th\", \"24th\", \"25th\", \"26th\"],\r\n            datasets: [{\r\n                    label: 'Series A',\r\n                    data: [30, 60, 40, 50, 40, 55, 85, 65, 75, 50, 70],\r\n                    backgroundColor: gradient,\r\n                    borderColor: _constant_theme_constant_js__WEBPACK_IMPORTED_MODULE_0__[\"default\"].blue,\r\n                    pointBackgroundColor: _constant_theme_constant_js__WEBPACK_IMPORTED_MODULE_0__[\"default\"].blue,\r\n                    pointBorderColor: _constant_theme_constant_js__WEBPACK_IMPORTED_MODULE_0__[\"default\"].white,\r\n                    pointHoverBackgroundColor: _constant_theme_constant_js__WEBPACK_IMPORTED_MODULE_0__[\"default\"].blueLight,\r\n                    pointHoverBorderColor: _constant_theme_constant_js__WEBPACK_IMPORTED_MODULE_0__[\"default\"].blueLight\r\n                }]\r\n            },\r\n            options: {\r\n                legend: {\r\n\t\t\t\t\tdisplay: false\r\n\t\t\t\t},\r\n                maintainAspectRatio: false,\r\n                responsive: true,\r\n                hover: {\r\n                    mode: 'nearest',\r\n                    intersect: true\r\n                },\r\n                tooltips: {\r\n                    mode: 'index'\r\n                },\r\n                elements: {\r\n                    line: {\r\n                        tension: 0,\r\n                        borderWidth: 2\r\n                    }\r\n                },\r\n                scales: {\r\n                    xAxes: [{ \r\n                        gridLines: [{\r\n                            display: false,\r\n                        }],\r\n                        ticks: {\r\n                            display: true,\r\n                            fontColor: _constant_theme_constant_js__WEBPACK_IMPORTED_MODULE_0__[\"default\"].grayLight,\r\n                            fontSize: 13,\r\n                            padding: 10\r\n                        }\r\n                    }],\r\n                    yAxes: [{\r\n                        gridLines: {\r\n                            drawBorder: false,\r\n                            drawTicks: false,\r\n                            borderDash: [3, 4],\r\n                            zeroLineWidth: 1,\r\n                            zeroLineBorderDash: [3, 4]  \r\n                        },\r\n                        ticks: {\r\n                            display: true,\r\n                            max: 100,                            \r\n                            stepSize: 20,\r\n                            fontColor: _constant_theme_constant_js__WEBPACK_IMPORTED_MODULE_0__[\"default\"].grayLight,\r\n                            fontSize: 13,\r\n                            padding: 10\r\n                        }  \r\n                    }],\r\n                }\r\n            }\r\n        });\r\n    }\r\n}\r\n\r\n$(() => { DashboardProject.init(); });\r\n\r\n\n\n//# sourceURL=webpack://enlink/./app/assets/es6/pages/dashboard-project.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
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
/******/ 	var __webpack_exports__ = __webpack_require__("./app/assets/es6/pages/dashboard-project.js");
/******/ 	
/******/ })()
;