<style>
ul{
    text-decoration: none;
    list-style: none;
}
li{
    list-style: none;
    text-decoration: none;
}
.menu-inner ul li{
    font-size: 18px;
    line-height: 4;
    font-weight:bold;
}
.menu-inner ul li:hover{
    color:#fff;
}
.menu-icon {
    position: relative;
    padding: 0.3rem;
    display: inline-flex;
    cursor: pointer;
    color: inherit;
    background-color: transparent;
    border: 0;
    margin: 0;
    overflow: visible;
    z-index: 1040;
}
.menu-icon-box {
    width: 26px;
    height: 26px;
    display: inline-block;
    position: relative;
}
.menu-icon-inner {
    display: block;
    top: 50%;
    margin-top: -2px;
}
.menu-icon-inner,
.menu-icon-inner::before,
.menu-icon-inner::after {
    position: absolute;
    width: 100%;
    height: 3px;
    background-color: black;
}
.menu-icon-inner::before,
.menu-icon-inner::after {
    content: "";
    display: block;
}
.menu-icon-inner::before {
    top: -8px;
}
.menu-icon-inner::after {
    bottom: -8px;
}


.menu-active .menu {
    transform: translateX(0);
}
.menu {
    display: none;
    justify-content: center;
    align-items: center;
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: #667eea;
    color: white;
    overflow-y: auto;
    overflow-x: hidden;
    z-index: 1030;
    transform: translateX(-100%);
    transition: transform 300ms cubic-bezier(.2, 0, .2, 1);
    /* From https://css.glass */
    background: #FFF;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(7.7px);
    -webkit-backdrop-filter: blur(7.7px);
}
.menu-inner {
    display: flex;
    flex-direction: column;
}


