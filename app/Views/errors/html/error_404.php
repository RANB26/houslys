<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= lang('Errors.pageNotFound') ?></title>

    <style>
        @import url(https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap);

        html {
        background: radial-gradient(#000, #111);
        color: white;
        overflow: hidden;
        height: 100%;
        user-select: none;
        }

        .static {
        width: 100%;
        height: 100%;
        position: relative;
        margin: 0;
        padding: 0;
        top: -100px;
        opacity: 0.05;
        z-index: 230;
        user-select: none;
        user-drag: none;
        }

        .error {
        text-align: center;
        font-family: "Nunito Sans";
        font-size: 130px;
        font-style: italic;
        text-align: center;
        width: fit-content;
        height: fit-content;
        line-height: 60px;
        margin: auto;
        position: absolute;
        top: 0;
        bottom: 0;
        left: -60px;
        right: 0;
        animation: noise 2s linear infinite;
        overflow: default;
        }

        .error:after {
        content: '404';
        font-family: "Nunito Sans";
        font-size: 130px;
        font-style: italic;
        text-align: center;
        width: 220px;
        height: fit-content;
        line-height: 60px;
        margin: auto;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        opacity: 0;
        color: blue;
        animation: noise-1 .2s linear infinite;
        }

        .info {
        text-align: center;
        font-family: "Nunito Sans";
        font-size: 20px;
        text-align: center;
        width: 500px;
        height: fit-content;
        line-height: 60px;
        margin: auto;
        position: absolute;
        top: 140px;
        bottom: 0;
        left: 0;
        right: 0;
        animation: noise-3 1s linear infinite;
        }

        .error:before {
        content: '404';
        font-family: "Nunito Sans";
        font-size: 130px;
        font-style: italic;
        text-align: center;
        width: 220px;
        height: fit-content;
        line-height: 60px;
        margin: auto;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        opacity: 0;
        color: red;
        animation: noise-2 .2s linear infinite;
        }

        @keyframes noise-1 {
        0%, 20%, 40%, 60%, 70%, 90% {opacity: 0;}
        10% {opacity: .1;}
        50% {opacity: .5; left: -6px;}
        80% {opacity: .3;}
        100% {opacity: .6; left: 2px;}
        }

        @keyframes noise-2 {
        0%, 20%, 40%, 60%, 70%, 90% {opacity: 0;}
        10% {opacity: .1;}
        50% {opacity: .5; left: 6px;}
        80% {opacity: .3;}
        100% {opacity: .6; left: -2px;}
        }

        @keyframes noise {
        0%, 3%, 5%, 42%, 44%, 100% {opacity: 1; transform: scaleY(1);}  
        4.3% {opacity: 1; transform: scaleY(1.7);}
        43% {opacity: 1; transform: scaleX(1.5);}
        }

        @keyframes noise-3 {
        0%,3%,5%,42%,44%,100% {opacity: 1; transform: scaleY(1);}
        4.3% {opacity: 1; transform: scaleY(4);}
        43% {opacity: 1; transform: scaleX(10) rotate(60deg);}
        }
    </style>
</head>
<body>
    <div class="error">404</div>
    <br /><br />
    <span class="info"><?php echo $message?></span>
    <img src="http://images2.layoutsparks.com/1/160030/too-much-tv-static.gif" class="static" />
</body>
</html>
