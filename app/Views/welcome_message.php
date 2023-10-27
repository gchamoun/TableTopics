<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- STYLES -->

    <style {csp-style-nonce}>
        * {
            transition: background-color 300ms ease, color 300ms ease;
        }
        *:focus {
            background-color: rgba(221, 72, 20, .2);
            outline: none;
        }
        html, body {
            color: rgba(33, 37, 41, 1);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            font-size: 16px;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }

        header {
            background-color: rgba(255 255 255);
            padding: 0rem 0 0;
        }
        .menu {
            padding: 0rem 2rem;
        }

.button-container {
    text-align: center;
    margin-top: 10px;
}

.pink-button {
    background-color: #FF69B4;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    padding: 0.5rem 2rem; /* Adjust padding as needed */
    font-size: 20px; /* Adjust the font size as needed */
    line-height: 1.5; /* Adjust the line height as needed */
}

}

        header ul {
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            list-style-type: none;
            margin: 0;
            overflow: hidden;
            padding: 0;
            text-align: right;
        }
        header li {
            display: inline-block;
        }
        header li a {
            border-radius: 5px;
            color: rgba(0, 0, 0, .5);
            display: block;
            height: 44px;
            text-decoration: none;
        }
        header li.menu-item a {
            border-radius: 5px;
            margin: 5px 0;
            height: 38px;
            line-height: 36px;
            padding: .4rem .65rem;
            text-align: center;
        }
        header li.menu-item a:hover,
        header li.menu-item a:focus {
            background-color: rgba(221, 72, 20, .2);
            color: rgba(221, 72, 20, 1);
        }
        header .logo {
            float: left;
            height: 44px;
            padding: .4rem .5rem;
        }
        header .menu-toggle {
            display: none;
            float: right;
            font-size: 2rem;
            font-weight: bold;
        }
        header .menu-toggle button {
            background-color: rgba(221, 72, 20, .6);
            border: none;
            border-radius: 3px;
            color: rgba(255, 255, 255, 1);
            cursor: pointer;
            font: inherit;
            font-size: 1.3rem;
            height: 36px;
            padding: 0;
            margin: 11px 0;
            overflow: visible;
            width: 40px;
        }
        header .menu-toggle button:hover,
        header .menu-toggle button:focus {
            background-color: rgba(221, 72, 20, .8);
            color: rgba(255, 255, 255, .8);
        }
        header .heroe {
            margin: 0 auto;
            max-width: 1100px;
            padding: 0rem 0rem 0rem 1.75rem;
        }
        header .heroe h1 {
            font-size: 2.5rem;
            font-weight: 500;
        }
        header .heroe h2 {
            font-size: 1.5rem;
            font-weight: 300;
        }
        section {
            margin: 0 auto;
            max-width: 1100px;
            padding: 0rem 1.75rem 0rem 1.75rem;
        }
        section h1 {
            margin-bottom: 2.5rem;
        }
        section h2 {
            font-size: 120%;
            line-height: 2.5rem;
            padding-top: 1.5rem;
        }
        section pre {
            background-color: rgba(255, 255, 255);
            border: 1px solid rgba(255, 255, 255);
            display: block;
            font-size: .9rem;
            margin: 2rem 0;
            padding: 1rem 1.5rem;
            white-space: pre-wrap;
            word-break: break-all;
        }
        section code {
            display: block;
        }
        section a {
            color: rgba(221, 72, 20, 1);
        }
        section svg {
            margin-bottom: -5px;
            margin-right: 5px;
            width: 25px;
        }
        .further {
            background-color: rgba(255,255,255);
            border-bottom: 1px solid rgba(255,255,255);
            border-top: 1px solid rgba(255,255,255);
        }
        .further h2:first-of-type {
            padding-top: 0;
        }
        footer {
            background-color: rgba(221, 72, 20, .8);
            text-align: center;
        }
        footer .environment {
            color: rgba(255, 255, 255, 1);
            padding: 2rem 1.75rem;
        }
        footer .copyrights {
            background-color: rgba(62, 62, 62, 1);
            color: rgba(200, 200, 200, 1);
            padding: .25rem 1.75rem;
        }
        @media (max-width: 629px) {
            header ul {
                padding: 0;
            }
            header .menu-toggle {
                padding: 0 1rem;
            }
            header .menu-item {
                background-color: rgba(244, 245, 246, 1);
                border-top: 1px solid rgba(242, 242, 242, 1);
                margin: 0 15px;
                width: calc(100% - 30px);
            }
            header .menu-toggle {
                display: block;
            }
            header .hidden {
                display: none;
            }
            header li.menu-item a {
                background-color: rgba(221, 72, 20, .1);
            }
            header li.menu-item a:hover,
            header li.menu-item a:focus {
                background-color: rgba(221, 72, 20, .7);
                color: rgba(255, 255, 255, .8);
            }
            /* Style the container for the icon and text */
.icon-and-text {
    display: flex;
    align-items: center;
}

/* Style the SVG icon */
.icon-and-text svg {
    width: 29px;
    height: 29px;
    margin-right: 10px;
}

/* Style the text content */
.text-content {
    flex: 1;
}

        }
    </style>
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>

    <div class="menu">
        <ul>
            <li class="logo">
                <a href="https://codeigniter.com" target="_blank">
