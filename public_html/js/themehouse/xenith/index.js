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
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__sticky__ = __webpack_require__(1);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__checkRadius__ = __webpack_require__(2);
var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };




if (_typeof(window.themehouse) !== 'object') {
    window.themehouse = {};
}
if (_typeof(window.themehouse.settings) !== 'object') {
    window.themehouse.settings = {};
}
if (_typeof(window.themehouse.settings.data) !== 'object') {
    window.themehouse.settings.data = {};
}

window.themehouse.settings.data.jsVersion = '2.0.10.0_Release';

new __WEBPACK_IMPORTED_MODULE_0__sticky__["a" /* default */]({
    settings: window.themehouse.settings.sticky
}).register();

new __WEBPACK_IMPORTED_MODULE_1__checkRadius__["a" /* default */]({
    settings: window.themehouse.settings.checkRadius
}).register();

/***/ }),
/* 1 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var sticky = function () {
    function Sticky(_ref) {
        var _this = this;

        var _ref$settings = _ref.settings,
            settings = _ref$settings === undefined ? {} : _ref$settings,
            _ref$init = _ref.init,
            init = _ref$init === undefined ? false : _ref$init,
            _ref$commonVersion = _ref.commonVersion,
            commonVersion = _ref$commonVersion === undefined ? '20180112' : _ref$commonVersion;

        _classCallCheck(this, Sticky);

        this.initEle = function (index) {
            var ele = _this.eles[index];
            var _ele$offsets = ele.offsets,
                topOffset = _ele$offsets.topOffset,
                topOffsetMax = _ele$offsets.topOffsetMax,
                topOffsetMin = _ele$offsets.topOffsetMin,
                topOffsetBreakpoint = _ele$offsets.topOffsetBreakpoint;


            var offset = Math.max(topOffset, topOffsetMax, topOffsetMin, 0);

            if (topOffsetBreakpoint !== -1) {
                offset = _this.common.values.innerWidth > topOffsetBreakpoint ? topOffsetMax : topOffsetMin;
            }

            if (offset !== ele.currentOffset) {
                var $ele = jQuery(ele.ele);
                if (ele.currentOffset !== -1) {
                    $ele.trigger('sticky_kit:detach').removeData('sticky_kit');
                }

                $ele.stick_in_parent({
                    sticky_class: _this.settings.stickyClass,
                    offset_top: offset
                });

                _this.eles[index].currentOffset = offset;
            }
        };

        this.init = function () {
            _this.initGet();
            _this.initSet();
        };

        this.initGet = function () {
            var eles = window.document.querySelectorAll(_this.settings.stickySelector);
            for (var i = 0, len = eles.length; i < len; i++) {
                var ele = eles[i];
                var topOffset = parseInt(ele.getAttribute(_this.settings.dataTop), 10) || 0;
                var topOffsetMin = parseInt(ele.getAttribute(_this.settings.dataTopMin), 10) || 0;
                var topOffsetMax = parseInt(ele.getAttribute(_this.settings.dataTopMax), 10) || 0;
                var topOffsetBreakpoint = parseInt(ele.getAttribute(_this.settings.dataTopBreakpoint), 10) || -1;

                _this.eles.push({
                    ele: ele,
                    offsets: {
                        topOffset: topOffset,
                        topOffsetMax: topOffsetMax,
                        topOffsetMin: topOffsetMin,
                        topOffsetBreakpoint: topOffsetBreakpoint
                    },
                    currentOffset: -1
                });
            }
            // var $target = this.$target,
            //     position = $target.css('position'),
            //     supportsSticky = (position == 'sticky' || position == '-webkit-sticky'),
            //     stickyBroken = false;
            //
            // if (supportsSticky)
            // {
            //     var match = window.navigator.userAgent.match(/Chrome\/(\d+)/);
            //     if (match && parseInt(match[1], 10) < 60)
            //     {
            //         // Chrome has sticky positioning bugs in desktop (canary) 57
            //         // and different bugs in Android (canary) 57, so keep it disabled for now.
            //         stickyBroken = true;
            //         supportsSticky = false;
            //     }
            // }
            //
            // this.supportsSticky = supportsSticky;
            // this.stickyBroken = stickyBroken;

            _this.resizeGet();

            $(window).on('resize.sticky-header', $.proxy(_this, 'update'));
        };

        this.initSet = function () {
            _this.resizeSet();
            _this.running = true;
        };

        this.resize = function () {
            _this.resizeGet();
            _this.resizeSet();
        };

        this.resizeGet = function () {};

        this.resizeSet = function () {
            if (_this.common.values.innerHeight < _this.settings.minWindowHeight) {
                // disable if we aren't explicitly disabled (true or null)
                if (_this.active !== false) {
                    _this.disable();
                }
            } else if (!_this.active) {
                // enable if we aren't already enabled (false or null)
                _this.enable();
            }

            for (var i = 0, len = _this.eles.length; i < len; i++) {
                _this.initEle(i);
            }
        };

        this.running = false;
        this.settings = Object.assign({
            stickySelector: '.uix_stickyBar',
            stickyClass: 'is-sticky',
            stickyBrokenClass: 'is-sticky-broken',
            stickyDisabledClass: 'is-sticky-disabled',
            minWindowHeight: 251,
            dataTop: 'data-top-offset',
            dataTopMin: 'data-top-offset-min',
            dataTopMax: 'data-top-offset-max',
            dataTopBreakpoint: 'data-top-offset-breakpoint'
        }, settings);

        this.commonVersion = commonVersion;
        this.common = window.themehouse.common[commonVersion];

        this.active = false;
        this.supportsSticky = false;
        this.stickyBroken = false;
        this.eles = [];

        if (init) {
            this.init();
        }
    }

    _createClass(Sticky, [{
        key: 'register',
        value: function register() {
            this.common.register({
                phase: 'initGet',
                addon: 'TH_UIX_Sticky',
                func: this.initGet,
                order: 10
            });
            this.common.register({
                phase: 'initSet',
                addon: 'TH_UIX_Sticky',
                func: this.initSet,
                order: 10
            });

            this.common.register({
                phase: 'resizeGet',
                addon: 'TH_UIX_Sticky',
                func: this.resizeGet,
                order: 10
            });
            this.common.register({
                phase: 'resizeSet',
                addon: 'TH_UIX_Sticky',
                func: this.resizeSet,
                order: 100 // may cause thrash so put later
            });
        }
    }, {
        key: 'enable',
        value: function enable() {
            var _this2 = this;

            this.active = true;

            var _loop = function _loop(i, len) {
                var ele = _this2.eles[i].ele;
                ele.classList.remove(_this2.settings.stickyDisabledClass);
                if (_this2.supportsSticky) {
                    // var isSticky = false,
                    //     stickyTop = parseInt($target.css('top'), 10),
                    //     iOS = XF.isIOS(),
                    //     iOSScrollTimeout;
                    //
                    // var checkIsSticky = function(isScrolling)
                    // {
                    //     var targetTop = $target[0].getBoundingClientRect().top,
                    //         shouldBeSticky = false;
                    //
                    //     if (targetTop < stickyTop || (targetTop == stickyTop && window.scrollY > 0))
                    //     {
                    //         if (!isSticky)
                    //         {
                    //             $target.addClass(stickyClass);
                    //             isSticky = true;
                    //         }
                    //     }
                    //     else
                    //     {
                    //         if (isSticky)
                    //         {
                    //             if (iOS && isScrolling)
                    //             {
                    //                 // iOS doesn't report the correct top position when scrolling while sticky,
                    //                 // so we need to wait until scrolling appears to have stopped to recalculate.
                    //                 // http://www.openradar.me/22872226
                    //                 clearTimeout(iOSScrollTimeout);
                    //                 iOSScrollTimeout = setTimeout(function()
                    //                 {
                    //                     checkIsSticky(false);
                    //                 }, 200);
                    //             }
                    //             else
                    //             {
                    //                 $target.removeClass(stickyClass);
                    //                 isSticky = false;
                    //             }
                    //         }
                    //     }
                    // };
                    //
                    // $(window).on('scroll.sticky-header', function()
                    // {
                    //     checkIsSticky(true);
                    // });
                    //
                    // checkIsSticky(false);
                } else {
                    if (_this2.stickyBroken) {
                        // run after sticky kit triggers their tick function
                        setTimeout(function () {
                            ele.classList.add(_this2.settings.stickyBrokenClass);
                        }, 0);
                    }

                    _this2.initEle(i);
                }
            };

            for (var i = 0, len = this.eles.length; i < len; i++) {
                _loop(i, len);
            }
        }
    }, {
        key: 'disable',
        value: function disable() {
            this.active = false;

            if (this.supportsSticky) {
                window.jQuery(window).off('scroll.sticky-header');
            }

            for (var i = 0, len = this.eles.length; i < len; i++) {
                var _ele = this.eles[i].ele;
                if (this.supportsSticky) {
                    window.jQuery(_ele).trigger('sticky_kit:detach').removeData('sticky_kit');
                }
                _ele.classList.remove(this.settings.stickyClass);
                _ele.classList.remove(this.settings.stickyBrokenClass);
                _ele.classList.remove(this.settings.stickyDisabledClass);
            }
        }
    }]);

    return Sticky;
}();

if (typeof window.themehouse === 'undefined') {
    window.themehouse = {};
}

window.themehouse.sticky = {
    sticky: sticky
};

/* harmony default export */ __webpack_exports__["a"] = (sticky);

