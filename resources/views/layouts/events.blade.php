<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
    window._wpemojiSettings = {
        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/",
        "ext": ".png",
        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/",
        "svgExt": ".svg",
        "source": {
            "concatemoji": "https:\/\/templatekit.jegtheme.com\/cognitive\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.9.4"
        }
    };
    /*! This file is auto-generated */
    ! function (e, a, t) {
        var n, r, o, i = a.createElement("canvas"),
            p = i.getContext && i.getContext("2d");

        function s(e, t) {
            var a = String.fromCharCode;
            p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
            e = i.toDataURL();
            return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
        }

        function c(e) {
            var t = a.createElement("script");
            t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
        }
        for (o = Array("flag", "emoji"), t.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, r = 0; r < o.length; r++) t.supports[o[r]] = function (e) {
            if (!p || !p.fillText) return !1;
            switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                case "flag":
                    return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356,
                        56826, 55356, 56819
                    ], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128,
                        56421, 56128, 56430, 56128, 56423, 56128, 56447
                    ], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128,
                        56430, 8203, 56128, 56423, 8203, 56128, 56447
                    ]);
                case "emoji":
                    return !s([10084, 65039, 8205, 55357, 56613], [10084, 65039, 8203, 55357, 56613])
            }
            return !1
        }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports
            .everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
        t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t
            .readyCallback = function () {
                t.DOMReady = !0
            }, t.supports.everything || (n = function () {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !
                1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () {
                "complete" === a.readyState && t.readyCallback()
            })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n
                .wpemoji)))
    }(window, document, window._wpemojiSettings);
