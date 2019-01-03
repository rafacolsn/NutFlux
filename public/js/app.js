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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 13);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */,
/* 1 */
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/home/emilie/becode_projects/NutFlux/node_modules/vue-loader/lib/component-normalizer.js'");

/***/ }),
/* 2 */,
/* 3 */,
/* 4 */
/***/ (function(module, __webpack_exports__) {

"use strict";
throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/home/emilie/becode_projects/NutFlux/node_modules/popper.js/dist/esm/popper.js'");

/***/ }),
/* 5 */
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/home/emilie/becode_projects/NutFlux/node_modules/jquery/dist/jquery.js'");

/***/ }),
/* 6 */
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/home/emilie/becode_projects/NutFlux/node_modules/axios/index.js'");

/***/ }),
/* 7 */,
/* 8 */,
/* 9 */,
/* 10 */,
/* 11 */,
/* 12 */,
/* 13 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(14);
module.exports = __webpack_require__(70);


/***/ }),
/* 14 */
/***/ (function(module, exports, __webpack_require__) {


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

__webpack_require__(15);
var axios = __webpack_require__(6);

window.Vue = __webpack_require__(37);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
// Vue.component('example-component', require('./components/ExampleComponent.vue'));

/* Medias components */
Vue.component('users-show', __webpack_require__(78));
Vue.component('users-index', __webpack_require__(81));
Vue.component('users-edit', __webpack_require__(84));
Vue.component('users-create', __webpack_require__(87));

/* Actors components */
Vue.component('actors-show', __webpack_require__(40));
Vue.component('actors-index', __webpack_require__(43));
Vue.component('actors-edit', __webpack_require__(49));
Vue.component('actors-create', __webpack_require__(46));

/* Medias components */
Vue.component('medias-show', __webpack_require__(52));
Vue.component('medias-index', __webpack_require__(55));
Vue.component('medias-edit', __webpack_require__(58));
Vue.component('medias-create', __webpack_require__(61));

/* Choices components */
Vue.component('choices-index', __webpack_require__(90));

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

var app = new Vue({
  el: '#app'
});

/***/ }),
/* 15 */
/***/ (function(module, exports, __webpack_require__) {


window._ = __webpack_require__(16);

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
  window.Popper = __webpack_require__(4).default;
  window.$ = window.jQuery = __webpack_require__(5);

  __webpack_require__(18);
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = __webpack_require__(6);

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

var token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
  window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
  console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });

/***/ }),
/* 16 */
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/home/emilie/becode_projects/NutFlux/node_modules/lodash/lodash.js'");

/***/ }),
/* 17 */,
/* 18 */
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/home/emilie/becode_projects/NutFlux/node_modules/bootstrap/dist/js/bootstrap.js'");

/***/ }),
/* 19 */,
/* 20 */,
/* 21 */,
/* 22 */,
/* 23 */,
/* 24 */,
/* 25 */,
/* 26 */,
/* 27 */,
/* 28 */,
/* 29 */,
/* 30 */,
/* 31 */,
/* 32 */,
/* 33 */,
/* 34 */,
/* 35 */,
/* 36 */,
/* 37 */
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open '/home/emilie/becode_projects/NutFlux/node_modules/vue/dist/vue.common.js'");

/***/ }),
/* 38 */,
/* 39 */,
/* 40 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(41)
/* template */
var __vue_template__ = __webpack_require__(42)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/js/components/ActorsShow.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-87cc8734", Component.options)
  } else {
    hotAPI.reload("data-v-87cc8734", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 41 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['actor'],
    mounted: function mounted() {
        console.log('Component mounted.');
    }
});

/***/ }),
/* 42 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "container" }, [
    _c("h1", [
      _vm._v(_vm._s(_vm.actor.firstname) + " " + _vm._s(_vm.actor.lastname))
    ]),
    _vm._v(" "),
    _c("img", {
      attrs: {
        src: _vm.actor.picture,
        alt: _vm.actor.firstname + " " + _vm.actor.lastname
      }
    })
  ])
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-87cc8734", module.exports)
  }
}

/***/ }),
/* 43 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(44)
/* template */
var __vue_template__ = __webpack_require__(45)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/js/components/ActorsIndex.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-0b0ed739", Component.options)
  } else {
    hotAPI.reload("data-v-0b0ed739", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 44 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['actors', 'csrf'],
    methods: {
        destroy: function destroy(event) {
            axios.delete('/actors/' + actor.id).then(function (response) {
                // handle success
                console.log(response);
            }).catch(function (error) {
                // handle error
                console.log(error);
            });
        }
    }
});

