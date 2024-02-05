<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calapan City Official Website</title>
    <link rel="shortcut icon" href="assets/images/logggo.png" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS (for icons) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar {
            min-height: 80px;
            background-color: #dabfff;
            margin-bottom: 20px;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            margin-right: 15px;
        }

        .navbar-brand img {
            max-height: 40px;
            margin-right: 10px;
            max-width: 160px;
        }

        .navbar-toggler {
            color: black;
            border-color: black;
        }

        .navbar-nav {
            font-weight: bold;
            justify-content: center;
            text-align: center;
        }

        .nav-item {
            margin: 0 20px;
        }

        .nav-link {
            color: black !important;
            font-size: 16px;
            display: block;
            text-align: center;
        }

        .navbar-icons {
            display: flex;
            align-items: center;
            margin-left: auto;
        }

        .navbar-icons i {
            font-size: 24px;
            margin-left: 25px;
            color: #3c096c;
            cursor: pointer;
        }

        #time-date {
            display: none;
            font-size: 16px;
            color: #3c096c;
            font-weight: bold;
        }

        .second-navbar {
            background-color: #907ad6;
            border-bottom: 1px solid #ccc;
            margin-bottom: 20px;
            min-height: 60px;
        }

        .second-navbar-nav {
            justify-content: center;
            text-align: center;
        }

        .second-nav-item {
            margin: 0 10px;
            padding: 10px 0;
        }

        .second-nav-link {
            color: #fff !important;
            font-size: 14px;
            display: block;
            text-align: center;
            transition: color 0.3s ease-in-out;
        }

        .second-nav-link:hover {
            color: #ffd700;
        }

        .second-navbar-nav {
            box-shadow: 0 4px 6px -6px #222;
        }

        .footer-content {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            background-color: #dabfff;
            padding: 2px;
            font-size: 12px;
        }

        .footer-section {
            flex: 1;
            margin: 0 10px;
            text-align: center;
        }

        .footer-section h3 {
            margin-bottom: 10px;
        }

        .social-icons {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .social-icons li {
            display: inline-block;
            margin: 0 10px;
        }

        .social-icons a {
            color: #3c096c;
            font-size: 24px;
        }

        .social-icons a:hover {
            color: #ffd700;
        }

        footer {
            text-align: center;
            background-color: #dabfff;
            padding: 5px;
            margin-top: auto;
        }

        @media (min-width: 768px) {
            .navbar-toggler {
                display: none;
            }

            #time-date {
                display: block;
            }
        }
        .nav-link:hover {
        color: #ffd700 !important;
        }

        .navbar-icons i:hover {
            color: #ffd700 !important;
        }

        .navbar form button:hover {
            background-color: #ffd700;
            color: black;
        }

        .navbar form input:focus {
            border-color: #ffd700;
            box-shadow: 0 0 0 0.2rem rgba(255, 215, 0, 0.25);
        }

        <!-- Carousel Slider -->
        .ism-slider > ol, .ism-slider > ol > li, .ism-slider > ol > li > img { width: 100%; list-style: none; margin: 0; padding: 0; }
        .ism-slider {
        overflow: hidden;
        position: relative;
        padding: 0 !important;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: default;
        z-index: 2;
        background-color: rgba(0, 0, 0, 0.1);
        -webkit-animation: ism-fadein 3s;
        -webkit-background-clip: padding-box;
        -moz-background-clip: padding;
        background-clip: padding-box;
        }
        @-webkit-keyframes ism-fadein {
        from { opacity: 0; }
        to { opacity: 1; }
        }
        @-webkit-keyframes ism-loading {
        50% { left: 120px; }
        }

        .ism-slider .ism-slides {
        list-style: none;
        position: absolute;
        height: 100%;
        top: 0;
        padding: 0 !important;
        margin-top: 0;
        margin-bottom: 0;
        z-index: 1;
        }

        .ism-slider li.ism-slide {
        height: 100%;
        overflow: hidden;
        position: absolute;
        display: block;
        top: 0;
        bottom: 0;
        margin: 0 !important;
        padding: 0 !important;
        background-color: #d5d5d5;
        text-align: center;
        }

        .ism-slider .ism-img-frame {
        display: block;
        position: absolute;
        width: 100%;
        height: 100%;
        }

        .ism-slider a.ism-image-link {
        position: absolute;
        color: inherit;
        text-decoration: none;
        display: block;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        }

        .ism-slider .ism-img {
        display: block;
        border: none;
        position: absolute;
        pointer-events: none;
        }

        .ism-button, .ism-pause-button {
        position: absolute;
        display: block;
        -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;
        border: none;
        outline: none;
        text-align:center;
        z-index: 6;
        cursor: pointer;
        padding: 0;
        background-repeat: no-repeat;
        background-position: center center;
        }

        .ism-pause-button {
        display: none;
        left: 50%;
        }

        .ism-slider:hover .ism-pause-button {
        display: block;
        }

        .ism-caption {
        -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;
        padding: 0 1em;
        text-shadow: none;
        line-height: 1.2em;
        padding: 0.25em 0.5em;
        width: auto;
        height: auto;
        text-align: center;
        visibility: hidden;
        }

        a.ism-image-link .ism-caption, a.ism-caption {
        text-decoration: none;
        font-weight: normal;
        }

        a.ism-caption:hover {
        text-decoration: underline;
        }

        .ism-caption-0 {
        z-index: 3;
        }

        .ism-caption-1 {
        z-index: 4;
        }

        .ism-caption-2 {
        z-index: 5;
        }

        .ism-radios {
        margin: 0;
        padding: 0;
        list-style: none;
        color: #fff;
        font-size: 1px;
        }

        .ism-slider .ism-radios {
        position: absolute;
        -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;
        z-index: 6;
        bottom: 5px;
        left: 0;
        right: 0;
        width: auto;
        background-color: rgba(255, 255, 255, 0.0);
        padding: 0 7px;
        height: 0;
        overflow: visible;
        }

        .ism-slider .ism-radios.ism-radios-as-thumbnails {
        bottom: 5px;
        }

        .ism-radios li {
        position: relative;
        display: inline-block;
        margin: 0 3px;
        padding: 0;
        }

        .ism-radios input.ism-radio {
        display: none;
        }

        .ism-radios label {
        display: block;
        -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;
        margin: 0;
        text-decoration: none;
        cursor: pointer;
        }

        .ism-radios-as-thumbnails label {
        -webkit-background-size: 120% auto; -moz-background-size: 120% auto; -o-background-size: 120% auto; background-size: 120% auto;
        background-position: center center;
        background-repeat: no-repeat;
        border: 2px solid rgba(255, 255, 255, 0.6);
        opacity: 0.8;
        }

        .ism-radios-as-thumbnails label:hover {
        border: 2px solid #fff;
        opacity: 1;
        }

        .ism-radios-as-thumbnails li.active label {
        border: 2px solid rgba(255, 255, 255, 1.0);
        opacity: 1;
        }

        p.ism-badge {
        margin: 0 auto;
        text-align: right;
        font-size: 10px;
        padding-top: 1px;
        color: #ccc;
        font-family: sans-serif;
        font-weight: normal;
        }

        p.ism-badge a.ism-link {
        color: inherit;
        text-decoration: none;
        margin-right: 0.25em;
        }

        p.ism-badge a.ism-link:hover {
        color: #aaa;
        text-decoration: underline;
        }

        .ism-zoom-in {
        -webkit-animation: zoomin 0.81s linear 1;
        animation: zoomin 0.81s linear 1;
        }

        @-webkit-keyframes zoomin {
        0% { -webkit-transform: scale(1.0); transform: scale(1.0); }
        100% { -webkit-transform: scale(3.0); transform: scale(3.0); }
        }
        @keyframes zoomin {
        0% { -webkit-transform: scale(1.0); transform: scale(1.0); }
        100% { -webkit-transform: scale(3.0); transform: scale(3.0); }
        }

        @-webkit-keyframes fadein {
        0% { opacity: 0; }
        100% { opacity: 1; }
        }
        @keyframes fadein {
        0% { opacity: 0; }
        100% { opacity: 1; }
        }

        @-webkit-keyframes slidein {
        0% { -webkit-transform: translate(-1200px, 0); transform: translate(-1200px, 0); }
        100% { -webkit-transform: translate(0, 0); transform: translate(0, 0); }
        }
        @keyframes slidein {
        0% { -webkit-transform: translate(-1200px, 0); transform: translate(-1200px, 0); }
        100% { -webkit-transform: translate(0, 0); transform: translate(0, 0); }
        }

        @-webkit-keyframes popin {
        50% { -webkit-transform: scale(1.2); transform: scale(1.2); }
        }
        @keyframes popin {
        50% { -webkit-transform: scale(1.2); transform: scale(1.2); }
        }

        .ism-zoom-pan {
        -webkit-animation: zoompan 20.0s linear 1;
        animation: zoompan 20.0s linear 1;
        }
        @-webkit-keyframes zoompan {
        0% { -webkit-transform: translate(0, 0) scale(1.0); transform: translate(0, 0) scale(1.0); }
        50% { -webkit-transform: translate(-5%, -5%) scale(1.3); transform: translate(-5%, -5%) scale(1.3); }
        100% { -webkit-transform: translate(0, 0) scale(1.0); transform: translate(0, 0) scale(1.0); }
        }
        @keyframes zoompan {
        0% { -webkit-transform: translate(0, 0) scale(1.0); transform: translate(0, 0) scale(1.0); }
        50% { -webkit-transform: translate(-5%, -5%) scale(1.3); transform: translate(-5%, -5%) scale(1.3); }
        100% { -webkit-transform: translate(0, 0) scale(1.0); transform: translate(0, 0) scale(1.0); }
        }

        .ism-zoom-rotate {
        -webkit-animation: zoomrotate 20.0s linear 1;
        animation: zoomrotate 20.0s linear 1;
        }
        @-webkit-keyframes zoomrotate {
        0% { -webkit-transform: rotate(0) scale(1.0); transform: rotate(0) scale(1.0); }
        50% { -webkit-transform: rotate(-5deg) scale(1.3); transform: rotate(-5deg) scale(1.3); }
        100% { -webkit-transform: rotate(0) scale(1.0); transform: rotate(0) scale(1.0); }
        }
        @keyframes zoomrotate {
        0% { -webkit-transform: rotate(0) scale(1.0); transform: rotate(0) scale(1.0); }
        50% { -webkit-transform: rotate(-5deg) scale(1.3); transform: rotate(-5deg) scale(1.3); }
        100% { -webkit-transform: rotate(0) scale(1.0); transform: rotate(0) scale(1.0); }
        }
        /* SLIDER */

        #my-slider {
            width: 900px;
            -webkit-border-radius: 5px; border-radius: 5px; 
        }

        #my-slider-ism-badge {
            width: 900px;
        }

        #my-slider:before {
            content: ''; display: block; padding-top: 30%;
        }

        #my-slider .ism-frame {
            position: absolute; top: 0; bottom: 0; left: 0; width: 100%;
        }

        #my-slider .ism-button {
            display: block;
            width: 50px; height: 100px; background-size: 16px 16px; top: 50%; margin-top: -50px;
            color: #fff; background-color: rgba(0, 0, 0, 0.3);
            display: block; visibility: visible;
        }

        #my-slider .ism-button-prev {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAs6AAALOgFkf1cNAAAC+ElEQVR42uWbT4hVZRiHn/d0JQkTURQkHE1Sa0gREbKghbpIdCMuIiKwCfIPkwvBjaQiiuVCQQgCQUF0FyWCga2qhZvrQqiFCDWQMumo4R8YREh8WvilJ7jMjDn33jPn++0v5z7P/X3vOd93OVCTqLPUzeQYtV8dVC/mBj5Tbfo0zVzAp6jb1Qf+N80c4Jerv9k6zTqDz1CPOHKadYXfpA44ep5ZQKPi4NOA08DKdl2jqCj4ZHUb8Gc74SvZAHUx8C2wsBPXKyoEPkP9Avi1U/CVaYD6MbCzk+CVEKC+BHwDrOvWdyi6BN5QtwJD3YTvSgPURcAZ4PUqLL+ig+DT1V3A5arAd6wB6gfAbqC3arfdRpvBXwROAu9X9WmzaCP8p8D1KsO3pQHqfOAs8AYQVd9oFeMIPk3dAQyktV55+HFrgLoe2Acsnmhb7cZzgjeAY8DGiXrWUDwHfF/ark5Y+P/VALUnDbk3q3qe0JYGqFPVfuAKsKQO8GNugPoecBBYSs3SGAX8BeArYCs1TTEC/EfAH3WGb9kAdTbwfap7Qc1TlMBfVj9JQ25ZDvBPBKhrgJ+B48AkMsq/v/JNYCYgmaUAiIiLwDzgc+Bejg0gIh5FxJfAAuDH7ASURNyKiNVAH3A1OwElESeAFekJMD8BScL1iNiZRAzVcUiO6V4fEU1gDrAXuJ+dgCThYUTsA+YD57MTUBJxIyLeBfqBwewElER8DbwNHMlSQJIwGBHbgVXAX9kJKIn4KQ3J/cDf2QlIEh5ExB6gB7iQnYCSiKGIeAvYAVzLTkBJxGHgHeBolgKShCsRsQVYC9zJTkBJxLk0Gw5mKSBJGE77ileAX7ITUBJxLSKWArvSBivfqK+qpxy/NCeqiA3q3W4IqMTRd0Sc5vGZ5GFyjzpXvZRVA1o8O/QCB4BbubfhNfW72g/BMYj4UL2XrYAkYVa2L021WBYDtR2CYxiSv/P436tDwO3ch+Qi9YfsXp1tIaJPHVYv5NyGOepnz/q5fwCJ0AEINjk5wQAAAABJRU5ErkJggg==);
            border-radius: 0 50px 50px 0; left: 0;
            left: 0;
        }

        #my-slider .ism-button-next {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAs6AAALOgFkf1cNAAACy0lEQVR42uWbS2hUVxyHv78PLKKiFgXBiIgvBEVKwZWL4kJrF7oQCSpoAlYkuhCyq4hQ2goqSBFBsNBCoXShbgp15XsTQSGKqKj1QdTYFCVQiuDic5FcGkQhj0nm3vl/6+Ge+X3zO2fumTkXhoi6S51NVtQbapfallVAh//Toc7KLED1jbpPnZJVQMF99fPMAgqOqZ9mFqD6UP06s4CC8+r0MucZN8rX/wJ4pu5VP8nYgIHcU5dna8BAFgM31e8rvUiOoAHvt2FHZgEFf6iTs0yBD/EV0K3uVidkFAAwFTgB3FKXZBRQsBS4q+5XZ2YUUPAtcEVtzioAYBnwm/q7OimjgILNwAt1Z1YBADOAk+ptdUFGAQDRPy0equ213GBVRcBADgOX1Y1ZBQAsB86qP4/0BqqqAgq292+3W7IKAJgNnFI71XkZBRQ5VgBP1DZ1WjYBAzkOXFLXZhUAsBI4p55Qx2cUULAbeKxuyyoAYC7wi3pdnZNRQJHzs/5FslWdmk1AwUTgJ+Ciui6jAACBWcDfGQX0At8A8yPiBsCEROHPA80R0ZNtEXwKtETEmvfDZ2jAIeDHiHjxsRc0ogCBl8DGiOjIdiv8H3AQaBpM+EZrwFVgU0S8zLYd7gLaImL1UMM3QgOOAUcjomu4F6iqgH+AzRFxoRabhCrxlr6/zppqEb5qDbgGbIiI7lpvE8vOc6A9IlbVOnwVGnAS+CEinozWAGUV8BrYGhF/jvZAZZwCh4B5YxG+bA3oBNZHxPOxHLQMDegG9kfEyrEOX4YG/AociIhH9XoD9RLQC7RGxJl6168eU+Aofb/JnSnB9BvTBtwBvhzN7/SyNqAH+C4ilpUt/LAY4lnh0+pCGolBCuhVt9CIDPKhqco8WVrLRfAvYG1EPKjSB1qLRfAVcARYVLXwtZgC5+pxxL3eAq6p/47kaFrVBexRmxolzzsZ+iOF4pXTWQAAAABJRU5ErkJggg==);
            border-radius: 50px 0 0 50px; right: 0;
            right: 0;
        }

        #my-slider .ism-pause-button {
            width: 50px; height: 50px; background-size: 16px 16px; top: 50%; margin-top: -25px; border-radius: 25px; margin-left: -25px;
            color: #fff; background-color: rgba(0, 0, 0, 0.3); background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAc0lEQVR42u3SsQkAIAxFQeP+O38XsBKxMPfKgCQcjqHe1W6YJFeXVNXJuxd3zO4/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAID0RwuEoAh40yYcSQAAAABJRU5ErkJggg==);
        }

        #my-slider .ism-pause-button.ism-play {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAs6AAALOgFkf1cNAAACy0lEQVR42uWbS2hUVxyHv78PLKKiFgXBiIgvBEVKwZWL4kJrF7oQCSpoAlYkuhCyq4hQ2goqSBFBsNBCoXShbgp15XsTQSGKqKj1QdTYFCVQiuDic5FcGkQhj0nm3vl/6+Ge+X3zO2fumTkXhoi6S51NVtQbapfallVAh//Toc7KLED1jbpPnZJVQMF99fPMAgqOqZ9mFqD6UP06s4CC8+r0MucZN8rX/wJ4pu5VP8nYgIHcU5dna8BAFgM31e8rvUiOoAHvt2FHZgEFf6iTs0yBD/EV0K3uVidkFAAwFTgB3FKXZBRQsBS4q+5XZ2YUUPAtcEVtzioAYBnwm/q7OimjgILNwAt1Z1YBADOAk+ptdUFGAQDRPy0equ213GBVRcBADgOX1Y1ZBQAsB86qP4/0BqqqAgq292+3W7IKAJgNnFI71XkZBRQ5VgBP1DZ1WjYBAzkOXFLXZhUAsBI4p55Qx2cUULAbeKxuyyoAYC7wi3pdnZNRQJHzs/5FslWdmk1AwUTgJ+Ciui6jAACBWcDfGQX0At8A8yPiBsCEROHPA80R0ZNtEXwKtETEmvfDZ2jAIeDHiHjxsRc0ogCBl8DGiOjIdiv8H3AQaBpM+EZrwFVgU0S8zLYd7gLaImL1UMM3QgOOAUcjomu4F6iqgH+AzRFxoRabhCrxlr6/zppqEb5qDbgGbIiI7lpvE8vOc6A9IlbVOnwVGnAS+CEinozWAGUV8BrYGhF/jvZAZZwCh4B5YxG+bA3oBNZHxPOxHLQMDegG9kfEyrEOX4YG/AociIhH9XoD9RLQC7RGxJl6168eU+Aofb/JnSnB9BvTBtwBvhzN7/SyNqAH+C4ilpUt/LAY4lnh0+pCGolBCuhVt9CIDPKhqco8WVrLRfAvYG1EPKjSB1qLRfAVcARYVLXwtZgC5+pxxL3eAq6p/47kaFrVBexRmxolzzsZ+iOF4pXTWQAAAABJRU5ErkJggg==);
        }

        #my-slider .ism-button:hover {
            background-color: rgba(0, 0, 0, 0.6);
        }

        #my-slider .ism-pause-button:hover {
            background-color: rgba(0, 0, 0, 0.6);
        }

        #my-slider .ism-radios {
            display: block;
            height: 20px;
            text-align: center;
        }

        #my-slider .ism-radios label {
            width: 20px; height: 20px;
            border-radius: 10px;
            color: #000; background-color: rgba(0, 0, 0, 0.2); border: 2px solid rgba(255, 255, 255, 0.7);
        }

        #my-slider .ism-radios li.active label {
            background-color: rgba(255, 255, 255, 1.0);
        }

        #my-slider .ism-radios label:hover {
            border: 2px solid rgba(255, 255, 255, 1.0);
        }


        /* SLIDES */

        #my-slider .ism-slide-0 .ism-img-frame {
            width: 100%;
        }

        #my-slider .ism-slide-0 .ism-img {
            width: 100%;
            top: 50%; -webkit-transform: translateY(-50%); -moz-transform: translateY(-50%); -ms-transform: translateY(-50%); transform: translateY(-50%);
        }

        #my-slider .ism-slide-1 .ism-img-frame {
            width: 100%;
        }

        #my-slider .ism-slide-1 .ism-img {
            width: 100%;
            top: 50%; -webkit-transform: translateY(-50%); -moz-transform: translateY(-50%); -ms-transform: translateY(-50%); transform: translateY(-50%);
        }

        #my-slider .ism-slide-2 .ism-img-frame {
            width: 100%;
        }

        #my-slider .ism-slide-2 .ism-img {
            width: 100%;
            top: 50%; -webkit-transform: translateY(-50%); -moz-transform: translateY(-50%); -ms-transform: translateY(-50%); transform: translateY(-50%);
        }

        #my-slider .ism-slide-3 .ism-img-frame {
            width: 100%;
        }

        #my-slider .ism-slide-3 .ism-img {
            width: 100%;
            top: 50%; -webkit-transform: translateY(-50%); -moz-transform: translateY(-50%); -ms-transform: translateY(-50%); transform: translateY(-50%);
        }

        #my-slider .ism-slide-4 .ism-img-frame {
            width: 100%;
        }

        #my-slider .ism-slide-4 .ism-img {
            width: 100%;
            top: 50%; -webkit-transform: translateY(-50%); -moz-transform: translateY(-50%); -ms-transform: translateY(-50%); transform: translateY(-50%);
        }


        /* CAPTIONS */

        #my-slider .ism-slide-0 .ism-caption-0.ism-caption-anim {
            -webkit-animation: fadein 0.5s; animation: fadein 0.5s;
        }

        #my-slider .ism-slide-0 .ism-caption-1.ism-caption-anim {
            -webkit-animation: fadein 0.5s; animation: fadein 0.5s;
        }

        #my-slider .ism-slide-0 .ism-caption-2.ism-caption-anim {
            -webkit-animation: fadein 0.5s; animation: fadein 0.5s;
        }

        #my-slider .ism-slide-1 .ism-caption-0.ism-caption-anim {
            -webkit-animation: fadein 0.5s; animation: fadein 0.5s;
        }

        #my-slider .ism-slide-1 .ism-caption-1.ism-caption-anim {
            -webkit-animation: fadein 0.5s; animation: fadein 0.5s;
        }

        #my-slider .ism-slide-1 .ism-caption-2.ism-caption-anim {
            -webkit-animation: fadein 0.5s; animation: fadein 0.5s;
        }

        #my-slider .ism-slide-2 .ism-caption-0.ism-caption-anim {
            -webkit-animation: fadein 0.5s; animation: fadein 0.5s;
        }

        #my-slider .ism-slide-2 .ism-caption-1.ism-caption-anim {
            -webkit-animation: fadein 0.5s; animation: fadein 0.5s;
        }

        #my-slider .ism-slide-2 .ism-caption-2.ism-caption-anim {
            -webkit-animation: fadein 0.5s; animation: fadein 0.5s;
        }

        #my-slider .ism-slide-3 .ism-caption-0.ism-caption-anim {
            -webkit-animation: fadein 0.5s; animation: fadein 0.5s;
        }

        #my-slider .ism-slide-3 .ism-caption-1.ism-caption-anim {
            -webkit-animation: fadein 0.5s; animation: fadein 0.5s;
        }

        #my-slider .ism-slide-3 .ism-caption-2.ism-caption-anim {
            -webkit-animation: fadein 0.5s; animation: fadein 0.5s;
        }

        #my-slider .ism-slide-4 .ism-caption-0.ism-caption-anim {
            -webkit-animation: fadein 0.5s; animation: fadein 0.5s;
        }

        #my-slider .ism-slide-4 .ism-caption-1.ism-caption-anim {
            -webkit-animation: fadein 0.5s; animation: fadein 0.5s;
        }

        #my-slider .ism-slide-4 .ism-caption-2.ism-caption-anim {
            -webkit-animation: fadein 0.5s; animation: fadein 0.5s;
        }

        #my-slider .ism-slide-0 .ism-caption-0 {
            font-size: 1.25em;
            font-family: sans-serif;
            position: absolute; top: 10%;
            left: 5%;
            border-radius: 4px;
            border: none;
            color: #fff; background-color: rgba(0, 0, 0, 0.70);
        }

        #my-slider .ism-slide-0 .ism-caption-1 {
            font-size: 1.25em;
            font-family: sans-serif;
            position: absolute; top: 60%;
            left: 40%;
            border-radius: 4px;
            border: none;
            color: #fff; background-color: rgba(0, 0, 0, 0.70);
        }

        #my-slider .ism-slide-0 .ism-caption-2 {
            font-size: 1.25em;
            font-family: sans-serif;
            position: absolute; top: 20%;
            left: 60%;
            border-radius: 4px;
            border: none;
            color: #fff; background-color: rgba(0, 0, 0, 0.70);
        }

        #my-slider .ism-slide-1 .ism-caption-0 {
            font-size: 1.25em;
            font-family: sans-serif;
            position: absolute; top: 10%;
            left: 5%;
            border-radius: 4px;
            border: none;
            color: #fff; background-color: rgba(0, 0, 0, 0.70);
        }

        #my-slider .ism-slide-1 .ism-caption-1 {
            font-size: 1.25em;
            font-family: sans-serif;
            position: absolute; top: 60%;
            left: 40%;
            border-radius: 4px;
            border: none;
            color: #fff; background-color: rgba(0, 0, 0, 0.70);
        }

        #my-slider .ism-slide-1 .ism-caption-2 {
            font-size: 1.25em;
            font-family: sans-serif;
            position: absolute; top: 20%;
            left: 60%;
            border-radius: 4px;
            border: none;
            color: #fff; background-color: rgba(0, 0, 0, 0.70);
        }

        #my-slider .ism-slide-2 .ism-caption-0 {
            font-size: 1.25em;
            font-family: sans-serif;
            position: absolute; top: 10%;
            left: 5%;
            border-radius: 4px;
            border: none;
            color: #fff; background-color: rgba(0, 0, 0, 0.70);
        }

        #my-slider .ism-slide-2 .ism-caption-1 {
            font-size: 1.25em;
            font-family: sans-serif;
            position: absolute; top: 60%;
            left: 40%;
            border-radius: 4px;
            border: none;
            color: #fff; background-color: rgba(0, 0, 0, 0.70);
        }

        #my-slider .ism-slide-2 .ism-caption-2 {
            font-size: 1.25em;
            font-family: sans-serif;
            position: absolute; top: 20%;
            left: 60%;
            border-radius: 4px;
            border: none;
            color: #fff; background-color: rgba(0, 0, 0, 0.70);
        }

        #my-slider .ism-slide-3 .ism-caption-0 {
            font-size: 1.25em;
            font-family: sans-serif;
            position: absolute; top: 10%;
            left: 5%;
            border-radius: 4px;
            border: none;
            color: #fff; background-color: rgba(0, 0, 0, 0.70);
        }

        #my-slider .ism-slide-3 .ism-caption-1 {
            font-size: 1.25em;
            font-family: sans-serif;
            position: absolute; top: 60%;
            left: 40%;
            border-radius: 4px;
            border: none;
            color: #fff; background-color: rgba(0, 0, 0, 0.70);
        }

        #my-slider .ism-slide-3 .ism-caption-2 {
            font-size: 1.25em;
            font-family: sans-serif;
            position: absolute; top: 20%;
            left: 60%;
            border-radius: 4px;
            border: none;
            color: #fff; background-color: rgba(0, 0, 0, 0.70);
        }

        #my-slider .ism-slide-4 .ism-caption-0 {
            font-size: 1.25em;
            font-family: sans-serif;
            position: absolute; top: 10%;
            left: 5%;
            border-radius: 4px;
            border: none;
            color: #fff; background-color: rgba(0, 0, 0, 0.70);
        }

        #my-slider .ism-slide-4 .ism-caption-1 {
            font-size: 1.25em;
            font-family: sans-serif;
            position: absolute; top: 60%;
            left: 40%;
            border-radius: 4px;
            border: none;
            color: #fff; background-color: rgba(0, 0, 0, 0.70);
        }

        #my-slider .ism-slide-4 .ism-caption-2 {
            font-size: 1.25em;
            font-family: sans-serif;
            position: absolute; top: 20%;
            left: 60%;
            border-radius: 4px;
            border: none;
            color: #fff; background-color: rgba(0, 0, 0, 0.70);
        }

    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo.png" alt="Logo" class="img-fluid">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="announcements">Announcements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login">Login</a>
                    </li>
                </ul>
            </div>
            <div id="time-date"></div>
            <div class="navbar-icons">
                <i class="fa fa-bell"></i>
                <i class="fa fa-envelope"></i>
                <i class="fa fa-user"></i>
            </div>
        </div>
    </nav>

    <nav class="navbar second-navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets/images/loggo.png" alt="Logo" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#secondNavbarNav"
                aria-controls="secondNavbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="secondNavbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Entertainment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Politics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Music</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Travels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Science</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Business</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Technology</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            More
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Item 1</a>
                            <a class="dropdown-item" href="#">Item 2</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Another Item</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-light" type="submit">Search</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel Slider -->
        <div class="ism-slider" data-transition_type="zoom" data-image_fx="zoompan" id="my-slider">
        <ol>
            <li>
            <img src="assets/images/carousel1.jpg">
            <div class="ism-caption ism-caption-0"></div>
            </li>
            <li>
            <img src="assets/images/carousel2.jpg">
            <div class="ism-caption ism-caption-0"></div>
            </li>
            <li>
            <img src="assets/images/carousel2.jpg">
            <div class="ism-caption ism-caption-0"></div>
            </li>
            <li>
            <img src="assets/images/pic2.png">
            <div class="ism-caption ism-caption-0"></div>
            </li>
            <li>
            <img src="assets/images/pic1.png">
            <div class="ism-caption ism-caption-0"></div>
            </li>
        </ol>
        </div>
        <p class="ism-badge" id="my-slider-ism-badge"><a class="ism-link" href="http://imageslidermaker.com" rel="nofollow"></a></p>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section contact-us-section">
                <h3>Overview</h3>
                <p>Home<br>About Us<br>Contact Us<br>Announcements</p>
            </div>
            <div class="footer-section contact-us-section">
                <h3>Contact Us</h3>
                <p>Calapan City, Guibatan<br>Oriental MIMAROPA 5201<br>Phone: (123) 456-7890<br>Email:
                    lgu.calapancity@gmail.com</p>
            </div>

            <div class="footer-section social-media-section">
                <h3>Follow Us</h3>
                <ul class="social-icons">
                    <li><a href="#" class="facebook"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#" class="instagram"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>

            <div class="footer-section legal-section">
                <h3>Legal</h3>
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
        </div>

        <p><strong>&copy; 2024 Calapan City Official Website | All Rights Reserved</strong></p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript for Time and Date -->
    <script>
        function updateTimeDate() {
            const currentDate = new Date();
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric', hour12: true };
            const formattedDate = currentDate.toLocaleDateString('en-US', options);

            document.getElementById('time-date').textContent = formattedDate;
        }

        setInterval(updateTimeDate, 1000);
        updateTimeDate();

        document.addEventListener('DOMContentLoaded', function () {
            var dropdownTrigger = document.getElementById('navbarDropdown');
            var dropdownMenu = document.getElementById('navbarDropdownMenu');

            dropdownTrigger.addEventListener('click', function () {
                dropdownMenu.classList.toggle('show');
            });

            window.addEventListener('click', function (event) {
                if (!event.target.matches('.dropdown-toggle')) {
                    var dropdowns = document.getElementsByClassName('dropdown-menu');
                    for (var i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            });
        });




        (function(){function e(b,c){this.selector=null;c?this.nodes=c:"string"==typeof b?(this.selector=b,this.nodes=document.querySelectorAll(b)):this.nodes=[b];this.length=this.nodes.length;this.el=this.nodes[0]}function d(b){return new e(b)}function k(b,c){function l(a,c,d){a=a||{};e();!1!==c&&r();N=n=f=null;p=-1;C=z=D=E=null;A=!1;B=null;F=!1;q=null;k(a);u();S(f.transition_type,!0);n.find("#"+b+" .ism-caption").css("visibility","hidden");T();ca();x(f.play_type);da();setTimeout(function(){!0!==d&&h()},
1E3)}function e(){d("#"+b+"-ism-loading-mask").remove();var a=document.createElement("DIV");a.id=b+"-ism-loading-mask";a.style.position="absolute";a.style.zIndex=10;a.style.top=0;a.style.bottom=0;a.style.left=0;a.style.right=0;a.style.backgroundColor="#eee";d("#"+b).el.appendChild(a)}function h(){d("#"+b).show();1==d("#"+b+"-ism-loading-mask").length&&d("#"+b+"-ism-loading-mask").fadeOut(400,function(){d("#"+b+"-ism-loading-mask").remove();O(0);U(0)})}function k(a){for(var c in G){var g=typeof G[c];
void 0==a[c]&&"object"!=g&&(g=d("#"+b).data(c),void 0!=g&&("true"===g?g=!0:"false"===g&&(g=!1),a[c]=g))}f=a||{};for(c in G)void 0==f[c]&&(f[c]=G[c]);f.captions=[];a=d("#"+b+" ol > li");c=a.length;for(g=0;g<c;g++){f.captions[g]=[];for(var l=0;3>l;l++){var e={enable:V[l].enable,delay:V[l].delay},t=d(a.get(g)).find(".ism-caption-"+l);1==t.length&&(e.enable=!0,t=t.data("delay"),isNaN(t)||(e.delay=parseInt(t)));f.captions[g][l]=e}}}function r(){g();W();q&&q.unbindEventListeners();X();d("#"+b+" .ism-radios input.ism-radio, #"+
b+" .ism-radios .ism-radio-label").off("click",H);d("#"+b+" .ism-radios input.ism-radio, #"+b+" .ism-radios .ism-radio-label").off("touchstart",H);Y();d("#"+b+" .ism-button").remove();d("#"+b+" .ism-radios").remove();d("#"+b+" .ism-cloned").remove();for(d("#"+b+" .ism-tmp-clone").remove();0<d("#"+b+" .ism-frame").length;)d("#"+b+" .ism-slides").unwrap();0<d("#"+b+" .ism-img-frame").length&&d("#"+b+" .ism-img").unwrap();d("#"+b+" .ism-caption").removeAttr("style");d("#"+b+" .ism-slide").show();d("#"+
b+" .ism-slide").removeAttr("style");d("#"+b+" .ism-slides").removeAttr("style");d("#"+b+" .ism-img").removeClass("ism-img");d("#"+b+" .ism-slide").removeClass("ism-slide ism-slide-0 ism-slide-1 ism-slide-2 ism-slide-3 ism-slide-4 ism-slide-5 ism-slide-6 ism-slide-7 ism-slide-8 ism-slide-9");d("#"+b+" .ism-slides").removeClass("ism-slides");d("#"+b).removeClass("active")}function u(){n=d("#"+b+" ol");N=100/d("#"+b+" ol > li").length;p=0;n.addClass("ism-slides");d("#"+b+" .ism-slides > li").addClass("ism-slide");
d("#"+b+" .ism-slides > .ism-slide > img, #"+b+" .ism-slides > .ism-slide > a > img").addClass("ism-img");n.find("li").each(function(a){this.addClass("ism-slide-"+a)});d("#"+b).wrapInner("<div class='ism-frame'></div>");n=d("#"+b+" ol.ism-slides");d("#"+b+" .ism-img").wrap("<div class='ism-img-frame'></div>")}function m(){return d("#"+b+" .ism-slide").length}function x(a){f.play_type=a;Y();d("#"+b+" .ism-pause-button").remove();f.pause_button&&"manual"!=f.play_type&&(n.after("<div class='ism-pause-button'>&nbsp;</div>"),
C=d("#"+b+" .ism-pause-button"),C.on("click",I),C.on("touchstart",I));v()}function v(){A=!0;d("#"+b+" .ism-pause-button").removeClass("ism-play");"manual"!=f.play_type&&(clearTimeout(B),B=setTimeout(a,f.interval))}function a(){var a=p+1;A&&"manual"!=f.play_type&&("once"==f.play_type&&p==m()-2?(y(a),g()):"once-rewind"==f.play_type&&p==m()-1?(y(0),g()):("loop"==f.play_type&&p==m()-1?y(0):y(a),v()))}function g(){A=!1;clearTimeout(B);B=null;d("#"+b+" .ism-pause-button").addClass("ism-play")}function t(a,
b){a!=p&&(g(),y(a,b))}function T(){f.buttons&&(n.after("<div class='ism-button ism-button-prev'>&nbsp;</div><div class='ism-button ism-button-next'>&nbsp;</div>"),E=d("#"+b+" .ism-button-prev"),D=d("#"+b+" .ism-button-next"),E.on("click",J),E.on("touchstart",J),D.on("click",K),D.on("touchstart",K))}function X(){d("#"+b+" .ism-button-prev").off("click",J);d("#"+b+" .ism-button-prev").off("touchstart",J);d("#"+b+" .ism-button-next").off("click",K);d("#"+b+" .ism-button-next").off("touchstart",K)}function J(a){a&&
a.preventDefault&&a.preventDefault();a&&a.stopPropagation&&a.stopPropagation();t(p-1)}function K(a){a&&a.preventDefault&&a.preventDefault();a&&a.stopPropagation&&a.stopPropagation();t(p+1)}function ca(){if(f.radios){d("#"+b).append("<ul class='ism-radios'></ul>");z=d("#"+b+" .ism-radios");"thumbnail"==f.radio_type&&z.addClass("ism-radios-as-thumbnails");for(var a=0;a<m();a++)0==a?z.append("<li class='ism-radio-"+a+" active'><input type='radio' name='ism-radio' class='ism-radio' id='ism-radio-"+a+
"' checked='checked' /><label class='ism-radio-label' for='ism-radio-"+a+"'></label></li>"):z.append("<li class='ism-radio-"+a+"'><input type='radio' name='ism-radio' class='ism-radio' id='ism-radio-"+a+"' /><label class='ism-radio-label' for='ism-radio-"+a+"'></label></li>");d("#"+b+" .ism-radios input.ism-radio, #"+b+" .ism-radios .ism-radio-label").on("click",H);d("#"+b+" .ism-radios input.ism-radio, #"+b+" .ism-radios .ism-radio-label").on("touchstart",H)}}function H(a){a.preventDefault&&a.preventDefault();
a.stopPropagation&&a.stopPropagation();a=d(a.target.parentNode).index();t(a)}function Z(a){f.radios&&(d("#"+b+" .ism-radios li").removeClass("active"),a=d("#"+b+" .ism-radios li").get(a),d(a).addClass("active"),d(a).find("input").attr("checked","checked"))}function Y(){d("#"+b+" .ism-pause-button").off("click",I);d("#"+b+" .ism-pause-button").off("touchstart",I)}function I(a){a.preventDefault();a.stopPropagation();A?g():v()}function da(){var a=d("#"+b).get(0),c=n.get(0);q=new Dragdealer(a,c,{steps:m(),
x:0,speed:.2,loose:!0,requestAnimationFrame:!0,dragStartCallback:function(){g()},dragStopCallback:function(a,b){new_slide_index=q.getStep()[0]-1;f.pause_button?g():v();var c=new_slide_index,d=p;p=c;P("afterswipe",[c]);Z(c);L(d,c,!1)},onAfterGlide:function(){q.setStep(p+1,1,!0)}});window.onload=function(){setTimeout(function(){q.reflow()},150);setTimeout(function(){q.reflow()},600)}}function aa(){q&&(q.setStep(p+1,1,!0),q.reflow())}function P(a,b){Q[a]&&Q[a].apply(this,b)}function S(a,c){if(1==c||
a!=f.transition_type){f.transition_type=a;d("#"+b+" .ism-slide").removeClass("ism-zoom-in");d("#"+b+" .ism-slide").show();var g=m();n.css("width",100*g+"%");n.find(".ism-slide").each(function(a){a=N*a+"%";this.css("width",100/g+"%");this.css("left",a)})}}function y(a,b){if(!0!==F&&a!=p){F=!0;var c=p;a=parseInt(a);0>a?a=m()-1:a>=m()&&(a=0);var g=a;Z(g);p=g;P("beforetransition",[g]);"instant"==f.transition_type?(g=a,q.setStep(g+1,1,!0),L(c,g,!0,b)):"slide"==f.transition_type?ea(c,a,b):"fade"==f.transition_type?
ba(c,a,!1,b):"zoom"==f.transition_type&&ba(c,a,!0,b)}}function ea(a,b,c){var g=b/(m()-1);q.startSlide(g,function(){L(a,b,!0,c)})}function ba(a,c,g,l){d("#"+b+" li.ism-slide").removeClass("ism-zoom-in");var t=d("#"+b+" li.ism-slide-"+a),e=n.clone();e.addClass("ism-slides-clone");var h=c/(m()-1),h=q.getOffsetsByRatios([h,0]);e.css("transform","translateX("+h[0]+"px)");e.insertAfter(n.el);g&&t.addClass("ism-zoom-in");g=e.get(0);n.fadeInto(g,2*f.transition_duration,function(){q.setStep(c+1,1,!0);d("#"+
b+" .ism-slides-clone").remove();d("#"+b+" .ism-slides").show();d("#"+b+" .ism-slides").css("opacity",null);L(a,c,!0,l)})}function L(a,c,g,l){c=parseInt(c);d("#"+b+" .ism-slides-clone").remove();d("#"+b+" .ism-slides").show();d("#"+b+" li.ism-slide").removeClass("ism-zoom-in");g&&aa();l&&l();O(c);U(c);F=!1;P("aftertransition",[c])}function O(a){W();"none"!=f.image_fx&&("zoompan"==f.image_fx?d("#"+b+" .ism-slide-"+a+" .ism-img-frame").addClass("ism-zoom-pan"):"zoomrotate"==f.image_fx&&d("#"+b+" .ism-slide-"+
a+" .ism-img-frame").addClass("ism-zoom-rotate"))}function W(){d("#"+b+" .ism-slide .ism-img-frame").removeClass("ism-zoom-pan");d("#"+b+" .ism-slide .ism-img-frame").removeClass("ism-zoom-rotate")}function U(a){n.find(".ism-caption").css("visibility","hidden");n.find(".ism-caption").removeClass("ism-caption-anim");R(a,0);R(a,1);R(a,2)}function R(a,b){f.captions[a]&&1==f.captions[a][b].enable&&setTimeout(function(){n.find(".ism-slide-"+a+" .ism-caption-"+b).css("visibility","visible");n.find(".ism-slide-"+
a+" .ism-caption-"+b).addClass("ism-caption-anim")},f.captions[a][b].delay)}var G={transition_type:"slide",play_type:"manual",interval:7E3,image_fx:"none",buttons:!0,radios:!0,radio_type:"button",pause_button:!0,transition_duration:350,swipe:!0},V=[{enable:!1,delay:0},{enable:!1,delay:200},{enable:!1,delay:400}],f,n,N,p,E,D,z,C,A,B,F,q,Q={};l(c,!1,c.prevent_stop_loading||!1);this.init=l;this.deinit=r;this.stopLoading=h;this.transition=y;this.listen=function(a,b){Q[a]=b};this.reflow=aa;this.setTransitionType=
S;this.setPlayType=x;this.setInterval=function(a){f.interval=a};this.setImageFx=function(a){a!=f.image_fx?(f.image_fx=a,O(p)):f.image_fx=a};this.setCaptionEnable=function(a,b,c){f.captions[a][b].enable=c};this.setCaptionDelay=function(a,b,c){f.captions[a][b].delay=c};this.enableButtons=function(a){!0!==a||f.buttons||(X(),d("#"+b+" .ism-button").remove(),T())};this.enableRadios=function(a){};this.setRadioType=function(a){"thumbnail"==a?d("#"+b+" .ism-radios").addClass("ism-radios-as-thumbnails"):d("#"+
b+" .ism-radios").removeClass("ism-radios-as-thumbnails")};this.getSlideCount=m;this.getActiveSlideIndex=function(){return p};this.setElementId=function(a){b=document.getElementById(b).id=a}}e.prototype.get=function(b){return this.nodes[b]};e.prototype.find=function(b){b=this.el.querySelectorAll(b);return new e(null,b)};e.prototype.index=function(){for(var b=this.el,c=0;null!=(b=b.previousSibling);)c++;return c};e.prototype.each=function(b){for(var c=0;c<this.nodes.length;c++){var d=new e(this.nodes[c]);
b.call(d,c,d)}};e.prototype.remove=function(){for(var b=0;b<this.nodes.length;b++){var c=this.nodes[b];c.parentNode.removeChild(c)}};e.prototype.removeAttr=function(b){for(var c=0;c<this.nodes.length;c++)this.nodes[c].removeAttribute(b)};e.prototype.attr=function(b,c){var d=this.el;if(void 0!=c)d.setAttribute(b,c);else return d.getAttribute(b)};e.prototype.data=function(b){return this.el.getAttribute("data-"+b)};e.prototype.hasClass=function(b){var c=this.el;return c.classList?c.classList.contains(b):
(new RegExp("(^| )"+b+"( |$)","gi")).test(c.className)};e.prototype.addClass=function(b){for(var c=0;c<this.nodes.length;c++){var d=this.nodes[c];d.classList?d.classList.add(b):d.className+=" "+b}};e.prototype.removeClass=function(b){for(var c=0;c<this.nodes.length;c++){var d=this.nodes[c];d.classList?d.classList.remove(b.split(" ")):d.className=d.className.replace(new RegExp("(^|\\b)"+b.split(" ").join("|")+"(\\b|$)","gi")," ")}};e.prototype.show=function(){for(var b=0;b<this.nodes.length;b++){var c=
this.nodes[b];c&&c.style&&(c.style.display="")}};e.prototype.hide=function(){for(var b=0;b<this.nodes.length;b++){var c=this.el;c&&c.style&&(c.style.display="none")}};e.prototype.css=function(b,c){for(var d=0;d<this.nodes.length;d++)this.nodes[d].style[b]=c};e.prototype.fadeOut=function(b,c){e.crossFade(this.el,null,b,c)};e.prototype.fadeIn=function(b,c){e.crossFade(null,this.el,b,c)};e.prototype.fadeInto=function(b,c,d){e.crossFade(this.el,b,c,d)};e.crossFade=function(b,c,d,e){b=b||{style:{}};c=
c||{style:{}};d=d||400;var h=1,k=0;b.style.opacity=h;c.style.opacity=k;b.style.filter="";c.style.filter="";var r=+new Date,u,m=function(){u=(new Date-r)/d;h-=u;k+=u;b.style.opacity=h;c.style.opacity=k;b.style.filter="alpha(opacity="+100*h|NaN;c.style.filter="alpha(opacity="+100*k|NaN;r=+new Date;0<h?window.requestAnimationFrame&&requestAnimationFrame(m)||setTimeout(m,16):(b.style.opacity=0,c.style.opacity=1,b.style.filter="",c.style.filter="",e&&e())};m()};e.prototype.wrap=function(b){for(var c=0;c<
this.nodes.length;c++){var d=this.nodes[c],k=(new e(d)).index(),h=d.outerHTML,w=d.parentNode;d.insertAdjacentHTML("beforebegin",b);w.removeChild(d);w.childNodes[k].innerHTML=h}};e.prototype.wrapInner=function(b){var c=this.el,d=c.innerHTML;c.innerHTML=b;c.firstChild.innerHTML=d};e.prototype.unwrap=function(){var b=this.el;b.parentNode.outerHTML=b.parentNode.innerHTML};e.prototype.after=function(b){this.el.insertAdjacentHTML("afterend",b)};e.prototype.append=function(b){this.el.insertAdjacentHTML("beforeend",
b)};e.prototype.insertAfter=function(b){b.parentNode.insertBefore(this.el,b.nextSibling)};e.prototype.clone=function(){return new e(this.el.cloneNode(!0))};e.prototype.on=function(b,c){for(var d=0;d<this.nodes.length;d++){var e=this.nodes[d];e.addEventListener?e.addEventListener(b,c):e.attachEvent("on"+b,function(){c.call(e)})}};e.prototype.off=function(b,c){for(var d=0;d<this.nodes.length;d++){var e=this.nodes[d];e&&(e.removeEventListener?e.removeEventListener(b,c):e.detachEvent("on"+b,c))}};d.ready=
function(b){"complete"===document.readyState?setTimeout(b,1):document.addEventListener?document.addEventListener("DOMContentLoaded",b,!1):document.attachEvent("onreadystatechange",function(){"complete"===document.readyState&&b()})};window.ISM=window.ISM||{};window.ISM.Slider=k;window.ISM.Config=window.ISM.Config||{};window.ISM.instances=[];d.ready(function(){if(!0!==window.ISM.Config.no_instantiation)for(var b=d(".ism-slider"),c=0;c<b.length;c++){var e=b.get(c);e.id=e.id||"ism-slider-"+c;window.ISM.instances.push(new k(e.id,
{}))}})})();
(function(e,d){"function"===typeof define&&define.amd?define(d):e.Dragdealer=d()})(this,function(){function e(a){var b=["Webkit","Moz","ms","O"],c=document.documentElement.style;if(void 0!==c[a])return a;a=a.charAt(0).toUpperCase()+a.substr(1);for(var d=0;d<b.length;d++)if(void 0!==c[b[d]+a])return b[d]+a}var d=function(a,b,c){this.options=this.applyDefaults(c||{});this.bindMethods();this.wrapper=a;this.handle=b;this.init();this.bindEventListeners()};d.prototype={defaults:{disabled:!1,horizontal:!0,
vertical:!1,slide:!0,steps:0,snap:!1,loose:!1,speed:.1,xPrecision:0,yPrecision:0,activeClass:"active",css3:!0,tapping:!0,afterSwipeCallback:function(){}},init:function(){if(this.options.css3){var a=this.handle;r.backfaceVisibility&&r.perspective&&(a.style[r.perspective]="1000px",a.style[r.backfaceVisibility]="hidden")}this.value={prev:[-1,-1],current:[this.options.x||0,this.options.y||0],target:[this.options.x||0,this.options.y||0]};this.offset={wrapper:[0,0],mouse:[0,0],prev:[-999999,-999999],current:[0,
0],target:[0,0]};this.change=[0,0];this.stepRatios=this.calculateStepRatios();this.sliding=this.tapping=this.dragging=this.activity=!1;this.slide_count=0;this.reflow();this.options.disabled&&this.disable()},applyDefaults:function(a){for(var b in this.defaults)a.hasOwnProperty(b)||(a[b]=this.defaults[b]);return a},calculateStepRatios:function(){var a=[];if(1<=this.options.steps)for(var b=0;b<=this.options.steps-1;b++)a[b]=1<this.options.steps?b/(this.options.steps-1):0;return a},setWrapperOffset:function(){this.offset.wrapper=
w.get(this.wrapper)},calculateBounds:function(){var a={top:this.options.top||0,bottom:-(this.options.bottom||0)+this.wrapper.offsetHeight,left:this.options.left||0,right:-(this.options.right||0)+this.wrapper.offsetWidth};a.availWidth=a.right-a.left-this.handle.offsetWidth;a.availHeight=a.bottom-a.top-this.handle.offsetHeight;return a},calculateValuePrecision:function(){var a=this.options.xPrecision||Math.abs(this.bounds.availWidth),b=this.options.yPrecision||Math.abs(this.bounds.availHeight);return[a?
1/a:0,b?1/b:0]},bindMethods:function(){this.requestAnimationFrame="function"===typeof this.options.customRequestAnimationFrame?k(this.options.customRequestAnimationFrame,window):k(m,window);this.cancelAnimationFrame="function"===typeof this.options.customCancelAnimationFrame?k(this.options.customCancelAnimationFrame,window):k(x,window);this.animateWithRequestAnimationFrame=k(this.animateWithRequestAnimationFrame,this);this.animate=k(this.animate,this);this.onHandleMouseDown=k(this.onHandleMouseDown,
this);this.onHandleTouchStart=k(this.onHandleTouchStart,this);this.onDocumentMouseMove=k(this.onDocumentMouseMove,this);this.onWrapperTouchMove=k(this.onWrapperTouchMove,this);this.onWrapperMouseDown=k(this.onWrapperMouseDown,this);this.onWrapperTouchStart=k(this.onWrapperTouchStart,this);this.onDocumentMouseUp=k(this.onDocumentMouseUp,this);this.onDocumentTouchEnd=k(this.onDocumentTouchEnd,this);this.onHandleClick=k(this.onHandleClick,this);this.onWindowResize=k(this.onWindowResize,this)},bindEventListeners:function(){b(this.handle,
"mousedown",this.onHandleMouseDown);b(this.handle,"touchstart",this.onHandleTouchStart);b(document,"mousemove",this.onDocumentMouseMove);b(this.wrapper,"touchmove",this.onWrapperTouchMove);b(this.wrapper,"mousedown",this.onWrapperMouseDown);b(this.wrapper,"touchstart",this.onWrapperTouchStart);b(document,"mouseup",this.onDocumentMouseUp);b(document,"touchend",this.onDocumentTouchEnd);b(this.handle,"click",this.onHandleClick);b(window,"resize",this.onWindowResize);this.animate(!1,!0);this.interval=
this.requestAnimationFrame(this.animateWithRequestAnimationFrame)},unbindEventListeners:function(){c(this.handle,"mousedown",this.onHandleMouseDown);c(this.handle,"touchstart",this.onHandleTouchStart);c(document,"mousemove",this.onDocumentMouseMove);c(this.wrapper,"touchmove",this.onWrapperTouchMove);c(this.wrapper,"mousedown",this.onWrapperMouseDown);c(this.wrapper,"touchstart",this.onWrapperTouchStart);c(document,"mouseup",this.onDocumentMouseUp);c(document,"touchend",this.onDocumentTouchEnd);c(this.handle,
"click",this.onHandleClick);c(window,"resize",this.onWindowResize);this.cancelAnimationFrame(this.interval)},onHandleMouseDown:function(a){a.target&&"A"==a.target.tagName&&0<=a.target.className.search(/ism-caption/)&&(document.location=a.target.href);h.refresh(a);l(a);M(a);this.activity=!1;this.startDrag()},onHandleTouchStart:function(a){a.target&&"A"==a.target.tagName&&0<=a.target.className.search(/ism-caption/)&&(document.location=a.target.href);h.refresh(a);M(a);this.activity=!1;this.startDrag()},
onDocumentMouseMove:function(a){h.refresh(a);this.dragging&&(this.activity=!0,l(a))},onWrapperTouchMove:function(a){h.refresh(a);!this.activity&&this.draggingOnDisabledAxis()?this.dragging&&this.stopDrag():(l(a),this.activity=!0)},onWrapperMouseDown:function(a){a.target&&0<=a.target.className.search(/ism-(button|radio|caption)/)||(h.refresh(a),l(a),this.startTap())},onWrapperTouchStart:function(a){h.refresh(a);l(a);this.startTap()},onDocumentMouseUp:function(a){this.stopDrag();this.stopTap();a.target&&
0<=a.target.className.search(/ism-(button|radio|caption)/)||this.options.afterSwipeCallback()},onDocumentTouchEnd:function(a){this.stopDrag();this.stopTap();this.options.afterSwipeCallback()},onHandleClick:function(a){a.target&&0<=a.target.className.search(/ism-(button|radio)/)||!this.activity||(l(a),M(a))},onWindowResize:function(a){this.reflow()},enable:function(){this.disabled=!1;this.handle.className=this.handle.className.replace(/\s?disabled/g,"")},disable:function(){this.disabled=!0;this.handle.className+=
" disabled"},reflow:function(){this.setWrapperOffset();this.bounds=this.calculateBounds();this.valuePrecision=this.calculateValuePrecision();this.updateOffsetFromValue()},getStep:function(){return[this.getStepNumber(this.value.target[0]),this.getStepNumber(this.value.target[1])]},getValue:function(){return this.value.target},setStep:function(a,b,c){this.setValue(this.options.steps&&1<a?(a-1)/(this.options.steps-1):0,this.options.steps&&1<b?(b-1)/(this.options.steps-1):0,c)},setValue:function(a,b,
c){this.setTargetValue([a,b||0]);c&&(this.groupCopy(this.value.current,this.value.target),this.updateOffsetFromValue(),this.callAnimationCallback())},startTap:function(){!this.disabled&&this.options.tapping&&(this.tapping=!0,this.setWrapperOffset(),this.setTargetValueByOffset([h.x-this.offset.wrapper[0]-this.handle.offsetWidth/2,h.y-this.offset.wrapper[1]-this.handle.offsetHeight/2]))},stopTap:function(){!this.disabled&&this.tapping&&(this.tapping=!1,this.setTargetValue(this.value.current))},startDrag:function(){this.disabled||
(this.dragging=!0,this.interval=this.requestAnimationFrame(this.animateWithRequestAnimationFrame),this.setWrapperOffset(),this.offset.mouse=[h.x-w.get(this.handle)[0],h.y-w.get(this.handle)[1]],this.wrapper.className.match(this.options.activeClass)||(this.wrapper.className+=" "+this.options.activeClass),this.callDragStartCallback())},stopDrag:function(){if(!this.disabled&&this.dragging){this.dragging=!1;var a=this.groupClone(this.value.current);if(this.options.slide){var b=this.change;a[0]+=4*b[0];
a[1]+=4*b[1]}this.setTargetValue(a);this.wrapper.className=this.wrapper.className.replace(" "+this.options.activeClass,"");this.callDragStopCallback()}},callAnimationCallback:function(){var a=this.value.current;this.options.snap&&1<this.options.steps&&(a=this.getClosestSteps(a));this.groupCompare(a,this.value.prev)||("function"==typeof this.options.animationCallback&&this.options.animationCallback.call(this,a[0],a[1]),this.groupCopy(this.value.prev,a))},callTargetCallback:function(){"function"==typeof this.options.callback&&
this.options.callback.call(this,this.value.target[0],this.value.target[1])},callDragStartCallback:function(){"function"==typeof this.options.dragStartCallback&&this.options.dragStartCallback.call(this,this.value.target[0],this.value.target[1])},callDragStopCallback:function(){"function"==typeof this.options.dragStopCallback&&this.options.dragStopCallback.call(this,this.value.target[0],this.value.target[1])},startSlide:function(a,b){this.slide_callback=b;this.sliding=!0;this.value.target[0]=a;this.slide_start=
this.value.current[0];this.step_size=Math.abs(this.value.target[0]-this.value.current[0]);this.interval=this.requestAnimationFrame(this.animateWithRequestAnimationFrame)},animateWithRequestAnimationFrame:function(a){a?(this.timeOffset=this.timeStamp?a-this.timeStamp:0,this.timeStamp=a):this.timeOffset=25;this.sliding?this.animateSlide():this.animate();if(this.sliding||this.dragging||this.value.target[0]!=this.value.current[0])this.interval=this.requestAnimationFrame(this.animateWithRequestAnimationFrame);
else this.options.onAfterGlide()},animate:function(a,b){if(!a||this.dragging){if(this.dragging){var c=this.groupClone(this.value.target);this.setTargetValueByOffset([h.x-this.offset.wrapper[0]-this.offset.mouse[0],h.y-this.offset.wrapper[1]-this.offset.mouse[1]],this.options.loose);this.change=[this.value.target[0]-c[0],this.value.target[1]-c[1]]}(this.dragging||b)&&this.groupCopy(this.value.current,this.value.target);if(this.dragging||this.glide()||b)this.updateOffsetFromValue(),this.callAnimationCallback()}},
glide:function(){var a=[this.value.target[0]-this.value.current[0],this.value.target[1]-this.value.current[1]];if(!a[0]&&!a[1])return!1;Math.abs(a[0])>this.valuePrecision[0]||Math.abs(a[1])>this.valuePrecision[1]?(this.value.current[0]+=a[0]*Math.min(this.options.speed*this.timeOffset/25,1),this.value.current[1]+=a[1]*Math.min(this.options.speed*this.timeOffset/25,1)):this.groupCopy(this.value.current,this.value.target);return!0},animateSlide:function(){for(var a=this.value.target[0]-this.value.current[0],
b=0<=a?1:-1,a=Math.abs(a),c=(this.value.current[0]-this.slide_start)/(this.value.target[0]-this.slide_start),d=c-.5,d=(-3*d*d+.8)*this.step_size*.08;d>a;)d*=.5;.995<c?(this.groupCopy(this.value.current,this.value.target),this.sliding=!1,this.slide_callback()):this.value.current[0]+=b*d;this.updateOffsetFromValue();this.renderHandlePosition();isNaN(c)},updateOffsetFromValue:function(){this.offset.current=this.options.snap?this.getOffsetsByRatios(this.getClosestSteps(this.value.current)):this.getOffsetsByRatios(this.value.current);
this.groupCompare(this.offset.current,this.offset.prev)||(this.renderHandlePosition(),this.groupCopy(this.offset.prev,this.offset.current))},renderHandlePosition:function(){var a="";this.options.css3&&r.transform?(this.options.horizontal&&(a+="translateX("+this.offset.current[0]+"px)"),this.handle.style[r.transform]=a):this.options.horizontal&&(this.handle.style.left=this.offset.current[0]+"px")},setTargetValue:function(a,b){var c=b?this.getLooseValue(a):this.getProperValue(a);this.groupCopy(this.value.target,
c);this.offset.target=this.getOffsetsByRatios(c);this.callTargetCallback()},setTargetValueByOffset:function(a,b){var c=this.getRatiosByOffsets(a),c=b?this.getLooseValue(c):this.getProperValue(c);this.groupCopy(this.value.target,c);this.offset.target=this.getOffsetsByRatios(c)},getLooseValue:function(a){var b=this.getProperValue(a);return[b[0]+(a[0]-b[0])/4,b[1]+(a[1]-b[1])/4]},getProperValue:function(a){a=this.groupClone(a);a[0]=Math.max(a[0],0);a[1]=Math.max(a[1],0);a[0]=Math.min(a[0],1);a[1]=Math.min(a[1],
1);(!this.dragging&&!this.tapping||this.options.snap)&&1<this.options.steps&&(a=this.getClosestSteps(a));return a},getRatiosByOffsets:function(a){return[this.getRatioByOffset(a[0],this.bounds.availWidth,this.bounds.left),this.getRatioByOffset(a[1],this.bounds.availHeight,this.bounds.top)]},getRatioByOffset:function(a,b,c){return b?(a-c)/b:0},getOffsetsByRatios:function(a){return[this.getOffsetByRatio(a[0],this.bounds.availWidth,this.bounds.left),this.getOffsetByRatio(a[1],this.bounds.availHeight,
this.bounds.top)]},getOffsetByRatio:function(a,b,c){return Math.round(a*b)+c},getStepNumber:function(a){return this.getClosestStep(a)*(this.options.steps-1)+1},getClosestSteps:function(a){return[this.getClosestStep(a[0]),this.getClosestStep(a[1])]},getClosestStep:function(a){for(var b=0,c=1,d=0;d<=this.options.steps-1;d++)Math.abs(this.stepRatios[d]-a)<c&&(c=Math.abs(this.stepRatios[d]-a),b=d);return this.stepRatios[b]},groupCompare:function(a,b){return a[0]==b[0]&&a[1]==b[1]},groupCopy:function(a,
b){a[0]=b[0];a[1]=b[1]},groupClone:function(a){return[a[0],a[1]]},draggingOnDisabledAxis:function(){return!this.options.horizontal&&h.xDiff>h.yDiff||!this.options.vertical&&h.yDiff>h.xDiff}};for(var k=function(a,b){return function(){return a.apply(b,arguments)}},b=function(a,b,c){a.addEventListener?a.addEventListener(b,c,!1):a.attachEvent&&a.attachEvent("on"+b,c)},c=function(a,b,c){a.removeEventListener?a.removeEventListener(b,c,!1):a.detachEvent&&a.detachEvent("on"+b,c)},l=function(a){a||(a=window.event);
a.preventDefault&&a.preventDefault();a.returnValue=!1},M=function(a){a||(a=window.event);a.stopPropagation&&a.stopPropagation();a.cancelBubble=!0},h={x:0,y:0,xDiff:0,yDiff:0,refresh:function(a){a||(a=window.event);"mousemove"==a.type?this.set(a):a.touches&&this.set(a.touches[0])},set:function(a){var b=this.x,c=this.y;if(a.clientX||a.clientY)this.x=a.clientX,this.y=a.clientY;else if(a.pageX||a.pageY)this.x=a.pageX-document.body.scrollLeft-document.documentElement.scrollLeft,this.y=a.pageY-document.body.scrollTop-
document.documentElement.scrollTop;this.xDiff=Math.abs(this.x-b);this.yDiff=Math.abs(this.y-c)}},w={get:function(a){var b={left:0,top:0};void 0!==a.getBoundingClientRect&&(b=a.getBoundingClientRect());return[b.left,b.top]}},r={transform:e("transform"),perspective:e("perspective"),backfaceVisibility:e("backfaceVisibility")},u=["webkit","moz"],m=window.requestAnimationFrame,x=window.cancelAnimationFrame,v=0;v<u.length&&!m;++v)m=window[u[v]+"RequestAnimationFrame"],x=window[u[v]+"CancelAnimationFrame"]||
window[u[v]+"CancelRequestAnimationFrame"];m||(m=function(a){return setTimeout(a,25)},x=clearTimeout);return d});

    </script>

</body>

</html>
