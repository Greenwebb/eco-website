<!DOCTYPE html>
<html lang="en-US" class="no-js scheme_light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="profile" href="//gmpg.org/xfn/11">
    <title>Agro Services &ndash; EcoAgro</title>
    <meta name="robots" content="max-image-preview:large">
   

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/materialdesignicons.min.css">
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "js/wp-emoji-release.min.js"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                    case "emoji":
                        return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                            "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
    </script>

    <style type="text/css">
        /* Styles for larger screens (not mobile) */
        .mobile-view {
            display: none; /* Show the element by default */
        }

        /* Media query for screens with a maximum width of 767px (typical for mobile devices) */
        @media screen and (max-width: 767px) {
        /* Styles for mobile screens */
        .mobile-view {
            display: block; /* Hide the element on mobile screens */
            padding:2%;
        }
        }
        /* Styles for the modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .close-modal {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            cursor: pointer;
        }
        .items-row {
            margin-top: 10%;
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .item2{
            border-left: 1px solid #DDDAD3 ;
        }
        .item1,
        .item2 {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center; /* Center content vertically */
        }

        /* Make the images responsive */
        .item1 img,
        .item2 img {
            max-width: 100%; /* Ensure the image doesn't exceed its container's width */
            height: auto; /* Maintain aspect ratio */
        }



         img.wp-smiley,
        img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
      }
    </style>
    <link property="stylesheet" rel="stylesheet" id="trx_addons-icons-css" href="css/css-trx_addons_icons.css"type="text/css" media="all">
    <link property="stylesheet" rel="stylesheet" href="css/prod.css" type="text/css" media="all">
    <link property="stylesheet" rel="stylesheet" id="trx_demo_icons-css" href="css/css-trx_demo_icons.css" type="text/css" media="all">
    <link property="stylesheet" rel="stylesheet" id="trx_demo_icons_animation-css" href="css/css-animation.css" type="text/css" media="all">
    <link property="stylesheet" rel="stylesheet" id="agricola-font-halyard-display-css" href="https://use.typekit.net/xog3vbp.css" type="text/css" media="all">
    <link property="stylesheet" rel="stylesheet" id="agricola-font-google_fonts-css" href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;subset=latin,latin-ext&amp;display=swap" type="text/css" media="all">
    <link property="stylesheet" rel="stylesheet" id="agricola-fontello-css" href="css/css-fontello.css" type="text/css" media="all">
    <link property="stylesheet" rel="stylesheet" id="sbi_styles-css" href="css/css-sbi-styles.min.css" type="text/css" media="all">
    <link property="stylesheet" rel="stylesheet" id="wp-block-library-css" href="css/block-library-style.min.css" type="text/css" media="all">
    <link property="stylesheet" rel="stylesheet" id="wc-blocks-vendors-style-css" href="css/build-wc-blocks-vendors-style.css" type="text/css" media="all">
    <link property="stylesheet" rel="stylesheet" id="wc-blocks-style-css" href="css/build-wc-blocks-style.css" type="text/css" media="all">
    <style id="classic-theme-styles-inline-css" type="text/css">
    /*! This file is auto-generated */
    .wp-block-button__link {
        color: #fff;
        background-color: #32373c;
        border-radius: 9999px;
        box-shadow: none;
        text-decoration: none;
        padding: calc(.667em + 2px) calc(1.333em + 2px);
        font-size: 1.125em
    }

    .wp-block-file__button {
        background: #32373c;
        color: #fff;
        text-decoration: none
    }
    </style>
    <style id="global-styles-inline-css" type="text/css">
    body {
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--color--bg-color: #FAF7F0;
        --wp--preset--color--bd-color: #DDDAD3;
        --wp--preset--color--text-dark: #0A1108;
        --wp--preset--color--text-light: #9D9890;
        --wp--preset--color--text-link: #770614;
        --wp--preset--color--text-hover: #DCB000;
        --wp--preset--color--text-link-2: #29444a;
        --wp--preset--color--text-hover-2: #80AB3E;
        --wp--preset--color--text-link-3: #7198BA;
        --wp--preset--color--text-hover-3: #4F769D;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
        --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
        --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
    }

    :where(.is-layout-flex) {
        gap: 0.5em;
    }

    :where(.is-layout-grid) {
        gap: 0.5em;
    }

    body .is-layout-flow>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-flow>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-flow>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-constrained>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-constrained>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained>.alignwide {
        max-width: var(--wp--style--global--wide-size);
    }

    body .is-layout-flex {
        display: flex;
    }

    body .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
    }

    body .is-layout-flex>* {
        margin: 0;
    }

    body .is-layout-grid {
        display: grid;
    }

    body .is-layout-grid>* {
        margin: 0;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
    }

    :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
    }

    .wp-block-navigation a:where(:not(.wp-element-button)) {
        color: inherit;
    }

    :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
    }

    .wp-block-pullquote {
        font-size: 1.5em;
        line-height: 1.6;
    }
    </style>
    <link property="stylesheet" rel="stylesheet" id="advanced-popups-css" href="css/css-advanced-popups-public.css"type="text/css" media="all">
    <link property="stylesheet" rel="stylesheet" id="contact-form-7-css" href="css/css-styles.css" type="text/css"media="all">
    <link property="stylesheet" rel="stylesheet" id="powertip-css" href="css/css-jquery.powertip.min.css"type="text/css" media="all">
    <link property="stylesheet" rel="stylesheet" id="maps-points-css" href="css/css-maps_points.css" type="text/css"media="all">
    <link property="stylesheet" rel="stylesheet" id="magnific-popup-css" href="css/magnific-magnific-popup.min.css"type="text/css" media="all">
    <link property="stylesheet" rel="stylesheet" id="trx_demo_panels-css" href="css/css-trx_demo_panels.css"type="text/css" media="all">

    <link property="stylesheet" rel='stylesheet' id='magnific-popup-css' href='css/plugins/trx_addons/js/magnific/magnific-popup.min.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='trx_demo_panels-css' href='css/plugins/trx_demo/css/trx_demo_panels.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='woocommerce-layout-css' href='css/plugins/woocommerce/assets/css/woocommerce-layout.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='woocommerce-smallscreen-css' href='css/plugins/woocommerce/assets/css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
    <link property="stylesheet" rel='stylesheet' id='woocommerce-general-css' href='css/plugins/woocommerce/assets/css/woocommerce.css' type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>

    <link rel="stylesheet" href="css/bd-wizard.css">

    <link property="stylesheet" rel="preload" as="font" type="font/woff2" crossorigin="anonymous"
        id="tinvwl-webfont-font-css"
        href="https://agricola.axiomthemes.com/wp-content/plugins/ti-woocommerce-wishlist/fonts/tinvwl-webfont.woff2?ver=xu2uyi"
        media="all">
    <link property="stylesheet" rel="stylesheet" id="tinvwl-webfont-css" href="css/css-webfont.min.css" type="text/css"
        media="all">
    <link property="stylesheet" rel="stylesheet" id="tinvwl-css" href="css/css-public.min.css" type="text/css"
        media="all">
    <link property="stylesheet" rel="stylesheet" id="elementor-icons-css" href="css/css-elementor-icons.min.css"
        type="text/css" media="all">
    <link property="stylesheet" rel="stylesheet" id="elementor-frontend-legacy-css"
        href="css/css-frontend-legacy.min.css" type="text/css" media="all">
    <link property="stylesheet" rel="stylesheet" id="elementor-frontend-css" href="css/css-frontend.min.css"
        type="text/css" media="all">
    <style id="elementor-frontend-inline-css" type="text/css">
    .elementor-kit-15 {
        --e-global-color-primary: #6EC1E4;
        --e-global-color-secondary: #54595F;
        --e-global-color-text: #7A7A7A;
        --e-global-color-accent: #61CE70;
        --e-global-color-61c01e98: #4054B2;
        --e-global-color-69bf31ed: #23A455;
        --e-global-color-7a1ccbe5: #000;
        --e-global-color-13ed1179: #FFF;
        --e-global-typography-primary-font-family: "Roboto";
        --e-global-typography-primary-font-weight: 600;
        --e-global-typography-secondary-font-family: "Roboto Slab";
        --e-global-typography-secondary-font-weight: 400;
        --e-global-typography-text-font-family: "Roboto";
        --e-global-typography-text-font-weight: 400;
        --e-global-typography-accent-font-family: "Roboto";
        --e-global-typography-accent-font-weight: 500;
    }

    .elementor-section.elementor-section-boxed>.elementor-container {
        max-width: 1320px;
    }

    .e-container {
        --container-max-width: 1320px;
    }

    .elementor-widget:not(:last-child) {
        margin-bottom: 0px;
    }

    .elementor-element {
        --widgets-spacing: 0px;
    }

        {}

    .sc_layouts_title_caption {
        display: var(--page-title-display);
    }

    @media(max-width:1024px) {
        .elementor-section.elementor-section-boxed>.elementor-container {
            max-width: 1024px;
        }

        .e-container {
            --container-max-width: 1024px;
        }
    }

    @media(max-width:767px) {
        .elementor-section.elementor-section-boxed>.elementor-container {
            max-width: 767px;
        }

        .e-container {
            --container-max-width: 767px;
        }
    }

    .elementor-18038 .elementor-element.elementor-element-acdfcaf {
        --spacer-size: 70px;
    }

    .elementor-18038 .elementor-element.elementor-element-150cf53 {
        --spacer-size: 50px;
    }

    .elementor-18038 .elementor-element.elementor-element-4eca6d7 {
        padding: 0px 60px 0px 60px;
    }

    .elementor-18038 .elementor-element.elementor-element-1d8c925>.elementor-element-populated.elementor-column-wrap {
        padding: 0% 7% 0% 0%;
    }

    .elementor-18038 .elementor-element.elementor-element-1d8c925>.elementor-element-populated.elementor-widget-wrap {
        padding: 0% 7% 0% 0%;
    }

    .elementor-18038 .elementor-element.elementor-element-e9180f4 {
        color: #0A1108;
        font-size: 19px;
        line-height: 1.2em;
    }

    .elementor-18038 .elementor-element.elementor-element-b163e95 {
        --spacer-size: 20px;
    }

    .elementor-bc-flex-widget .elementor-18038 .elementor-element.elementor-element-482c7ec.elementor-column .elementor-column-wrap {
        align-items: flex-end;
    }

    .elementor-18038 .elementor-element.elementor-element-482c7ec.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
        align-content: flex-end;
        align-items: flex-end;
    }

    .elementor-18038 .elementor-element.elementor-element-28dd3e1 .sc_item_title_text {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18038 .elementor-element.elementor-element-28dd3e1 .sc_item_title_text2 {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18038 .elementor-element.elementor-element-24839b7>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
        align-content: center;
        align-items: center;
    }

    .elementor-bc-flex-widget .elementor-18038 .elementor-element.elementor-element-92403ce.elementor-column .elementor-column-wrap {
        align-items: flex-end;
    }

    .elementor-18038 .elementor-element.elementor-element-92403ce.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
        align-content: flex-end;
        align-items: flex-end;
    }

    .elementor-18038 .elementor-element.elementor-element-d9c2209>.elementor-widget-container {
        margin: 0% 0% 0% -115%;
    }

    .elementor-18038 .elementor-element.elementor-element-bf910de>.elementor-element-populated.elementor-column-wrap {
        padding: 0% 5% 0% 18%;
    }

    .elementor-18038 .elementor-element.elementor-element-bf910de>.elementor-element-populated.elementor-widget-wrap {
        padding: 0% 5% 0% 18%;
    }

    .elementor-18038 .elementor-element.elementor-element-2b6a309 .sc_item_title_text {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18038 .elementor-element.elementor-element-2b6a309 .sc_item_title_text2 {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18038 .elementor-element.elementor-element-4941a60 {
        --spacer-size: 30px;
    }

    .elementor-18038 .elementor-element.elementor-element-fae36ad {
        --spacer-size: 30px;
    }

    .elementor-18038 .elementor-element.elementor-element-17e50bb {
        --spacer-size: 40px;
    }

    .elementor-18038 .elementor-element.elementor-element-3734a89a:not(.elementor-motion-effects-element-type-background),
    .elementor-18038 .elementor-element.elementor-element-3734a89a>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #FFFFFF;
    }

    .elementor-18038 .elementor-element.elementor-element-3734a89a {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    }

    .elementor-18038 .elementor-element.elementor-element-3734a89a>.elementor-background-overlay {
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    .elementor-18038 .elementor-element.elementor-element-71ac946b>.elementor-element-populated.elementor-column-wrap {
        padding: 0% 15% 0% 0%;
    }

    .elementor-18038 .elementor-element.elementor-element-71ac946b>.elementor-element-populated.elementor-widget-wrap {
        padding: 0% 15% 0% 0%;
    }

    .elementor-18038 .elementor-element.elementor-element-2b71c7a6 .sc_item_title_text {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18038 .elementor-element.elementor-element-2b71c7a6 .sc_item_title_text2 {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18038 .elementor-element.elementor-element-2b71c7a6>.elementor-widget-container {
        margin: 0px 0px 0px -328px;
    }

    .elementor-18038 .elementor-element.elementor-element-6beadc34 {
        --spacer-size: 30px;
    }

    .elementor-18038 .elementor-element.elementor-element-2801ccd {
        --spacer-size: 34px;
    }

    .elementor-18038 .elementor-element.elementor-element-378886e2>.elementor-widget-container {
        margin: 0px 0px 6px 0px;
    }

    .elementor-18038 .elementor-element.elementor-element-a40be39:not(.elementor-motion-effects-element-type-background)>.elementor-column-wrap,
    .elementor-18038 .elementor-element.elementor-element-a40be39>.elementor-column-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-image: url("images/site/ladycall.jpg");
        background-position: center center;
        background-size: cover;
    }

    .elementor-18038 .elementor-element.elementor-element-a40be39>.elementor-element-populated {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    }

    .elementor-18038 .elementor-element.elementor-element-a40be39>.elementor-element-populated>.elementor-background-overlay {
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    .elementor-18038 .elementor-element.elementor-element-5bb75b83 {
        --spacer-size: 250px;
    }

    .elementor-18038 .elementor-element.elementor-element-57f71098:not(.elementor-motion-effects-element-type-background)>.elementor-column-wrap,
    .elementor-18038 .elementor-element.elementor-element-57f71098>.elementor-column-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #29444a;
    }

    .elementor-18038 .elementor-element.elementor-element-57f71098>.elementor-element-populated {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    }

    .elementor-18038 .elementor-element.elementor-element-57f71098>.elementor-element-populated>.elementor-background-overlay {
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    .elementor-18038 .elementor-element.elementor-element-57f71098>.elementor-element-populated.elementor-column-wrap {
        padding: 15% 12% 15% 12%;
    }

    .elementor-18038 .elementor-element.elementor-element-57f71098>.elementor-element-populated.elementor-widget-wrap {
        padding: 15% 12% 15% 12%;
    }

    .elementor-18038 .elementor-element.elementor-element-7d31cf7 {
        --spacer-size: 20px;
    }

    .elementor-18038 .elementor-element.elementor-element-d7f76cf {
        --spacer-size: 20px;
    }

    .elementor-bc-flex-widget .elementor-18038 .elementor-element.elementor-element-6c266bde.elementor-column .elementor-column-wrap {
        align-items: center;
    }

    .elementor-18038 .elementor-element.elementor-element-6c266bde.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
        align-content: center;
        align-items: center;
    }

    .elementor-18038 .elementor-element.elementor-element-6c266bde:not(.elementor-motion-effects-element-type-background)>.elementor-column-wrap,
    .elementor-18038 .elementor-element.elementor-element-6c266bde>.elementor-column-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-image: url("images/site/40.jpg");
        background-position: center center;
        background-size: cover;
    }

    .elementor-18038 .elementor-element.elementor-element-6c266bde>.elementor-element-populated {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    }

    .elementor-18038 .elementor-element.elementor-element-6c266bde>.elementor-element-populated>.elementor-background-overlay {
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    .elementor-18038 .elementor-element.elementor-element-66c96639 {
        --spacer-size: 250px;
    }

    .elementor-18038 .elementor-element.elementor-element-7f6e3ae .sc_item_title_text {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18038 .elementor-element.elementor-element-7f6e3ae .sc_item_title_text2 {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18038 .elementor-element.elementor-element-f80b5ad>.elementor-element-populated.elementor-column-wrap {
        padding: 0% 25% 0% 0%;
    }

    .elementor-18038 .elementor-element.elementor-element-f80b5ad>.elementor-element-populated.elementor-widget-wrap {
        padding: 0% 25% 0% 0%;
    }

    .elementor-18038 .elementor-element.elementor-element-399de6c {
        --spacer-size: 45px;
    }

    .elementor-18038 .elementor-element.elementor-element-f91f9f1 {
        --spacer-size: 60px;
    }

    .elementor-18038 .elementor-element.elementor-element-36ee9c5 .sc_item_title_text {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18038 .elementor-element.elementor-element-36ee9c5 .sc_item_title_text2 {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18038 .elementor-element.elementor-element-36ee9c5 {
        width: 100%;
        max-width: 100%;
    }

    .elementor-18038 .elementor-element.elementor-element-b47650f .sc_item_title_text {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18038 .elementor-element.elementor-element-b47650f .sc_item_title_text2 {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18038 .elementor-element.elementor-element-b47650f>.elementor-widget-container {
        margin: 60px 0px 0px 0px;
    }

    .elementor-18038 .elementor-element.elementor-element-b47650f {
        width: 100%;
        max-width: 100%;
    }

    .elementor-18038 .elementor-element.elementor-element-116e5ae {
        padding: 0px 60px 0px 60px;
    }

    .elementor-18038 .elementor-element.elementor-element-4b02fc8>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
        align-content: center;
        align-items: center;
    }

    .elementor-18038 .elementor-element.elementor-element-7ab175f>.elementor-element-populated.elementor-column-wrap {
        padding: 0% 12% 0% 19%;
    }

    .elementor-18038 .elementor-element.elementor-element-7ab175f>.elementor-element-populated.elementor-widget-wrap {
        padding: 0% 12% 0% 19%;
    }

    .elementor-18038 .elementor-element.elementor-element-028b5ed .sc_item_title_text {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18038 .elementor-element.elementor-element-028b5ed .sc_item_title_text2 {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18038 .elementor-element.elementor-element-028b5ed>.elementor-widget-container {
        padding: 0% 5% 0% 0%;
    }

    .elementor-18038 .elementor-element.elementor-element-b15a29a {
        --spacer-size: 15px;
    }

    .elementor-18038 .elementor-element.elementor-element-0a5ecf6 .elementor-accordion-item {
        border-width: 0px;
    }

    .elementor-18038 .elementor-element.elementor-element-0a5ecf6 .elementor-accordion-item .elementor-tab-content {
        border-width: 0px;
    }

    .elementor-18038 .elementor-element.elementor-element-0a5ecf6 .elementor-accordion-item .elementor-tab-title.elementor-active {
        border-width: 0px;
    }

    .elementor-18038 .elementor-element.elementor-element-0a5ecf6 .elementor-tab-title {
        padding: 25px 0px 25px 0px;
    }

    .elementor-18038 .elementor-element.elementor-element-0a5ecf6 .elementor-tab-content {
        padding: 0px 10px 20px 37px;
    }

    .elementor-18038 .elementor-element.elementor-element-0478f58 .sc_item_title_text {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18038 .elementor-element.elementor-element-0478f58 .sc_item_title_text2 {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18038 .elementor-element.elementor-element-4fcd588>.elementor-widget-container {
        margin: 5px 0px 0px 0px;
    }

    .elementor-18038 .elementor-element.elementor-element-7865766 .sc_item_title_text {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18038 .elementor-element.elementor-element-7865766 .sc_item_title_text2 {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18038 .elementor-element.elementor-element-bf17b8b .elementor-background-slideshow__slide__image {
        background-size: cover;
        background-position: center center;
    }

    .elementor-18038 .elementor-element.elementor-element-bf17b8b>.elementor-background-overlay {
        background-color: #000000;
        opacity: 0.3;
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    .elementor-18038 .elementor-element.elementor-element-bf17b8b {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    }

    .elementor-18038 .elementor-element.elementor-element-2342988 .sc_item_title_text {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18038 .elementor-element.elementor-element-2342988 .sc_item_title_text2 {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18038 .elementor-element.elementor-element-832462a {
        --spacer-size: 30px;
    }

    .elementor-18038 .elementor-element.elementor-element-80d8e1e:not(.elementor-motion-effects-element-type-background),
    .elementor-18038 .elementor-element.elementor-element-80d8e1e>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #FAF7F0;
    }

    .elementor-18038 .elementor-element.elementor-element-80d8e1e {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    }

    .elementor-18038 .elementor-element.elementor-element-80d8e1e>.elementor-background-overlay {
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    .elementor-18038 .elementor-element.elementor-element-7e32de3:not(.elementor-motion-effects-element-type-background),
    .elementor-18038 .elementor-element.elementor-element-7e32de3>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #FAF7F0;
    }

    .elementor-18038 .elementor-element.elementor-element-7e32de3 {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    }

    .elementor-18038 .elementor-element.elementor-element-7e32de3>.elementor-background-overlay {
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    .elementor-18038 .elementor-element.elementor-element-2c7eb29 .sc_item_title_text {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18038 .elementor-element.elementor-element-2c7eb29 .sc_item_title_text2 {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18038 .elementor-element.elementor-element-2c7eb29>.elementor-widget-container {
        padding: 0% 10% 0% 0%;
    }

    .elementor-18038 .elementor-element.elementor-element-044a0e2 {
        --spacer-size: 19px;
    }

    .elementor-18038 .elementor-element.elementor-element-a30b70a>.elementor-element-populated {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    }

    .elementor-18038 .elementor-element.elementor-element-a30b70a>.elementor-element-populated>.elementor-background-overlay {
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    .elementor-18038 .elementor-element.elementor-element-4c3dd83 {
        --spacer-size: 45px;
    }

    .elementor-18038 .elementor-element.elementor-element-25dd679>.elementor-widget-container {
        margin: 0px 0px 0px -105px;
        padding: 70px 70px 80px 70px;
        background-color: #FFFFFF;
    }

    .elementor-18038 .elementor-element.elementor-element-f7d244a:not(.elementor-motion-effects-element-type-background),
    .elementor-18038 .elementor-element.elementor-element-f7d244a>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #FAF7F0;
    }

    .elementor-18038 .elementor-element.elementor-element-f7d244a {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    }

    .elementor-18038 .elementor-element.elementor-element-f7d244a>.elementor-background-overlay {
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    @media(max-width:1024px) {
        .elementor-18038 .elementor-element.elementor-element-150cf53 {
            --spacer-size: 40px;
        }

        .elementor-18038 .elementor-element.elementor-element-4eca6d7 {
            padding: 0px 30px 0px 30px;
        }

        .elementor-18038 .elementor-element.elementor-element-e9180f4 {
            font-size: 18px;
        }

        .elementor-18038 .elementor-element.elementor-element-b163e95 {
            --spacer-size: 10px;
        }

        .elementor-bc-flex-widget .elementor-18038 .elementor-element.elementor-element-482c7ec.elementor-column .elementor-column-wrap {
            align-items: flex-start;
        }

        .elementor-18038 .elementor-element.elementor-element-482c7ec.elementor-column.elementor-element[data-element_type="column"]>.elementor-column-wrap.elementor-element-populated>.elementor-widget-wrap {
            align-content: flex-start;
            align-items: flex-start;
        }

        .elementor-18038 .elementor-element.elementor-element-bf910de>.elementor-element-populated.elementor-column-wrap {
            padding: 0px 15px 0px 30px;
        }

        .elementor-18038 .elementor-element.elementor-element-bf910de>.elementor-element-populated.elementor-widget-wrap {
            padding: 0px 15px 0px 30px;
        }

        .elementor-18038 .elementor-element.elementor-element-4941a60 {
            --spacer-size: 20px;
        }

        .elementor-18038 .elementor-element.elementor-element-fae36ad {
            --spacer-size: 25px;
        }

        .elementor-18038 .elementor-element.elementor-element-17e50bb {
            --spacer-size: 25px;
        }

        .elementor-18038 .elementor-element.elementor-element-71ac946b>.elementor-element-populated.elementor-column-wrap {
            padding: 0px 30px 0px 30px;
        }

        .elementor-18038 .elementor-element.elementor-element-71ac946b>.elementor-element-populated.elementor-widget-wrap {
            padding: 0px 30px 0px 30px;
        }

        .elementor-18038 .elementor-element.elementor-element-2b71c7a6>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }

        .elementor-18038 .elementor-element.elementor-element-6beadc34 {
            --spacer-size: 20px;
        }

        .elementor-18038 .elementor-element.elementor-element-2801ccd {
            --spacer-size: 20px;
        }

        .elementor-18038 .elementor-element.elementor-element-57f71098>.elementor-element-populated.elementor-column-wrap {
            padding: 35px 30px 35px 30px;
        }

        .elementor-18038 .elementor-element.elementor-element-57f71098>.elementor-element-populated.elementor-widget-wrap {
            padding: 35px 30px 35px 30px;
        }

        .elementor-18038 .elementor-element.elementor-element-7d31cf7 {
            --spacer-size: 15px;
        }

        .elementor-18038 .elementor-element.elementor-element-d7f76cf {
            --spacer-size: 15px;
        }

        .elementor-18038 .elementor-element.elementor-element-f80b5ad>.elementor-element-populated.elementor-column-wrap {
            padding: 0px 15px 0px 15px;
        }

        .elementor-18038 .elementor-element.elementor-element-f80b5ad>.elementor-element-populated.elementor-widget-wrap {
            padding: 0px 15px 0px 15px;
        }

        .elementor-18038 .elementor-element.elementor-element-f91f9f1 {
            --spacer-size: 40px;
        }

        .elementor-18038 .elementor-element.elementor-element-b47650f>.elementor-widget-container {
            margin: 40px 0px 0px 0px;
        }

        .elementor-18038 .elementor-element.elementor-element-116e5ae {
            padding: 0px 30px 0px 30px;
        }

        .elementor-18038 .elementor-element.elementor-element-7ab175f>.elementor-element-populated.elementor-column-wrap {
            padding: 0px 15px 0px 45px;
        }

        .elementor-18038 .elementor-element.elementor-element-7ab175f>.elementor-element-populated.elementor-widget-wrap {
            padding: 0px 15px 0px 45px;
        }

        .elementor-18038 .elementor-element.elementor-element-0a5ecf6 .elementor-tab-title {
            padding: 14px 0px 14px 0px;
        }

        .elementor-18038 .elementor-element.elementor-element-0a5ecf6 .elementor-tab-content {
            padding: 10px 0px 15px 37px;
        }

        .elementor-18038 .elementor-element.elementor-element-2c7eb29>.elementor-widget-container {
            padding: 0% 6% 0% 0%;
        }

        .elementor-18038 .elementor-element.elementor-element-25dd679>.elementor-widget-container {
            margin: 0px 0px 0px -60px;
            padding: 30px 40px 40px 40px;
        }
    }

    @media(max-width:767px) {
        .elementor-18038 .elementor-element.elementor-element-150cf53 {
            --spacer-size: 30px;
        }

        .elementor-18038 .elementor-element.elementor-element-4eca6d7 {
            padding: 0px 20px 0px 20px;
        }

        .elementor-18038 .elementor-element.elementor-element-e9180f4 {
            font-size: 17px;
        }

        .elementor-18038 .elementor-element.elementor-element-b163e95 {
            --spacer-size: 5px;
        }

        .elementor-18038 .elementor-element.elementor-element-482c7ec>.elementor-element-populated {
            margin: 15px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
        }

        .elementor-18038 .elementor-element.elementor-element-eba696e>.elementor-element-populated {
            margin: 0% 35% 0% 0%;
            --e-column-margin-right: 35%;
            --e-column-margin-left: 0%;
        }

        .elementor-18038 .elementor-element.elementor-element-92403ce>.elementor-element-populated {
            margin: -50% 0% 0% 35%;
            --e-column-margin-right: 0%;
            --e-column-margin-left: 35%;
        }

        .elementor-18038 .elementor-element.elementor-element-d9c2209>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }

        .elementor-18038 .elementor-element.elementor-element-bf910de>.elementor-element-populated {
            margin: 30px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
        }

        .elementor-18038 .elementor-element.elementor-element-bf910de>.elementor-element-populated.elementor-column-wrap {
            padding: 0px 10px 0px 10px;
        }

        .elementor-18038 .elementor-element.elementor-element-bf910de>.elementor-element-populated.elementor-widget-wrap {
            padding: 0px 10px 0px 10px;
        }

        .elementor-18038 .elementor-element.elementor-element-4941a60 {
            --spacer-size: 15px;
        }

        .elementor-18038 .elementor-element.elementor-element-fae36ad {
            --spacer-size: 15px;
        }

        .elementor-18038 .elementor-element.elementor-element-17e50bb {
            --spacer-size: 22px;
        }

        .elementor-18038 .elementor-element.elementor-element-71ac946b>.elementor-element-populated.elementor-column-wrap {
            padding: 0px 10px 0px 10px;
        }

        .elementor-18038 .elementor-element.elementor-element-71ac946b>.elementor-element-populated.elementor-widget-wrap {
            padding: 0px 10px 0px 10px;
        }

        .elementor-18038 .elementor-element.elementor-element-6beadc34 {
            --spacer-size: 15px;
        }

        .elementor-18038 .elementor-element.elementor-element-2801ccd {
            --spacer-size: 15px;
        }

        .elementor-18038 .elementor-element.elementor-element-7e005f17 {
            margin-top: 0px;
            margin-bottom: 0px;
        }

        .elementor-18038 .elementor-element.elementor-element-57f71098>.elementor-element-populated.elementor-column-wrap {
            padding: 30px 25px 30px 25px;
        }

        .elementor-18038 .elementor-element.elementor-element-57f71098>.elementor-element-populated.elementor-widget-wrap {
            padding: 30px 25px 30px 25px;
        }

        .elementor-18038 .elementor-element.elementor-element-7d31cf7 {
            --spacer-size: 10px;
        }

        .elementor-18038 .elementor-element.elementor-element-d7f76cf {
            --spacer-size: 10px;
        }

        .elementor-18038 .elementor-element.elementor-element-f80b5ad>.elementor-element-populated {
            margin: 0px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
        }

        .elementor-18038 .elementor-element.elementor-element-f80b5ad>.elementor-element-populated.elementor-column-wrap {
            padding: 0px 10px 0px 10px;
        }

        .elementor-18038 .elementor-element.elementor-element-f80b5ad>.elementor-element-populated.elementor-widget-wrap {
            padding: 0px 10px 0px 10px;
        }

        .elementor-18038 .elementor-element.elementor-element-399de6c {
            --spacer-size: 15px;
        }

        .elementor-18038 .elementor-element.elementor-element-f91f9f1 {
            --spacer-size: 20px;
        }

        .elementor-18038 .elementor-element.elementor-element-36ee9c5 {
            width: 50%;
            max-width: 50%;
        }

        .elementor-18038 .elementor-element.elementor-element-b47650f>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }

        .elementor-18038 .elementor-element.elementor-element-b47650f {
            width: 50%;
            max-width: 50%;
        }

        .elementor-18038 .elementor-element.elementor-element-116e5ae {
            padding: 0px 20px 0px 20px;
        }

        .elementor-18038 .elementor-element.elementor-element-7ab175f>.elementor-element-populated {
            margin: 20px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
        }

        .elementor-18038 .elementor-element.elementor-element-7ab175f>.elementor-element-populated.elementor-column-wrap {
            padding: 0px 0px 0px 0px;
        }

        .elementor-18038 .elementor-element.elementor-element-7ab175f>.elementor-element-populated.elementor-widget-wrap {
            padding: 0px 0px 0px 0px;
        }

        .elementor-18038 .elementor-element.elementor-element-028b5ed>.elementor-widget-container {
            padding: 0% 0% 0% 0%;
        }

        .elementor-18038 .elementor-element.elementor-element-b15a29a {
            --spacer-size: 10px;
        }

        .elementor-18038 .elementor-element.elementor-element-2c7eb29>.elementor-widget-container {
            padding: 0% 0% 0% 0%;
        }

        .elementor-18038 .elementor-element.elementor-element-4c3dd83 {
            --spacer-size: 20px;
        }

        .elementor-18038 .elementor-element.elementor-element-25dd679>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
            padding: 20px 30px 30px 30px;
        }
    }

    @media(min-width:768px) {
        .elementor-18038 .elementor-element.elementor-element-1d8c925 {
            width: 63.013%;
        }

        .elementor-18038 .elementor-element.elementor-element-482c7ec {
            width: 36.954%;
        }

        .elementor-18038 .elementor-element.elementor-element-eba696e {
            width: 69.841%;
        }

        .elementor-18038 .elementor-element.elementor-element-92403ce {
            width: 30.003%;
        }

        .elementor-18038 .elementor-element.elementor-element-1601233 {
            width: 50.985%;
        }

        .elementor-18038 .elementor-element.elementor-element-f80b5ad {
            width: 48.977%;
        }

        .elementor-18038 .elementor-element.elementor-element-b36e77a {
            width: 40.46%;
        }

        .elementor-18038 .elementor-element.elementor-element-7ab175f {
            width: 59.54%;
        }

        .elementor-18038 .elementor-element.elementor-element-1d83663 {
            width: 58.258%;
        }

        .elementor-18038 .elementor-element.elementor-element-a30b70a {
            width: 41.704%;
        }
    }

    @media(max-width:1024px) and (min-width:768px) {
        .elementor-18038 .elementor-element.elementor-element-7360551a {
            width: 100%;
        }

        .elementor-18038 .elementor-element.elementor-element-71ac946b {
            width: 100%;
        }
    }
    </style>
    <link property="stylesheet" rel="stylesheet" id="trx_addons-css" href="css/css-__styles.css" type="text/css"
        media="all">
    <link property="stylesheet" rel="stylesheet" id="trx_addons-sc_content-css" href="css/content-content.css"
        type="text/css" media="all">
    <link property="stylesheet" rel="stylesheet" id="trx_addons-sc_content-responsive-css"
        href="css/content-content.responsive.css" type="text/css" media="(max-width:1439px)">
    <link property="stylesheet" rel="stylesheet" id="trx_addons-animations-css" href="css/css-trx_addons.animations.css"
        type="text/css" media="all">
    <link property="stylesheet" rel="stylesheet" id="trx_addons-cf7-css" href="css/contact-form-7-contact-form-7.css"
        type="text/css" media="all">
    <link property="stylesheet" rel="stylesheet" id="trx_addons-mouse-helper-css"
        href="css/mouse-helper-mouse-helper.css" type="text/css" media="all">
    <link property="stylesheet" rel="stylesheet" id="trx_addons-cpt_services-css" href="css/services-services.css"
        type="text/css" media="all">
    <link property="stylesheet" rel="stylesheet" id="trx_addons-sc_blogger-css" href="css/blogger-blogger.css"
        type="text/css" media="all">
    <link property="stylesheet" rel="stylesheet" id="trx_addons-sc_skills-css" href="css/skills-skills.css"
        type="text/css" media="all">
    <link property="stylesheet" rel="stylesheet" id="wpgdprc-front-css-css" href="css/css-front.css" type="text/css"
        media="all">
    <style id="wpgdprc-front-css-inline-css" type="text/css">
    :root {
        --wp-gdpr--bar--background-color: #000000;
        --wp-gdpr--bar--color: #ffffff;
        --wp-gdpr--button--background-color: #000000;
        --wp-gdpr--button--background-color--darken: #000000;
        --wp-gdpr--button--color: #ffffff;
    }
    </style>

    <style id="elementor-post-18654">
    .elementor-18654 .elementor-element.elementor-element-b275fda>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
        align-content: center;
        align-items: center;
    }

    .elementor-18654 .elementor-element.elementor-element-b275fda:not(.elementor-motion-effects-element-type-background),
    .elementor-18654 .elementor-element.elementor-element-b275fda>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #FFFFFF;
    }

    .elementor-18654 .elementor-element.elementor-element-b275fda {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        padding: 20px 60px 20px 60px;
    }

    .elementor-18654 .elementor-element.elementor-element-b275fda>.elementor-background-overlay {
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    .elementor-18654 .elementor-element.elementor-element-f112344 .logo_image {
        max-height: 53px;
    }

    .elementor-18654 .elementor-element.elementor-element-f112344>.elementor-widget-container {
        margin: -5px 35px 0px 0px;
    }

    .elementor-18654 .elementor-element.elementor-element-3fb9c4d>.elementor-widget-container {
        margin: -3px 0px 0px 8px;
    }

    .elementor-18654 .elementor-element.elementor-element-d662b41>.elementor-widget-container {
        margin: 0px 0px 0px 10px;
    }

    .elementor-18654 .elementor-element.elementor-element-97bba67>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
        align-content: center;
        align-items: center;
    }

    .elementor-18654 .elementor-element.elementor-element-97bba67:not(.elementor-motion-effects-element-type-background),
    .elementor-18654 .elementor-element.elementor-element-97bba67>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #FFFFFF;
    }

    .elementor-18654 .elementor-element.elementor-element-97bba67 {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        padding: 17px 30px 17px 30px;
    }

    .elementor-18654 .elementor-element.elementor-element-97bba67>.elementor-background-overlay {
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    .elementor-18654 .elementor-element.elementor-element-703d5de .logo_image {
        max-height: 53px;
    }

    .elementor-18654 .elementor-element.elementor-element-703d5de>.elementor-widget-container {
        margin: -5px 0px 0px 0px;
    }

    .elementor-18654 .elementor-element.elementor-element-f59f78f>.elementor-widget-container {
        margin: -2px 0px 0px 3px;
    }

    .elementor-18654 .elementor-element.elementor-element-feaea9d>.elementor-widget-container {
        margin: 0px 0px 0px 5px;
    }

    @media(max-width:767px) {
        .elementor-18654 .elementor-element.elementor-element-97bba67 {
            padding: 14px 20px 14px 20px;
        }

        .elementor-18654 .elementor-element.elementor-element-20ea2c9 {
            width: 50%;
        }

        .elementor-18654 .elementor-element.elementor-element-703d5de .logo_image {
            max-height: 45px;
        }

        .elementor-18654 .elementor-element.elementor-element-89c39a1 {
            width: 50%;
        }

        .elementor-18654 .elementor-element.elementor-element-f59f78f>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }
    }

    @media(min-width:768px) {
        .elementor-18654 .elementor-element.elementor-element-772feca {
            width: 70.971%;
        }

        .elementor-18654 .elementor-element.elementor-element-3e4e340 {
            width: 30.962%;
        }
    }
    </style>
    <style id="elementor-post-18733">
    .elementor-18733 .elementor-element.elementor-element-41b371d9:not(.elementor-motion-effects-element-type-background),
    .elementor-18733 .elementor-element.elementor-element-41b371d9>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #29444a;
    }

    .elementor-18733 .elementor-element.elementor-element-41b371d9 {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    }

    .elementor-18733 .elementor-element.elementor-element-41b371d9>.elementor-background-overlay {
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    .elementor-18733 .elementor-element.elementor-element-387ce355 {
        --spacer-size: 50px;
    }

    .elementor-18733 .elementor-element.elementor-element-4f75f04 {
        --spacer-size: 10px;
    }

    .elementor-18733 .elementor-element.elementor-element-7acdfc8b:not(.elementor-motion-effects-element-type-background),
    .elementor-18733 .elementor-element.elementor-element-7acdfc8b>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #29444a;
    }

    .elementor-18733 .elementor-element.elementor-element-7acdfc8b {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        margin-top: -10px;
        margin-bottom: 0px;
        padding: 0px 0px 0px 0px;
    }

    .elementor-18733 .elementor-element.elementor-element-7acdfc8b>.elementor-background-overlay {
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    .elementor-18733 .elementor-element.elementor-element-3de2856b .sc_item_title_text {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18733 .elementor-element.elementor-element-3de2856b .sc_item_title_text2 {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18733 .elementor-element.elementor-element-3de2856b>.elementor-widget-container {
        padding: 0% 28% 0% 0%;
    }

    .elementor-18733 .elementor-element.elementor-element-3cd6553d .sc_item_title_text {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18733 .elementor-element.elementor-element-3cd6553d .sc_item_title_text2 {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18733 .elementor-element.elementor-element-1cafe0e8 {
        --spacer-size: 6px;
    }

    .elementor-18733 .elementor-element.elementor-element-5f23599f {
        --spacer-size: 10px;
    }

    .elementor-18733 .elementor-element.elementor-element-bd0b05b .sc_item_title_text {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18733 .elementor-element.elementor-element-bd0b05b .sc_item_title_text2 {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18733 .elementor-element.elementor-element-3255073d .sc_item_title_text {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18733 .elementor-element.elementor-element-3255073d .sc_item_title_text2 {
        -webkit-text-stroke-width: 0px;
    }

    .elementor-18733 .elementor-element.elementor-element-26b9af5c {
        --spacer-size: 6px;
    }

    .elementor-18733 .elementor-element.elementor-element-254c2c69 {
        --spacer-size: 4px;
    }

    .elementor-18733 .elementor-element.elementor-element-3049b76f:not(.elementor-motion-effects-element-type-background),
    .elementor-18733 .elementor-element.elementor-element-3049b76f>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #29444a;
    }

    .elementor-18733 .elementor-element.elementor-element-3049b76f {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        padding: 0px 0px 0px 0px;
    }

    .elementor-18733 .elementor-element.elementor-element-3049b76f>.elementor-background-overlay {
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    .elementor-18733 .elementor-element.elementor-element-c27e11 {
        --spacer-size: 5px;
    }

    .elementor-18733 .elementor-element.elementor-element-447840c2 {
        --spacer-size: 50px;
    }

    .elementor-18733 .elementor-element.elementor-element-6b710157 {
        --divider-border-style: solid;
        --divider-color: #282F27;
        --divider-border-width: 1px;
    }

    .elementor-18733 .elementor-element.elementor-element-6b710157 .elementor-divider-separator {
        width: 100%;
    }

    .elementor-18733 .elementor-element.elementor-element-6b710157 .elementor-divider {
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .elementor-18733 .elementor-element.elementor-element-103f48b8>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
        align-content: center;
        align-items: center;
    }

    .elementor-18733 .elementor-element.elementor-element-103f48b8:not(.elementor-motion-effects-element-type-background),
    .elementor-18733 .elementor-element.elementor-element-103f48b8>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-color: #29444a;
    }

    .elementor-18733 .elementor-element.elementor-element-103f48b8 {
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        padding: 0px 0px 13px 0px;
    }

    .elementor-18733 .elementor-element.elementor-element-103f48b8>.elementor-background-overlay {
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }

    .elementor-18733 .elementor-element.elementor-element-2651d8ba {
        color: #96999F;
        font-size: 16px;
        line-height: 1.2em;
    }

    @media(max-width:1024px) {
        .elementor-18733 .elementor-element.elementor-element-3de2856b>.elementor-widget-container {
            padding: 0% 5% 0% 0%;
        }
    }

    @media(min-width:768px) {
        .elementor-18733 .elementor-element.elementor-element-23b1fd56 {
            width: 52.424%;
        }

        .elementor-18733 .elementor-element.elementor-element-39921ff6 {
            width: 24.242%;
        }

        .elementor-18733 .elementor-element.elementor-element-47075a87 {
            width: 22.974%;
        }

        .elementor-18733 .elementor-element.elementor-element-e3ec0fc {
            width: 61.97%;
        }

        .elementor-18733 .elementor-element.elementor-element-3a27fc28 {
            width: 37.992%;
        }
    }

    @media(max-width:1024px) and (min-width:768px) {
        .elementor-18733 .elementor-element.elementor-element-23b1fd56 {
            width: 34%;
        }

        .elementor-18733 .elementor-element.elementor-element-39921ff6 {
            width: 33%;
        }

        .elementor-18733 .elementor-element.elementor-element-47075a87 {
            width: 33%;
        }

        .elementor-18733 .elementor-element.elementor-element-e3ec0fc {
            width: 52%;
        }

        .elementor-18733 .elementor-element.elementor-element-3a27fc28 {
            width: 48%;
        }
    }

    @media(max-width:767px) {
        .elementor-18733 .elementor-element.elementor-element-7acdfc8b {
            margin-top: -5px;
            margin-bottom: 0px;
        }

        .elementor-18733 .elementor-element.elementor-element-3de2856b>.elementor-widget-container {
            padding: 0% 0% 0% 0%;
        }

        .elementor-18733 .elementor-element.elementor-element-39921ff6>.elementor-element-populated {
            margin: 20px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
        }

        .elementor-18733 .elementor-element.elementor-element-eb34645 {
            font-size: 15px;
        }

        .elementor-18733 .elementor-element.elementor-element-5f23599f {
            --spacer-size: 5px;
        }

        .elementor-18733 .elementor-element.elementor-element-47075a87>.elementor-element-populated {
            margin: 20px 0px 0px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
        }

        .elementor-18733 .elementor-element.elementor-element-44de9cee {
            font-size: 15px;
        }

        .elementor-18733 .elementor-element.elementor-element-103f48b8 {
            padding: 0px 0px 0px 0px;
        }

        .elementor-18733 .elementor-element.elementor-element-3a27fc28>.elementor-element-populated {
            margin: -2px 0px 21px 0px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 0px;
        }

        .elementor-18733 .elementor-element.elementor-element-2651d8ba {
            font-size: 15px;
        }
    }
    </style>
<style id='rs-plugin-settings-inline-css' type='text/css'>
        @media (max-width:1023px) and (min-width:769px) {
            .sldr-title {
                font-size: 50px !important;
                line-height: 50px !important
            }
        }

        @media (max-width:1136px) and (min-width:778px) {
            .sldr-hide {
                display: none !important
            }
        }

        #rev_slider_4_1_wrapper .arrows_simple.tparrows {
            cursor: pointer;
            background: transparent;
            width: 60px;
            height: 60px;
            position: absolute;
            display: block;
            z-index: 1000;
            transition: .3s ease
        }

        #rev_slider_4_1_wrapper .arrows_simple.tparrows.rs-touchhover {
            background: transparent
        }

        #rev_slider_4_1_wrapper .arrows_simple.tparrows:before {
            font-family: 'fontello';
            font-size: 48px;
            color: #ffffff;
            display: block;
            line-height: 60px;
            text-align: center;
            transition: .3s ease
        }

        #rev_slider_4_1_wrapper .arrows_simple.tparrows.tp-leftarrow:before {
            content: '\EA23'
        }

        #rev_slider_4_1_wrapper .arrows_simple.tparrows.tp-rightarrow:before {
            content: '\EA24'
        }

        #rev_slider_4_1_wrapper .arrows_simple.tparrows.tp-leftarrow.rs-touchhover:before {
            transform: translateX(-8px)
        }

        #rev_slider_4_1_wrapper .arrows_simple.tparrows.tp-rightarrow.rs-touchhover:before {
            transform: translateX(8px)
        }

        @media (max-width:1440px) {
            #rev_slider_4_1_wrapper .arrows_simple.tparrows:before {
                font-size: 42px
            }
        }

        #rev_slider_4_1_wrapper .bullets_dots_fill .tp-bullet {
            width: 8px;
            height: 8px;
            position: absolute;
            background: rgba(255, 255, 255, 0.4);
            border-radius: 50%;
            cursor: pointer;
            box-sizing: content-box;
            transition: .3s ease
        }

        #rev_slider_4_1_wrapper .bullets_dots_fill .tp-bullet.rs-touchhover,
        #rev_slider_4_1_wrapper .bullets_dots_fill .tp-bullet.selected {
            background: #770614;
            box-shadow: 0px 0px 0px 5px transparent
        }
    </style>
    <style type="text/css">
    .trx_demo_inline_98460003 {
        color: #ffffff !important;
        border-color: #770614 !important;
        background-color: #770614 !important;
    }

    .trx_demo_inline_2023572155:hover {
        color: #ffffff !important;
        border-color: #dcb000 !important;
        background-color: #dcb000 !important;
    }

    .trx_demo_panel_button.sc_button {
        justify-content: center;
    }
    </style>
    <link property="stylesheet" rel="stylesheet" id="agricola-style-css" href="css/agricola-style.css" type="text/css"
        media="all">
    <link property="stylesheet" rel="stylesheet" id="mediaelement-css"
        href="css/mediaelement-mediaelementplayer-legacy.min.css" type="text/css" media="all">
    <link property="stylesheet" rel="stylesheet" id="wp-mediaelement-css"
        href="css/mediaelement-wp-mediaelement.min.css" type="text/css" media="all">
    <link property="stylesheet" rel="stylesheet" id="agricola-skin-default-css" href="css/css-style.css" type="text/css"
        media="all">
    <link property="stylesheet" rel="stylesheet" id="agricola-plugins-css" href="css/css-__plugins.css" type="text/css"
        media="all">
    <link property="stylesheet" rel="stylesheet" id="agricola-contact-form-7-css"
        href="css/contact-form-7-contact-form-7.css" type="text/css" media="all">
    <link property="stylesheet" rel="stylesheet" id="agricola-custom-css" href="css/css-__custom.css" type="text/css"
        media="all">
    <link property="stylesheet" rel="stylesheet" id="e-animations-css" href="css/animations-animations.min.css"
        type="text/css" media="all">
    <link property="stylesheet" rel='stylesheet' id='rs-plugin-settings-css' href='css/plugins/revslider/public/assets/css/rs6.css' type='text/css' media='all' />

    <link property="stylesheet" rel="stylesheet" id="trx_addons-responsive-css" href="css/css-__responsive.css"
        type="text/css" media="(max-width:1439px)">
    <link property="stylesheet" rel="stylesheet" id="trx_addons-mouse-helper-responsive-css"
        href="css/mouse-helper-mouse-helper.responsive.css" type="text/css" media="(max-width:1279px)">
    <link property="stylesheet" rel="stylesheet" id="trx_addons-cpt_services-responsive-css"
        href="css/services-services.responsive.css" type="text/css" media="(max-width:1439px)">
    <link property="stylesheet" rel="stylesheet" id="trx_addons-sc_blogger-responsive-css"
        href="css/blogger-blogger.responsive.css" type="text/css" media="(max-width:1279px)">
    <link property="stylesheet" rel="stylesheet" id="trx_addons-sc_skills-responsive-css"
        href="css/skills-skills.responsive.css" type="text/css" media="(max-width:1023px)">
    <link property="stylesheet" rel="stylesheet" id="agricola-responsive-css" href="css/css-__responsive.css"
        type="text/css" media="(max-width:1679px)">
    <link property="stylesheet" rel="stylesheet" id="agricola-trx-addons-extra-styles-css"
        href="css/default-extra-styles.css" type="text/css" media="all">
    <link property="stylesheet" rel="stylesheet" id="swiper-css" href="css/swiper-swiper.min.css" type="text/css"
        media="all">
    <link property="stylesheet" rel="stylesheet" id="google-fonts-1-css"
        href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.3.1"
        type="text/css" media="all">
    <link property="stylesheet" rel="stylesheet" id="elementor-icons-shared-0-css" href="css/css-fontawesome.min.css"
        type="text/css" media="all">
    <link property="stylesheet" rel="stylesheet" id="elementor-icons-fa-solid-css" href="css/css-solid.min.css"
        type="text/css" media="all">
    <script type="text/javascript" src="js/jquery-jquery.min.js" id="jquery-core-js"></script>
    <script type="text/javascript" src="js/jquery-jquery-migrate.min.js" id="jquery-migrate-js"></script>
    <link rel="https://api.w.org/" href="https://agricola.axiomthemes.com/wp-json/">
    <link rel="alternate" type="application/json" href="https://agricola.axiomthemes.com/wp-json/wp/v2/pages/18038">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://agricola.axiomthemes.com/xmlrpc.php?rsd">
    <meta name="generator" content="WordPress 6.3.1">
    <meta name="generator" content="WooCommerce 6.9.3">
    <link rel="canonical" href="https://agricola.axiomthemes.com/agro-services/">
    <link rel="shortlink" href="https://agricola.axiomthemes.com/?p=18038">
    <link rel="alternate" type="application/json+oembed"
        href="https://agricola.axiomthemes.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fagricola.axiomthemes.com%2Fagro-services%2F">
    <link rel="alternate" type="text/xml+oembed"
        href="https://agricola.axiomthemes.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fagricola.axiomthemes.com%2Fagro-services%2F&amp;format=xml">
    <link rel="preload"
        href="https://agricola.axiomthemes.com/wp-content/plugins/advanced-popups/fonts/advanced-popups-icons.woff"
        as="font" type="font/woff" crossorigin>
    <noscript>
        <style>
        .woocommerce-product-gallery {
            opacity: 1 !important;
        }
        </style>
    </noscript>
    <meta name="generator"
        content="Powered by Slider Revolution 6.5.31 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface.">
    <link rel="icon" href="favicons/fav.png">
    <meta name="msapplication-TileImage"
        content="https://agricola.axiomthemes.com/wp-content/uploads/2022/07/cropped-favicon-270x270.png">
    <script>
    function setREVStartSize(e) {
        //window.requestAnimationFrame(function() {
        window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
        window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
        try {
            var pw = document.getElementById(e.c).parentNode.offsetWidth,
                newh;
            pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
            e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
            e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
            e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
            e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
            e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
            e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
            e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
            if (e.layout === "fullscreen" || e.l === "fullscreen")
                newh = Math.max(e.mh, window.RSIH);
            else {
                e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                for (var i in e.rl)
                    if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                for (var i in e.rl)
                    if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                var nl = new Array(e.rl.length),
                    ix = 0,
                    sl;
                e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                sl = nl[0];
                for (var i in nl)
                    if (sl > nl[i] && nl[i] > 0) {
                        sl = nl[i];
                        ix = i;
                    }
                var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
            }
            var el = document.getElementById(e.c);
            if (el !== null && el) el.style.height = newh + "px";
            el = document.getElementById(e.c + "_wrapper");
            if (el !== null && el) {
                el.style.height = newh + "px";
                el.style.display = "block";
            }
        } catch (e) {
            console.log("Failure at Presize of Slider:" + e)
        }
        //});
    };
    </script>
<style id="elementor-post-18654">
        .elementor-18654 .elementor-element.elementor-element-b275fda>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-18654 .elementor-element.elementor-element-b275fda:not(.elementor-motion-effects-element-type-background),
        .elementor-18654 .elementor-element.elementor-element-b275fda>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }

        .elementor-18654 .elementor-element.elementor-element-b275fda {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 20px 60px 20px 60px;
        }

        .elementor-18654 .elementor-element.elementor-element-b275fda>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-18654 .elementor-element.elementor-element-f112344 .logo_image {
            max-height: 53px;
        }

        .elementor-18654 .elementor-element.elementor-element-f112344>.elementor-widget-container {
            margin: -5px 35px 0px 0px;
        }

        .elementor-18654 .elementor-element.elementor-element-3fb9c4d>.elementor-widget-container {
            margin: -3px 0px 0px 8px;
        }

        .elementor-18654 .elementor-element.elementor-element-d662b41>.elementor-widget-container {
            margin: 0px 0px 0px 10px;
        }

        .elementor-18654 .elementor-element.elementor-element-97bba67>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-18654 .elementor-element.elementor-element-97bba67:not(.elementor-motion-effects-element-type-background),
        .elementor-18654 .elementor-element.elementor-element-97bba67>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }

        .elementor-18654 .elementor-element.elementor-element-97bba67 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 17px 30px 17px 30px;
        }

        .elementor-18654 .elementor-element.elementor-element-97bba67>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-18654 .elementor-element.elementor-element-703d5de .logo_image {
            max-height: 53px;
        }

        .elementor-18654 .elementor-element.elementor-element-703d5de>.elementor-widget-container {
            margin: -5px 0px 0px 0px;
        }

        .elementor-18654 .elementor-element.elementor-element-f59f78f>.elementor-widget-container {
            margin: -2px 0px 0px 3px;
        }

        .elementor-18654 .elementor-element.elementor-element-feaea9d>.elementor-widget-container {
            margin: 0px 0px 0px 5px;
        }

        @media(max-width:767px) {
            .elementor-18654 .elementor-element.elementor-element-97bba67 {
                padding: 14px 20px 14px 20px;
            }

            .elementor-18654 .elementor-element.elementor-element-20ea2c9 {
                width: 50%;
            }

            .elementor-18654 .elementor-element.elementor-element-703d5de .logo_image {
                max-height: 45px;
            }

            .elementor-18654 .elementor-element.elementor-element-89c39a1 {
                width: 50%;
            }

            .elementor-18654 .elementor-element.elementor-element-f59f78f>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
            }
        }

        @media(min-width:768px) {
            .elementor-18654 .elementor-element.elementor-element-772feca {
                width: 70.971%;
            }

            .elementor-18654 .elementor-element.elementor-element-3e4e340 {
                width: 30.962%;
            }
        }
    </style>
    <style id="elementor-post-18733">
        .elementor-18733 .elementor-element.elementor-element-41b371d9:not(.elementor-motion-effects-element-type-background),
        .elementor-18733 .elementor-element.elementor-element-41b371d9>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #29444a;
        }

        .elementor-18733 .elementor-element.elementor-element-41b371d9 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-18733 .elementor-element.elementor-element-41b371d9>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-18733 .elementor-element.elementor-element-387ce355 {
            --spacer-size: 50px;
        }

        .elementor-18733 .elementor-element.elementor-element-4f75f04 {
            --spacer-size: 10px;
        }

        .elementor-18733 .elementor-element.elementor-element-7acdfc8b:not(.elementor-motion-effects-element-type-background),
        .elementor-18733 .elementor-element.elementor-element-7acdfc8b>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #29444a;
        }

        .elementor-18733 .elementor-element.elementor-element-7acdfc8b {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: -10px;
            margin-bottom: 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-18733 .elementor-element.elementor-element-7acdfc8b>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-18733 .elementor-element.elementor-element-3de2856b .sc_item_title_text {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18733 .elementor-element.elementor-element-3de2856b .sc_item_title_text2 {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18733 .elementor-element.elementor-element-3de2856b>.elementor-widget-container {
            padding: 0% 28% 0% 0%;
        }

        .elementor-18733 .elementor-element.elementor-element-3cd6553d .sc_item_title_text {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18733 .elementor-element.elementor-element-3cd6553d .sc_item_title_text2 {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18733 .elementor-element.elementor-element-1cafe0e8 {
            --spacer-size: 6px;
        }

        .elementor-18733 .elementor-element.elementor-element-5f23599f {
            --spacer-size: 10px;
        }

        .elementor-18733 .elementor-element.elementor-element-bd0b05b .sc_item_title_text {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18733 .elementor-element.elementor-element-bd0b05b .sc_item_title_text2 {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18733 .elementor-element.elementor-element-3255073d .sc_item_title_text {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18733 .elementor-element.elementor-element-3255073d .sc_item_title_text2 {
            -webkit-text-stroke-width: 0px;
        }

        .elementor-18733 .elementor-element.elementor-element-26b9af5c {
            --spacer-size: 6px;
        }

        .elementor-18733 .elementor-element.elementor-element-254c2c69 {
            --spacer-size: 4px;
        }

        .elementor-18733 .elementor-element.elementor-element-3049b76f:not(.elementor-motion-effects-element-type-background),
        .elementor-18733 .elementor-element.elementor-element-3049b76f>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #29444a;
        }

        .elementor-18733 .elementor-element.elementor-element-3049b76f {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 0px 0px 0px 0px;
        }

        .elementor-18733 .elementor-element.elementor-element-3049b76f>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-18733 .elementor-element.elementor-element-c27e11 {
            --spacer-size: 5px;
        }

        .elementor-18733 .elementor-element.elementor-element-447840c2 {
            --spacer-size: 50px;
        }

        .elementor-18733 .elementor-element.elementor-element-6b710157 {
            --divider-border-style: solid;
            --divider-color: #282F27;
            --divider-border-width: 1px;
        }

        .elementor-18733 .elementor-element.elementor-element-6b710157 .elementor-divider-separator {
            width: 100%;
        }

        .elementor-18733 .elementor-element.elementor-element-6b710157 .elementor-divider {
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .elementor-18733 .elementor-element.elementor-element-103f48b8>.elementor-container>.elementor-row>.elementor-column>.elementor-column-wrap>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-18733 .elementor-element.elementor-element-103f48b8:not(.elementor-motion-effects-element-type-background),
        .elementor-18733 .elementor-element.elementor-element-103f48b8>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #29444a;
        }

        .elementor-18733 .elementor-element.elementor-element-103f48b8 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 0px 0px 13px 0px;
        }

        .elementor-18733 .elementor-element.elementor-element-103f48b8>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-18733 .elementor-element.elementor-element-2651d8ba {
            color: #96999F;
            font-size: 16px;
            line-height: 1.2em;
        }

        @media(max-width:1024px) {
            .elementor-18733 .elementor-element.elementor-element-3de2856b>.elementor-widget-container {
                padding: 0% 5% 0% 0%;
            }
        }

        @media(min-width:768px) {
            .elementor-18733 .elementor-element.elementor-element-23b1fd56 {
                width: 52.424%;
            }

            .elementor-18733 .elementor-element.elementor-element-39921ff6 {
                width: 24.242%;
            }

            .elementor-18733 .elementor-element.elementor-element-47075a87 {
                width: 22.974%;
            }

            .elementor-18733 .elementor-element.elementor-element-e3ec0fc {
                width: 61.97%;
            }

            .elementor-18733 .elementor-element.elementor-element-3a27fc28 {
                width: 37.992%;
            }
        }

        @media(max-width:1024px) and (min-width:768px) {
            .elementor-18733 .elementor-element.elementor-element-23b1fd56 {
                width: 34%;
            }

            .elementor-18733 .elementor-element.elementor-element-39921ff6 {
                width: 33%;
            }

            .elementor-18733 .elementor-element.elementor-element-47075a87 {
                width: 33%;
            }

            .elementor-18733 .elementor-element.elementor-element-e3ec0fc {
                width: 52%;
            }

            .elementor-18733 .elementor-element.elementor-element-3a27fc28 {
                width: 48%;
            }
        }

        @media(max-width:767px) {
            .elementor-18733 .elementor-element.elementor-element-7acdfc8b {
                margin-top: -5px;
                margin-bottom: 0px;
            }

            .elementor-18733 .elementor-element.elementor-element-3de2856b>.elementor-widget-container {
                padding: 0% 0% 0% 0%;
            }

            .elementor-18733 .elementor-element.elementor-element-39921ff6>.elementor-element-populated {
                margin: 20px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-18733 .elementor-element.elementor-element-eb34645 {
                font-size: 15px;
            }

            .elementor-18733 .elementor-element.elementor-element-5f23599f {
                --spacer-size: 5px;
            }

            .elementor-18733 .elementor-element.elementor-element-47075a87>.elementor-element-populated {
                margin: 20px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-18733 .elementor-element.elementor-element-44de9cee {
                font-size: 15px;
            }

            .elementor-18733 .elementor-element.elementor-element-103f48b8 {
                padding: 0px 0px 0px 0px;
            }

            .elementor-18733 .elementor-element.elementor-element-3a27fc28>.elementor-element-populated {
                margin: -2px 0px 21px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-18733 .elementor-element.elementor-element-2651d8ba {
                font-size: 15px;
            }
        }

        .header_position_over:not(.trx_addons_page_scrolled) .top_panel .sc_layouts_row[class*="scheme_"],
        .header_position_over .top_panel .sc_layouts_row[class*="scheme_"]:not(.sc_layouts_row_fixed_on) {
            background-color: white;
        }
    </style>
    <style type="text/css" id="trx_addons-inline-styles-inline-css">
        .trx_addons_inline_1675068927 img.logo_image {
            max-height: 53px;
        }

        .trx_addons_inline_1726964019 img.logo_image {
            max-height: 53px;
        }
        
    </style>
    <style>
        .darken-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            
            background: transparent url('http://watchmaker.haz.wiki/_media/tips:stripes.png') repeat top left;
            /* background-color: rgba(0, 0, 0, 0.1); Adjust the alpha value (0.5) for the level of transparency */
            z-index: 1;
        }
        .rs-slide {
            position: relative;
        }
        .rs-slide img {
            position: relative;
            z-index: 0;
        }
    </style>
</head>

<body
    class="page-template-default page page-id-18038 wp-custom-logo theme-agricola woocommerce-no-js tinvwl-theme-style skin_default scheme_light blog_mode_page body_style_fullscreen is_single sidebar_hide expand_content remove_margins trx_addons_present header_type_custom header_style_header-custom-18654 header_position_default menu_side_none no_layout fixed_blocks_sticky elementor-default elementor-kit-15 elementor-page elementor-page-18038">
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="body_wrap">

        <div class="page_wrap">
            <a class="agricola_skip_link skip_to_content_link" href="#content_skip_link_anchor" tabindex="1">Skip to
                content</a>
            <a class="agricola_skip_link skip_to_footer_link" href="#footer_skip_link_anchor" tabindex="1">Skip to
                footer</a>

            <?php include 'components/header.php' ?>



            <div class="page_content_wrap">
                <div class="content_wrap_fullscreen">


                    <div class="content">
                        <a id="content_skip_link_anchor" class="agricola_skip_link_anchor" href="#"></a>

                        <article id="post-18038"
                            class="post_item_single post_type_page post-18038 page type-page status-publish hentry">


                            <div class="post_content entry-content">
                                <div data-elementor-type="wp-page" data-elementor-id="18038"
                                    class="elementor elementor-18038">
                                    <div class="elementor-inner">
                                        <div class="elementor-section">
                                        <section style="height: 100vh;" class="elementor-section elementor-top-section elementor-element elementor-element-771869f elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static" data-id="771869f" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-extended">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d91685a sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="d91685a" data-element_type="column">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-0015647 sc_fly_static elementor-widget elementor-widget-trx_widget_slider" data-id="0015647" data-element_type="widget" data-widget_type="trx_widget_slider.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="widget_area sc_widget_slider">
                                                                                <aside class="widget widget_slider">
                                                                                    <div class="slider_wrap slider_engine_revo slider_alias_organic-farm">
                                                                                        <div class="wp-block-themepunch-revslider 0">
                                                                                            <!-- START Organic Farm REVOLUTION SLIDER 6.5.31 -->
                                                                                            <p class="rs-p-wp-fix"></p>
                                                                                            <rs-module-wrap id="rev_slider_4_1_wrapper" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;">
                                                                                                <rs-module id="rev_slider_4_1" style="" data-version="6.5.31">
                                                                                                    <rs-slides>

                                                                                                        <rs-slide style="position: relative; overflow: hidden;" data-key="rs-6" data-title="Slide" data-thumb="//agricola.axiomthemes.com/wp-content/uploads/2022/08/slider-4-slide-1-copyright-146x102.jpg" data-anim="adpr:false;ms:1000ms;" data-in="o:0;" data-out="a:false;">
                                                                                                            <div class="darken-overlay"></div>
                                                                                                            <img decoding="async" src="images/site/10.jpeg" alt="" title="slider-4-slide-1-copyright" width="1920" height="980" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="images/site/10.jpeg" data-parallax="off" data-panzoom="d:10000;ss:100;se:110%;">
                                                                                                         
                                                                                                            
                                                                                                            <rs-zone id="rrzm_6" class="rev_row_zone_middle" style="z-index: 14;">
                                                                                                                
                                                                                                                <rs-row id="slider-4-slide-6-layer-13" data-type="row" data-xy="xo:50px;yo:50px;" data-cbreak="nobreak" data-basealign="slide" data-rsp_bd="off" data-frame_0="o:1;" data-frame_999="o:0;st:w;sR:8700;sA:9000;" style="z-index:1;">
                                                                                                                
                                                                                                                    <rs-column id="slider-4-slide-6-layer-14" data-type="column" data-xy="xo:50px;yo:50px;" data-text="l:26,24,24,24;a:center;" data-rsp_bd="off" data-column="w:100%;" data-frame_0="o:1;" data-frame_999="o:0;st:w;sR:8700;sA:9000;" style="z-index:2;width:100%;">
                                                                                                                        <rs-layer  data-type="text" data-text="w:normal;s:19,17,16,16;l:28,26,24,24;a:center;" data-vbility="t,t,t,f" data-rsp_o="off" data-rsp_bd="off" data-disp="inline-block" data-frame_0="x:30px;" data-frame_1="st:1770;sp:1000;" data-frame_999="o:0;st:w;sR:6230;" style="z-index:3;font-family:'DM Sans';display:inline-block;">
                                                                                                                            where ever you are
                                                                                                                        </rs-layer>
                                                                                                                        
                                                                                                                        
                                                                                                                        <rs-layer id="slider-4-slide-6-layer-0" data-type="shape" data-rsp_ch="on" data-xy="xo:50px,37px,19px,11px;yo:160px,120px,64px,39px;" data-text="w:normal;s:20,15,8,4;c:both;l:0,18,9,6;" data-flcr="c:both;" data-dim="w:100%;h:22px,16px,12px,0px;" data-frame_999="o:0;st:w;sR:8700;" style="z-index:4;">
                                                                                                                        </rs-layer>
                                                                                                                        <rs-layer id="slider-4-slide-6-layer-3" class="sldr-title" data-type="text" data-xy="xo:0,35px,35px,35px;yo:0,281px,281px,281px;" data-text="w:normal;s:78,58,40,28;l:72,58,42,34;fw:500;a:center;" data-rsp_o="off" data-disp="inline-block" data-frame_0="x:50;" data-frame_1="st:740;sp:1000;sR:740;" data-frame_999="o:0;st:w;sR:7260;" style="z-index:5;font-family:'halyard-display';display:inline-block;">
                                                                                                                            Get the help you need
                                                                                                                        </rs-layer>
                                                                                                                        <!--                                                                                                                         
                                                                                                                        <rs-layer id="slider-4-slide-6-layer-19" data-type="shape" data-rsp_ch="on" data-xy="xo:50px,37px,19px,11px;yo:160px,120px,64px,39px;" data-text="w:normal;s:20,15,8,4;c:both;l:0,18,9,6;" data-flcr="c:both;" data-dim="w:100%;h:50px,36px,32px,20px;" data-frame_999="o:0;st:w;sR:8700;" style="z-index:6;">
                                                                                                                        </rs-layer> -->
                                                                                                                        <p>Access expert guidance tailored to your needs for proficient problem-solving and progress</p>
                                                                                                                    </rs-column>
                                                                                                                </rs-row>
                                                                                                            </rs-zone>
                                                                                                        </rs-slide>

                                                                                                        <rs-slide style="position: absolute;" data-key="rs-7" data-title="Slide" data-thumb="//agricola.axiomthemes.com/wp-content/uploads/2022/08/slider-4-slide-2-copyright-146x102.jpg" data-anim="adpr:false;ms:1000ms;" data-in="o:0;" data-out="a:false;">
                                                                                                            <div class="darken-overlay"></div>
                                                                                                            <img decoding="async" src="images/site/3.png" alt="Slider Slide" title="slider-4-slide-2-copyright" width="1920" height="980" class="rev-slidebg tp-rs-img rs-lazyload darken-image" data-lazyload="images/site/3.png" data-parallax="off" data-panzoom="d:10000;ss:100;se:110%;" data-no-retina>
    
                                                                                                            <rs-zone id="rrzm_7" class="rev_row_zone_middle" style="z-index: 14;">
                                                                                                                
                                                                                                                <rs-row id="slider-4-slide-7-layer-13" data-type="row" data-xy="xo:50px;yo:50px;" data-cbreak="nobreak" data-basealign="slide" data-rsp_bd="off" data-frame_0="o:1;" data-frame_999="o:0;st:w;sR:8700;sA:9000;" style="z-index:1;">
                                                                                                                
                                                                                                                    <rs-column id="slider-4-slide-7-layer-14" data-type="column" data-xy="xo:50px;yo:50px;" data-text="l:26,24,24,24;a:center;" data-rsp_bd="off" data-column="w:100%;" data-frame_0="o:1;" data-frame_999="o:0;st:w;sR:8700;sA:9000;" style="z-index:2;width:100%;">
                                                                                                                    
                                                                                                                        <rs-layer  data-type="text" data-text="w:normal;s:19,17,16,16;l:28,26,24,24;a:center;" data-vbility="t,t,t,f" data-rsp_o="off" data-rsp_bd="off" data-disp="inline-block" data-frame_0="x:30px;" data-frame_1="st:1770;sp:1000;" data-frame_999="o:0;st:w;sR:6230;" style="z-index:3;font-family:'DM Sans';display:inline-block;">
                                                                                                                            Reach to out us
                                                                                                                        </rs-layer>
                                                                                                                        
                                                                                                                        <rs-layer id="slider-4-slide-7-layer-0" data-type="shape" data-rsp_ch="on" data-xy="xo:50px,37px,19px,11px;yo:160px,120px,64px,39px;" data-text="w:normal;s:20,15,8,4;c:both;l:0,18,9,6;" data-flcr="c:both;" data-dim="w:100%;h:22px,16px,12px,0px;" data-frame_999="o:0;st:w;sR:8700;" style="z-index:4;">
                                                                                                                        </rs-layer>
                                                                                                                        
                                                                                                                        <rs-layer id="slider-4-slide-7-layer-24" class="sldr-title" data-type="text" data-xy="xo:0,35px,35px,35px;yo:0,281px,281px,281px;" data-text="w:normal;s:78,58,40,28;l:72,58,42,34;fw:500;a:center;" data-rsp_o="off" data-disp="inline-block" data-frame_0="x:50;" data-frame_1="st:740;sp:1000;sR:740;" data-frame_999="o:0;st:w;sR:7260;" style="z-index:5;font-family:'halyard-display';display:inline-block;">
                                                                                                                            Professional help is <br />on call
                                                                                                                        </rs-layer>
                                                                                                                        
                                                                                                                        <rs-layer id="slider-4-slide-7-layer-19" data-type="shape" data-rsp_ch="on" data-xy="xo:50px,37px,19px,11px;yo:160px,120px,64px,39px;" data-text="w:normal;s:20,15,8,4;c:both;l:0,18,9,6;" data-flcr="c:both;" data-dim="w:100%;h:50px,36px,32px,20px;" data-frame_999="o:0;st:w;sR:8700;" style="z-index:6;">
                                                                                                                        </rs-layer>
                                                                                                                        <a id="slider-4-slide-7-layer-21" class="rs-layer rev-btn" href="contact.php" target="_self" data-type="button" data-text="w:normal;s:14,14,14,13;l:54,52,50,50;ls:1.5px;fw:500;a:center;" data-dim="minh:0px,none,none,none;" data-rsp_o="off" data-rsp_bd="off" data-disp="inline-block" data-padding="r:40,32,28,28;l:40,32,28,28;" data-frame_0="x:30px;" data-frame_1="st:1250;sp:1000;" data-frame_999="o:0;st:w;sR:6750;" data-frame_hover="rX:0deg;rY:0deg;bgc:#dcb000;boc:#1f242e;bor:0px,0px,0px,0px;bos:solid;bow:0px,0px,0px,0px;e:power1.inOut;" style="z-index:7;background-color:#770614;font-family:'halyard-display';text-transform:uppercase;display:inline-block;will-change:transform;">
                                                                                                                            Go Contact Us
                                                                                                                        </a>
                                                                                                                    </rs-column>
                                                                                                                </rs-row>
                                                                                                            </rs-zone>
                                                                                                        </rs-slide>
                                                                                                        <rs-slide style="position: absolute;" data-key="rs-8" data-title="Slide" data-thumb="images/site/6.jpg" data-anim="adpr:false;ms:1000ms;" data-in="o:0;" data-out="a:false;">
                                                                                                            <div class="darken-overlay"></div>
                                                                                                            <img decoding="async" src="images/site/6.jpg" alt="Slider Slide" title="slider-4-slide-3-copyright" width="1920" height="980" class="rev-slidebg tp-rs-img rs-lazyload darken-image" data-lazyload="images/site/6.jpg" data-parallax="off" data-panzoom="d:10000;ss:100;se:110%;" data-no-retina>
                                                                                                            
                                                                                                            <rs-zone id="rrzm_8" class="rev_row_zone_middle" style="z-index: 14;">
                                                                                                            
                                                                                                                <rs-row id="slider-4-slide-8-layer-13" data-type="row" data-xy="xo:50px;yo:50px;" data-cbreak="nobreak" data-basealign="slide" data-rsp_bd="off" data-frame_0="o:1;" data-frame_999="o:0;st:w;sR:8700;sA:9000;" style="z-index:1;">
                                                                                                                
                                                                                                                    <rs-column id="slider-4-slide-8-layer-14" data-type="column" data-xy="xo:50px;yo:50px;" data-text="l:26,24,24,24;a:center;" data-rsp_bd="off" data-column="w:100%;" data-frame_0="o:1;" data-frame_999="o:0;st:w;sR:8700;sA:9000;" style="z-index:2;width:100%;">
                                                                                                                
                                                                                                                        <rs-layer id="slider-4-slide-8-layer-1" data-type="text" data-text="w:normal;s:19,17,16,16;l:28,26,24,24;a:center;" data-vbility="t,t,t,f" data-rsp_o="off" data-rsp_bd="off" data-disp="inline-block" data-frame_0="x:30px;" data-frame_1="st:1770;sp:1000;sR:1770;" data-frame_999="o:0;st:w;sR:6230;" style="z-index:3;font-family:'DM Sans';display:inline-block;">
                                                                                                                            Buy fresh products on Marketplace
                                                                                                                        </rs-layer>
                                                                                                                        <rs-layer id="slider-4-slide-8-layer-0" data-type="shape" data-rsp_ch="on" data-xy="xo:50px,37px,19px,11px;yo:160px,120px,64px,39px;" data-text="w:normal;s:20,15,8,4;c:both;l:0,18,9,6;" data-flcr="c:both;" data-dim="w:100%;h:22px,16px,8px,0px;" data-frame_999="o:0;st:w;sR:8700;" style="z-index:4;">
                                                                                                                        </rs-layer>
                                                                                                                        <rs-layer id="slider-4-slide-8-layer-24" class="sldr-title" data-type="text" data-xy="xo:0,35px,35px,35px;yo:0,281px,281px,281px;" data-text="w:normal;s:92,72,54,38;l:92,76,64,46;fw:500;a:center;" data-rsp_o="off" data-disp="inline-block" data-frame_0="x:50;" data-frame_1="st:740;sp:1000;sR:740;" data-frame_999="o:0;st:w;sR:7260;" style="z-index:5;font-family:'halyard-display';display:inline-block;">
                                                                                                                            Increase your prodctivity 
                                                                                                                        </rs-layer>
                                                                                                                        <rs-layer id="slider-4-slide-8-layer-19" data-type="shape" data-rsp_ch="on" data-xy="xo:50px,37px,19px,11px;yo:160px,120px,64px,39px;" data-text="w:normal;s:20,15,8,4;c:both;l:0,18,9,6;" data-flcr="c:both;" data-dim="w:100%;h:44px,30px,26px,20px;" data-frame_999="o:0;st:w;sR:8700;" style="z-index:6;">
                                                                                                                        </rs-layer>
                                                                                                                        <a id="slider-4-slide-8-layer-21" class="rs-layer rev-btn" href="https://market.ecoagrozm.com/shop-products" target="_self" data-type="button" data-text="w:normal;s:14,14,14,13;l:54,52,50,50;ls:1.5px;fw:500;a:center;" data-dim="minh:0px,none,none,none;" data-rsp_o="off" data-rsp_bd="off" data-disp="inline-block" data-margin="r:10,8,6,6;" data-padding="r:40,32,28,28;l:40,32,28,28;" data-frame_0="x:30px;" data-frame_1="st:1250;sp:1000;sR:1250;" data-frame_999="o:0;st:w;sR:6750;" data-frame_hover="rX:0deg;rY:0deg;bgc:#dcb000;boc:#1f242e;bor:0px,0px,0px,0px;bos:solid;bow:0px,0px,0px,0px;e:power1.inOut;" style="z-index:7;background-color:#770614;font-family:'halyard-display';text-transform:uppercase;display:inline-block;will-change:transform;">
                                                                                                                            Goto the Shop
                                                                                                                        </a>
                                                                                                                        <a id="slider-4-slide-8-layer-2" class="rs-layer rev-btn" href="contact.php" target="_self" data-type="button" data-text="w:normal;s:14,14,14,13;l:50,48,46,46;ls:1.5px;fw:500;a:center;" data-dim="minh:0px,none,none,none;" data-rsp_o="off" data-rsp_bd="off" data-disp="inline-block" data-padding="r:38,30,26,26;l:38,30,26,26;" data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;" data-frame_0="x:30px;" data-frame_1="st:1350;sp:1000;sR:1350;" data-frame_999="o:0;st:w;sR:6650;" data-frame_hover="rX:0deg;rY:0deg;bgc:#92bb53;boc:#92bb53;bor:0px,0px,0px,0px;bos:solid;bow:2px,2px,2px,2px;e:power1.inOut;" style="z-index:8;font-family:'halyard-display';text-transform:uppercase;display:inline-block;will-change:transform;">
                                                                                                                            Contact Info
                                                                                                                        </a>
                                                                                                                    </rs-column>
                                                                                                                </rs-row>
                                                                                                            </rs-zone>
                                                                                                            
                                                                                                        </rs-slide>
                                                                                                    </rs-slides>
                                                                                                    <rs-static-layers>
                                                                                                        
                                                                                                    </rs-static-layers>
                                                                                                </rs-module>
                                                                                                <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
                                                                                                </script>
                                                                                                <script>
                                                                                                    setREVStartSize({
                                                                                                        c: 'rev_slider_4_1',
                                                                                                        rl: [1240,
                                                                                                            1460,
                                                                                                            785,
                                                                                                            500
                                                                                                        ],
                                                                                                        el: [980,
                                                                                                            700,
                                                                                                            480,
                                                                                                            480
                                                                                                        ],
                                                                                                        gw: [1920,
                                                                                                            1440,
                                                                                                            778,
                                                                                                            480
                                                                                                        ],
                                                                                                        gh: [980,
                                                                                                            700,
                                                                                                            480,
                                                                                                            480
                                                                                                        ],
                                                                                                        type: 'standard',
                                                                                                        justify: '',
                                                                                                        layout: 'fullscreen',
                                                                                                        offsetContainer: '',
                                                                                                        offset: '',
                                                                                                        mh: "0"
                                                                                                    });
                                                                                                    if (window
                                                                                                        .RS_MODULES !==
                                                                                                        undefined && window
                                                                                                        .RS_MODULES
                                                                                                        .modules !==
                                                                                                        undefined && window
                                                                                                        .RS_MODULES.modules[
                                                                                                            "revslider41"
                                                                                                        ] !== undefined
                                                                                                    ) {
                                                                                                        window.RS_MODULES
                                                                                                            .modules[
                                                                                                                "revslider41"
                                                                                                            ].once =
                                                                                                            false;
                                                                                                        window.revapi4 =
                                                                                                            undefined;
                                                                                                        if (window
                                                                                                            .RS_MODULES
                                                                                                            .checkMinimal !==
                                                                                                            undefined)
                                                                                                            window
                                                                                                            .RS_MODULES
                                                                                                            .checkMinimal()
                                                                                                    }
                                                                                                </script>
                                                                                            </rs-module-wrap>
                                                                                            <!-- END REVOLUTION SLIDER -->
                                                                                        </div>
                                                                                    </div>
                                                                                </aside>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section
                                                class="elementor-section elementor-element elementor-element-56d4e51 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                data-id="56d4e51" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-extended">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-87b85e2 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                            data-id="87b85e2" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-acdfcaf sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                                        data-id="acdfcaf" data-element_type="widget"
                                                                        data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-150cf53 sc_fly_static elementor-widget elementor-widget-spacer"
                                                                        data-id="150cf53" data-element_type="widget"
                                                                        data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section
                                                class="elementor-section elementor-top-section elementor-element elementor-element-4eca6d7 elementor-section-full_width elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                data-id="4eca6d7" data-element_type="section">

                                                <div class="mobile-view">
                                                <a href="tel:+260773505560" style="color: #1F603F; font-weight:bold; font-size: 21px;"><span>+260 773 505 560</span></a>
                                                </div>
                                                <div class="elementor-container elementor-column-gap-no">
                                                    
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1d8c925 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                            data-id="1d8c925" data-element_type="column">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-e9180f4 sc_fly_static elementor-widget elementor-widget-text-editor"
                                                                        data-id="e9180f4" data-element_type="widget"
                                                                        data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div
                                                                                class="elementor-text-editor elementor-clearfix">
                                                                                <!-- <p>Cultivating agriculture that works
                                                                                    for the future</p> -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-b163e95 sc_fly_static elementor-widget elementor-widget-spacer"
                                                                        data-id="b163e95" data-element_type="widget"
                                                                        data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-85b3acb sc_fly_static elementor-widget elementor-widget-heading"
                                                                        data-id="85b3acb" data-element_type="widget"
                                                                        data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h1 class="elementor-heading-title elementor-size-xxl">
                                                                                <span class="has-text-link-color">Agricultural Advisory</span>
                                                                                Services
                                                                            </h1>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-482c7ec sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                            data-id="482c7ec" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-2b3ebab sc_fly_static elementor-widget elementor-widget-text-editor"
                                                                        data-id="2b3ebab" data-element_type="widget"
                                                                        data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div
                                                                                class="elementor-text-editor elementor-clearfix">
                                                                                <p>We're dedicated to pioneering
                                                                                    innovative solutions and services
                                                                                    that drive the agricultural industry
                                                                                    towards a sustainable and prosperous
                                                                                    future.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br><br>

                                            </section>
                                            <section
                                                class="elementor-section elementor-top-section elementor-element elementor-element-26afd02 elementor-section-full_width elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                data-id="26afd02" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-no">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-04a8037 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                            data-id="04a8037" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">

                                                                    <div class="elementor-element elementor-element-28dd3e1 sc_fly_static elementor-widget elementor-widget-trx_sc_services"
                                                                        data-id="28dd3e1" data-element_type="widget"
                                                                        data-widget_type="trx_sc_services.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div
                                                                                class="sc_services color_style_dark sc_services_cool sc_services_featured_top">
                                                                                <div class="sc_services_columns_wrap sc_item_columns sc_item_posts_container sc_item_columns_4 trx_addons_columns_wrap columns_padding_bottom columns_in_single_row">
                                                                                    <div class="trx_addons_column-1_3 trx_addons_column-1_2-tablet">
                                                                                        <div data-post-id="871"
                                                                                            class="sc_services_item sc_item_container post_container with_content with_more with_image sc_services_item_featured_none post-871 cpt_services type-cpt_services status-publish has-post-thumbnail hentry cpt_services_group-what-we-do">
                                                                                            <div class="sc_services_item_content "
                                                                                                style="background-image: url('images/call.webp');">
                                                                                                <div
                                                                                                    class="sc_services_item_content_inner">
                                                                                                    <div
                                                                                                        class="sc_services_item_content_inner_bottom">
                                                                                                        <h6
                                                                                                            class="sc_services_item_title">
                                                                                                            <a  href="https://callcenter.ecoagrozm.com">Call Center</a>
                                                                                                        </h6>
                                                                                                        <div
                                                                                                            class="sc_services_item_text">
                                                                                                            <p>
                                                                                                            Access call center services
                                                                                                            </p>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="sc_services_item_button sc_item_button">
                                                                                                            <a href="https://callcenter.ecoagrozm.com" class="sc_services_item_more_link">
                                                                                                                <span
                                                                                                                    class="link_text">Read
                                                                                                                    more</span><span
                                                                                                                    class="link_icon"></span>
                                                                                                            </a>
                                                                                                             <!-- <a href="http://localhost/eco-auth/eco-auth/login?source=website&destination=call-center" class="sc_services_item_more_link">
                                                                                                                <span
                                                                                                                    class="link_text">Read
                                                                                                                    more</span><span
                                                                                                                    class="link_icon"></span>
                                                                                                            </a> -->
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pt-mobile trx_addons_column-1_3 trx_addons_column-1_2-tablet">
                                                                                        <div data-post-id="870" class="sc_services_item sc_item_container post_container with_content with_more with_image sc_services_item_featured_none post-870 cpt_services type-cpt_services status-publish has-post-thumbnail hentry cpt_services_group-what-we-do">
                                                                                            <div class="sc_services_item_content "
                                                                                                style="background-image: url('images/6.webp');">
                                                                                                <div
                                                                                                    class="sc_services_item_content_inner">
                                                                                                    <div
                                                                                                        class="sc_services_item_content_inner_bottom">
                                                                                                        <h6
                                                                                                            class="sc_services_item_title">
                                                                                                            <a  href="https://callcenter.ecoagrozm.com">Advisory
                                                                                                                Services</a>
                                                                                                        </h6>
                                                                                                        <div
                                                                                                            class="sc_services_item_text">
                                                                                                            <p>
                                                                                                                Your advisory services
                                                                                                            </p>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="sc_services_item_button sc_item_button">
                                                                                                            <a href="https://callcenter.ecoagrozm.com" class="sc_services_item_more_link">
                                                                                                                <span
                                                                                                                    class="link_text">Read
                                                                                                                    more</span><span
                                                                                                                    class="link_icon"></span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div><a
                                                                                                    class="sc_services_item_link"
                                                                                                    href="https://callcenter.ecoagrozm.com"></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pt-mobile trx_addons_column-1_3 trx_addons_column-1_2-tablet">
                                                                                        <div data-post-id="864"
                                                                                            class="sc_services_item sc_item_container post_container with_content with_more with_image sc_services_item_featured_none post-864 cpt_services type-cpt_services status-publish has-post-thumbnail hentry cpt_services_group-what-we-do">
                                                                                            <div class="sc_services_item_content "
                                                                                                style="background-image: url('images/site/55.jpg');">
                                                                                                <div
                                                                                                    class="sc_services_item_content_inner">
                                                                                                    <div
                                                                                                        class="sc_services_item_content_inner_bottom">
                                                                                                        <h6
                                                                                                            class="sc_services_item_title">
                                                                                                            <a href="https://market.ecoagrozm.com">
                                                                                                                Marketplace</a>
                                                                                                        </h6>
                                                                                                        <div
                                                                                                            class="sc_services_item_text">
                                                                                                            <p>Buy and
                                                                                                                Sell
                                                                                                                Your
                                                                                                                Produce
                                                                                                            </p>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="sc_services_item_button sc_item_button">
                                                                                                            <a href="https://market.ecoagrozm.com" class="sc_services_item_more_link">
                                                                                                                <span
                                                                                                                    class="link_text">Read
                                                                                                                    more</span><span
                                                                                                                    class="link_icon"></span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div><a
                                                                                                    class="sc_services_item_link"
                                                                                                    href="https://market.ecoagrozm.com"></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- <div class="pt-mobile trx_addons_column-1_4 trx_addons_column-1_2-tablet">
                                                                                        <div data-post-id="17767"
                                                                                            class="sc_services_item sc_item_container post_container with_content with_more with_image sc_services_item_featured_none post-17767 cpt_services type-cpt_services status-publish has-post-thumbnail hentry cpt_services_group-what-we-do">
                                                                                            <div class="sc_services_item_content "
                                                                                                style="background-image: url('images/pay.webp');">
                                                                                                <div
                                                                                                    class="sc_services_item_content_inner">
                                                                                                    <div
                                                                                                        class="sc_services_item_content_inner_bottom">
                                                                                                        <h6
                                                                                                            class="sc_services_item_title">
                                                                                                            <a href="#coming-soon">Payment
                                                                                                                Solutions</a>
                                                                                                        </h6>
                                                                                                        <div
                                                                                                            class="sc_services_item_text">
                                                                                                            <p> 
                                                                                                            Access to payment solutions
                                                                                                            </p>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="sc_services_item_button sc_item_button">
                                                                                                            <a href="#coming-soon" class="sc_services_item_more_link">
                                                                                                                <span
                                                                                                                    class="link_text">Read
                                                                                                                    more</span><span
                                                                                                                    class="link_icon"></span>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div><a
                                                                                                    class="sc_services_item_link"
                                                                                                    href="#coming-soon"></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div> -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section
                                                class="elementor-section elementor-top-section elementor-element elementor-element-13d55f9 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                data-id="13d55f9" data-element_type="section">

                                            </section>
                                            <section>
                                                <div class="uk-section uk-section-default uk-padding-remove-vertical in-wave-5 in-offset-bottom-30">

                                                    <div class="uk-section uk-section-default uk-padding-remove-vertical in-wave-5 in-offset-bottom-30">
                                                        <div class="uk-container">
                                                            <div class="uk-grid">

                                                                <div class="uk-width-1-1 in-price-list">
                                                                    <div data-uk-slider="autoplay: true; autoplay-interval: 2700"
                                                                        class="uk-slider uk-slider-container">
                                                                        <ul class="uk-slider-items uk-child-width-1-3@s uk-child-width-1-5@m uk-text-small uk-text-center uk-grid"
                                                                            data-uk-grid=""
                                                                            style="transform: translate3d(-226px, 0px, 0px);">
                                                                            <li tabindex="-1" class="uk-active"
                                                                                style="order: 1;">
                                                                                <span>Maize</span>
                                                                                <span
                                                                                    class="uk-label uk-label-success uk-border-pill uk-margin-small-left"><i
                                                                                        class="fas fa-caret-up"></i>
                                                                                    1478.81 &nbsp;(+0.28%)</span>
                                                                            </li>
                                                                            <li tabindex="-1" class="uk-active"
                                                                                style="order: 1;">
                                                                                <span>Tomatoes</span>
                                                                                <span
                                                                                    class="uk-label uk-label-danger uk-border-pill uk-margin-small-left"><i
                                                                                        class="fas fa-caret-down"></i>
                                                                                    1.3191 &nbsp;(-1.07%)</span>
                                                                            </li>
                                                                            <li tabindex="-1" class=""
                                                                                style="order: 1;">
                                                                                <span>Wheat</span>
                                                                                <span
                                                                                    class="uk-label uk-label-danger uk-border-pill uk-margin-small-left"><i
                                                                                        class="fas fa-caret-down"></i>
                                                                                    1.1159 &nbsp;(-0.11%)</span>
                                                                            </li>
                                                                            <li tabindex="-1" class=""
                                                                                style="order: 1;">
                                                                                <span>Sunflower</span>
                                                                                <span
                                                                                    class="uk-label uk-label-success uk-border-pill uk-margin-small-left"><i
                                                                                        class="fas fa-caret-up"></i>
                                                                                    109.59 &nbsp;(+0.05%)</span>
                                                                            </li>
                                                                            <li tabindex="-1" class="uk-first-column"
                                                                                style="">
                                                                                <span>Rice</span>
                                                                                <span
                                                                                    class="uk-label uk-label-success uk-border-pill uk-margin-small-left"><i
                                                                                        class="fas fa-caret-up"></i>
                                                                                    1.3172 &nbsp;(+0.18%)</span>
                                                                            </li>
                                                                            <li tabindex="-1" class="uk-active"
                                                                                style="">
                                                                                <span>Steak Meats</span>
                                                                                <span
                                                                                    class="uk-label uk-label-success uk-border-pill uk-margin-small-left"><i
                                                                                        class="fas fa-caret-up"></i>
                                                                                    0.9776 &nbsp;(+0.06%)</span>
                                                                            </li>
                                                                            <li tabindex="-1" class="uk-active"
                                                                                style="">
                                                                                <span>Oil</span>
                                                                                <span
                                                                                    class="uk-label uk-label-danger uk-border-pill uk-margin-small-left"><i
                                                                                        class="fas fa-caret-down"></i>
                                                                                    0.67064 &nbsp;(-0.08%)</span>
                                                                            </li>
                                                                            <li tabindex="-1" class="uk-active">
                                                                                <span>Fertilizers</span>
                                                                                <span
                                                                                    class="uk-label uk-label-success uk-border-pill uk-margin-small-left"><i
                                                                                        class="fas fa-caret-up"></i>
                                                                                    141.91 &nbsp;(+0.12%)</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr style="margin: 1.7857em 0 !important;">
                                                </div>
                                            </section>
                                            <section
                                                class="elementor-section elementor-top-section elementor-element elementor-element-13d55f9 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                data-id="13d55f9" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-extended">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5e7eda0 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                            data-id="5e7eda0" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-acda4b6 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer"
                                                                        data-id="acda4b6" data-element_type="widget"
                                                                        data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section
                                                class="elementor-section elementor-top-section elementor-element elementor-element-24839b7 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                data-id="24839b7" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-extended">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-fde3dae sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                            data-id="fde3dae" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <section
                                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-6473f57 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                                        data-id="6473f57" data-element_type="section">
                                                                        <div
                                                                            class="elementor-container">
                                                                            <div class="">
                                                                                <div class="elementor-col-100 elementor-element elementor-element-eba696e sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static" data-id="eba696e" data-element_type="">
                                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                                        <div class="elementor-widget-wrap">
                                                                                            <div class="elementor-element elementor-element-e07e48d no-title sc_fly_static elementor-widget elementor-widget-image"
                                                                                                data-id="e07e48d"
                                                                                                data-element_type="widget"
                                                                                                data-widget_type="image.default">
                                                                                                <div
                                                                                                    class="elementor-widget-container">
                                                                                                    <div
                                                                                                        class="elementor-image">
                                                                                                        <img decoding="async"
                                                                                                            fetchpriority="high"
                                                                                                            width="660"
                                                                                                            height="879"
                                                                                                            src="images/site/14.jpg"
                                                                                                            class="attachment-full size-full"
                                                                                                            alt=""
                                                                                                            sizes="(max-width: 660px) 100vw, 660px">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- <div class="elementor-element elementor-element-0406701 sc_height_large sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                data-id="0406701"
                                                                                                data-element_type="widget"
                                                                                                data-widget_type="spacer.default">
                                                                                                <div
                                                                                                    class="elementor-widget-container">
                                                                                                    <div
                                                                                                        class="elementor-spacer">
                                                                                                        <div
                                                                                                            class="elementor-spacer-inner">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div> -->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-92403ce sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                                                    data-id="92403ce"
                                                                                    data-element_type="column">
                                                                                    <div
                                                                                        class="elementor-column-wrap elementor-element-populated">
                                                                                        <div
                                                                                            class="elementor-widget-wrap">
                                                                                            <div class="elementor-element elementor-element-d9c2209 no-title sc_fly_static elementor-widget elementor-widget-image"
                                                                                                data-id="d9c2209"
                                                                                                data-element_type="widget"
                                                                                                data-widget_type="image.default">
                                                                                                <div
                                                                                                    class="elementor-widget-container">
                                                                                                    <div
                                                                                                        class="elementor-image">
                                                                                                        <img decoding="async"
                                                                                                            width="615"
                                                                                                            height="675"
                                                                                                            
                                                                                                            src="images/site/13.jpg"
                                                                                                            class="attachment-full size-full"
                                                                                                            alt="" sizes="(max-width: 615px) 100vw, 615px">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div> -->
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-bf910de sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                            data-id="bf910de" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-2b6a309 sc_fly_static elementor-widget elementor-widget-trx_sc_title"
                                                                        data-id="2b6a309" data-element_type="widget"
                                                                        data-widget_type="trx_sc_title.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div
                                                                                class="sc_title color_style_dark sc_title_default">
                                                                                <span
                                                                                    class="sc_item_subtitle sc_title_subtitle sc_item_subtitle_above sc_item_title_style_default">About
                                                                                    Us</span>
                                                                                <h1
                                                                                    class="sc_item_title sc_title_title sc_item_title_style_default sc_item_title_tag">
                                                                                    <span
                                                                                        class="sc_item_title_text">Learn
                                                                                        More About Us
                                                                                    </span>
                                                                                </h1>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-4941a60 sc_fly_static elementor-widget elementor-widget-spacer"
                                                                        data-id="4941a60" data-element_type="widget"
                                                                        data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-bd05054 sc_fly_static elementor-widget elementor-widget-text-editor"
                                                                        data-id="bd05054" data-element_type="widget"
                                                                        data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div
                                                                                class="elementor-text-editor elementor-clearfix">
                                                                                <p>We believe in transparency and
                                                                                    collaboration. We've designed a
                                                                                    streamlined process to ensure that
                                                                                    our clients and partners have a
                                                                                    clear understanding of how we work
                                                                                    together to achieve success in
                                                                                    agriculture.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-fae36ad sc_fly_static elementor-widget elementor-widget-spacer"
                                                                        data-id="fae36ad" data-element_type="widget"
                                                                        data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-ca14252 sc_fly_static elementor-widget elementor-widget-text-editor"
                                                                        data-id="ca14252" data-element_type="widget"
                                                                        data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div
                                                                                class="elementor-text-editor elementor-clearfix">
                                                                                <ul class="trx_addons_list_success">
                                                                                    <li>Consultation and Needs
                                                                                        Assessment:</li>
                                                                                    <li>Tailored Solutions Development:
                                                                                    </li>
                                                                                    <li>Ongoing Support and
                                                                                        Optimization:</li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-17e50bb sc_fly_static elementor-widget elementor-widget-spacer"
                                                                        data-id="17e50bb" data-element_type="widget"
                                                                        data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-2df94c1 sc_fly_static elementor-widget elementor-widget-trx_sc_button"
                                                                        data-id="2df94c1" data-element_type="widget"
                                                                        data-widget_type="trx_sc_button.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="sc_item_button sc_button_wrap">
                                                                                <a href="about.php"
                                                                                    class="sc_button sc_button_default sc_button_size_normal sc_button_icon_left"><span
                                                                                        class="sc_button_text"><span
                                                                                            class="sc_button_title">Learn
                                                                                            More</span></span></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section
                                                class="elementor-section elementor-top-section elementor-element elementor-element-3c8932c elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                data-id="3c8932c" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-extended">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-83eb5fd sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                            data-id="83eb5fd" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-ebd72d8 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer"
                                                                        data-id="ebd72d8" data-element_type="widget"
                                                                        data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <!-- <section
                                                style="background:#def5dc; border-top: black solid; border-top-width: 1px;"
                                                class="elementor-section elementor-top-section elementor-element elementor-element-3734a89a elementor-section-full_width scheme_default elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                data-id="3734a89a" data-element_type="section"
                                                data-settings='{"background_background":"classic"}'>
                                                <div class="elementor-container elementor-column-gap-no">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-6780724e sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                            data-id="6780724e" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-56f740ed sc_height_huge sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                                        data-id="56f740ed" data-element_type="widget"
                                                                        data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <section
                                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-2075951 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                                        data-id="2075951" data-element_type="section">
                                                                        <div
                                                                            class="elementor-container elementor-column-gap-extended">
                                                                            <div class="elementor-row">
                                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7360551a sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                                                    data-id="7360551a"
                                                                                    data-element_type="column">
                                                                                    <div class="elementor-column-wrap">
                                                                                        <div
                                                                                            class="elementor-widget-wrap">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-column  elementor-inner-column elementor-element elementor-element-71ac946b sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                                                    data-id="71ac946b"
                                                                                    data-element_type="column">
                                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                                        <div class="elementor-widget-wrap">
                                                                                            <div class="elementor-element elementor-element-2b71c7a6 sc_fly_static elementor-widget elementor-widget-trx_sc_title"
                                                                                                data-id="2b71c7a6"
                                                                                                data-element_type="widget"
                                                                                                data-widget_type="trx_sc_title.default">
                                                                                                <div>
                                                                                                    <div class="sc_title color_style_dark sc_title_default">
                                                                                                        <span class="sc_item_subtitle sc_title_subtitle sc_item_subtitle_above sc_item_title_style_default">
                                                                                                        Sustainable Agriculture
                                                                                                        </span>
                                                                                                        <h1 class="sc_item_title sc_title_title sc_item_title_style_default sc_item_title_tag">
                                                                                                            <span class="sc_item_title_text">
                                                                                                                High-Quality Organic <br> Products for You
                                                                                                            </span>
                                                                                                        </h1>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="elementor-element elementor-element-6beadc34 sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                data-id="6beadc34"
                                                                                                data-element_type="widget"
                                                                                                data-widget_type="spacer.default">
                                                                                                <div
                                                                                                    class="elementor-widget-container">
                                                                                                    <div
                                                                                                        class="elementor-spacer">
                                                                                                        <div
                                                                                                            class="elementor-spacer-inner">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class=""
                                                                                                data-id="6837e35a"
                                                                                                data-element_type="widget"
                                                                                                data-widget_type="text-editor.default">
                                                                                                <div class="elementor-widget-container">
                                                                                                    <div
                                                                                                        class="elementor-text-editor elementor-clearfix">
                                                                                                        <p>
                                                                                                            Experience pure nature with our high-quality
                                                                                                            organic products. We're dedicated to sourcing and
                                                                                                            crafting items that enrich your life and support a
                                                                                                            healthier planet. Explore our thoughtfully designed
                                                                                                            collection for your well-being. Choose quality and
                                                                                                            sustainability for yourself and the world.
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="elementor-element elementor-element-2801ccd sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                data-id="2801ccd"
                                                                                                data-element_type="widget"
                                                                                                data-widget_type="spacer.default">
                                                                                                <div
                                                                                                    class="elementor-widget-container">
                                                                                                    <div
                                                                                                        class="elementor-spacer">
                                                                                                        <div
                                                                                                            class="elementor-spacer-inner">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="elementor-element elementor-element-378886e2 sc_fly_static elementor-widget elementor-widget-text-editor"
                                                                                                data-id="378886e2"
                                                                                                data-element_type="widget"
                                                                                                data-widget_type="text-editor.default">
                                                                                                <div
                                                                                                    class="elementor-widget-container">
                                                                                                    <div
                                                                                                        class="elementor-text-editor elementor-clearfix">
                                                                                                        <a class="simple_text_link underline_anim"
                                                                                                            href="about.php">Read
                                                                                                            More</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                    <div class="elementor-element elementor-element-4311a26b sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer"
                                                                        data-id="4311a26b" data-element_type="widget"
                                                                        data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <section
                                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-7e005f17 scheme_dark elementor-section-full_width elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                                        data-id="7e005f17" data-element_type="section">
                                                                        <div
                                                                            class="elementor-container elementor-column-gap-default">
                                                                            <div class="elementor-row">
                                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a40be39 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                                                    data-id="a40be39"
                                                                                    data-element_type="column"
                                                                                    data-settings='{"background_background":"classic"}'>
                                                                                    <div
                                                                                        class="elementor-column-wrap elementor-element-populated">
                                                                                        <div
                                                                                            class="elementor-widget-wrap">
                                                                                            <div class="elementor-element elementor-element-5bb75b83 sc_layouts_hide_on_wide sc_layouts_hide_on_desktop sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                data-id="5bb75b83"
                                                                                                data-element_type="widget"
                                                                                                data-widget_type="spacer.default">
                                                                                                <div
                                                                                                    class="elementor-widget-container">
                                                                                                    <div
                                                                                                        class="elementor-spacer">
                                                                                                        <div
                                                                                                            class="elementor-spacer-inner">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-57f71098 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                                                    data-id="57f71098"
                                                                                    data-element_type="column"
                                                                                    data-settings='{"background_background":"classic"}'>
                                                                                    <div
                                                                                        class="elementor-column-wrap elementor-element-populated">
                                                                                        <div
                                                                                            class="elementor-widget-wrap">
                                                                                            <div class="elementor-element elementor-element-01f4f36 sc_fly_static elementor-widget elementor-widget-heading"
                                                                                                data-id="01f4f36"
                                                                                                data-element_type="widget"
                                                                                                data-widget_type="heading.default">
                                                                                                <div
                                                                                                    class="elementor-widget-container">
                                                                                                    <h5
                                                                                                        class="elementor-heading-title elementor-size-default">
                                                                                                        What We Do</h5>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="elementor-element elementor-element-7d31cf7 sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                data-id="7d31cf7"
                                                                                                data-element_type="widget"
                                                                                                data-widget_type="spacer.default">
                                                                                                <div
                                                                                                    class="elementor-widget-container">
                                                                                                    <div
                                                                                                        class="elementor-spacer">
                                                                                                        <div
                                                                                                            class="elementor-spacer-inner">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="elementor-element elementor-element-96efdb5 sc_fly_static elementor-widget elementor-widget-text-editor"
                                                                                                data-id="96efdb5"
                                                                                                data-element_type="widget"
                                                                                                data-widget_type="text-editor.default">
                                                                                                <div
                                                                                                    class="elementor-widget-container">
                                                                                                    <div
                                                                                                        class="elementor-text-editor elementor-clearfix">
                                                                                                        <p>"We excel in
                                                                                                            providing
                                                                                                            top-quality
                                                                                                            Advisory
                                                                                                            Services and
                                                                                                            Agrotech
                                                                                                            Tools. Our
                                                                                                            mission is
                                                                                                            to deliver
                                                                                                            excellence
                                                                                                            and
                                                                                                            innovation
                                                                                                            to the
                                                                                                            agricultural
                                                                                                            and other
                                                                                                            deiverse
                                                                                                            industries.
                                                                                                            Discover how
                                                                                                            we can help
                                                                                                            you
                                                                                                            succeed."
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="elementor-element elementor-element-db3dfa1 sc_height_small sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                data-id="db3dfa1"
                                                                                                data-element_type="widget"
                                                                                                data-widget_type="spacer.default">
                                                                                                <div
                                                                                                    class="elementor-widget-container">
                                                                                                    <div
                                                                                                        class="elementor-spacer">
                                                                                                        <div
                                                                                                            class="elementor-spacer-inner">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="elementor-element elementor-element-785f10a sc_fly_static elementor-widget elementor-widget-heading"
                                                                                                data-id="785f10a"
                                                                                                data-element_type="widget"
                                                                                                data-widget_type="heading.default">
                                                                                                <div
                                                                                                    class="elementor-widget-container">
                                                                                                    <h5
                                                                                                        class="elementor-heading-title elementor-size-default">
                                                                                                        The
                                                                                                        Opportunities
                                                                                                    </h5>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="elementor-element elementor-element-d7f76cf sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                data-id="d7f76cf"
                                                                                                data-element_type="widget"
                                                                                                data-widget_type="spacer.default">
                                                                                                <div
                                                                                                    class="elementor-widget-container">
                                                                                                    <div
                                                                                                        class="elementor-spacer">
                                                                                                        <div
                                                                                                            class="elementor-spacer-inner">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="elementor-element elementor-element-0c2a35a sc_fly_static elementor-widget elementor-widget-text-editor"
                                                                                                data-id="0c2a35a"
                                                                                                data-element_type="widget"
                                                                                                data-widget_type="text-editor.default">
                                                                                                <div
                                                                                                    class="elementor-widget-container">
                                                                                                    <div
                                                                                                        class="elementor-text-editor elementor-clearfix">
                                                                                                        <p>We believe in
                                                                                                            creating
                                                                                                            limitless
                                                                                                            possibilities
                                                                                                            through our
                                                                                                            unwavering
                                                                                                            commitment
                                                                                                            to
                                                                                                            excellence
                                                                                                            and
                                                                                                            innovation.
                                                                                                            Our mission
                                                                                                            is to unlock
                                                                                                            potential
                                                                                                            and drive
                                                                                                            progress.
                                                                                                            Join us on
                                                                                                            this journey
                                                                                                            of growth
                                                                                                            and
                                                                                                            transformation.
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6c266bde sc_layouts_column_align_center sc_layouts_column sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                            data-id="6c266bde" data-element_type="column"
                                                            data-settings='{"background_background":"classic"}'>
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-66c96639 sc_layouts_hide_on_wide sc_layouts_hide_on_desktop sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet sc_fly_static elementor-widget elementor-widget-spacer"
                                                                        data-id="66c96639" data-element_type="widget"
                                                                        data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section> -->
                                            <section
                                                class="elementor-section elementor-top-section elementor-element elementor-element-49b1d7e elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                data-id="49b1d7e" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-extended">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ff57dcb sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                            data-id="ff57dcb" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-c0f3114 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer"
                                                                        data-id="c0f3114" data-element_type="widget"
                                                                        data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section style="background-color: #29444a; padding:2%"
                                                class="elementor-section elementor-top-section elementor-element elementor-element-09fc3e8 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                data-id="09fc3e8" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-extended">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1601233 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                            data-id="1601233" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-7f6e3ae sc_fly_static elementor-widget elementor-widget-trx_sc_title"
                                                                        data-id="7f6e3ae" data-element_type="widget"
                                                                        data-widget_type="trx_sc_title.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div
                                                                                class="sc_title color_style_dark sc_title_default">
                                                                                <span style="color:#fff" class="sc_item_subtitle sc_title_subtitle sc_item_subtitle_above sc_item_title_style_default">what
                                                                                    we do</span>
                                                                                <h1 style="color:#fff" class="sc_item_title sc_title_title sc_item_title_style_default sc_item_title_tag">
                                                                                    <span
                                                                                        class="sc_item_title_text">Bridging
                                                                                        the Gap with Professoinal tools
                                                                                        &amp; Agricultural Advisory
                                                                                        Services</span>
                                                                                </h1>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f80b5ad sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                            data-id="f80b5ad" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-399de6c sc_layouts_hide_on_tablet sc_fly_static elementor-widget elementor-widget-spacer"
                                                                        data-id="399de6c" data-element_type="widget"
                                                                        data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-d50c41e sc_fly_static elementor-widget elementor-widget-text-editor"
                                                                        data-id="d50c41e" data-element_type="widget"
                                                                        data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div style="color:#fff" class="elementor-text-editor elementor-clearfix">
                                                                                <p>We are committed to creating a
                                                                                    seamless connection between farmers
                                                                                    and agronomists through the power of
                                                                                    professional tools and expert
                                                                                    advisory services.</p>
                                                                                <p>Our mission is to foster
                                                                                    collaboration in the agricultural
                                                                                    community, equipping you with the
                                                                                    resources and knowledge to turn
                                                                                    challenges into opportunities.
                                                                                    Discover how our integrated
                                                                                    solutions and dedicated team can
                                                                                    empower your journey towards
                                                                                    agricultural excellence and success.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-f91f9f1 sc_fly_static elementor-widget elementor-widget-spacer"
                                                                        data-id="f91f9f1" data-element_type="widget"
                                                                        data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>

                                            <section
                                                class="elementor-section elementor-top-section elementor-element elementor-element-42cd551 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                data-id="42cd551" data-element_type="section">

                                                <div class="elementor-container elementor-column-gap-extended">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6d4f9b6 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                            data-id="6d4f9b6" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-a107048 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer"
                                                                        data-id="a107048" data-element_type="widget"
                                                                        data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="elementor-section elementor-top-section elementor-element elementor-element-116e5ae elementor-section-full_width elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                data-id="116e5ae" data-element_type="section">

                                                <div class="elementor-container elementor-column-gap-no">
                                                    <div class="elementor-element elementor-element-2b6a309 sc_fly_static elementor-widget elementor-widget-trx_sc_title"
                                                        data-id="2b6a309" data-element_type="widget"
                                                        data-widget_type="trx_sc_title.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="sc_title color_style_dark sc_title_default">
                                                                
                                                                <h1 class="sc_item_title sc_title_title sc_item_title_style_default sc_item_title_tag">
                                                                    <span
                                                                        class="sc_item_title_text">Widely Grown Products in Zambia
                                                                    </span>
                                                                </h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6497656 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                            data-id="6497656" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-fb3d54d sc_fly_static elementor-widget elementor-widget-shortcode"
                                                                        data-id="fb3d54d" data-element_type="widget"
                                                                        data-widget_type="shortcode.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-shortcode">
                                                                                <div class="wrap_svl_center">
                                                                                    <div class="wrap_svl_center_box">
                                                                                        <div class="wrap_svl"
                                                                                            id="body_drag_19344">
                                                                                            <div class="images_wrap">
                                                                                                <img decoding="async" src="images/world-map-copyright.png">
                                                                                            </div>
                                                                                            <div class="drag_element tips "
                                                                                                style="top: 58.15%;left: 55.85%;;">
                                                                                                <div class="point_style  ihotspot_tooltop_html"
                                                                                                    data-placement="n"
                                                                                                    data-html='&lt;div class="box_view_html"&gt;&lt;span class="close_ihp"&gt;&lt;svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve"&gt;&lt;g&gt;&lt;path d="M153.7,153.7C57.9,249.5,10,365.3,10,499c0,135.7,47.9,251.5,143.7,347.3l0,0C249.5,942.1,363.3,990,499,990c135.7,0,251.5-47.9,347.3-143.7C942.1,750.5,990,634.7,990,499c0-135.7-47.9-249.5-143.7-345.3l0,0C750.5,57.9,634.7,10,499,10C365.3,10,249.5,57.9,153.7,153.7z M209.6,211.6l2-2C289.4,129.7,387.2,89.8,499,89.8c113.8,0,209.6,39.9,291.4,121.8c79.8,77.8,119.8,175.6,119.8,287.4c0,113.8-39.9,209.6-119.8,291.4C708.6,870.3,612.8,910.2,499,910.2c-111.8,0-209.6-39.9-287.4-119.8C129.8,708.6,89.8,612.8,89.8,499C89.8,387.2,129.8,289.4,209.6,211.6z"/&gt;&lt;path d="M293.4,331.3c0,12,4,22,12,29.9L443.1,497L305.4,632.7c-8,8-12,18-12,29.9c0,10,4,18,12,26c8,8,18,12,28,12c12,0,20-4,27.9-10L499,552.9l135.7,137.7c8,6,16,10,28,10c12,0,21.9-4,27.9-10c8-8,12-18,12-28c0-12-4-21.9-12-29.9L554.9,497l135.7-135.7c8-8,12-18,12-27.9c0-12-4-22-12-29.9c-6-8-16-12-25.9-12c-12,0-21.9,4-29.9,12L499,441.1L363.3,303.4c-8-8-18-12-29.9-12c-10,0-20,4-28,12C297.4,311.4,293.4,321.4,293.4,331.3z"/&gt;&lt;/g&gt;&lt;/svg&gt;&lt;/span&gt;&lt;p&gt; Maize, Vegetables, Soya Beans&lt;/p&gt;&lt;/div&gt;'>
                                                                                                    <div class="pins_animation ihotspot_pulse"
                                                                                                        style="top:-16.5px;left:-16.5px;height:33px;width:33px">
                                                                                                    </div>
                                                                                                    <img decoding="async"
                                                                                                        src="images/pin-image.png"
                                                                                                        class="pins_image ihotspot_hastooltop"
                                                                                                        style="top: 58.15%;left: 55.85%;">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="drag_element tips "
                                                                                                style="top: 25.47%;left: 66.01%;">
                                                                                                <div class="point_style  ihotspot_tooltop_html"
                                                                                                    data-placement="n"
                                                                                                    data-html='&lt;div class="box_view_html"&gt;&lt;span class="close_ihp"&gt;&lt;svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve"&gt;&lt;g&gt;&lt;path d="M153.7,153.7C57.9,249.5,10,365.3,10,499c0,135.7,47.9,251.5,143.7,347.3l0,0C249.5,942.1,363.3,990,499,990c135.7,0,251.5-47.9,347.3-143.7C942.1,750.5,990,634.7,990,499c0-135.7-47.9-249.5-143.7-345.3l0,0C750.5,57.9,634.7,10,499,10C365.3,10,249.5,57.9,153.7,153.7z M209.6,211.6l2-2C289.4,129.7,387.2,89.8,499,89.8c113.8,0,209.6,39.9,291.4,121.8c79.8,77.8,119.8,175.6,119.8,287.4c0,113.8-39.9,209.6-119.8,291.4C708.6,870.3,612.8,910.2,499,910.2c-111.8,0-209.6-39.9-287.4-119.8C129.8,708.6,89.8,612.8,89.8,499C89.8,387.2,129.8,289.4,209.6,211.6z"/&gt;&lt;path d="M293.4,331.3c0,12,4,22,12,29.9L443.1,497L305.4,632.7c-8,8-12,18-12,29.9c0,10,4,18,12,26c8,8,18,12,28,12c12,0,20-4,27.9-10L499,552.9l135.7,137.7c8,6,16,10,28,10c12,0,21.9-4,27.9-10c8-8,12-18,12-28c0-12-4-21.9-12-29.9L554.9,497l135.7-135.7c8-8,12-18,12-27.9c0-12-4-22-12-29.9c-6-8-16-12-25.9-12c-12,0-21.9,4-29.9,12L499,441.1L363.3,303.4c-8-8-18-12-29.9-12c-10,0-20,4-28,12C297.4,311.4,293.4,321.4,293.4,331.3z"/&gt;&lt;/g&gt;&lt;/svg&gt;&lt;/span&gt;&lt;p&gt;Maize, Vegetables, Livestock&lt;/p&gt;&lt;/div&gt;'>
                                                                                                    <div class="pins_animation ihotspot_pulse"
                                                                                                        style="top:-16.5px;left:-16.5px;height:33px;width:33px">
                                                                                                    </div>
                                                                                                    <img decoding="async"
                                                                                                        src="images/pin-image.png"
                                                                                                        class="pins_image ihotspot_hastooltop"
                                                                                                        style="top:-16.5px;left:-16.5px">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="drag_element tips "
                                                                                                style="top: 30.47%;left: 56.01%;">
                                                                                                <div class="point_style  ihotspot_tooltop_html"
                                                                                                    data-placement="n"
                                                                                                    data-html='&lt;div class="box_view_html"&gt;&lt;span class="close_ihp"&gt;&lt;svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve"&gt;&lt;g&gt;&lt;path d="M153.7,153.7C57.9,249.5,10,365.3,10,499c0,135.7,47.9,251.5,143.7,347.3l0,0C249.5,942.1,363.3,990,499,990c135.7,0,251.5-47.9,347.3-143.7C942.1,750.5,990,634.7,990,499c0-135.7-47.9-249.5-143.7-345.3l0,0C750.5,57.9,634.7,10,499,10C365.3,10,249.5,57.9,153.7,153.7z M209.6,211.6l2-2C289.4,129.7,387.2,89.8,499,89.8c113.8,0,209.6,39.9,291.4,121.8c79.8,77.8,119.8,175.6,119.8,287.4c0,113.8-39.9,209.6-119.8,291.4C708.6,870.3,612.8,910.2,499,910.2c-111.8,0-209.6-39.9-287.4-119.8C129.8,708.6,89.8,612.8,89.8,499C89.8,387.2,129.8,289.4,209.6,211.6z"/&gt;&lt;path d="M293.4,331.3c0,12,4,22,12,29.9L443.1,497L305.4,632.7c-8,8-12,18-12,29.9c0,10,4,18,12,26c8,8,18,12,28,12c12,0,20-4,27.9-10L499,552.9l135.7,137.7c8,6,16,10,28,10c12,0,21.9-4,27.9-10c8-8,12-18,12-28c0-12-4-21.9-12-29.9L554.9,497l135.7-135.7c8-8,12-18,12-27.9c0-12-4-22-12-29.9c-6-8-16-12-25.9-12c-12,0-21.9,4-29.9,12L499,441.1L363.3,303.4c-8-8-18-12-29.9-12c-10,0-20,4-28,12C297.4,311.4,293.4,321.4,293.4,331.3z"/&gt;&lt;/g&gt;&lt;/svg&gt;&lt;/span&gt;&lt;p&gt;Maize, Groundnuts, Cassava&lt;/p&gt;&lt;/div&gt;'>
                                                                                                    <div class="pins_animation ihotspot_pulse"
                                                                                                        style="top:-16.5px;left:-16.5px;height:33px;width:33px">
                                                                                                    </div>
                                                                                                    <img decoding="async"
                                                                                                        src="images/pin-image.png"
                                                                                                        class="pins_image ihotspot_hastooltop"
                                                                                                        style="top:-16.5px;left:-16.5px">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="drag_element tips "
                                                                                                style="top: 15.47%;left: 66.01%;">
                                                                                                <div class="point_style  ihotspot_tooltop_html"
                                                                                                    data-placement="n"
                                                                                                    data-html='&lt;div class="box_view_html"&gt;&lt;span class="close_ihp"&gt;&lt;svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve"&gt;&lt;g&gt;&lt;path d="M153.7,153.7C57.9,249.5,10,365.3,10,499c0,135.7,47.9,251.5,143.7,347.3l0,0C249.5,942.1,363.3,990,499,990c135.7,0,251.5-47.9,347.3-143.7C942.1,750.5,990,634.7,990,499c0-135.7-47.9-249.5-143.7-345.3l0,0C750.5,57.9,634.7,10,499,10C365.3,10,249.5,57.9,153.7,153.7z M209.6,211.6l2-2C289.4,129.7,387.2,89.8,499,89.8c113.8,0,209.6,39.9,291.4,121.8c79.8,77.8,119.8,175.6,119.8,287.4c0,113.8-39.9,209.6-119.8,291.4C708.6,870.3,612.8,910.2,499,910.2c-111.8,0-209.6-39.9-287.4-119.8C129.8,708.6,89.8,612.8,89.8,499C89.8,387.2,129.8,289.4,209.6,211.6z"/&gt;&lt;path d="M293.4,331.3c0,12,4,22,12,29.9L443.1,497L305.4,632.7c-8,8-12,18-12,29.9c0,10,4,18,12,26c8,8,18,12,28,12c12,0,20-4,27.9-10L499,552.9l135.7,137.7c8,6,16,10,28,10c12,0,21.9-4,27.9-10c8-8,12-18,12-28c0-12-4-21.9-12-29.9L554.9,497l135.7-135.7c8-8,12-18,12-27.9c0-12-4-22-12-29.9c-6-8-16-12-25.9-12c-12,0-21.9,4-29.9,12L499,441.1L363.3,303.4c-8-8-18-12-29.9-12c-10,0-20,4-28,12C297.4,311.4,293.4,321.4,293.4,331.3z"/&gt;&lt;/g&gt;&lt;/svg&gt;&lt;/span&gt;&lt;p&gt;Maize, Soybeans, Cassava, Livestock&lt;/p&gt;&lt;/div&gt;'>
                                                                                                    <div class="pins_animation ihotspot_pulse"
                                                                                                        style="top:-16.5px;left:-16.5px;height:33px;width:33px">
                                                                                                    </div>
                                                                                                    <img decoding="async"
                                                                                                        src="images/pin-image.png"
                                                                                                        class="pins_image ihotspot_hastooltop"
                                                                                                        style="top:-16.5px;left:-16.5px">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="drag_element tips "
                                                                                                style="top: 47.47%;left: 69.01%;">
                                                                                                <div class="point_style  ihotspot_tooltop_html"
                                                                                                    data-placement="n"
                                                                                                    data-html='&lt;div class="box_view_html"&gt;&lt;span class="close_ihp"&gt;&lt;svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve"&gt;&lt;g&gt;&lt;path d="M153.7,153.7C57.9,249.5,10,365.3,10,499c0,135.7,47.9,251.5,143.7,347.3l0,0C249.5,942.1,363.3,990,499,990c135.7,0,251.5-47.9,347.3-143.7C942.1,750.5,990,634.7,990,499c0-135.7-47.9-249.5-143.7-345.3l0,0C750.5,57.9,634.7,10,499,10C365.3,10,249.5,57.9,153.7,153.7z M209.6,211.6l2-2C289.4,129.7,387.2,89.8,499,89.8c113.8,0,209.6,39.9,291.4,121.8c79.8,77.8,119.8,175.6,119.8,287.4c0,113.8-39.9,209.6-119.8,291.4C708.6,870.3,612.8,910.2,499,910.2c-111.8,0-209.6-39.9-287.4-119.8C129.8,708.6,89.8,612.8,89.8,499C89.8,387.2,129.8,289.4,209.6,211.6z"/&gt;&lt;path d="M293.4,331.3c0,12,4,22,12,29.9L443.1,497L305.4,632.7c-8,8-12,18-12,29.9c0,10,4,18,12,26c8,8,18,12,28,12c12,0,20-4,27.9-10L499,552.9l135.7,137.7c8,6,16,10,28,10c12,0,21.9-4,27.9-10c8-8,12-18,12-28c0-12-4-21.9-12-29.9L554.9,497l135.7-135.7c8-8,12-18,12-27.9c0-12-4-22-12-29.9c-6-8-16-12-25.9-12c-12,0-21.9,4-29.9,12L499,441.1L363.3,303.4c-8-8-18-12-29.9-12c-10,0-20,4-28,12C297.4,311.4,293.4,321.4,293.4,331.3z"/&gt;&lt;/g&gt;&lt;/svg&gt;&lt;/span&gt;&lt;p&gt;Maize, Soybeans, Groundnuts, Livestock&lt;/p&gt;&lt;/div&gt;'>
                                                                                                    <div class="pins_animation ihotspot_pulse"
                                                                                                        style="top:-16.5px;left:-16.5px;height:33px;width:33px">
                                                                                                    </div>
                                                                                                    <img decoding="async"
                                                                                                        src="images/pin-image.png"
                                                                                                        class="pins_image ihotspot_hastooltop"
                                                                                                        style="top:-16.5px;left:-16.5px">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="drag_element tips "
                                                                                                style="top: 57.53%;left: 35.9%;">
                                                                                                <div class="point_style  ihotspot_tooltop_html"
                                                                                                    data-placement="n"
                                                                                                    data-html='&lt;div class="box_view_html"&gt;&lt;span class="close_ihp"&gt;&lt;svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve"&gt;&lt;g&gt;&lt;path d="M153.7,153.7C57.9,249.5,10,365.3,10,499c0,135.7,47.9,251.5,143.7,347.3l0,0C249.5,942.1,363.3,990,499,990c135.7,0,251.5-47.9,347.3-143.7C942.1,750.5,990,634.7,990,499c0-135.7-47.9-249.5-143.7-345.3l0,0C750.5,57.9,634.7,10,499,10C365.3,10,249.5,57.9,153.7,153.7z M209.6,211.6l2-2C289.4,129.7,387.2,89.8,499,89.8c113.8,0,209.6,39.9,291.4,121.8c79.8,77.8,119.8,175.6,119.8,287.4c0,113.8-39.9,209.6-119.8,291.4C708.6,870.3,612.8,910.2,499,910.2c-111.8,0-209.6-39.9-287.4-119.8C129.8,708.6,89.8,612.8,89.8,499C89.8,387.2,129.8,289.4,209.6,211.6z"/&gt;&lt;path d="M293.4,331.3c0,12,4,22,12,29.9L443.1,497L305.4,632.7c-8,8-12,18-12,29.9c0,10,4,18,12,26c8,8,18,12,28,12c12,0,20-4,27.9-10L499,552.9l135.7,137.7c8,6,16,10,28,10c12,0,21.9-4,27.9-10c8-8,12-18,12-28c0-12-4-21.9-12-29.9L554.9,497l135.7-135.7c8-8,12-18,12-27.9c0-12-4-22-12-29.9c-6-8-16-12-25.9-12c-12,0-21.9,4-29.9,12L499,441.1L363.3,303.4c-8-8-18-12-29.9-12c-10,0-20,4-28,12C297.4,311.4,293.4,321.4,293.4,331.3z"/&gt;&lt;/g&gt;&lt;/svg&gt;&lt;/span&gt;&lt;p&gt;Sugar Cane, Fish, Rice&lt;/p&gt;&lt;/div&gt;'>
                                                                                                    <div class="pins_animation ihotspot_pulse"
                                                                                                        style="top:-16.5px;left:-16.5px;height:33px;width:33px">
                                                                                                    </div>
                                                                                                    <img decoding="async"
                                                                                                        src="images/pin-image.png"
                                                                                                        class="pins_image ihotspot_hastooltop"
                                                                                                        style="top:-16.5px;left:-16.5px">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="drag_element tips "
                                                                                                style="top:37.19%;left:48.00%;">
                                                                                                <div class="point_style  ihotspot_tooltop_html"
                                                                                                    data-placement="n"
                                                                                                    data-html='&lt;div class="box_view_html"&gt;&lt;span class="close_ihp"&gt;&lt;svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve"&gt;&lt;g&gt;&lt;path d="M153.7,153.7C57.9,249.5,10,365.3,10,499c0,135.7,47.9,251.5,143.7,347.3l0,0C249.5,942.1,363.3,990,499,990c135.7,0,251.5-47.9,347.3-143.7C942.1,750.5,990,634.7,990,499c0-135.7-47.9-249.5-143.7-345.3l0,0C750.5,57.9,634.7,10,499,10C365.3,10,249.5,57.9,153.7,153.7z M209.6,211.6l2-2C289.4,129.7,387.2,89.8,499,89.8c113.8,0,209.6,39.9,291.4,121.8c79.8,77.8,119.8,175.6,119.8,287.4c0,113.8-39.9,209.6-119.8,291.4C708.6,870.3,612.8,910.2,499,910.2c-111.8,0-209.6-39.9-287.4-119.8C129.8,708.6,89.8,612.8,89.8,499C89.8,387.2,129.8,289.4,209.6,211.6z"/&gt;&lt;path d="M293.4,331.3c0,12,4,22,12,29.9L443.1,497L305.4,632.7c-8,8-12,18-12,29.9c0,10,4,18,12,26c8,8,18,12,28,12c12,0,20-4,27.9-10L499,552.9l135.7,137.7c8,6,16,10,28,10c12,0,21.9-4,27.9-10c8-8,12-18,12-28c0-12-4-21.9-12-29.9L554.9,497l135.7-135.7c8-8,12-18,12-27.9c0-12-4-22-12-29.9c-6-8-16-12-25.9-12c-12,0-21.9,4-29.9,12L499,441.1L363.3,303.4c-8-8-18-12-29.9-12c-10,0-20,4-28,12C297.4,311.4,293.4,321.4,293.4,331.3z"/&gt;&lt;/g&gt;&lt;/svg&gt;&lt;/span&gt;&lt;p&gt;Wheat, Maize, Groundnuts, and Cassava&lt;/p&gt;&lt;/div&gt;'>
                                                                                                    <div class="pins_animation ihotspot_pulse"
                                                                                                        style="top:-16.5px;left:-16.5px;height:33px;width:33px">
                                                                                                    </div>
                                                                                                    <img decoding="async"
                                                                                                        src="images/pin-image.png"
                                                                                                        class="pins_image ihotspot_hastooltop"
                                                                                                        style="top:-16.5px;left:-16.5px">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="drag_element tips "
                                                                                                style="top:55.44%;left:50.72%;">
                                                                                                <div class="point_style  ihotspot_tooltop_html"
                                                                                                    data-placement="n"
                                                                                                    data-html='&lt;div class="box_view_html"&gt;&lt;span class="close_ihp"&gt;&lt;svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve"&gt;&lt;g&gt;&lt;path d="M153.7,153.7C57.9,249.5,10,365.3,10,499c0,135.7,47.9,251.5,143.7,347.3l0,0C249.5,942.1,363.3,990,499,990c135.7,0,251.5-47.9,347.3-143.7C942.1,750.5,990,634.7,990,499c0-135.7-47.9-249.5-143.7-345.3l0,0C750.5,57.9,634.7,10,499,10C365.3,10,249.5,57.9,153.7,153.7z M209.6,211.6l2-2C289.4,129.7,387.2,89.8,499,89.8c113.8,0,209.6,39.9,291.4,121.8c79.8,77.8,119.8,175.6,119.8,287.4c0,113.8-39.9,209.6-119.8,291.4C708.6,870.3,612.8,910.2,499,910.2c-111.8,0-209.6-39.9-287.4-119.8C129.8,708.6,89.8,612.8,89.8,499C89.8,387.2,129.8,289.4,209.6,211.6z"/&gt;&lt;path d="M293.4,331.3c0,12,4,22,12,29.9L443.1,497L305.4,632.7c-8,8-12,18-12,29.9c0,10,4,18,12,26c8,8,18,12,28,12c12,0,20-4,27.9-10L499,552.9l135.7,137.7c8,6,16,10,28,10c12,0,21.9-4,27.9-10c8-8,12-18,12-28c0-12-4-21.9-12-29.9L554.9,497l135.7-135.7c8-8,12-18,12-27.9c0-12-4-22-12-29.9c-6-8-16-12-25.9-12c-12,0-21.9,4-29.9,12L499,441.1L363.3,303.4c-8-8-18-12-29.9-12c-10,0-20,4-28,12C297.4,311.4,293.4,321.4,293.4,331.3z"/&gt;&lt;/g&gt;&lt;/svg&gt;&lt;/span&gt;&lt;p&gt; Soybeans, Groundnuts, Sunflower&lt;/p&gt;&lt;/div&gt;'>
                                                                                                    <div class="pins_animation ihotspot_pulse"
                                                                                                        style="top:-16.5px;left:-16.5px;height:33px;width:33px">
                                                                                                    </div>
                                                                                                    <img decoding="async"
                                                                                                        src="images/pin-image.png"
                                                                                                        class="pins_image ihotspot_hastooltop"
                                                                                                        style="top:-16.5px;left:-16.5px">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="drag_element tips "
                                                                                                style="top:43.44%;left:52.66%;">
                                                                                                <div class="point_style  ihotspot_tooltop_html"
                                                                                                    data-placement="n"
                                                                                                    data-html='&lt;div class="box_view_html"&gt;&lt;span class="close_ihp"&gt;&lt;svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve"&gt;&lt;g&gt;&lt;path d="M153.7,153.7C57.9,249.5,10,365.3,10,499c0,135.7,47.9,251.5,143.7,347.3l0,0C249.5,942.1,363.3,990,499,990c135.7,0,251.5-47.9,347.3-143.7C942.1,750.5,990,634.7,990,499c0-135.7-47.9-249.5-143.7-345.3l0,0C750.5,57.9,634.7,10,499,10C365.3,10,249.5,57.9,153.7,153.7z M209.6,211.6l2-2C289.4,129.7,387.2,89.8,499,89.8c113.8,0,209.6,39.9,291.4,121.8c79.8,77.8,119.8,175.6,119.8,287.4c0,113.8-39.9,209.6-119.8,291.4C708.6,870.3,612.8,910.2,499,910.2c-111.8,0-209.6-39.9-287.4-119.8C129.8,708.6,89.8,612.8,89.8,499C89.8,387.2,129.8,289.4,209.6,211.6z"/&gt;&lt;path d="M293.4,331.3c0,12,4,22,12,29.9L443.1,497L305.4,632.7c-8,8-12,18-12,29.9c0,10,4,18,12,26c8,8,18,12,28,12c12,0,20-4,27.9-10L499,552.9l135.7,137.7c8,6,16,10,28,10c12,0,21.9-4,27.9-10c8-8,12-18,12-28c0-12-4-21.9-12-29.9L554.9,497l135.7-135.7c8-8,12-18,12-27.9c0-12-4-22-12-29.9c-6-8-16-12-25.9-12c-12,0-21.9,4-29.9,12L499,441.1L363.3,303.4c-8-8-18-12-29.9-12c-10,0-20,4-28,12C297.4,311.4,293.4,321.4,293.4,331.3z"/&gt;&lt;/g&gt;&lt;/svg&gt;&lt;/span&gt;&lt;p&gt;Maize&lt;/p&gt;&lt;/div&gt;'>
                                                                                                    <div class="pins_animation ihotspot_pulse"
                                                                                                        style="top:-16.5px;left:-16.5px;height:33px;width:33px">
                                                                                                    </div>
                                                                                                    <img decoding="async"
                                                                                                        src="images/pin-image.png"
                                                                                                        class="pins_image ihotspot_hastooltop"
                                                                                                        style="top:-16.5px;left:-16.5px">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="drag_element tips "
                                                                                                style="top:72.97%;left:47.08%;">
                                                                                                <div class="point_style  ihotspot_tooltop_html"
                                                                                                    data-placement="n"
                                                                                                    data-html='&lt;div class="box_view_html"&gt;&lt;span class="close_ihp"&gt;&lt;svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve"&gt;&lt;g&gt;&lt;path d="M153.7,153.7C57.9,249.5,10,365.3,10,499c0,135.7,47.9,251.5,143.7,347.3l0,0C249.5,942.1,363.3,990,499,990c135.7,0,251.5-47.9,347.3-143.7C942.1,750.5,990,634.7,990,499c0-135.7-47.9-249.5-143.7-345.3l0,0C750.5,57.9,634.7,10,499,10C365.3,10,249.5,57.9,153.7,153.7z M209.6,211.6l2-2C289.4,129.7,387.2,89.8,499,89.8c113.8,0,209.6,39.9,291.4,121.8c79.8,77.8,119.8,175.6,119.8,287.4c0,113.8-39.9,209.6-119.8,291.4C708.6,870.3,612.8,910.2,499,910.2c-111.8,0-209.6-39.9-287.4-119.8C129.8,708.6,89.8,612.8,89.8,499C89.8,387.2,129.8,289.4,209.6,211.6z"/&gt;&lt;path d="M293.4,331.3c0,12,4,22,12,29.9L443.1,497L305.4,632.7c-8,8-12,18-12,29.9c0,10,4,18,12,26c8,8,18,12,28,12c12,0,20-4,27.9-10L499,552.9l135.7,137.7c8,6,16,10,28,10c12,0,21.9-4,27.9-10c8-8,12-18,12-28c0-12-4-21.9-12-29.9L554.9,497l135.7-135.7c8-8,12-18,12-27.9c0-12-4-22-12-29.9c-6-8-16-12-25.9-12c-12,0-21.9,4-29.9,12L499,441.1L363.3,303.4c-8-8-18-12-29.9-12c-10,0-20,4-28,12C297.4,311.4,293.4,321.4,293.4,331.3z"/&gt;&lt;/g&gt;&lt;/svg&gt;&lt;/span&gt;&lt;p&gt;Tomatoes, Maize, Sorghum&lt;/p&gt;&lt;/div&gt;'>
                                                                                                    <div class="pins_animation ihotspot_pulse"
                                                                                                        style="top:-16.5px;left:-16.5px;height:33px;width:33px">
                                                                                                    </div>
                                                                                                    <img decoding="async"
                                                                                                        src="images/pin-image.png"
                                                                                                        class="pins_image ihotspot_hastooltop"
                                                                                                        style="top:-16.5px;left:-16.5px">
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- <div class="drag_element tips "
                                                                                                style="top:88.12%;left:87.04%;">
                                                                                                <div class="point_style  ihotspot_tooltop_html"
                                                                                                    data-placement="n"
                                                                                                    data-html='&lt;div class="box_view_html"&gt;&lt;span class="close_ihp"&gt;&lt;svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve"&gt;&lt;g&gt;&lt;path d="M153.7,153.7C57.9,249.5,10,365.3,10,499c0,135.7,47.9,251.5,143.7,347.3l0,0C249.5,942.1,363.3,990,499,990c135.7,0,251.5-47.9,347.3-143.7C942.1,750.5,990,634.7,990,499c0-135.7-47.9-249.5-143.7-345.3l0,0C750.5,57.9,634.7,10,499,10C365.3,10,249.5,57.9,153.7,153.7z M209.6,211.6l2-2C289.4,129.7,387.2,89.8,499,89.8c113.8,0,209.6,39.9,291.4,121.8c79.8,77.8,119.8,175.6,119.8,287.4c0,113.8-39.9,209.6-119.8,291.4C708.6,870.3,612.8,910.2,499,910.2c-111.8,0-209.6-39.9-287.4-119.8C129.8,708.6,89.8,612.8,89.8,499C89.8,387.2,129.8,289.4,209.6,211.6z"/&gt;&lt;path d="M293.4,331.3c0,12,4,22,12,29.9L443.1,497L305.4,632.7c-8,8-12,18-12,29.9c0,10,4,18,12,26c8,8,18,12,28,12c12,0,20-4,27.9-10L499,552.9l135.7,137.7c8,6,16,10,28,10c12,0,21.9-4,27.9-10c8-8,12-18,12-28c0-12-4-21.9-12-29.9L554.9,497l135.7-135.7c8-8,12-18,12-27.9c0-12-4-22-12-29.9c-6-8-16-12-25.9-12c-12,0-21.9,4-29.9,12L499,441.1L363.3,303.4c-8-8-18-12-29.9-12c-10,0-20,4-28,12C297.4,311.4,293.4,321.4,293.4,331.3z"/&gt;&lt;/g&gt;&lt;/svg&gt;&lt;/span&gt;&lt;p&gt;Citrus&lt;/p&gt;&lt;/div&gt;'>
                                                                                                    <div class="pins_animation ihotspot_pulse"
                                                                                                        style="top:-16.5px;left:-16.5px;height:33px;width:33px">
                                                                                                    </div>
                                                                                                    <img decoding="async"
                                                                                                        src="images/pin-image.png"
                                                                                                        class="pins_image ihotspot_hastooltop"
                                                                                                        style="top:-16.5px;left:-16.5px">
                                                                                                </div>
                                                                                            </div> -->


                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section
                                                class="elementor-section elementor-top-section elementor-element elementor-element-0717e3b elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                data-id="0717e3b" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-extended">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d623e4c sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                            data-id="d623e4c" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-a5449bb sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer"
                                                                        data-id="a5449bb" data-element_type="widget"
                                                                        data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section
                                                class="elementor-section elementor-top-section elementor-element elementor-element-4b02fc8 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                data-id="4b02fc8" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-no">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b36e77a sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                            data-id="b36e77a" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-46774df sc_fly_static elementor-widget elementor-widget-image"
                                                                        data-id="46774df" data-element_type="widget"
                                                                        data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image">
                                                                                <img decoding="async" width="780"
                                                                                    height="100"
                                                                                    src="images/site/553.jpg"
                                                                                    class="attachment-full size-full"
                                                                                    alt=""
                                                                                    sizes="(max-width: 780px) 300vw, 980px">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7ab175f sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                            data-id="7ab175f" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-028b5ed sc_fly_static elementor-widget elementor-widget-trx_sc_title"
                                                                        data-id="028b5ed" data-element_type="widget"
                                                                        data-widget_type="trx_sc_title.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div
                                                                                class="sc_title color_style_dark sc_title_default">
                                                                                <span
                                                                                    class="sc_item_subtitle sc_title_subtitle sc_item_subtitle_above sc_item_title_style_default">Sharing
                                                                                    Experience</span>
                                                                                <h1
                                                                                    class="sc_item_title sc_title_title sc_item_title_style_default sc_item_title_tag">
                                                                                    <span
                                                                                        class="sc_item_title_text">Learn
                                                                                        More About Growing
                                                                                        Process</span>
                                                                                </h1>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-b15a29a sc_fly_static elementor-widget elementor-widget-spacer"
                                                                        data-id="b15a29a" data-element_type="widget"
                                                                        data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-0a5ecf6 bordered sc_fly_static elementor-widget elementor-widget-accordion"
                                                                        data-id="0a5ecf6" data-element_type="widget"
                                                                        data-widget_type="accordion.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-accordion"
                                                                                role="tablist">
                                                                                <div class="elementor-accordion-item">
                                                                                    <div id="elementor-tab-title-1081"
                                                                                        class="elementor-tab-title"
                                                                                        data-tab="1" role="tab"
                                                                                        aria-controls="elementor-tab-content-1081"
                                                                                        aria-expanded="false">
                                                                                        <span
                                                                                            class="elementor-accordion-icon elementor-accordion-icon-left"
                                                                                            aria-hidden="true">
                                                                                            <span
                                                                                                class="elementor-accordion-icon-closed"><i
                                                                                                    class="fas fa-plus"></i></span>
                                                                                            <span
                                                                                                class="elementor-accordion-icon-opened"><i
                                                                                                    class="fas fa-minus"></i></span>
                                                                                        </span>
                                                                                        <a class="elementor-accordion-title"
                                                                                            href="services.php">Sustainable Agriculture</a>
                                                                                    </div>
                                                                                    <div id="elementor-tab-content-1081"
                                                                                        class="elementor-tab-content elementor-clearfix"
                                                                                        data-tab="1" role="tabpanel"
                                                                                        aria-labelledby="elementor-tab-title-1081">
                                                                                        <p>EcoAgro emphasizes sustainable agriculture, which involves practices that maintain or enhance soil quality, conserve water, and minimize the use of synthetic chemicals.</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-accordion-item">
                                                                                    <div id="elementor-tab-title-1082"
                                                                                        class="elementor-tab-title"
                                                                                        data-tab="2" role="tab"
                                                                                        aria-controls="elementor-tab-content-1082"
                                                                                        aria-expanded="false">
                                                                                        <span
                                                                                            class="elementor-accordion-icon elementor-accordion-icon-left"
                                                                                            aria-hidden="true">
                                                                                            <span
                                                                                                class="elementor-accordion-icon-closed"><i
                                                                                                    class="fas fa-plus"></i></span>
                                                                                            <span
                                                                                                class="elementor-accordion-icon-opened"><i
                                                                                                    class="fas fa-minus"></i></span>
                                                                                        </span>
                                                                                        <a class="elementor-accordion-title"
                                                                                            href="services.php">Education and Outreach</a>
                                                                                    </div>
                                                                                    <div id="elementor-tab-content-1082"
                                                                                        class="elementor-tab-content elementor-clearfix"
                                                                                        data-tab="2" role="tabpanel"
                                                                                        aria-labelledby="elementor-tab-title-1082">
                                                                                        <p>EcoAgro often engages in education and outreach programs to promote sustainable farming practices within communities.</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-accordion-item">
                                                                                    <div id="elementor-tab-title-1083"
                                                                                        class="elementor-tab-title"
                                                                                        data-tab="3" role="tab"
                                                                                        aria-controls="elementor-tab-content-1083"
                                                                                        aria-expanded="false">
                                                                                        <span
                                                                                            class="elementor-accordion-icon elementor-accordion-icon-left"
                                                                                            aria-hidden="true">
                                                                                            <span
                                                                                                class="elementor-accordion-icon-closed"><i
                                                                                                    class="fas fa-plus"></i></span>
                                                                                            <span
                                                                                                class="elementor-accordion-icon-opened"><i
                                                                                                    class="fas fa-minus"></i></span>
                                                                                        </span>
                                                                                        <a class="elementor-accordion-title"
                                                                                            href="services.php">Local and Global Impact</a>
                                                                                    </div>
                                                                                    <div id="elementor-tab-content-1083"
                                                                                        class="elementor-tab-content elementor-clearfix"
                                                                                        data-tab="3" role="tabpanel"
                                                                                        aria-labelledby="elementor-tab-title-1083">
                                                                                        <p>
                                                                                        Locally, it may help farmers increase their yields and income while reducing environmental harm.
                                                                                        Globally, sustainable agriculture contributes to addressing food security and climate change.
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section
                                                class="elementor-section elementor-top-section elementor-element elementor-element-c6b8aa1 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                data-id="c6b8aa1" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-extended">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ae08423 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                            data-id="ae08423" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-e0b8e4e sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer"
                                                                        data-id="e0b8e4e" data-element_type="widget"
                                                                        data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>


                                            <section
                                                class="elementor-section elementor-top-section elementor-element elementor-element-bf17b8b scheme_dark elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                data-id="bf17b8b" data-element_type="section"
                                                data-settings='{"background_background":"slideshow","background_slideshow_gallery":[{"id":19452,"url":"images/site/5.jpg"},{"id":19455,"url":"images/site/55.jpg"},{"id":19427,"url":"images/site/6.jpeg"}],"background_slideshow_transition_duration":1000,"background_slideshow_ken_burns":"yes","background_slideshow_loop":"yes","background_slideshow_slide_duration":5000,"background_slideshow_slide_transition":"fade","background_slideshow_ken_burns_zoom_direction":"in"}'>
                                                <div class="elementor-background-overlay"></div>
                                                <div class="elementor-container elementor-column-gap-extended">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a8a3f75 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                            data-id="a8a3f75" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-27f4c4a sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer"
                                                                        data-id="27f4c4a" data-element_type="widget"
                                                                        data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-99994a3 sc_height_huge sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                                        data-id="99994a3" data-element_type="widget"
                                                                        data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">

                                                                        </div>
                                                                    </div>
                                                                    <section
                                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-845bb3f elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                                        data-id="845bb3f" data-element_type="section">
                                                                        <div
                                                                            class="elementor-container elementor-column-gap-no">
                                                                            <div class="elementor-row">
                                                                                <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-818d44f sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                                                    data-id="818d44f"
                                                                                    data-element_type="column">
                                                                                    <div class="elementor-column-wrap">
                                                                                        <div
                                                                                            class="elementor-widget-wrap">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-column elementor-col-66 elementor-inner-column elementor-element elementor-element-b13db81 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                                                    data-id="b13db81"
                                                                                    data-element_type="column">
                                                                                    <div
                                                                                        class="elementor-column-wrap elementor-element-populated">
                                                                                        <div
                                                                                            class="elementor-widget-wrap">
                                                                                            <div class="elementor-element elementor-element-2342988 sc_fly_static elementor-widget elementor-widget-trx_sc_title"
                                                                                                data-id="2342988"
                                                                                                data-element_type="widget"
                                                                                                data-widget_type="trx_sc_title.default">
                                                                                                <div
                                                                                                    class="elementor-widget-container">
                                                                                                    <div
                                                                                                        class="sc_title color_style_dark sc_title_default">
                                                                                                        <span class="sc_item_subtitle sc_title_subtitle sc_align_center sc_item_subtitle_above sc_item_title_style_default">
                                                                                                        Sustainable Agriculture
                                                                                                        </span>
                                                                                                        <h1
                                                                                                            class="sc_item_title sc_title_title sc_align_center sc_item_title_style_default sc_item_title_tag">
                                                                                                            <span
                                                                                                                class="sc_item_title_text">Buy
                                                                                                                Fresh
                                                                                                                Fruits
                                                                                                                and
                                                                                                                Vegetables
                                                                                                                from the
                                                                                                                Field!</span>
                                                                                                        </h1>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="elementor-element elementor-element-832462a sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                data-id="832462a"
                                                                                                data-element_type="widget"
                                                                                                data-widget_type="spacer.default">
                                                                                                <div
                                                                                                    class="elementor-widget-container">
                                                                                                    <div
                                                                                                        class="elementor-spacer">
                                                                                                        <div
                                                                                                            class="elementor-spacer-inner">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="elementor-element elementor-element-db9e8a0 sc_fly_static elementor-widget elementor-widget-trx_sc_button"
                                                                                                data-id="db9e8a0"
                                                                                                data-element_type="widget"
                                                                                                data-widget_type="trx_sc_button.default">
                                                                                                <div
                                                                                                    class="elementor-widget-container">
                                                                                                    <div
                                                                                                        class="sc_item_button sc_button_wrap sc_align_center">
                                                                                                        <a href="contact.php"
                                                                                                            class="sc_button sc_button_default sc_button_size_normal sc_button_icon_left"><span
                                                                                                                class="sc_button_text"><span
                                                                                                                    class="sc_button_title">Contact</span></span></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-781678c sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                                                    data-id="781678c"
                                                                                    data-element_type="column">
                                                                                    <div class="elementor-column-wrap">
                                                                                        <div
                                                                                            class="elementor-widget-wrap">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                    <div class="elementor-element elementor-element-07683ff sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer"
                                                                        data-id="07683ff" data-element_type="widget"
                                                                        data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-c84005b sc_height_huge sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                                        data-id="c84005b" data-element_type="widget"
                                                                        data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section
                                                class="elementor-section elementor-top-section elementor-element elementor-element-80d8e1e scheme_default elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                data-id="80d8e1e" data-element_type="section"
                                                data-settings='{"background_background":"classic"}'>
                                                <div class="elementor-container elementor-column-gap-extended">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-803e8d4 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                            data-id="803e8d4" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-98f1eb3 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer"
                                                                        data-id="98f1eb3" data-element_type="widget"
                                                                        data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>


                                            <section
                                                class="elementor-section elementor-top-section elementor-element elementor-element-7e32de3 scheme_default elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                data-id="7e32de3" data-element_type="section"
                                                data-settings='{"background_background":"classic"}'>
                                                <div class="elementor-container elementor-column-gap-extended">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1d83663 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                            data-id="1d83663" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-2c7eb29 sc_fly_static elementor-widget elementor-widget-trx_sc_title"
                                                                        data-id="2c7eb29" data-element_type="widget"
                                                                        data-widget_type="trx_sc_title.default">
                                                                        <div class="elementor-widget-container">
                                                                            <br>
                                                                            <div
                                                                                class="sc_title color_style_dark sc_title_default">
                                                                                <span
                                                                                    class="sc_item_subtitle sc_title_subtitle sc_item_subtitle_above sc_item_title_style_default">Contact
                                                                                    Us</span>
                                                                                <h1
                                                                                    class="sc_item_title sc_title_title sc_item_title_style_default sc_item_title_tag">
                                                                                    <span
                                                                                        class="sc_item_title_text">Have
                                                                                        Questions? <br>Get in
                                                                                        Touch!</span>
                                                                                </h1>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-3ebbce1 sc_height_small sc_fly_static elementor-widget elementor-widget-spacer"
                                                                        data-id="3ebbce1" data-element_type="widget"
                                                                        data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-044a0e2 sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                                        data-id="044a0e2" data-element_type="widget"
                                                                        data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-f727779 sc_fly_static elementor-widget elementor-widget-image"
                                                                        data-id="f727779" data-element_type="widget"
                                                                        data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image">
                                                                                <img decoding="async" loading="lazy"
                                                                                    width="740" height="836"
                                                                                    src="images/site/45.jpg"
                                                                                    class="attachment-full size-full"
                                                                                    alt=""
                                                                                    sizes="(max-width: 740px) 100vw, 740px">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a30b70a sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                            data-id="a30b70a" data-element_type="column"
                                                            data-settings='{"background_background":"classic"}'>
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-4c3dd83 sc_layouts_hide_on_tablet sc_fly_static elementor-widget elementor-widget-spacer"
                                                                        data-id="4c3dd83" data-element_type="widget"
                                                                        data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-25dd679 sc_fly_static elementor-widget elementor-widget-trx_sc_contact_form_7"
                                                                        data-id="25dd679" data-element_type="widget"
                                                                        data-widget_type="trx_sc_contact_form_7.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div role="form" class="wpcf7"
                                                                                id="wpcf7-f1413-p18038-o1" lang="en-US"
                                                                                dir="ltr">
                                                                                <div class="screen-reader-response">
                                                                                    <p role="status" aria-live="polite"
                                                                                        aria-atomic="true"></p>
                                                                                    <ul></ul>
                                                                                </div>
                                                                                <form method="post">
                                                                                    <div class="form-style-7">
                                                                                        <div class="columns_wrap">
                                                                                            <div class="column-1_1">
                                                                                                <span
                                                                                                    class="style-line icon-name"><span
                                                                                                        class="wpcf7-form-control-wrap"
                                                                                                        data-name="your-name"><input
                                                                                                            type="text"
                                                                                                            name="name"
                                                                                                            value=""
                                                                                                            size="40"
                                                                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                                            aria-required="true"
                                                                                                            aria-invalid="false"
                                                                                                            placeholder="Name"></span></span>
                                                                                            </div>
                                                                                            <div class="column-1_1">
                                                                                                <span
                                                                                                    class="style-line icon-phone"><span
                                                                                                        class="wpcf7-form-control-wrap"
                                                                                                        data-name="phone"><input
                                                                                                            type="tel"
                                                                                                            name="phone"
                                                                                                            value=""
                                                                                                            size="40"
                                                                                                            class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                                                                            aria-required="true"
                                                                                                            aria-invalid="false"
                                                                                                            placeholder="Phone"></span></span>
                                                                                            </div>
                                                                                            <div class="column-1_1">
                                                                                                <span
                                                                                                    class="style-line icon-email"><span
                                                                                                        class="wpcf7-form-control-wrap"
                                                                                                        data-name="your-email"><input
                                                                                                            type="email"
                                                                                                            name="email"
                                                                                                            value=""
                                                                                                            size="40"
                                                                                                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                                                            aria-required="true"
                                                                                                            aria-invalid="false"
                                                                                                            placeholder="Email Address"></span></span>
                                                                                            </div>
                                                                                            <div class="column-1_1">
                                                                                                <span
                                                                                                    class="style-line icon-subject"><span
                                                                                                        class="wpcf7-form-control-wrap"
                                                                                                        data-name="subject"><input
                                                                                                            type="text"
                                                                                                            name="subject"
                                                                                                            value=""
                                                                                                            size="40"
                                                                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                                            aria-required="true"
                                                                                                            aria-invalid="false"
                                                                                                            placeholder="Subject"></span></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="columns_wrap margin-bottom">
                                                                                            <div class="column-1_1">
                                                                                                <span
                                                                                                    class="style-line icon-textarea"><span
                                                                                                        class="wpcf7-form-control-wrap"
                                                                                                        data-name="your-message"><textarea
                                                                                                            name="message"
                                                                                                            cols="40"
                                                                                                            rows="10"
                                                                                                            class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                                                                                            aria-required="true"
                                                                                                            aria-invalid="false"
                                                                                                            placeholder="How can we help you? Feel free to get in touch!"></textarea></span></span>
                                                                                            </div>
                                                                                        </div>
																						<p>
																							<button type="submit" class="wpcf7-form-control wpcf7-submit"> 
																								<div id="loader-container" style="display: none;">
																									<img src="images/default-skin-preloader.gif" alt="Loading...">
																								</div>
																								<div id="submit-text">
																								Get In Touch
																								</div> 
																							</button>
																						</p>
																						
																						<p id="success_text" style="margin-top: 10%; padding:4%; border-radius: 4px; border:1px solid #00d084; display: none; color: #00d084;" >
																							Successfully Sent																			
																						</p>
																						<p id="error_text" style="margin-top: 10%; padding:4%; border-radius: 4px; border:1px solid red; display: none; color:crimson;" >
																							Error is sending, Check your network																			
																						</p>
                                                                                    </div>
                                                                                    <!-- <div class="wpcf7-response-output"
                                                                                        aria-hidden="true"></div> -->
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section
                                                class="elementor-section elementor-top-section elementor-element elementor-element-f7d244a scheme_default elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                data-id="f7d244a" data-element_type="section"
                                                data-settings='{"background_background":"classic"}'>
                                                <div class="elementor-container elementor-column-gap-extended">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-55ec0e7 sc_inner_width_none sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                            data-id="55ec0e7" data-element_type="column">
                                                            <div
                                                                class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-c93450d sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer"
                                                                        data-id="c93450d" data-element_type="widget"
                                                                        data-widget_type="spacer.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-spacer">
                                                                                <div class="elementor-spacer-inner">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .entry-content -->


                        </article>
                    </div>
                </div>
            </div>
            <a id="footer_skip_link_anchor" class="agricola_skip_link_anchor" href="#"></a>
            <?php include 'components/footer.php' ?>
        </div>
    </div>

    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script>
        window.RS_MODULES = window.RS_MODULES || {};
        window.RS_MODULES.modules = window.RS_MODULES.modules || {};
        window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
        window.RS_MODULES.defered = false;
        window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
        window.RS_MODULES.type = 'compiled';
    </script>
    <a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up scroll_to_top_style_default" title="Scroll to top"></a><!-- Instagram Feed JS -->
    <script type="text/javascript">
        var sbiajaxurl = "https://agricola.axiomthemes.com/wp-admin/admin-ajax.php";
    </script>
    <div class="trx_addons_mouse_helper trx_addons_mouse_helper_base trx_addons_mouse_helper_style_default trx_addons_mouse_helper_smooth">
    </div>
    <script type="text/javascript">
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <script>
        if (typeof revslider_showDoubleJqueryError === "undefined") {
            function revslider_showDoubleJqueryError(sliderID) {
                console.log(
                    "You have some jquery.js library include that comes after the Slider Revolution files js inclusion."
                );
                console.log("To fix this, you can:");
                console.log(
                    "1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on"
                );
                console.log("2. Find the double jQuery.js inclusion and remove it");
                return "Double Included jQuery Library";
            }
        }
    </script>
    <script type='text/javascript' defer="defer" src='css/plugins/advanced-popups/public/js/advanced-popups-public.js' id='advanced-popups-js'></script>
    <script type='text/javascript' defer="defer" src='css/plugins/devvn-image-hotspot/frontend/js/jquery.powertip.min.js' id='powertip-js'></script>
    <script type='text/javascript' defer="defer" src='css/plugins/devvn-image-hotspot/frontend/js/maps_points.js' id='maps-points-js'></script>
    <script type='text/javascript' defer="defer" src='css/plugins/revslider/public/assets/js/rbtools.min.js' async id='tp-tools-js'></script>
    <script type='text/javascript' defer="defer" src='css/plugins/revslider/public/assets/js/rs6.min.js' async id='revmin-js'></script>
    <script type='text/javascript' defer="defer" src='css/plugins/trx_addons/js/magnific/jquery.magnific-popup.min.js' id='magnific-popup-js'></script>
    <script type='text/javascript' id='trx_demo_panels-js-extra'>
        /* <![CDATA[ */
        var TRX_DEMO_STORAGE = {
            "ajax_url": "https:\/\/agricola.axiomthemes.com\/wp-admin\/admin-ajax.php",
            "ajax_nonce": "e073edf7b1",
            "site_url": "https:\/\/agricola.axiomthemes.com",
            "user_logged_in": "0",
            "msg_ajax_error": "Invalid server response! Try again later.",
            "tabs_delay": "3000"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' defer="defer" src='css/plugins/trx_demo/js/trx_demo_panels.js' id='trx_demo_panels-js'></script>
    <script type='text/javascript' defer="defer" src='css/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js' id='jquery-blockui-js'></script>
    <script type='text/javascript' id='wc-add-to-cart-js-extra'>
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "index.html",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "https:\/\/agricola.axiomthemes.com\/cart\/",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' defer="defer" src='css/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js' id='wc-add-to-cart-js'></script>
    <script type='text/javascript' src='css/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js' id='js-cookie-js'>
    </script>
    <script type='text/javascript' id='woocommerce-js-extra'>
        /* <![CDATA[ */
        var woocommerce_params = {
            "ajax_url": "index.html",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' defer="defer" src='css/plugins/woocommerce/assets/js/frontend/woocommerce.min.js' id='woocommerce-js'></script>
    <script type='text/javascript' id='wc-cart-fragments-js-extra'>
        /* <![CDATA[ */
        var wc_cart_fragments_params = {
            "ajax_url": "index.html",
            "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
            "cart_hash_key": "wc_cart_hash_6ea3582e541197a8a202a7f75c2eab9b",
            "fragment_name": "wc_fragments_6ea3582e541197a8a202a7f75c2eab9b",
            "request_timeout": "5000"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' defer="defer" src='css/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js' id='wc-cart-fragments-js'></script>
    <script type='text/javascript' id='tinvwl-js-extra'>
        /* <![CDATA[ */
        var tinvwl_add_to_wishlist = {
            "text_create": "Create New",
            "text_already_in": "{product_name} already in Wishlist",
            "simple_flow": "",
            "hide_zero_counter": "",
            "i18n_make_a_selection_text": "Please select some product options before adding this product to your wishlist.",
            "tinvwl_break_submit": "No items or actions are selected.",
            "tinvwl_clipboard": "Copied!",
            "allow_parent_variable": "",
            "block_ajax_wishlists_data": "",
            "update_wishlists_data": "",
            "hash_key": "ti_wishlist_data_6ea3582e541197a8a202a7f75c2eab9b",
            "nonce": "d9b545e489",
            "rest_root": "https:\/\/agricola.axiomthemes.com\/wp-json\/",
            "plugin_url": "https:\/\/agricola.axiomthemes.com\/wp-content\/plugins\/ti-woocommerce-wishlist\/",
            "wc_ajax_url": "\/?wc-ajax=tinvwl",
            "stats": "",
            "popup_timer": "6000"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' defer="defer" src='css/plugins/ti-woocommerce-wishlist/assets/js/public.min.js' id='tinvwl-js'></script>
    <script type='text/javascript' id='trx_addons-js-extra'>
        /* <![CDATA[ */
        var TRX_ADDONS_STORAGE = {
            "admin_mode": "",
            "ajax_url": "https:\/\/agricola.axiomthemes.com\/wp-admin\/admin-ajax.php",
            "ajax_nonce": "e073edf7b1",
            "site_url": "https:\/\/agricola.axiomthemes.com",
            "post_id": "18091",
            "vc_edit_mode": "",
            "is_preview": "",
            "is_preview_gb": "",
            "is_preview_elm": "",
            "popup_engine": "magnific",
            "scroll_progress": "hide",
            "hide_fixed_rows": "0",
            "smooth_scroll": "",
            "animate_inner_links": "1",
            "disable_animation_on_mobile": "",
            "add_target_blank": "0",
            "menu_collapse": "1",
            "menu_collapse_icon": "trx_addons_icon-ellipsis-vert",
            "menu_stretch": "1",
            "resize_tag_video": "",
            "resize_tag_iframe": "1",
            "user_logged_in": "",
            "theme_slug": "agricola",
            "theme_bg_color": "#FFFFFF",
            "theme_accent_color": "#770614",
            "page_wrap_class": ".page_wrap",
            "columns_wrap_class": "trx_addons_columns_wrap",
            "columns_in_single_row_class": "columns_in_single_row",
            "column_class_template": "trx_addons_column-$1_$2",
            "email_mask": "^([a-zA-Z0-9_\\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-zA-Z0-9_\\-]+(\\.[a-zA-Z0-9_\\-]+)*\\.[a-zA-Z0-9]{2,12}$",
            "mobile_breakpoint_fixedrows_off": "768",
            "mobile_breakpoint_fixedcolumns_off": "768",
            "mobile_breakpoint_stacksections_off": "768",
            "mobile_breakpoint_scroll_lag_off": "768",
            "mobile_breakpoint_fullheight_off": "1025",
            "mobile_breakpoint_mousehelper_off": "1025",
            "msg_caption_yes": "Yes",
            "msg_caption_no": "No",
            "msg_caption_ok": "OK",
            "msg_caption_apply": "Apply",
            "msg_caption_cancel": "Cancel",
            "msg_caption_attention": "Attention!",
            "msg_caption_warning": "Warning!",
            "msg_ajax_error": "Invalid server answer!",
            "msg_magnific_loading": "Loading image",
            "msg_magnific_error": "Error loading image",
            "msg_magnific_close": "Close (Esc)",
            "msg_error_like": "Error saving your like! Please, try again later.",
            "msg_field_name_empty": "The name can't be empty",
            "msg_field_email_empty": "Too short (or empty) email address",
            "msg_field_email_not_valid": "Invalid email address",
            "msg_field_text_empty": "The message text can't be empty",
            "msg_search_error": "Search error! Try again later.",
            "msg_send_complete": "Send message complete!",
            "msg_send_error": "Transmit failed!",
            "msg_validation_error": "Error data validation!",
            "msg_name_empty": "The name can't be empty",
            "msg_name_long": "Too long name",
            "msg_email_empty": "Too short (or empty) email address",
            "msg_email_long": "E-mail address is too long",
            "msg_email_not_valid": "E-mail address is invalid",
            "msg_text_empty": "The message text can't be empty",
            "msg_copied": "Copied!",
            "ajax_views": "",
            "menu_cache": [".menu_mobile_inner nav > ul"],
            "login_via_ajax": "1",
            "double_opt_in_registration": "1",
            "msg_login_empty": "The Login field can't be empty",
            "msg_login_long": "The Login field is too long",
            "msg_password_empty": "The password can't be empty and shorter then 4 characters",
            "msg_password_long": "The password is too long",
            "msg_login_success": "Login success! The page should be reloaded in 3 sec.",
            "msg_login_error": "Login failed!",
            "msg_not_agree": "Please, read and check 'Terms and Conditions'",
            "msg_password_not_equal": "The passwords in both fields are not equal",
            "msg_registration_success": "Thank you for registering. Please confirm registration by clicking on the link in the letter sent to the specified email.",
            "msg_registration_error": "Registration failed!",
            "shapes_url": "https:\/\/agricola.axiomthemes.com\/wp-content\/themes\/agricola\/skins\/default\/trx_addons\/css\/shapes\/",
            "mouse_helper_in_swiper_slider": "1",
            "elementor_stretched_section_container": ".page_wrap",
            "pagebuilder_preview_mode": "",
            "elementor_animate_items": ".elementor-heading-title,.sc_item_subtitle,.sc_item_title,.sc_item_descr,.sc_item_posts_container + .sc_item_button,.sc_item_button.sc_title_button,nav > ul > li",
            "elementor_breakpoints": {
                "mobile": 767,
                "tablet": 1024,
                "desktop": 999999
            },
            "add_to_links_url": [{
                "mask": "elementor.com\/",
                "link": "https:\/\/be.elementor.com\/visit\/?bta=2496&nci=5383&brand=elementor&utm_campaign=theme"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "\/\/account.sliderrevolution.com\/portal",
                "link": "https:\/\/themepunch.pxf.io\/4ekEVG"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "\/\/account.sliderrevolution.com\/portal\/pricing",
                "link": "https:\/\/themepunch.pxf.io\/KeRz5z"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "sliderrevolution.com\/premium-slider-revolution",
                "link": "https:\/\/themepunch.pxf.io\/9W1nyy"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "\/\/support.sliderrevolution.com",
                "link": "https:\/\/themepunch.pxf.io\/P0LbGq"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "sliderrevolution.com\/help-center",
                "link": "https:\/\/themepunch.pxf.io\/doXGdy"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "sliderrevolution.com\/manual",
                "link": "https:\/\/themepunch.pxf.io\/ZdkK3q"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "sliderrevolution.com\/get-on-board-the-slider-revolution-dashboard",
                "link": "https:\/\/themepunch.pxf.io\/QOqb1z"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "sliderrevolution.com\/expand-possibilities-with-addons",
                "link": "https:\/\/themepunch.pxf.io\/6baEN3"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "sliderrevolution.com\/examples",
                "link": "https:\/\/themepunch.pxf.io\/rnvXdB"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "sliderrevolution.com\/pro-level-design-with-slider-revolution",
                "link": "https:\/\/themepunch.pxf.io\/jWEmda"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "sliderrevolution.com\/plugin-privacy-policy",
                "link": "https:\/\/themepunch.pxf.io\/gbzGE0"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "sliderrevolution.com\/faq\/why-was-my-slider-revolution-license-deactivated",
                "link": "https:\/\/themepunch.pxf.io\/RyxbVy"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "sliderrevolution.com\/faq\/updating-make-sure-clear-caches",
                "link": "https:\/\/themepunch.pxf.io\/Yg5Nzq"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "sliderrevolution.com\/faq\/where-to-find-purchase-code",
                "link": "https:\/\/themepunch.pxf.io\/x9xZdO"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "sliderrevolution.com\/documentation\/changelog",
                "link": "https:\/\/themepunch.pxf.io\/EanyNn"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "sliderrevolution.com\/documentation\/system-requirements\/",
                "link": "https:\/\/themepunch.pxf.io\/LPv2kO"
            }, {
                "page": ["organic-farm/admin-page-revslider.html", "organic-farm/plugins.html"],
                "mask": "sliderrevolution.com",
                "link": "https:\/\/themepunch.pxf.io\/DVEORn"
            }],
            "animate_to_mc4wp_form_submitted": "1",
            "msg_no_products_found": "No products found! Please, change query parameters and try again.",
            "audio_effects_allowed": "0",
            "bg_colors_selector": "body:not(.body_style_boxed) .page_content_wrap,body.body_style_boxed .page_wrap",
            "mouse_helper": "1",
            "mouse_helper_delay": "8",
            "mouse_helper_centered": "0",
            "msg_mouse_helper_anchor": "Scroll to",
            "ai_helper_sc_igenerator_openai_sizes": [],
            "msg_ai_helper_download": "Download",
            "msg_ai_helper_download_error": "Error",
            "msg_ai_helper_download_expired": "The generated image cache timed out. The download link is no longer valid.<br>But you can still download the image by right-clicking on it and selecting \"Save Image As...\"",
            "portfolio_use_gallery": "",
            "scroll_to_anchor": "0",
            "update_location_from_anchor": "0",
            "msg_sc_googlemap_not_avail": "Googlemap service is not available",
            "msg_sc_googlemap_geocoder_error": "Error while geocode address",
            "sc_icons_animation_speed": "50",
            "msg_sc_osmap_not_avail": "OpenStreetMap service is not available",
            "msg_sc_osmap_geocoder_error": "Error while geocoding address",
            "osmap_tiler": "vector",
            "osmap_tiler_styles": {
                "basic": {
                    "title": "Basic",
                    "slug": "basic",
                    "url": "https:\/\/api.maptiler.com\/maps\/{style}\/style.json?key=C1rALu26mR1iTxEBrqQj",
                    "maxzoom": "18",
                    "token": ""
                }
            },
            "osmap_attribution": "Map data \u00a9 <a href=\"https:\/\/www.openstreetmap.org\/\">OpenStreetMap<\/a> contributors",
            "slider_round_lengths": "1"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' defer="defer" src='css/plugins/trx_addons/js/__scripts.js' id='trx_addons-js'>
    </script>
    <script type='text/javascript' defer="defer" src='css/plugins/trx_addons/components/api/woocommerce/woocommerce.js' id='trx_addons-woocommerce-js'></script>
    <script type='text/javascript' defer="defer" src='css/plugins/trx_addons/addons/mouse-helper/mouse-helper.js' id='trx_addons-mouse-helper-js'></script>
    <script type='text/javascript' defer="defer" src='css/plugins/trx_addons/components/cpt/layouts/shortcodes/menu/superfish.min.js' id='superfish-js'></script>
    <script type='text/javascript' defer="defer" src='css/plugins/trx_addons/js/swiper/swiper.min.js' id='swiper-js'>
    </script>
    <script type='text/javascript' src='css/plugins/trx_addons/js/tweenmax/tweenmax.min.js' id='tweenmax-js'></script>
    <script type='text/javascript' id='wpgdprc-front-js-js-extra'>
        /* <![CDATA[ */
        var wpgdprcFront = {
            "ajaxUrl": "https:\/\/agricola.axiomthemes.com\/wp-admin\/admin-ajax.php",
            "ajaxNonce": "38805982a9",
            "ajaxArg": "security",
            "pluginPrefix": "wpgdprc",
            "blogId": "1",
            "isMultiSite": "",
            "locale": "en_US",
            "showSignUpModal": "1",
            "showFormModal": "",
            "cookieName": "wpgdprc-consent",
            "consentVersion": "",
            "path": "\/",
            "prefix": "wpgdprc"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' defer="defer" src='css/plugins/wp-gdpr-compliance/Assets/js/front.min.js' id='wpgdprc-front-js-js'></script>
    <script type='text/javascript' id='agricola-init-js-extra'>
        /* <![CDATA[ */
        var AGRICOLA_STORAGE = {
            "ajax_url": "https:\/\/agricola.axiomthemes.com\/wp-admin\/admin-ajax.php",
            "ajax_nonce": "e073edf7b1",
            "site_url": "https:\/\/agricola.axiomthemes.com",
            "theme_url": "https:\/\/agricola.axiomthemes.com\/wp-content\/themes\/agricola\/",
            "site_scheme": "scheme_light",
            "user_logged_in": "",
            "mobile_layout_width": "768",
            "mobile_device": "",
            "mobile_breakpoint_underpanels_off": "768",
            "mobile_breakpoint_fullheight_off": "1025",
            "menu_side_stretch": "",
            "menu_side_icons": "1",
            "background_video": "",
            "use_mediaelements": "1",
            "resize_tag_video": "",
            "resize_tag_iframe": "1",
            "open_full_post": "",
            "which_block_load": "article",
            "admin_mode": "",
            "msg_ajax_error": "Invalid server answer!",
            "msg_i_agree_error": "Please accept the terms of our Privacy Policy.",
            "toggle_title": "Filter by ",
            "msg_copied": "Copied!",
            "alter_link_color": "#770614",
            "mc4wp_msg_email_min": "Email address is too short (or empty)",
            "mc4wp_msg_email_max": "Too long email address",
            "button_hover": "default"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' defer="defer" src='wp-content/themes/agricola/js/__scripts.js' id='agricola-init-js'>
    </script>
    <script id="mediaelement-core-js-before" type="text/javascript">
        var mejsL10n = {
            "language": "en",
            "strings": {
                "mejs.download-file": "Download File",
                "mejs.install-flash": "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/",
                "mejs.fullscreen": "Fullscreen",
                "mejs.play": "Play",
                "mejs.pause": "Pause",
                "mejs.time-slider": "Time Slider",
                "mejs.time-help-text": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.",
                "mejs.live-broadcast": "Live Broadcast",
                "mejs.volume-help-text": "Use Up\/Down Arrow keys to increase or decrease volume.",
                "mejs.unmute": "Unmute",
                "mejs.mute": "Mute",
                "mejs.volume-slider": "Volume Slider",
                "mejs.video-player": "Video Player",
                "mejs.audio-player": "Audio Player",
                "mejs.captions-subtitles": "Captions\/Subtitles",
                "mejs.captions-chapters": "Chapters",
                "mejs.none": "None",
                "mejs.afrikaans": "Afrikaans",
                "mejs.albanian": "Albanian",
                "mejs.arabic": "Arabic",
                "mejs.belarusian": "Belarusian",
                "mejs.bulgarian": "Bulgarian",
                "mejs.catalan": "Catalan",
                "mejs.chinese": "Chinese",
                "mejs.chinese-simplified": "Chinese (Simplified)",
                "mejs.chinese-traditional": "Chinese (Traditional)",
                "mejs.croatian": "Croatian",
                "mejs.czech": "Czech",
                "mejs.danish": "Danish",
                "mejs.dutch": "Dutch",
                "mejs.english": "English",
                "mejs.estonian": "Estonian",
                "mejs.filipino": "Filipino",
                "mejs.finnish": "Finnish",
                "mejs.french": "French",
                "mejs.galician": "Galician",
                "mejs.german": "German",
                "mejs.greek": "Greek",
                "mejs.haitian-creole": "Haitian Creole",
                "mejs.hebrew": "Hebrew",
                "mejs.hindi": "Hindi",
                "mejs.hungarian": "Hungarian",
                "mejs.icelandic": "Icelandic",
                "mejs.indonesian": "Indonesian",
                "mejs.irish": "Irish",
                "mejs.italian": "Italian",
                "mejs.japanese": "Japanese",
                "mejs.korean": "Korean",
                "mejs.latvian": "Latvian",
                "mejs.lithuanian": "Lithuanian",
                "mejs.macedonian": "Macedonian",
                "mejs.malay": "Malay",
                "mejs.maltese": "Maltese",
                "mejs.norwegian": "Norwegian",
                "mejs.persian": "Persian",
                "mejs.polish": "Polish",
                "mejs.portuguese": "Portuguese",
                "mejs.romanian": "Romanian",
                "mejs.russian": "Russian",
                "mejs.serbian": "Serbian",
                "mejs.slovak": "Slovak",
                "mejs.slovenian": "Slovenian",
                "mejs.spanish": "Spanish",
                "mejs.swahili": "Swahili",
                "mejs.swedish": "Swedish",
                "mejs.tagalog": "Tagalog",
                "mejs.thai": "Thai",
                "mejs.turkish": "Turkish",
                "mejs.ukrainian": "Ukrainian",
                "mejs.vietnamese": "Vietnamese",
                "mejs.welsh": "Welsh",
                "mejs.yiddish": "Yiddish"
            }
        };
    </script>
    <script type='text/javascript' defer="defer" src='js/mediaelement-mediaelement-and-player.min.js' id='mediaelement-core-js'></script>
    <script type='text/javascript' defer="defer" src='js/mediaelement-mediaelement-migrate.min.js' id='mediaelement-migrate-js'></script>
    <script type='text/javascript' id='mediaelement-js-extra'>
        /* <![CDATA[ */
        var _wpmejsSettings = {
            "pluginPath": "\/wp-includes\/js\/mediaelement\/",
            "classPrefix": "mejs-",
            "stretching": "responsive",
            "audioShortcodeLibrary": "mediaelement",
            "videoShortcodeLibrary": "mediaelement"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' defer="defer" src='js/mediaelement-wp-mediaelement.min.js' id='wp-mediaelement-js'>
    </script>
    <script type='text/javascript' defer="defer" src='js/default-skin.js' id='agricola-skin-default-js'></script>
    <script type='text/javascript' defer="defer" src='wp-content/themes/agricola/plugins/woocommerce/woocommerce.js' id='agricola-woocommerce-js'></script>
    <script type='text/javascript' src='css/plugins/elementor/assets/js/webpack.runtime.min.js' id='elementor-webpack-runtime-js'></script>
    <script type='text/javascript' src='css/plugins/elementor/assets/js/frontend-modules.min.js' id='elementor-frontend-modules-js'></script>
    <script type='text/javascript' src='css/plugins/elementor/assets/lib/waypoints/waypoints.min.js' id='elementor-waypoints-js'></script>
    <script type='text/javascript' src='js/ui-core.min.js' id='jquery-ui-core-js'></script>
    <script type='text/javascript' src='css/plugins/elementor/assets/lib/share-link/share-link.min.js' id='share-link-js'></script>
    <script type='text/javascript' src='css/plugins/elementor/assets/lib/dialog/dialog.min.js' id='elementor-dialog-js'>
    </script>
    <script id="elementor-frontend-js-before" type="text/javascript">
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Extra",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Extra",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.7.7",
            "is_static": false,
            "experimentalFeatures": {
                "e_import_export": true,
                "e_hidden_wordpress_widgets": true,
                "landing-pages": true,
                "elements-color-picker": true,
                "favorite-widgets": true,
                "admin-top-bar": true
            },
            "urls": {
                "assets": "https:\/\/agricola.axiomthemes.com\/wp-content\/plugins\/elementor\/assets\/"
            },
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "stretched_section_container": ".page_wrap",
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 18091,
                "title": "EcoAgro%20Farm%20%E2%80%93%20Agricola",
                "excerpt": "",
                "featuredImage": false
            }
        };
    </script>
    <script type='text/javascript' src='css/plugins/elementor/assets/js/frontend.min.js' id='elementor-frontend-js'>
    </script>
    <script type='text/javascript' src='css/plugins/elementor/assets/js/preloaded-modules.min.js' id='preloaded-modules-js'></script>
    <script id="rs-initialisation-scripts">
        var tpj = jQuery;
        var revapi4;
        if (window.RS_MODULES === undefined) window.RS_MODULES = {};
        if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
        RS_MODULES.modules["revslider41"] = {
            once: RS_MODULES.modules["revslider41"] !== undefined ? RS_MODULES.modules["revslider41"].once : undefined,
            init: function() {
                window.revapi4 = window.revapi4 === undefined || window.revapi4 === null || window.revapi4
                    .length === 0 ? document.getElementById("rev_slider_4_1") : window.revapi4;
                if (window.revapi4 === null || window.revapi4 === undefined || window.revapi4.length == 0) {
                    window.revapi4initTry = window.revapi4initTry === undefined ? 0 : window.revapi4initTry + 1;
                    if (window.revapi4initTry < 20) requestAnimationFrame(function() {
                        RS_MODULES.modules["revslider41"].init()
                    });
                    return;
                }
                window.revapi4 = jQuery(window.revapi4);
                if (window.revapi4.revolution == undefined) {
                    revslider_showDoubleJqueryError("rev_slider_4_1");
                    return;
                }
                revapi4.revolutionInit({
                    revapi: "revapi4",
                    DPR: "dpr",
                    sliderLayout: "fullscreen",
                    visibilityLevels: "1240,1460,785,500",
                    gridwidth: "1920,1440,778,480",
                    gridheight: "980,700,480,480",
                    lazyType: "smart",
                    perspective: 600,
                    perspectiveType: "global",
                    editorheight: "980,700,480,480",
                    responsiveLevels: "1240,1460,785,500",
                    progressBar: {
                        disableProgressBar: true
                    },
                    navigation: {
                        wheelCallDelay: 1000,
                        onHoverStop: false,
                        touch: {
                            touchenabled: true,
                            touchOnDesktop: true
                        },
                        arrows: {
                            enable: true,
                            style: "arrows_simple",
                            hide_onmobile: true,
                            hide_under: "1136px",
                            animSpeed: "500ms",
                            animDelay: "500ms",
                            left: {
                                anim: "right",
                                h_offset: 66
                            },
                            right: {
                                anim: "left",
                                h_offset: 66
                            }
                        },
                        bullets: {
                            enable: true,
                            tmp: "",
                            style: "bullets_dots_fill",
                            v_offset: 50,
                            space: 22
                        }
                    },
                    parallax: {
                        levels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 15, 17, 20, 25, 30],
                        type: "mouse",
                        origo: "slidercenter",
                        speed: 0
                    },
                    viewPort: {
                        global: true,
                        globalDist: "-200px",
                        enable: false
                    },
                    fallbacks: {
                        allowHTML5AutoPlayOnAndroid: true
                    },
                });
            }
        } // End of RevInitScript
        if (window.RS_MODULES.checkMinimal !== undefined) {
            window.RS_MODULES.checkMinimal();
        };
    </script>
    
</body>

</html>