/***/ }),
/* 45 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "container" }, [
    _c("h1", [_vm._v("Actors index")]),
    _vm._v(" "),
    _vm.actors
      ? _c(
          "ol",
          _vm._l(_vm.actors, function(actor) {
            return _c("li", [
              _c("p", [
                _vm._v(_vm._s(actor.firstname) + " " + _vm._s(actor.lastname))
              ]),
              _vm._v(" "),
              _c("img", {
                attrs: {
                  src: actor.picture,
                  alt: actor.firstname + " " + actor.lastname
                }
              }),
              _vm._v(" "),
              _c(
                "form",
                { attrs: { method: "post", action: "/actors/" + actor.id } },
                [
                  _c("input", {
                    attrs: { type: "hidden", name: "id" },
                    domProps: { value: actor.id }
                  }),
                  _vm._v(" "),
                  _c("input", {
                    attrs: { type: "hidden", name: "_method", value: "DELETE" }
                  }),
                  _vm._v(" "),
                  _c("input", {
                    attrs: { type: "hidden", name: "_token" },
                    domProps: { value: _vm.csrf }
                  }),
                  _vm._v(" "),
                  _c("button", { on: { click: _vm.destroy } }, [
                    _vm._v("Delete")
                  ])
                ]
              )
            ])
          }),
          0
        )
      : _vm._e()
  ])
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-0b0ed739", module.exports)
  }
}

/***/ }),
/* 46 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(47)
/* template */
var __vue_template__ = __webpack_require__(48)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/js/components/ActorsCreate.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-7e805aa5", Component.options)
  } else {
    hotAPI.reload("data-v-7e805aa5", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 47 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['csrf'],
    data: function data() {
        return {
            firstname: '',
            lastname: '',
            picture: ''
        };
    },

    methods: {
        create: function create(event) {
            axios.post('/actors').then(function (response) {
                // handle success
                console.log(response);
            }).catch(function (error) {
                // handle error
                console.log(error);
            });
        }
    }
});

/***/ }),
/* 48 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "container" }, [
    _c("h1", [_vm._v("Create an actor")]),
    _vm._v(" "),
    _c("form", { attrs: { method: "post", action: "/actors" } }, [
      _c("p", [
        _c("label", { attrs: { for: "firstname" } }, [_vm._v("Firstname :")]),
        _vm._v(" "),
        _c("input", {
          directives: [
            {
              name: "model",
              rawName: "v-model",
              value: _vm.firstname,
              expression: "firstname"
            }
          ],
          attrs: { type: "text", name: "firstname" },
          domProps: { value: _vm.firstname },
          on: {
            input: function($event) {
              if ($event.target.composing) {
                return
              }
              _vm.firstname = $event.target.value
            }
          }
        })
      ]),
      _vm._v(" "),
      _c("p", [
        _c("label", { attrs: { for: "lastname" } }, [_vm._v("Lastname :")]),
        _vm._v(" "),
        _c("input", {
          directives: [
            {
              name: "model",
              rawName: "v-model",
              value: _vm.lastname,
              expression: "lastname"
            }
          ],
          attrs: { type: "text", name: "lastname" },
          domProps: { value: _vm.lastname },
          on: {
            input: function($event) {
              if ($event.target.composing) {
                return
              }
              _vm.lastname = $event.target.value
            }
          }
        })
      ]),
      _vm._v(" "),
      _c("p", [
        _c("label", { attrs: { for: "picture" } }, [_vm._v("Picture :")]),
        _vm._v(" "),
        _c("input", {
          directives: [
            {
              name: "model",
              rawName: "v-model",
              value: _vm.picture,
              expression: "picture"
            }
          ],
          attrs: { type: "text", name: "picture" },
          domProps: { value: _vm.picture },
          on: {
            input: function($event) {
              if ($event.target.composing) {
                return
              }
              _vm.picture = $event.target.value
            }
          }
        })
      ]),
      _vm._v(" "),
      _c("input", {
        attrs: { type: "hidden", name: "_token" },
        domProps: { value: _vm.csrf }
      }),
      _vm._v(" "),
      _c("button", { on: { click: _vm.create } }, [_vm._v("Create")])
    ])
  ])
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-7e805aa5", module.exports)
  }
}

/***/ }),
/* 49 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(50)
/* template */
var __vue_template__ = __webpack_require__(51)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/js/components/ActorsEdit.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-2fc900f3", Component.options)
  } else {
    hotAPI.reload("data-v-2fc900f3", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 50 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['actor', 'csrf'],
    data: function data() {
        return {
            actorId: actor.id,
            actorFirstname: actor.firstname,
            actorLastname: actor.lastname,
            actorPicture: actor.picture
        };
    },

    methods: {
        send: function send(event) {
            axios.patch('/actors/' + actor.id).then(function (response) {
                // handle success
                console.log(response);
            }).catch(function (error) {
                // handle error
                console.log(error);
            });
        }
    }
});