<svg xmlns="http://www.w3.org/2000/svg" width="65" height="47" viewBox="0 0 65 47" fill="none">
<path fill-rule="evenodd" clip-rule="evenodd" d="M11.2762 42.041C17.47 42.041 22.491 37.1251 22.491 31.0611C22.491 24.997 17.47 20.0811 11.2762 20.0811C5.08244 20.0811 0.0614014 24.997 0.0614014 31.0611C0.0614014 37.1251 5.08244 42.041 11.2762 42.041Z" fill="#F05984"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M53.552 42.0408C59.7457 42.0408 64.7668 37.1249 64.7668 31.0608C64.7668 24.9968 59.7457 20.0809 53.552 20.0809C47.3582 20.0809 42.3372 24.9968 42.3372 31.0608C42.3372 37.1249 47.3582 42.0408 53.552 42.0408Z" fill="#F05984"/>
<path d="M17.7703 19.8698C19.3593 19.8698 20.6474 18.5817 20.6474 16.9927C20.6474 15.4037 19.3593 14.1156 17.7703 14.1156C16.1813 14.1156 14.8932 15.4037 14.8932 16.9927C14.8932 18.5817 16.1813 19.8698 17.7703 19.8698Z" fill="#745858"/>
<path d="M46.8935 19.8694C48.4824 19.8694 49.7706 18.5813 49.7706 16.9923C49.7706 15.4034 48.4824 14.1152 46.8935 14.1152C45.3045 14.1152 44.0164 15.4034 44.0164 16.9923C44.0164 18.5813 45.3045 19.8694 46.8935 19.8694Z" fill="#745858"/>
<mask id="mask0_393_494" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="21" y="19" width="23" height="12">
<path d="M32.3254 30.5324C26.5598 30.5324 20.7033 27.4099 21.5374 22.5447C22.3714 17.6795 28.1326 20.0851 32.3254 20.1114L32.3483 20.1113L32.3484 20.1096L32.4377 20.1111V20.1111L32.5268 20.1096L32.5267 20.1113L32.5498 20.1114C36.7007 20.0854 42.3887 17.7274 43.3113 22.4009L43.3378 22.5447C44.1719 27.4099 38.3154 30.5324 32.5498 30.5324L32.3483 30.5317V30.5317H32.5269L32.3254 30.5324V30.5324Z" fill="white"/>
</mask>
<g mask="url(#mask0_393_494)">
<rect x="20.8705" y="17.6149" width="23.8388" height="12.9176" fill="#745858"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M29.9715 36.639C32.663 36.639 34.8449 34.4834 34.8449 31.8243C34.8449 29.1652 32.663 27.0095 29.9715 27.0095C27.2799 27.0095 25.098 29.1652 25.098 31.8243C25.098 34.4834 27.2799 36.639 29.9715 36.639Z" fill="#F05984"/>
<rect x="24.3934" y="17.6149" width="4.34501" height="4.93217" rx="2.1725" fill="white"/>
<rect x="29.3257" y="17.6149" width="4.345" height="4.93217" rx="2.1725" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M34.9036 36.639C37.5951 36.639 39.7771 34.4834 39.7771 31.8243C39.7771 29.1652 37.5951 27.0095 34.9036 27.0095C32.2121 27.0095 30.0302 29.1652 30.0302 31.8243C30.0302 34.4834 32.2121 36.639 34.9036 36.639Z" fill="#F05984"/>
</g>
</svg>
                </a>
            </li>
        </ul>
    </div>

    <div class="heroe">

        <h2 style="margin-bottom: 5px;">Welcome to Our Cafe!</h2>
        <p style="margin-top: 0px;">Get Started to connect with other Tables</p>

    </div>
    
