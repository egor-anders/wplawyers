(() => {
  var e = {
      755: () => {
        console.log("components");
      },
      591: () => {
        (window.galleryNext = function () {
          let e = document.querySelector(".gallery__list").scrollLeft,
            t = document.querySelector(".gallery__list").scrollWidth,
            o = window.innerWidth;
          e + o > t
            ? (document.querySelector(".gallery__list").scrollLeft = 0)
            : (document.querySelector(".gallery__list").scrollLeft += o);
        }),
          (window.galleryPrev = function () {
            let e = document.querySelector(".gallery__list").scrollLeft,
              t = document.querySelector(".gallery__list").scrollWidth,
              o = window.innerWidth;
            e - o <= 0
              ? (document.querySelector(".gallery__list").scrollLeft = t)
              : (document.querySelector(".gallery__list").scrollLeft -= o);
          });
      },
      598: () => {
        function e(e) {
          var t = !0,
            o = !1,
            n = null,
            i = {
              text: !0,
              search: !0,
              url: !0,
              tel: !0,
              email: !0,
              password: !0,
              number: !0,
              date: !0,
              month: !0,
              week: !0,
              time: !0,
              datetime: !0,
              "datetime-local": !0,
            };
          function d(e) {
            return !!(
              e &&
              e !== document &&
              "HTML" !== e.nodeName &&
              "BODY" !== e.nodeName &&
              "classList" in e &&
              "contains" in e.classList
            );
          }
          function s(e) {
            e.classList.contains("focus-visible") ||
              (e.classList.add("focus-visible"),
              e.setAttribute("data-focus-visible-added", ""));
          }
          function c(e) {
            t = !1;
          }
          function r() {
            document.addEventListener("mousemove", l),
              document.addEventListener("mousedown", l),
              document.addEventListener("mouseup", l),
              document.addEventListener("pointermove", l),
              document.addEventListener("pointerdown", l),
              document.addEventListener("pointerup", l),
              document.addEventListener("touchmove", l),
              document.addEventListener("touchstart", l),
              document.addEventListener("touchend", l);
          }
          function l(e) {
            (e.target.nodeName && "html" === e.target.nodeName.toLowerCase()) ||
              ((t = !1),
              document.removeEventListener("mousemove", l),
              document.removeEventListener("mousedown", l),
              document.removeEventListener("mouseup", l),
              document.removeEventListener("pointermove", l),
              document.removeEventListener("pointerdown", l),
              document.removeEventListener("pointerup", l),
              document.removeEventListener("touchmove", l),
              document.removeEventListener("touchstart", l),
              document.removeEventListener("touchend", l));
          }
          document.addEventListener(
            "keydown",
            function (o) {
              o.metaKey ||
                o.altKey ||
                o.ctrlKey ||
                (d(e.activeElement) && s(e.activeElement), (t = !0));
            },
            !0
          ),
            document.addEventListener("mousedown", c, !0),
            document.addEventListener("pointerdown", c, !0),
            document.addEventListener("touchstart", c, !0),
            document.addEventListener(
              "visibilitychange",
              function (e) {
                "hidden" === document.visibilityState && (o && (t = !0), r());
              },
              !0
            ),
            r(),
            e.addEventListener(
              "focus",
              function (e) {
                var o, n, c;
                d(e.target) &&
                  (t ||
                    ((n = (o = e.target).type),
                    ("INPUT" === (c = o.tagName) && i[n] && !o.readOnly) ||
                      ("TEXTAREA" === c && !o.readOnly) ||
                      o.isContentEditable)) &&
                  s(e.target);
              },
              !0
            ),
            e.addEventListener(
              "blur",
              function (e) {
                var t;
                d(e.target) &&
                  (e.target.classList.contains("focus-visible") ||
                    e.target.hasAttribute("data-focus-visible-added")) &&
                  ((o = !0),
                  window.clearTimeout(n),
                  (n = window.setTimeout(function () {
                    o = !1;
                  }, 100)),
                  (t = e.target).hasAttribute("data-focus-visible-added") &&
                    (t.classList.remove("focus-visible"),
                    t.removeAttribute("data-focus-visible-added")));
              },
              !0
            ),
            e.nodeType === Node.DOCUMENT_FRAGMENT_NODE && e.host
              ? e.host.setAttribute("data-js-focus-visible", "")
              : e.nodeType === Node.DOCUMENT_NODE &&
                (document.documentElement.classList.add("js-focus-visible"),
                document.documentElement.setAttribute(
                  "data-js-focus-visible",
                  ""
                ));
        }
        if ("undefined" != typeof window && "undefined" != typeof document) {
          var t;
          window.applyFocusVisiblePolyfill = e;
          try {
            t = new CustomEvent("focus-visible-polyfill-ready");
          } catch (e) {
            (t = document.createEvent("CustomEvent")).initCustomEvent(
              "focus-visible-polyfill-ready",
              !1,
              !1,
              {}
            );
          }
          window.dispatchEvent(t);
        }
        "undefined" != typeof document && e(document);
      },
    },
    t = {};
  function o(n) {
    var i = t[n];
    if (void 0 !== i) return i.exports;
    var d = (t[n] = { exports: {} });
    return e[n](d, d.exports, o), d.exports;
  }
  (() => {
    "use strict";
    o(598);
    const e = {
      windowEl: window,
      documentEl: document,
      htmlEl: document.documentElement,
      bodyEl: document.body,
    };
    console.log(
      (() => {
        const t = navigator.userAgent || navigator.vendor || window.opera;
        return /android/i.test(t)
          ? (e.htmlEl.classList.add("page--android"), "Android")
          : /iPad|iPhone|iPod/.test(t) && !window.MSStream
          ? (e.htmlEl.classList.add("page--ios"), "iOS")
          : "unknown";
      })()
    ),
      o(755),
      o(591);
    var t,
      n = document.getElementsByClassName("accordion__button");
    for (t = 0; t < n.length; t++)
      n[t].addEventListener("click", function () {
        this.classList.toggle("accordion__button--active");
        var e = this.nextElementSibling;
        e.style.maxHeight
          ? (e.style.maxHeight = null)
          : (e.style.maxHeight = e.scrollHeight + "px");
      });
    Fancybox.bind("[data-fancybox]"),
      (window.acceptCookie = function () {
        let e = { path: "/" };
        e.expires instanceof Date && (e.expires = e.expires.toUTCString());
        let t =
          encodeURIComponent("accept_cookie") +
          "=" +
          encodeURIComponent("true");
        for (let o in e) {
          t += "; " + o;
          let n = e[o];
          !0 !== n && (t += "=" + n);
        }
        (document.cookie = t),
          document.querySelector(".cookie").classList.remove("show");
      }),
      (function (e) {
        let t = document.cookie.match(
          new RegExp(
            "(?:^|; )" +
              "accept_cookie".replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, "\\$1") +
              "=([^;]*)"
          )
        );
        return t ? decodeURIComponent(t[1]) : void 0;
      })() || document.querySelector(".cookie").classList.add("show"),
      document.querySelectorAll("[data-phone-mask]").forEach((e) => {
        IMask(e, { mask: "+{7} (000) 000 00 00" });
      }),
      (window.togglePopup = function (e) {
        let t = document.querySelector(`[data-popup-name="${e}"]`);
        t.classList.contains("show")
          ? (document.body.style = "overflow:inherit")
          : (document.body.style = "overflow:hidden"),
          t.classList.toggle("show");
      });
  })();
})();