/***/ }),
/* 51 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "container" }, [
    _c("h1", [_vm._v("Edit this actor")]),
    _vm._v(" "),
    _c(
      "form",
      { attrs: { method: "post", action: "/actors/" + _vm.actor.id } },
      [
        _c("p", [
          _c("label", { attrs: { for: "actorFirstname" } }, [
            _vm._v("Firstname")
          ]),
          _vm._v(" "),
          _c("input", {
            attrs: { type: "text", name: "actorFirstname" },
            domProps: { value: _vm.actor.firstname }
          })
        ]),
        _vm._v(" "),
        _c("p", [
          _c("label", { attrs: { for: "actorLastname" } }, [
            _vm._v("Lastname")
          ]),
          _vm._v(" "),
          _c("input", {
            attrs: { type: "text", name: "actorLastname" },
            domProps: { value: _vm.actor.lastname }
          })
        ]),
        _vm._v(" "),
        _c("p", [
          _c("label", { attrs: { for: "actorPicture" } }, [_vm._v("Picture")]),
          _vm._v(" "),
          _c("input", {
            attrs: { type: "text", name: "actorPicture" },
            domProps: { value: _vm.actor.picture }
          })
        ]),
        _vm._v(" "),
        _c("input", {
          attrs: { type: "hidden", name: "_method", value: "PATCH" }
        }),
        _vm._v(" "),
        _c("input", {
          attrs: { type: "hidden", name: "_token" },
          domProps: { value: _vm.csrf }
        }),
        _vm._v(" "),
        _c("button", { on: { click: _vm.send } }, [_vm._v("Edit")])
      ]
    )
  ])
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-2fc900f3", module.exports)
  }
}

/***/ }),
/* 52 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(53)
/* template */
var __vue_template__ = __webpack_require__(54)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/js/components/MediasShow.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-03a39952", Component.options)
  } else {
    hotAPI.reload("data-v-03a39952", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 53 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['media']
});

/***/ }),
/* 54 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "container" }, [
    _c("h1", [_vm._v(_vm._s(_vm.media.title))]),
    _vm._v(" "),
    _c("p", { attrs: { if: _vm.media.is_serie } }, [
      _vm._v("This media is part of a TV show")
    ]),
    _vm._v(" "),
    _c("img", { attrs: { src: _vm.media.poster, alt: _vm.media.title } }),
    _vm._v(" "),
    _c("ul", [
      _c("li", [_vm._v("Year: " + _vm._s(_vm.media.year))]),
      _vm._v(" "),
      _c("li", [_vm._v("Director: " + _vm._s(_vm.media.director))]),
      _vm._v(" "),
      _c("li", [_vm._v("Producer: " + _vm._s(_vm.media.producer))]),
      _vm._v(" "),
      _c("li", { attrs: { if: _vm.media.actors } }, [
        _vm._v("Actors:\n            "),
        _c(
          "ul",
          _vm._l(_vm.media.actors, function(actor) {
            return _c("li", [
              _c("a", { attrs: { href: "/actors/" + actor.id } }, [
                _vm._v(
                  "\n                        " +
                    _vm._s(actor.firstname) +
                    " " +
                    _vm._s(actor.lastname) +
                    "\n                    "
                )
              ])
            ])
          }),
          0
        )
      ])
    ]),
    _vm._v(" "),
    _c("iframe", {
      attrs: {
        width: "500",
        height: "500",
        src: "https://www.youtube.com/embed/" + _vm.media.trailer,
        frameborder: "0",
        allowfullscreen: ""
      }
    }),
    _vm._v(" "),
    _c("div", [_vm._v("\n        " + _vm._s(_vm.media.summary) + "\n    ")])
  ])
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-03a39952", module.exports)
  }
}

/***/ }),
/* 55 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(56)
/* template */
var __vue_template__ = __webpack_require__(57)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/js/components/MediasIndex.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-0b893e68", Component.options)
  } else {
    hotAPI.reload("data-v-0b893e68", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 56 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['medias', 'csrf'],
    methods: {
        destroy: function destroy(event) {
            axios.delete('/medias/' + media.id).then(function (response) {
                // handle success
                console.log(response);
            }).catch(function (error) {
                // handle error
                console.log(error);
            });
        }
    }
});

/***/ }),
/* 57 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "container" }, [
    _c("h1", [_vm._v("Medias index")]),
    _vm._v(" "),
    _vm.medias
      ? _c(
          "ol",
          _vm._l(_vm.medias, function(media) {
            return _c("li", [
              _c("p", [_vm._v(_vm._s(media.title))]),
              _vm._v(" "),
              _c("img", { attrs: { src: media.poster, alt: media.title } }),
              _vm._v(" "),
              _c(
                "form",
                { attrs: { method: "post", action: "/medias/" + media.id } },
                [
                  _c("input", {
                    attrs: { type: "hidden", name: "id" },
                    domProps: { value: media.id }
                  }),
                  _vm._v(" "),
                  _c("input", {
                    attrs: { type: "hidden", name: "_method", value: "DELETE" }
                  }),
                  _vm._v(" "),
                  _c("input", {
                    attrs: { type: "hidden", name: "_token" },
                    domProps: { value: _vm.csrf }
                  }),
                  _vm._v(" "),
                  _c("button", { on: { click: _vm.destroy } }, [
                    _vm._v("Delete")
                  ])
                ]
              )
            ])
          }),
          0
        )
      : _vm._e()
  ])
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-0b893e68", module.exports)
  }
}

/***/ }),
/* 58 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(59)
/* template */
var __vue_template__ = __webpack_require__(60)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/js/components/MediasEdit.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-71dd77e4", Component.options)
  } else {
    hotAPI.reload("data-v-71dd77e4", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 59 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['media', 'csrf'],
    data: function data() {
        return {
            mediaId: media.id,
            mediaSummary: media.summary,
            mediaYear: media.year,
            mediaTrailer: media.trailer,
            mediaIsSerie: media.is_serie,
            mediaPoster: media.poster,
            mediaDirector: media.director,
            mediaProducer: media.producer
        };
    },

    methods: {
        getYoutubeId: function getYoutubeId(string) {
            var video_id = string.split('v=')[1];
            var ampersandPosition = video_id.indexOf('&');
            if (ampersandPosition != -1) {
                video_id = video_id.substring(0, ampersandPosition);
            }
            return video_id;
        },
        send: function send(event) {
            this.$data.mediaTrailer = this.getYoutubeId(this.$data.mediaTrailer);

            axios.patch('/medias/' + media.id).then(function (response) {
                // handle success
                console.log(response);
            }).catch(function (error) {
                // handle error
                console.log(error);
            });
        }
    }
});