</header>

<!-- CONTENT -->
</br>
<section>

<img src="http://192.168.1.191/images/home-header.gif" alt="Home Header" width="350" height="250">


</section>

<div class="further">

    <section>
            <div class="icon-and-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
                <path d="M27.5476 15.8327C28.0593 15.0206 28.3486 14.1544 28.3486 13.1071C28.3486 10.7 26.1772 8.42694 23.3416 8.42694H21.2133C21.5003 7.72639 21.7296 6.88858 21.7296 5.88178C21.7296 1.90086 19.5307 0.154358 16.1713 0.154358C12.577 0.154358 12.782 5.34601 11.9846 6.09342C10.6575 7.3374 9.0899 9.72724 7.97293 10.6544H2.21097C1.17987 10.6544 0.343994 11.4379 0.343994 12.4044V25.5294C0.343994 26.4958 1.17987 27.2794 2.21097 27.2794H5.94492C6.81383 27.2794 7.54399 26.723 7.75227 25.9696C10.3491 26.0243 12.1315 28.1538 18.1258 28.1538C18.547 28.1538 19.0138 28.1544 19.4222 28.1544C23.9214 28.1544 25.9558 25.9984 26.0114 22.941C26.7885 21.9334 27.1957 20.5828 27.0231 19.2775C27.598 18.2684 27.8203 17.0712 27.5476 15.8327ZM23.9449 18.7765C24.6777 19.9321 24.0184 21.4787 23.1316 21.9249C23.5809 24.5926 22.1043 25.5288 20.0324 25.5288H17.8259C13.6463 25.5288 10.9397 23.4605 7.8119 23.4605V13.2794H8.44901C10.1036 13.2794 12.4152 9.40256 13.9648 7.94951C15.6194 6.39858 15.068 3.8135 16.1713 2.77936C18.9292 2.77936 18.9292 4.58295 18.9292 5.88178C18.9292 8.02389 17.2746 8.98365 17.2746 11.0519H23.3416C24.5733 11.0519 25.5429 12.0861 25.5482 13.1202C25.5534 14.1538 24.8002 15.188 24.2489 15.188C25.0359 15.9839 25.204 17.6618 23.9449 18.7765ZM5.47818 23.7794C5.47818 24.5042 4.85128 25.0919 4.07795 25.0919C3.30461 25.0919 2.67772 24.5042 2.67772 23.7794C2.67772 23.0545 3.30461 22.4669 4.07795 22.4669C4.85128 22.4669 5.47818 23.0545 5.47818 23.7794Z" fill="#F286A4"/>
            </svg>
            <div class="text-content">
                <p>                <strong>Get Personalized Recommendations</strong></br>
We'll recommend a tables prompt that most similarly aligns with your prompt.</p>
            </div>
        </div>


            <div class="icon-and-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="28" viewBox="0 0 27 28" fill="none">
