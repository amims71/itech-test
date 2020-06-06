<style>
    .outer {
        width:0;
        height:0;
        position:absolute;
    }
    .inner {
        width:200px;
        height:200px;
        position:relative;
        bottom:0;
        right:0;
        background:red;
        -webkit-animation: resize 5s alternate infinite; /* Chrome, Safari, Opera */
        animation: resize 5s alternate infinite;
    }

    @-webkit-keyframes resize {
        from {width: 0px;height:0px}
        to {width: 200px;height:200px}
    }
    rom {width: 200px;height:200px}
    }
    @keyframes resize {
        from {width: 0px;height:0px}
        to {width: 200px;height:200px}
    }
</style>

<div class="outer">
    <div class="inner"></div>
</div>