/***/ }),
/* 60 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "container" }, [
    _c("h1", [_vm._v("Edit this media")]),
    _vm._v(" "),
    _c(
      "form",
      { attrs: { method: "post", action: "/medias/" + _vm.media.id } },
      [
        _c("p", [
          _c("label", { attrs: { for: "mediaTitle" } }, [_vm._v("Title")]),
          _vm._v(" "),
          _c("input", {
            attrs: { type: "text", name: "mediaTitle" },
            domProps: { value: _vm.media.title }
          })
        ]),
        _vm._v(" "),
        _c("p", [
          _c("label", { attrs: { for: "mediaSummary" } }, [_vm._v("Summary")]),
          _vm._v(" "),
          _c("textarea", { attrs: { name: "mediaSummary" } }, [
            _vm._v(_vm._s(_vm.media.summary))
          ])
        ]),
        _vm._v(" "),
        _c("p", [
          _c("label", { attrs: { for: "mediaYear" } }, [_vm._v("Year")]),
          _vm._v(" "),
          _c("input", {
            attrs: { type: "number", step: "1", name: "mediaYear" },
            domProps: { value: _vm.media.year }
          })
        ]),
        _vm._v(" "),
        _c("p", [
          _c("label", { attrs: { for: "mediaTrailer" } }, [_vm._v("Trailer")]),
          _vm._v(" "),
          _c("input", {
            attrs: { type: "text", name: "mediaTrailer" },
            domProps: { value: _vm.media.trailer }
          })
        ]),
        _vm._v(" "),
        _c("p", [
          _c("label", { attrs: { for: "mediaIsSerie" } }, [
            _vm._v("Is it part of a TV Show ?")
          ]),
          _vm._v(" "),
          _c("input", {
            attrs: { type: "checkbox", name: "mediaIsSerie" },
            domProps: { value: _vm.media.is_serie }
          })
        ]),
        _vm._v(" "),
        _c("p", [
          _c("label", { attrs: { for: "mediaPoster" } }, [_vm._v("Poster")]),
          _vm._v(" "),
          _c("input", {
            attrs: { type: "text", name: "mediaPoster" },
            domProps: { value: _vm.media.poster }
          })
        ]),
        _vm._v(" "),
        _c("p", [
          _c("label", { attrs: { for: "mediaDirector" } }, [
            _vm._v("Director")
          ]),
          _vm._v(" "),
          _c("input", {
            attrs: { type: "text", name: "mediaDirector" },
            domProps: { value: _vm.media.director }
          })
        ]),
        _vm._v(" "),
        _c("p", [
          _c("label", { attrs: { for: "mediaProducer" } }, [
            _vm._v("Producer")
          ]),
          _vm._v(" "),
          _c("input", {
            attrs: { type: "text", name: "mediaProducer" },
            domProps: { value: _vm.media.producer }
          })
        ]),
        _vm._v(" "),
        _c("input", {
          attrs: { type: "hidden", name: "_method", value: "PATCH" }
        }),
        _vm._v(" "),
        _c("input", {
          attrs: { type: "hidden", name: "_token" },
          domProps: { value: _vm.csrf }
        }),
        _vm._v(" "),
        _c("button", { on: { click: _vm.send } }, [_vm._v("Edit")])
      ]
    )
  ])
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-71dd77e4", module.exports)
  }
}

/***/ }),
/* 61 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(62)
/* template */
var __vue_template__ = __webpack_require__(63)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/js/components/MediasCreate.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-e55a4d54", Component.options)
  } else {
    hotAPI.reload("data-v-e55a4d54", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 62 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['csrf'],
    data: function data() {
        return {
            mediaTitle: '',
            mediaSummary: '',
            mediaYear: 0,
            mediaTrailer: '',
            mediaIsSerie: 0,
            mediaPoster: '',
            mediaDirector: '',
            mediaProducer: ''
        };
    },

    methods: {
        getYoutubeId: function getYoutubeId(string) {
            var video_id = string.split('v=')[1];
            var ampersandPosition = video_id.indexOf('&');
            if (ampersandPosition != -1) {
                video_id = video_id.substring(0, ampersandPosition);
            }
            return video_id;
        },
        send: function send(event) {
            this.$data.mediaTrailer = this.getYoutubeId(this.$data.mediaTrailer);

            axios.post('/medias').then(function (response) {
                // handle success
                console.log(response);
            }).catch(function (error) {
                // handle error
                console.log(error);
            });
        }
    }
});