/***/ }),
/* 2 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var checkRadius = function () {
    function CheckRadius(_ref) {
        var _this = this;

        var _ref$settings = _ref.settings,
            settings = _ref$settings === undefined ? {} : _ref$settings,
            _ref$init = _ref.init,
            init = _ref$init === undefined ? false : _ref$init,
            _ref$commonVersion = _ref.commonVersion,
            commonVersion = _ref$commonVersion === undefined ? '20180112' : _ref$commonVersion;

        _classCallCheck(this, CheckRadius);

        this.init = function () {
            _this.initGet();
            _this.initSet();
        };

        this.initGet = function () {
            if (_this.settings.enabled) {
                var selectors = _this.settings.selectors.split(',');
                if (selectors.length) {
                    for (var i = 0, len = selectors.length; i < len; i++) {
                        var selector = selectors[i];
                        if (selector.length) {
                            var eles = window.document.querySelectorAll(selector);
                            for (var j = 0, len2 = eles.length; j < len2; j++) {
                                _this.eles.push({
                                    ele: eles[j],
                                    selector: selector,
                                    lastClass: '',
                                    height: -1,
                                    topOffset: -1,
                                    topRadius: true,
                                    bottomRadius: true
                                });
                            }
                        }
                    }

                    _this.resizeGet();
                }
            }
        };

        this.initSet = function () {
            if (_this.settings.enabled) {
                _this.resizeSet();
                _this.running = true;
            }
        };

        this.resize = function () {
            _this.resizeGet();
            _this.resizeSet();
        };

        this.resizeGet = function () {
            if (_this.settings.enabled) {
                _this.checkGet();
            }
        };

        this.resizeSet = function () {
            if (_this.settings.enabled) {
                _this.checkSet();
            }
        };

        this.check = function () {
            _this.checkGet();
            _this.checkSet();
        };

        this.checkGet = function () {
            if (_this.settings.enabled) {
                var scrollTop = window.document.body.scrollTop || 0;
                for (var i = 0, len = _this.eles.length; i < len; i++) {
                    var ele = _this.eles[i].ele;
                    var rect = ele.getBoundingClientRect();
                    _this.eles[i].height = ele.offsetHeight;
                    _this.eles[i].width = ele.offsetWidth;
                    _this.eles[i].topOffset = rect.top + scrollTop;
                }
            }
        };

        this.checkSet = function () {
            if (_this.settings.enabled) {
                for (var outerIndex = 0, outerLen = _this.eles.length; outerIndex < outerLen; outerIndex++) {
                    var outer = _this.eles[outerIndex];
                    if (outer.width === _this.common.values.innerWidth) {
                        _this.eles[outerIndex].topRadius = false;
                        _this.eles[outerIndex].bottomRadius = false;
                    } else {
                        for (var innerIndex = 0; innerIndex < outerLen; innerIndex++) {
                            if (outerIndex !== innerIndex) {
                                var inner = _this.eles[innerIndex];
                                if (Math.abs(outer.topOffset - (inner.topOffset + inner.height)) < 1) {
                                    _this.eles[outerIndex].topRadius = false; // attached top
                                }
                                if (Math.abs(outer.topOffset + outer.height - inner.topOffset) < 1) {
                                    _this.eles[outerIndex].bottomRadius = false; // attached bottom
                                }
                            }
                        }
                    }

                    var newClass = _this.settings.defaultClass;
                    if (!outer.topRadius && !outer.bottomRadius) {
                        newClass = _this.settings.noBorderClass;
                    } else if (!outer.topRadius) {
                        newClass = _this.settings.noTopClass;
                    } else if (!outer.bottomRadius) {
                        newClass = _this.settings.noBottomClass;
                    }

                    if (newClass !== outer.lastClass) {
                        if (outer.lastClass) {
                            outer.ele.classList.remove(outer.lastClass);
                        }
                        outer.ele.classList.add(newClass);

                        outer.lastClass = newClass;
                    }
                }
            }
        };

        this.running = false;
        this.settings = Object.assign({
            enabled: false,
            selectors: '',
            defaultClass: 'uix_smartBorder--default',
            noTopClass: 'uix_smartBorder--noTop',
            noBottomClass: 'uix_smartBorder--noBottom',
            noBorderClass: 'uix_smartBorder--noBoth'
        }, settings);

        this.commonVersion = commonVersion;
        this.common = window.themehouse.common[commonVersion];
        this.eles = [];

        if (init) {
            this.init();
        }
    }

    _createClass(CheckRadius, [{
        key: 'register',
        value: function register() {
            if (this.settings.enabled) {
                this.common.register({
                    phase: 'initGet',
                    addon: 'TH_UIX_CheckRadius',
                    func: this.initGet,
                    order: 100
                });
                this.common.register({
                    phase: 'initSet',
                    addon: 'TH_UIX_CheckRadius',
                    func: this.initSet,
                    order: 100
                });
                this.common.register({
                    phase: 'resizeGet',
                    addon: 'TH_UIX_CheckRadius',
                    func: this.resizeGet,
                    order: 10
                });
                this.common.register({
                    phase: 'resizeSet',
                    addon: 'TH_UIX_CheckRadius',
                    func: this.resizeSet,
                    order: 10
                });
            }
        }
    }]);

    return CheckRadius;
}();

if (typeof window.themehouse === 'undefined') {
    window.themehouse = {};
}

window.themehouse.checkRadius = {
    checkRadius: checkRadius
};

/* harmony default export */ __webpack_exports__["a"] = (checkRadius);

/***/ })
/******/ ]);