</script>
<style type="text/css">
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
{{-- <link rel='stylesheet' id='jkit-elements-main-css'
    href='{{ asset("public/wp-content/plugins/jeg-elementor-kit/assets/css/elements/main04c6.css?ver=2.4.4-dev-1")}}' type='text/css'
    media='all' /> --}}
{{-- <link rel='stylesheet' id='wp-block-library-css'
    href='{{ asset("public/wp-includes/css/dist/block-library/style.min9bd2.css?ver=5.9.4'")}} type='text/css' media='all' /> --}}
<style id='global-styles-inline-css' type='text/css'>
    /* body {
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
        --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
        --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
        --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
        --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
        --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
        --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
        --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
        --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
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
    } */
</style>
<link rel='stylesheet' id='template-kit-export-css'
    href='{{ asset('public/wp-content/plugins/template-kit-export/public/assets/css/template-kit-export-public.min365c.css?ver=1.0.2')}}1'
    type='text/css' media='all' />
<link rel='stylesheet' id='hello-elementor-css' href='{{ asset('public/wp-content/themes/hello-elementor/style.min0875.css?ver=2.5.0')}}'
    type='text/css' media='all' />
<link rel='stylesheet' id='hello-elementor-theme-style-css'
    href='{{ asset('public/wp-content/themes/hello-elementor/theme.min0875.css?ver=2.5.0')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css'
    href='{{ asset('public/wp-content/plugins/elementor/assets/css/frontend-lite.min3ab2.css?ver=3.6.5')}}' type='text/css'
    media='all' />
<link rel='stylesheet' id='elementor-post-3-css'
    href='{{ asset('public/wp-content/uploads/sites/304/elementor/css/post-30c7a.css?ver=1657010624')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-css'
    href='{{ asset('public/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min7816.css?ver=5.15.0')}}' type='text/css'
    media='all' />
<link rel='stylesheet' id='elementor-global-css'
    href='{{ asset('public/wp-content/uploads/sites/304/elementor/css/global4515.css?ver=1657010625')}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-1042-css'
    href='{{ asset('public/wp-content/uploads/sites/304/elementor/css/post-1042ac00.css?ver=1657014127')}}' type='text/css'
    media='all' />
<link rel='stylesheet' id='font-awesome-5-all-css'
    href='{{ asset('public/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min3ab2.css?ver=3.6.5')}}' type='text/css'
    media='all' />
<link rel='stylesheet' id='font-awesome-4-shim-css'
    href='{{ asset('public/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min3ab2.css?ver=3.6.5')}}' type='text/css'
    media='all' />
<link rel='stylesheet' id='google-fonts-1-css'
    href='https://fonts.googleapis.com/css?family=Questrial%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=5.9.4'
    type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-jkiticon-css'
    href='{{ asset('public/wp-content/plugins/jeg-elementor-kit/assets/fonts/jkiticon/jkiticon04c6.css?ver=2.4.4-dev-1')}}'
    type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css'
    href='{{ asset('public/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3')}}'
    type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-solid-css'
    href='{{ asset('public/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3')}}' type='text/css'
    media='all' />
<script type='text/javascript' src='{{ asset('public/wp-includes/js/jquery/jquery.minaf6c.js?ver=3.6.0')}}' id='jquery-core-js'>
</script>
<script type='text/javascript' src='{{ asset('public/wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2')}}'
    id='jquery-migrate-js'></script>
<script type='text/javascript'
    src='{{ asset('public/wp-content/plugins/template-kit-export/public/assets/js/template-kit-export-public.min365c.js?ver=1.0.21')}}'
    id='template-kit-export-js'></script>
<script type='text/javascript'
    src='{{ asset('public/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min3ab2.js?ver=3.6.5')}}'
    id='font-awesome-4-shim-js'></script>
<link rel="https://api.w.org/" href="wp-json/index.html" />
<link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/1042.json" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.html?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 5.9.4" />
<link rel="canonical" href="index.html" />
<link rel='shortlink' href='index817f.html?p=1042' />
<link rel="alternate" type="application/json+oembed" href="{{ asset('public/wp-json/oembed/1.0/embed9415.json?url=https%3A%2F%2Ftemplatekit.jegtheme.com%2Fcognitive%2Fpricing%2F')}}" />
<link rel="alternate" type="text/xml+oembed" href="{{ asset('public/wp-json/oembed/1.0/embed2f58?url=https%3A%2F%2Ftemplatekit.jegtheme.com%2Fcognitive%2Fpricing%2F&amp;format=xml')}}" />
<style id="jeg_dynamic_css" type="text/css" data-type="jeg_custom-css"></style>
<link rel="stylesheet" type="text/css" href="{{ asset('public/wp-content/cache/wpfc-minified/eqfoyw91/bxfog.css')}}" media="all" />
<style id='classic-theme-styles-inline-css' type='text/css'>
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
<style id='global-styles-inline-css' type='text/css'>
    /* body {
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
<!-- <link rel='stylesheet' id='contact-form-7-css' href='https://wgl-demo.net/itconf/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.7.7' type='text/css' media='all' /> -->
<!-- <link rel='stylesheet' id='events-manager-css' href='https://wgl-demo.net/itconf/wp-content/plugins/events-manager/includes/css/events-manager.min.css?ver=6.4.3' type='text/css' media='all' /> -->
<!-- <link rel='stylesheet' id='woocommerce-layout-css' href='https://wgl-demo.net/itconf/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=7.8.2' type='text/css' media='all' /> -->
<link rel="stylesheet" type="text/css" href="{{ asset('public/wp-content/cache/wpfc-minified/fp9yp5ll/bxfog.css')}}" media="all" />
<!-- <link rel='stylesheet' id='woocommerce-smallscreen-css' href='https://wgl-demo.net/itconf/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=7.8.2' type='text/css' media='only screen and (max-width: 767px)' /> -->
<link rel="stylesheet" type="text/css" href="{{ asset('public/wp-content/cache/wpfc-minified/kngwjifx/bxfog.css')}}"
    media="only screen and (max-width: 767px)" />
<!-- <link rel='stylesheet' id='woocommerce-general-css' href='https://wgl-demo.net/itconf/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=7.8.2' type='text/css' media='all' /> -->
<link rel="stylesheet" type="text/css" href="{{ asset('public/wp-content/cache/wpfc-minified/fcrtk01/bxfog.css')}}" media="all" />
<style id='woocommerce-inline-inline-css' type='text/css'>
    .woocommerce form .form-row .required {
        visibility: visible;
    }
</style>
<!-- <link rel='stylesheet' id='wgl-extensions-css' href='https://wgl-demo.net/itconf/wp-content/plugins/wgl-extensions/public/css/wgl-extensions-public.css?ver=1.0.0' type='text/css' media='all' /> -->
<!-- <link rel='stylesheet' id='hint-css' href='https://wgl-demo.net/itconf/wp-content/plugins/woo-smart-compare/assets/libs/hint/hint.min.css?ver=6.3' type='text/css' media='all' /> -->
<!-- <link rel='stylesheet' id='perfect-scrollbar-css' href='https://wgl-demo.net/itconf/wp-content/plugins/woo-smart-compare/assets/libs/perfect-scrollbar/css/perfect-scrollbar.min.css?ver=6.3' type='text/css' media='all' /> -->
<!-- <link rel='stylesheet' id='perfect-scrollbar-wpc-css' href='https://wgl-demo.net/itconf/wp-content/plugins/woo-smart-compare/assets/libs/perfect-scrollbar/css/custom-theme.css?ver=6.3' type='text/css' media='all' /> -->
<!-- <link rel='stylesheet' id='woosc-frontend-css' href='https://wgl-demo.net/itconf/wp-content/plugins/woo-smart-compare/assets/css/frontend.css?ver=6.0.1' type='text/css' media='all' /> -->
<!-- <link rel='stylesheet' id='woosc-icons-css' href='https://wgl-demo.net/itconf/wp-content/plugins/woo-smart-compare/assets/css/icons.css?ver=6.0.1' type='text/css' media='all' /> -->
<!-- <link rel='stylesheet' id='woosw-icons-css' href='https://wgl-demo.net/itconf/wp-content/plugins/woo-smart-wishlist/assets/css/icons.css?ver=4.7.1' type='text/css' media='all' /> -->
<!-- <link rel='stylesheet' id='woosw-frontend-css' href='https://wgl-demo.net/itconf/wp-content/plugins/woo-smart-wishlist/assets/css/frontend.css?ver=4.7.1' type='text/css' media='all' /> -->
<link rel="stylesheet" type="text/css" href="{{ asset('public/wp-content/cache/wpfc-minified/mmk9w65w/bxfog.css')}}" media="all" />
<style id='woosw-frontend-inline-css' type='text/css'>
    .woosw-popup .woosw-popup-inner .woosw-popup-content .woosw-popup-content-bot .woosw-notice {
        background-color: #5fbd74;
    }

    .woosw-popup .woosw-popup-inner .woosw-popup-content .woosw-popup-content-bot .woosw-popup-content-bot-inner a:hover {
        color: #5fbd74;
        border-color: #5fbd74;
    }
</style>
<link rel='stylesheet' id='itconf-theme-info-css' href='{{ asset('public/wp-content/themes/itconf/style8a54.css?ver=1.0.0')}}'
    type='text/css' media='all' />
<style id='itconf-theme-info-inline-css' type='text/css'>
    :root {
        --itconf-primary-color: #2562FF;
        --itconf-secondary-color: #232323;
        --itconf-tertiary-color: #FFFFFF;
        --itconf-quaternary-color: #F5F5F5;
        --itconf-button-color-idle: #232323;
        --itconf-button-bg-idle: transparent;
        --itconf-button-border-idle: #232323;
        --itconf-button-color-hover: #FFFFFF;
        --itconf-button-bg-hover: #2562FF;
        --itconf-button-bg-hover-alt: #EEEEEE;
        --itconf-button-border-hover: #2562FF;
        --itconf-button-color-rgb-idle: 35, 35, 35;
        --itconf-button-bg-rgb-idle: transparent;
        --itconf-button-border-rgb-idle: 35, 35, 35;
        --itconf-button-color-rgb-hover: 255, 255, 255;
        --itconf-button-bg-rgb-hover: 37, 98, 255;
        --itconf-button-bg-rgb-hover-alt: 238, 238, 238;
        --itconf-button-border-rgb-hover: 37, 98, 255;
        --itconf-cursor-point-color: rgba(60, 133, 153, 0);
        --itconf-back-to-top-color: #232323;
        --itconf-back-to-top-color-bg: #ffffff;
        --itconf-back-to-top-color-border: #232323;
        --itconf-primary-rgb: 37, 98, 255;
        --itconf-secondary-rgb: 35, 35, 35;
        --itconf-tertiary-rgb: 255, 255, 255;
        --itconf-quaternary-rgb: 245, 245, 245;
        --itconf-content-rgb: 91, 91, 91;
        --itconf-header-rgb: 35, 35, 35;
        --itconf-shop-products-overlay: rgba(178, 125, 19, 0);
        --itconf-filters-columns-1: 30%;
        --itconf-filters-columns-2: 30%;
        --itconf-filters-columns-3: 40%;
        --itconf-filters-columns-4: 20%;
        --itconf-filters-columns-5: 20%;
        --itconf-filters-columns-6: 20%;
        --itconf-filters-columns-7: 20%;
        --itconf-filters-columns-8: 20%;
        --itconf-header-font-family: Raleway;
        --itconf-header-font-weight: 800;
        --itconf-header-font-color: #232323;
        --itconf-h1-font-family: Raleway;
        --itconf-h1-font-size: 56px;
        --itconf-h1-line-height: 68px;
        --itconf-h1-font-weight: 800;
        --itconf-h1-text-transform: none;
        --itconf-h1-letter-spacing: normal;
        --itconf-h2-font-family: Raleway;
        --itconf-h2-font-size: 46px;
        --itconf-h2-line-height: 58px;
        --itconf-h2-font-weight: 800;
        --itconf-h2-text-transform: none;
        --itconf-h2-letter-spacing: normal;
        --itconf-h3-font-family: Raleway;
        --itconf-h3-font-size: 40px;
        --itconf-h3-line-height: 52px;
        --itconf-h3-font-weight: 800;
        --itconf-h3-text-transform: none;
        --itconf-h3-letter-spacing: normal;
        --itconf-h4-font-family: Raleway;
        --itconf-h4-font-size: 36px;
        --itconf-h4-line-height: 48px;
        --itconf-h4-font-weight: 800;
        --itconf-h4-text-transform: none;
        --itconf-h4-letter-spacing: normal;
        --itconf-h5-font-family: Raleway;
        --itconf-h5-font-size: 32px;
        --itconf-h5-line-height: 44px;
        --itconf-h5-font-weight: 800;
        --itconf-h5-text-transform: none;
        --itconf-h5-letter-spacing: normal;
        --itconf-h6-font-family: Raleway;
        --itconf-h6-font-size: 28px;
        --itconf-h6-line-height: 36px;
        --itconf-h6-font-weight: 800;
        --itconf-h6-text-transform: none;
        --itconf-h6-letter-spacing: normal;
        --itconf-content-font-family: DM Sans;
        --itconf-content-font-size: 16px;
        --itconf-content-line-height: 1.875;
        --itconf-content-font-weight: 400;
        --itconf-content-color: #5B5B5B;
        --itconf-menu-font-family: Raleway;
        --itconf-menu-font-size: 14px;
        --itconf-menu-line-height: 24px;
        --itconf-menu-font-weight: 700;
        --itconf-menu-letter-spacing: 0.1em;
        --itconf-submenu-font-family: DM Sans;
        --itconf-submenu-font-size: 16px;
        --itconf-submenu-line-height: 30px;
        --itconf-submenu-font-weight: 500;
        --itconf-submenu-letter-spacing: -0.02em;
        --itconf-submenu-color: #232323;
        --itconf-submenu-background: #ffffff;
        --itconf-submenu-color-rgb: 35, 35, 35;
        --itconf-submenu-mobile-color: #ffffff;
        --itconf-submenu-mobile-background: rgba(26, 26, 26, 1);
        --itconf-submenu-mobile-overlay: rgba(26, 26, 26, 0.8);
        --itconf-header-mobile-height: 60px;
        --itconf-sidepanel-title-color: #ffffff;
        --itconf-bg-caret: url('data:image/svg+xml; utf8, %3Csvg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 451.847 451.847" preserveAspectRatio="none" fill="%23232323"%3E%3Cg%3E%3Cpath d="M225.923,354.706c-8.098,0-16.195-3.092-22.369-9.263L9.27,151.157c-12.359-12.359-12.359-32.397,0-44.751   c12.354-12.354,32.388-12.354,44.748,0l171.905,171.915l171.906-171.909c12.359-12.354,32.391-12.354,44.744,0   c12.365,12.354,12.365,32.392,0,44.751L248.292,345.449C242.115,351.621,234.018,354.706,225.923,354.706z"%3E%3C/path%3E%3C/g%3E%3C/svg%3E');
        --itconf-bg-caret-white: url('data:image/svg+xml; utf8, %3Csvg xmlns="http://www.w3.org/2000/svg" width="512" height="512" x="0" y="0" viewBox="0 0 451.847 451.847" preserveAspectRatio="none" fill="%23ffffff"%3E%3Cg%3E%3Cpath d="M225.923,354.706c-8.098,0-16.195-3.092-22.369-9.263L9.27,151.157c-12.359-12.359-12.359-32.397,0-44.751   c12.354-12.354,32.388-12.354,44.748,0l171.905,171.915l171.906-171.909c12.359-12.354,32.391-12.354,44.744,0   c12.365,12.354,12.365,32.392,0,44.751L248.292,345.449C242.115,351.621,234.018,354.706,225.923,354.706z"%3E%3C/path%3E%3C/g%3E%3C/svg%3E');
        --itconf-bg-caret-2: url('data:image/svg+xml; utf8, %3Csvg xmlns="http://www.w3.org/2000/svg" width="9" height="9" x="0" y="0" viewBox="0 0 9 9" preserveAspectRatio="none" fill="%23232323"%3E%3Cpath d="M5 4V0H4V4H0V5H4V9H5V5H9V4H5Z"/%3E%3C/svg%3E');
        --itconf-bg-caret-2-white: url('data:image/svg+xml; utf8, %3Csvg xmlns="http://www.w3.org/2000/svg" width="9" height="9" x="0" y="0" viewBox="0 0 9 9" preserveAspectRatio="none" fill="%23ffffff"%3E%3Cpath d="M5 4V0H4V4H0V5H4V9H5V5H9V4H5Z"/%3E%3C/svg%3E');
        --itconf-categories-delimiter: url('data:image/svg+xml; utf8, %3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 9" fill="%23ffffff"%3E%3Cpath d="M4.5 0L5.71541 3.28459L9 4.5L5.71541 5.71541L4.5 9L3.28459 5.71541L0 4.5L3.28459 3.28459L4.5 0Z"/%3E%3C/svg%3E');
        --itconf-button-loading: url('data:image/svg+xml; utf8, %3Csvg xmlns="http://www.w3.org/2000/svg" width="489.698px" height="489.698px" viewBox="0 0 489.698 489.698" preserveAspectRatio="none" fill="%23232323"%3E%3Cpath d="M468.999,227.774c-11.4,0-20.8,8.3-20.8,19.8c-1,74.9-44.2,142.6-110.3,178.9c-99.6,54.7-216,5.6-260.6-61l62.9,13.1    c10.4,2.1,21.8-4.2,23.9-15.6c2.1-10.4-4.2-21.8-15.6-23.9l-123.7-26c-7.2-1.7-26.1,3.5-23.9,22.9l15.6,124.8    c1,10.4,9.4,17.7,19.8,17.7c15.5,0,21.8-11.4,20.8-22.9l-7.3-60.9c101.1,121.3,229.4,104.4,306.8,69.3    c80.1-42.7,131.1-124.8,132.1-215.4C488.799,237.174,480.399,227.774,468.999,227.774z"/%3E%3Cpath d="M20.599,261.874c11.4,0,20.8-8.3,20.8-19.8c1-74.9,44.2-142.6,110.3-178.9c99.6-54.7,216-5.6,260.6,61l-62.9-13.1    c-10.4-2.1-21.8,4.2-23.9,15.6c-2.1,10.4,4.2,21.8,15.6,23.9l123.8,26c7.2,1.7,26.1-3.5,23.9-22.9l-15.6-124.8    c-1-10.4-9.4-17.7-19.8-17.7c-15.5,0-21.8,11.4-20.8,22.9l7.2,60.9c-101.1-121.2-229.4-104.4-306.8-69.2    c-80.1,42.6-131.1,124.8-132.2,215.3C0.799,252.574,9.199,261.874,20.599,261.874z"/%3E%3C/svg%3E');
        --itconf-button-success: url('data:image/svg+xml; utf8, %3Csvg xmlns="http://www.w3.org/2000/svg" width="512px" height="512px" viewBox="0 0 24 24" preserveAspectRatio="none" fill="%23232323"%3E%3Cpath d="m21.73 5.68-13 14a1 1 0 0 1 -.73.32 1 1 0 0 1 -.71-.29l-5-5a1 1 0 0 1 1.42-1.42l4.29 4.27 12.27-13.24a1 1 0 1 1 1.46 1.36z"/%3E%3C/svg%3E');
        --itconf-events-location: url('data:image/svg+xml; utf8, %3Csvg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="60px" height="60px" viewBox="0 0 60 60" preserveAspectRatio="none" fill="%232562FF"%3E%3Cpath d="m26.525 10.5-4.618-6.451-.392-.549H0v53h60v-46H26.525zM58 12.5v5H31.536l-3.579-5H58zm-56 42v-49h18.485l5 7h.012l4.69 6.551c.195.272.501.417.813.418v.031h27v35H2z"/%3E%3C/svg%3E');
        --itconf-events-categories: url('data:image/svg+xml; utf8, %3Csvg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="60px" height="60px" viewBox="0 0 60 60" preserveAspectRatio="none" fill="%232562FF"%3E%3Cpath d="m26.525 10.5-4.618-6.451-.392-.549H0v53h60v-46H26.525zM58 12.5v5H31.536l-3.579-5H58zm-56 42v-49h18.485l5 7h.012l4.69 6.551c.195.272.501.417.813.418v.031h27v35H2z"/%3E%3C/svg%3E');
        --itconf-events-tag: url('data:image/svg+xml; utf8, %3Csvg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="502.418px" height="502.418px" viewBox="0 0 502.418 502.418" preserveAspectRatio="none" fill="%232562FF"%3E%3Cpath d="M101.791 0v502.418l149.413-114.577 149.423 114.577V0H101.791zm279.144 462.505-129.731-99.481-129.721 99.481V19.692h259.452v442.813z"/%3E%3C/svg%3E');
        --wgl_price_label: "Price:";
        --itconf-elementor-container-width: 1200px;
    }

    <blade media|%20only%20screen%20and%20(max-width%3A%201200px)%20%7B>header.wgl-theme-header .wgl-mobile-header {
        display: block;
    }

    .wgl-site-header,
    .wgl-theme-header .primary-nav {
        display: none;
    }

    .wgl-theme-header .hamburger-box {
        display: inline-flex;
    }

    header.wgl-theme-header .mobile_nav_wrapper .primary-nav {
        display: block;
    }

    .wgl-theme-header .wgl-sticky-header {
        display: none;
    }

    .wgl-page-socials {
        display: none;
    }

    .wgl-body-bg {
        top: var(--itconf-header-mobile-height) !important;
    }

    body .wgl-theme-header.header_overlap {
        position: relative;
        z-index: 2;
    }
    }

    <blade media|%20only%20screen%20and%20(min-width%3A%201201px)%20%7B>.wgl-theme-header .wgl-sticky-header.sticky_active~.wgl_notices_wrapper {
        transform: translateY(calc(var(--sticky-height) + var(--admin-bar-height)));
    }
    }

    <blade media|%20(max-width%3A%201200px)%20%7B>.page-header {
        padding-top: 80px !important;
        padding-bottom: 80px !important;
        min-height: auto !important;
    }

    .page-header_content .page-header_title {
        color: #fff !important;
        font-size: 38px !important;
        line-height: 44px !important;
    }

    .page-header_content .page-header_breadcrumbs {
        color: #fff !important;
        font-size: 16px !important;
        line-height: 20px !important;
    }
    }

    body .aleft {
        text-align: left;
    }

    body .acenter {
        text-align: center;
    }

    body .aright {
        text-align: right;
    }

    body .ajustify {
        text-align: justify;
    }

    body .wgl-layout-top {
        flex-direction: column;
    }

    body .wgl-layout-left {
        flex-direction: row;
    }

    body .wgl-layout-right {
        flex-direction: row-reverse;
    }

    .wgl-hidden-desktop {
        display: none;
    }

    <blade media|%20(max-width%3A%201200px)%20%7B>body .a-tabletleft {
        text-align: left;
    }

    body .a-tabletcenter {
        text-align: center;
    }

    body .a-tabletright {
        text-align: right;
    }

    body .a-tabletjustify {
        text-align: justify;
    }
    }

    <blade media|%20(max-width%3A%201200px)%20%7B>body .wgl-layout-tablet-top {
        flex-direction: column;
    }

    body .wgl-layout-tablet-left {
        flex-direction: row;
    }

    body .wgl-layout-tablet-right {
        flex-direction: row-reverse;
    }
    }

    <blade media|%20(max-width%3A%201200px)%20%7B>body .a-tabletcenter .wgl-layout-left {
        justify-content: center;
    }

    body .a-tabletcenter .wgl-layout-right {
        justify-content: center;
    }

    body .a-tabletleft .wgl-layout-left {
        justify-content: flex-start;
    }

    body .a-tabletleft .wgl-layout-right {
        justify-content: flex-end;
    }

    body .a-tabletright .wgl-layout-left {
        justify-content: flex-end;
    }

    body .a-tabletright .wgl-layout-right {
        justify-content: flex-start;
    }
    }

    <blade media|%20(max-width%3A%201200px)%20%7B>.wgl-hidden-tablet {
        display: none;
    }
    }

    <blade media|%20(max-width%3A%20767px)%20%7B>body .a-mobileleft {
        text-align: left;
    }

    body .a-mobilecenter {
        text-align: center;
    }

    body .a-mobileright {
        text-align: right;
    }

    body .a-mobilejustify {
        text-align: justify;
    }
    }

    <blade media|%20(max-width%3A%20767px)%20%7B>body .wgl-layout-mobile-top {
        flex-direction: column;
    }

    body .wgl-layout-mobile-left {
        flex-direction: row;
    }

    body .wgl-layout-mobile-right {
        flex-direction: row-reverse;
    }
    }

    <blade media|%20(max-width%3A%20767px)%20%7B>body .a-mobilecenter .wgl-layout-left {
        justify-content: center;
    }

    body .a-mobilecenter .wgl-layout-right {
        justify-content: center;
    }

    body .a-mobileleft .wgl-layout-left {
        justify-content: flex-start;
    }

    body .a-mobileleft .wgl-layout-right {
        justify-content: flex-end;
    }

    body .a-mobileright .wgl-layout-left {
        justify-content: flex-end;
    }

    body .a-mobileright .wgl-layout-right {
        justify-content: flex-start;
    }
    }

    <blade media|%20(max-width%3A%20767px)%20%7B>.wgl-hidden-mobile {
        display: none;
    }
    } */
</style>
<!-- <link rel='stylesheet' id='font-awesome-5-all-css' href='https://wgl-demo.net/itconf/wp-content/themes/itconf/css/font-awesome-5.min.css?ver=1.0.0' type='text/css' media='all' /> -->
<!-- <link rel='stylesheet' id='itconf-flaticon-css' href='https://wgl-demo.net/itconf/wp-content/themes/itconf/fonts/flaticon/flaticon.css?ver=1.0.0' type='text/css' media='all' /> -->
<!-- <link rel='stylesheet' id='itconf-main-css' href='https://wgl-demo.net/itconf/wp-content/themes/itconf/css/main.css?ver=1.0.0' type='text/css' media='all' /> -->
<!-- <link rel='stylesheet' id='itconf-gutenberg-css' href='https://wgl-demo.net/itconf/wp-content/themes/itconf/css/pluggable/gutenberg.css?ver=1.0.0' type='text/css' media='all' /> -->
<!-- <link rel='stylesheet' id='itconf-woocommerce-css' href='https://wgl-demo.net/itconf/wp-content/themes/itconf/css/pluggable/woocommerce.css?ver=1.0.0' type='text/css' media='all' /> -->
<!-- <link rel='stylesheet' id='itconf-side-panel-css' href='https://wgl-demo.net/itconf/wp-content/themes/itconf/css/pluggable/side-panel.css?ver=1.0.0' type='text/css' media='all' /> -->
<!-- <link rel='stylesheet' id='itconf-responsive-css' href='https://wgl-demo.net/itconf/wp-content/themes/itconf/css/responsive.css?ver=1.0.0' type='text/css' media='all' /> -->
<!-- <link rel='stylesheet' id='itconf-dynamic-css' href='https://wgl-demo.net/itconf/wp-content/themes/itconf/css/dynamic.css?ver=1.0.0' type='text/css' media='all' /> -->
<!-- <link rel='stylesheet' id='elementor-icons-css' href='https://wgl-demo.net/itconf/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.20.0' type='text/css' media='all' /> -->
<!-- <link rel='stylesheet' id='elementor-frontend-css' href='https://wgl-demo.net/itconf/wp-content/uploads/elementor/css/custom-frontend.min.css?ver=1689154588' type='text/css' media='all' /> -->
<link rel="stylesheet" type="text/css" href="{{ asset('public/wp-content/cache/wpfc-minified/jo3v3s48/bxfog.css')}}" media="all" />
<style id='elementor-frontend-inline-css' type='text/css'>
    .elementor-container>.elementor-row>.elementor-column>.elementor-element-populated,
    .elementor-container>.elementor-column>.elementor-element-populated {
        padding-top: 0;
        padding-bottom: 0;
    }

    .elementor-column-gap-default>.elementor-row>.elementor-column>.elementor-element-populated,
    .elementor-column-gap-default>.elementor-column>.theiaStickySidebar>.elementor-element-populated,
    .elementor-column-gap-default>.elementor-column>.elementor-element-populated {
        padding-left: 15px;
        padding-right: 15px;
    }
</style>
<!-- <link rel='stylesheet' id='swiper-css' href='https://wgl-demo.net/itconf/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5' type='text/css' media='all' /> -->
<link rel="stylesheet" type="text/css" href="{{ asset('public/wp-content/cache/wpfc-minified/g2aol8zv/bxfog.css')}}" media="all" />
<link rel='stylesheet' id='elementor-post-8-css'
    href='{{  asset("public/wp-content/uploads/elementor/css/post-8ec31.css?ver=1689154588")}}' type='text/css' media='all' />
<!-- <link rel='stylesheet' id='elementor-global-css' href='https://wgl-demo.net/itconf/wp-content/uploads/elementor/css/global.css?ver=1689154588' type='text/css' media='all' /> -->
<link rel="stylesheet" type="text/css" href='{{  asset("public/wp-content/cache/wpfc-minified/kdfa9b2s/bxfog.css")}}' media="all" />
<link rel='stylesheet' id='elementor-post-1578-css'
    href='{{  asset("public/wp-content/uploads/elementor/css/post-15780066.css?ver=1689175287")}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-1590-css'
    href='{{  asset("public/wp-content/uploads/elementor/css/post-15900066.css?ver=1689175287")}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-2510-css'
    href='{{  asset("public/wp-content/uploads/elementor/css/post-2510c6e6.css?ver=1689154589")}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-132-css'
    href='{{  asset("public/wp-content/uploads/elementor/css/post-132c6e6.css?ver=1689154589")}}' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-827-css'
    href='{{  asset("public/wp-content/uploads/elementor/css/post-827c6e6.css?ver=1689154589")}}' type='text/css' media='all' />
<link rel="preload" as="style"
    href="https://fonts.googleapis.com/css?family=DM%20Sans:400,500,400,500,600,700%7CRaleway:800,700,400,500,600,700,800&amp;display=swap&amp;ver=1689151964" />
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=DM%20Sans:400,500,400,500,600,700%7CRaleway:800,700,400,500,600,700,800&amp;display=swap&amp;ver=1689151964"
    media="print" onload="this.media='all'"><noscript>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=DM%20Sans:400,500,400,500,600,700%7CRaleway:800,700,400,500,600,700,800&amp;display=swap&amp;ver=1689151964" />
</noscript>
<link rel='stylesheet' id='google-fonts-1-css'
    href='https://fonts.googleapis.com/css?family=Raleway%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CDM+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.3'
    type='text/css' media='all' />
<!-- <link rel='stylesheet' id='elementor-icons-shared-0-css' href='https://wgl-demo.net/itconf/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3' type='text/css' media='all' /> -->
<!-- <link rel='stylesheet' id='elementor-icons-fa-brands-css' href='https://wgl-demo.net/itconf/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3' type='text/css' media='all' /> -->
<link rel="stylesheet" type="text/css" href="{{ asset("public/wp-content/cache/wpfc-minified/12hqdn0y/bxfog.css")}}" media="all" />
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<script type='text/javascript' src='{{ asset("public/wp-includes/js/jquery/jquery.min3088.js?ver=3.7.0")}}' id='jquery-core-js'></script>
<script type='text/javascript' src='{{ asset("public/wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1")}}'
    id='jquery-migrate-js'></script>
<script type='text/javascript' src='{{ asset("public/wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2")}}' id='jquery-ui-core-js'>
</script>
<script type='text/javascript' src='{{ asset("public/wp-includes/js/jquery/ui/mouse.min3f14.js?ver=1.13.2")}}' id='jquery-ui-mouse-js'>
</script>
<script type='text/javascript' src='{{ asset("public/wp-includes/js/jquery/ui/sortable.min3f14.js?ver=1.13.2")}}'
    id='jquery-ui-sortable-js'></script>
<script type='text/javascript' src='{{ asset("public/wp-includes/js/jquery/ui/datepicker.min3f14.js?ver=1.13.2")}}'
    id='jquery-ui-datepicker-js'></script>
<script id="jquery-ui-datepicker-js-after" type="text/javascript">
    jQuery(function (jQuery) {
        jQuery.datepicker.setDefaults({
            "closeText": "Close",
            "currentText": "Today",
            "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August",
                "September", "October", "November", "December"
            ],
            "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep",
                "Oct", "Nov", "Dec"
            ],
            "nextText": "Next",
            "prevText": "Previous",
            "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday",
                "Saturday"
            ],
            "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
            "dateFormat": "MM d, yy",
            "firstDay": 1,
            "isRTL": false
        });
    });