/***/ }),
/* 63 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "container" }, [
    _c("h1", [_vm._v("Create a media")]),
    _vm._v(" "),
    _c("form", { attrs: { method: "post", action: "/medias" } }, [
      _c("p", [
        _c("label", { attrs: { for: "mediaTitle" } }, [_vm._v("Title")]),
        _vm._v(" "),
        _c("input", {
          directives: [
            {
              name: "model",
              rawName: "v-model",
              value: _vm.mediaTitle,
              expression: "mediaTitle"
            }
          ],
          attrs: { type: "text", name: "mediaTitle" },
          domProps: { value: _vm.mediaTitle },
          on: {
            input: function($event) {
              if ($event.target.composing) {
                return
              }
              _vm.mediaTitle = $event.target.value
            }
          }
        })
      ]),
      _vm._v(" "),
      _c("p", [
        _c("label", { attrs: { for: "mediaSummary" } }, [_vm._v("Summary")]),
        _vm._v(" "),
        _c("textarea", {
          directives: [
            {
              name: "model",
              rawName: "v-model",
              value: _vm.mediaSummary,
              expression: "mediaSummary"
            }
          ],
          attrs: { name: "mediaSummary" },
          domProps: { value: _vm.mediaSummary },
          on: {
            input: function($event) {
              if ($event.target.composing) {
                return
              }
              _vm.mediaSummary = $event.target.value
            }
          }
        })
      ]),
      _vm._v(" "),
      _c("p", [
        _c("label", { attrs: { for: "mediaYear" } }, [_vm._v("Year")]),
        _vm._v(" "),
        _c("input", {
          directives: [
            {
              name: "model",
              rawName: "v-model",
              value: _vm.mediaYear,
              expression: "mediaYear"
            }
          ],
          attrs: { type: "number", step: "1", name: "mediaYear" },
          domProps: { value: _vm.mediaYear },
          on: {
            input: function($event) {
              if ($event.target.composing) {
                return
              }
              _vm.mediaYear = $event.target.value
            }
          }
        })
      ]),
      _vm._v(" "),
      _c("p", [
        _c("label", { attrs: { for: "mediaTrailer" } }, [_vm._v("Trailer")]),
        _vm._v(" "),
        _c("input", {
          directives: [
            {
              name: "model",
              rawName: "v-model",
              value: _vm.mediaTrailer,
              expression: "mediaTrailer"
            }
          ],
          attrs: { type: "text", name: "mediaTrailer" },
          domProps: { value: _vm.mediaTrailer },
          on: {
            input: function($event) {
              if ($event.target.composing) {
                return
              }
              _vm.mediaTrailer = $event.target.value
            }
          }
        })
      ]),
      _vm._v(" "),
      _c("p", [
        _c("label", { attrs: { for: "mediaIsSerie" } }, [
          _vm._v("Is it part of a TV Show ?")
        ]),
        _vm._v(" "),
        _c("input", {
          directives: [
            {
              name: "model",
              rawName: "v-model",
              value: _vm.mediaIsSerie,
              expression: "mediaIsSerie"
            }
          ],
          attrs: { type: "checkbox", name: "mediaIsSerie" },
          domProps: {
            checked: Array.isArray(_vm.mediaIsSerie)
              ? _vm._i(_vm.mediaIsSerie, null) > -1
              : _vm.mediaIsSerie
          },
          on: {
            change: function($event) {
              var $$a = _vm.mediaIsSerie,
                $$el = $event.target,
                $$c = $$el.checked ? true : false
              if (Array.isArray($$a)) {
                var $$v = null,
                  $$i = _vm._i($$a, $$v)
                if ($$el.checked) {
                  $$i < 0 && (_vm.mediaIsSerie = $$a.concat([$$v]))
                } else {
                  $$i > -1 &&
                    (_vm.mediaIsSerie = $$a
                      .slice(0, $$i)
                      .concat($$a.slice($$i + 1)))
                }
              } else {
                _vm.mediaIsSerie = $$c
              }
            }
          }
        })
      ]),
      _vm._v(" "),
      _c("p", [
        _c("label", { attrs: { for: "mediaPoster" } }, [_vm._v("Poster")]),
        _vm._v(" "),
        _c("input", {
          directives: [
            {
              name: "model",
              rawName: "v-model",
              value: _vm.mediaPoster,
              expression: "mediaPoster"
            }
          ],
          attrs: { type: "text", name: "mediaPoster" },
          domProps: { value: _vm.mediaPoster },
          on: {
            input: function($event) {
              if ($event.target.composing) {
                return
              }
              _vm.mediaPoster = $event.target.value
            }
          }
        })
      ]),
      _vm._v(" "),
      _c("p", [
        _c("label", { attrs: { for: "mediaDirector" } }, [_vm._v("Director")]),
        _vm._v(" "),
        _c("input", {
          directives: [
            {
              name: "model",
              rawName: "v-model",
              value: _vm.mediaDirector,
              expression: "mediaDirector"
            }
          ],
          attrs: { type: "text", name: "mediaDirector" },
          domProps: { value: _vm.mediaDirector },
          on: {
            input: function($event) {
              if ($event.target.composing) {
                return
              }
              _vm.mediaDirector = $event.target.value
            }
          }
        })
      ]),
      _vm._v(" "),
      _c("p", [
        _c("label", { attrs: { for: "mediaProducer" } }, [_vm._v("Producer")]),
        _vm._v(" "),
        _c("input", {
          directives: [
            {
              name: "model",
              rawName: "v-model",
              value: _vm.mediaProducer,
              expression: "mediaProducer"
            }
          ],
          attrs: { type: "text", name: "mediaProducer" },
          domProps: { value: _vm.mediaProducer },
          on: {
            input: function($event) {
              if ($event.target.composing) {
                return
              }
              _vm.mediaProducer = $event.target.value
            }
          }
        })
      ]),
      _vm._v(" "),
      _c("input", {
        attrs: { type: "hidden", name: "_token" },
        domProps: { value: _vm.csrf }
      }),
      _vm._v(" "),
      _c("button", { on: { click: _vm.send } }, [_vm._v("Create")])
    ])
  ])
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-e55a4d54", module.exports)
  }
}

/***/ }),
/* 64 */,
/* 65 */,
/* 66 */,
/* 67 */,
/* 68 */,
/* 69 */,
/* 70 */
/***/ (function(module, exports) {

throw new Error("Module build failed: ModuleBuildError: Module build failed: \n@import '~bootstrap/scss/bootstrap';\n^\n      File to import not found or unreadable: /home/emilie/becode_projects/NutFlux/node_modules/bootstrap/scss/bootstrap.scss.\n      in /home/emilie/becode_projects/NutFlux/resources/sass/app.scss (line 9, column 1)\n    at runLoaders (/home/emilie/becode_projects/NutFlux/node_modules/webpack/lib/NormalModule.js:195:19)\n    at /home/emilie/becode_projects/NutFlux/node_modules/loader-runner/lib/LoaderRunner.js:364:11\n    at /home/emilie/becode_projects/NutFlux/node_modules/loader-runner/lib/LoaderRunner.js:230:18\n    at context.callback (/home/emilie/becode_projects/NutFlux/node_modules/loader-runner/lib/LoaderRunner.js:111:13)\n    at Object.asyncSassJobQueue.push [as callback] (/home/emilie/becode_projects/NutFlux/node_modules/sass-loader/lib/loader.js:55:13)\n    at Object.done [as callback] (/home/emilie/becode_projects/NutFlux/node_modules/neo-async/async.js:8077:18)\n    at options.error (/home/emilie/becode_projects/NutFlux/node_modules/node-sass/lib/index.js:294:32)");

/***/ }),
/* 71 */,
/* 72 */,
/* 73 */,
/* 74 */,
/* 75 */,
/* 76 */,
/* 77 */,
/* 78 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(79)
/* template */
var __vue_template__ = __webpack_require__(80)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/js/components/UsersShow.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-9481ae6c", Component.options)
  } else {
    hotAPI.reload("data-v-9481ae6c", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 79 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['user']
});

