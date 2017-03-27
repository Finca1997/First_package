;(function(window) {

var svgSprite = '<svg>' +
  ''+
    '<symbol id="icon-new" viewBox="0 0 1024 1024">'+
      ''+
      '<path d="M 512 1023.97 c -282.771 0 -511.987 -229.216 -511.987 -511.987 c 0 -282.771 229.216 -511.987 511.987 -511.987 c 282.771 0 511.987 229.216 511.987 511.987 c 0 282.771 -229.216 511.987 -511.987 511.987 Z M 309.893 363.511 c 0 0 -60.2095 0 -60.2095 0 c 0 0 0 196.219 0 196.219 c 0 0 -0.818979 0 -0.818979 0 c 0 0 -122.083 -196.219 -122.083 -196.219 c 0 0 -63.9214 0 -63.9214 0 c 0 0 0 292.499 0 292.499 c 0 0 60.2355 0 60.2355 0 c 0 0 0 -195.809 0 -195.809 c 0 0 0.818979 0 0.818979 0 c 0 0 121.674 195.809 121.674 195.809 c 0 0 64.3054 0 64.3054 0 c 0 0 0 -292.499 0 -292.499 Z M 568.754 363.511 c 0 0 -218.772 0 -218.772 0 c 0 0 0 292.499 0 292.499 c 0 0 222.048 0 222.048 0 c 0 0 0 -54.0656 0 -54.0656 c 0 0 -157.718 0 -157.718 0 c 0 0 0 -71.7042 0 -71.7042 c 0 0 141.743 0 141.743 0 c 0 0 0 -49.9697 0 -49.9697 c 0 0 -141.743 0 -141.743 0 c 0 0 0 -62.6924 0 -62.6924 c 0 0 154.441 0 154.441 0 c 0 0 0 -54.0656 0 -54.0656 Z M 845.227 565.055 c 0 0 -0.818979 0 -0.818979 0 c 0 0 -49.9697 -201.544 -49.9697 -201.544 c 0 0 -60.2355 0 -60.2355 0 c 0 0 -50.7887 199.086 -50.7887 199.086 c 0 0 -0.818979 0 -0.818979 0 c 0 0 -46.2838 -199.086 -46.2838 -199.086 c 0 0 -64.3314 0 -64.3314 0 c 0 0 77.438 292.499 77.438 292.499 c 0 0 65.1243 0 65.1243 0 c 0 0 48.7408 -199.086 48.7408 -199.086 c 0 0 0.818979 0 0.818979 0 c 0 0 49.5857 199.086 49.5857 199.086 c 0 0 63.8964 0 63.8964 0 c 0 0 78.667 -292.499 78.667 -292.499 c 0 0 -63.1024 0 -63.1024 0 c 0 0 -47.9218 201.544 -47.9218 201.544 Z"  ></path>'+
      ''+
    '</symbol>'+
  ''+
'</svg>'
var script = function() {
    var scripts = document.getElementsByTagName('script')
    return scripts[scripts.length - 1]
  }()
var shouldInjectCss = script.getAttribute("data-injectcss")

/**
 * document ready
 */
var ready = function(fn){
  if(document.addEventListener){
      document.addEventListener("DOMContentLoaded",function(){
          document.removeEventListener("DOMContentLoaded",arguments.callee,false)
          fn()
      },false)
  }else if(document.attachEvent){
     IEContentLoaded (window, fn)
  }

  function IEContentLoaded (w, fn) {
      var d = w.document, done = false,
      // only fire once
      init = function () {
          if (!done) {
              done = true
              fn()
          }
      }
      // polling for no errors
      ;(function () {
          try {
              // throws errors until after ondocumentready
              d.documentElement.doScroll('left')
          } catch (e) {
              setTimeout(arguments.callee, 50)
              return
          }
          // no errors, fire

          init()
      })()
      // trying to always fire before onload
      d.onreadystatechange = function() {
          if (d.readyState == 'complete') {
              d.onreadystatechange = null
              init()
          }
      }
  }
}

/**
 * Insert el before target
 *
 * @param {Element} el
 * @param {Element} target
 */

var before = function (el, target) {
  target.parentNode.insertBefore(el, target)
}

/**
 * Prepend el to target
 *
 * @param {Element} el
 * @param {Element} target
 */

var prepend = function (el, target) {
  if (target.firstChild) {
    before(el, target.firstChild)
  } else {
    target.appendChild(el)
  }
}

function appendSvg(){
  var div,svg

  div = document.createElement('div')
  div.innerHTML = svgSprite
  svg = div.getElementsByTagName('svg')[0]
  if (svg) {
    svg.setAttribute('aria-hidden', 'true')
    svg.style.position = 'absolute'
    svg.style.width = 0
    svg.style.height = 0
    svg.style.overflow = 'hidden'
    prepend(svg,document.body)
  }
}

if(shouldInjectCss && !window.__iconfont__svg__cssinject__){
  window.__iconfont__svg__cssinject__ = true
  try{
    document.write("<style>.svgfont {display: inline-block;width: 1em;height: 1em;fill: currentColor;vertical-align: -0.1em;font-size:16px;}</style>");
  }catch(e){
    console && console.log(e)
  }
}

ready(appendSvg)


})(window)
