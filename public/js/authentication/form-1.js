/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/authentication/form-1.js":
/*!***********************************************!*\
  !*** ./resources/js/authentication/form-1.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("var togglePassword = document.getElementById(\"toggle-password\");\n\nif (togglePassword) {\n  togglePassword.addEventListener('click', function () {\n    var x = document.getElementById(\"password\");\n\n    if (x.type === \"password\") {\n      x.type = \"text\";\n    } else {\n      x.type = \"password\";\n    }\n  });\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvYXV0aGVudGljYXRpb24vZm9ybS0xLmpzPzdiNWIiXSwibmFtZXMiOlsidG9nZ2xlUGFzc3dvcmQiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwiYWRkRXZlbnRMaXN0ZW5lciIsIngiLCJ0eXBlIl0sIm1hcHBpbmdzIjoiQUFBQSxJQUFJQSxjQUFjLEdBQUdDLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixpQkFBeEIsQ0FBckI7O0FBRUEsSUFBSUYsY0FBSixFQUFvQjtBQUNuQkEsZ0JBQWMsQ0FBQ0csZ0JBQWYsQ0FBZ0MsT0FBaEMsRUFBeUMsWUFBVztBQUNsRCxRQUFJQyxDQUFDLEdBQUdILFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixVQUF4QixDQUFSOztBQUNBLFFBQUlFLENBQUMsQ0FBQ0MsSUFBRixLQUFXLFVBQWYsRUFBMkI7QUFDekJELE9BQUMsQ0FBQ0MsSUFBRixHQUFTLE1BQVQ7QUFDRCxLQUZELE1BRU87QUFDTEQsT0FBQyxDQUFDQyxJQUFGLEdBQVMsVUFBVDtBQUNEO0FBQ0YsR0FQRDtBQVFBIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL2F1dGhlbnRpY2F0aW9uL2Zvcm0tMS5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbInZhciB0b2dnbGVQYXNzd29yZCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwidG9nZ2xlLXBhc3N3b3JkXCIpO1xyXG5cclxuaWYgKHRvZ2dsZVBhc3N3b3JkKSB7XHJcblx0dG9nZ2xlUGFzc3dvcmQuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbigpIHtcclxuXHQgIHZhciB4ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJwYXNzd29yZFwiKTtcclxuXHQgIGlmICh4LnR5cGUgPT09IFwicGFzc3dvcmRcIikge1xyXG5cdCAgICB4LnR5cGUgPSBcInRleHRcIjtcclxuXHQgIH0gZWxzZSB7XHJcblx0ICAgIHgudHlwZSA9IFwicGFzc3dvcmRcIjtcclxuXHQgIH1cclxuXHR9KTtcclxufVxyXG4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/authentication/form-1.js\n");

/***/ }),

/***/ 1:
/*!*****************************************************!*\
  !*** multi ./resources/js/authentication/form-1.js ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! D:\laragon\www\cork-admin\resources\js\authentication\form-1.js */"./resources/js/authentication/form-1.js");


/***/ })

/******/ });