/***/ }),
/* 80 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "container" }, [
    _c("h1", [
      _vm._v(_vm._s(_vm.user.firstname) + " " + _vm._s(_vm.user.lastname))
    ]),
    _vm._v(" "),
    _c("img", {
      attrs: {
        src: _vm.user.avatar,
        alt: _vm.user.firstname + " " + _vm.user.lastname
      }
    })
  ])
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-9481ae6c", module.exports)
  }
}

/***/ }),
/* 81 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(82)
/* template */
var __vue_template__ = __webpack_require__(83)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/js/components/UsersIndex.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-4616f755", Component.options)
  } else {
    hotAPI.reload("data-v-4616f755", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 82 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['users', 'csrf'],
    methods: {
        destroy: function destroy(event) {
            axios.delete('/users/' + user.id).then(function (response) {
                // handle success
                console.log(response);
            }).catch(function (error) {
                // handle error
                console.log(error);
            });
        }
    }
});

/***/ }),
/* 83 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "container" }, [
    _c("h1", [_vm._v("Users index")]),
    _vm._v(" "),
    _vm.users
      ? _c(
          "ol",
          _vm._l(_vm.users, function(user) {
            return _c("li", [
              _c("p", [
                _vm._v(_vm._s(user.firstname) + " " + _vm._s(user.lastname))
              ]),
              _vm._v(" "),
              _c("img", {
                attrs: {
                  src: user.avatar,
                  alt: user.firstname + " " + user.lastname
                }
              }),
              _vm._v(" "),
              _c(
                "form",
                { attrs: { method: "post", action: "/users/" + user.id } },
                [
                  _c("input", {
                    attrs: { type: "hidden", name: "id" },
                    domProps: { value: user.id }
                  }),
                  _vm._v(" "),
                  _c("input", {
                    attrs: { type: "hidden", name: "_method", value: "DELETE" }
                  }),
                  _vm._v(" "),
                  _c("input", {
                    attrs: { type: "hidden", name: "_token" },
                    domProps: { value: _vm.csrf }
                  }),
                  _vm._v(" "),
                  _c("button", { on: { click: _vm.destroy } }, [
                    _vm._v("Delete")
                  ])
                ]
              )
            ])
          }),
          0
        )
      : _vm._e()
  ])
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-4616f755", module.exports)
  }
}

/***/ }),
/* 84 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(85)
/* template */
var __vue_template__ = __webpack_require__(86)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/js/components/UsersEdit.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-296e6d57", Component.options)
  } else {
    hotAPI.reload("data-v-296e6d57", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 85 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['user', 'csrf'],
    data: function data() {
        return {
            userId: user.id,
            userFirstname: user.firstname,
            userLastname: user.lastname,
            userAvatar: user.avatar
        };
    },

    methods: {
        send: function send(event) {
            axios.patch('/users/' + user.id).then(function (response) {
                // handle success
                console.log(response);
            }).catch(function (error) {
                // handle error
                console.log(error);
            });
        }
    }
});

