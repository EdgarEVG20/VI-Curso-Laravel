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

/***/ "./resources/js/students.js":
/*!**********************************!*\
  !*** ./resources/js/students.js ***!
  \**********************************/
/***/ (() => {

eval("$(document).ready(function () {\n  var table = $('#tableStudents').DataTable({\n    processing: true,\n\n    /* Muestra mensaje */\n    serverSide: true,\n\n    /* Carga los datos todos juntos, sin paginado, cuando se tiene en \"false\" */\n    \"initComplete\": function initComplete(settings, json) {\n      /* Una vez se termina de procesar */\n    },\n    \"drawCallback\": function drawCallback(settings) {\n      /* Se ejecuta en cada cambio de pagina */\n    },\n    \"createdRow\": function createdRow(row, data, dataIndex) {\n      /* Mientras se procesan los datos */\n    },\n    ajax: \"table_students\",\n    colums: [{\n      data: 'id',\n      name: 'id',\n      className: 'id_students'\n    }, {\n      data: 'name',\n      name: 'name',\n      className: 'name_students'\n    }, {\n      data: 'age',\n      name: 'age',\n      className: 'age_students'\n    }, {\n      data: 'num',\n      name: 'num',\n      className: 'num_students'\n    }, {\n      data: 'grade',\n      name: 'grade',\n      className: 'grade_students'\n    }, {\n      data: 'group',\n      name: 'group',\n      className: 'group_students'\n    }]\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvc3R1ZGVudHMuanMuanMiLCJuYW1lcyI6WyIkIiwiZG9jdW1lbnQiLCJyZWFkeSIsInRhYmxlIiwiRGF0YVRhYmxlIiwicHJvY2Vzc2luZyIsInNlcnZlclNpZGUiLCJzZXR0aW5ncyIsImpzb24iLCJyb3ciLCJkYXRhIiwiZGF0YUluZGV4IiwiYWpheCIsImNvbHVtcyIsIm5hbWUiLCJjbGFzc05hbWUiXSwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy9zdHVkZW50cy5qcz9lZGMwIl0sInNvdXJjZXNDb250ZW50IjpbIiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uICgpIHtcclxuICAgIHZhciB0YWJsZSA9ICQoJyN0YWJsZVN0dWRlbnRzJykuRGF0YVRhYmxlKHtcclxuICAgICAgICBwcm9jZXNzaW5nOiB0cnVlLCAvKiBNdWVzdHJhIG1lbnNhamUgKi9cclxuICAgICAgICBzZXJ2ZXJTaWRlOiB0cnVlLCAvKiBDYXJnYSBsb3MgZGF0b3MgdG9kb3MganVudG9zLCBzaW4gcGFnaW5hZG8sIGN1YW5kbyBzZSB0aWVuZSBlbiBcImZhbHNlXCIgKi9cclxuICAgICAgICBcImluaXRDb21wbGV0ZVwiOiBmdW5jdGlvbiAoc2V0dGluZ3MsIGpzb24pIHtcclxuICAgICAgICAgICAgLyogVW5hIHZleiBzZSB0ZXJtaW5hIGRlIHByb2Nlc2FyICovXHJcbiAgICAgICAgfSxcclxuICAgICAgICBcImRyYXdDYWxsYmFja1wiOiBmdW5jdGlvbiAoc2V0dGluZ3MpIHtcclxuICAgICAgICAgICAgLyogU2UgZWplY3V0YSBlbiBjYWRhIGNhbWJpbyBkZSBwYWdpbmEgKi9cclxuICAgICAgICB9LFxyXG4gICAgICAgIFwiY3JlYXRlZFJvd1wiOiBmdW5jdGlvbiAocm93LCBkYXRhLCBkYXRhSW5kZXgpIHtcclxuICAgICAgICAgICAgLyogTWllbnRyYXMgc2UgcHJvY2VzYW4gbG9zIGRhdG9zICovXHJcbiAgICAgICAgfSxcclxuICAgICAgICBhamF4OiBcInRhYmxlX3N0dWRlbnRzXCIsXHJcbiAgICAgICAgY29sdW1zOiBbXHJcbiAgICAgICAgICAgIHtkYXRhOiAnaWQnLCBuYW1lOiAnaWQnLCBjbGFzc05hbWU6ICdpZF9zdHVkZW50cyd9LFxyXG4gICAgICAgICAgICB7ZGF0YTogJ25hbWUnLCBuYW1lOiAnbmFtZScsIGNsYXNzTmFtZTogJ25hbWVfc3R1ZGVudHMnfSxcclxuICAgICAgICAgICAge2RhdGE6ICdhZ2UnLCBuYW1lOiAnYWdlJywgY2xhc3NOYW1lOiAnYWdlX3N0dWRlbnRzJ30sXHJcbiAgICAgICAgICAgIHtkYXRhOiAnbnVtJywgbmFtZTogJ251bScsIGNsYXNzTmFtZTogJ251bV9zdHVkZW50cyd9LFxyXG4gICAgICAgICAgICB7ZGF0YTogJ2dyYWRlJywgbmFtZTogJ2dyYWRlJywgY2xhc3NOYW1lOiAnZ3JhZGVfc3R1ZGVudHMnfSxcclxuICAgICAgICAgICAge2RhdGE6ICdncm91cCcsIG5hbWU6ICdncm91cCcsIGNsYXNzTmFtZTogJ2dyb3VwX3N0dWRlbnRzJ30sXHJcbiAgICAgICAgXVxyXG4gICAgfSk7XHJcbn0pO1xyXG4iXSwibWFwcGluZ3MiOiJBQUFBQSxDQUFDLENBQUNDLFFBQUQsQ0FBRCxDQUFZQyxLQUFaLENBQWtCLFlBQVk7RUFDMUIsSUFBSUMsS0FBSyxHQUFHSCxDQUFDLENBQUMsZ0JBQUQsQ0FBRCxDQUFvQkksU0FBcEIsQ0FBOEI7SUFDdENDLFVBQVUsRUFBRSxJQUQwQjs7SUFDcEI7SUFDbEJDLFVBQVUsRUFBRSxJQUYwQjs7SUFFcEI7SUFDbEIsZ0JBQWdCLHNCQUFVQyxRQUFWLEVBQW9CQyxJQUFwQixFQUEwQjtNQUN0QztJQUNILENBTHFDO0lBTXRDLGdCQUFnQixzQkFBVUQsUUFBVixFQUFvQjtNQUNoQztJQUNILENBUnFDO0lBU3RDLGNBQWMsb0JBQVVFLEdBQVYsRUFBZUMsSUFBZixFQUFxQkMsU0FBckIsRUFBZ0M7TUFDMUM7SUFDSCxDQVhxQztJQVl0Q0MsSUFBSSxFQUFFLGdCQVpnQztJQWF0Q0MsTUFBTSxFQUFFLENBQ0o7TUFBQ0gsSUFBSSxFQUFFLElBQVA7TUFBYUksSUFBSSxFQUFFLElBQW5CO01BQXlCQyxTQUFTLEVBQUU7SUFBcEMsQ0FESSxFQUVKO01BQUNMLElBQUksRUFBRSxNQUFQO01BQWVJLElBQUksRUFBRSxNQUFyQjtNQUE2QkMsU0FBUyxFQUFFO0lBQXhDLENBRkksRUFHSjtNQUFDTCxJQUFJLEVBQUUsS0FBUDtNQUFjSSxJQUFJLEVBQUUsS0FBcEI7TUFBMkJDLFNBQVMsRUFBRTtJQUF0QyxDQUhJLEVBSUo7TUFBQ0wsSUFBSSxFQUFFLEtBQVA7TUFBY0ksSUFBSSxFQUFFLEtBQXBCO01BQTJCQyxTQUFTLEVBQUU7SUFBdEMsQ0FKSSxFQUtKO01BQUNMLElBQUksRUFBRSxPQUFQO01BQWdCSSxJQUFJLEVBQUUsT0FBdEI7TUFBK0JDLFNBQVMsRUFBRTtJQUExQyxDQUxJLEVBTUo7TUFBQ0wsSUFBSSxFQUFFLE9BQVA7TUFBZ0JJLElBQUksRUFBRSxPQUF0QjtNQUErQkMsU0FBUyxFQUFFO0lBQTFDLENBTkk7RUFiOEIsQ0FBOUIsQ0FBWjtBQXNCSCxDQXZCRCJ9\n//# sourceURL=webpack-internal:///./resources/js/students.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/students.js"]();
/******/ 	
/******/ })()
;