.container {
    max-width: 1024px;
    margin: 0 auto;
    text-align: right;
}
</style>
<header id="masthead" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
    <style>
        .elementor-10 .elementor-element.elementor-element-bce9428:not(.elementor-motion-effects-element-type-background),
        .elementor-10 .elementor-element.elementor-element-bce9428>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: var(--e-global-color-d656850);
        }

        .elementor-10 .elementor-element.elementor-element-bce9428 {
            border-style: solid;
            border-width: 0px 0px 0px 0px;
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 0px;
            margin-bottom: -93px;
            z-index: 99;
        }

        .elementor-10 .elementor-element.elementor-element-bce9428>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-bc-flex-widget .elementor-10 .elementor-element.elementor-element-d18512e.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-10 .elementor-element.elementor-element-d18512e.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-10 .elementor-element.elementor-element-d18512e.elementor-column>.elementor-widget-wrap {
            justify-content: flex-start;
        }

        .elementor-10 .elementor-element.elementor-element-7a38183 {
            text-align: center;
        }

        .elementor-10 .elementor-element.elementor-element-7a38183 img {
            width: 70%;
        }

        .elementor-bc-flex-widget .elementor-10 .elementor-element.elementor-element-8811dbb.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-10 .elementor-element.elementor-element-8811dbb.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-10 .elementor-element.elementor-element-8811dbb>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-bc-flex-widget .elementor-10 .elementor-element.elementor-element-0d5bfba.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-10 .elementor-element.elementor-element-0d5bfba.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper:not(.active) .jkit-menu,
        .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper:not(.active) .jkit-menu>li>a {
            display: flex;
        }

        .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu {
            justify-content: flex-start;
        }

        .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu .menu-item .sub-menu {
            left: unset;
            top: 100%;
            right: unset;
            bottom: unset;
        }

        .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu .menu-item .sub-menu .menu-item .sub-menu {
            left: 100%;
            top: unset;
            right: unset;
            bottom: unset;
        }

        .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper {
            height: 90px;
            padding: 0px 0px 0px 25px;
        }

        .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu>li>a {
            font-family: var(--e-global-typography-cabc20a-font-family), Sans-serif;
            font-size: var(--e-global-typography-cabc20a-font-size);
            font-weight: var(--e-global-typography-cabc20a-font-weight);
            line-height: var(--e-global-typography-cabc20a-line-height);
            letter-spacing: var(--e-global-typography-cabc20a-letter-spacing);
            word-spacing: var(--e-global-typography-cabc20a-word-spacing);
            color: var(--e-global-color-61201e6);
        }

        .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu>li>a svg {
            fill: var(--e-global-color-61201e6);
        }

        .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu>li:hover>a {
            color: var(--e-global-color-primary);
        }

        .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu>li:hover>a svg {
            fill: var(--e-global-color-primary);
        }

        .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu>li.current-menu-item>a,
        .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu>li.current-menu-ancestor>a {
            color: var(--e-global-color-primary);
        }

        .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu>li.current-menu-item>a svg,
        .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu>li.current-menu-ancestor>a svg {
            fill: var(--e-global-color-primary);
        }

        .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li.menu-item-has-children>a i,
        .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li.menu-item-has-children>a svg {
            border-style: solid;
            border-width: 0px 0px 0px 0px;
        }

        .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu .sub-menu li a {
            font-family: var(--e-global-typography-cabc20a-font-family), Sans-serif;
            font-size: var(--e-global-typography-cabc20a-font-size);
            font-weight: var(--e-global-typography-cabc20a-font-weight);
            line-height: var(--e-global-typography-cabc20a-line-height);
            letter-spacing: var(--e-global-typography-cabc20a-letter-spacing);
            word-spacing: var(--e-global-typography-cabc20a-word-spacing);
            padding: 15px 15px 15px 15px;
        }

        .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu .sub-menu li>a {
            color: var(--e-global-color-61201e6);
            background-color: var(--e-global-color-d656850);
        }

        .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu .sub-menu li>a svg {
            fill: var(--e-global-color-61201e6);
        }

        .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu .sub-menu li:hover>a {
            color: var(--e-global-color-primary);
        }

        .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu .sub-menu li:hover>a svg {
            fill: var(--e-global-color-primary);
        }

        .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu .sub-menu li.current-menu-item>a {
            color: var(--e-global-color-primary);
        }

        .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu .sub-menu li.current-menu-item>a svg {
            fill: var(--e-global-color-primary);
        }

        .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li.menu-item-has-children .sub-menu {
            padding: 5px 5px 5px 5px;
            background-color: var(--e-global-color-d656850);
            border-radius: 0px 0px 0px 0px;
            min-width: 220px;
        }

        .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-hamburger-menu {
            float: right;
            background-color: transparent;
            background-image: linear-gradient(180deg, var(--e-global-color-b89459d) 0%, var(--e-global-color-b89459d) 100%);
            border-style: solid;
        }

        .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-hamburger-menu:hover {
            background-color: transparent;
            background-image: linear-gradient(180deg, var(--e-global-color-b89459d) 0%, var(--e-global-color-b89459d) 100%);
        }

        .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-nav-identity-panel .jkit-close-menu {
            background-color: var(--e-global-color-b89459d);
            border-style: solid;
        }

        .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-nav-identity-panel .jkit-close-menu:hover {
            background-color: var(--e-global-color-b89459d);
        }

        .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-nav-identity-panel .jkit-nav-site-title .jkit-nav-logo img {
            object-fit: cover;
        }

        .elementor-bc-flex-widget .elementor-10 .elementor-element.elementor-element-fa9a120.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-10 .elementor-element.elementor-element-fa9a120.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-10 .elementor-element.elementor-element-fa9a120.elementor-column>.elementor-widget-wrap {
            justify-content: center;
        }

        .elementor-10 .elementor-element.elementor-element-fb358db .jeg-elementor-kit.jkit-search .jkit-search-modal i {
            font-size: 25px;
        }

        .elementor-10 .elementor-element.elementor-element-fb358db .jeg-elementor-kit.jkit-search .jkit-search-modal svg {
            width: 25px;
            fill: var(--e-global-color-61201e6);
        }

        .elementor-10 .elementor-element.elementor-element-fb358db .jeg-elementor-kit.jkit-search .jkit-search-modal {
            color: var(--e-global-color-61201e6);
            margin: 0px 20px -9px 0px;
            padding: 0px 0px 0px 0px;
            text-align: center;
            width: 40px;
            height: 40px;
            line-height: 40px;
        }

        .elementor-10 .elementor-element.elementor-element-fb358db .jeg-elementor-kit.jkit-search .jkit-search-modal:hover {
            color: var(--e-global-color-primary);
        }

        .elementor-10 .elementor-element.elementor-element-fb358db .jeg-elementor-kit.jkit-search .jkit-search-modal:hover svg {
            fill: var(--e-global-color-primary);
        }

        .elementor-10 .elementor-element.elementor-element-fb358db .jeg-elementor-kit.jkit-search .mfp-bg {
            background-color: var(--e-global-color-0346697);
        }

        .elementor-10 .elementor-element.elementor-element-fb358db .jeg-elementor-kit.jkit-search .jkit-search-panel input:not([type=submit])::placeholder {
            color: var(--e-global-color-3e336eb);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-size: var(--e-global-typography-text-font-size);
            font-weight: var(--e-global-typography-text-font-weight);
            line-height: var(--e-global-typography-text-line-height);
        }

        .elementor-10 .elementor-element.elementor-element-fb358db .jeg-elementor-kit.jkit-search .mfp-close {
            color: var(--e-global-color-61201e6);
            border-color: var(--e-global-color-61201e6);
        }

        .elementor-10 .elementor-element.elementor-element-fb358db .jeg-elementor-kit.jkit-search .jkit-search-panel input:not([type=submit]) {
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-10 .elementor-element.elementor-element-fb358db {
            width: auto;
            max-width: auto;
        }

        .elementor-10 .elementor-element.elementor-element-f01c80f .jeg-elementor-kit.jkit-button {
            text-align: center;
        }

        .elementor-10 .elementor-element.elementor-element-f01c80f .jeg-elementor-kit.jkit-button .jkit-button-wrapper {
            padding: 13px 28px 13px 28px;
            font-family: var(--e-global-typography-93f7f1b-font-family), Sans-serif;
            font-size: var(--e-global-typography-93f7f1b-font-size);
            font-weight: var(--e-global-typography-93f7f1b-font-weight);
            line-height: var(--e-global-typography-93f7f1b-line-height);
            letter-spacing: var(--e-global-typography-93f7f1b-letter-spacing);
            word-spacing: var(--e-global-typography-93f7f1b-word-spacing);
            color: var(--e-global-color-61201e6);
            background-color: transparent;
    background-image: linear-gradient(170deg, #60ccff 0%, #179d9d 100%);
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-10 .elementor-element.elementor-element-f01c80f .jeg-elementor-kit.jkit-button .jkit-button-wrapper svg {
            fill: var(--e-global-color-61201e6);
        }

        .elementor-10 .elementor-element.elementor-element-f01c80f .jeg-elementor-kit.jkit-button .jkit-button-wrapper:hover {
            background-color: transparent;
            background-image: linear-gradient(180deg, var(--e-global-color-76b8ccf) 0%, var(--e-global-color-76b8ccf) 100%);
        }

        .elementor-10 .elementor-element.elementor-element-f01c80f .jeg-elementor-kit.jkit-button.icon-position-before .jkit-button-wrapper i,
        .elementor-10 .elementor-element.elementor-element-f01c80f .jeg-elementor-kit.jkit-button.icon-position-before .jkit-button-wrapper svg {
            margin-right: 5px;
        }

        .elementor-10 .elementor-element.elementor-element-f01c80f .jeg-elementor-kit.jkit-button.icon-position-after .jkit-button-wrapper i,
        .elementor-10 .elementor-element.elementor-element-f01c80f .jeg-elementor-kit.jkit-button.icon-position-after .jkit-button-wrapper svg {
            margin-left: 5px;
        }

        .elementor-10 .elementor-element.elementor-element-f01c80f {
            width: auto;
            max-width: auto;
        }

        .elementor-10 .elementor-element.elementor-element-f01c80f>.elementor-widget-container:hover {
            --e-transform-translateX: 5px;
            --e-transform-translateY: 0px;
        }

        @media(max-width:1024px) {
            .elementor-10 .elementor-element.elementor-element-d18512e>.elementor-element-populated {
                padding: 20px 20px 20px 20px;
            }

            .elementor-10 .elementor-element.elementor-element-7a38183 img {
                width: 100%;
            }

            .elementor-10 .elementor-element.elementor-element-0d5bfba>.elementor-element-populated {
                margin: 0px 20px 0px 0px;
                --e-column-margin-right: 20px;
                --e-column-margin-left: 0px;
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu {
                justify-content: flex-end;
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper {
                height: 80px;
                padding: 0px 20px 0px 20px;
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu.break-point-mobile .jkit-menu-wrapper {
                background-color: var(--e-global-color-d656850);
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu.break-point-tablet .jkit-menu-wrapper {
                background-color: #fff;
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu>li>a {
                font-size: var(--e-global-typography-cabc20a-font-size);
                line-height: var(--e-global-typography-cabc20a-line-height);
                letter-spacing: var(--e-global-typography-cabc20a-letter-spacing);
                word-spacing: var(--e-global-typography-cabc20a-word-spacing);
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li.menu-item-has-children>a i,
            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li.menu-item-has-children>a svg {
                border-width: 0px 0px 0px 0px;
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu .sub-menu li a {
                font-size: var(--e-global-typography-cabc20a-font-size);
                line-height: var(--e-global-typography-cabc20a-line-height);
                letter-spacing: var(--e-global-typography-cabc20a-letter-spacing);
                word-spacing: var(--e-global-typography-cabc20a-word-spacing);
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li.menu-item-has-children .sub-menu {
                padding: 0px 0px 0px 20px;
                min-width: 220px;
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-hamburger-menu {
                float: right;
                border-width: 0px 0px 0px 0px;
                color: var(--e-global-color-primary);
                margin: 0px 0px -5px 0px;
                padding: 0px 0px 0px 0px;
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-hamburger-menu i {
                font-size: 20px;
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-hamburger-menu svg {
                width: 20px;
                fill: var(--e-global-color-primary);
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-hamburger-menu:hover {
                color: var(--e-global-color-76b8ccf);
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-hamburger-menu:hover svg {
                fill: var(--e-global-color-76b8ccf);
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-nav-identity-panel .jkit-close-menu i {
                font-size: 15px;
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-nav-identity-panel .jkit-close-menu svg {
                width: 15px;
                fill: var(--e-global-color-secondary);
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-nav-identity-panel .jkit-close-menu {
                border-width: 0px 0px 0px 0px;
                border-radius: 0px 0px 0px 0px;
                color: var(--e-global-color-secondary);
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-nav-identity-panel .jkit-close-menu:hover {
                color: var(--e-global-color-61201e6);
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-nav-identity-panel .jkit-close-menu:hover svg {
                fill: var(--e-global-color-61201e6);
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-nav-identity-panel .jkit-nav-site-title .jkit-nav-logo img {
                max-width: 160px;
                object-fit: cover;
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-nav-identity-panel .jkit-nav-site-title .jkit-nav-logo {
                margin: 20px 0px 0px 10px;
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2>.elementor-widget-container {
                margin: 0px 0px -15px 0px;
            }

            .elementor-10 .elementor-element.elementor-element-fb358db .jeg-elementor-kit.jkit-search .jkit-search-modal i {
                font-size: 20px;
            }

            .elementor-10 .elementor-element.elementor-element-fb358db .jeg-elementor-kit.jkit-search .jkit-search-modal svg {
                width: 20px;
            }

            .elementor-10 .elementor-element.elementor-element-fb358db .jeg-elementor-kit.jkit-search .jkit-search-modal {
                margin: 5px 5px 5px 5px;
                padding: 0px 0px 0px 0px;
                text-align: center;
                width: 40px;
                height: 40px;
                line-height: 40px;
            }

            .elementor-10 .elementor-element.elementor-element-fb358db .jeg-elementor-kit.jkit-search .jkit-search-panel input:not([type=submit])::placeholder {
                font-size: var(--e-global-typography-text-font-size);
                line-height: var(--e-global-typography-text-line-height);
            }

            .elementor-10 .elementor-element.elementor-element-f01c80f .jeg-elementor-kit.jkit-button {
                text-align: center;
            }

            .elementor-10 .elementor-element.elementor-element-f01c80f .jeg-elementor-kit.jkit-button .jkit-button-wrapper {
                font-size: var(--e-global-typography-93f7f1b-font-size);
                line-height: var(--e-global-typography-93f7f1b-line-height);
                letter-spacing: var(--e-global-typography-93f7f1b-letter-spacing);
                word-spacing: var(--e-global-typography-93f7f1b-word-spacing);
            }

            .elementor-10 .elementor-element.elementor-element-f01c80f .jeg-elementor-kit.jkit-button.icon-position-before .jkit-button-wrapper i,
            .elementor-10 .elementor-element.elementor-element-f01c80f .jeg-elementor-kit.jkit-button.icon-position-before .jkit-button-wrapper svg {
                margin-right: 5px;
            }

            .elementor-10 .elementor-element.elementor-element-f01c80f .jeg-elementor-kit.jkit-button.icon-position-after .jkit-button-wrapper i,
            .elementor-10 .elementor-element.elementor-element-f01c80f .jeg-elementor-kit.jkit-button.icon-position-after .jkit-button-wrapper svg {
                margin-left: 5px;
            }
        }

        @media(min-width:768px) {
            .elementor-10 .elementor-element.elementor-element-d18512e {
                width: 15%;
            }

            .elementor-10 .elementor-element.elementor-element-8811dbb {
                width: 85%;
            }

            .elementor-10 .elementor-element.elementor-element-0d5bfba {
                width: 70%;
            }

            .elementor-10 .elementor-element.elementor-element-fa9a120 {
                width: 30%;
            }
        }

        @media(max-width:1024px) and (min-width:768px) {
            .elementor-10 .elementor-element.elementor-element-d18512e {
                width: 25%;
            }

            .elementor-10 .elementor-element.elementor-element-8811dbb {
                width: 75%;
            }

            .elementor-10 .elementor-element.elementor-element-0d5bfba {
                width: 100%;
            }

            .elementor-10 .elementor-element.elementor-element-fa9a120 {
                width: 35%;
            }
        }

        @media(max-width:767px) {
            .elementor-10 .elementor-element.elementor-element-bce9428 {
                padding: 10px 0px 10px 0px;
            }

            .elementor-10 .elementor-element.elementor-element-d18512e {
                width: 50%;
            }

            .elementor-10 .elementor-element.elementor-element-d18512e>.elementor-element-populated {
                padding: 10px 20px 10px 0px;
            }

            .elementor-10 .elementor-element.elementor-element-7a38183 img {
                width: 80%;
            }

            .elementor-10 .elementor-element.elementor-element-8811dbb {
                width: 50%;
            }

            .elementor-10 .elementor-element.elementor-element-0d5bfba {
                width: 100%;
            }

            .elementor-10 .elementor-element.elementor-element-0d5bfba>.elementor-element-populated {
                margin: 0px 15px 0px 0px;
                --e-column-margin-right: 15px;
                --e-column-margin-left: 0px;
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu {
                justify-content: flex-start;
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper {
                height: 80px;
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu.break-point-mobile .jkit-menu-wrapper {
                background-color: var(--e-global-color-d656850);
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu.break-point-tablet .jkit-menu-wrapper {
                background-color: #fff;
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu>li>a {
                font-size: var(--e-global-typography-cabc20a-font-size);
                line-height: var(--e-global-typography-cabc20a-line-height);
                letter-spacing: var(--e-global-typography-cabc20a-letter-spacing);
                word-spacing: var(--e-global-typography-cabc20a-word-spacing);
                color: var(--e-global-color-61201e6);
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu>li>a svg {
                fill: var(--e-global-color-61201e6);
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu .sub-menu li a {
                font-size: var(--e-global-typography-cabc20a-font-size);
                line-height: var(--e-global-typography-cabc20a-line-height);
                letter-spacing: var(--e-global-typography-cabc20a-letter-spacing);
                word-spacing: var(--e-global-typography-cabc20a-word-spacing);
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li.menu-item-has-children .sub-menu {
                min-width: 220px;
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-hamburger-menu {
                float: right;
                color: var(--e-global-color-primary);
                margin: 0px 0px -5px 0px;
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-hamburger-menu i {
                font-size: 18px;
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-hamburger-menu svg {
                width: 18px;
                fill: var(--e-global-color-primary);
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-hamburger-menu:hover {
                color: var(--e-global-color-76b8ccf);
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-hamburger-menu:hover svg {
                fill: var(--e-global-color-76b8ccf);
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-nav-identity-panel .jkit-close-menu {
                color: var(--e-global-color-61201e6);
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-nav-identity-panel .jkit-close-menu svg {
                fill: var(--e-global-color-61201e6);
            }

            .elementor-10 .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-nav-identity-panel .jkit-nav-site-title .jkit-nav-logo img {
                max-width: 140px;
                object-fit: cover;
            }

            .elementor-10 .elementor-element.elementor-element-fa9a120 {
                width: 40%;
            }

            .elementor-10 .elementor-element.elementor-element-fb358db .jeg-elementor-kit.jkit-search .jkit-search-modal i {
                font-size: 20px;
            }

            .elementor-10 .elementor-element.elementor-element-fb358db .jeg-elementor-kit.jkit-search .jkit-search-modal svg {
                width: 20px;
            }

            .elementor-10 .elementor-element.elementor-element-fb358db .jeg-elementor-kit.jkit-search .jkit-search-modal {
                margin: 5px 5px 5px 5px;
                padding: 0px 0px 0px 0px;
                text-align: center;
                width: 40px;
                height: 40px;
                line-height: 40px;
            }

            .elementor-10 .elementor-element.elementor-element-fb358db .jeg-elementor-kit.jkit-search .jkit-search-panel input:not([type=submit])::placeholder {
                font-size: var(--e-global-typography-text-font-size);
                line-height: var(--e-global-typography-text-line-height);
            }

            .elementor-10 .elementor-element.elementor-element-f01c80f .jeg-elementor-kit.jkit-button {
                text-align: center;
            }

            .elementor-10 .elementor-element.elementor-element-f01c80f .jeg-elementor-kit.jkit-button .jkit-button-wrapper {
                font-size: var(--e-global-typography-93f7f1b-font-size);
                line-height: var(--e-global-typography-93f7f1b-line-height);
                letter-spacing: var(--e-global-typography-93f7f1b-letter-spacing);
                word-spacing: var(--e-global-typography-93f7f1b-word-spacing);
            }

            .elementor-10 .elementor-element.elementor-element-f01c80f .jeg-elementor-kit.jkit-button.icon-position-before .jkit-button-wrapper i,
            .elementor-10 .elementor-element.elementor-element-f01c80f .jeg-elementor-kit.jkit-button.icon-position-before .jkit-button-wrapper svg {
                margin-right: 5px;
            }

            .elementor-10 .elementor-element.elementor-element-f01c80f .jeg-elementor-kit.jkit-button.icon-position-after .jkit-button-wrapper i,
            .elementor-10 .elementor-element.elementor-element-f01c80f .jeg-elementor-kit.jkit-button.icon-position-after .jkit-button-wrapper svg {
                margin-left: 5px;
            }
        }

        @media (max-width: 1024px) {
            .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-hamburger-menu {
                display: block;
            }
        }

        @media (max-width: 1024px) {
            .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper {
                width: 100%;
                max-width: 360px;
                border-radius: 0;
                background-color: #f7f7f7;
                width: 100%;
                position: fixed;
                top: 0;
                left: -110%;
                height: 100% !important;
                box-shadow: 0 10px 30px 0 rgba(255, 165, 0, 0);
                overflow-y: auto;
                overflow-x: hidden;
                padding-top: 0;
                padding-left: 0;
                padding-right: 0;
                display: flex;
                flex-direction: column-reverse;
                justify-content: flex-end;
                -moz-transition: left .6s cubic-bezier(.6, .1, .68, .53), width .6s;
                -webkit-transition: left .6s cubic-bezier(.6, .1, .68, .53), width .6s;
                -o-transition: left .6s cubic-bezier(.6, .1, .68, .53), width .6s;
                -ms-transition: left .6s cubic-bezier(.6, .1, .68, .53), width .6s;
                transition: left .6s cubic-bezier(.6, .1, .68, .53), width .6s;
            }
        }

        @media (max-width: 1024px) {
            .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper.active {
                left: 0;
            }
        }

        @media (max-width: 1024px) {
            .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu-container {
                overflow-y: hidden;
            }
        }

        @media (max-width: 1024px) {
            .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-nav-identity-panel {
                padding: 10px 0px 10px 0px;
                display: block;
                position: relative;
                z-index: 5;
                width: 100%;
            }
        }

        @media (max-width: 1024px) {
            .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-nav-identity-panel .jkit-nav-site-title {
                display: inline-block;
            }
        }

        @media (max-width: 1024px) {
            .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-nav-identity-panel .jkit-close-menu {
                display: block;
            }
        }

        @media (max-width: 1024px) {
            .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu {
                display: block;
                height: 100%;
                overflow-y: auto;
            }
        }

        @media (max-width: 1024px) {
            .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li.menu-item-has-children>a i {
                margin-left: auto;
                border: 1px solid var(--jkit-border-color);
                border-radius: 3px;
                padding: 4px 15px;
            }
        }

        @media (max-width: 1024px) {
            .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li.menu-item-has-children>a svg {
                margin-left: auto;
                border: 1px solid var(--jkit-border-color);
                border-radius: 3px;
            }
        }

        @media (max-width: 1024px) {
            .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li.menu-item-has-children .sub-menu {
                position: inherit;
                box-shadow: none;
                background: none;
            }
        }

        @media (max-width: 1024px) {
            .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li {
                display: block;
                width: 100%;
                position: inherit;
            }
        }

        @media (max-width: 1024px) {
            .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li .sub-menu {
                display: none;
                max-height: 2500px;
                opacity: 0;
                visibility: hidden;
                transition: max-height 5s ease-out;
            }
        }

        @media (max-width: 1024px) {
            .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li .sub-menu.dropdown-open {
                display: block;
                opacity: 1;
                visibility: visible;
            }
        }

        @media (max-width: 1024px) {
            .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li a {
                display: block;
            }
        }

        @media (max-width: 1024px) {
            .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li a i {
                float: right;
            }
        }

        @media (max-width: 1024px) {
            .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu li a svg {
                float: right
            }
        }

        @media (min-width: 1025px) {
            .elementor-element.elementor-element-cc1d5f2 .jeg-elementor-kit.jkit-nav-menu .jkit-menu-wrapper .jkit-menu-container {
                height: 100%;
            }
        }
    </style>
    <div data-elementor-type="page" data-elementor-id="10" class="elementor elementor-10">
        <section style="background-color: #fff;" class="elementor-section elementor-top-section elementor-element elementor-element-bce9428 elementor-section-full_width elementor-section-height-default " data-id="bce9428" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;} ">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-d18512e" data-id="d18512e" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-7a38183 elementor-widget elementor-widget-image" data-id="7a38183" data-element_type="widget" data-widget_type="image.default">
                            {{-- <div class="elementor-widget-container"> --}}
                                <style>
                                    /*! elementor - v3.6.5 - 27-04-2022 */
                                    .elementor-widget-image {
                                        text-align: center
                                    }

                                    .elementor-widget-image a {
                                        display: inline-block
                                    }

                                    .elementor-widget-image a img[src$=".svg"] {
                                        width: 48px
                                    }

                                    .elementor-widget-image img {
                                        vertical-align: middle;
                                        display: inline-block
                                    }

                                    @media (min-width:1025px) {

                                        #login_btn {
                                            display: none
                                        }

                                        #hidder {
                                            display: none
                                        }
                                    }
                                </style> 
                                <a href="{{ route('welcome') }}" style="padding-left:2%" class="items-start items-left justify-start justify-begining mr-2">
                                    <img style="float:left; width:50%" src="uploads/sites/304/2022/06/logos.svg" class="attachment-full size-full" alt="" loading="lazy" />
                                </a>
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8811dbb" data-id="8811dbb" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-569538b elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="569538b" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0d5bfba" data-id="0d5bfba" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-cc1d5f2 elementor-widget elementor-widget-jkit_nav_menu" data-id="cc1d5f2" data-element_type="widget" data-widget_type="jkit_nav_menu.default">
                                            <div class="elementor-widget-container">
                                                <div class="jeg-elementor-kit jkit-nav-menu break-point-tablet submenu-click-title jeg_module_6__632ca69737dea" data-item-indicator="&lt;i aria-hidden=&quot;true&quot; class=&quot;jki jki-angle-down-solid&quot;&gt;&lt;/i&gt;">
                                                    <div class="flex justify-center items-center">
                                                        <button class="jkit-hamburger-menu menu-icon" style="padding-top: 2%" type="button"><i aria-hidden="true" class="fas fa-bars"></i></button>
                                                        @auth
                                                            @hasanyrole('admin')
                                                            <a id="login_btn" href="{{ route('home') }}" class="text-xs btn btn-sm btn-outline-info">
                                                                <i class="fa fa-cog"></i>&nbsp;Administration
                                                            </a>
                                                            @endhasanyrole
                                                            @hasanyrole(['counselor', 'staff'])
                                                            <a id="login_btn" href="{{ route('home') }}" class="text-xs text-white btn btn-sm btn-info">
                                                                <i class="fa fa-heartbeat"></i>&nbsp;Therapy Center
                                                            </a>
                                                            @endhasanyrole
                                                            @hasanyrole(['patient'])
                                                            <a id="login_btn" href="{{ route('patient') }}" class="text-xs text-white btn btn-sm btn-info">
                                                                <i class="fa fa-life-saver"></i>&nbsp;Counseling Center
                                                            </a>
                                                            @endhasanyrole
                                                        @else
                                                            <a id="login_btn" href="{{ route('login') }}" style="
                                                                border: 1px solid #0e97ba;
                                                                background-color:#FFF;
                                                                height:50px;
                                                                width:50px;
                                                                cursor:pointer;
                                                                padding:5%;
                                                                margin-top:5%;
                                                                margin:2%;
                                                                color:black;
                                                                font-weight:bold;
                                                                font-size:12px;"
                                                                >
                                                                Login
                                                            </a>
                                                            <a id="login_btn" href="{{ route('start') }}" style="
                                                                border: 1px solid #0e97ba;
                                                                background-color:#13959e;
                                                                height:50px;
                                                                width:50px;
                                                                cursor:pointer;
                                                                padding:5%;
                                                                margin-top:5%;
                                                                margin:2%;
                                                                color:black;
                                                                font-weight:bold;
                                                                font-size:12px">
                                                                Sign Up
                                                            </a>
                                                        @endauth
                                                    </div>
                                                    <div style="background-color: #fff;" class="jkit-menu-wrapper">
                                                        <div id="hidder" class="elementor-element elementor-element-f01c80f elementor-widget__width-auto e-transform elementor-widget elementor-widget-jkit_button" data-id="f01c80f" data-element_type="widget" data-settings="{&quot;_transform_translateX_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="jkit_button.default">
                                                            <div class="elementor-widget-container">
                                                                {{-- <div class="jeg-elementor-kit jkit-button  icon-position-before jeg_module_6_2_632ca6974641a"><a href="#" class="jkit-button-wrapper">Get Started</a></div> --}}
                                                            </div>
                                                        </div>
                                                        <div class="jkit-menu-container">
                                                            {{-- @dd(Request::route()->uri) --}}
                                                            <ul id="menu-menu" class="jkit-menu jkit-menu-direction-flex jkit-submenu-position-top">
                                                                <li id="menu-item-14" class="@if(Request::route()->uri == 'home') current-menu-item @endif menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-6 current_page_item menu-item-14"><a href="{{ route('welcome') }}" aria-current="page">Home</a></li>
                                                                {{-- <li id="menu-item-14" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-6 menu-item-13"><a href="index.php" aria-current="page">Business</a></li> --}}
                                                                <li id="menu-item-1431" class=" @if(Request::route()->uri == 'about') current-menu-item @endif menu-item menu-item-type-post_type menu-item-object-page menu-item-1431"><a href="{{ route('about') }}" @if(Request::route()->uri == 'contact') style="text-decoration:none; color:black" @endif>About</a></li>
                                                                <li id="menu-item-16" class="@if(Request::route()->uri == 'frequently-asked-question') current-menu-item @endif menu-item menu-item-type-custom menu-item-object-custom menu-item-16">
                                                                    <a href="{{  route('faq')}}">FAQ</a>
                                                                </li>
                                                                @if(!Auth::user())
                                                                </li>
                                                                <li id="menu-item-24" class="@if(Request::route()->uri == 'start-your-career') current-menu-item @endif menu-item menu-item-type-custom menu-item-object-custom menu-item-24"><a href="{{ route('careers')}}">Therapist Jobs</a>
                                                                @endif
                                                                </li>
                                                                <li id="menu-item-1440" class="@if(Request::route()->uri == 'contact') current-menu-item @endif menu-item menu-item-type-post_type menu-item-object-page menu-item-1440"><a href="{{  route('contact')}}">Contact Us</a></li>
                                                                {{-- <li id="menu-item-17" class="@if(Request::route()->uri == 'reviews') current-menu-item @endif menu-item menu-item-type-custom menu-item-object-custom menu-item-17"><a href="{{  route('reviews')}}">Events</a> --}}
                                                                    <li id="menu-item-17" class="@if(Request::route()->uri == 'events') current-menu-item @endif menu-item menu-item-type-custom menu-item-object-custom menu-item-17"><a href="{{  route('events')}}">Events</a>
                                                            </ul>
                                                        </div>
                                                        <div class="jkit-nav-identity-panel">
                                                            <div class="jkit-nav-site-title"><a href="{{ route('welcome') }}" class="jkit-nav-logo"><img src="uploads/sites/304/2022/06/logos.svg"></a></div>
                                                            <button class="jkit-close-menu"><i aria-hidden="true" class="fas fa-times"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="jkit-overlay"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-fa9a120 elementor-hidden-tablet elementor-hidden-mobile" data-id="fa9a120" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="row">
                                            @if(!empty(Auth::User()))
                                            <div class="elementor-element elementor-element-fb358db elementor-widget__width-auto elementor-widget elementor-widget-jkit_search" data-id="fb358db" data-element_type="widget" data-widget_type="jkit_search.default">
                                                <div class="elementor-widget-container">
                                                    <div class="jeg-elementor-kit jkit-search jeg_module_6_1_632ca69743d73">
                                                        @hasrole('admin')
                                                            <a href="{{ route('home') }}" style="padding: 13px 28px 13px 28px;font-family: var( --e-global-typography-93f7f1b-font-family), Sans-serif;font-size: var( --e-global-typography-93f7f1b-font-size);font-weight: var( --e-global-typography-93f7f1b-font-weight);line-height: var( --e-global-typography-93f7f1b-line-height);letter-spacing: var( --e-global-typography-93f7f1b-letter-spacing);word-spacing: var( --e-global-typography-93f7f1b-word-spacing);background-color: transparent;border-radius: 0px 0px 1px 0px;margin: 0.1rem;" class="btn btn-outline-warning ">
                                                                <i class="fa fa-cog"></i>
                                                                <small>Administration Center</small>
                                                            </a>
                                                        @endhasrole
                                                        
                                                        @hasrole('counselor')
                                                            <a href="{{ route('home') }}" style="padding: 13px 28px 13px 28px;font-family: var( --e-global-typography-93f7f1b-font-family), Sans-serif;font-size: var( --e-global-typography-93f7f1b-font-size);font-weight: var( --e-global-typography-93f7f1b-font-weight);line-height: var( --e-global-typography-93f7f1b-line-height);letter-spacing: var( --e-global-typography-93f7f1b-letter-spacing);word-spacing: var( --e-global-typography-93f7f1b-word-spacing);background-color: transparent;border-radius: 0px 0px 1px 0px;margin: 0.1rem;" class="btn btn-outline-warning ">
                                                                <i class="fa fa-heartbeat"></i>
                                                                <small>Therapy Center</small>
                                                            </a>
                                                        @endhasrole

                                                        @hasrole('patient')
                                                            <a href="{{ route('patient') }}" style="padding: 13px 28px 13px 28px;font-family: var( --e-global-typography-93f7f1b-font-family), Sans-serif;font-size: var( --e-global-typography-93f7f1b-font-size);font-weight: var( --e-global-typography-93f7f1b-font-weight);line-height: var( --e-global-typography-93f7f1b-line-height);letter-spacing: var( --e-global-typography-93f7f1b-letter-spacing);word-spacing: var( --e-global-typography-93f7f1b-word-spacing);background-color: transparent;border-radius: 0px 0px 1px 0px;margin: 0.1rem;" class="btn btn-outline-warning ">
                                                                <i class="fa fa-life-saver"></i>
                                                                <small>Counseling Center</small>
                                                            </a>
                                                        @endhasrole
                                                    </div>
                                                </div>
                                            </div>
                                            @else
                                            <div class="elementor-element elementor-element-fb358db elementor-widget__width-auto elementor-widget elementor-widget-jkit_search" data-id="fb358db" data-element_type="widget" data-widget_type="jkit_search.default">
                                                <div class="elementor-widget-container">
                                                    <div class="jeg-elementor-kit jkit-search jeg_module_6_1_632ca69743d73">
                                                        <a href="{{ route('login') }}" style="padding: 13px 28px 13px 28px;font-family: var( --e-global-typography-93f7f1b-font-family), Sans-serif;font-size: var( --e-global-typography-93f7f1b-font-size);font-weight: var( --e-global-typography-93f7f1b-font-weight);line-height: var( --e-global-typography-93f7f1b-line-height);letter-spacing: var( --e-global-typography-93f7f1b-letter-spacing);word-spacing: var( --e-global-typography-93f7f1b-word-spacing);background-color: transparent;border-radius: 0px 0px 0px 0px;margin: 0.1rem;" class="btn btn-outline-info"><i class="fa fa-user"></i> LOGIN</a>
                                                        {{-- <a href="{{ route('login') }}" class="jkit-button">LOGIN</a> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-f01c80f elementor-widget__width-auto e-transform elementor-widget elementor-widget-jkit_button" data-id="f01c80f" data-element_type="widget" data-settings="{&quot;_transform_translateX_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateX_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;_transform_translateY_effect_hover_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="jkit_button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="jeg-elementor-kit jkit-button  icon-position-before jeg_module_6_2_632ca6974641a">
                                                        {{-- <a href="#" id="myBtn2" class="jkit-button-wrapper">Get Started</a> --}}
                                                        <a href="{{ route('start') }}" style="color:#fff" class="jkit-button-wrapper">Get Started</a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                           
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        
        {{-- Slide in Menu --}}
        <div class="menu">
            
            <div class="menu-inner">
                <a href="#" class="menu-close-icon jkit-close">X</a>
                <ul id="menu-menu" class="jkit-menu jkit-menu-direction-flex jkit-submenu-position-top">
                    <li id="menu-item-14" class="@if(Request::route()->uri == 'home') current-menu-item @endif menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-6 current_page_item menu-item-14"><a href="{{ route('welcome') }}" aria-current="page">Home</a></li>
                    {{-- <li id="menu-item-14" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-6 menu-item-13"><a href="index.php" aria-current="page">Business</a></li> --}}
                    <li id="menu-item-1431" class=" @if(Request::route()->uri == 'about') current-menu-item @endif menu-item menu-item-type-post_type menu-item-object-page menu-item-1431"><a href="{{ route('about') }}">About</a></li>
                    <li id="menu-item-16" class="@if(Request::route()->uri == 'frequently-asked-question') current-menu-item @endif menu-item menu-item-type-custom menu-item-object-custom menu-item-16"><a href="{{  route('faq')}}">FAQ</a>

                    </li>
                    {{-- <li id="menu-item-17" class="@if(Request::route()->uri == 'reviews') current-menu-item @endif menu-item menu-item-type-custom menu-item-object-custom menu-item-17"><a href="{{  route('reviews')}}">Reviews</a> --}}
                    <li id="menu-item-17" class="@if(Request::route()->uri == 'events') current-menu-item @endif menu-item menu-item-type-custom menu-item-object-custom menu-item-17"><a href="{{  route('events')}}">Events</a>
                    
                     @if(!Auth::user())
                        </li>
                        <li id="menu-item-24" class="@if(Request::route()->uri == 'start-your-career') current-menu-item @endif menu-item menu-item-type-custom menu-item-object-custom menu-item-24"><a href="{{ route('careers')}}">Therapist Jobs</a>
                     @endif   
                    </li>
                    <li id="menu-item-1440" class="@if(Request::route()->uri == 'contact') current-menu-item @endif menu-item menu-item-type-post_type menu-item-object-page menu-item-1440"><a href="{{  route('contact')}}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<script>
(function(){
    
    'use strict';
    
    
    var menuIcon = document.querySelector('.menu-icon');
    var menucloseIcon = document.querySelector('.menu-close-icon');
    var menu = document.querySelector('.menu');
    var body = document.body;
    var bodyClass = 'menu-active';
    var show = false;
    var timeout = 300; // transition or animation duration
    
    // // Original
    // menuIcon.addEventListener('click', function() {
    //     show = !show;
    //     if (show) return showMenu();
    //     return closeMenu();
    // }, false);      
    menuIcon.addEventListener('click', function() {
        return showMenu();
    }, false);    

    menucloseIcon.addEventListener('click', function() {
        return closeMenu();
    }, false);
    
    
    function showMenu() {
        menu.style.display = 'flex';

        setTimeout(function() {
            body.classList.add(bodyClass);
        }, 0);
    }
    
    function closeMenu() {
        body.classList.remove(bodyClass);

        setTimeout(function() {
            menu.style.display = 'none';
        }, timeout);
    }
}());
</script>