</script>
<script type='text/javascript' src='{{ asset("public/wp-includes/js/jquery/ui/resizable.min3f14.js?ver=1.13.2")}}'
    id='jquery-ui-resizable-js'></script>
<script type='text/javascript' src='{{ asset("public/wp-includes/js/jquery/ui/draggable.min3f14.js?ver=1.13.2")}}'
    id='jquery-ui-draggable-js'></script>
<script type='text/javascript' src='{{ asset("public/wp-includes/js/jquery/ui/controlgroup.min3f14.js?ver=1.13.2")}}'
    id='jquery-ui-controlgroup-js'></script>
<script type='text/javascript' src='{{ asset("public/wp-includes/js/jquery/ui/checkboxradio.min3f14.js?ver=1.13.2")}}'
    id='jquery-ui-checkboxradio-js'></script>
<script type='text/javascript' src='{{ asset("public/wp-includes/js/jquery/ui/button.min3f14.js?ver=1.13.2")}}' id='jquery-ui-button-js'>
</script>
<script type='text/javascript' src='{{ asset("public/wp-includes/js/jquery/ui/dialog.min3f14.js?ver=1.13.2")}}' id='jquery-ui-dialog-js'>
</script>
<script type='text/javascript' id='events-manager-js-extra'>
    /* <![CDATA[ */
    var EM = {
        "ajaxurl": "https:\/\/wgl-demo.net\/itconf\/wp-admin\/admin-ajax.php",
        "locationajaxurl": "https:\/\/wgl-demo.net\/itconf\/wp-admin\/admin-ajax.php?action=locations_search",
        "firstDay": "1",
        "locale": "en",
        "dateFormat": "yy-mm-dd",
        "ui_css": "https:\/\/wgl-demo.net\/itconf\/wp-content\/plugins\/events-manager\/includes\/css\/jquery-ui\/build.min.css",
        "show24hours": "0",
        "is_ssl": "1",
        "autocomplete_limit": "10",
        "calendar": {
            "breakpoints": {
                "small": 560,
                "medium": 908,
                "large": false
            }
        },
        "datepicker": {
            "format": "Y-m-d"
        },
        "search": {
            "breakpoints": {
                "small": 650,
                "medium": 850,
                "full": false
            }
        },
        "bookingInProgress": "Please wait while the booking is being submitted.",
        "tickets_save": "Save Ticket",
        "bookingajaxurl": "https:\/\/wgl-demo.net\/itconf\/wp-admin\/admin-ajax.php",
        "bookings_export_save": "Export Bookings",
        "bookings_settings_save": "Save Settings",
        "booking_delete": "Are you sure you want to delete?",
        "booking_offset": "30",
        "bookings": {
            "submit_button": {
                "text": {
                    "default": "Send your booking",
                    "free": "Send your booking",
                    "payment": "Send your booking",
                    "processing": "Processing ..."
                }
            }
        },
        "bb_full": "Sold Out",
        "bb_book": "Book Now",
        "bb_booking": "Booking...",
        "bb_booked": "Booking Submitted",
        "bb_error": "Booking Error. Try again?",
        "bb_cancel": "Cancel",
        "bb_canceling": "Canceling...",
        "bb_cancelled": "Cancelled",
        "bb_cancel_error": "Cancellation Error. Try again?",
        "txt_search": "Search",
        "txt_searching": "Searching...",
        "txt_loading": "Loading...",
        "event_detach_warning": "Are you sure you want to detach this event? By doing so, this event will be independent of the recurring set of events.",
        "delete_recurrence_warning": "Are you sure you want to delete all recurrences of this event? All events will be moved to trash.",
        "disable_bookings_warning": "Are you sure you want to disable bookings? If you do this and save, you will lose all previous bookings. If you wish to prevent further bookings, reduce the number of spaces available to the amount of bookings you currently have",
        "booking_warning_cancel": "Are you sure you want to cancel your booking?"
    };
    /* ]]> */