/***/ }),
/* 86 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "container" }, [
    _c("h1", [_vm._v("Edit this user")]),
    _vm._v(" "),
    _c("form", { attrs: { method: "post", action: "/users/" + _vm.user.id } }, [
      _c("p", [
        _c("label", { attrs: { for: "userFirstname" } }, [_vm._v("Firstname")]),
        _vm._v(" "),
        _c("input", {
          attrs: { type: "text", name: "userFirstname" },
          domProps: { value: _vm.user.firstname }
        })
      ]),
      _vm._v(" "),
      _c("p", [
        _c("label", { attrs: { for: "userLastname" } }, [_vm._v("Lastname")]),
        _vm._v(" "),
        _c("input", {
          attrs: { type: "text", name: "userLastname" },
          domProps: { value: _vm.user.lastname }
        })
      ]),
      _vm._v(" "),
      _c("p", [
        _c("label", { attrs: { for: "userAvatar" } }, [_vm._v("Avatar")]),
        _vm._v(" "),
        _c("input", {
          attrs: { type: "text", name: "userAvatar" },
          domProps: { value: _vm.user.avatar }
        })
      ]),
      _vm._v(" "),
      _c("input", {
        attrs: { type: "hidden", name: "_method", value: "PATCH" }
      }),
      _vm._v(" "),
      _c("input", {
        attrs: { type: "hidden", name: "_token" },
        domProps: { value: _vm.csrf }
      }),
      _vm._v(" "),
      _c("button", { on: { click: _vm.send } }, [_vm._v("Edit")])
    ])
  ])
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-296e6d57", module.exports)
  }
}

/***/ }),
/* 87 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(88)
/* template */
var __vue_template__ = __webpack_require__(89)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/js/components/UsersCreate.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-b70783ee", Component.options)
  } else {
    hotAPI.reload("data-v-b70783ee", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 88 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['csrf'],
    data: function data() {
        return {
            firstname: '',
            lastname: '',
            avatar: ''
        };
    },

    methods: {
        create: function create(event) {
            axios.post('/users').then(function (response) {
                // handle success
                console.log(response);
            }).catch(function (error) {
                // handle error
                console.log(error);
            });
        }
    }
});