<g clip-path="url(#clip0_296_713)">
<path d="M4.77962 7.65436C5.35099 7.65436 5.90953 7.47841 6.3846 7.14877C6.85968 6.81912 7.22995 6.35059 7.44861 5.80241C7.66726 5.25423 7.72447 4.65103 7.613 4.06909C7.50153 3.48715 7.22639 2.9526 6.82238 2.53304C6.41836 2.11348 5.90361 1.82776 5.34322 1.712C4.78283 1.59625 4.20197 1.65566 3.67409 1.88272C3.14622 2.10978 2.69503 2.4943 2.3776 2.98765C2.06016 3.481 1.89073 4.06102 1.89073 4.65436C1.89073 5.45001 2.1951 6.21307 2.73687 6.77568C3.27864 7.33829 4.01344 7.65436 4.77962 7.65436ZM4.77962 15.9081C4.77898 15.6278 4.83323 15.3503 4.93907 15.0924C5.04491 14.8346 5.20014 14.6017 5.39532 14.4081L8.65119 11.2169C8.72566 11.1442 8.82136 11.1086 8.90441 11.0495C8.69199 10.4911 8.32286 10.0118 7.84492 9.67385C7.36697 9.33592 6.80227 9.15493 6.22407 9.15436H3.33518C2.569 9.15436 1.8342 9.47043 1.29243 10.033C0.750653 10.5956 0.446289 11.3587 0.446289 12.1544L0.446289 16.6544C0.446289 17.0522 0.598471 17.4337 0.869357 17.715C1.14024 17.9963 1.50764 18.1544 1.89073 18.1544V24.1544C1.89073 24.5522 2.04292 24.9337 2.3138 25.215C2.58469 25.4963 2.95209 25.6544 3.33518 25.6544H6.22407C6.60716 25.6544 6.97456 25.4963 7.24544 25.215C7.51633 24.9337 7.66851 24.5522 7.66851 24.1544V19.6361L5.39532 17.4081C5.20008 17.2145 5.04481 16.9817 4.93896 16.7238C4.83311 16.466 4.7789 16.1884 4.77962 15.9081ZM22.113 7.65436C22.6843 7.65436 23.2429 7.47841 23.7179 7.14877C24.193 6.81912 24.5633 6.35059 24.7819 5.80241C25.0006 5.25423 25.0578 4.65103 24.9463 4.06909C24.8349 3.48715 24.5597 2.9526 24.1557 2.53304C23.7517 2.11348 23.2369 1.82776 22.6765 1.712C22.1162 1.59625 21.5353 1.65566 21.0074 1.88272C20.4796 2.10978 20.0284 2.4943 19.7109 2.98765C19.3935 3.481 19.2241 4.06102 19.2241 4.65436C19.2241 5.45001 19.5284 6.21307 20.0702 6.77568C20.612 7.33829 21.3468 7.65436 22.113 7.65436ZM23.5574 9.15436H20.6685C20.0904 9.15489 19.5257 9.33581 19.0478 9.67366C18.5698 10.0115 18.2007 10.4907 17.9882 11.049C18.0712 11.1086 18.1687 11.1428 18.2418 11.2173L21.4973 14.4076C21.6918 14.6017 21.8467 14.8346 21.9524 15.0924C22.0582 15.3502 22.1127 15.6275 22.1127 15.9076C22.1127 16.1878 22.0582 16.4651 21.9524 16.7229C21.8467 16.9806 21.6918 17.2136 21.4973 17.4076L19.2241 19.6365V24.1544C19.2241 24.5522 19.3762 24.9337 19.6471 25.215C19.918 25.4963 20.2854 25.6544 20.6685 25.6544H23.5574C23.9405 25.6544 24.3079 25.4963 24.5788 25.215C24.8497 24.9337 25.0018 24.5522 25.0018 24.1544V18.1544C25.3849 18.1544 25.7523 17.9963 26.0232 17.715C26.2941 17.4337 26.4463 17.0522 26.4463 16.6544V12.1544C26.4463 11.3587 26.1419 10.5956 25.6002 10.033C25.0584 9.47043 24.3236 9.15436 23.5574 9.15436ZM20.506 15.4984L17.2506 12.3081C17.1738 12.232 17.0771 12.1811 16.9726 12.1616C16.8681 12.1421 16.7604 12.1549 16.6629 12.1985C16.5653 12.242 16.4823 12.3144 16.424 12.4066C16.3658 12.4987 16.3349 12.6066 16.3352 12.7169V14.4044H10.5574V12.7169C10.5578 12.6066 10.527 12.4986 10.4687 12.4064C10.4105 12.3141 10.3275 12.2417 10.2299 12.1981C10.1324 12.1545 10.0246 12.1416 9.92009 12.1611C9.81556 12.1806 9.71885 12.2315 9.64198 12.3076L6.38657 15.4984C6.28251 15.6073 6.22412 15.7545 6.22412 15.9079C6.22412 16.0613 6.28251 16.2085 6.38657 16.3173L9.64198 19.5081C9.71888 19.5842 9.81563 19.6352 9.92021 19.6547C10.0248 19.6741 10.1326 19.6612 10.2301 19.6175C10.3277 19.5739 10.4107 19.5014 10.4689 19.4091C10.5271 19.3168 10.5579 19.2087 10.5574 19.0984V17.4044H16.3352V19.0984C16.3347 19.2087 16.3655 19.3168 16.4237 19.4091C16.4818 19.5014 16.5649 19.5739 16.6625 19.6175C16.76 19.6612 16.8678 19.6741 16.9724 19.6547C17.0769 19.6352 17.1737 19.5842 17.2506 19.5081L20.506 16.3173C20.6101 16.2085 20.6685 16.0613 20.6685 15.9079C20.6685 15.7545 20.6101 15.6073 20.506 15.4984Z" fill="#F286A4"/>
</g>
<defs>
<clipPath id="clip0_296_713">
<rect width="26" height="27" fill="white" transform="translate(0.446289 0.154358)"/>
</clipPath>
</defs>
</svg>
            <div class="text-content">
                <p>                <strong>Set Clear Intentions</strong></br>