</script>
<script type='text/javascript'
    src='{{ asset("public/wp-content/plugins/events-manager/includes/js/events-manager.min84fc.js?ver=6.4.3")}}' id='events-manager-js'>
</script>
<link rel="https://api.w.org/" href="https://wgl-demo.net/itconf/wp-json/" />
<link rel="alternate" type="application/json" href="https://wgl-demo.net/itconf/wp-json/wp/v2/pages/1578" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://wgl-demo.net/itconf/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 6.3" />
<meta name="generator" content="WooCommerce 7.8.2" />
<link rel="canonical" href="index.html" />
<link rel='shortlink' href='https://wgl-demo.net/itconf/?p=1578' />
<link rel="alternate" type="application/json+oembed"
    href="https://wgl-demo.net/itconf/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwgl-demo.net%2Fitconf%2Fhomepage-2%2F" />
<link rel="alternate" type="text/xml+oembed"
    href="https://wgl-demo.net/itconf/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwgl-demo.net%2Fitconf%2Fhomepage-2%2F&amp;format=xml" />
<style></style> <noscript>
    <style>
        .woocommerce-product-gallery {
            opacity: 1 !important;
        }
    </style>
</noscript>
<meta name="generator" content="Elementor 3.14.1; features: e_dom_optimization, e_optimized_assets_loading, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
<link rel="icon" href="{{ asset('public/wp-content/uploads/2023/06/cropped-favicon-32x32.png')}}" sizes="32x32" />
<link rel="icon" href="{{ asset('public/wp-content/uploads/2023/06/cropped-favicon-192x192.png')}}" sizes="192x192" />
<link rel="apple-touch-icon" href="{{ asset('public/wp-content/uploads/2023/06/cropped-favicon-180x180.png')}}" />
<meta name="msapplication-TileImage" content="https://wgl-demo.net/itconf/wp-content/uploads/2023/06/cropped-favicon-270x270.png" />