/***/ }),
/* 89 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "container" }, [
    _c("h1", [_vm._v("Create a user")]),
    _vm._v(" "),
    _c("form", { attrs: { method: "post", action: "/users" } }, [
      _c("p", [
        _c("label", { attrs: { for: "firstname" } }, [_vm._v("Firstname :")]),
        _vm._v(" "),
        _c("input", {
          directives: [
            {
              name: "model",
              rawName: "v-model",
              value: _vm.firstname,
              expression: "firstname"
            }
          ],
          attrs: { type: "text", name: "firstname" },
          domProps: { value: _vm.firstname },
          on: {
            input: function($event) {
              if ($event.target.composing) {
                return
              }
              _vm.firstname = $event.target.value
            }
          }
        })
      ]),
      _vm._v(" "),
      _c("p", [
        _c("label", { attrs: { for: "lastname" } }, [_vm._v("Lastname :")]),
        _vm._v(" "),
        _c("input", {
          directives: [
            {
              name: "model",
              rawName: "v-model",
              value: _vm.lastname,
              expression: "lastname"
            }
          ],
          attrs: { type: "text", name: "lastname" },
          domProps: { value: _vm.lastname },
          on: {
            input: function($event) {
              if ($event.target.composing) {
                return
              }
              _vm.lastname = $event.target.value
            }
          }
        })
      ]),
      _vm._v(" "),
      _c("p", [
        _c("label", { attrs: { for: "avatar" } }, [_vm._v("avatar :")]),
        _vm._v(" "),
        _c("input", {
          directives: [
            {
              name: "model",
              rawName: "v-model",
              value: _vm.avatar,
              expression: "avatar"
            }
          ],
          attrs: { type: "text", name: "avatar" },
          domProps: { value: _vm.avatar },
          on: {
            input: function($event) {
              if ($event.target.composing) {
                return
              }
              _vm.avatar = $event.target.value
            }
          }
        })
      ]),
      _vm._v(" "),
      _c("input", {
        attrs: { type: "hidden", name: "_token" },
        domProps: { value: _vm.csrf }
      }),
      _vm._v(" "),
      _c("button", { on: { click: _vm.create } }, [_vm._v("Create")])
    ])
  ])
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-b70783ee", module.exports)
  }
}

/***/ }),
/* 90 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(1)
/* script */
var __vue_script__ = __webpack_require__(91)
/* template */
var __vue_template__ = __webpack_require__(92)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/js/components/ChoicesIndex.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-b309462a", Component.options)
  } else {
    hotAPI.reload("data-v-b309462a", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 91 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ["choiceslist", "csrf"],
    methods: {
        destroy: function destroy(event) {
            axios.delete('/choices/' + item.id).then(function (response) {
                // handle success
                console.log(response);
            }).catch(function (error) {
                // handle error
                console.log(error);
            });
        }
    }
});

/***/ }),
/* 92 */
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "container" }, [
    _c("h1", [_vm._v("List")]),
    _vm._v(" "),
    _c("h2", [_vm._v("Favourites")]),
    _vm._v(" "),
    _c(
      "ul",
      _vm._l(_vm.choiceslist, function(item) {
        return item.type === "favourites"
          ? _c("li", [
              _c("p", [_vm._v(_vm._s(item.title))]),
              _vm._v(" "),
              _c(
                "form",
                {
                  attrs: {
                    method: "post",
                    action: "/choices/" + _vm.choiceslist.id
                  }
                },
                [
                  _c("input", {
                    attrs: { type: "hidden", name: "id" },
                    domProps: { value: item.id }
                  }),
                  _vm._v(" "),
                  _c("input", {
                    attrs: { type: "hidden", name: "_method", value: "DELETE" }
                  }),
                  _vm._v(" "),
                  _c("input", {
                    attrs: { type: "hidden", name: "_token" },
                    domProps: { value: _vm.csrf }
                  }),
                  _vm._v(" "),
                  _c("button", { on: { click: _vm.destroy } }, [
                    _vm._v("Delete")
                  ])
                ]
              )
            ])
          : _vm._e()
      }),
      0
    ),
    _vm._v(" "),
    _c("h2", [_vm._v("Watched")]),
    _vm._v(" "),
    _c(
      "ul",
      _vm._l(_vm.choiceslist, function(item) {
        return item.type === "watched"
          ? _c("li", [
              _c("p", [_vm._v(_vm._s(item.title))]),
              _vm._v(" "),
              _c(
                "form",
                { attrs: { method: "post", action: "/choices/" + item.id } },
                [
                  _c("input", {
                    attrs: { type: "hidden", name: "id" },
                    domProps: { value: item.id }
                  }),
                  _vm._v(" "),
                  _c("input", {
                    attrs: { type: "hidden", name: "_method", value: "DELETE" }
                  }),
                  _vm._v(" "),
                  _c("input", {
                    attrs: { type: "hidden", name: "_token" },
                    domProps: { value: _vm.csrf }
                  }),
                  _vm._v(" "),
                  _c("button", { on: { click: _vm.destroy } }, [
                    _vm._v("Delete")
                  ])
                ]
              )
            ])
          : _vm._e()
      }),
      0
    ),
    _vm._v(" "),
    _c("h2", [_vm._v("To Watch Later")]),
    _vm._v(" "),
    _c(
      "ul",
      _vm._l(_vm.choiceslist, function(item) {
        return item.type === "later"
          ? _c("li", [
              _c("p", [_vm._v(_vm._s(item.title))]),
              _vm._v(" "),
              _c(
                "form",
                { attrs: { method: "post", action: "/choices/" + item.id } },
                [
                  _c("input", {
                    attrs: { type: "hidden", name: "id" },
                    domProps: { value: item.id }
                  }),
                  _vm._v(" "),
                  _c("input", {
                    attrs: { type: "hidden", name: "_method", value: "DELETE" }
                  }),
                  _vm._v(" "),
                  _c("input", {
                    attrs: { type: "hidden", name: "_token" },
                    domProps: { value: _vm.csrf }
                  }),
                  _vm._v(" "),
                  _c("button", { on: { click: _vm.destroy } }, [
                    _vm._v("Delete")
                  ])
                ]
              )
            ])
          : _vm._e()
      }),
      0
    )
  ])
}
var staticRenderFns = []
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-b309462a", module.exports)
  }
}

/***/ })
/******/ ]);