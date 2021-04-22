<?php
session_start();
if (empty($_SESSION['userLogin']) || $_SESSION['userLogin'] == '') {
    header("Location: /index.php");
    die();
}
?>

<!DOCTYPE html>
<html>

<head>
    <style>
        * {
            box-sizing: border-box;
        }

        .row {
            margin-top: 30vh;
            margin-left: 30vw;
        }

        image {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            margin: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: relative;
            top: -24vh;
            left: 50%;
            background: yellow;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .column {
            float: left;
            width: 33.33%;
            padding: 5px;
        }

        .column:hover image {
            opacity: 0.3;
            float: left;
            width: 33.33%;
            padding: 5px;
        }

        .column:hover .middle {
            opacity: 1;
        }

        /* Clearfix (clear floats) */
        .row::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>
</head>

<body>

    <div class="row">
        <h2 style="margin-left:280px; ">CHOOSE ONE!</h2>
        <div class="column">
            <a href="/leetcode/main_page.php"><img src="/algoexpert/image/leet.jfif" alt="Snow" style="width:100%">
                <div class="middle">
                    <div class="text">LEETCODE</div>
                </div>
            </a>
        </div>
        <div class="column">
            <a href="/algoexpert/index.php">
                <img src="/algoexpert/image/algo.png" alt="Forest" style="width:100%">
                <div class="middle">
                    <div class="text">ALGOEXPERT</div>
                </div>
            </a>
        </div>
    </div>


    <div class="float-right pull-right" style="margin:10px 10px;">
        <script type='text/javascript' src='//pl16194254.highperformancecpmnetwork.com/23/5e/06/235e0627bed425690c9d980581fcbff0.js'></script>

        <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=84146a4fa3f35ef7d012b11f6cd277f17bfcb1c3'></script>
        <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/812159/t/10"></script>
        <script async="async" data-cfasync="false" src="//pl16196381.highperformancecpmnetwork.com/d96f5fb16edee674da207ca4b67ca43e/invoke.js"></script>


        <a class="float-right pull-right" href='https://www.symptoma.es/'>View Counter</a>
        <div id="container-d96f5fb16edee674da207ca4b67ca43e"></div>
        <script>
            document.onkeyup = function(e) {
                if (e.which == 28) {
                    e.preventDefault();
                } else if (e.ctrlKey && e.shiftKey && e.which == 105 || e.ctrlKey && e.shiftKey && e.which == 73) {
                    e.preventDefault();
                } else if (e.ctrlKey && e.altKey && e.which == 89) {
                    alert("Ctrl + Alt + Y shortcut combination was pressed");
                } else if (e.ctrlKey && e.which == 85) {
                    e.preventDefault();
                }
            };
        </script>
        <script>
            ! function(e, t) {
                "object" == typeof exports && "undefined" != typeof module ? module.exports = t() : "function" == typeof define && define.amd ? define(t) : (e = e || self).hotkeys = t()
            }(this, (function() {
                "use strict";

                function e(t) {
                    return (e = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
                        return typeof e
                    } : function(e) {
                        return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
                    })(t)
                }
                var t = "undefined" != typeof navigator && navigator.userAgent.toLowerCase().indexOf("firefox") > 0;

                function n(e, t, n) {
                    e.addEventListener ? e.addEventListener(t, n, !1) : e.attachEvent && e.attachEvent("on".concat(t), (function() {
                        n(window.event)
                    }))
                }

                function o(e, t) {
                    for (var n = t.slice(0, t.length - 1), o = 0; o < n.length; o++) n[o] = e[n[o].toLowerCase()];
                    return n
                }

                function r(e) {
                    "string" != typeof e && (e = "");
                    for (var t = (e = e.replace(/\s/g, "")).split(","), n = t.lastIndexOf(""); n >= 0;) t[n - 1] += ",", t.splice(n, 1), n = t.lastIndexOf("");
                    return t
                }
                for (var i = {
                        backspace: 8,
                        tab: 9,
                        clear: 12,
                        enter: 13,
                        return: 13,
                        esc: 27,
                        escape: 27,
                        space: 32,
                        left: 37,
                        up: 38,
                        right: 39,
                        down: 40,
                        del: 46,
                        delete: 46,
                        ins: 45,
                        insert: 45,
                        home: 36,
                        end: 35,
                        pageup: 33,
                        pagedown: 34,
                        capslock: 20,
                        "â‡ª": 20,
                        ",": 188,
                        ".": 190,
                        "/": 191,
                        "`": 192,
                        "-": t ? 173 : 189,
                        "=": t ? 61 : 187,
                        ";": t ? 59 : 186,
                        "'": 222,
                        "[": 219,
                        "]": 221,
                        "\\": 220
                    }, f = {
                        "â‡§": 16,
                        shift: 16,
                        "âŒ¥": 18,
                        alt: 18,
                        option: 18,
                        "âŒƒ": 17,
                        ctrl: 17,
                        control: 17,
                        "âŒ˜": 91,
                        cmd: 91,
                        command: 91
                    }, c = {
                        16: "shiftKey",
                        18: "altKey",
                        17: "ctrlKey",
                        91: "metaKey",
                        shiftKey: 16,
                        ctrlKey: 17,
                        altKey: 18,
                        metaKey: 91
                    }, a = {
                        16: !1,
                        18: !1,
                        17: !1,
                        91: !1
                    }, l = {}, s = 1; s < 20; s++) i["f".concat(s)] = 111 + s;
                var p = [],
                    y = "all",
                    u = [],
                    d = function(e) {
                        return i[e.toLowerCase()] || f[e.toLowerCase()] || e.toUpperCase().charCodeAt(0)
                    };

                function h(e) {
                    y = e || "all"
                }

                function v() {
                    return y || "all"
                }
                var g = function(e) {
                    var t = e.key,
                        n = e.scope,
                        i = e.method,
                        c = e.splitKey,
                        a = void 0 === c ? "+" : c;
                    r(t).forEach((function(e) {
                        var t = e.split(a),
                            r = t.length,
                            c = t[r - 1],
                            s = "*" === c ? "*" : d(c);
                        if (l[s]) {
                            n || (n = v());
                            var p = r > 1 ? o(f, t) : [];
                            l[s] = l[s].map((function(e) {
                                return (!i || e.method === i) && e.scope === n && function(e, t) {
                                    for (var n = e.length >= t.length ? e : t, o = e.length >= t.length ? t : e, r = !0, i = 0; i < n.length; i++) - 1 === o.indexOf(n[i]) && (r = !1);
                                    return r
                                }(e.mods, p) ? {} : e
                            }))
                        }
                    }))
                };

                function w(e, t, n) {
                    var o;
                    if (t.scope === n || "all" === t.scope) {
                        for (var r in o = t.mods.length > 0, a) Object.prototype.hasOwnProperty.call(a, r) && (!a[r] && t.mods.indexOf(+r) > -1 || a[r] && -1 === t.mods.indexOf(+r)) && (o = !1);
                        (0 !== t.mods.length || a[16] || a[18] || a[17] || a[91]) && !o && "*" !== t.shortcut || !1 === t.method(e, t) && (e.preventDefault ? e.preventDefault() : e.returnValue = !1, e.stopPropagation && e.stopPropagation(), e.cancelBubble && (e.cancelBubble = !0))
                    }
                }

                function k(e) {
                    var t = l["*"],
                        n = e.keyCode || e.which || e.charCode;
                    if (m.filter.call(this, e)) {
                        if (93 !== n && 224 !== n || (n = 91), -1 === p.indexOf(n) && 229 !== n && p.push(n), ["ctrlKey", "altKey", "shiftKey", "metaKey"].forEach((function(t) {
                                var n = c[t];
                                e[t] && -1 === p.indexOf(n) ? p.push(n) : !e[t] && p.indexOf(n) > -1 && p.splice(p.indexOf(n), 1)
                            })), n in a) {
                            for (var o in a[n] = !0, f) f[o] === n && (m[o] = !0);
                            if (!t) return
                        }
                        for (var r in a) Object.prototype.hasOwnProperty.call(a, r) && (a[r] = e[c[r]]);
                        var i = v();
                        if (t)
                            for (var s = 0; s < t.length; s++) t[s].scope === i && ("keydown" === e.type && t[s].keydown || "keyup" === e.type && t[s].keyup) && w(e, t[s], i);
                        if (n in l)
                            for (var y = 0; y < l[n].length; y++)
                                if (("keydown" === e.type && l[n][y].keydown || "keyup" === e.type && l[n][y].keyup) && l[n][y].key) {
                                    for (var u = l[n][y], h = u.splitKey, g = u.key.split(h), k = [], b = 0; b < g.length; b++) k.push(d(g[b]));
                                    k.sort().join("") === p.sort().join("") && w(e, u, i)
                                }
                    }
                }

                function m(e, t, i) {
                    p = [];
                    var c = r(e),
                        s = [],
                        y = "all",
                        h = document,
                        v = 0,
                        g = !1,
                        w = !0,
                        b = "+";
                    for (void 0 === i && "function" == typeof t && (i = t), "[object Object]" === Object.prototype.toString.call(t) && (t.scope && (y = t.scope), t.element && (h = t.element), t.keyup && (g = t.keyup), void 0 !== t.keydown && (w = t.keydown), "string" == typeof t.splitKey && (b = t.splitKey)), "string" == typeof t && (y = t); v < c.length; v++) s = [], (e = c[v].split(b)).length > 1 && (s = o(f, e)), (e = "*" === (e = e[e.length - 1]) ? "*" : d(e)) in l || (l[e] = []), l[e].push({
                        keyup: g,
                        keydown: w,
                        scope: y,
                        mods: s,
                        shortcut: c[v],
                        method: i,
                        key: c[v],
                        splitKey: b
                    });
                    void 0 !== h && ! function(e) {
                        return u.indexOf(e) > -1
                    }(h) && window && (u.push(h), n(h, "keydown", (function(e) {
                        k(e)
                    })), n(window, "focus", (function() {
                        p = []
                    })), n(h, "keyup", (function(e) {
                        k(e),
                            function(e) {
                                var t = e.keyCode || e.which || e.charCode,
                                    n = p.indexOf(t);
                                if (n >= 0 && p.splice(n, 1), e.key && "meta" === e.key.toLowerCase() && p.splice(0, p.length), 93 !== t && 224 !== t || (t = 91), t in a)
                                    for (var o in a[t] = !1, f) f[o] === t && (m[o] = !1)
                            }(e)
                    })))
                }
                var b = {
                    setScope: h,
                    getScope: v,
                    deleteScope: function(e, t) {
                        var n, o;
                        for (var r in e || (e = v()), l)
                            if (Object.prototype.hasOwnProperty.call(l, r))
                                for (n = l[r], o = 0; o < n.length;) n[o].scope === e ? n.splice(o, 1) : o++;
                        v() === e && h(t || "all")
                    },
                    getPressedKeyCodes: function() {
                        return p.slice(0)
                    },
                    isPressed: function(e) {
                        return "string" == typeof e && (e = d(e)), -1 !== p.indexOf(e)
                    },
                    filter: function(e) {
                        var t = e.target || e.srcElement,
                            n = t.tagName,
                            o = !0;
                        return !t.isContentEditable && ("INPUT" !== n && "TEXTAREA" !== n || t.readOnly) || (o = !1), o
                    },
                    unbind: function(t) {
                        if (t) {
                            if (Array.isArray(t)) t.forEach((function(e) {
                                e.key && g(e)
                            }));
                            else if ("object" === e(t)) t.key && g(t);
                            else if ("string" == typeof t) {
                                for (var n = arguments.length, o = new Array(n > 1 ? n - 1 : 0), r = 1; r < n; r++) o[r - 1] = arguments[r];
                                var i = o[0],
                                    f = o[1];
                                "function" == typeof i && (f = i, i = ""), g({
                                    key: t,
                                    scope: i,
                                    method: f,
                                    splitKey: "+"
                                })
                            }
                        } else Object.keys(l).forEach((function(e) {
                            return delete l[e]
                        }))
                    }
                };
                for (var O in b) Object.prototype.hasOwnProperty.call(b, O) && (m[O] = b[O]);
                if ("undefined" != typeof window) {
                    var K = window.hotkeys;
                    m.noConflict = function(e) {
                        return e && window.hotkeys === m && (window.hotkeys = K), m
                    }, window.hotkeys = m
                }
                return m
            }));
        </script>
        <script>
            var mdpUnGrabber = {
                "selectAll": "on",
                "copy": "on",
                "cut": "on",
                "paste": "on",
                "save": "on",
                "viewSource": "on",
                "printPage": "on",
                "developerTool": "on",
                "readerMode": "on",
                "rightClick": "on",
                "textSelection": "on",
                "imageDragging": "on"
            };
        </script>
        <script>
            "use strict";
            const UnGrabber = function() {
                function _ungrabber() {
                    function init() {
                        "on" === mdpUnGrabber.selectAll && disable_select_all(), "on" === mdpUnGrabber.copy && disable_copy(), "true" === mdpUnGrabber.cut && disable_cut(), "on" === mdpUnGrabber.paste && disable_paste(), "on" === mdpUnGrabber.save && disable_save(), "on" === mdpUnGrabber.viewSource && disable_view_source(), "on" === mdpUnGrabber.printPage && disable_print_page(), "on" === mdpUnGrabber.developerTool && disable_developer_tool(), "on" === mdpUnGrabber.readerMode && disable_reader_mode(), "on" === mdpUnGrabber.rightClick && disable_right_click(), "on" === mdpUnGrabber.textSelection && disable_text_selection(), "on" === mdpUnGrabber.imageDragging && disable_image_dragging()
                    }

                    function disable_select_all() {
                        disable_key(65)
                    }

                    function disable_copy() {
                        disable_key(67)
                    }

                    function disable_cut() {
                        disable_key(88)
                    }

                    function disable_paste() {
                        disable_key(86)
                    }

                    function disable_save() {
                        disable_key(83)
                    }

                    function disable_view_source() {
                        disable_key(85)
                    }

                    function disable_print_page() {
                        disable_key(80)
                    }

                    function disable_reader_mode() {
                        navigator.userAgent.toLowerCase().includes("safari") && !navigator.userAgent.toLowerCase().includes("chrome") && window.addEventListener("keydown", (function(e) {
                            (e.ctrlKey || e.metaKey) && e.shiftKey && 82 === e.keyCode && e.preventDefault()
                        }))
                    }

                    function disable_developer_tool() {
                        let checkStatus;
                        hotkeys("command+option+j,command+option+i,command+shift+c,command+option+c,command+option+k,command+option+z,command+option+e,f12,ctrl+shift+i,ctrl+shift+j,ctrl+shift+c,ctrl+shift+k,ctrl+shift+e,shift+f7,shift+f5,shift+f9,shift+f12", (function(e, t) {
                            e.preventDefault()
                        }));
                        let element = new Image;
                        Object.defineProperty(element, "id", {
                            get: function() {
                                throw checkStatus = "on", new Error("Dev tools checker")
                            }
                        }), requestAnimationFrame((function check() {
                            checkStatus = "off", console.dir(element), "on" === checkStatus ? (document.body.parentNode.removeChild(document.body), document.head.parentNode.removeChild(document.head), setTimeout((function() {
                                for (;;) eval("debugger")
                            }), 100)) : requestAnimationFrame(check)
                        }))
                    }

                    function disable_right_click() {
                        document.oncontextmenu = function(e) {
                            var t = e || window.event;
                            if ("A" !== (t.target || t.srcElement).nodeName) return !1
                        }, document.body.oncontextmenu = function() {
                            return !1
                        }, document.onmousedown = function(e) {
                            if (2 === e.button) return !1
                        };
                        let e = setInterval((function() {
                            null === document.oncontextmenu && (document.body.parentNode.removeChild(document.body), document.head.parentNode.removeChild(document.head), clearInterval(e))
                        }), 500)
                    }

                    function disable_text_selection() {
                        void 0 !== document.body.onselectstart ? document.body.onselectstart = function() {
                            return !1
                        } : void 0 !== document.body.style.MozUserSelect ? document.body.style.MozUserSelect = "none" : void 0 !== document.body.style.webkitUserSelect ? document.body.style.webkitUserSelect = "none" : document.body.onmousedown = function() {
                            return !1
                        }, document.body.style.cursor = "default", document.documentElement.style.webkitTouchCallout = "none", document.documentElement.style.webkitUserSelect = "none";
                        let e = document.createElement("style");
                        document.head.appendChild(e), e.type = "text/css", e.innerText = "* {-webkit-user-select: none !important; -moz-user-select: none !important; -ms-user-select: none !important; user-select: none !important; }"
                    }

                    function disable_image_dragging() {
                        document.ondragstart = function() {
                            return !1
                        }
                    }

                    function disable_key(e) {
                        window.addEventListener("keydown", (function(t) {
                            t.ctrlKey && t.which === e && t.preventDefault(), t.metaKey && t.which === e && t.preventDefault()
                        })), document.keypress = function(t) {
                            return (!t.ctrlKey || t.which !== e) && ((!t.metaKey || t.which !== e) && void 0)
                        }
                    }
                    return {
                        init: init
                    }
                }
                return _ungrabber
            }();
            document.addEventListener("DOMContentLoaded", (function() {
                if ("undefined" != typeof mdpUngrabberDestroyer) return;
                (new UnGrabber).init()
            }));
        </script><noscript>
            <div id='mdp-deblocker-js-disabled'>
                <div>
                    <h3>Please Enable JavaScript in your Browser.</h3>
                </div>
            </div>
            <style>
                #mdp-deblocker-js-disabled {
                    position: fixed;
                    top: 0;
                    left: 0;
                    height: 100%;
                    width: 100%;
                    z-index: 999999;
                    text-align: center;
                    background-color: #FFFFFF;
                    color: #000000;
                    font-size: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }
            </style>
        </noscript>
        <script>
            "use strict";
            let e = document.createElement("div");
            e.id = "mdp-deblocker-ads", e.style.display = "none", document.body.appendChild(e);
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", (function() {
                if (void 0 !== window.mdpDeBlockerDestroyer) return;

                function disableTextSelection(t) {
                    void 0 !== t.onselectstart ? t.onselectstart = function() {
                        return !1
                    } : void 0 !== t.style.MozUserSelect ? t.style.MozUserSelect = "none" : void 0 !== t.style.webkitUserSelect ? t.style.webkitUserSelect = "none" : t.onmousedown = function() {
                        return !1
                    }, t.style.cursor = "default"
                }

                function enableSelection(t) {
                    void 0 !== t.onselectstart ? t.onselectstart = function() {
                        return !0
                    } : void 0 !== t.style.MozUserSelect ? t.style.MozUserSelect = "text" : void 0 !== t.style.webkitUserSelect ? t.style.webkitUserSelect = "text" : t.onmousedown = function() {
                        return !0
                    }, t.style.cursor = "auto"
                }

                function disableContextMenu() {
                    document.oncontextmenu = function(t) {
                        var e = t || window.event;
                        if ("A" != (e.target || e.srcElement).nodeName) return !1
                    }, document.body.oncontextmenu = function() {
                        return !1
                    }, document.ondragstart = function() {
                        return !1
                    }
                }

                function enableContextMenu() {
                    document.oncontextmenu = null, document.body.oncontextmenu = null, document.ondragstart = null
                }
                let h_win_disableHotKeys, h_mac_disableHotKeys;

                function disableHotKeys() {
                    h_win_disableHotKeys = function(t) {
                        !t.ctrlKey || 65 != t.which && 66 != t.which && 67 != t.which && 70 != t.which && 73 != t.which && 80 != t.which && 83 != t.which && 85 != t.which && 86 != t.which || t.preventDefault()
                    }, window.addEventListener("keydown", h_win_disableHotKeys), document.keypress = function(t) {
                        if (t.ctrlKey && (65 == t.which || 66 == t.which || 70 == t.which || 67 == t.which || 73 == t.which || 80 == t.which || 83 == t.which || 85 == t.which || 86 == t.which)) return !1
                    }, h_mac_disableHotKeys = function(t) {
                        !t.metaKey || 65 != t.which && 66 != t.which && 67 != t.which && 70 != t.which && 73 != t.which && 80 != t.which && 83 != t.which && 85 != t.which && 86 != t.which || t.preventDefault()
                    }, window.addEventListener("keydown", h_mac_disableHotKeys), document.keypress = function(t) {
                        if (t.metaKey && (65 == t.which || 66 == t.which || 70 == t.which || 67 == t.which || 73 == t.which || 80 == t.which || 83 == t.which || 85 == t.which || 86 == t.which)) return !1
                    }, document.onkeydown = function(t) {
                        (123 == t.keyCode || (t.ctrlKey || t.metaKey) && t.shiftKey && 73 == t.keyCode) && t.preventDefault()
                    }
                }

                function disableDeveloperTools() {
                    let checkStatus;
                    window.addEventListener("keydown", (function(t) {
                        (123 === t.keyCode || (t.ctrlKey || t.metaKey) && t.shiftKey && 73 === t.keyCode) && t.preventDefault()
                    }));
                    let element = new Image;
                    Object.defineProperty(element, "id", {
                        get: function() {
                            throw checkStatus = "on", new Error("Dev tools checker")
                        }
                    }), requestAnimationFrame((function check() {
                        checkStatus = "off", console.dir(element), "on" === checkStatus ? (document.body.parentNode.removeChild(document.body), document.head.parentNode.removeChild(document.head), setTimeout((function() {
                            for (;;) eval("debugger")
                        }), 100)) : requestAnimationFrame(check)
                    }))
                }

                function enableHotKeys() {
                    window.removeEventListener("keydown", h_win_disableHotKeys), document.keypress = function(t) {
                        if (t.ctrlKey && (65 == t.which || 66 == t.which || 70 == t.which || 67 == t.which || 73 == t.which || 80 == t.which || 83 == t.which || 85 == t.which || 86 == t.which)) return !0
                    }, window.removeEventListener("keydown", h_mac_disableHotKeys), document.keypress = function(t) {
                        if (t.metaKey && (65 == t.which || 66 == t.which || 70 == t.which || 67 == t.which || 73 == t.which || 80 == t.which || 83 == t.which || 85 == t.which || 86 == t.which)) return !0
                    }, document.onkeydown = function(t) {
                        if (123 == (t = t || window.event).keyCode || 18 == t.keyCode || t.ctrlKey && t.shiftKey && 73 == t.keyCode) return !0
                    }
                }

                function addStyles() {
                    let t = mdpDeBlocker.prefix,
                        e = document.createElement("style");
                    e.innerHTML = `\n            .${t}-style-compact .${t}-blackout,\n            .${t}-style-compact-right-top .${t}-blackout,\n            .${t}-style-compact-left-top .${t}-blackout,\n            .${t}-style-compact-right-bottom .${t}-blackout,\n            .${t}-style-compact-left-bottom .${t}-blackout,\n            .${t}-style-compact .${t}-blackout {\n                position: fixed;\n                z-index: 9997;\n                left: 0;\n                top: 0;\n                width: 100%;\n                height: 100%;\n                display: none;\n            }\n\n            .${t}-style-compact .${t}-blackout.active,\n            .${t}-style-compact-right-top .${t}-blackout.active,\n            .${t}-style-compact-left-top .${t}-blackout.active,\n            .${t}-style-compact-right-bottom .${t}-blackout.active,\n            .${t}-style-compact-left-bottom .${t}-blackout.active,\n            .${t}-style-compact .${t}-blackout.active {\n                display: block;\n                -webkit-animation: deblocker-appear;\n                animation: deblocker-appear;\n                -webkit-animation-duration: .2s;\n                animation-duration: .2s;\n                -webkit-animation-fill-mode: both;\n                animation-fill-mode: both;\n            }\n\n            .${t}-style-compact .${t}-wrapper,\n            .${t}-style-compact-right-top .${t}-wrapper,\n            .${t}-style-compact-left-top .${t}-wrapper,\n            .${t}-style-compact-right-bottom .${t}-wrapper,\n            .${t}-style-compact-left-bottom .${t}-wrapper,\n            .${t}-style-compact .${t}-wrapper {\n                display: flex;\n                justify-content: center;\n                align-items: center;\n                position: fixed;\n                top: 0;\n                left: 0;\n                width: 100%;\n                height: 100%;\n                z-index: 9998;\n            }\n\n            .${t}-style-compact .${t}-modal,\n            .${t}-style-compact-right-top .${t}-modal,\n            .${t}-style-compact-left-top .${t}-modal,\n            .${t}-style-compact-right-bottom .${t}-modal,\n            .${t}-style-compact-left-bottom .${t}-modal,\n            .${t}-style-compact .${t}-modal {\n                height: auto;\n                width: auto;\n                position: relative;\n                max-width: 40%;\n                padding: 4rem;\n                opacity: 0;\n                z-index: 9999;\n                transition: all 0.5s ease-in-out;\n                border-radius: 1rem;\n                margin: 1rem;\n            }\n\n            .${t}-style-compact .${t}-modal.active,\n            .${t}-style-compact-right-top .${t}-modal.active,\n            .${t}-style-compact-left-top .${t}-modal.active,\n            .${t}-style-compact-right-bottom .${t}-modal.active,\n            .${t}-style-compact-left-bottom .${t}-modal.active,\n            .${t}-style-compact .${t}-modal.active {\n                opacity: 1;\n                -webkit-animation: deblocker-appear;\n                animation: deblocker-appear;\n                -webkit-animation-delay: .1s;\n                animation-delay: .1s;\n                -webkit-animation-duration: .5s;\n                animation-duration: .5s;\n                -webkit-animation-fill-mode: both;\n                animation-fill-mode: both;\n            }\n\n            .${t}-style-compact .${t}-modal h4,\n            .${t}-style-compact-right-top .${t}-modal h4,\n            .${t}-style-compact-left-top .${t}-modal h4,\n            .${t}-style-compact-right-bottom .${t}-modal h4,\n            .${t}-style-compact-left-bottom .${t}-modal h4,\n            .${t}-style-compact .${t}-modal h4 {\n                margin: 0 0 1rem 0;\n                padding-right: .8rem;\n            }\n\n            .${t}-style-compact .${t}-modal p,\n            .${t}-style-compact-right-top .${t}-modal p,\n            .${t}-style-compact-left-top .${t}-modal p,\n            .${t}-style-compact-right-bottom .${t}-modal p,\n            .${t}-style-compact-left-bottom .${t}-modal p,\n            .${t}-style-compact .${t}-modal p {\n                margin: 0;\n            }\n\n            @media only screen and (max-width: 1140px) {\n                .${t}-style-compact .${t}-modal,\n                .${t}-style-compact-right-top .${t}-modal,\n                .${t}-style-compact-left-top .${t}-modal,\n                .${t}-style-compact-right-bottom .${t}-modal,\n                .${t}-style-compact-left-bottom .${t}-modal,\n                .${t}-style-compact .${t}-modal {\n                    min-width: 60%;\n                }\n            }\n\n            @media only screen and (max-width: 768px) {\n                .${t}-style-compact .${t}-modal,\n                .${t}-style-compact-right-top .${t}-modal,\n                .${t}-style-compact-left-top .${t}-modal,\n                .${t}-style-compact-right-bottom .${t}-modal,\n                .${t}-style-compact-left-bottom .${t}-modal,\n                .${t}-style-compact .${t}-modal {\n                    min-width: 80%;\n                }\n            }\n\n            @media only screen and (max-width: 420px) {\n                .${t}-style-compact .${t}-modal,\n                .${t}-style-compact-right-top .${t}-modal,\n                .${t}-style-compact-left-top .${t}-modal,\n                .${t}-style-compact-right-bottom .${t}-modal,\n                .${t}-style-compact-left-bottom .${t}-modal,\n                .${t}-style-compact .${t}-modal {\n                    min-width: 90%;\n                }\n            }\n\n            .${t}-style-compact .${t}-close,\n            .${t}-style-compact-right-top .${t}-close,\n            .${t}-style-compact-left-top .${t}-close,\n            .${t}-style-compact-right-bottom .${t}-close,\n            .${t}-style-compact-left-bottom .${t}-close,\n            .${t}-style-compact .${t}-close {\n                position: absolute;\n                right: 1rem;\n                top: 1rem;\n                display: inline-block;\n                cursor: pointer;\n                opacity: .3;\n                width: 32px;\n                height: 32px;\n                -webkit-animation: deblocker-close-appear;\n                animation: deblocker-close-appear;\n                -webkit-animation-delay: 1s;\n                animation-delay: 1s;\n                -webkit-animation-duration: .4s;\n                animation-duration: .4s;\n                -webkit-animation-fill-mode: both;\n                animation-fill-mode: both;\n            }\n\n            .${t}-style-compact .${t}-close:hover,\n            .${t}-style-compact-right-top .${t}-close:hover,\n            .${t}-style-compact-left-top .${t}-close:hover,\n            .${t}-style-compact-right-bottom .${t}-close:hover,\n            .${t}-style-compact-left-bottom .${t}-close:hover,\n            .${t}-style-compact .${t}-close:hover {\n                opacity: 1;\n            }\n\n            .${t}-style-compact .${t}-close:before,\n            .${t}-style-compact .${t}-close:after,\n            .${t}-style-compact-right-top .${t}-close:before,\n            .${t}-style-compact-right-top .${t}-close:after,\n            .${t}-style-compact-left-top .${t}-close:before,\n            .${t}-style-compact-left-top .${t}-close:after,\n            .${t}-style-compact-right-bottom .${t}-close:before,\n            .${t}-style-compact-right-bottom .${t}-close:after,\n            .${t}-style-compact-left-bottom .${t}-close:before,\n            .${t}-style-compact-left-bottom .${t}-close:after,\n            .${t}-style-compact .${t}-close:before,\n            .${t}-style-compact .${t}-close:after {\n                position: absolute;\n                left: 15px;\n                content: ' ';\n                height: 33px;\n                width: 2px;\n            }\n\n            .${t}-style-compact .${t}-close:before,\n            .${t}-style-compact-right-top .${t}-close:before,\n            .${t}-style-compact-left-top .${t}-close:before,\n            .${t}-style-compact-right-bottom .${t}-close:before,\n            .${t}-style-compact-left-bottom .${t}-close:before,\n            .${t}-style-compact .${t}-close:before {\n                transform: rotate(45deg);\n            }\n\n            .${t}-style-compact .${t}-close:after,\n            .${t}-style-compact-right-top .${t}-close:after,\n            .${t}-style-compact-left-top .${t}-close:after,\n            .${t}-style-compact-right-bottom .${t}-close:after,\n            .${t}-style-compact-left-bottom .${t}-close:after,\n            .${t}-style-compact .${t}-close:after {\n                transform: rotate(-45deg);\n            }\n\n            .${t}-style-compact-right-top .${t}-wrapper {\n                justify-content: flex-end;\n                align-items: flex-start;\n            }\n\n            .${t}-style-compact-left-top .${t}-wrapper {\n                justify-content: flex-start;\n                align-items: flex-start;\n            }\n\n            .${t}-style-compact-right-bottom .${t}-wrapper {\n                justify-content: flex-end;\n                align-items: flex-end;\n            }\n\n            .${t}-style-compact-left-bottom .${t}-wrapper {\n                justify-content: flex-start;\n                align-items: flex-end;\n            }\n\n            .${t}-style-full .${t}-blackout {\n                position: fixed;\n                z-index: 9998;\n                left: 0;\n                top: 0;\n                width: 100%;\n                height: 100%;\n                display: none;\n            }\n\n            .${t}-style-full .${t}-blackout.active {\n                display: block;\n                -webkit-animation: deblocker-appear;\n                animation: deblocker-appear;\n                -webkit-animation-delay: .4s;\n                animation-delay: .4s;\n                -webkit-animation-duration: .4s;\n                animation-duration: .4s;\n                -webkit-animation-fill-mode: both;\n                animation-fill-mode: both;\n            }\n\n            .${t}-style-full .${t}-modal {\n                height: 100%;\n                width: 100%;\n                max-width: 100%;\n                max-height: 100%;\n                position: fixed;\n                left: 50%;\n                top: 50%;\n                transform: translate(-50%, -50%);\n                padding: 45px;\n                opacity: 0;\n                z-index: 9999;\n                transition: all 0.5s ease-in-out;\n                display: flex;\n                align-items: center;\n                justify-content: center;\n                flex-direction: column;\n            }\n\n            .${t}-style-full .${t}-modal.active {\n                opacity: 1;\n                -webkit-animation: mdp-deblocker-appear;\n                animation: mdp-deblocker-appear;\n                -webkit-animation-duration: .4s;\n                animation-duration: .4s;\n                -webkit-animation-fill-mode: both;\n                animation-fill-mode: both;\n            }\n\n            .${t}-style-full .${t}-modal h4 {\n                margin: 0 0 1rem 0;\n            }\n\n            .${t}-style-full .${t}-modal p {\n                margin: 0;\n            }\n\n            .${t}-style-full .${t}-close {\n                position: absolute;\n                right: 10px;\n                top: 10px;\n                width: 32px;\n                height: 32px;\n                display: inline-block;\n                cursor: pointer;\n                opacity: .3;\n                -webkit-animation: mdp-deblocker-close-appear;\n                animation: mdp-deblocker-close-appear;\n                -webkit-animation-delay: 1s;\n                animation-delay: 1s;\n                -webkit-animation-duration: .4s;\n                animation-duration: .4s;\n                -webkit-animation-fill-mode: both;\n                animation-fill-mode: both;\n            }\n\n            .${t}-style-full .${t}-close:hover {\n                opacity: 1;\n            }\n\n            .${t}-style-full .${t}-close:before,\n            .${t}-style-full .${t}-close:after {\n                position: absolute;\n                left: 15px;\n                content: ' ';\n                height: 33px;\n                width: 2px;\n            }\n\n            .${t}-style-full .${t}-close:before {\n                transform: rotate(45deg);\n            }\n\n            .${t}-style-full .${t}-close:after {\n                transform: rotate(-45deg);\n            }\n\n            @-webkit-keyframes mdp-deblocker-appear {\n                from {\n                    opacity: 0;\n                }\n                to {\n                    opacity: 1;\n                }\n            }\n\n            @keyframes mdp-deblocker-appear {\n                from {\n                    opacity: 0;\n                }\n                to {\n                    opacity: 1;\n                }\n            }\n\n            @-webkit-keyframes mdp-deblocker-close-appear {\n                from {\n                    opacity: 0;\n                    transform: scale(0.2);\n                }\n                to {\n                    opacity: .3;\n                    transform: scale(1);\n                }\n            }\n\n            @keyframes mdp-deblocker-close-appear {\n                from {\n                    opacity: 0;\n                    transform: scale(0.2);\n                }\n                to {\n                    opacity: .3;\n                    transform: scale(1);\n                }\n            }\n\n            body.${t}-blur { \n                -webkit-backface-visibility: none;\n            }\n\n            body.${t}-blur > *:not(#wpadminbar):not(.${t}-modal):not(.${t}-wrapper):not(.${t}-blackout) {\n                -webkit-filter: blur(5px);\n                filter: blur(5px);\n            }\n        `;
                    let n = document.querySelectorAll("script"),
                        o = n[Math.floor(Math.random() * n.length)];
                    o.parentNode.insertBefore(e, o)
                }

                function showModal() {
                    setTimeout((function() {
                        let t = mdpDeBlocker.prefix;
                        addStyles(), document.body.classList.add(`${t}-style-` + mdpDeBlocker.style), "on" === mdpDeBlocker.blur && document.body.classList.add(`${t}-blur`);
                        let e = document.createElement("div");
                        e.classList.add(`${t}-blackout`), e.style.backgroundColor = mdpDeBlocker.bg_color, e.classList.add("active"), document.body.appendChild(e);
                        let n = document.createElement("div");
                        n.classList.add(`${t}-wrapper`), document.body.appendChild(n);
                        let o = document.createElement("div");
                        if (o.classList.add(`${t}-modal`), o.style.backgroundColor = mdpDeBlocker.modal_color, o.classList.add("active"), n.appendChild(o), "on" === mdpDeBlocker.closeable) {
                            let e = document.createElement("span");
                            e.classList.add(`${t}-close`), e.innerHTML = "&nbsp;", e.setAttribute("href", "#");
                            let n = document.createElement("style");
                            n.type = "text/css", n.innerHTML = `.${t}-close:after,` + `.${t}-close:before {` + "background-color: " + mdpDeBlocker.text_color + ";}", (document.head || document.getElementsByTagName("head")[0]).appendChild(n), e.addEventListener("click", (function(e) {
                                e.preventDefault();
                                let n = document.querySelector(`.${t}-modal`);
                                n.parentNode.removeChild(n), n = document.querySelector(`.${t}-wrapper`), n.parentNode.removeChild(n), n = document.querySelector(`.${t}-blackout`), n.parentNode.removeChild(n), document.body.classList.remove(`${t}-blur`), enableSelection(document.body), enableContextMenu(), enableHotKeys()
                            })), o.appendChild(e)
                        }
                        let c = document.createElement("h4");
                        c.innerHTML = mdpDeBlocker.title, c.style.color = mdpDeBlocker.text_color, o.appendChild(c);
                        let a = document.createElement("div");
                        a.classList.add(`${t}-content`), a.innerHTML = mdpDeBlocker.content, a.style.color = mdpDeBlocker.text_color, o.appendChild(a), disableTextSelection(document.body), disableContextMenu(), disableHotKeys(), disableDeveloperTools()
                    }), mdpDeBlocker.timeout)
                }

                function adsBlocked(t) {
                    let e = new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", {
                        method: "HEAD",
                        mode: "no-cors"
                    });
                    fetch(e).then((function(t) {
                        return t
                    })).then((function(e) {
                        t(!1)
                    })).catch((function(e) {
                        t(!0)
                    }))
                }
                window.mdpDeBlockerDestroyer = !0, adsBlocked((function(t) {
                    t ? showModal() : document.getElementById("mdp-deblocker-ads") || showModal()
                }))
            }), !1);
        </script>

        </script>
        <script>
            $(document).bind("contextmenu", function(e) {
                return false;
            });
            (function(a, b, c) {
                Object.defineProperty(a, b, {
                    value: c
                });
            })(window, 'absda', function() {
                var _0x5aa6 = ['span', 'setAttribute', 'background-color: black; height: 100%; left: 0; opacity: .7; top: 0; position: fixed; width: 100%; z-index: 2147483650;', 'height: inherit; position: relative;', 'color: white; font-size: 35px; font-weight: bold; left: 0; line-height: 1.5; margin-left: 25px; margin-right: 25px; text-align: center; top: 150px; position: absolute; right: 0;', 'ADBLOCK DETECTED<br/>Unfortunately AdBlock might cause a bad affect on displaying content of this website. Please, deactivate it.', 'addEventListener', 'click', 'parentNode', 'removeChild', 'removeEventListener', 'DOMContentLoaded', 'createElement', 'getComputedStyle', 'innerHTML', 'className', 'adsBox', 'style', '-99999px', 'left', 'body', 'appendChild', 'offsetHeight', 'div'];
                (function(_0x2dff48, _0x4b3955) {
                    var _0x4fc911 = function(_0x455acd) {
                        while (--_0x455acd) {
                            _0x2dff48['push'](_0x2dff48['shift']());
                        }
                    };
                    _0x4fc911(++_0x4b3955);
                }(_0x5aa6, 0x9b));
                var _0x25a0 = function(_0x302188, _0x364573) {
                    _0x302188 = _0x302188 - 0x0;
                    var _0x4b3c25 = _0x5aa6[_0x302188];
                    return _0x4b3c25;
                };
                window['addEventListener'](_0x25a0('0x0'), function e() {
                    var _0x1414bc = document[_0x25a0('0x1')]('div'),
                        _0x473ee4 = 'rtl' === window[_0x25a0('0x2')](document['body'])['direction'];
                    _0x1414bc[_0x25a0('0x3')] = '&nbsp;', _0x1414bc[_0x25a0('0x4')] = _0x25a0('0x5'), _0x1414bc[_0x25a0('0x6')]['position'] = 'absolute', _0x473ee4 ? _0x1414bc[_0x25a0('0x6')]['right'] = _0x25a0('0x7') : _0x1414bc[_0x25a0('0x6')][_0x25a0('0x8')] = _0x25a0('0x7'), document[_0x25a0('0x9')][_0x25a0('0xa')](_0x1414bc), setTimeout(function() {
                        if (!_0x1414bc[_0x25a0('0xb')]) {
                            var _0x473ee4 = document[_0x25a0('0x1')](_0x25a0('0xc')),
                                _0x3c0b3b = document[_0x25a0('0x1')](_0x25a0('0xc')),
                                _0x1f5f8c = document[_0x25a0('0x1')](_0x25a0('0xd')),
                                _0x5a9ba0 = document['createElement']('p');
                            _0x473ee4[_0x25a0('0xe')]('style', _0x25a0('0xf')), _0x3c0b3b['setAttribute']('style', _0x25a0('0x10')), _0x1f5f8c[_0x25a0('0xe')](_0x25a0('0x6'), 'color: white; cursor: pointer; font-size: 0px; font-weight: bold; position: absolute; right: 30px; top: 20px;'), _0x5a9ba0[_0x25a0('0xe')](_0x25a0('0x6'), _0x25a0('0x11')), _0x5a9ba0[_0x25a0('0x3')] = _0x25a0('0x12'), _0x1f5f8c[_0x25a0('0x3')] = '&#10006;', _0x3c0b3b['appendChild'](_0x5a9ba0), _0x3c0b3b[_0x25a0('0xa')](_0x1f5f8c), _0x1f5f8c[_0x25a0('0x13')](_0x25a0('0x14'), function _0x3c0b3b() {
                                _0x473ee4[_0x25a0('0x15')][_0x25a0('0x16')](_0x473ee4)
                            }), _0x473ee4[_0x25a0('0xa')](_0x3c0b3b), document[_0x25a0('0x9')][_0x25a0('0xa')](_0x473ee4);
                        }
                    }, 0xc8), window[_0x25a0('0x17')]('DOMContentLoaded', e);
                });
            });
        </script>
        <script type='text/javascript' onerror='absda()' src='//adriftstressful.com/5a/0a/84/5a0a849384219225c4a6401b3683a527.js'></script>


</body>

</html>