Set your intention whether it be looking for friend or professional networking.</p>
            </div>
        </div>


            <div class="icon-and-text">
           <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_296_719)">
<path d="M8.88379 17.0294H12.2588V18.7169H7.19629V11.9669H8.88379V17.0294ZM8.88379 8.59186C9.65723 8.59186 10.4043 8.69293 11.125 8.89508C11.8457 9.09723 12.5181 9.37848 13.1421 9.73883C13.7661 10.0992 14.333 10.5386 14.8428 11.0572C15.3525 11.5757 15.792 12.147 16.1611 12.7711C16.5303 13.3951 16.8159 14.0674 17.0181 14.7881C17.2202 15.5089 17.3213 16.2559 17.3213 17.0294C17.3213 17.8028 17.2202 18.5499 17.0181 19.2706C16.8159 19.9913 16.5347 20.6636 16.1743 21.2877C15.814 21.9117 15.3745 22.4786 14.856 22.9883C14.3374 23.4981 13.7661 23.9376 13.1421 24.3067C12.5181 24.6758 11.8457 24.9615 11.125 25.1636C10.4043 25.3658 9.65723 25.4669 8.88379 25.4669C8.11035 25.4669 7.36328 25.3658 6.64258 25.1636C5.92188 24.9615 5.24951 24.6802 4.62549 24.3199C4.00146 23.9595 3.43457 23.5201 2.9248 23.0015C2.41504 22.483 1.97559 21.9117 1.60645 21.2877C1.2373 20.6636 0.95166 19.9913 0.749512 19.2706C0.547363 18.5499 0.446289 17.8028 0.446289 17.0294C0.446289 16.2559 0.547363 15.5089 0.749512 14.7881C0.95166 14.0674 1.23291 13.3951 1.59326 12.7711C1.95361 12.147 2.39307 11.5801 2.91162 11.0704C3.43018 10.5606 4.00146 10.1212 4.62549 9.75201C5.24951 9.38287 5.92188 9.09723 6.64258 8.89508C7.36328 8.69293 8.11035 8.59186 8.88379 8.59186ZM8.88379 23.7794C9.81543 23.7794 10.6899 23.6036 11.5073 23.252C12.3247 22.9005 13.0366 22.4171 13.6431 21.8018C14.2495 21.1866 14.7329 20.4703 15.0933 19.6529C15.4536 18.8355 15.6338 17.961 15.6338 17.0294C15.6338 16.0977 15.458 15.2232 15.1064 14.4058C14.7549 13.5884 14.2715 12.8765 13.6562 12.2701C13.041 11.6636 12.3247 11.1802 11.5073 10.8199C10.6899 10.4595 9.81543 10.2794 8.88379 10.2794C7.95215 10.2794 7.07764 10.4551 6.26025 10.8067C5.44287 11.1583 4.73096 11.6417 4.12451 12.2569C3.51807 12.8721 3.03467 13.5884 2.67432 14.4058C2.31396 15.2232 2.13379 16.0977 2.13379 17.0294C2.13379 17.961 2.30957 18.8355 2.66113 19.6529C3.0127 20.4703 3.49609 21.1822 4.11133 21.7886C4.72656 22.3951 5.44287 22.8785 6.26025 23.2388C7.07764 23.5992 7.95215 23.7794 8.88379 23.7794ZM18.3892 8.73688H21.54V10.2794H15.6338V9.40924L18.9297 5.07184H15.9634V3.52936H21.5137V4.55768L18.3892 8.73688ZM27.4463 5.75739V6.90436H23.2275V6.25836L25.5874 2.98883H23.4648V1.84186H27.4331V2.61969L25.1919 5.75739H27.4463Z" fill="#F286A4"/>
</g>
<defs>
<clipPath id="clip0_296_719">
<rect width="27" height="27" fill="white" transform="translate(0.446289 0.154358)"/>
</clipPath>
</defs>
</svg>
            <div class="text-content">
                <p>                <strong>Control your Space</strong></br>
Set yourself to snooze anytime preventing your prompt from being visible.</p>
            </div>
        </div>





    </section>
    </br>
    <section>

    <center><a href="/config" class="pink-button">Get Started</a><center>
</div>
</section>


</body>
</html>
